<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('membership_model');
    }

    public function index() {
        $data['usuario'] = $this->membership_model->listar();

        $data['main_content'] = 'login_view';
        $this->load->view('includes/template', $data);
    }

    public function validate_credentials() {


        $query = $this->membership_model->validate();

        if ($query) {

            $data = array(
                'username' => $this->input->post('username'),
                'is_logged_in' => TRUE);

            $this->session->set_userdata($data);

            redirect('site/members_area');
        } else {

            $this->index();
        }
    }
    
    public function signup(){
        
       $data['main_content'] = 'signup_view';
        $this->load->view('includes/template', $data);
    }
    
    public function create_menber(){
        $this->load->library('form_validation');
        //valida nome ,erro , validade rules
        $this->form_validation->set_rules('first_name','Name','trim|required|xss_clean');
        $this->form_validation->set_rules('last_name','Last Name','trim|required|xss_clean');
        $this->form_validation->set_rules('email','Email','trim|valid_email|required|xss_clean');
        $this->form_validation->set_rules('username','Username','min_length[4]|trim|required|xss_clean');
        $this->form_validation->set_rules('password','Password','trim|required|min_length[4]|xss_clean');
        $this->form_validation->set_rules('password2','Password Confirm','trim|required|matches[password]|xss_clean');
        
        if($this->form_validation->run()== FALSE){
            
            $this->signup();
            
            
        }
        else
            {
            
            if($query = $this->membership_model->create_member())
                {
                              
                  $data['main_content'] = 'signup_sucesso_view';
                  $this->load->view('includes/template', $data);
                 }
            else
                { 
                
                $this->load->view('login_view');
                 }
           
        }
        
        
    }

}

?>
