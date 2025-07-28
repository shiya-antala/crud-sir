<?php

$conn = mysqli_connect("localhost", "root", "", "ecommers");
if ($conn) {
    echo "Database connected successfully!";
} else {
    echo "Database connection error.";
}
