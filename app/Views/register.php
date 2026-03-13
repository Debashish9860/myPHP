<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">

            <div class="col-md-5">
                <div class="card shadow">

                    <div class="card-body">
                        <h3 class="text-center mb-4">Register</h3>

                        <form action="<?= base_url('register-user') ?>" method="post">

                            <div class="mb-3">
                                <label class="form-label">Full Name</label>
                                <input type="text" class="form-control" placeholder="Enter your name" name="fullname">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" placeholder="Enter your email" name="email">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" placeholder="Create password"
                                    name="password">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" placeholder="Confirm password">
                            </div>

                            <button type="submit" class="btn btn-dark w-100">Register</button>

                            <div class="text-center mt-3">
                                Already have an account? <a href="<?= base_url('/') ?>">Login</a>
                            </div>

                        </form>

                    </div>

                </div>
            </div>

        </div>
    </div>

</body>

</html>