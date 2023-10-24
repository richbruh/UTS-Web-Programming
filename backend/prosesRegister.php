<?php 
require_once('db.php');


// Data from Register Form 
if (isset($_POST['user_role']) && isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['birthDate']) && isset($_POST['gender']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password'])) {
    $user_role=$_POST['user_role'];
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $birthDate=$_POST['birthDate'];
    $gender=$_POST['gender'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO user (user_role, firstName, lastName, birthDate, gender, email, username, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $db->prepare($query);

    if ($stmt->execute([$user_role, $firstName, $lastName, $birthDate, $gender, $email, $username, $hashedPassword])) {
        
        header('Location: ../frontend/registerSuccess.php');
    } else {
        die("Error: " . print_r($stmt->errorInfo(), true)); // Menampilkan pesan kesalahan
    }
} else {
    header('Location: ../frontend/error.php');
}
?>
