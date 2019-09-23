<?php include('public/images_slider.php')?>
<div class="clearfix"></div>

      <div class="container" style="padding-top:10px;">
          <div class="row">
          <div class="col-md-12 col-sm-12 hidden-xs">
               <hr>
                <h3>
                    Properties Categories</h3>
              <hr>
            </div>
            </div>

    <div class="row">
    <div class="col-lg-12 col-md-12 col-12-sm">
        

        <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="row">
                        <?php
                         
                        $posts=array(getPost());
                        foreach ($posts as $key => $post) {
                            $postId=$post['post_id'];
                            $link=$post['link'];
                            $image=getImages($postId);
                            $Category=getCategory($post['category']);
                            $title=$post['title'];


                        ?>
                        <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="images/<?php print_r($image);?>" class="img-responsive" style="height:180px; width:100%;">
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>
                                                Next Sample Product</h5>
                                           
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <a href="#" class="hidden-sm"><?php print_r($Category);?></a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="<?php echo$link?>" class="hidden-sm">More details</a></p>
                                    </div>
                                    <?php
                                }
                            
                                    ?>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
        <div class="row">
            <div class="col-md-9 col-sm-12">

            </div>
            <div class="col-sm-3">
                <!-- Controls -->
                <div class="controls pull-right hidden-xs">
                    <a class="left fa fa-chevron-left btn btn-success" href="#carousel-example"
                        data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-success" href="#carousel-example"
                            data-slide="next"></a>
                </div>
            </div>
        </div>
      </div> 
      </div> 
  </div>
    
    <!---- end of horizontal silide --->
    <div class="clearfix"></div>
    <div class="container" id="properties_container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12-sm" style="padding-top:15px; padding-bottom:20px;">
                <ul class="nav nav-tabs nav-pills nav-justfied" id="body_property_link">
                    <li class="active"><a href="#" style="color: #fff !important; font-weight:bold; font-size:18px;">All Properties <span class="badge" style="background:#fff;">500</span></a></li>
  <li><a href="#">Residencial House <span class="badge">100</span></a></li>
  <li><a href="#">Apartments/Hotels <span class="badge">105</span></a></li>
  <li><a href="#">Offices <span class="badge">200</span></a></li>
  <li><a href="#">Commercial <span class="badge">10</span></a></li>
  <li><a href="#">House Of Passage <span class="badge">5</span></a></li>
</ul>
            </div>
        </div>
        <div class="row">
               <div class=" col-md-3 col-sm-3 home_propety" style="">
               <div class="card card-default">
              <div class="card-header"></div>
            <div class="card-body card-6-6">
                <a href="#">
          <div class="card-left">
             <img src="Properties_images/house_img2.jpg" class="img-responsive img-thumbnail" style="height:150px; width:100%;">
           </div>
                    
          <div class="card-right">
              <h5>Commercial House for Rent in Nyarugenge - <span><strong>200 000/Rwf</strong></span></h5>
                </div>
                    </a>
               </div>
          <div class="card-body">
           <p class="">
                   <label>Category:&nbsp;</label><span>Commercial</span><br>
                    <label>Living Room:</label><span>&nbsp;2</span><br>
                    <label>BedRooms:</label><span>&nbsp;7</span><br>
                    <label>Indoor BathRoms:</label><span>&nbsp;2</span><br>
                    <label>Outdoor BathRoms:</label><span>&nbsp;1</span><br>
                    <label>Price:</label>&nbsp;<span class="badge" style="background:rgba(52, 137, 235) !important; padding:4px;">200 000/Rwf</span><br>
        
               <i class="fa fa-map-marker">&nbsp;&nbsp;<a href=https://goo.gl/maps/JurHKa8bf5J8HV3p6 target="_blank">KN 245 St, Kigali</a></i>
               <a href="#" class="btn btn-sm btn-link " style="float:right;"><i class="fa fa-list"></i>&nbsp;More details</a>
              </p>
         </div>
          </div>
           </div> 
            <div class="col-sm-3 home_propety">
      

<div class="card card-default">
  <div class="card-header"></div>
  <div class="card-body card-6-6">
    <div class="card-left">
      <img src="Properties_images/house_img1.jpg" class="img-responsive img-thumbnail" style="height:150px; width:100%;">
    </div>
    <div class="card-right">
       <h5><a href="#">Commercial House for Rent in Nyarugenge - <span><strong>200 000/Rwf</strong></span></a></h5>
    </div>
  </div>
  <div class="card-body">
   <p class="">
                   <label>Category:&nbsp;</label><span>Commercial</span><br>
                    <label>Living Room:</label><span>&nbsp;2</span><br>
                    <label>BedRooms:</label><span>&nbsp;7</span><br>
                    <label>Indoor BathRoms:</label><span>&nbsp;2</span><br>
                    <label>Outdoor BathRoms:</label><span>&nbsp;1</span><br>
                    <label>Price:</label><span>&nbsp;200 000/Rwf</span><br>
        
               <i class="fa fa-map-marker">&nbsp;&nbsp;<a href=https://goo.gl/maps/JurHKa8bf5J8HV3p6 target="_blank">KN 245 St, Kigali</a></i>
               <a href="#" class="btn btn-sm btn-link " style="float:right;"><i class="fa fa-list"></i>&nbsp;More details</a>
              </p>
    </div>
