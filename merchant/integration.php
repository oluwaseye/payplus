<?php include'header.php';?>
<?php include'menu.php';?>                
                <div class="mainpanel">
                    <div class="pageheader">
                        <div class="media">
                            <div class="pageicon pull-left">
                                <i class="fa fa-code"></i>
                            </div>
                            <div class="media-body">
                                <ul class="breadcrumb">
                                    <li><a href="#"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                                    <li><a href="#">Website Intergration</a></li>
                                </ul>
                                <h4>Website Integration</h4>
                            </div>
                        </div><!-- media -->
                    </div><!-- pageheader -->
                    
                    <div class="contentpanel">
                 <div class="row">
                 <div class="col-md-6">

                           <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">Checkout Button HTML Code</h5>
                                <p>For your Pay Button. Copy and Paste the Code below on your website. </p>
                            </div><!-- panel-heading -->
                            <div class="panel-body nopadding">
                                <textarea id="code" name="code" disabled="disabled">
<form method="post" action="ipay.payplus.ng/Transx/" id="payplus_pay">
    <input type="hidden" name="merchant_id" value="12154-729" />
    <input name="total_cost" value="" />
    <input type="image" 
    src="https://payplus.ng/merchant/images/buynow_blue.png" alt="PAYPLUS" id="button-img"/>
</form>


</textarea>   
                            </div><!-- panel-body -->
                        </div><!-- panel -->

                        </div>

                           <div class="col-md-6">
                            <div class="panel panel-primary-head">
                    
                                        <form id="form2" class="form-horizontal form-bordered">
                                    <div class="panel panel-default">
                                 
                                        <div class="panel-body nopadding">

                                            <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                  
                                   
                                    </div><!-- panel -->
                                    
                                
                     
                                    </div><!-- panel -->
                                      
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Choose Button:</label>
                                                <div class="col-sm-5">
                                                   <select name="button_type" class="form-control" id="payment-opt">
                                                   <option value="">Choose a Button</option>
                                                       <option value="default_button" id="default_button">Default Button</option>
                                                       <option value="orange_button" id="orange_button">Orange Button</option>
                                                       <option value="white_button" id="white_button">White Button</option>
                                                       <option value="dark_button" id="dark_button">Dark Button</option>
                                                   </select>
                                                </div>
                                                <div class="col-sm-3">
                                                        <div id="button-img-div">
                
                                                        </div>
                                                </div>
                                            </div><!-- form-group -->

                                                <div class="form-group">
                                                <label class="col-sm-4 control-label">Notifcation URL:</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="notification_url" class="form-control" placeholder="Notifcation URL" />
                                                </div>
                                            </div><!-- form-group -->

                                                <div class="form-group">
                                                <label class="col-sm-4 control-label">Success URL:</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="success_url" class="form-control" placeholder="Success URL" />
                                                </div>
                                            </div><!-- form-group -->

                                                  <div class="form-group">
                                                <label class="col-sm-4 control-label">Failure URL:</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="success_url" class="form-control" placeholder="Failure URL" />
                                                </div>
                                            </div><!-- form-group -->
                                     
                                        </div><!-- panel-body -->
                                        <div class="panel-footer">
                                            <button class="btn btn-primary mr5 pull-right">Submit</button>
                                        </div><!-- panel-footer -->
                                    </div><!-- panel -->
                                </form>
                                    
                        </div><!-- panel -->                                    
                                </div><!-- panel-group -->
                                
                            </div><!-- col-md-6 -->
                     
                        
                    </div><!-- contentpanel -->
                </div><!-- mainpanel -->
            </div><!-- mainwrapper -->
        </section>

        
<?php include'footer.php';?>
