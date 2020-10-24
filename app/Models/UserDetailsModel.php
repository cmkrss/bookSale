<?php namespace App\Models;

use CodeIgniter\Model;

class UserDetailsModel extends Model
{
      protected $table ='user_details';
      protected $allowedFields = ['user_id','first_name','last_name', 'mail_id','phone_no','state','address','pincode'];     

      public function getUser($userId){
          return $this->asArray()
                      ->where(['user_id'=>$userId])
                      ->first();
      }

}