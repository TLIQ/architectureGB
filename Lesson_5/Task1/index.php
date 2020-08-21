<?php
spl_autoload_register(function ($class){
    include $class.'.php';
});
function sendMSGtoUser ($text) {
    $msg = new SMS(new Facebook(new Message()));
    return $msg->sendMsg($text);
}

sendMSGtoUser('Test');
