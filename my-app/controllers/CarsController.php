<?php
include '../configs/db.php'; // Include database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect POST data from the form
    $make = $_POST['make'];
    $model = $_POST['model'];
    $year = $_POST['year'];
    $price = $_POST['price'];
    $serial_number = $_POST['serial_number'];

    // Prepare the SQL statement to insert a new car
    $sql = "INSERT INTO Car (make, model, year, price, serial_number) 
            VALUES ('$make', '$model', $year, $price, '$serial_number')";

    // Execute the SQL statement
    if ($conn->query($sql) === TRUE) {
        echo "Car added successfully!";
    } else {
        echo "Error adding car: " . $sql . "<br>" . $conn->error;
    }
}
?>