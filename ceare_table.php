 <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "News";


    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("connection failed" . mysqli_connect_error());
    }
    $sql = "CREATE TABLE auth_login
    (
    Firstname varchar(20),
    Lastname varchar(20),
    Username varchar(20),
    Email varchar(20),    
    Password1 varchar(20)
    )";
    if ($conn->query($sql) == TRUE) {
        echo "Table created successfully";
    } else {
        echo "error creating table" . mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>