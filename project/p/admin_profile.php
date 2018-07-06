<?php
    include "db/db.php";
    include 'controller/control.php';
    if(isset($_SESSION['type']))
    {
        if($_SESSION['type'] == 'Food Lover')
        {
            header('Location:profile.php');
        }
    }

    if( !isset($_SESSION['userExist']) ||  $_SESSION['userExist'] == false)
    {
        header('Location:main.php');
    }
   
?>


<?php
   $sql = "SELECT * FROM users  WHERE username = '".$_SESSION['name']."';";
   $userDetail = getData($conn, $sql);
   $sql1 = "SELECT * FROM userdetail WHERE userid =".$userDetail[0][0].";";
   $ar = getData($conn, $sql1);

   if(isset($_POST['savefile']))
   {
       
    if(isset($_FILES['imgfile']) && $_FILES['imgfile']['error'] == 0)
    {
         $targetDir = 'uploads/';
         $target_file = $targetDir.basename($_FILES['imgfile']['name']);

         
          $ar = getData($conn, $sql1);
         if(sizeof($ar[0]) <= 0)
         {
            $sql = "INSERT INTO userdetail (userid, img) VALUES(".$userDetail[0][0].", '".$target_file."');";
            insertData($conn, $sql);
            move_uploaded_file($_FILES['imgfile']['tmp_name'] , $target_file);

         }
         else
         {
              $fileName = $ar[0][1];
              unlink($fileName);
              $sql = "UPDATE userdetail SET img ='".$target_file."' WHERE userid =".$userDetail[0][0].";";
              insertData($conn, $sql);
              move_uploaded_file($_FILES['imgfile']['tmp_name'] , $target_file);
              header('Location:profile.php');
         }
           
    }

   }
   
?>


<?php

if(isset($_POST['submit']) && $_SESSION['userExist'] == true && $_SESSION['type'] == 'Manager')
{
    $title = $_POST['title'];
    $cat = $_POST['cat'];
    $img = $_FILES['file'];
    $tk = $_POST['tk'];
    $des = $_POST['des'];

    if($title != '' && $cat != '' && $_FILES['file']['error'] == 0 && $tk != '' && $des != '')
    {
          $filedir = 'icon/';
          $file_name = $filedir.basename($_FILES['file']['name']);
          
          move_uploaded_file($_FILES['file']['tmp_name'], $file_name);


          $sql = "INSERT INTO products (userid, title, cat, img, tk, des) VALUES(".$userDetail[0][0].", 
          '".$title."', '".$cat."', '".$file_name."', ".$tk.", '".$des."');";
          insertData($conn, $sql);

    }
}

?>

<?php 

  $sql = "SELECT * FROM products WHERE userid = ".$userDetail[0][0].";";
  $product = getData($conn, $sql);

?>




<?php
    include 'include/header.php'; 
    include 'include/login.php';
    include 'include/signup.php';
?>

        <?php
            include 'include/common.php';
        ?>

                                <form class="form-horizontal" method="post" enctype="multipart/form-data">
                                    <label>Title</label>
                                    <input name="title" type="text" class="form-control" placeholder="Title of the product">
                                    <label>Category</label>
                                    <select name="cat" class="form-control">
                                        <option>Cat-1</option>
                                        <option>Cat-2</option>
                                        <option>Cat-3</option>
                                        <option>Cat-4</option>
                                        <option>Cat-5</option>
                                    </select>
                                    <label>Image</label>
                                    <input name="file" type="file" class="file form-control">
                                        <div class="input-group">
                                            <div class="input-group-addon">TK</div>
                                            <input name="tk" type="text" class="form-control" placeholder="Amount">
                                            <div class="input-group-addon">.00</div>
                                        </div>
                                        <label>Description</label>
                                        <textarea name="des" class="text-product form-control" placeholder="Detail about the product"></textarea>
                                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- card -->
                

                <div class="row" style="margin-top:50px">

                 <?php
                   if(sizeof($product[0]) > 0)
                   {
                      for($i=0; $i<sizeof($product); $i++)
                      {

                      
                  ?>

                  <div class="col-sm-3" style="padding:0px 20px 0px 0px">
                        <img class="img-icon" src="<?php echo $product[$i][4]; ?>">
                        <div class="pro-detail">
                            <h4><?php echo $product[$i][2];?></h4>
                            <h6><?php echo $product[$i][3];?></h6>
                            <p><?php echo $product[$i][5];?> TK</p>
                        </div>
                    </div>
                  
                  
                  <?php
                      }

                   }
                   else
                   {
                ?>

                <div class="col-sm-3" style="padding:0px 20px 0px 0px">
                        <img class="img-d" src="http://via.placeholder.com/250x200">
                        <div class="pro-detail">
                            <h4>Title</h4>
                            <h6>Cat-1</h6>
                            <p>300 TK</p>
                        </div>
                    </div>


                <?php

                   }
                 
                 ?>


                   
                </div>
            </div>

        </section>


    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="./js/admin_profile.js"></script>
    <script src="./js/profile.js"></script>
</html>