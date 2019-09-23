 <div class="col-lg-10 col-md-10 products_area" style="background:white; ">
                <div class="row" style="overflow-y:scroll; height:500px;">
                        <div class="col-lg-12">
                            <div style="margin-left:23px; padding-top:25px;">
                                <div class="col-md-12">
                    
                            <div class="alert alert-info">
                                    <strong><i class="icon-user icon-large"></i>&nbsp;All Properties</strong>
                                </div>
                 
                            </div>
                        </div>
                       <div class="col-lg-12">
                           <div style="margin-left:23px;">
                               
                               <div class="row">
                                   <div class="col-md-2">
                                   <div class="dataTables_length" id="dataTables-example_length"><label><select name="dataTables-example_length" aria-controls="dataTables-example" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></label>&nbsp;records per page</div>
                                   </div>
                                   <div class="col-md-10 search_box_admin">
                                       <div class="" style="padding-left:15px;">
  <div class="row search_input">
<form class="form-inline">
  <div class="form-group">
    <select class="form-control">
      <option>-- Search by propety status --</option>
</select>
  </div>
  <div class="form-group ">
  <select class="form-control">
      <option>-- Search by type --</option>
</select>
  </div>
  <div class="form-group ">
  <select class="form-control">
      <option>-- Search by Max price --</option>
</select>
    </div>
  <div class="form-group">
    <input type="submit" class="form-control btn btn-primary" value="Search"> 
  </div>
</form>
</div>
</div>
                                   </div>
                               </div>
                                       <div class="table-responsive">
  <table class="table table-hover table-striped table-bordered">
    <thead>
      <tr>
        
        <th> Name</th>
        <th>origin</th>
        <th>Category</th>
        <th>sub_Category</th>
        <th>Description</th>
        <th>Quantity</th>
        <th>Unit Price</th>
        <th>Image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $posts=getPost();
    foreach ($posts as $key => $post) {
    $postId=$post['post_id'];
    $postname=$post['title'];
    $Category=getCategory($post['category']);
    $postimage=getImages($post['post_id']);
    
    }
    ?> 
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>
            
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
    <a href="#" role="button"  data-target = "" data-toggle="modal" class="btn btn-primary"><i class="icon-trash icon-large"></i>View</a>
               
    <a href="#edit_product_model?id =" class="btn btn-success" data-target = "#edit_product_model>"data-toggle="modal"><i class="icon-pencil icon-large"></i>&nbsp;Edit</a>
                 
                                            </td>
        </tr>
         
        
    </tbody>
  </table>
  </div> 
 
                             
                        </div>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
       
            