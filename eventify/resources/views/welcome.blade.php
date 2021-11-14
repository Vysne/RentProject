<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">

        <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <title>Eventify</title>

    <style>
        #main {
            height: 100vh;
        }
    </style>
</head>
<body>

    <div class="container-fluid px-0 overflow-hidden">

        <div class="row">
                <div class="d-flex flex-column flex-shrink-0" style="width: 5.5rem; height: 100vh; border-right: 1px solid #eee;">
                    <div id="sidebar">
                        <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link py-3 border-bottom" aria-current="page" title="Home" data-bs-toggle="tooltip" data-bs-placement="right">
                                    <i class="fas fa-home fs-2"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link py-3 border-bottom" title="Search" data-bs-toggle="tooltip" data-bs-placement="right">
                                    <i class="fas fa-search fs-2"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link py-3 border-bottom" title="Library" data-bs-toggle="tooltip" data-bs-placement="right">
                                    <i class="fas fa-book fs-2"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link py-3 border-bottom" title="Sponsors" data-bs-toggle="tooltip" data-bs-placement="right">
                                    <i class="fas fa-handshake fs-2"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link py-3 border-bottom" title="Places" data-bs-toggle="tooltip" data-bs-placement="right">
                                    <i class="fas fa-globe fs-2"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="dropdown border-top logoutbtn">
                            <a href="#" class="d-flex p-3 link-dark" title="Log out" aria-expanded="false">
                                <i class="fas fa-door-open fs-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-10 col-sm-10 col-md-10 col-lg-10">
                    <div class="row" style="width: 100vw; border-bottom: 2px solid #eee;">
                        <div class="col-md-4 p-5">
                            <h1 id="greetingsTitle" class="display-3 text-light"></h1>
                        </div>
                        <div class="col-md-4">
                            <div id="bannerimg">
                            <img src="assets/banner.png" alt="Eventify banner">
                            </div>
                        </div>
                        <div class="col-md-4 p-5 d-flex justify-content-center align-items-center">
                            <div id="userbtn">
                                <div class="btn-group">
                                    <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-user"></i>
                                        Taylor Swift
                                    </button>
                                    <ul class="dropdown-menu w-100 text-break text-center overflow-auto">
                                        <p class="lead"><strong>Band: Gusha</strong></p>
                                        <p class="lead"><strong>Popularity: 322</strong></p>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="height: 100%; width: 100vw;">

                        <div class="col-6 mx-auto mt-5">

                            <table class="table table-stripe text-light lead text-center table-bordered">
                                <tr>
                                    <th>smell</th>
                                    <th>wait</th>
                                    <th>other</th>
                                    <th>into</th>
                                    <th>steady</th>
                                </tr>
                                <tr>
                                    <td>being</td>
                                    <td>married</td>
                                    <td>class</td>
                                    <td>best</td>
                                    <td>loss</td>
                                </tr>
                                <tr>
                                    <td>case</td>
                                    <td>pen</td>
                                    <td>railroad</td>
                                    <td>grain</td>
                                    <td>harbor</td>
                                </tr>
                                <tr>
                                    <td>act</td>
                                    <td>sheep</td>
                                    <td>heat</td>
                                    <td>dark</td>
                                    <td>remember</td>
                                </tr>
                                <tr>
                                    <td>women</td>
                                    <td>orbit</td>
                                    <td>related</td>
                                    <td>scared</td>
                                    <td>sand</td>
                                </tr>
                                <tr>
                                    <td>pure</td>
                                    <td>muscle</td>
                                    <td>longer</td>
                                    <td>distance</td>
                                    <td>rate</td>
                                </tr>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>

<!-- Custom JS -->
<script type="text/javascript" src="js/script.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</body>
</html>