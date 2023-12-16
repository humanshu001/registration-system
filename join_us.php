<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Registration</title>
  </head>
  <body>
    <div class="container" style="height:80vh; display:flex; align-items:center;" >
        <div class="card col-md-8 m-auto p-0">
            <div class="card-header">
                <h1 class="text-center">Join Us</h1>
            </div>
            <div class="card-body">
                <form action="callback/join_us.php" method="post">
                    <label for="mobile">Enter your Registered Mobile Number</label>
                    <input type="number" name="mobile" id="mobile" class="form-control mb-3" required>
                    <label for="">Don't have an Account? <a href="register.php">Register Now</a></label>
                    <button type="submit" name="join" class="btn btn-primary btn-block">Join Us</button>
                </form>
            </div>
        </div>
    

        
    </div>
    <div class="card col-md-3 m-auto">
        <div class="card-body">
            <?php
                include ("config/config.php");
                $query = "SELECT Count(*) FROM `users` where `joined_at` <> '0000-00-00 00:00:00'";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<h1 class='text-center'>Total Users Joined: " . $row['Count(*)'] . "</h1>";
                }

            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>