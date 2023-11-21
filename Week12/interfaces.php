<?php
interface APIIntegration {
    public function connect();
    public function sendRequest($request);
    public function receiveResponse();
}
class TwitterAPI implements APIIntegration{
    public function connect() {
    // Connection logic for Twitter API
    }
    public function sendRequest($request){
        // Send request to Twitter API
    }
    public function receiveResponse() {
        // Handle response from Twitter API
    }
}
?>