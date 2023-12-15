<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
    body {
      margin: 0;
      padding: 0;
      background-image: url('https://www.shutterstock.com/image-vector/insert-atm-card-credit-slot-600nw-1940138038.jpg'); /* Replace with the actual path to your image */
      background-size: 90%;
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
    background-image: url('https://www.shutterstock.com/image-vector/insert-atm-card-credit-slot-600nw-1940138038.jpg'); /* Replace with the path to your image */
    background-size: cover;
    background-position: center;
    filter: blur(5px); 
}

    #content {
      text-align: center;
      color: white;
      font-size: 24px;
      padding: 10px;
      background-color: transparent;
      border-radius: 10px;
    }
    .submit {
    background-color:green;
   color:black;;
    padding: 10px 15px;
    border:30px;
    border-radius: 4px;
    cursor: pointer;
}

.submit:hover {
    background-color: #45a049;
}
  </style>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>
<body>

<div id="content">
<?php
require_once("project.php");
if(isset($_POST["submit"])){
    $username= $_POST['email'];
    $password= $_POST['password'];
   
    $qry = mysqli_query($conn, "SELECT l_id FROM login WHERE email='$username' AND password='$password' ") or die(mysqli_error($conn));
    while($res=mysqli_fetch_object($qry)){
        $mainId= $res->l_id;
        session_start();
        $_SESSION['mainId']=$mainId;
    }
    
    $count = mysqli_num_rows($qry);
    if($count > 0){
        header("Location: second.html");
        exit;
    }else{
        ?>
        <script>
            swal.fire({
                text:"Incorrect Credentials",
            })
            </script>
            <?php
        
    }
}
?>


    <div class="container-fluid Login">
        <div class="card MainLogin" style="width: 28rem; height: 30rem;">
            <div class="card-body">
            <img src="https://www.shutterstock.com/image-vector/insert-atm-card-credit-slot-600nw-1940138038.jpg" class="card-img-top" alt="..." width="5px" height="95px"><br><br>

            <h2 class="card-title text-center">LOGIN TO ACCOUNT</h2>
                <form method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email*</label>&emsp;&emsp;&emsp;
                        <input type="email" class="form-control"id="validationDefault03" required oninvalid="alert('Enter valid credentials'); aria-describedby="emailHelp" pattern=".{6,@}" name="email"  value="">
                    </div><br>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password*</label>&emsp;&emsp;
                        <input type="password" class="form-control" name="password" id="validationDefault03" required value="">
                    </div><br>
                    <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Login">
                </form>
            </div>
        </div>
    </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>    
</html>