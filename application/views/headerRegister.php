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
                <a class="brand-logo" href="#">TODO APP DEMO</a>
                <ul class="right">

                    <li>
                        <a href="<?php echo base_url()?>loginv">
                            Login
                            <!-- <i class="material-icons">add</i> -->
                        </a>
                    </li>

                    <li>
					<a href="<?php echo base_url()?>registerv">
                            Register
                            <!-- <i class="material-icons">menu</i> -->
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>