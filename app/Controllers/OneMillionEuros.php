<?php

namespace App\Controllers;

class OneMillionEuros extends BaseController
{
	function index()
	{
		//echo 'Hello Codeigniter 4';

        echo view('templates/header_view');
        echo view('accueil');
        echo view('templates/footer_view');
    }

    function login(){

        $data = [];

        helper(['form']);

        echo view('templates/header_view');
        echo view('login_view');
        echo view('templates/footer_view');
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
        echo view('templates/header_view');
        echo view('signin');
        echo view('templates/footer_view');
    }

    function mdpoublie(){
        echo view('templates/header_view');
        echo view('mdpoublie');
        echo view('templates/footer_view');
    }

    function deleteacc(){
        echo view('templates/header_view');
        echo view('deleteacc');
        echo view('templates/footer_view');
    }

    function deleteaccconf(){
        echo view('templates/header_view');
        echo view('deleteaccconf');
        echo view('templates/footer_view');
    }

    function accueil(){
        echo view('templates/header_view');
        echo view('accueil');
        echo view('templates/footer_view');
    }
}
?>