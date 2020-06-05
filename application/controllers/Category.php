<?php

class Category extends CI_Controller{

    public function __construct(){
        parent::__construct();

        // loads
        $this->load->model('model_blog');
        $this->load->model('model_user');

    }

    public function index(){
        // load views
        $this->load->view('templates/header');
        $this->load->view('category');
        $this->load->view('templates/footer');
    }

    public function politic($idp){
        // load politic blogs
        $data['blogs'] = $this->model_blog->get_blog_by_category('tb_blog','Politic');
        $user_role_admin_allfield = (array) $this->model_user->getAdminAllFields('tb_user','1')->result_array();   
        
        // setup pagination        
        $total_data     = sizeof($data['blogs']);
        $data_perpage   = 6;
        $total_pages    = ceil($total_data/$data_perpage);
        $first_index    = ($idp * $data_perpage) - $data_perpage;
        $last_index     = $first_index + ($data_perpage - 1);

        // if last_index calculation is greater than last_index of real data
        // set last_index to the real last_index from data
        if($last_index >= ($total_data - 1)){
            $last_index = ($total_data - 1);
        }

        $data['idp']                = $idp;
        $data['total_pages']        = $total_pages;
        $data['first_num']          = $first_index + 1;
        $data['blogs_pagination']   = array();
        for($i = $first_index; $i <= $last_index; $i++){
            array_push($data['blogs_pagination'],$data['blogs'][$i]);
        }

        // add each blog post with writer image
        foreach ($user_role_admin_allfield as $admin) {
          for($i = 0; $i < sizeof($data['blogs_pagination']); $i++){
            if($data['blogs_pagination'][$i]['writer'] == $admin['username']){
              $data['blogs_pagination'][$i]['image_writer'] = $admin['image'];
            }
          }
        }

        // load views
        $this->load->view('templates/header');
        $this->load->view('category',$data);
        $this->load->view('templates/footer');

    }

    public function tech($idp){
        // load politic blogs
        $data['blogs'] = $this->model_blog->get_blog_by_category('tb_blog','Tech');
        $user_role_admin_allfield = (array) $this->model_user->getAdminAllFields('tb_user','1')->result_array();

        // setup pagination        
        $total_data     = sizeof($data['blogs']);
        $data_perpage   = 6;
        $total_pages    = ceil($total_data/$data_perpage);
        $first_index    = ($idp * $data_perpage) - $data_perpage;
        $last_index     = $first_index + ($data_perpage - 1);

        // if last_index calculation is greater than last_index of real data
        // set last_index to the real last_index from data
        if($last_index >= ($total_data - 1)){
            $last_index = ($total_data - 1);
        }

        $data['idp']                = $idp;
        $data['total_pages']        = $total_pages;
        $data['first_num']          = $first_index + 1;
        $data['blogs_pagination']   = array();
        for($i = $first_index; $i <= $last_index; $i++){
            array_push($data['blogs_pagination'],$data['blogs'][$i]);
        }

        // add each blog post with writer image
        foreach ($user_role_admin_allfield as $admin) {
          for($i = 0; $i < sizeof($data['blogs_pagination']); $i++){
            if($data['blogs_pagination'][$i]['writer'] == $admin['username']){
              $data['blogs_pagination'][$i]['image_writer'] = $admin['image'];
            }
          }
        }

        // load views
        $this->load->view('templates/header');
        $this->load->view('category',$data);
        $this->load->view('templates/footer');

    }

