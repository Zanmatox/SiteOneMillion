<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model 
{
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

            $builder->select('id,nom,email,mdp,siret,modifie_le');
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

}