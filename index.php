<?php

$conn = new mysqli('localhost', 'root', 'root', 'hello_world');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>

<html>
    <head>

    </head>
    <body>
    <h1>PHP connect to MySQL</h1>

    <?php

        $query = "SELECT * FROM people";
        mysqli_query($conn, $query) or die('Error querying database.');

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);

        while ($row = mysqli_fetch_array($result)) {
            echo $row['name'] . ' ' . $row['position'] . ': ' . $row['rating'] . ' ' . '<br />';
        }
        
        include 'class.php';

        $person = new Person('Mike', 'Admin', 12);
        $person->dump();

        $sql = "INSERT INTO people (name, position, rating)
        VALUES ('$person->name', '$person->position', $person->rating)";
        
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
    ?>


    </body>
</html>