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

</head>

<body>
    <div class="container">
        <?php require 'header.php' ?>
        <div class="row justify-content-center mt-3">
            <div class="col-md-6">
                <h1>
                    Admin signup
                </h1>
                <form action="add_admin_data.php" method="post">
                    <label> Firstname: </label><input type="text" id="firstname" class="form-control" name="firstname" placeholder="Enter Your Firstname" required /> <br>
                    <label> Lastname: </label><input type="text" id="lastname" class="form-control" name="lastname" placeholder="Enter Your Lastname" required /> <br>
                    <label> Username : </label><input type="text" id="username" class="form-control" name="username" placeholder="Enter Your Email" required /> <br>
                    <label>Email : </label><input type="email" id="email" class="form-control" name="email" placeholder="Enter Your Username" required /> <br>
                    <label>Password : </label> <input type="password" id="pass" class="form-control" name="password" placeholder="Enter Your Password" required /> <br>
                    <label>Confirm Password :</label> <input type="password" id="con_pass" class="form-control" name="con_password" placeholder="Enter Your Confirm Password" required /> <br>
                    <input type="submit" name="submit" />
                </form>
            </div>
        </div>
    </div>



</body>

</html>