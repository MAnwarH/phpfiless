<?php
$name = $_POST['name'];
$last = $_POST['last'];
$date = $_POST['date'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$number = $_POST['number'];
$additional = $_POST['additional'];
$headname = $_POST['headname'];
$addresss = $_POST['addresss'];
$Arrears = $_POST['Arrears'];
$Bankruptcy = $_POST['Bankruptcy'];
$CCJs = $_POST['CCJs'];
$Defaults = $_POST['Defaults'];
$Debt = $_POST['Debt'];
$Repossessed = $_POST['Repossessed'];
$formcontent=" headname: $headname \n First Name: $name \n last Name: $last \n date: $date \n Phone: $phone \n Mobile: $number \n Additional Info: $additional \n Type: $type \n Address: $addresss \n Arrears: $Arrears \n Bankruptcy: $Bankruptcy \n CCJs: $CCJs  \n Defaults : $Defaults \n Debt : $Debt \n Repossessed : $Repossessed";
$recipient = "info@adversecreditmortgages4you.co.uk";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>