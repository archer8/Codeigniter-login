<h1>Login Page</h1>
<?php   
            $attributes = array
            (
                'class' => 'login',
                'id'    => 'login'
             );           
            echo form_open('welcome/validate', $attributes);
            
            
            $username = array
            (
                'name'      => 'username',
                'id'        => 'username',
                'value'     => 'john',
                'maxlength' => '100',
                'size'      => '50'
            );       
            echo form_label('Username: ','username');
            echo form_input($username);
            
            
            $password = array
            (
                'name'      => 'passwor d',
                'id'        => 'password',
                'value'     => 'doe',
                'maxlength' => '100',
                'size'      => '50',
                'type'      => 'password'
            );
            echo form_label('Password: ','password');
            echo form_input($password);
            
            echo form_submit('login', 'Login');
            
            echo form_close();
?>

