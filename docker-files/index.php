<html>
    <head>
        <title>Docker sample app</title>
        <?php
        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            $servername = "mysql";
            $username = "root";
            $password = "password";
            $dbname = "mydatabase";
            $name=$_POST["name"];
            $phone=$_POST["phone"];
            //create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
        }
    </head>
</html>
