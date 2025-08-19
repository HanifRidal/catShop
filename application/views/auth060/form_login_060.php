<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.css')?>" type="text/css" media="all">
    <!-- FONT -->
    <style>@import url('https://fonts.googleapis.com/css2?family=Poppins&family=Sofia+Sans&display=swap');</style>
    <!-- JAVASCRIPT -->
    <script src="<?=base_url('assets/js/bootstrap.bundle.min.js')?>"></script>
    <title>CATSHOP 060</title>
</head>
<body>
    <div class="container d-flex justify-content-evenly mt-5">
        <img class="" src="<?= base_url('assets/img/background.png')?>" alt="">
            <div class="card login-form w-50">             
                <div class="card-body">
                    <h2 class="card-title text-center">Hanif's Cat Shop</h2>
                    <!-- <h6 class="card-subtitle text-muted mb-5 fw-bold">Please login here!</h6> -->
                
                    <div class="d-grid mt-5 mb-4">
                        <button type="submit" class="btn btn-light btn-gmail">
                            <img src="<?= base_url('assets/img/google.png')?>" alt="Gmail" class="img-google me-2" width="30" height="30">Sign up with Gmail
                        </button>
                    </div>

                <h6 class="card-subtitle text-muted mb-4 text-center">Login with your Account</h6>

                    <form method="post">
                        <div class="form-floating mb-2 mt-3">
                            <input type="text" class="form-control" placeholder="Enter username" name="username_060" >
                            <label for="username">Username</label>
                        </div>
                        <div class="form-floating mb-2 mt-3">
                            <input type="password" class="form-control" placeholder="Enter password" name="password_060" id="exampleInputPassword1" >
                            <label for="password">Password</label>
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" onclick="show()" id="exampleCheck1">
                            <label class="text-secondary" for="exampleCheck1" >Lihat Password</label>
                            </div>

                            <div>
                                <a href="#" class="link">Forgot Password ?</a>
                            </div>
                        </div>

                        <i><?=$this->session->flashdata('msg')?></i>
                        <div class="text-danger"><?= validation_errors()?></div>

                        <div class="d-grid mt-5">
                            <input type="submit" class="btn btn-success btn-login" name="login" value="LOGIN">
                        </div>

                        <div class="mt-3">
                            <label>Not registered yet ? <a href="#" class="link">Create an account</a></label>
                        </div>
                    </form>
                </div>
            </div>
    </div>
<script>
    function show() {
        var x = document.getElementById("exampleInputPassword1");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }  
    }
</script>
</body>