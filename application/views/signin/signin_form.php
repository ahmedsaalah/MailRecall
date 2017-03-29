<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
    <head>
        <?php $this->load->view('signin/signinhead') ?>
    </head>
    <body>
        <div class="header">
            <img class="img-title" src="<?php echo $this->config->base_url(); ?>_/images/logo.png">
            <h1>
             Mail Recall System
            </h1>
        </div>
        <div class="loginmodal-container">
            <h1>Login to Your Account</h1><br>
            <form action="<?php echo $this->config->base_url(); ?>welcome/login" method="post">
                <input type="text" name="user" placeholder="Username">
                <input type="password" name="pass" placeholder="Password">
                <input type="submit" name="login" class="login loginmodal-submit" value="Login">
            </form>
        </div>
    </body>
</html>