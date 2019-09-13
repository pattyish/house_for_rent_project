  <?php
include'public/includes/header.php';
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
                <form method="post" action="" autocomplete="off">
                    <fieldset class="fieldgroup form-composite required " aria-required="true">
                        <legend><span class="fieldset-legend js-form-required form-required"> Personal Information</span></legend>
              <div class="form-group form-inline">
                  
                <label class="control-label" for="input-email" style="">First Name</label>&nbsp;
                <input type="text" name="mailing" placeholder="First name" id="input-email" class="form-control" required />&nbsp;&nbsp;
                  <label class="control-label" for="input-email" style="">Last Name</label>&nbsp;
                  <input type="text" name="mailing" placeholder="Last name" id="input-email" class="form-control" required />
              </div>
                        
              <div class="form-group">
                <label class="control-label" for="input-password" style="">E-mail Address</label>
                <input type="text" name="email" placeholder="Email address" id="input-password" class="form-control" required />
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
                <input type="text" name="mailing" placeholder="District" id="input-email" class="form-control" required />&nbsp;
                   </div>
                  <div class="form-group">
                <label class="control-label" for="input-email" style="">Sector</label>&nbsp;
                <input type="text" name="mailing" placeholder="Sector" id="input-email" class="form-control" required />&nbsp;
              </div>
             
                        </div>
                    </fieldset>
                    
                    <fieldset class="fieldgroup form-composite required " aria-required="true">
                        <legend><span class="fieldset-legend js-form-required form-required"> Personal Authentication</span></legend>
              <div class="form-group">
                <label class="control-label" for="input-email" style="">User Name</label>
                <input type="text" name="mailing" placeholder="E-Mail Address" id="input-email" class="form-control" required />
              </div>
              <div class="form-group">
                <label class="control-label" for="input-password" style="">Password</label>
                <input type="password" name="password" placeholder="Password" id="input-password" class="form-control" required />
                  </div>
                        <div class="form-group">
                <label class="control-label" for="input-password" style="">Confirm-Password</label>
                <input type="password" name="password" placeholder=" confirm Password" id="input-password" class="form-control" required />
                  </div>
                    </fieldset>
                     <input type="submit" name="login_user"style="" value="Register" class="btn btn-primary" />
                    <input type="submit" name="login_user"style="" value="Cancel" class="btn btn-success" />
                          </form>
          
                
                </div>
            </div>
        </div>
    </div> 
      <?php
include'public/includes/footer.php';
?>