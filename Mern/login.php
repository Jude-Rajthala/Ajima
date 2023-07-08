<?php
// login.php

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the submitted username and password
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Perform the login process (authentication, validation, etc.)
  // Replace this with your own authentication logic
  if ($username === 'admin' && $password === 'password') {
    // Authentication successful, redirect to the dashboard or desired page
    header('Location: dashboard.php');
    exit();
  } else {
    // Invalid credentials, display an error message
    echo 'Invalid username or password. Please try again.';
  }
}
?>
