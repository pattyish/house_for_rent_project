  <?php
include'public/includes/header.php';
include'public/includes/conn.php';
?>
<div class="clearfix"> </div> 
    <div class="container" style="padding-bottom:90px;">
        <div class="row">
            <div class="col-sm-12">
        <ul class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="index.php"><i class="fa fa-user"></i> Account</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Login</a></li>
      </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="well"><div style="padding-bottom:5px;">
                <center><h3 style="font-family:;"> New Advertiser</h3></center>
                    </div>
                <p>
                    if login into you an account on our platfrom, you will be able to to post your property quickly and remove post or updates property contents.
                </p>
                <a href="login_for_adverter.php" style="font-family:;" class="btn btn-block btn-primary ">Login </a>
            </div>
            </div>
            <div class="col-lg-6">
            <div class="well advertiser_sign_up">
                <div style="padding-bottom:15px;">
                    <h3 style="font-family:">Create Account</h3></div> 
              <form  method="POST" enctype="multipart/form-data" autocomplete="off" >
                    <fieldset class="fieldgroup form-composite required " aria-required="true">
                        <legend><span class="fieldset-legend js-form-required form-required"> Personal Information</span></legend>
              <div class="form-group form-inline">
                  
                <label class="control-label" for="input-email" style="">First Name</label>&nbsp;
                <input type="text" name="fname" placeholder="First name" id="input-email" class="form-control" required />&nbsp;&nbsp;
                  <label class="control-label" for="input-email" style="">Last Name</label>&nbsp;
                  <input type="text" name="lname" placeholder="Last name" id="input-email" class="form-control" required />
              </div>
                        
              <div class="form-group">
                <label class="control-label" for="input-password" style="">E-mail Address</label>
                <input type="email" name="email" placeholder="Email address" id="input-password" class="form-control" required />
                 </div>
              <div class="form-group">
                <label class="control-label" for="input-password" style="">Phone </label>
                <input type="phone" name="phone" placeholder="Phone number" id="input-password" class="form-control" required />
                 </div>
                    </fieldset>
                    <fieldset class="fieldgroup form-composite required " aria-required="true">
                        <legend><span class="fieldset-legend js-form-required form-required"> Address</span></legend>
              <div class="form-inline">
              <div class="form-group">
                <label class="control-label" for="input-email" style="">District</label>&nbsp;
                <input type="text" name="District" placeholder="District" id="input-email" class="form-control" required />&nbsp;
                   </div>
                  <div class="form-group">
                <label class="control-label" for="input-email" style="">Sector</label>&nbsp;
                <input type="text" name="Sector" placeholder="Sector" id="input-email" class="form-control" required />&nbsp;
              </div>
             
                        </div>
                    </fieldset>
                    
                    <fieldset class="fieldgroup form-composite required " aria-required="true">
                        <legend><span class="fieldset-legend js-form-required form-required"> Personal Authentication</span></legend>
              <div class="form-group">
                <label class="control-label" for="input-email" style="">User Name</label>
                <input type="text" name="username" placeholder="E-Mail Address" id="input-email" class="form-control" required />
              </div>
              <div class="form-group">
                <label class="control-label" for="input-password" style="">Password</label>
                <input type="password" name="password" placeholder="Password" id="input-password" class="form-control" required />
                  </div>
                        <div class="form-group">
                <label class="control-label" for="input-password" style="">Confirm-Password</label>
                <input type="password" name="rpassword" placeholder=" confirm Password" id="input-password" class="form-control" required />
                  </div>
                    </fieldset>
                     <input type="submit" name="submit"style="" value="Register" class="btn btn-primary" />
                    <input type="submit" name="login_user"style="" value="Cancel" class="btn btn-success" />
                          </form>
                    <?php
                   if(isset($_POST['submit']))
                   {
                      $fname=$conn->real_escape_string($_POST['fname']);
                      $lname=$conn->real_escape_string($_POST['lname']);
                      $email=$conn->real_escape_string($_POST['email']);
                      $phone=$conn->real_escape_string($_POST['phone']);
                      $district=$conn->real_escape_string($_POST['District']);
                      $Sector=$conn->real_escape_string($_POST['Sector']);
                      $username=$conn->real_escape_string($_POST['username']);
                      $password=$conn->real_escape_string($_POST['password']);
                      $rpassword=$conn->real_escape_string($_POST['rpassword']);
                     if($fname&&$lname&&$email&&$phone&&$district&&$Sector&&$username&&$password&&$rpassword)
                     {
                      $checkq=$conn->query("SELECT * from users WHERE email=\"$email\" AND username=\"$username\"")or trigger_error($conn->error);
                      if(!$checkq->num_rows){
                        if($password == $rpassword)
                        {
                          $sql="INSERT INTO users(fname,lname,email,phone,district,Sector,username,password,type) VALUES (\"$fname\",\"$lname\",\"$email\",\"$phone\",\"$district\",\"$Sector\",\"$username\",\"$password\",'advert')";
                          $q=$conn->query($sql) or trigger_error($conn->error);
                        }
                        else
                        {
                        echo '<script type="text/javascript">';
                        echo ' alert("password are not matching")';  //not showing an alert box.
                        echo '</script>';
                        }
                      }
                      else
                      {
                        echo '<script type="text/javascript">';
                        echo ' alert("username and email already taken try again")';  //not showing an alert box.
                        echo '</script>';
                      }

                     }


                   }
                   else
                   {
                    echo '<script type="text/javascript">';
                        echo ' alert("fill all the fields")';  //not showing an alert box.
                        echo '</script>';
                   }

                    ?>
                
                </div>
            </div>
        </div>
    </div> 
      <?php
include'public/includes/footer.php';
?>