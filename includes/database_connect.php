<?php
$conn = mysqli_connect("127.0.0.1", "root", "Sachin01!", "PGLife");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL! Please contact the admin.";
    return;
}
