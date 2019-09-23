

<div class="container">
    <div class="row" style="padding-bottom:30px;">
        
<div id="content" class="col-sm-12" style="height: auto !important; min-height: 0px !important;"><div id="account-register" class="">
  <ul class="steps breadcrumb">
        <li><a href="public/"><i class="fa fa-home"></i>  Home</a></li>
        <li><a href="#" id="user_account" p="login"><i class="fa fa-user"></i>  Account</a></li>
        <li class="current"><a class="current-breadcumb1" id="user_account" href="#" p="register"><i class="fa fa-pencil-square-o"></i>  Register</a></li>
      <li hidden=""></li>
      </ul>
    <div class="row">
        
                <div id="content" class="col-md-8 col-sm-8">
                    <div class="well">
      <h2 class="title">Create Account</h2>
                        <hr>
      <p>If you already have an account with us, please login at the <a id="user_account" href="#" p="login">login page</a>.</p>
        <div id="err"></div>            
                            
                    
      <form action="functions/register_process.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset id="account">
          <legend>Your Personal Details</legend>
          <div class="form-group required" style="display:  none ;">
            <label class="col-sm-2 control-label">Customer Group</label>
            <div class="col-sm-10">                            <div class="radio">
                <label>
                  <input type="radio" name="customer_group_id" value="1" checked="checked">
                  Default</label>
              </div>
                            </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-firstname">First Name</label>
            <div class="col-sm-10">
              <input type="text" name="fname" value="" placeholder="First Name" id="input-firstname" class="form-control">
               </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-lastname">Last Name</label>
            <div class="col-sm-10">
              <input type="text" name="lname" value="" placeholder="Last Name" id="input-lastname" class="form-control">
               </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-telephone">Telephone</label>
              <div class="col-sm-10">
            <input type="text" name="lname" value="" placeholder="Last Name" id="input-lastname" class="form-control">
          </div>
          </div>
          
          <div class="form-group required">
            <label class="col-sm-2 control-label">Gender</label>
            <div class="col-sm-10">               <label class="radio-inline">
                <input type="radio" name="gender" value="male" checked="checked">
                Male</label>
              <label class="radio-inline">
                <input type="radio" name="gender" value="female">
                Female</label>
               </div>
          </div>
          
                  </fieldset>
        <fieldset>
          <legend>Your Login details</legend>
            
            <!--<label class="col-sm-2 control-label" for="input-password">Username</label>-->

              <input type="text" name="username" value="Nick Name" placeholder="Nick Name" id="input-username" class="" hidden="">
                
                
                
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-email">E-Mail</label>
            <div class="col-sm-10">
              <input type="email" name="mailing" value="" placeholder="E-Mail" id="input-email" class="form-control">
               </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-password">Password</label>
            <div class="col-sm-10">
              <input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control">
               </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-confirm">Password Confirm</label>
            <div class="col-sm-10">
              <input type="password" name="confirm" value="" placeholder="Password Confirm" id="input-confirm" class="form-control">
               </div>
          </div>
          </fieldset>
        <hr>
                <div class="buttons">
          <div class="pull-right">
              <button type="button" name="register" class="btn btn-primary" id="register"><i class="fa fa-pencil-square-o"></i>  Register</button>
          </div><br>
        </div>
              </form>
      </div>
                    </div>
    <aside id="column-right" class="col-md-4 col-sm-4 col-xs-12">
    <div class="list-group">
    <a id="user_account" href="#" p="login" class="list-group-item"><span class="glyphicon glyphicon-log-in"></span>  Login</a> 
    <a id="user_account" href="#" p="forgot_pswd" class="list-group-item"><i class="fa fa-question-circle"></i> Forgotten Password</a>     
    
  </div>

<div class="panel panel-default">
 
          <div class="panel-heading pay_head" style="background-color: #229ac8;">
            <b class="panel-title" style="color: white;"><i class="fa fa-list"></i> Payment planning</b><br><br>
              <div id="tabs">
