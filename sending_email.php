<?php
/*
 *
 * Created by PhpStorm.
 * User: Jipeng
 * Date: 2018/4/6
 * Time: 18:14
 */
$email = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];
mail("lukasbill@163.com", $subject,$message, "From:" . $email);
echo "Thank you for using our mail form";

