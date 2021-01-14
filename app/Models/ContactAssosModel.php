<?php namespace App\Models;

use CodeIgniter\Model;

class ContactAssosModel extends Model 
{
	protected $table = 'contactassos';
    protected $primaryKey = 'id';
    protected $allowedFields = ['Nom', 'Email', 'Message'];
	
	
}