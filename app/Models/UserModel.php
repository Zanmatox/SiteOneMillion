<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model 
{
    protected $table = 'client';
    protected $allowedFields = ['id', 'nom', 'prenom', 'email', 'mdp', 'siret', 'modifie_le'];

    public function CreateUser($userData)
        {

            $builder    = $this->db->table("client");
            $result     = $builder->insert($userData);

            if(    $this->db->affectedRows() == 1 )
            {
                return true;
            }
            else
            {
                return false;
            }

        }

    public function VerifyEmail($userMail)
        {
            $builder    = $this->db->table("client");

            $builder->select('id, nom, prenom, email, mdp, siret, modifie_le');
            $builder->where("email",$userMail);
            $result = $builder->get();

            if(    count( $result->getResultArray() ) == 1 )
            {
                return $result->getRowArray();
            }
            else
            {
                return false;
            }

        }
    
        public function updatedAt($id){
            $builder=$this->db->table('client');
            $builder->where('id',$id);
            $builder->update(['modifie_le'=>date('Y-m-d h:i:s')]);
            if($this->db->affectedRows()==1)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public function updateUserInfo($data, $id)
        {

            $builder    = $this->db->table("client");
            $builder->select("id, nom, prenom, email, mdp, siret, modifie_le");
            $builder->where("id",$id);
            $builder->update($data);

            if(    $this->db->affectedRows() > 0 )
            {
                return true;
            }
            else
            {
                return false;
            }

        }
}