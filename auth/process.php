<?php
session_start();  
$conn = new mysqli("localhost", "root", "", "armz"); 
// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
if (isset($_POST["signup"])) { 
    $badge_id = $_POST['badge_id'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password']; 

    $sql="INSERT INTO users (badge_id, email, username, password) VALUES ('$badge_id','$email', '$username','$password')"; 
  
    if ($conn -> query($sql) ===TRUE){ 
        echo '<script>alert("Registration successful!");</script>';
		header("Location:signin.php");  
    } else {
        echo '<script>alert("Failed to register. Please try again later this means in 2hr or more when we are done fixing it.");</script>'; 
		header("Location:signup.php");
    }
}
 
 
// if (isset($_POST['login'])) {  

//     // $badge_id = $_POST['badge_id'];
//     // $email = $_POST['email'];
//     // $username = $_POST['username'];
//     $password = $_POST['password'];
  
//     // Determine which login value to use
//     $loginValue = '';
//     if (!empty($badge_id)) {
//         $loginValue = $badge_id;
//     } elseif (!empty($email)) {
//         $loginValue = $email;
//     } elseif (!empty($username)) {
//         $loginValue = $username;
//     }

//     // Construct SQL query
//     $sql = "SELECT * FROM users WHERE 
//             (email = '$loginValue' OR badge_id = '$loginValue' OR username = '$loginValue') 
//             AND password = '$password'";

//     // Execute query
//     $result = $conn->query($sql);

//     // Check if user exists
//     if ($result->num_rows > 0) {
//         echo "Login successful";
//         // Start session or redirect to dashboard, etc.
//     } else {
//         echo "Invalid credentials";
//     }
 
// } 


 


 



if (isset($_POST['emaillogin'])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM Users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['id'] = $row["id"];
        $_SESSION['email'] = $row["email"];
        $_SESSION['password'] = $row["password"];

        header("Location: ../index.html");
        exit();
    } else { 
            echo '<script>alert("Failed to login . Please try again later. if problem persist plz contact thierry");</script>';
            echo '<script>window.location.href = "signin.php";</script>';
            exit();
         
    }
}

if (isset($_POST['badgelogin'])) {
    $badge_id = $_POST["badge_id"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM Users WHERE badge_id = '$badge_id' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['id'] = $row["id"];
        $_SESSION['badge_id'] = $row["badge_id"];
        $_SESSION['password'] = $row["password"];

        header("Location: ../index.html");
        exit();
    } else { 
            echo '<script>alert("Failed to login . Please try again later. if problem persist plz contact thierry");</script>';
            echo '<script>window.location.href = "signin2.php";</script>';
            exit();
         
    }
}

if (isset($_POST['usernamelogin'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM Users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['id'] = $row["id"];
        $_SESSION['username'] = $row["username"];
        $_SESSION['password'] = $row["password"];

        header("Location: ../index.html");
        exit();
    } else { 
            echo '<script>alert("Failed to login . Please try again later. if problem persist plz contact thierry");</script>';
            echo '<script>window.location.href = "signin1.php";</script>';
            exit();
         
    }
}




















// if (isset($_POST['login'])) { 
//     $email = $_POST['email'];
//     $password = $_POST['password'];
  
//     // SQL query
//     $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
//     $result = $conn->query($sql);

//     // Check if user exists
//     if ($result->num_rows > 0) {
//         echo "Login successful";
//         // Start session or redirect, etc.
//     } else {
//         echo "Invalid credentials";
//     }

//     // Close connection
//     $conn->close();
// } 


?>
