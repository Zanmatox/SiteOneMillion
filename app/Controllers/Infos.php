<?php

namespace App\Controllers;

class Infos extends BaseController
{
	function index()
	{
        $data = [];

        helper(['url']);
        helper(['form']);

        echo view('templates/header_view');
        echo view('infos_view');
        echo view('templates/footer_view');
    }
}
?>