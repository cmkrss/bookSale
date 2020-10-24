<?php namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
      protected $table ='login';
      protected $allowedFields = ['user_id', 'password','registered'];     

      public function getUser($userId,$password){
          return $this->asArray()
                      ->where(['user_id'=>$userId,'password'=>$password])
                      ->first();
      }  


}