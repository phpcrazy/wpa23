<?php
/**
 * Created by PhpStorm.
 * User: soethihanaung
 * Date: 3/26/16
 * Time: 6:15 PM
 */


require "vendor/autoload.php";

use Nette\Mail\Message;


$mail = new Message;
$mail->setFrom('Myanmar Links')
    ->addTo('myanmarlinks.net@gmail.com')
    ->setSubject('Order Confirmation')
    ->setBody("Hello, Your order has been accepted.");