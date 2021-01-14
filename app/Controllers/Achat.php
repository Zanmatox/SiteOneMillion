<?php namespace App\Controllers;

class Achat extends BaseController
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
            echo view('emplacementpixel_view');
            echo view('templates/footer_view');
        }
        
        function insert()
        {
            echo view('templates/header_view');
            echo view('ajoutimagedanspixel_view');
            echo view('templates/footer_view');
        }

        function infos()
        {
            echo view('templates/header_view');
            echo view('achatpixel'); 
            echo view('templates/footer_view');
        }

        function confirm()
        {
            echo view('templates/header_view');
            echo view('ajoutimagedanspixel_view'); //à modifier avec le bon fichier
            echo view('templates/footer_view');
        }

        
	//--------------------------------------------------------------------

}
