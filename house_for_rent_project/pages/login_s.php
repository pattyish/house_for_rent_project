 
<?php
ob_start();
  if(!session_id())
    session_start();
      $userId = checkLogin();
       header("location: index.php");
      ?>
<div class="clearfix"> </div> 
    <div class="container" style="padding-bottom:90px;">
        <div class="row">
            <div class="col-sm-12">
        <ul class="breadcrumb">
        <li><a href="/home"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="/home"><i class="fa fa-user"></i> Account</a></li>
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
                    By creating an account on our platfrom, you will be able to to post your property quickly and remove post or updates property contents.
                </p>
                <a href="register.php" style="font-family:;" class="btn btn-block btn-primary ">Create Account</a>
            </div>
            </div>
            <div class="col-lg-5">
            <div class="well">
                <div style="padding-bottom:15px;">
                    <h2 style="font-family:">Login as advertiser</h2></div> 
                <form method="post" action="">
              <div class="form-group">
                <label class="control-label" for="input-email" style="">E-Mail Address</label>
                <input type="text" name="email" placeholder="E-Mail Address" id="input-email" class="form-control" required />
              </div>
              <div class="form-group">
                <label class="control-label" for="input-password" style="">Password</label>
                <input type="password" name="password" placeholder="Password" id="input-password" class="form-control" required />
                  <a href="?p=forgot_pswd"><i class="fa fa-question-circle">Forgotten Password</i></a></div>
              <input type="submit" name="submit"style="" value="Login" class="btn btn-block btn-primary" />
                          </form>
          
                
                <?php
                    if(isset($_POST['submit']))
                {
                 $email = $_POST['name'];   
                 $password = $_POST['password']; 
                  $userId = login($email, $password);
                  if($userId==-1)
                  {
                     echo '<script type="text/javascript">';
                      echo ' alert("you have been suspended or you did not pay")';  //not showing an alert box.
                      echo '</script>';
                  }
                    }

                    ?>
                
                
                
                
                </div>
            </div>
        </div>
    </div> 
  