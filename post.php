<?php 

    $formName = $_POST['name'];
    $formPosition = $_POST['position'];
    $formRating = $_POST['rating'];

    include 'index.php';

    $sql = "INSERT INTO people (name, position, rating)
    VALUES ('$formName', '$formPosition', $formRating)";

    if ($conn->query($sql) !== TRUE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();



