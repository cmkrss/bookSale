<?php namespace App\Models;

use CodeIgniter\Model;

class FeedbackModel extends Model
{
      protected $table ='feedback';
      protected $allowedFields = ['fname','lname', 'email','country_code','mobile','msg'];     
}