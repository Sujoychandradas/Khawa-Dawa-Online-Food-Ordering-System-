<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>SignUp Page!</title>
    <style>
        body {
            /* background-color: #0e0d0d; */
            background-color: #fff;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
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
        }

        .center-text {
            text-align: center;
        }

        .create-account {
            font-size: 24px;
            /* Increase font size to 24px */
            font-weight: bold;
            margin: 20px 0;
        }

        .password-requirements {
            font-size: 14px;
            /* Increase font size to 18px */
            margin-bottom: 30px;
        }

        .text-size {
            font-size: smaller;
        }

        .temp-r {
            margin-top: 100px;
        }
    </style>
</head>

<body>

    <div class="container-fluid temp-r">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-md-6-sm-12">
                <form action="registerAction.php" method="post" class="bg-light p-4 rounded">

                    <!-- <h3 class="text-center mb-4">Register Form</h3> -->
                    <div class="center-text">
                        <p class="create-account"> <b>Create Your Account</b></p>
                        <p class="password-requirements"> Your password must be a minimum of 8 characters long and include at least one uppercase letter, one lowercase letter, one number, and one special character.</p>

                    </div>

                    <div class="form-group">
                        <label for="inputName3">Name:</label>
                        <input type="text" name="r_username" class="form-control" id="inputEmail3" placeholder="Enter Your Name" required>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3">Email:</label>
                        <input type="text" name="r_email" class="form-control" id="inputPassword3" placeholder="Email" required>
                    </div>

                    <div class="form-group">
                        <label for="inputMobile3">Mobile:</label>
                        <input type="text" name="r_mobile" class="form-control" id="inputPassword3" placeholder="Mobile" required>
                    </div>


                    <div class="form-group">
                        <label for="inputPassword3">Password:</label>
                        <div class="input-group">
                            <input type="password" name="r_pass" class="form-control" placeholder="Password" id="passwordInput" required>
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <input type="checkbox" onclick="togglePasswordVisibility('passwordInput')" id="showPasswordToggle1">
                                    <label class="form-check-label" for="showPasswordToggle1">Show</label>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword3">Confirm Password:</label>
                        <div class="input-group">
                            <input type="password" name="r_conpass" class="form-control" placeholder="Password" id="confirmPasswordInput" required>
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <input type="checkbox" onclick="togglePasswordVisibility('confirmPasswordInput')" id="showPasswordToggle2">
                                    <label class="form-check-label" for="showPasswordToggle2">Show</label>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="agreeCheckbox">
                        <label class="form-check-label text-size" for="agreeCheckbox">I agree with Dribbble's Terms of Service, Privacy Policy, and default Notification Settings.</label>
                    </div>

                    <div class="form-group">
                        <button type="submit" name="register" class="btn btn-primary col-12" onclick="validateForm()">Sign Up</button>
                    </div>

                    <p class="text-center">Already have an account? <a href="login.php">Login</a></p>

                </form>
            </div>
        </div>
    </div>

    <script>
         function togglePasswordVisibility(targetId) {
            const passwordInput = document.getElementById(targetId);

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
        }

        function validateForm() {
            const agreeCheckbox = document.getElementById("agreeCheckbox");
            if (!agreeCheckbox.checked) {
                alert("Please agree to the Terms of Service, Privacy Policy, and Notification Settings.");
                event.preventDefault();
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