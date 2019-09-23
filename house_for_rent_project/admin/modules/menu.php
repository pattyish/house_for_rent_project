<style>
 .nav-pills ul li{
        color:white !important;
    }
    </style>
   <nav class=" bg-primary">
  <div class="container-fluid">
      
    <div class="navbar-header" style="padding-top:8px;">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/home" style="font-size:35px;font-family:pristina; color:#fff; font-style:italic; font-weight:bold;"><strong>HOUSE</strong>&nbsp;<small style=
      "color:orange;font-size:16px;">MAJOR</small></a>
      </div>
    <div class="nav navbar-nav navbar-right">
        <div style="padding-top:16px; padding-bottom:16px; padding-right:30px;"><h4>Welcome <span style="color: orange;"><?php echo$currentUserName ;?></span></h4></div>
     
    </div>
  </div>
</nav>

    <div class="clearfix"></div>
        <div class="container-fluid" style="margin-top: 2px;">
       <div class="row">
	    <div class="col-lg-2 well" style=" height:490px; ">
		<div class="collapse navbar-collapse" id="myNavbar">
                    <div class="">
                <ul class="nav nav-pills nav-stacked" id="main-menu">

                    <li>
                        <a href="/admin/home" ><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="/admin/all_property_adm"><i class="fa fa-pencil"></i> All Property</a>
                    </li>
                    <li>
                        <a href="/admin/add_pro"><i class="fa fa-gear"></i> Add Property</a>
                    </li>
    
					<li>
                        <a href="/admin/rem_property"><i class="fa fa-remove"></i> Remove Property</a>
                    </li>
					
                    <li>
                        <a href="/admin/confirm_req_admin"><i class="fa fa-pencil"></i> Comfirm request</a>
                    </li>
                    <li>
                        <a href="/admin/all_advertisers"><i class="fa fa-user"></i> User</a>
                    </li>
                        <li>
                        <a href="/admin/all_advertisers"><i class="fa fa-user"></i> Transaction</a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-gear"></i> Reports
                              <span class="caret"></span></a>
                                   <ul class="dropdown-menu">
                                <li><a href="#">daily report</a></li>
                                 <li><a href="#">Weekly report</a></li>
                                    <li><a href="#">Monthly Report</a></li>
                                      </ul>
                                        </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-gear"></i> Settings
                              <span class="caret"></span></a>
                                   <ul class="dropdown-menu">
                                 <li><a href="#">Profile</a></li>
                                    <li><a href="#">Change Password</a></li>
                                      </ul>
                                        </li>
					   <li>
                        <a href="/admin/logout"><i class="fa fa-user"></i> Logout </a>
                    </li>
                </ul>

                </div>
                </div>
                </div>
				
				<!-----right side------>
				
               