--TEST--
Bug #13962  Multiple header support
--SKIPIF--
--FILE--
<?php
error_reporting(E_ALL); // ignore E_STRICT
require_once('Mail.php');
require_once('Mail/mime.php');

$mime = new Mail_mime();

$mime->setFrom('user@from.example.com');
$r = $mime->txtHeaders(array('Received' => array('Received 1', 'Received 2')));

print_r($r); 
?>
--EXPECT--
MIME-Version: 1.0
Received: Received 1
Received: Received 2
From: user@from.example.com
