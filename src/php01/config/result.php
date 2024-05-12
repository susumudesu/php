<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$set = htmlspecialchars($_POST['set'],ENT_QUOTES);
$request = htmlspecialchars($_POST['request'],ENT_QUOTES);

print "私の名前は、".$name."<br />";
print "ご注文の商品は、".$set."<br />";
print "注文数は、".$request;