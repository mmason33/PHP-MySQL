<?php

$conn = new mysqli('localhost', 'root', 'root', 'hello_world');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>

<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h1 class="text-center">PHP connect to MySQL</h1>
            <div class="row justify-content-center">
                <form class="col-6" action="post.php" method="POST">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="position">Postion</label>
                        <input type="text" class="form-control" id="position" name="position" placeholder="Position">
                    </div>
                    <div class="form-group">
                        <label for="rating">Rating</label>
                        <input type="number" class="form-control" id="rating" name="rating" placeholder="Rating">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

            <?php

                $query = "SELECT * FROM people";
                mysqli_query($conn, $query) or die('Error querying database');

                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_array($result);
                $i = 1;
            ?>

            <table class="table">
                <thead>
                    <tr>
                    <th class="number">#</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>rating</th>
                    </tr>
                </thead>
                    <tbody>

  <?php
                while ($row = mysqli_fetch_array($result)) {
                    echo '<tr>';
                        echo '<th scope="row" class="number">' . $i . '</th>';
                        echo '<td>' . $row['name'] . '</td>';
                        echo '<td>' . $row['position'] . '</td>';
                        echo '<td>' . $row['rating'] . '</td>';
                    echo '</tr>';
                    $i++;
                }

?>
                </tbody>
            </table>
        </div>
        <script src="js/script.js" type="text/javascript"></script>
    </body>
</html>