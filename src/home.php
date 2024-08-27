<?php
session_start();
if(!isset($_SESSION["uname"])){
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gym Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="style.css"> 
    <style>
        body {
            background: url('home.jpg') no-repeat center center fixed;
            background-size: cover;
        }
        .navbar {
            background-color: #343a40;
        }
        .navbar-brand {
            color: #fff;
            font-weight: bold;
            background-image: url('logo.jpg');
            background-size: contain;
            background-repeat: no-repeat;
            display: inline-block;
            width: 40px; 
            height: 40px;
            padding-left: 50px; 
        }
        .navbar-nav .nav-link {
            color: #fff;
        }
        .navbar-nav .nav-link:hover {
            color: #f8f9fa;
        }
        .dashboard-section {
            background-color: #f8f9fa;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .dashboard-section h2 {
            margin-bottom: 20px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }
        .dashboard-section a {
            display: block;
            padding: 10px 0;
            color: #007bff;
        }
        .dashboard-section a:hover {
            text-decoration: none;
            background-color: #e9ecef;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php">GYM MANAGEMENT SYSTEM</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Log out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-md-3">
                <div class="dashboard-section">
                    <h2>GYM</h2>
                    <a href="home.php?info=add_gym">ADD GYM</a>
                    <a href="home.php?info=manage_gym">VIEW GYMS</a>
                </div>
                <div class="dashboard-section">
                    <h2>PAYMENT DEPARTMENT</h2>
                    <a href="home.php?info=add_payment">ADD PAYMENT AREA</a>
                    <a href="home.php?info=manage_payment">VIEW PAYMENT AREAS</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="dashboard-section">
                    <h2>MEMBERS</h2>
                    <a href="home.php?info=add_member">ADD MEMBER</a>
                    <a href="home.php?info=manage_member">VIEW MEMBERS</a>
                </div>
                <div class="dashboard-section">
                    <h2>TRAINERS</h2>
                    <a href="home.php?info=add_trainer">ADD TRAINER</a>
                    <a href="home.php?info=manage_trainer">VIEW TRAINERS</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="dashboard-section">
                    <?php
                    @$info = $_GET['info'];
                    if ($info !== "") {
                        switch ($info) {
                            case "add_gym":
                                include('add_gym.php');
                                break;
                            case "add_payment":
                                include('add_payment.php');
                                break;
                            case "manage_payment":
                                include('manage_payment.php');
                                break;
                            case "add_member":
                                include('add_member.php');
                                break;
                            case "manage_member":
                                include('manage_member.php');
                                break;
                            case "add_trainer":
                                include('add_trainer.php');
                                break;
                            case "manage_trainer":
                                include('manage_trainer.php');
                                break;
                            case "manage_gym":
                                include('manage_gym.php');
                                break;
                            case "update_payment":
                                include('update_payment.php');
                                break;
                            case "delete_payment":
                                include('delete_payment.php');
                                break;
                            case "update_gym":
                                include('update_gym.php');
                                break;
                            case "delete_gym":
                                include('delete_gym.php');
                                break;
                            case "update_member":
                                include('update_member.php');
                                break;
                            case "delete_member":
                                include('delete_member.php');
                                break;
                            case "update_trainer":
                                include('update_trainer.php');
                                break;
                            case "delete_trainer":
                                include('delete_trainer.php');
                                break;
                            case "gym_search":
                                include('gym_search.php');
                                break;
                            case "member_search":
                                include('member_search.php');
                                break;
                            case "payment_search":
                                include('payment_search.php');
                                break;
                            case "trainer_search":
                                include('trainer_search.php');
                                break;
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
