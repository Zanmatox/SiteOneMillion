<?php namespace App\Models;

use CodeIgniter\Model;

class Users_model extends Model 
{
	protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['Pseudo', 'Mdp', 'Email','SIRET'];
	
	
}