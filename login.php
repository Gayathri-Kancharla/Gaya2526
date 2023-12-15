<?php
session_start();
require_once("config.php");

if (isset($_POST["loginbutton"])) {
    $user_id = $_POST["userid"];
    $username = $_POST["username"];
    //$password = $_POST["password"]; // Add this line for password input
    $password = '826';
    $stmt = $conn->prepare("SELECT * FROM user_table WHERE user_id = ? AND username = ? AND user_password = ?"); // Update your query to include password
    $stmt->bind_param("iss", $user_id, $username, $password);
    
    $stmt->execute();
    $result = $stmt->get_result();
    //echo "<script>alert('checking login details')</script>";
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION["user_id"] = $row['user_id'];
        $_SESSION["username"] = $row['username'];
        //echo "<script>alert('valid login details')</script>";
        header("Location: language.php");
        exit(); // Always exit after a header redirect
    } else {
        echo "<script>alert('Invalid login details 123')</script>";
        header("Location: atmlogin.php");
        echo "<script>
        document.getElementById('errorLabel').innerHTML = 'your tip has been submitted!'
        </script>";

    }

    $stmt->close();
}

?>