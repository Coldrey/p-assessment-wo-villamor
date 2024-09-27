

document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");

    form.addEventListener("submit", function(event) {
        const name = document.getElementById("name").value.trim();
        const email = document.getElementById("email").value.trim();
        const phone = document.getElementById("phone").value.trim();

        if (name === "" || email === "") {
            alert("Name and email are required!");
            event.preventDefault(); // Prevent form submission
        }
        const phoneRegex = /^[0-9]{3}-[0-9]{3}-[0-9]{4}$/;
        if (phone && !phoneRegex.test(phone)) {
            alert("Phone number must be in the format XXX-XXX-XXXX!");
            event.preventDefault(); // Prevent form submission
        }
    });
});
document.addEventListener("DOMContentLoaded", () => {
    // Customer Form Submission
    document.getElementById("customerForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent the default form submission

        // Gather input values
        const name = document.getElementById("name").value;
        const email = document.getElementById("email").value;
        const phone = document.getElementById("phone").value;
        const address = document.getElementById("address").value;

        // Validate inputs
        if (!name) {
            alert("Name is required!");
            return;
        }


        console.log("Customer Data:", { name, email, phone, address });
        // Here you can send the data to the server via AJAX if needed
        alert("Customer added successfully!");
    });

    // Sales Form Submission
    document.getElementById("salesForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent the default form submission

        // Gather input values
        const customerId = document.getElementById("customer_id").value;
        const carId = document.getElementById("car_id").value;
        const salespersonId = document.getElementById("salesperson_id").value;
        const saleDate = document.getElementById("sale_date").value;
        const totalAmount = document.getElementById("total_amount").value;

        // Validate inputs
        if (!customerId || !carId || !salespersonId || !saleDate || !totalAmount) {
            alert("All fields are required!");
            return;
        }

        console.log("Sales Data:", { customerId, carId, salespersonId, saleDate, totalAmount });
        alert("Sale added successfully!");
    });

    // Service Form Submission
    document.getElementById("serviceForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent the default form submission

        // Gather input values
        const customerId = document.getElementById("customer_id_service").value;
        const carId = document.getElementById("car_id_service").value;
        const mechanicName = document.getElementById("mechanic_name").value;
        const serviceDate = document.getElementById("service_date").value;
        const serviceDescription = document.getElementById("service_description").value;
        const partsUsed = document.getElementById("parts_used").value;
        const totalCost = document.getElementById("total_cost").value;

        // Validate inputs
        if (!customerId || !carId || !mechanicName || !serviceDate || !serviceDescription || !totalCost) {
            alert("All fields are required!");
            return;
        }

        console.log("Service Data:", { customerId, carId, mechanicName, serviceDate, serviceDescription, partsUsed, totalCost });
        alert("Service record added successfully!");
    });
});