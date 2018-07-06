<section class="profile-section-2">
            
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <img class="img-0" src="<?php if(sizeof($ar[0])>0)
                                {
                                    echo $ar[0][1];
                                }
                                else
                                {
                                    ?>
                                  http://via.placeholder.com/350x250
                                <?php  
                                }
                                 ?>" >
                                
                                <form method="post" enctype="multipart/form-data">
                                    <input name="imgfile" class="show Edit-cam" type= "file">
                               
                                <button class="btn btn-danger" style="margin-top:20px;">Delete</button>
                            </div>
                            <div class="col-md-4">
                                <h3><?php echo $userDetail[0][1]?></h3>
                                <h6></h6>
                                <p>Email : <?php echo $userDetail[0][2]?></p>
                                <p>Option: <?php echo $userDetail[0][3]?></p>
                            </div>
                            <div class="col-md-4">
                                
                                <button name="savefile" class="show save-profile btn btn-primary">Save Profile</button>
                                </form>
                                <button class="edit-profile btn btn-primary">Edit Profile</button>
                                <h3>Account</h3>