<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
           $number = $_GET["number"];
           $connection = new mysqli("localhost","root","","smartmethods");
           $statement = $connection ->prepare("insert into tablenumber (number) values(?); ");
           $statement->bind_param("i",$number);
           $statement->execute();
           echo"Done";
        ?>
    </body>
</html>