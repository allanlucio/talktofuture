<?php
// create_product.php
require_once "../../bootstrap.php";
include "../models/MessagerFuture.php";

$message = $argv[1];
$email = $argv[2];

$message_object = new MessageFuture();
$message_object->setMessage($message);
$message_object->setEmail($email);

$entityManager->persist($message_object);
$entityManager->flush();

echo "Created Product with ID " . $message_object->getId() . "\n";