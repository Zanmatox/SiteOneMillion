<?php

namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;

class Infos extends BaseController
{
    private $session;
    private $UserModel;

    public function __construct()
    {
        $this->session = session();
        $this->UserModel = new UserModel();
    }

    function index()
    {
        $data = [];
					helper(['form']);
					$model = new UserModel();
					

					if ($this->request->getMethod() == 'post') {
						//Validation
						$rules = [
							'nom' => 'required|min_length[3]',
							'email' => 'required|valid_email',
							'mdp' => 'required|min_length[6]',
							'password_confirm' => 'matches[mdp]'
							];
							
						if($this->request->getPost('password') != ''){
						$rules['mdp'] = 'required|min_length[8]|max_length[200]';
						$rules['password_confirm'] = 'matches[mdp]';
						}


						if (! $this->validate($rules)) {
							$data['validation'] = $this->validator;
						}else{

							$newData = [
								'id' => session()->get('utilisateurConnecte_id'),
								'nom' => $this->request->getPost('nom'),
								'prenom' => $this->request->getPost('prenom'),
								'email' => $this->request->getPost('email'),
								'siret' => $this->request->getPost('siret'),
								'modifie_le' => date('Y-m-d H:i:s'),
								];
								
								$this->session->set( "utilisateurConnecte_nom",$newData["nom"] );
								$this->session->set( "utilisateurConnecte_prenom",$newData["prenom"] );
								$this->session->set( "utilisateurConnecte_siret",$newData["siret"] );
							$model->save($newData);
							
							session()->setFlashdata('success', 'Successfuly Updated');
							return redirect()->to(base_url('/Infos'));

						}
					}
			
					$data['client'] = $model->where('id', session()->get('utilisateurConnecte_id'))->first();
					
		echo view('templates/header_view',$data);
        echo view('infos_view',$data);
        echo view('templates/footer_view');
    }
}
?>