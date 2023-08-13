<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>SignIn Page!</title>

    <style>
        body {
            background-color: #fff;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        .center-text {
            text-align: center;
        }

        .welcome-account {
            font-size: 24px;
            font-weight: bold;
            margin: 20px 0;
        }

        .temp {
            margin-top: 220px;
            border-radius: 300px;
        }

        h1 {
            font-size: 36px;
        }

        /* Add custom styling for the form elements */
        .form-group input[type="text"],
        .form-group input[type="password"] {
            border-radius: 20px;
        }

        .form-group button[type="submit"] {
            border-radius: 20px;
            height: 50px;
        }
    </style>
</head>

<body>

    <div class="container-fluid temp">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-md-6-sm-12">
                <form action="loginAction.php" method="post" class="bg-light p-4 rounded">
                    <div class="center-text">
                        <p class="welcome-account"> <b>Welcome Back</b></p>
                    </div>

                    <!-- Display the error message if set in the session -->
                    <?php
                    session_start();
                    if (isset($_SESSION['login_error'])) : ?>
                        <div class="alert alert-danger text-center" role="alert">
                            <?php echo $_SESSION['login_error']; ?>
                        </div>
                    <?php unset($_SESSION['login_error']);
                    endif; ?>

                    <div class="form-group">
                        <label for="inputEmail3">Email:</label>
                        <input type="text" name="l_email" class="form-control" placeholder="Email" required>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword3">Password:</label>
                        <div class="input-group">
                            <input type="password" name="l_pass" class="form-control" placeholder="Password" id="passwordInput" required>
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <input type="checkbox" onclick="togglePasswordVisibility()" id="showPasswordToggle">
                                    <label class="form-check-label" for="showPasswordToggle">Show</label>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary col-12" name="login">SignIn</button>
                    </div>

                    <p class="text-center">Don't have an account? <a href="register.php">Sign in Here</a></p>
                    <!-- <p class="text-center">Not Remember Password? <a href="forgot_password.php">Reset Password</a></p> -->
                </form>
            </div>
        </div>
    </div>

    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById("passwordInput");
            const showPasswordToggle = document.getElementById("showPasswordToggle");

            if (showPasswordToggle.checked) {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
        }
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>