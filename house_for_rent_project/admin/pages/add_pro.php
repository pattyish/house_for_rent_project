 <div class="col-lg-10 col-md-10 products_area" style="background:white; padding-bottom:20px; ">
                      <div class="row">
                          <div class="col-lg-12" style="height:100px;">
                            <div style="margin-left:23px; padding-top:25px;">
                            <div class="alert alert-info">
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Add Property </strong>
                                </div>
                            </div>
                        </div>
 <div class="col-md-8" style="margin-left:23px;">
     
<form method="POST" action="add_pro" enctype="multipart/form-data">
        
    <!---  The advert ---->
           <div id="advertiser_details">
         <h3>The advert</h3>
                <hr>

   <div class="form-group">
    <label for="email">Advert Type:<span style="color:red; font-size:20px;">&nbsp;<strong>*</strong></span></label>
    <select class="form-control" name="category">
        <option value="0">choose category</option>
        <?php
        $categories=getCategories();
        foreach ($categories as $key => $category) {
                      $categoryId = $category['id'];
                      $categoryName = $category['name'];
                      echo "<option value=\"$categoryId\">$categoryName</option>";
                                    }

        ?>
        
       </select>
  </div>
<div class="form-group">
    <label for="email">Advert Title:<span style="color:red; font-size:20px;">&nbsp;<strong>*</strong></span></label>
    <input type="text" class="form-control" id="email" name="Title">
  </div>
  </div>
    <!---- property details----->
            <div id="property_details">
         <h4>Property Details And feactures</h4>
                <hr>
  </div>
    <!---- pricing---->
    <div class="panel panel-info">
  <div class="panel-heading">Property Details And feactures</div>
  <div class="panel-body">
      <div class="row">
          <div class="col-md-6">
        			<fieldset  class="fieldgroup form-composite required " aria-required="true" >
      <legend>
    <span class="fieldset-legend js-form-required form-required">Price and Rooms</span>
  </legend>
  <div  style="padding-left:5px;">
<div class="form-inline form-item  form-type-number form-group">
<label for="" class="control-label">Price<span style="color:red; font-size:20px;">&nbsp;<strong>*</strong></span></label>
  <input type="number" class="form-number required form-control"  placeholder="" required="required" aria-required="true" name="price">
    <div class="checkbox form-group" style="padding-top:5px; color:green; padding-bottom:5px;"><label><input type="checkbox" class="checkbox" name="price2">&nbsp;&nbsp; is price negotiable?</label> </div>
  
  </div>
        <div class="form-inline form-item  form-type-number form-group">
<label for="" class="control-label">Living Rooms<span style="color:red; font-size:20px;">&nbsp;<strong>*</strong></span></label>
  <input type="number" class="form-number required form-control"  placeholder="" required="required" aria-required="true" name="Lrooms">
  
  </div>
<div class="form-inline form-item  form-type-number form-group">
<label for="" class="control-label">Bed Rooms<span style="color:red; font-size:20px;">&nbsp;<strong>*</strong></span></label>
  <input type="number" class="form-number required form-control"  placeholder="" required="required" aria-required="true" name="Brooms">
  
  </div>
<div class="form-inline form-item  form-type-number form-group">
<label for="" class="control-label">Indoor BathRooms<span style="color:red; font-size:20px;">&nbsp;<strong>*</strong></span></label>
  <input type="number" class="form-number required form-control"  placeholder="" required="required" aria-required="true" name="indoreb">
  
  </div>
<div class="form-inline form-item  form-type-number form-group">
<label for="">Outdoor BathRooms<span style="color:red; font-size:20px;">&nbsp;<strong>*</strong></span></label>
  <input type="number" class=" form-control"  placeholder="" required="required" aria-required="true" name="Outdoorb">
    </div>
              </div>
</fieldset>
              </div>
              <div class="col-md-6">
                  <div class="row">
                      <div class="col-md-12">
                  <fieldset  class="fieldgroup">
                  <div id="property_features">
         <legend>
    <span class="fieldset-legend js-form-required form-required">Feactures</span>
  </legend>
   <div class="checkbox form-group" style="padding-top:5px; padding-bottom:5px;">
    <label><input type="checkbox" class="" name="feactures[]"> swimming pool</label>
    <label><input type="checkbox" class="" name="feactures[]"> Loundry</label>
    <label><input type="checkbox"  class=""name="feactures[]"> Window covering</label>
  </div>
  <div class="checkbox form-group" style="padding-top:5px; padding-bottom:5px;">
    <label><input type="checkbox" class="" name="feactures[]"> swimming pool</label>
    <label><input type="checkbox" class="" name="feactures[]"> Loundry</label>
    <label><input type="checkbox"  class=""name="feactures[]"> Window covering</label>
  </div>
  </div>
                  </fieldset>
              </div>
                      <div class="col-md-12">
                               <div id="property_descr">
                 <div id="property_features">
         <legend>
    <span class="fieldset-legend js-form-required form-required">property description</span>
  </legend>
  <div class="form-group">
      <textarea class="form-control" name="description">
      </textarea>
  </div>
    </div>
                      </div>
              </div>
              </div>
         
