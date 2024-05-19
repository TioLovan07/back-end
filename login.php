<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
            crossorigin="anonymous">
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
            crossorigin="anonymous"></script>
        <title>Login</title>
    </head>
    
    <body>
        <form action="login_action.php" method="POST">
            <section>
                <div class="container py-5 h-50">
                    <div class="row d-flex justify-content-center align-items-center h-50">
                        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                            <div class="card bg-success text-white" style="border-radius: 1rem;">
                                <div class="card-body p-5 text-center">

                                    <div class="mb-md-5 mt-md-4 pb-5">

                                        <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                        <p class="text-white mb-5">Please enter your user name and password!</p>

                                        <div class="form-outline form-white mb-4">
                                            <label class="form-label" for="typeEmailX">User Name</label>
                                            <input type="text" name="user" class="form-control form-control-lg"/>
                                        </div>

                                        <div class="form-outline form-white mb-4">
                                            <label class="form-label" for="typePasswordX">Password</label>
                                            <input type="password" name="pass" class="form-control form-control-lg"/>                                            
                                        </div>

                                        <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                                    </div>
                                    <div>
                                        <p class="mb-0">Don't have an account?
                                            <a href="daftar.php" class="text-white fw-bold">Sign Up</a>
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </body>
</html>