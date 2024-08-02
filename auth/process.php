<?php
include 'conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login_option = $_POST['loginOption'];
    $user_input = $_POST['user_input'];
    $password_input = $_POST['password_input'];

    if ($login_option == 'badge-id') {
        $sql = "SELECT * FROM users WHERE badge_id = ?";
    } elseif ($login_option == 'email') {
        $sql = "SELECT * FROM users WHERE email = ?";
    } else {
        $sql = "SELECT * FROM users WHERE username = ?";
    }

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $user_input);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password_input, $row['password'])) {
            // Password is correct, redirect to another page or perform any actions
            header('Location:../index.php');
        } else {
            header('Location: signin.php?error=1');
            exit();
        }
    } else {
        header('Location: signin.php?error=1');
        exit();
    }

    $stmt->close();
    $conn->close();
}
?>