<ul class="nav nav-tabs">
            <li class=""><a href="#tab-individual" data-toggle="tab" aria-expanded="false"><i class="fa fa-user"></i> Individual</a></li>
            <li class=""><a href="#tab-blocker" data-toggle="tab" aria-expanded="false"><i class="fa fa-users"></i> Broker</a></li>
            <li class="active"><a href="#tab-posting" data-toggle="tab" aria-expanded="true"><i class="fa fa-list"></i> Property post</a></li>
                      </ul>           
          </div>
          </div>
            <!--------assets list------------------------>
<div class="tab-content">
<div class="tab-pane" id="tab-individual">   
          <div class="panel-body">
            <form action="" method="post" enctype="multipart/form-data">
              <div class="table-responsive">
                <table class="table table-bordered table-hover">
                                      <thead style="font-weight: bold; font-size: 17px; background: #eeeeee;">
                    <tr>
                      <td class="text-left">Account category</td>
                      <td class="text-left"><i class="fa fa-user"></i> Individual</td>
                    </tr>
                  </thead>
                    <tbody>
                        <tr>
                      <td class="text-left">Unit price/Day</td>
                      <td class="text-left">0 Rwf</td>
                    </tr>
                        <tr>
                      <td class="text-left">Unit days</td>
                      <td class="text-left">30 days</td>
                    </tr>
                        <tr>
                      <td class="text-left">Total amount</td>
                      <td class="text-left">0 Rwf</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
              </form>
    </div>
        </div>
<div class="tab-pane" id="tab-blocker"> 
    <div class="panel-body">
            <form action="" method="post" enctype="multipart/form-data">
              <div class="table-responsive">
                <table class="table table-bordered table-hover">
                  <thead style="font-weight: bold; font-size: 17px; background: #eeeeee;">
                    <tr>
                      <td class="text-left"> Agents range </td>
                      <td class="text-left"> Unit days </td>
                      <td class="text-left"> Price per day </td>
                      <td class="text-left"> Total amount </td>
                    </tr>
                  </thead>
                    <tbody>
                        <tr>
                      <td class="text-left">1-5</td>
                      <td class="text-left">90</td>
                      <td class="text-left">1,000 Rwf</td>
                      <td class="text-left">90,000 Rwf</td>
                    </tr>
                        <tr>
                      <td class="text-left">6-30</td>
                      <td class="text-left">90</td>
                      <td class="text-left">6,000 Rwf</td>
                      <td class="text-left">540,000 Rwf</td>
                    </tr>
                        <tr>
                      <td class="text-left">31-100</td>
                      <td class="text-left">90</td>
                      <td class="text-left">20,000 Rwf</td>
                      <td class="text-left">1,800,000 Rwf</td>
                    </tr>
                        <tr>
                      <td class="text-left">101-More</td>
                      <td class="text-left">90</td>
                      <td class="text-left">100,000 Rwf</td>
                      <td class="text-left">9,000,000 Rwf</td>
                    </tr>
                        
                    </tbody>
                  </table>
                </div>
              </form>
    </div>
    </div>
    <div class="tab-pane active" id="tab-posting"> 
    <div class="panel-body">
        <div class="card">
            To post a property on web
            <hr>
            <div class="table-responsive">
            <table class="table table-bordered table-hover">
                  <thead style="font-weight: bold; font-size: 17px; background: #eeeeee;">
                    <tr>
                      <td class="text-left"> Renting </td>
                      <td class="text-left"> Sales </td>
                      <td class="text-left"> Auction </td>
                    </tr>
                  </thead>
                    <tbody>

                        <tr>
                      <td class="text-left">0 Rwf / Day</td>
                      <td class="text-left">0 Rwf / Day</td>
                      <td class="text-left">0 Rwf / Day</td>
                    </tr>

                        
                    </tbody>
                  </table>
            </div>
        </div>
        </div>
    </div>
    <center><label>Money must be paid before start</label></center>
    </div>
        </div>
  </aside>
</div>
</div>

      </div>
      
    </div>
  </div>




<?php include('public/includes/footer.php')?>