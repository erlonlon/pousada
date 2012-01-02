<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
       
        <div id="login_view">
            <h1>Login no sistema</h1>
            
            <?php 
            echo form_open('login/validate_credentials');
         
            echo form_input('username','Username');
            echo form_password('password','Password');
            echo form_submit('submit','Login');
            echo anchor('login/signup','Create Accont');
            echo form_close();
            
          
         
            
           
            ?>
            
        </div>
        <?php   $this->load->view('includes/tut_info');?>
    </body>
</html>
