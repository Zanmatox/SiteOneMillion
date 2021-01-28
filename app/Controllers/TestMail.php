<?php namespace App\Controllers;

use CodeIgniter\Controller;


class TestMail extends BaseController
{
	public function index()
	{
        $to = 'ckurunchi@gmail.com';
        $subject = 'test du mail controller';
        $message = 'Hello, ceci est un test';
        $email = \Config\Services::email();
        $email->setTo($to);
        $email->setFrom('onemillionseuros@gmail.com', 'test KB');
        $email->setSubject($subject);
        $email->setMessage($message);
        if($email->send())
        {
            echo "email envoyé !";
        }
        else
        {
            $data = $email->printDebugger(['headers']);
            print_r($data);
        }
	}

	//--------------------------------------------------------------------

}