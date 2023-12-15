<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>ATM Main Menu</title>
    
    <style>
    
        body {
            margin: 0;
            padding: 0;
            background-image: url('https://www.shutterstock.com/image-vector/insert-atm-card-credit-slot-600nw-1940138038.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            display: flex;
            align-items: center;
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background-image: url('https://www.shutterstock.com/image-vector/insert-atm-card-credit-slot-600nw-1940138038.jpg');
            background-size: cover;
            background-position: center;
            filter: blur(5px);
        }
        
        
        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .a{
            font-size: 40px;
        }
        h2{
            font-family: sans-serif;
        }
        .options {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-gap: 10px;
    animation: fadeInUp 1s ease-out;
}
marquee{
    font-size: 30px;
    color:blacks;
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-weight: 600;
}
.navigation {
    margin-top: 20px;
    text-align: center;
    animation: fadeIn 1s ease-out;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

    </style>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "atm_project";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->close();

?> 

<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card">
                <div class="card-header text-center">
                    <h2>MAIN MENU</h2>
                </div>
                <div class="card-body">
    <div class="container mt-7">
    <?php
      $currentDate =date('l,F j,Y');
      echo "$currentDate";
      ?>
        <marquee>Please Select Your Tranansaction Option</marquee>
        <div class="card">
            <div class="card-body">
                <div class="options">
                    <a href="lang.html" class="btn btn-success"><i class="fa-solid fa-language"></i>Language</a>
                    <a href="cw.php" class="btn btn-success"><i class="fas fa-money-bill-wave"></i>Withdraw Cash</a>
                   <a href="dip.php" class="btn btn-success"><i class="fas fa-coins"></i>DEPOSIT</a>
                    <a href="mini.php" class="btn btn-success"><i class="fas fa-clipboard-list"></i>Get Mini Statement</a>
                    <a href="BE.php" class="btn btn-success"><i class="fas fa-chart-bar"></i>Check Balance</a>
                    <a href="receipt.php" class="btn btn-success"><i class="fas fa-money-bill-wave"></i>Pay Bill or Receipt</a>
                    <a href="bpin.php" class="btn btn-success"> <i class="fas fa-key"></i>Change ATM PIN</a>
                    <a href="moreoptions.html" class="btn btn-success"><i class="fas fa-ellipsis-v"></i>More Options</a>
                </div>
                
                <div class="navigation mt-4">
                    <a href="start.html" class="btn btn-secondary">Back</a>
                    <a href="last.php" class="btn btn-secondary">Next</a>
                </div>
            </div>
        </div>
    </div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>