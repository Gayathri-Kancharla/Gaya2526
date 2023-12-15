
<?php
require_once("project.php");
session_start();


$getbls = mysqli_query($conn, "SELECT balance FROM account where status='1' ") or
    die(mysqli_error($conn));
while ($res = mysqli_fetch_object($getbls)) {
    $currentbalance = $res->balance;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
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


        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            width: 28rem;
            border: none;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            padding: 30px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title text-center">Balance Enquiry</h3>
                <form method="POST">
                    <fieldset disabled>
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Current Balance</label>
                            <input type="text" id="bls" name="balance" class="form-control" value="<?php echo $currentbalance ?>">
                        </div>
                    </fieldset><br>
                </form>
                <div class="d-grid gap-2">
                    <form action="http://localhost/gayathri/trans.php">
                        <button class="btn btn-primary" type="submit">Back</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
