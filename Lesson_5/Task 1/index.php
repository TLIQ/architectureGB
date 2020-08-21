<?php

function sendMSGtoUser ($text) {
    $msg = new SMS(new Facebook(new Message()));
    echo $msg->sendMsg($text);
}

sendMSGtoUser('Test');