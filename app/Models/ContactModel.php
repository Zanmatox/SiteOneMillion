<?php namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model 
{
	protected $table = 'contactom';
    protected $primaryKey = 'id';
    protected $allowedFields = ['Nom', 'Email', 'Message'];
	
	
}