</div>
</div>     
            <div class="col-sm-3 home_propety">
      

<div class="card card-default">
  <div class="card-header"></div>
  <div class="card-body card-6-6">
    <div class="card-left">
      <img src="Properties_images/house_img3.jpg" class="img-responsive img-thumbnail" style="height:150px; width:100%;">
    </div>
    <div class="card-right">
        <h5><a href="#">Commercial House for Rent in Nyarugenge - <span><strong>200 000/Rwf</strong></span></a></h5>
    </div>
  </div>
  <div class="card-body">
     <p class="">
                   <label>Category:&nbsp;</label><span>Commercial</span><br>
                    <label>Living Room:</label><span>&nbsp;2</span><br>
                    <label>BedRooms:</label><span>&nbsp;7</span><br>
                    <label>Indoor BathRoms:</label><span>&nbsp;2</span><br>
                    <label>Outdoor BathRoms:</label><span>&nbsp;1</span><br>
                    <label>Price:</label><span>&nbsp;200 000/Rwf</span><br>
        
               <i class="fa fa-map-marker">&nbsp;&nbsp;<a href=https://goo.gl/maps/JurHKa8bf5J8HV3p6 target="_blank">KN 245 St, Kigali</a></i>
               <a href="#" class="btn btn-sm btn-link " style="float:right;"><i class="fa fa-list"></i>&nbsp;More details</a>
              </p>
    </div>
</div>
</div>     
            <div class="col-sm-3 home_propety">
      

<div class="card card-default">
  <div class="card-header"></div>
  <div class="card-body card-6-6">
    <div class="card-left">
     <img src="Properties_images/house_img4.jpg" class="img-responsive img-thumbnail" style="height:150px; width:100%;">
    </div>
    <div class="card-right">
        <h5><a href="#">Commercial House for Rent in Nyarugenge - <span><strong>200 000/Rwf</strong></span></a></h5>
    </div>
  </div>
  <div class="card-body">
   <p class="">
                   <label>Category:&nbsp;</label><span>Commercial</span><br>
                    <label>Living Room:</label><span>&nbsp;2</span><br>
                    <label>BedRooms:</label><span>&nbsp;7</span><br>
                    <label>Indoor BathRoms:</label><span>&nbsp;2</span><br>
                    <label>Outdoor BathRoms:</label><span>&nbsp;1</span><br>
                    <label>Price:</label><span>&nbsp;200 000/Rwf</span><br>
        
               <i class="fa fa-map-marker">&nbsp;&nbsp;<a href=https://goo.gl/maps/JurHKa8bf5J8HV3p6 target="_blank">KN 245 St, Kigali</a></i>
               <a href="#" class="btn btn-sm btn-link " style="float:right;"><i class="fa fa-list"></i>&nbsp;More details</a>
              </p>
  </div>
</div>
</div>   
        
        
    <div class="col-md-3 home_propety">      
<div class="card card-default">
  <div class="card-header"></div>
  <div class="card-body card-6-6">
    <div class="card-left">
      <img src="Properties_images/house_img1.jpg" class="img-responsive img-thumbnail" style="height:150px; width:100%;">
    </div>
    <div class="card-right">
       <h5><a href="#">Commercial House for Rent in Nyarugenge - <span><strong>200 000/Rwf</strong></span></a></h5>
    </div>
  </div>
  <div class="card-body">
   <p class="">
                   <label>Category:&nbsp;</label><span>Commercial</span><br>
                    <label>Living Room:</label><span>&nbsp;2</span><br>
                    <label>BedRooms:</label><span>&nbsp;7</span><br>
                    <label>Indoor BathRoms:</label><span>&nbsp;2</span><br>
                    <label>Outdoor BathRoms:</label><span>&nbsp;1</span><br>
                    <label>Price:</label><span>&nbsp;200 000/Rwf</span><br>
        
               <i class="fa fa-map-marker">&nbsp;&nbsp;<a href=https://goo.gl/maps/JurHKa8bf5J8HV3p6 target="_blank">KN 245 St, Kigali</a></i>
               <a href="#" class="btn btn-sm btn-link " style="float:right;"><i class="fa fa-list"></i>&nbsp;More details</a>
              </p>
    </div>
