<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <!-- Own CSS -->
    <link rel="stylesheet" type="text/css" href="./css/styles.css">
</head>
<body>
    
    <div class="container-fluid">

        <div class="row mainRow">

            <div class="col-2 sidebar">

                <div class="nav-logo">
                    <a href="index.php" class="nav-brand">
                        <img src="./assets/projectname.png" class="img-fluid" alt="Logo">
                    </a>
                </div>

                <div class="navbar-wrapper">

                    <nav id="sidenavbar"class="navbar">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100 text-center pt-5">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Search</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Library</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Sponsors</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Logout</a>
                            </li>
                        </ul>
                    </nav>

                </div>

            </div>


            <div class="col-10">

                <div id="banner">

                    <div id="user_container">

                        <div class="card text-center" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="cart-title">
                                    TestUser
                                </h5>
                                <button class="btn btn-primary">
                                    Menu
                                </button>
                            </div>
                        </div>

                    </div>

                </div>

            </div>  

        </div>  

    </div>
    

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>
</html>