<?php namespace App\Controllers;

use App\Models\LoginModel;
use App\Models\UserDetailsModel;
use App\Models\BookDetailsModel;
use App\Models\FeedbackModel;
use App\Models\CartModel;

class Home extends BaseController
{
	public function index()
	{
		return view('login');
    }

	public function login()
    {
        $model = new LoginModel();
        $userId = $this->request->getVar('user_id');
        $password = $this->request->getVar('password');
        $data = $model->getUser($userId, $password);
        if (isset($data)) {
            $session = session();
            $loginInfo = [
                'userId' => $userId,
                'registered' => $data['registered']
            ];

            $session->set($loginInfo);
            $url = base_url('Home/home');
		    return redirect()->to($url);
		  echo "login successful";
        } else {
            $response['response'] = "Invalid Credentials";
            echo view('login', $response);
        } 
    }

	public function register()
	{
		$model = new LoginModel();
		$data=array(
			"user_id" => $this->request->getVar('user_id'),
            "password" => $this->request->getVar('password'),
            "registered" =>"no"
		);
        $model->insert($data);
        $url= base_url();
        return redirect()->to($url);	
	}
    public function logout()
    {
        $session = session();
        $session->destroy();
        $url= base_url();
        return redirect()->to($url);
	}
	
	public function home()
	{
		echo view('header');
		echo view('Home');
    }
    public function sellBooks()
    {
        echo view('header');
		echo view('sellBooks');
    }
    public function userDetails()
    {
        $session=session();
        $user= $session->userId;
        $model = new UserDetailsModel();
        $data=array(
            "userData"=>$model->getUser($user)
        );
        echo view('header');
		echo view('userDetails',$data);
    }
    public function insertUserDetails()
    {
        $model = new UserDetailsModel();
        $data=array(
            "user_id" => $this->request->getVar('user_id'),
            "first_name" => $this->request->getVar('first_name'),
            "last_name" => $this->request->getVar('last_name'), 
            "mail_id" => $this->request->getVar('mail_id'), 
            "phone_no" => $this->request->getVar('phone_no'), 
            "state" => $this->request->getVar('state'), 
            "address" => $this->request->getVar('address'), 
            "pincode" => $this->request->getVar('pincode'), 
        );
        $model->insert($data);
        $login = new LoginModel();
        $userId=$this->request->getVar('user_id');
        $registered=array(
            "registered" => "yes"
        );
        $login->where('user_id',$userId);
        $login->set($registered);
        $login->update();
        $session=session();
        $session->registered="yes";
        $url= base_url('index.php/Home/home');
        return redirect()->to($url);	
    }
    public function updateUserDetails()
    {
        $model = new UserDetailsModel();
        $data=array(
            "user_id" => $this->request->getVar('user_id'),
            "first_name" => $this->request->getVar('first_name'), 
            "last_name" => $this->request->getVar('last_name'),
            "mail_id" => $this->request->getVar('mail_id'), 
            "phone_no" => $this->request->getVar('phone_no'), 
            "state" => $this->request->getVar('state'), 
            "address" => $this->request->getVar('address'), 
            "pincode" => $this->request->getVar('pincode'), 
        );
        $userId=$this->request->getVar('user_id');
        $model->where('user_id',$userId);
        $model->set($data);
        $model->update();
        $url= base_url('index.php/Home/home');
        return redirect()->to($url);
    }
    public function insertBooks()
    {
        if ($img = $this->request->getFile('image')) {
            if ($img->isValid() && !$img->hasMoved()) {
                $newName = $img->getRandomName();
                $img->move('assets/bookImages', $newName);
            }
        }
        $session=session();
        $user= $session->userId;
        $model = new BookDetailsModel();
        $data=array(
            "user_id" => $user,
            "book_name" => $this->request->getVar('book_name'), 
            "category" => $this->request->getVar('category'), 
            "author_name" => $this->request->getVar('author_name'), 
            "edition_no" => $this->request->getVar('edition'), 
            "publisher" => $this->request->getVar('publisher'), 
            "price" => $this->request->getVar('price'), 
            "image" =>$newName 
        );
        $model->insert($data);
        $url= base_url('index.php/Home/home');
        return redirect()->to($url);	
    }
    
    public function findBooks($key,$value)
    {
        $model = new BookDetailsModel();
        $req = $model->like([$key =>$value])->findAll();
        echo json_encode($req);
    }
    public function buyBook($id,$userId)
	{
        $model = new BookDetailsModel();
        $UserModel = new UserDetailsModel();
        $values=$model->getBook($id);
        $SellerInfo=$UserModel->getUser($userId);
        $data=array("values"=>$values,"SellerInfo"=>$SellerInfo);
		echo view('header');
		echo view('buyBook',$data);
    }
    public function myBooks()
	{
        $session=session();
        $user= $session->userId;
        $model = new BookDetailsModel();
        $req = $model->where(["user_id" =>$user])->findAll();
        $cartModel = new CartModel();        
        $cartVal = $cartModel->where(["user_id" =>$user])->findAll();
        $cartBook=array();
        foreach($cartVal as $val)
        {
            $bookReq = $model->where(["id" =>$val['book_id']])->first();
            if(isset($bookReq))
            {
            $bookReq['cart_id']=$val['id'];
            array_push($cartBook,$bookReq);
            }
        }
       
        $data=array(
                    "book_list" => $req,
                    "cart" => $cartBook
                    );
       
		echo view('header');
		echo view('myBooks',$data);
        
    }
    public function feedback()
    {
        echo view('header');
		echo view('feedback');
    }
    public function insertFeedback()
    {
        $model = new FeedbackModel();
        $data=array(
            "fname" => $this->request->getVar('fname'),
            "lname" => $this->request->getVar('lname'),
            "email" => $this->request->getVar('email'),
            "country_code" => $this->request->getVar('countryCode'),
            "mobile" => $this->request->getVar('mobile'),
            "msg" => $this->request->getVar('msg')
        );
        $model->insert($data);
        $url= base_url('index.php/Home/home');
        return redirect()->to($url);
    }
    public function addCart($bookId)
    {
        $model = new CartModel();
        $session=session();
        $user= $session->userId;
        $data=array(
           "book_id" => $bookId,
           "user_id" => $user
        );
        $model->insert($data);        
      //  $url= base_url('index.php/Home/myBooks');
      //  return redirect()->to($url);
      echo json_encode("success");
    }
    public function deleteCart($id)
    {
         $model = new CartModel();
         $model->where('id', $id);
         $model->delete();
         return redirect()->back();
    }
       public function deleteMybook($id)
    {
         $model = new BookDetailsModel();
         $model->where('id', $id);
         $model->delete();
         return redirect()->back();
    }



    

}
