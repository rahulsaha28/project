<!DOCTYPE html>
<html>
    <head>
        <title>Main Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <link rel="stylesheet" href="css/main.css">
       
    </head>
       
    <body>
         <section>
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-main">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="main.php">LOVE BIRDS</a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-main">
                        <ul class="navbar-nav nav navbar-left">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Food</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                    Category<span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>Cat-1</li>
                                    <li>Cat-2</li>
                                    <li>Cat-3</li>
                                    <li>Cat-4</li>
                                    <li>Cat-5</li>
                                </ul>
                            </li>
                        </ul>
                        <form class="navbar-form navbar-right">
                            <div class="form-group">
                                <?php
                                    if(isset($_SESSION['userExist']) && $_SESSION['userExist'] == true)
                                    {
                                ?>
                                  <a href="./profile.php" type="button" class="btn btn-primary" >Profile</a>
                                <a href="./logout.php" class="btn btn-warning" type="button">Log Out</a>       

                                <?php        

                                    }
                                    else
                                    {
                                
                                ?>

                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">Log In</button>
                                <button class="btn btn-warning" type="button" data-toggle="modal" data-target="#myModal2">Register</button>
                                    <?php } ?>
                            </div>
                        </form>
                    </div>
                </div>
            </nav>