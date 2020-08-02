<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Todo</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</head>

<body style="background:#e8eaf6">
    <!-- header -->
    <div>
        <nav class="indigo">
            <div class="container">
                <a class="brand-logo left" href="#">TODO APP DEMO</a>
                <ul class="right">

                    <li>
                        <i class="material-icons">how_to_reg</i>
                    </li>
                    
                    <li>
                         &nbsp; Welcome <?php echo $this->session->userdata('name')?>
                    </li>

                    <li>
                        <a href="<?php echo base_url()?>create">
                            Create New
                            <!-- <i class="material-icons">add</i> -->
                        </a>
                    </li>

                    <li>
					<a href="<?php echo base_url()?>all">
                            All
                            <!-- <i class="material-icons">menu</i> -->
                        </a>
                    </li>

                    <li>
					<a href="<?php echo base_url()?>logout">
                            Logout
                            <!-- <i class="material-icons">menu</i> -->
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>