<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Registration</title>
  </head>
  <body>
    <div class="container" style="height:100vh; display:flex; align-items:center;" >
        <div class="card col-md-8 m-auto p-0">
            <div class="card-header">
                <h1 class="text-center">Registration Form</h1>
            </div>
            <div class="card-body">
                <form action="callback/register.php" method="post" enctype="multipart/form-data">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control mb-3" required>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control mb-3" required>
                    <label for="number">Mobile</label>
                    <input type="number" name="number" id="number" class="form-control mb-3" required>
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" class="form-control mb-3" required>
                    <label for="address">Address</label>
                    <textarea name="address" id="address" cols="30" rows="10" class="form-control mb-3" required></textarea>
                    <label for="">Already Registered! <a href="join_us.php">Join Now</a></label>
                    <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>