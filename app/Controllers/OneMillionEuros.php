<?php

namespace App\Controllers;

class OneMillionEuros extends BaseController
{
	private $session;

    public function __construct()
    {
        $this->session = session();
    }

    function index()
    {
        $this->session->set( "DemarrageSession", true);
        echo view('templates/header_view');
        echo view('accueil');
        echo view('templates/footer_view');
    }

    function deleteacc()
    {
        echo view('templates/header_view');
        echo view('deleteacc');
        echo view('templates/footer_view');
    }

    function deleteaccconf()
    {
        echo view('templates/header_view');
        echo view('deleteaccconf');
        echo view('templates/footer_view');
    }

}
?>