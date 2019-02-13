<!--
Filename:       contactus_send.php
Author:         DongWooKang
Student Number: 040846528
Course Name:    Software Development Project
Course Number:  CST8334_310
Description: 	contactus_send.php is eamil form.
-->
<?php

function emailAdmin(){

    $msg = '- Email : ' .$_POST['email'] ."\n" 
        .'- Name : ' .$_POST['name'] ."\n" 
        .'- Status : ' .$_POST['status'] ."\n"
        .'- Title : ' .$_POST['title'] ."\n"."\n"
        .'- Comment : ' .$_POST['comments'];


    return mail('dw0010651@gmail.com', 'Messages From Our Client', $msg);
    header('location: contact_us.php');

}

?>