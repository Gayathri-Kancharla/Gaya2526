<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Receipt</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: url('https://www.shutterstock.com/image-vector/insert-atm-card-credit-slot-600nw-1940138038.jpg');
            /* Replace with the actual path to your image */
            background-size: 90%;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
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
            /* Replace with the path to your image */
            background-size: cover;
            background-position: center;
            filter: blur(5px);
        }

        .container-fluid {
            width: 80%;
        }

        .MainLogin {
            margin-top: 50px;
        }

        .abc {
            position: relative;
        }

        .card-title {
            margin-bottom: 30px;
        }

        .table-striped th, .table-striped td {
            text-align: center;
        }

        .navigation {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container-fluid Login">
        <div class="card MainLogin">
            <div class="card-body abc">
                <h3 class="card-title text-center">Receipt</h3>
                
                <!-- Transaction Details Table -->
                <table class="table table-striped">
                    <tbody>

                        <tr>
                            <th>Date:</th>
                            <td><?php 
                            $currentDate =date('l, F j,Y');
                            echo $currentDate;
                            ?></td>
                        </tr>
                        <tr>
                            <th>Time:</th>
                            <td>
                            <?php
                            date_default_timezone_set("Asia/kolkata");
                           echo date("h:i:sa");
                            ?>
                        </td>
                        </tr>
                    </tbody>
                </table>

                <p class="text-center"><strong>Thank you for using our services!</strong></p>
                
                <div class="navigation mt-4">
                    <a href="trans.php" class="btn btn-primary">Back to Main Menu</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
