<?php include'header.php';?>
<?php include'menu.php';?>                
                <div class="mainpanel">
                    <div class="pageheader">
                        <div class="media">
                            <div class="pageicon pull-left">
                                <i class="fa fa-bell"></i>
                            </div>
                            <div class="media-body">
                                <ul class="breadcrumb">
                                    <li><a href="#"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                                    <li>Transactions</li>
                                </ul>
                                <h4>Transactions</h4>
                            </div>
                        </div><!-- media -->
                    </div><!-- pageheader -->
                    
                    <div class="contentpanel">
                    <div class="panel panel-heading">
                        <h5>Here you can view all your Transactions. </h5>

                    </div>
                        <div class="panel panel-primary-head">
                            
                            <table id="basicTable" class="table table-striped table-bordered responsive">
                                <thead class="">
                                    <tr>
                                        <th>Transaction ID</th>
                                        <th>Amount (&#8358;)</th>
                                        <th>Balance (&#8358;)</th>
                                        <th>Date</th>
                                        <th>Channel</th>
                                        <th>Status</th>
                                        <th>Response</th>
                                    </tr>
                                </thead>
                         
                                <tbody>
                                    <tr>
                                        <td>405992872</td>
                                        <td>40,150.00</td>
                                        <td>0.00</td>
                                        <td>10/9/2014</td>
                                        <td><img src="images/mastercard.png" style="width:60px;"></td>
                                        <td><span class="badge badge-success">Success</span></td>
                                        <td>Approved</td>
                                    </tr>

                                       <tr>
                                        <td>405992873</td>
                                        <td>10,150.00</td>
                                        <td>0.00</td>
                                        <td>10/9/2014</td>
                                        <td><img src="images/verve.png" style="width:60px;"></td>
                                        <td><span class="badge badge-success">Success</span></td>
                                        <td>Approved</td>
                                    </tr>
                                </tbody>
                            </table>
                                    
                        </div><!-- panel -->
                     
                        
                    </div><!-- contentpanel -->
                </div><!-- mainpanel -->



                
            </div><!-- mainwrapper -->
        </section>

        
<?php include'footer.php';?>
