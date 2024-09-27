<?php
include '../configs/db.php'; // Include DB connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $customer_id = $_POST['customer_id'];
    $car_id = $_POST['car_id'];
    $salesperson_id = $_POST['salesperson_id'];
    $sale_date = $_POST['sale_date'];
    $total_amount = $_POST['total_amount'];

    $sql = "INSERT INTO Sales (customer_id, car_id, salesperson_id, sale_date, total_amount) 
            VALUES ('$customer_id', '$car_id', '$salesperson_id', '$sale_date', '$total_amount')";

    if ($conn->query($sql) === TRUE) {
        echo "New sale added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
