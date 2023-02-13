<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $formData = "$name, $email, $message\n";

    $file = fopen('form-responses.csv', 'a');
    fwrite($file, $formData);
    fclose($file);

    echo 'Form data successfully saved.';
  }
?>
