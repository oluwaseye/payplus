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
                                    <li><a href="bankaccounts.php">Bank Accounts</a></li>
                                    <li>Add Account</a></li>
                                </ul>
                                <h4>Bank Accounts</h4>
                            </div>
                        </div><!-- media -->
                    </div><!-- pageheader -->
                    
                    <div class="contentpanel">
                 <div class="row">
                 <div class="col-md-6">
                        <div class="panel panel-primary-head">
                            <div class="panel panel-heading">
                                <h4>Add a Bank Account</h4>
                                
                            </div>
                                        <form id="form2" class="form-horizontal form-bordered">
                                    <div class="panel panel-default">
                                 
                                        <div class="panel-body nopadding">
                                         <div class="form-group">
                                                <label class="col-sm-4 control-label">Bank:</label>
                                                <div class="col-sm-8">
                                                    <select name="bank_name" class="form-control">
                                                    <option value="">Choose your Bank</option>
                                                    <option value='3' > Citibank </option>
                                                    <option value='1' >Access Bank</option>
                                                    <option value='4' >Diamond Bank</option>
                                                    <option value='5' >Ecobank </option>
                                                    <option value='16' >Enterprise Bank Limited</option>
                                                    <option value='6' >Equitorial Trust Bank</option>
                                                    <option value='8' >FCMB</option>
                                                    <option value='9' >Fidelity Bank</option>
                                                    <option value='10' >Finbank</option>
                                                    <option value='7' >First Bank </option>
                                                    <option value='11' >Guaranty Trust Bank</option>
                                                    <option value='12' >Intercontinental Bank</option>
                                                    <option value='14' >Keystone Bank</option>
                                                    <option value='2' >Mainstreet Bank</option>
                                                    <option value='13' >Oceanic Bank (Now Ecobank)</option>
                                                    <option value='27' >Raiffeisen Bank, Romania</option>
                                                    <option value='15' >Skye Bank</option>
                                                    <option value='17' >StanbicIBTC</option>
                                                    <option value='18' >Standard Chartered Bank</option>
                                                    <option value='19' >Sterling Bank</option>
                                                    <option value='28' >TBI Bank, Bulgaria</option>
                                                    <option value='21' >Union Bank</option>
                                                    <option value='20' >United Bank for Africa</option>
                                                    <option value='24' >Unity Bank</option>
                                                    <option value='22' >Wema Bank</option>
                                                    <option value='23' >Zenith Bank</option>
                                                        
                                                    </select>
                                                </div>
                                            </div><!-- form-group -->

                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Account Name:</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="name" class="form-control" placeholder="Name of the account holder" />
                                                </div>
                                            </div><!-- form-group -->

                                                <div class="form-group">
                                                <label class="col-sm-4 control-label">Account No (NUBAN):</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="name" class="form-control" placeholder="10 Digit Account No (NUBAN)" />
                                                </div>
                                            </div><!-- form-group -->

                                                <div class="form-group">
                                                <label class="col-sm-4 control-label">Bank Branch:</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="name" class="form-control" placeholder="Name of the account holder" />
                                                </div>
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                      <small>By clicking submit below, you certify that the bank account whose information is provided above belongs to you and you are legally permitted to use it for this purpose.</small>
                                      </div>
                                        </div><!-- panel-body -->
                                        <div class="panel-footer">
                                            <button class="btn btn-primary mr5 pull-right">Submit</button>
                                        </div><!-- panel-footer -->
                                    </div><!-- panel -->
                                </form>
                                    
                        </div><!-- panel -->
                        </div>

                           <div class="col-md-6">
                                <h5 class="lg-title mb10">Frequently Asked Questions</h5>
                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                    Why do i need a bank account?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                You need a bank account to be able to withdraw money. All withdrawals from your PayPlus wallet will be paid as deposit into your bank account.
                                            </div>
                                        </div>
                                    </div><!-- panel -->
                                    
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseTwo">
                                                    Which Banks are accepted?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse">
                                            <div class="panel-body">
                                             All Nigerian banks are accepted as long as the bank supports interbank deposits.
                                            </div>
                                        </div>
                                    </div><!-- panel -->

                                       <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseThree">
                                                    How many accounts do i need to create?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse">
                                            <div class="panel-body">
                                             You need just one account for withdrawal but you may create as many accounts as you wish.
                                            </div>
                                        </div>
                                    </div><!-- panel -->

                                      <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseFour">
                                                   Why is the account number 10 characters?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseFour" class="panel-collapse collapse">
                                            <div class="panel-body">
                                             This is to comply with the CBN implementation modality with NUBAN. Old account numbers are not accepted. If you do not have a NUBAN account number, please contact your bank to give you the NUBAN format for your old account number.
                                            </div>
                                        </div>
                                    </div><!-- panel -->


                                      <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseFive">
                                                   What is NUBAN
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseFive" class="panel-collapse collapse">
                                            <div class="panel-body">
                                             NUBAN means NIGERIAN UNIFORM BANK ACCOUNT NUMBER. NUBAN has great potentials to resolve the observed problems with electronic payments in Nigeria, as many of them are related to specification of wrong beneficiary account numbers.
VoguePay verifies each account number with the selected banks nuban code and checkdigit to ensure that your bank account complies with CBN IMPLEMENTATION MODALITY for NUBAN found <a href="http://www.cenbank.org/out/2011/circulars/bspd/nuban%20proposals%20v%200%204-%2003%2009%202010.pdf" target="_blank">here</a>
                                            </div>
                                        </div>
                                    </div><!-- panel -->


                     
                                    </div><!-- panel -->
                                    
                                </div><!-- panel-group -->
                                
                            </div><!-- col-md-6 -->
                     
                        
                    </div><!-- contentpanel -->
                </div><!-- mainpanel -->
            </div><!-- mainwrapper -->
        </section>

        
<?php include'footer.php';?>
