<?php
namespace Ekliptor\grpc;


use PHPUnit\Util\Exception;
use \Google\Protobuf\Internal\Message;
use Walletrpc\PingResponse;

class GrcpHttp
{
    /** @var string */
    protected $apiUrl;
    /** @var string */
    protected $apiUser;
    /** @var string */
    protected $apiPass;

    public function __construct(string $apiUrl, string $apiUser, string $apiPass)
    {
        $this->apiUrl = $apiUrl;
        $this->apiUser = $apiUser;
        $this->apiPass = $apiPass;
    }

    public function post(Message $message): ?Message {
        // here we build and serialize our protobuf message to binary data
        // and add it to our HTTP POST
        $msgStream = new \Google\Protobuf\Internal\CodedOutputStream($message->byteSize());

        if ($message->serializeToStream($msgStream) === false)
            throw new Exception("Error serializing proto message to binary stream");
        $headers = array(
            'Content-Type' => 'multipart/form-data'
        );
        $protoData = array(
            // protobuf serialization only serializes the data, not the class itself.
            // We need to know the class name so that we can unserialize it
            // TODO this could also be mapped to an enum instead of string
            'class' => get_class($message),
            'proto' => $msgStream->getData(),
        );
        $res = $this->postData($this->apiUrl, $protoData, array(), '', $headers, true);
        if (empty($res))
            return null;
        $headers = $this->parseHeader($res['header']);
        //var_dump($res);
        if (!isset($headers['proto-class']))
            throw new Exception("Response is missing the required header 'proto-class'");

        return $this->unmarshalMessage($headers['proto-class'], $res['body']);
    }

    protected function unmarshalMessage(string $protoClass, string $body): ?Message {
        switch ($protoClass) {
            case "PingResponse":
                $protoRes = new PingResponse();
                //$messageStream = new \Simple\SimpleMessage();
                $inStream = new \Google\Protobuf\Internal\CodedInputStream($body);
                if ($protoRes->parseFromStream($inStream) === false)
                    throw new Exception(sprintf("Error parsing %s message", $protoClass));
                return $protoRes;
            default:
                throw new Exception("Received unknown proto response of class: $protoClass");
        }
    }

    protected function postData(string $url, array $data_arr = array(), array $cookies = array(), string $referer = '', array $header_arr = array(), $skip_certificate_check = false)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_AUTOREFERER, true);
        //curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, TIMEOUT);
        //curl_setopt($ch, CURLOPT_USERAGENT, USER_AGENT);
        //curl_setopt($ch, CURLOPT_BUFFERSIZE, 1024*1024*50);
        //curl_setopt($ch, CURLOPT_RANGE,"1-31457280");
        if (!empty($data_arr)) // key => value
            curl_setopt($ch, CURLOPT_POSTFIELDS, @$data_arr);
        //if (!is_null($header_arr)) // strings in numeric array and NOT key => value!
            //curl_setopt($ch, CURLOPT_HTTPHEADER, $header_arr);
        //die('Data: ' . print_r($data_arr, true) . " URL: $url");
        if (!empty($cookies))
            curl_setopt($ch, CURLOPT_COOKIE, $cookies);
        if (!empty($referer))
            curl_setopt($ch, CURLOPT_REFERER, $referer);
        if ($skip_certificate_check) {
            curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, false);
        }
        curl_setopt ($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt ($ch, CURLOPT_USERPWD, $this->apiUser. ":" . $this->apiPass);
        //set_time_limit(30);
        $output = curl_exec($ch);
        if (curl_errno($ch)) {
            $output = false;
            echo 'Curl error: ' . curl_error($ch);
            curl_close($ch);
            return false;
        }
        $headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $header = substr($output, 0, $headerSize);
        $body = substr($output, $headerSize);
        curl_close($ch);
        return array('header' => $header, 'body' => $body);
    }

    protected function parseHeader(string $headers): array
    {
        $headerArr = array();
        $headers = explode("\n", $headers);
        foreach ($headers as &$head) {
            $head = trim($head);
            $curHead = explode(":", $head, 2);
            if (count($curHead) !== 2)
                continue; // invalid header
            $key = trim($curHead[0]);
            $value = trim($curHead[1]);
            $headerArr[$key] = $value;
        }
        return $headerArr;
    }
}