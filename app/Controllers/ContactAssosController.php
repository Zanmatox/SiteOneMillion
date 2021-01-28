<?php 
namespace App\Controllers;
use App\Models\ContactAssosModel;
use CodeIgniter\Controller;

class ContactAssosController extends BaseController
{

    public function create() {
        return view('Assospage');
    }
 
    public function form() {
        helper(['form', 'url']);
        
        $input = $this->validate([
            'Nom' => 'required|min_length[2]',
            'Email' => 'required|valid_email',
            'Message' => 'required|min_length[3]'
        ]);

        $contactassosModel = new ContactAssosModel();
 
        if (!$input) {
            echo view('Assospage', [
                'validation' => $this->validator
            ]);
        } else {
            $contactassosModel->save([
                'Nom' => $this->request->getVar('Nom'),
                'Email'  => $this->request->getVar('Email'),
                'Message'  => $this->request->getVar('Message'),
            ]);          

            return $this->response->redirect(base_url('ContactAssosController/create'));
        }
    }

}