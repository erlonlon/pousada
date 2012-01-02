<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Site extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        
        $this->is_logged_in();
    }
    
   public function members_area(){
       
       $this->load->view('members_area_view');
       
   }
   
   public function is_logged_in(){
       
       $is_logged_in = $this->session->userdata('is_logged_in');
       if(!isset ($is_logged_in) || $is_logged_in != TRUE ){
           
          // echo 'Usuário sem permissão para está página,.<a href="../login">Login</a> ';
           $data['main_content'] = 'permissao_view';
                  $this->load->view('includes/template', $data);
         //  die ();
           
           
       }
       
   }
}
?>