</div>
</div>
                <div class="col-md-3 home_propety">      
<div class="card card-default">
  <div class="card-header"></div>
  <div class="card-body card-6-6">
    <div class="card-left">
      <img src="Properties_images/house_img1.jpg" class="img-responsive img-thumbnail" style="height:150px; width:100%;">
    </div>
    <div class="card-right">
       <h5><a href="#">Commercial House for Rent in Nyarugenge - <span><strong>200 000/Rwf</strong></span></a></h5>
    </div>
  </div>
  <div class="card-body">
   <p class="">
                   <label>Category:&nbsp;</label><span>Commercial</span><br>
                    <label>Living Room:</label><span>&nbsp;2</span><br>
                    <label>BedRooms:</label><span>&nbsp;7</span><br>
                    <label>Indoor BathRoms:</label><span>&nbsp;2</span><br>
                    <label>Outdoor BathRoms:</label><span>&nbsp;1</span><br>
                    <label>Price:</label><span>&nbsp;200 000/Rwf</span><br>
        
               <i class="fa fa-map-marker">&nbsp;&nbsp;<a href=https://goo.gl/maps/JurHKa8bf5J8HV3p6 target="_blank">KN 245 St, Kigali</a></i>
               <a href="#" class="btn btn-sm btn-link " style="float:right;"><i class="fa fa-list"></i>&nbsp;More details</a>
              </p>
    </div>
</div>
</div>
                <div class="col-md-3 home_propety">      
<div class="card card-default">
  <div class="card-header"></div>
  <div class="card-body card-6-6">
    <div class="card-left">
      <img src="Properties_images/house_img1.jpg" class="img-responsive img-thumbnail" style="height:150px; width:100%;">
    </div>
    <div class="card-right">
       <h5><a href="#">Commercial House for Rent in Nyarugenge - <span><strong>200 000/Rwf</strong></span></a></h5>
    </div>
  </div>
  <div class="card-body">
   <p class="">
                   <label>Category:&nbsp;</label><span>Commercial</span><br>
                    <label>Living Room:</label><span>&nbsp;2</span><br>
                    <label>BedRooms:</label><span>&nbsp;7</span><br>
                    <label>Indoor BathRoms:</label><span>&nbsp;2</span><br>
                    <label>Outdoor BathRoms:</label><span>&nbsp;1</span><br>
                    <label>Price:</label><span>&nbsp;200 000/Rwf</span><br>
        
               <i class="fa fa-map-marker">&nbsp;&nbsp;<a href=https://goo.gl/maps/JurHKa8bf5J8HV3p6 target="_blank">KN 245 St, Kigali</a></i>
               <a href="#" class="btn btn-sm btn-link " style="float:right;"><i class="fa fa-list"></i>&nbsp;More details</a>
              </p>
    </div>
</div>
</div>
                <div class="col-md-3 home_propety">      
<div class="card card-default">
  <div class="card-header"></div>
  <div class="card-body card-6-6">
    <div class="card-left">
      <img src="Properties_images/house_img1.jpg" class="img-responsive img-thumbnail" style="height:150px; width:100%;">
    </div>
    <div class="card-right">
       <h5><a href="#">Commercial House for Rent in Nyarugenge - <span><strong>200 000/Rwf</strong></span></a></h5>
    </div>
  </div>
  <div class="card-body">
   <p class="">
                   <label>Category:&nbsp;</label><span>Commercial</span><br>
                    <label>Living Room:</label><span>&nbsp;2</span><br>
                    <label>BedRooms:</label><span>&nbsp;7</span><br>
                    <label>Indoor BathRoms:</label><span>&nbsp;2</span><br>
                    <label>Outdoor BathRoms:</label><span>&nbsp;1</span><br>
                    <label>Price:</label><span>&nbsp;200 000/Rwf</span><br>
        
               <i class="fa fa-map-marker">&nbsp;&nbsp;<a href=https://goo.gl/maps/JurHKa8bf5J8HV3p6 target="_blank">KN 245 St, Kigali</a></i>
               <a href="#" class="btn btn-sm btn-link " style="float:right;"><i class="fa fa-list"></i>&nbsp;More details</a>
              </p>
    </div>
</div>
</div>
</div>
        <div class="row">
     <div class="col-md-12">
         <center>
  <ul class="pagination pagination-sm">
  <li class="previous"><a href="#">Previous</a></li>
  <li class="active"><a href="#" >1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li class="next"><a href="#">Next</a></li>
</ul>
         </center>
        </div>
        </div>
</div>

</div>
<div id="preloader"></div>
        
