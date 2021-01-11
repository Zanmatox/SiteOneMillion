<?php

namespace App\Controllers;

class OneMillionEuros extends BaseController
{
	function index()
	{
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

    /*function accueil()
    {
        echo view('templates/header_view');
        echo view('accueil');
        echo view('templates/footer_view');
    }*/

    function emplacementpixel()
    {
        echo view('templates/header_view');
        echo view('emplacementpixel_view');
        echo view('templates/footer_view');
    }
}
?>