    public function entertainment($idp){
        // load politic blogs
        $data['blogs'] = $this->model_blog->get_blog_by_category('tb_blog','Entertainment');
        $user_role_admin_allfield = (array) $this->model_user->getAdminAllFields('tb_user','1')->result_array();

        // setup pagination        
        $total_data     = sizeof($data['blogs']);
        $data_perpage   = 6;
        $total_pages    = ceil($total_data/$data_perpage);
        $first_index    = ($idp * $data_perpage) - $data_perpage;
        $last_index     = $first_index + ($data_perpage - 1);

        // if last_index calculation is greater than last_index of real data
        // set last_index to the real last_index from data
        if($last_index >= ($total_data - 1)){
            $last_index = ($total_data - 1);
        }

        $data['idp']                = $idp;
        $data['total_pages']        = $total_pages;
        $data['first_num']          = $first_index + 1;
        $data['blogs_pagination']   = array();
        for($i = $first_index; $i <= $last_index; $i++){
            array_push($data['blogs_pagination'],$data['blogs'][$i]);
        }

        // add each blog post with writer image
        foreach ($user_role_admin_allfield as $admin) {
          for($i = 0; $i < sizeof($data['blogs_pagination']); $i++){
            if($data['blogs_pagination'][$i]['writer'] == $admin['username']){
              $data['blogs_pagination'][$i]['image_writer'] = $admin['image'];
            }
          }
        }

        // load views
        $this->load->view('templates/header');
        $this->load->view('category',$data);
        $this->load->view('templates/footer');

    }

    public function travel($idp){
        // load politic blogs
        $data['blogs'] = $this->model_blog->get_blog_by_category('tb_blog','Travel');
        $user_role_admin_allfield = (array) $this->model_user->getAdminAllFields('tb_user','1')->result_array();

        // setup pagination        
        $total_data     = sizeof($data['blogs']);
        $data_perpage   = 6;
        $total_pages    = ceil($total_data/$data_perpage);
        $first_index    = ($idp * $data_perpage) - $data_perpage;
        $last_index     = $first_index + ($data_perpage - 1);

        // if last_index calculation is greater than last_index of real data
        // set last_index to the real last_index from data
        if($last_index >= ($total_data - 1)){
            $last_index = ($total_data - 1);
        }

        $data['idp']                = $idp;
        $data['total_pages']        = $total_pages;
        $data['first_num']          = $first_index + 1;
        $data['blogs_pagination']   = array();
        for($i = $first_index; $i <= $last_index; $i++){
            array_push($data['blogs_pagination'],$data['blogs'][$i]);
        }

        // add each blog post with writer image
        foreach ($user_role_admin_allfield as $admin) {
          for($i = 0; $i < sizeof($data['blogs_pagination']); $i++){
            if($data['blogs_pagination'][$i]['writer'] == $admin['username']){
              $data['blogs_pagination'][$i]['image_writer'] = $admin['image'];
            }
          }
        }

        // load views
        $this->load->view('templates/header');
        $this->load->view('category',$data);
        $this->load->view('templates/footer');

    }

    public function sport($idp){
        // load politic blogs
        $data['blogs'] = $this->model_blog->get_blog_by_category('tb_blog','Sport');
        $user_role_admin_allfield = (array) $this->model_user->getAdminAllFields('tb_user','1')->result_array();

        // setup pagination        
        $total_data     = sizeof($data['blogs']);
        $data_perpage   = 6;
        $total_pages    = ceil($total_data/$data_perpage);
        $first_index    = ($idp * $data_perpage) - $data_perpage;
        $last_index     = $first_index + ($data_perpage - 1);

        // if last_index calculation is greater than last_index of real data
        // set last_index to the real last_index from data
        if($last_index >= ($total_data - 1)){
            $last_index = ($total_data - 1);
        }

        $data['idp']                = $idp;
        $data['total_pages']        = $total_pages;
        $data['first_num']          = $first_index + 1;
        $data['blogs_pagination']   = array();
        for($i = $first_index; $i <= $last_index; $i++){
            array_push($data['blogs_pagination'],$data['blogs'][$i]);
        }

        // add each blog post with writer image
        foreach ($user_role_admin_allfield as $admin) {
          for($i = 0; $i < sizeof($data['blogs_pagination']); $i++){
            if($data['blogs_pagination'][$i]['writer'] == $admin['username']){
              $data['blogs_pagination'][$i]['image_writer'] = $admin['image'];
            }
          }
        }

        // load views
        $this->load->view('templates/header');
        $this->load->view('category',$data);
        $this->load->view('templates/footer');

    }

}