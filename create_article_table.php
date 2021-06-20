 <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "News";


    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("connection failed" . mysqli_connect_error());
    }
    $sql = "CREATE TABLE article
    (
        Article_no int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        Article_name varchar(100),
        Author_name varchar(30), 
        Category varchar(30),
        Content text,
        image_name varchar(30),
        image_dir varchar(30),
        Date1 varchar(40)

   
    )";
    if ($conn->query($sql) == TRUE) {
        echo "Table created successfully";
    } else {
        echo "error creating table" . mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>