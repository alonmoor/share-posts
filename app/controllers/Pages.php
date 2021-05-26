<?php
  class Pages extends Controller {
    public function __construct(){
     echo "LOADED";
     $this->userModel = $this->model('User');
    }

    public function index(){


      $users = $this->userModel->getUsers();


      if(isLoggedIn()){
        redirect('posts');
     }

      $data = [
       'users' => $users,
//        'title' => 'Users Posts',
//        'description' => 'Simple social network MVC PHP framework'
      ];

      $this->view('pages/index', $data);











    }//end

    public function about(){

     // echo "asfasfasfasf";
      $data = [
        'title' => 'About Us',
        'name' => 'alon',
        'description' => 'App to share posts with other users'
      ];

      $this->view('pages/about', $data);
    }
  }
