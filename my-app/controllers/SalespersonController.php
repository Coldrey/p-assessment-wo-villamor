<?php
include '../configs/db.php'; // Include database connection file

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Prepare the SQL statement
    $sql = "INSERT INTO Salesperson (name, email, phone) 
            VALUES ('$name', '$email', '$phone')";

    
    // Execute the statement
    if ($conn->query($sql) === TRUE) {
        echo "Salesperson added successfully!";
    } else {
        echo "Error adding salesperson " . $sql . "<br>" . $conn->error;
    }
}
?>
