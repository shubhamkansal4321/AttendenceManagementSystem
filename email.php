<?php
// test message
$msg = "Hello world!\nMy first email through php mail function";

// apply wordwrap($msg, 70) to make all lines of the message
// atmost 70 characters long
$msg = wordwrap($msg, 70);


$rv = mail("abc@gmail.com", "PHP mail() check", $msg);
if ($rv) {
    echo ("mail sent");
} else {
    echo ("mail not sent");
}
