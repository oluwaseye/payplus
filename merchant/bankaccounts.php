<?php include'header.php';?>
<?php include'menu.php';?>                
                <div class="mainpanel">
                    <div class="pageheader">
                        <div class="media">
                            <div class="pageicon pull-left">
                                <i class="fa fa-bank"></i>
                            </div>
                            <div class="media-body">
                                <ul class="breadcrumb">
                                    <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
                                    <li>Bank Accounts</li>
                                </ul>
                                <h4>Bank Accounts</h4>
                            </div>
                        </div><!-- media -->
                    </div><!-- pageheader -->
                    
                    <div class="contentpanel">
                    <div class="panel panel-heading">
                        <h5>Here you can view your associated bank account(s) and add up to 5 bank accounts.
                            <a href="add_bankaccount.php" class="btn btn-info pull-right"><i class="fa fa-plus"></i> Add Account</a>
                        </h5>

                    </div>
                        <div class="panel panel-primary-head">
                            
                            <table id="basicTable" class="table table-striped table-bordered responsive">
                                <thead class="">
                                    <tr>
                                        <th>Bank</th>
                                        <th>Account No</th>
                                        <th>Account Name</th>
                                        <th>Bank Branch</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                         
                                <tbody>
                                    <tr>
                                        <td>Guaranty Trust Bank</td>
                                        <td>1234567890</td>
                                        <td>Peter Okoye</td>
                                        <td>Victoria Island / Lagos</td>
                                        <td>Active</td>
                                    </tr>
                                </tbody>
                            </table>
                                    
                        </div><!-- panel -->
                     
                        
                    </div><!-- contentpanel -->
                </div><!-- mainpanel -->
            </div><!-- mainwrapper -->
        </section>

        
<?php include'footer.php';?>
