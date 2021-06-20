<html>

<head>

    <title>registration form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>


</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-3">
            <div class="">
                <?php
                require "header.php";
                include "db.php";
                $sql = "SELECT * FROM article";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    echo "<table border=1 class= table table-striped table-hover >";
                    echo "<tr>";
                    echo "<th>Article No.</th><th>Article Name</th><th>Author Name</th><th>Category</th><th>Content</th><th>Date</th><th>image name</th><th>Action</th>";
                    echo "</tr>";

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['Article_no'] . "</td>";
                        echo "<td>" . $row['Article_name'] . "</td>";
                        echo "<td>" . $row['Author_name'] . "</td>";
                        echo "<td>" . $row['Category'] . "</td>";
                        echo "<td>" . $row['Content'] . "</td>";
                        echo "<td>" . $row['Date1'] . "</td>";
                        echo "<td>" . $row['image_name'] . "</td>";
                        echo "<td>" . "<a href=update_form.php?update=" . $row['Article_no'] . ">update</a></td>";

                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "no records found";
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>