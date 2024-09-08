<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection parameters
    $servername = "localhost"; // Change this to your database server name if different
    $username = "root"; // Change this to your database username
    $password = ""; // Change this to your database password
    $dbname = "booking"; // Change this to your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else{
        echo"successful";
    }
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $payment=$_POST["payment"];

    // Insert data into database
    $sql = "INSERT INTO book (Name,Email, Date, Time, Method) VALUES ('$name','$email', '$date', '$time','$payment')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to success page or display success message
        header("Location: Turf.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>
