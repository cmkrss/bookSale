<?php namespace App\Models;
use CodeIgniter\Model;
class BookDetailsModel extends Model
{
      protected $table ='book_details';
      protected $allowedFields = ['user_id','book_name','category','author_name','edition_no', 'publisher','price','image'];     
      public function getBook($id)
      {
          return $this->asArray()
                      ->where(['id'=>$id])
                      ->first();
      }
}