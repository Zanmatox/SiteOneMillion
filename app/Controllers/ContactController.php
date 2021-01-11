<?php 
namespace App\Controllers;
use App\Models\ContactModel;
use CodeIgniter\Controller;

class ContactController extends BaseController
{

    public function create() {
        return view('Ompage_view');
    }
 
    public function form() {
        helper(['form', 'url']);
        
        $input = $this->validate([
            'Nom' => 'required|min_length[2]',
            'Email' => 'required|valid_email',
            'Message' => 'required|min_length[3]'
        ]);

        $contactModel = new ContactModel();
 
        if (!$input) {
            echo view('Ompage_view', [
                'validation' => $this->validator
            ]);
        } else {
            $contactModel->save([
                'Nom' => $this->request->getVar('Nom'),
                'Email'  => $this->request->getVar('Email'),
                'Message'  => $this->request->getVar('Message'),
            ]);          

            return $this->response->redirect(base_url('/ContactController/create'));
        }
    }

}