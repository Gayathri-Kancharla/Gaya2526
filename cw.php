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
        .Login {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .MainLogin {
            width: 28rem;
            height: auto;
        }

        .abc {
            padding: 10;
        }
    </style>
</head>
<body>
    <div class="container-fluid Login">
        <div class="card MainLogin">
            <div class="card-body">
                <h5 class="card-title text-center">Cash Withdrawal</h5>
                <form method="POST">
                    <div class="mb-3">
    <label for="validationCustom05" class="form-label">ENTER AMOUNT HERE,YOU WANT TO "withdraw"</label>
    <input type="text" name="withdraw" class="form-control" id="validationCustom05" pattern="[0-9]+" title="Please enter only numbers" required value="">
</div>

                    <div class="d-grid gap-2">
                        <button type="submit" name="wdt" id="wdt" value="submit" class="btn btn-primary">SUBMIT</button>
                    </div>
                </form>
                <div class="d-grid gap-2">
                    <form action="http://localhost/gayathri/trans.php">
                        <button type="submit" class="btn btn-secondary mt-2">BACK</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
require_once("project.php");
session_start();


$getbls = mysqli_query($conn, "SELECT balance FROM account where status='1' ") or
    die(mysqli_error($conn));
while ($res = mysqli_fetch_object($getbls)) {
    $currentbalance = $res->balance;
}
if (isset($_POST["wdt"])) {
    $amount = $_POST["withdraw"];

    if ($amount <= $currentbalance) {
        $three = ($currentbalance) - ($amount);
        $updatebalance = mysqli_query($conn, "UPDATE account set balance='$three' where status='1' ") or
            die(mysqli_error($conn));

        $insertw = mysqli_query($conn, "INSERT into transactions(withdraw,status)values('$amount','1')");
        echo'<script> Swal.fire("success","amount withdraw successfully","back for next withdraw");</script>';
    } else {
        echo '<script> Swal.fire("error","insufficient funds","check once");</script>';
    }
}
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
