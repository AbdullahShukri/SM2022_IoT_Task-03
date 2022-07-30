<html>
    <head>
        <meta charset="UTF-8">
        <title>Home page</title>
    </head>

    <body>
        <form action="add.php" method="GET">
            The number from user:
            <input type="text" name ="number"><br/>
            <input type="submit">
        </form>
    <?php

    $connection = new mysqli("localhost","root","","smartmethods");
    $statement = $connection ->prepare("select * from tablenumber ");
    $statement ->execute();

    $result = $statement->get_result();
    echo"<hr>";
    echo"The numbers are stored in the database:";
    echo"<br/>"."<br/>";
    echo"";
    echo "<table border='1'>";
    while($row = $result->fetch_assoc()){
        echo "<tr><td style=width:20%>". $row ['INCREMENT']."-"."</td>"."<td>". $row ['number']."</td></tr>";
    }
    echo "</table>"
    ?>
    </body>
</html>