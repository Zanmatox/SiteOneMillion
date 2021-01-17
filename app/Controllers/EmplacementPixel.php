<?php namespace App\Controllers;

class EmplacementPixel extends BaseController
{
        function index()
        {
            echo view('templates/header_view');
            echo view('emplacementpixel_view');
            echo view('templates/footer_view');
        }
        
        function insert()
        {
            echo view('templates/header_view');
            echo view('accueil');
            echo view('templates/footer_view');
        }

        function infos()
        {
            echo view('templates/header_view');
            echo view('emplacementpixel_view'); 
            echo view('templates/footer_view');
        }

        function confirm()
        {
            echo view('templates/header_view');
            echo view('accueil'); 
            echo view('templates/footer_view');
        }

        
	//--------------------------------------------------------------------

}
