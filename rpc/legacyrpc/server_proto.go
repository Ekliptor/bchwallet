package legacyrpc

import (
	"github.com/gcash/bchwallet/rpc/walletrpc"
	"github.com/golang/protobuf/proto"
	"net/http"
	"strings"
)

// Read an incoming protobuf message via HTTP multipart POST and call the corresponding
// gRPC service method to answer (via HTTP again).
func (s *Server) postClientProtoRPC(w http.ResponseWriter, r *http.Request) {
	// check the header
	contentType := r.Header.Get("content-type")
	if strings.Index(strings.ToLower(contentType), "multipart/form-data") == -1 { // key and value check is case insensitive
		log.Error("Content-Type header must be multipart/form-data on /proto, received: %s", contentType)
		http.Error(w, "400 Bad Request.",
			http.StatusBadRequest)
		return
	}

	// read the form data
	err := r.ParseMultipartForm(maxRequestSize)
	if err != nil {
		log.Error("Error parsing multipart form data: %v", err)
		http.Error(w, "413 Request Too Large.",
			http.StatusRequestEntityTooLarge)
		return
	}

	s.unserializeAndRespondProto(r.FormValue("class"), r.FormValue("proto"), w)

}

// Unarshals the proto message and writes the response via HTTP.
func (s *Server) unserializeAndRespondProto(className string, data string, w http.ResponseWriter) {
	posPackage := strings.Index(className, "\\")
	if posPackage != -1 {
		goPackage := className[:posPackage]
		if strings.ToLower(goPackage) != "walletrpc" { // every language has its own styling guides regarding upper/lower case package names
			log.Errorf("Can not unserialize proto message for unknown package %s - %s", goPackage, className)
			return
		}
		className = className[posPackage+1:]
	}
	switch className {
	case "PingRequest":
		incomingProto := &walletrpc.PingRequest{}
		err := proto.Unmarshal([]byte(data), incomingProto)
		if err != nil {
			log.Errorf("Error unmarshalling proto bufffer %s: %v", className, err)
			return
		}
		// alternativly we can use the deprecated XXX_() methods to Unmarshal as they are currently
		// compiled into bchwalled protobuffer auto-generated code

		log.Infof("Unserialized %s message: %v", className, incomingProto)

		response := &walletrpc.PingResponse{
			DemoNumber: 9999,
			DemoString: "bchwallet response",
		}
		protoBytes, err := proto.Marshal(response)
		if err != nil {
			log.Errorf("Error unmarshalling proto bufffer %s: %v", className, err)
			return
		}
		w.Header().Set("proto-class", "PingResponse")
		w.Write(protoBytes)
		// TODO instead of writing proto responses directly here we can now
		// call methods in rpcserver/server.go to only have 1 API
		// = protobuf over HTTP instead of gRPC ;)

		// TODO unmarshal more messages...
	default:
		log.Error("No proto class named %s for unserialization implemented", className)
	}
}
