<div id="login_view">
<h1>Create on Account</h1>


    <?php
    echo form_open('login/create_menber');
    echo form_fieldset('Personal Information');
    echo form_input('first_name',  set_value('first_name', 'First Name'));
    echo form_input('last_name', set_value('last_name','Last Name'));
    echo form_input('email',  set_value('email', 'Email'));
    echo form_fieldset_close();
    ?>

<?php
 echo form_fieldset('Login Info');
echo form_input('username', set_value('username', 'Username'));
echo form_input('password', set_value('password', 'Password'));
echo form_input('password2', set_value('password2', 'Password Confirm'));

echo form_submit('submit','Create Account');
  echo form_fieldset_close();
?>
    <?php 
     echo validation_errors('<p class="error"/>');
     echo form_close();
    ?>
    

</div>