<?php
    $conn = new mysqli('localhost', 'root', '', 'data');
    $sql = "select * from blog";
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
        echo "<table class='table'>
        <thead>
        <tr>
            <th scope='col'>Id</th>
            <th scope='col'>Date</th>
            <th scope='col'>Url</th>

        </tr>
        </thead>",
        "<tbody>";
        while ($row = $result->fetch_assoc()){
            echo "<tr>
                    <td>".$row['id']."</td>
                    <td>".$row['date']."</td>
                    <td>".$row['url']."</td>
                    </tr>
            ";
        }
        echo "</tbody>";
    }
    $conn->close();
?>