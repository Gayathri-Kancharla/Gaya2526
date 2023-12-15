<?php
require_once("project.php");
session_start();

$getbalance=mysqli_query($conn,"SELECT balance FROM account where status='1' ")or
die(mysqli_error($conn));
while($res=mysqli_fetch_object($getbalance)){
    $currentbalance=$res->balance;
}
if(isset($_POST["dip"])){
    $amount=$_POST["diposit"];
   
    $three=$currentbalance+$amount;

    $updatebls=mysqli_query($conn,"UPDATE account SET balance='$three' where status='1' ")or
    die(mysqli_error($conn));

    $insertw=mysqli_query($conn,"INSERT into transactions(deposit,status)values('$amount','1')");

}


?>

<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
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
            justify-content: center;
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

        .Login{
            height:10vh;
            display: flex;
            justify-content: center;
            align-items: center;
            
        }
        .card-body{
                
        }

    </style>
    </head>
<body>

    <div class="container-fluid Login">
        <div class="card MainLogin" style="width: 28rem; height: 28rem;">
            <div class="card-body">
           
            <h3 class="card-title text-center">Cash Deposit</h3>
                <form method="POST">
                <div class="mb-3">
    <label for="validationCustom05" class="form-label">ENTER AMOUNT HERE,YOU WANT TO DEPOSIT</label>
    <input type="text" name="withdraw" class="form-control" id="validationCustom05" pattern="[0-9]+" title="Please enter only numbers" required value="">
</div><br>
                    <div class="position-absolute start-50 translate-middle abc">
                    <button type="submit" name="dip" id="dip" value="submit" class="btn btn-primary">submit</button>
                    </div>
                </form><br><br>
                <div class="position-absolute start-50 translate-middle abc">
                       <form action="http://localhost/gayathri/trans.php">
                         <button class="btn btn-primary" type="submit">Back</button>
                        </form>
            </div>
            </div>
        </div>
        <br>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        <?php
        if(isset($_POST["dip"])){
            echo "document.addEventListener('DOMContentLoaded', function(){
                Swal.fire({
                    icon:'success',
                    title:'deposited successful!',
                    showConfirmButton: false,
                    timer:1500 
                });
                })";
        }
        ?>
    </script>
</body>
    </html>