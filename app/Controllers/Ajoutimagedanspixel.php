<?php namespace App\Controllers;

class AjoutImageDansPixel extends BaseController
{
    private $session;

    public function __construct()
    {
        $this->session = session();
    }

    function index()
    {
        $this->session->set( "DemarrageSession", true);
    }
    function Addimgdspxl()
    {
        //<area onmouseover="d(this)" onmouseout="e(this)" shape="rect" coords="0,0,10,10" href="https://www.afpa.fr/" title="afpa.fr, centre de formation">
		requete sql = '<area onmouseover="d(this)" onmouseout="e(this)" shape="rect" coords="{$x1},{$y1},{$x2},{$y2}(db)" href="{$siteinternet}(db)" title="$titre"'								
    }

        
	

}
