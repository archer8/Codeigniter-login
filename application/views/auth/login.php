<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <link href="<?php echo base_url('assets/css/bootstrap.css') ?>" rel="stylesheet">
        <style type="text/css">
            body {
                padding-top: 40px;
                padding-bottom: 40px;
                background-color: #f5f5f5;
            }

            .form-signin {
                max-width: 300px;
                padding: 19px 29px 29px;
                margin: 0 auto 20px;
                background-color: #fff;
                border: 1px solid #e5e5e5;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                border-radius: 5px;
                -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
            }
            .form-signin .form-signin-heading,
            .form-signin .checkbox {
                margin-bottom: 10px;
            }
            .form-signin input[type="text"],
            .form-signin input[type="password"] {
                font-size: 16px;
                height: auto;
                margin-bottom: 15px;
                padding: 7px 9px;
            }

        </style>
        <link href="<?php echo base_url('assets/css/bootstrqp-responsive.css'); ?>" rel="stylesheet">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Fav and touch icons -->
    </head>

    <body>

        <div class="container">


            <div id="infoMessage"><?php echo $message; ?></div>

            <?php
            $attributes = array('class' => 'form-signin');
            echo form_open("auth/login", $attributes);
            ?>
            <h2>Login</h2>

            <p>
                <?php echo form_input($identity); ?>
            </p>

            <p>
                <?php echo form_input($password); ?>
            </p>

            <p>
                <label class="checkbox">
                    <input type="checkbox" value="remember" value="1" id="remember"> Remember me
                </label>
               
            </p>


            <p><button class="btn btn-large btn-primary" value="Login" name="submit" type="submit">Sign in</button></p>
            <p><a href="forgot_password">Forgot your password?</a></p>

            <?php echo form_close(); ?>


        </div>


        <script src="<?php echo base_url('assets/js/jquery'); ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>


    </body>
</html>
