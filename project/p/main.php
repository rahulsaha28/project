<?php
    include "db/db.php";
    include 'controller/control.php';
    
   
?>


<?php 
   if(isset($_POST['signup']))
   {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $option = $_POST['option'];
        $password = $_POST['password'];

        if( $name != '' && $email != '' && $option != '' && $password != '' )
        {
            $message = 'Successfully Submit';
            $sql = "INSERT INTO users (username, email, option, password) VALUES('".$name."', '".$email."', '".$option."','".$password."');";

            $error = insertData($conn, $sql);
        }
        else
        {
            $message = 'Error has ocour';
        }

   }


//    for login
   if(isset($_POST['login']))
   {
       $name = $_POST['name'];
       $password = $_POST['password'];

        $sql = 'SELECT * FROM users';
       if($name != '' && $password != '')
       {
           $arr = getData($conn, $sql);
           if(userExist($arr, $name, $password))
           {
               $sql = "SELECT * FROM users WHERE username ='".$name."'";
               $arr = getData($conn, $sql);
               $_SESSION['userExist'] = true;
               $_SESSION['name'] = $name;
               $_SESSION['type'] = $arr[0][3];
               if($_SESSION['type'] == 'Manager')
               {
                  header('Location:admin_profile.php');
               }
               else
               {
                 header('Location:profile.php');
               }
               
           }
       }
   }

?>

<?php
 $sql = "SELECT * FROM products";
$productAll = getData($conn, $sql);


?>


<?php
    include 'include/header.php'; 
    include 'include/login.php';
    include 'include/signup.php';
?>



   
        <section class="main-section-2">
             
            <div>
                <div id="carousel-exp" class="carousel slide">
                    <ol class="carousel-indicators">
                        <li data-target="carousel-exp" data-slide-to="0" class="active"></li>
                        <li data-target="carousel-exp" data-slide-to="2"></li>
                        <li data-target="carousel-exp" data-slide-to="3"></li>
                        <li data-target="carousel-exp" data-slide-to="4"></li>
                        <li data-target="carousel-exp" data-slide-to="5"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                              <div class="container">
                                    <div class="row">
                                        <div class="col-lg-4 col-xs-12">
                                            <img class="img-0 img-responsive" src="./img/m1.jpg"> 
                                        </div>
                                        <div class="col-lg-8 col-xs-12 text-center">
                                            <h1>My Food</h1>
                                                <p class="lead">Shahjalal University of Science and Technology (SUST) was established in 1987.
                                                     The only university of its kind at that time, it started it''s journey on the 13th of February 1991 with only three departments: Physics, Chemistry and Economics, 13 teachers and 205 students. It has now expanded to 7 schools, 27 departments , 2 institutes and and a number of centers.
                                                      The number of teachers has grown to 487 and the students to 9262. Besides, the University has 8 affiliated medical colleges under the School of Medical Sciences with 2744 students.</p>
                                            
                                        </div>
                                    </div>
                              </div> 
                        </div>

                        <div class="item">
                            <div class="container">
                                  <div class="row">
                                      <div class="col-lg-4 col-xs-12">
                                          <img class="img-0 img-responsive" src="./img/m2.jpg"> 
                                      </div>
                                      <div class="col-lg-8 col-xs-12 text-center">
                                          <h1>My Food</h1>
                                              <p class="lead">Shahjalal University of Science and Technology (SUST) was established in 1987.
                                                   The only university of its kind at that time, it started it''s journey on the 13th of February 1991 with only three departments: Physics, Chemistry and Economics, 13 teachers and 205 students. It has now expanded to 7 schools, 27 departments , 2 institutes and and a number of centers.
                                                    The number of teachers has grown to 487 and the students to 9262. Besides, the University has 8 affiliated medical colleges under the School of Medical Sciences with 2744 students.</p>
                                          
                                      </div>
                                  </div>
                            </div> 
                      </div>


                      <div class="item">
                        <div class="container">
                              <div class="row">
                                  <div class="col-lg-4 col-xs-12">
                                      <img class="img-0 img-responsive" src="./img/m3.jpg"> 
                                  </div>
                                  <div class="col-lg-8 col-xs-12 text-center">
                                      <h1>My Food</h1>
                                          <p class="lead">Shahjalal University of Science and Technology (SUST) was established in 1987.
                                               The only university of its kind at that time, it started it''s journey on the 13th of February 1991 with only three departments: Physics, Chemistry and Economics, 13 teachers and 205 students. It has now expanded to 7 schools, 27 departments , 2 institutes and and a number of centers.
                                                The number of teachers has grown to 487 and the students to 9262. Besides, the University has 8 affiliated medical colleges under the School of Medical Sciences with 2744 students.</p>
                                      
                                  </div>
                              </div>
                        </div> 
                  </div>
                        
                    </div>

                    <a class="left carousel-control" href="#carousel-exp" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#carousel-exp" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                </div>
            </div>
        </section>

        <section class="main-section-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center">What are you interested in?</h1>
                        <h2 class="text-center"><small>Explore some of the best tips from around the city from our partners and friends.</small></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                         <img class="img-1" src="./img/m1.jpg">
                         <div class="font-icon">
                             <div class="font-icon-1">
                                    <span>2</span>
                                <i class="fas fa-utensils"></i>
                             </div>
                                <h3>Cat-1</h3>
                         </div>  
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <img class="img-1" src="./img/m2.jpg"> 
                        <div class="font-icon">
                            
                            <div class="font-icon-1">
                                    <span>2</span>
                               <i class="fas fa-utensils"></i>
                            </div>
                               <h3>Cat-2</h3>
                        </div> 
                   </div>
                   <div class="col-md-3 col-sm-6 col-xs-12">
                        <img class="img-1" src="./img/m3.jpg">
                        <div class="font-icon">
                            <div class="font-icon-1">
                                    <span>2</span>
                               <i class="fas fa-utensils"></i>
                            </div>
                               <h3>Cat-3</h3>
                        </div>  
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <img class="img-1" src="./img/m4.jpg">  
                        <div class="font-icon">
                            <div class="font-icon-1">
                                    <span>2</span>
                               <i class="fas fa-utensils"></i>
                            </div>
                               <h3>Cat-4</h3>
                        </div>
                   </div>
                   
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">

                    <?php
                     if(sizeof($productAll[0]) > 0 )
                     {
                         for($i=0; $i< sizeof($productAll); $i++)
                         {
                     ?>
                     
                     <div class="col-sm-6 col-md-4 col-xs-12">
                        <div class="thumbnail">

                            <div class="caption">
                                <img class="img_2" src="<?php echo $productAll[$i][4]?>">
                                <h3><?php echo $productAll[$i][2]?></h3>
                                <p> <?php  echo $productAll[$i][6]?>
                                    </p>
                                 
                                 <form method="post" action="page.php">
                                     <input type="hidden" name="proid" value="<?php echo $productAll[$i][0];?>">
                                 <p><button type="submit" class="btn btn-primary">View</button></p>
                                </form>   
                                    
                            </div>
                        </div>
                    </div>

                     <?php


                         }
                     }
                    
                    ?>    



                   

                   
                           

                               

                                    
                </div>
            </div>
        </section>

      <?php
        include 'include/main_footer.php';
      ?> 