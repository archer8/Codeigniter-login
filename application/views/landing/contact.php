<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Codeigniter-login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Codeigniter + Bootstrap login system.">
        <meta name="author" content="chrisganly@gmail.com">
        <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
        <style type="text/css">
            body {
                padding-top: 20px;
                padding-bottom: 40px;
            }

            /* Custom container */
            .container-narrow {
                margin: 0 auto;
                max-width: 700px;
            }
            .container-narrow > hr {
                margin: 30px 0;
            }

            /* Main marketing message and sign up button */
            .jumbotron {
                margin: 60px 0;
                text-align: center;
            }
            .jumbotron h1 {
                font-size: 72px;
                line-height: 1;
            }
            .jumbotron .btn {
                font-size: 21px;
                padding: 14px 24px;
            }

            /* Supporting marketing content */
            .marketing {
                margin: 60px 0;
            }
            .marketing p + h4 {
                margin-top: 28px;
            }
        </style>
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url('assets/ico/apple-touch-icon-144-precomposed.png'); ?>">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url('assets/ico/apple-touch-icon-114-precomposed.png'); ?>">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url('assets/ico/apple-touch-icon-72-precomposed.png'); ?>">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('assets/ico/apple-touch-icon-57-precomposed.png') ?>">
        <link rel="shortcut icon" href="<?php echo base_url('assets/ico/favicon.png'); ?>">
    </head>

    <body>

        <div class="container-narrow">

            <div class="masthead">
                <ul class="nav nav-pills pull-right">
                    <li><?php echo anchor('welcome/index', 'Home');?></li>
                    <li><?php echo anchor('welcome/install', 'Install');?></li>
                    <li class="active"><a href="#">Contact</a></li>
                </ul>
                <h3 class="muted">Generic login & permissions system.</h3>
            </div>

            <hr>


            <div class="row-fluid marketing">
                <div class="span10">
                    <h3>Contact</h3>
                    
                </div>
                <div class="span10">
                    <h4>FGHJ</h4>
                    <p>My portfolio site can be found at: <?php echo anchor('http://fghj.me/'); ?> and you can find me on github here:
                     <?php echo anchor('https://github.com/archer8'); ?></p>
                    <h4>Email</h4>
                    <p>I can be emailed at chrisganly@gmail.com</p>
                    
                </div>
            </div>

            <hr>

            <div class="footer">
                <p>Pieces put together by <?php echo anchor('http://fghj.me/', 'FGHJ'); ?></p>
            </div>

        </div> <!-- /container -->

        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->

    </body>
</html>


