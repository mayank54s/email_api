<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class abc extends CI_Controller {
//controller part
public function send_mails_function(){
    $email='';  //receiver address
    $subject='';// email subject
    $emailContent='';// email content
    $this->send_mail($email,$subject,$emailContent);}

public function send_mail($to,$subject, $emailContent)  // pass message in HTML page and subject here
    {
    $from = '';              // Pass here sender mail id
    $config['protocol']    = 'smtp';
    $config['smtp_host']    = 'ssl://smtp.gmail.com';
    $config['smtp_port']    = '465';
    $config['smtp_timeout'] = '60';

    $config['smtp_user']    = '';    //Pass here sender mail id
    $config['smtp_pass']    = '';  //Pass here sender mail id password

    $config['charset']    = 'utf-8';
    $config['newline']    = "\r\n";
    $config['mailtype'] = 'html'; // or html
    $config['validation'] = TRUE; // bool whether to validate email or not 
}

}
