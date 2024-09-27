<?php
include '../configs/db.php'; // Include DB connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $customer_id = $_POST['customer_id'];
    $car_id = $_POST['car_id'];
    $mechanic_name = $_POST['mechanic_name'];
    $service_date = $_POST['service_date'];
    $service_description = $_POST['service_description'];
    $parts_used = $_POST['parts_used'];
    $total_cost = $_POST['total_cost'];

    $sql = "INSERT INTO ServiceRecords (customer_id, car_id, mechanic_name, service_date, service_description, parts_used, total_cost) 
            VALUES ('$customer_id', '$car_id', '$mechanic_name', '$service_date', '$service_description', '$parts_used', '$total_cost')";

    if ($conn->query($sql) === TRUE) {
        echo "New service record added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
