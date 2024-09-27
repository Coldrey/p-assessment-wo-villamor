<?php
include '../configs/db.php'; // Include DB connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capture the invoice details from the form
    $sale_id = $_POST['sale_id'];
    $invoice_date = $_POST['invoice_date'];
    $total_amount = $_POST['total_amount'];

    // Prepare the SQL statement to insert a new invoice
    $sql = "INSERT INTO Invoice (sale_id, invoice_date, total_amount) 
            VALUES ('$sale_id', '$invoice_date', '$total_amount')";

    // Execute the SQL statement and check for success
    if ($conn->query($sql) === TRUE) {
        echo "Invoice created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
