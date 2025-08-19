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
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <b><a href="<?=site_url('/')?>" class=" blog-header-logo text-dark col-md-3 mb-2 mb-md-0 text-decoration-none">CatShop | HanifR</a></b>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="<?=site_url('/')?>" class="nav-link px-2 link-secondary">Home</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">Gallery</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle d-block link-dark text-decoration-none" href="#" data-bs-toggle="dropdown" aria-expanded="false">Manage Lits</a>
                    <ul class="dropdown-menu" data-bs-popper="static">
                        <li><a class="dropdown-item" href="<?=site_url('Cats060')?>">Cats</a></li>
                        <li><a class="dropdown-item" href="<?=site_url('Categories060')?>">Categories</a></li>
                        <?php if ($this->session->userdata('usertype') == 'Manager') { ?>
                            <li><a class="dropdown-item" href="<?=site_url('Cats060/sales')?>">Sale Report</a></li>
                            <li><a class="dropdown-item" href="<?=site_url('Users060')?>">Users</a></li>
                        <?php }?>
                    </ul>
                </li> 
                <li><a href="#" class="nav-link px-2 link-dark">About</a></li>
            </ul>

            <div class="dropdown text-end">
                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="<?=base_url('uploads/users/'.$this->session->userdata('photo'))?>" alt="user" width="32" height="32" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small">
                    <li><a class="dropdown-item" href="<?=site_url('Auth060/changepass')?>">Settings</a></li>
                    <li><a class="dropdown-item" href="<?=site_url('Auth060/changeprofile')?>">Profile</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="<?=site_url('Auth060/login')?>">Log in</a></li>
                    <li><a class="dropdown-item" href="<?=site_url('Auth060/logout')?>">Log out</a></li>
                </ul>
            </div>
        </header>
    </div>