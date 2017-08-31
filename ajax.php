
    <thead>
        <tr>
        <th>#</th>
        <th>Name</th>
        <th>Position</th>
        <th>rating</th>
        </tr>
    </thead>
        <tbody>

  <?php

        while ($row = mysqli_fetch_array($result)) {
            echo '<tr>';
                echo '<th scope="row">' . $i . '</th>';
                echo '<td>' . $row['name'] . '</td>';
                echo '<td>' . $row['position'] . '</td>';
                echo '<td>' . $row['rating'] . '</td>';
            echo '</tr>';
            $i++;
        }

?>
    </tbody>
</table>