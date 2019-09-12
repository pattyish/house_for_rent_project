<?php include('public/includes/header.php')?>
<div class="container">
<div class="row" style="padding-bottom:40px;">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-8">
        <div class="well">
            <p>
            by filling the form bellow we will be able to get requset and find the property you requested.
            </p>
        </div>
        </div>
        </div>
    </div>
    <div class="col-md-12">
    <div class="row">
        <div class="col-md-1"></div>       
<div class="col-md-8">
    <form method="" action="" autocomplete="off">
            <fieldset>
            <legend><a class="badge" style="width: 25px; border: 1px solid #bac921;"></a> Property Identifications</legend>
            <label for="CompanyName">Property type</label>
            <select id="CreditcardMonth" name="asset_type_id" class="form-control validate[required]">
                            <option value="2">Renting</option>
                            <option value="3">Sales</option>
                        </select>
            <label for="CompanyName">Property category</label>
            <select id="cat_id" class="form-control validate[required]">
                <option></option>
                                <option value="1">Houses</option>
                            <option value="2">Land</option>
                        </select>
            <div id="subcats">
            </div>
            <label for="CompanyName">Property Details/Descriptions</label>
            <textarea name="property_characteristics" class="form-control validate[required]"></textarea>
            
            <label for="Website">Neighborhood Details and Property location</label>
            <textarea name="neighborhood_details" class="form-control validate[required]"></textarea>
            <label for="CompanyEmail">Budget</label>
            <div class="row">
                <div class="col-md-6">
                    <label for="Name">Minimum Cost</label>
            <input id="Name" name="min_amoun" type="number" class="form-control validate[required]" placeholder="Rwf">
                </div>
                <div class="col-md-6">
                    <label for="Name">Maximum Cost</label>
            <input id="Name" name="max_amount" type="number" class="form-control validate[required]" placeholder="Rwf">
                </div>
            </div>
            
            <label for="Name">In which Time range do you need it ? </label>
            <select name="request_time_range_id" id="CreditcardMonth" class="form-control" validate[required]="">
                                <option value="1">Early</option>
                            <option value="2">Today</option>
                            <option value="3">This Week</option>
                            <option value="4">Next week</option>
                            <option value="5">This Month</option>
                            <option value="6">Next Month</option>
                            <option value="7">This Year</option>
                            <option value="8">Other</option>
                        </select><hr>
        <p id="step1commands" class="commands"><a href="#" id="step1Next" class="btn next btn-success">Submit Request <i class="fa fa-arrow-circle-right"></i></a></p></fieldset>
    </form>
</div>
</div>
     </div>
     </div>
</div>


<?php include('public/includes/footer.php')?>