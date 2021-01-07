<?php

namespace App\Controllers;

class OneMillionEuros extends BaseController
{
	function index()
	{
		//echo 'Hello Codeigniter 4';

        echo view('templates/header_view');
        echo view('templates/footer_view');
    }

    function login(){

        $data = [];

        helper(['form']);

        return view('login_view');
    }

    function infos(){

        $data = [];

        helper(['url']);
        helper(['form']);
        
        echo view('templates/header_view');
        echo view('infos_view');
        echo view('templates/footer_view');
    }

    function signin(){
        return view('signin');

    }
    function mdpoublie(){
        return view('mdpoublie');
    }

    function deleteacc(){
        return view('deleteacc');
    }

    function deleteaccconf(){
        return view('deleteaccconf');
    }
}
?>