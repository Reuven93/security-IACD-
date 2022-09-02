<!DOCTYPE html>
<html lang = "en">
<head>
<meta charset="UTF-8">
<title>Our DB</title>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


</head>

<body style="margin: 50px;">
    <h1>Shis
    </h1>
    <br>
    <table class="table">
    <thead>
        <tr>
            <th>officeCode</th>
            <th>City</th>
            <th>Country</th>
        </tr>
    </thead>

    <tbody>
        <?php 
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $database = "classicmodels";

        // create our connection
        $connection = new mysqli($servername,$username,$password,$database);

        //check our connection
        if ($connection->connect_error){
            die("connection failed: " . $connection->connect_error);
        }

        // read the table offices
        $sql = "SELECT * FROM offices";
        $result = $connection->query($sql);

        if (!$result){
            die("Invalid Query:" . $connection->error);
        }

        // now lets read each row of database

        while($row = $result->fetch_assoc()){
            echo "<tr>
            <td>" . $row["officeCode"] . "</td>
            <td>" . $row["city"] . "</td>
            <td>" . $row["country"] . "</td>
            <td>
                <a class= 'btn btn-primary btn-sm' href='update'>Update</a>
                <a class= 'btn btn-danger btn-sm' href='delete'>Update</a>
            </td>
        </tr>";

        }

        
        ?>
    </tbody>

    </table>
</body>
</html>
