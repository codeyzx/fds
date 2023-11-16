<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>

<style>
    /* Include your custom styles here */

    body {
        font-family: 'Poppins', sans-serif;
        background: #ececec;
    }

    /* Add any additional custom styles for the registration page */

    .box-area {
        width: 600px;
    }

    .right-box {
        padding: 50px 30px 50px 50px;
    }

    @media only screen and (max-width: 768px) {
        .box-area {
            margin: 0 10px;
        }

        .right-box {
            padding: 20px;
        }
    }
</style>

<body>

    <div class="container d-flex justify-content-center align-items-center min-vh-100">

        <div class="row border rounded-5 p-3 bg-white shadow box-area">

            <!-- Right Box - Registration -->
            <div class="col-md-11 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4 text-center">
                        <h2 class="fw-bold">
                            Create an Account</h2>
                        <p>Join us to explore amazing features.</p>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg bg-light fs-6"
                            placeholder="Full Name">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg bg-light fs-6"
                            placeholder="Email address">
                    </div>
                    <div class="input-group mb-3">
                        <input type="tel" class="form-control form-control-lg bg-light fs-6"
                            placeholder="Phone Number">
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control form-control-lg bg-light fs-6"
                            placeholder="Password">
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control form-control-lg bg-light fs-6"
                            placeholder="Confirm Password">
                    </div>
                    <div class="input-group mb-4">
                        <button class="btn btn-lg btn-primary w-100 fs-6">Register</button>
                    </div>
                    <div class="row">
                        <small>Already have an account? <a href="{{ url('/login') }}"
                                style="text-decoration: none; color: #164bec;">Login</a></small>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>
