 <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "News";


    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("connection failed" . mysqli_connect_error());
    }
    $sql = "CREATE TABLE comment
    (
        Article_no int(11) NOT NULL,
        Username varchar(20),
        Comment text,
        Date1 varchar(40)

   
    )";
    if ($conn->query($sql) == TRUE) {
        echo "Table created successfully";
    } else {
        echo "error creating table" . mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>