</div>
</div>
</div>
</div>
   
  <div class="form-group">
       <fieldset  class="fieldgroup">
                  <div id="property_features">
         <legend>
    <span class="fieldset-legend js-form-required form-required">Upload Property Images</span>
  </legend>
   <div class="form-group">
       <div class="form-inline form-group">
<label for="main_image" class="control-label">Add image<span style="color:red; font-size:20px;">&nbsp;<strong>*</strong></span></label>
  <input type="file" class="form-control" name="image" required style="padding:0px;" >
</div>
   <div class="form-inline form-group">
<label for="main_image" class="control-label">Add more images<span style="color:red; font-size:20px;">&nbsp;<strong>*</strong></span></label>
  <input type="file" class="form-number required form-control" name="files[]" multiple required style="padding:0px;" >           
  </div>
       
                      </div>
  </div>
                  </fieldset>
    </div>
    <!---property features--->
     
         
    <!----property description---->
      
    <div id="property_on_map">
         <h3>Property on Map</h3>
                <hr>
  <div class="form-group">
      
      <p>
      put map here!!!
      </p>
  </div>
    </div>
     <button type="submit" class="btn btn-primary btn-default" name="submit">Post</button>
  <button type="submit" class="btn btn-success btn-default">Cancel</button>
</form>
    </div>

    </div>
                    </div>
                </div>
            </div>
        </div>
            <?php
            if(isset($_POST['submit']))
            {
              $category=$_POST['category'];
              if(empty($_POST['price2']))
              {
                 $nego='no';
              }
              else{
                $nego='yes';
              }
             
              $Title=$conn->real_escape_string($_POST['Title']);
              $price=$conn->real_escape_string($_POST['price']);
              $lrooms=$conn->real_escape_string($_POST['Lrooms']);
              $brooms=$conn->real_escape_string($_POST['Brooms']);
              $indoreb=$conn->real_escape_string($_POST['indoreb']);
              $Outdoorb=$conn->real_escape_string($_POST['Outdoorb']);
              $description=$conn->real_escape_string($_POST['description']);
              $features=$_POST['feactures'];
              $newValues=implode(",", $features);
              if($Title&$price&&$lrooms&&$brooms&&$indoreb&&$Outdoorb&$category)
              {
                $sql="INSERT INTO post(title,status,discription,address,postdate,livingroom,bedrooms,indore,outdore,features,category,nego,usercode) values(\"$Title\",'available',\"$description\",'',CURRENT_TIMESTAMP,\"$lrooms\",\"$brooms\",\"$indoreb\",\"$Outdoorb\",\"$newValues\",\"$category\",\"$nego\",\"$currentUserId\")";
                $q=$conn->query($sql) or trigger_error($conn->error);
              }
              else
              {
                 echo '<script type="text/javascript">';
                  echo ' alert("please fill all data")';  //not showing an alert box.
                  echo '</script>';
              }
              if($q)
              {

             

              $image = $_FILES['image']['name'];
               $target = "../images/".basename($image);
               $sql2 = $conn->query("INSERT INTO images(name,main) values(\"$image\",'yes')") or trigger_error($conn->error);
               if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        
    }else{
      $msg = "please select the image";
    }
  } 
  if($sql2)
  {
 $targetDir = "../images/";
    $allowTypes = array('jpg','png','jpeg','gif');
    
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
    if(!empty(array_filter($_FILES['files']['name']))){
        foreach($_FILES['files']['name'] as $key=>$val){
            // File upload path
            $fileName = basename($_FILES['files']['name'][$key]);
            $targetFilePath = $targetDir . $fileName;
            
            // Check whether file type is valid
            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
            if(in_array($fileType, $allowTypes)){
                // Upload file to server
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){
                    // Image db insert sql
                     $insertValuesSQL .= "('".$fileName."',";
                }else{
                    $errorUpload .= $_FILES['files']['name'][$key].', ';
                }
            }else{
                $errorUploadType .= $_FILES['files']['name'][$key].', ';
            }
        }
        
        if(!empty($insertValuesSQL)){
            $insertValuesSQL = trim($insertValuesSQL,',');
            // Insert image file name into database
            $insert = $conn->query("INSERT INTO images (name,main) VALUES(\"$insertValuesSQL\",'no')")or trigger_error($conn->error);;
            if($insert){
                $errorUpload = !empty($errorUpload)?'Upload Error: '.$errorUpload:'';
                $errorUploadType = !empty($errorUploadType)?'File Type Error: '.$errorUploadType:'';
                $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType;
                $statusMsg = "Files are uploaded successfully.".$errorMsg;
            }else{
                $statusMsg = "Sorry, there was an error uploading your file.".$errorMsg;
            }
        }
    }else{
        $statusMsg = 'Please select a file to upload.';
    }
    
    // Display status message
    echo $statusMsg;
  }


            }
            ?>
            <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>