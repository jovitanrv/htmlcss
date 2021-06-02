<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
    <title> <?= $title; ?> </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
    body { 
        background-color: #E2F0F1;
    }

    nav {
        background-color: #00A8A8;
        height: 50px;
        margin-bottom: 20px;
    }

    nav a {
        text-decoration: none;
        margin: 10px;
        color: white;
        font-size: 20px;
    }

    nav a:hover {
        cursor: pointer;
        color: gray;
    }

    .atas { 
        height: 100px;
        background-color: #00A8A8;
        width: 60%;
        padding-top: 3px;
        margin-left: 20%;
        margin-top: 5px;
    }

    .adm_input[type=text] {
        margin-left: 30%;
        margin-right: 30%;
        margin-bottom: 5px;
        width: 40%;
        border: none;
        line-height: 50px;
        border-bottom: 3px solid #DDD;
        padding: 10px;
        border-radius : 6px;
    }

    .adm_input[type=text]:hover {
        outline: none;
        border-bottom : 3px solid #13326D;
    }

    .profil button {
        background-color: #00A8A8;
        color: white;
        border-radius: 5px;
        padding: 5px;
        width: 100px;
        height: 50px;
        font-size: 15px;
        margin-top: 25px;
    }

    .profil button:hover {
        cursor: pointer;
        background-color: #13326D;
    }

    .profil {
        margin-top: 5%;
    }
    .adm_button {
        background-color: #00A8A8;
        color: white;
        border-radius: 5px;
        padding: 5px;
        width: 200px;
        height: 100px;
        font-size: 25px;
        margin-top: 25px;
    }




    </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm">
        <a class="navbar-brand" href="<?= site_url('admController'); ?>">
            <img src="<?php echo base_url();?>src/logo.png" style="width: 40px">
        </a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('admController'); ?>">Home</a>
            </li>
            
            <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('admController/editAkun'); ?>">Edit Profil</a>
            </li>

            <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('admController/logout'); ?>">
                    Log Out
                </a>
            </li>
        </ul>
    </nav>