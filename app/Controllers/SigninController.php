<?php 
namespace App\Controllers;
use App\Models\Users_model;
use CodeIgniter\Controller;

class SignController extends BaseController
{

    public function create() {
        return view('signin');
    }
 
    public function form() {
        helper(['form', 'url']);
        
        $input = $this->validate([
            'Pseudo' => 'required|min_length[5]',
            'Mdp' => 'required|min_length[5]',
            'Email' => 'required|valid_email',
            'SIRET' => 'min_length[14]'
        ]);

        $usersModel = new Users_model();
 
        if (!$input) {
            echo view('signin', [
                'validation' => $this->validator
            ]);
        } else {
            $usersModel->save([
                'Pseudo' => $this->request->getVar('Pseudo'),
                'Mdp'  => $this->request->getVar('Mdp'),
                'Email'  => $this->request->getVar('Email'),
                'SIRET'  => $this->request->getVar('SIRET'),
            ]);          

            return $this->response->redirect(base_url('/signin/create'));
        }
    }

}