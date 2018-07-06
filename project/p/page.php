<?php
    include "db/db.php";
    include 'controller/control.php';
    
   
?>


<?php 
   if(isset($_POST['proid']))
   {
       
       $id = $_POST['proid'];
       $_SESSION['proid'] = $id;
       

      
   }

   $sql = "SELECT * FROM products WHERE id = ".$_SESSION['proid'].";";

   $proDetail =  getData($conn, $sql);

?>

<?php
if(isset($_POST['reviewButton']) && $_SESSION['type'] == 'Food Lover' && $_SESSION['userExist'] == true)
{
    $sql = "SELECT * FROM users WHERE username = '".$_SESSION['name']."';";
    $user = getData($conn, $sql);
    $comment = $_POST['comment'];
    $revnum  = $_POST['revnum'];
    $title = $_POST['title'];

    $sql = "INSERT INTO reviews (productid, userid, title, comment, revnum) VALUES(".$_SESSION['proid'].
    ", ".$user[0][0].", '".$title."', '".$comment."', ".$revnum.");";

    insertData($conn, $sql);

    
}

?>

<?php
 $sql1 = "SELECT * FROM reviews WHERE productid = ".$_SESSION['proid'].";";

 $comm = getData($conn, $sql1);


?>



<?php
    include 'include/header.php'; 
    include 'include/login.php';
    include 'include/signup.php';
?>

        <section class="main-section-2">
            
            <div class="row">
                <div class="col-sm-12">
                    <img class="img-0" src="<?php echo $proDetail[0][4];?>">  
                </div>
                
            </div>
        </section>

        <section class="page-sec-3">
            <div class="row food-detail">
                <div class="col-md-12 col-xs-12 text-center">
                    <p class="link"><small><a href="#">Home</a> >> <a href="#">Cat-1</a>  >><?php echo $proDetail[0][2];?></small></p>
                    <h1><?php echo $proDetail[0][2];?></h1>
                    <p><small>Italian traditional served pizzeria.</small></p>

                </div>

                <div class="col-md-6 col-md-offset-2 col-xs-12">
                    <div>
                        Pizza East Portobello is spread over two floors of a restored Georgian pub in the middle of Portobello Market. 
                        It serves wood oven pizzas, antipasti and daily specials in buzzing, modern surroundings.
                         Italian cured meats and cheeses are available to buy at the Deli.
                         Upstairs, a laid-back dining room and terrace provide a little green haven.
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <button type="button" class="btn btn-danger btn-block">Book Now</button>
                </div>

                

            </div>

            <div class="review-num col-lg-12 text-center">Review (<?php echo sizeof($comm);?>)</div>

            <ol class="review-comment">

               <?php
               
               if(sizeof($comm[0]) >0)
               {

                  for($i=0; $i<sizeof($comm); $i++ )
                  {

                    $sql2 = "SELECT * FROM users WHERE id =".$comm[$i][1].";";
                    $commUser = getData($conn, $sql2);
                    $sql3 = "SELECT * FROM userdetail WHERE userid =".$commUser[0][0].";";
                    $commDetail = getData($conn, $sql3);
               
               ?>
               <li>
                    <div class="row">
                            
                            <div class="col-lg-4 col-xs-12 col-lg-offset-2">
                                <img class="img100x100 img-circle" src="<?php echo $commDetail[0][1];?>">
                                <h4><?php echo $commUser[0][1];?></h4>
                            </div>
                           
                            <div class="col-lg-6 col-xs-12">
                                <h4>"<?php echo $comm[$i][2];?>"</h4>
                                <span class="star">
                                        <?php
                                         for($j=0; $j<$comm[$i][4]; $j++)
                                         {

                                         
                                        ?>
                                        <i class="fa fa-star"></i>
                                         <?php
                                         }
                                         ?>
                                       
                                </span>
                                    <p>
                                    <?php echo $comm[$i][3];?>
                                    </p>
                            </div>   
                        </div>

               </li>
              <?php
                  }
                }
              ?>
              
           </ol>
            

           <div class="row">
                <div class="col-md-6 col-md-offset-2 col-xs-12 col-xs-offset-0">
                        <h4>Rate and write a review</h4>
                        <h6>Your Review:</h6>
                        <form method="post">
                            <textarea name="comment" class="text-Experience col-md-12" placeholder="Tell about your Experience"></textarea>
                            <h5>Your overall rating of this listing</h5>
                            <input class="revnum" type="hidden" name="revnum" >
                            <div class="review-inbox">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i> 
                            </div>
                            
                                <label>Title of your review</label>
                                <div class="col-md-12">
                                    <input name="title" type="text" class="form-control" placeholder="Summarize your opinion or highlight an interesting detail">
                                </div>
                                <div class="col-sm-5">
                                    <label>Name *</label>
                                    <input type="text" class="form-control" placeholder="Your name">
                                </div>
                                <div class="col-sm-5">
                                    <label>Email *</label>
                                    <input type="text" class="form-control" placeholder="your@email.com">
                                </div>
                                 <div class="col-sm-12">
                                    <button type="submit" name="reviewButton" class="reviewButton btn btn-danger">Submit your Review</button>
                                 </div>
                        </form>
                </div>
           </div>
        </section>

    </body>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="./js/page.js"></script>
 </html>     