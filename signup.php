<?php
        include 'dbcon.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            $register_number = $_POST['register_number'];
            $year = $_POST['year'];
            $section = $_POST['section'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $address = $_POST['address'];

            $sql = "INSERT INTO users (name, register_number, year, section, phone, email, address) 
                    VALUES ('$name', '$register_number', '$year', '$section', '$phone', '$email', '$address')";

            if ($conn->query($sql) === TRUE) {
                echo "<p>Signup successful!</p>";
            } else {
                echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
            }

            $conn->close();
        }
        ?>