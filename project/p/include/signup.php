 <!-- Second model -->
 <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Register</h4>
                        </div>
                        <div class="modal-body">
                            <?php

                                if(isset($_POST['signup']))
                                {
                                    if($message == 'Successfully Submit')
                                    {
                            ?>
                            <div class="alert alert-success">
                                <?php echo $message; ?>
                            </div>
                            <?php        

                                }
                                else
                                {
                            ?>

                            <div class="alert alert-danger">
                                <?php echo $message;?>
                            </div>
                            
                            <?php
                              

                                }
                            }
                            
                            ?>
                            <form method="post">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="name" class="form-control" placeholder="Username">
                                </div>

                                <div class="form-group">
                                    <label>E-mail addres</label>
                                    <input type="text" name="email" class="form-control" placeholder="E-mail addres">
                                </div>

                                <div class="form-group">
                                        <label>Chose Option</label>
                                        <select class="form-control" name="option">
                                            <option>Manager</option>
                                            <option>Food Lover</option>
                                        </select>
                                    </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" name="password" class="form-control" placeholder="Password">
                                </div>

                                <div class="modal-footer">
                                     <button name="signup" class="btn btn-danger" type="submit">Sign Up</button>
                                </div>
                                
                            </form>
                        </div>

                       

                    </div>
                </div>
           </div>

        </section>