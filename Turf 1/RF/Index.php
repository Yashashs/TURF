<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection parameters
    $servername = "localhost"; // Change this to your database server name if different
    $username = "root"; // Change this to your database username
    $password = ""; // Change this to your database password
    $dbname = "turf"; // Change this to your database name

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
    $email = $_POST["Email"];
    $name = $_POST["Name"];
    $password = $_POST["Password"];
    $gender = $_POST["gender"];
    $Individual=$_POST["Individual"];

    // Insert data into database
    $sql = "INSERT INTO rf (Individual,Email, Name, Password) VALUES ('$Individual','$email', '$name', '$password')";

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
