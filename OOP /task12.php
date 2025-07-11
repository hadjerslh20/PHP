<?php 
    class MessageBot {
        public function __call($method ,$args) {
            if(str_contains($method, "send")) {
                echo "Send the message to $args[0] <br>";
            }else {
                echo "I don't know this method $method with this parameter $args[0] <br>";
            }
        }
        public function __invoke($message) {
            echo "I recieved the message: $message <br>";
        }
        public function __clone() {
            echo "New copy was created";
        }
    }
    $bot = new MessageBot();
    $bot->sendEmail("admin@site.com");
    $bot->hello("Hadjer");
    $bot("Can I help you ?");
    $copy = clone $bot;
?>
