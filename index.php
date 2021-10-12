<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- W3 CSS -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/styles.css">

    <!-- Font Awesome Kit -->
    <script src="https://kit.fontawesome.com/7a8570d225.js" crossorigin="anonymous"></script>

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    
    <title>Eventify</title>

</head>

<body>

    <!-- Custom JS -->
    <script type="text/javascript" src="js/scripts.js"></script>

    <div class="wrapper">

        <nav id="sidebar">
            
            <div class="sidebar-header">
                <img src="assets/projectname.png" alt="Logo" width="200" height="100">
            </div>

            <ul class="list-unstyled components">
                <a href="javascript:void(0)" class="closebtn" id="closeBtn" onclick="closeNav();">&times;</a>
                <li class="active">
                    <a href="#">Home</a>
                <li>
                    <a href="#">Search</a>
                </li>
                <li>
                    <a href="#">Library</a>
                </li>
                <li>
                    <a href="#">Sponsors</a>
                </li>
                <li>
                    <a href="#">Places</a>
                </li>
            </ul>
            <div class="logoutbtn"> 
                    <ul class="list-unstyled components">
                        <li>
                            <a href="#">Log out</a>
                        </li>
                    </ul>
            </div>
        </nav>
        
        <div id="content">
            <button class="openbtn" id='openBtn' onclick="openNav();">&#9776; Menu</button>
        </div>

        <div id="dropdown">
            <button class="userbtn" onclick="myFunction()"><i class="fas fa-user-circle"></i> User_Name_Surname <i class="fas fa-caret-down"></i></button>
            <div id="Demo" class="w3-dropdown-content w3-bar-block w3-border w3-black">
                <img src="assets/projectname.png" alt="Logo" width="150" height="80"><br><br>
                <p><b><strong>Band: Band_Name</strong></b></p>
                <p><b><strong>Popularity: Popularity_Number</strong></b></p>
            </div>
        </div>

    </div>

</div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</body>

</html>