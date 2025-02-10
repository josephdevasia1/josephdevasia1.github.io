<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define the admin credentials
    $admin_username = "admin";
    $admin_password = "admin123";

    // Retrieve the form data
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate the credentials
    if ($username === $admin_username && $password === $admin_password) {
        $_SESSION['loggedin']=true;
        // Redirect to the admin panel
        echo "login sucess";
        header("Location: admin-panel.php");
        exit();
    } else {
        echo "login sucess";
        // Redirect back to the login page with error message
        header("Location: admin.html?error=1");
        exit();
    }
}
?>
