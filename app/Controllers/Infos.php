<?php

namespace App\Controllers;
use App\Models\UserModel;

class Infos extends BaseController
{
	private $session;

    public function __construct()
    {
        $this->session = session();
    }

    function index()
    {
        $this->session->set( "DemarrageSession", true);
        $data = [];

        helper(['url']);
        helper(['form']);

        echo view('templates/header_view');
        echo view('infos_view');
        echo view('templates/footer_view');
    }
}
?>