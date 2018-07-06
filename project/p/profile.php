<?php
    include "db/db.php";
    include 'controller/control.php';
    
    if(isset($_SESSION['type']))
    {
        if($_SESSION['type'] == 'Manager')
        {
            header('Location:admin_profile.php');
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
    include 'include/header.php'; 
    include 'include/login.php';
    include 'include/signup.php';
?>

       <?php 
       include 'include/common.php';
       
       ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>


    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="./js/profile.js"></script>
</html>