<?php

require ("bootstrap.php");

use App\Application;
use App\SOAPClient;
use Services\SMSService\Types\Request;
use Services\SMSService\Types\MessageList;
use Services\SMSService\Types\Message;

Application::run();

$soap = new SOAPClient('SMSService');

$functionName = 'sendSms';

$request = new Request();
$request->messageList = new MessageList();
$request->messageList->message = new Message();
$request->messageList->message->phone = '79871234567';
$request->messageList->message->text = 'Тестовое сообщение 1';
$request->messageList->message->date = '2013-07-21T15:00:00.26';
$request->messageList->message->type = 15;

$result = $soap->$functionName($request);

var_dump($result);