<?php

namespace App\Controllers;

class Login extends BaseController
{
	function index()
	{
        $data = [];
        
        helper(['form']);
        
        echo view('templates/header_view');
        echo view('login_view');
        echo view('templates/footer_view');
    }

    function mdpoublie(){
        echo view('templates/header_view');
        echo view('mdpoublie');
        echo view('templates/footer_view');
    }

    function signin(){
        echo view('templates/header_view');
        echo view('signin');
        echo view('templates/footer_view');
    }
}
?>
