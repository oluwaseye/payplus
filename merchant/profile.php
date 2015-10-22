<?php include'header.php';?>
<?php include'menu.php';?>
                <div class="mainpanel">
          
                    
                    <div class="contentpanel">
                 <div class="row">
                 <div class="col-md-6">
                        <div class="panel panel-primary-head">
                            <div class="panel panel-heading">
                                <h4>Profile</h4>
                                
                            </div>
                                        <form id="form2" class="form-horizontal form-bordered">
                                    <div class="panel panel-default">
                                 
                                        <div class="panel-body nopadding">
                                        <div class="row">
                                    <div class="col-md-12">

                                        <div class="form-group">
                                        <h4><i class="fa fa-envelope"></i> Personal Information</h4>
                                        </div>

                                              <div class="form-group">
                                                <label class="col-sm-4 control-label">Email Address:</label>
                                                <div class="col-sm-8">
                                                         <div class="input-group">
                                            <input type="text" class="form-control" value="peter@gmail.com" disabled="disabled">
                                        </div><!-- input-group -->

                                                </div>
                                            </div><!-- form-group -->

                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Date of Birth:</label>
                                                <div class="col-sm-8">
                                                         <div class="input-group">
                                            <input type="text" class="form-control" placeholder="YYYY-MM-DD" id="datebirth">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                        </div><!-- input-group -->

                                                </div>
                                            </div><!-- form-group -->

                                                    <div class="form-group">
                                                <label class="col-sm-4 control-label">Gender:</label>
                                                <div class="col-sm-8">
                                                         <div class="rdio rdio-default">
                                                        <input type="radio" name="gender" id="radioDefault" value="female"/>
                                                        <label for="radioDefault">Female</label>
                                                    </div>
                                                      
                                                    <div class="rdio rdio-primary">
                                                        <input type="radio" name="gender" value="male" id="radioPrimary" />
                                                        <label for="radioPrimary">Male</label>
                                                    </div>
                                                </div>
                                            </div><!-- form-group -->
                                      <div class="form-group">
                                        <h4><i class="fa fa-envelope"></i> Contact Information</h4>
                                        </div>

                                           <div class="form-group">
                                                <label class="col-sm-4 control-label">Contact Address:</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="name" class="form-control" placeholder="Name of the account holder" />
                                                </div>
                                            </div><!-- form-group -->
                                                <div class="form-group">
                                                <label class="col-sm-4 control-label">State:</label>
                                                <div class="col-sm-8">
                                                    <select name="state" class="form-control">     
<option value="Abia">Abia</option>      
<option value="Adamawa">Adamawa</option>    
<option value="Akwa-Ibom">Akwa-Ibom</option>        
<option value="Anambra">Anambra</option>        
<option value="Bauchi">Bauchi</option>      
<option value="Bayelsa">Bayelsa</option>        
<option value="Benue">Benue</option>        
<option value="Borno">Borno</option>        
<option value="CrossRiver">CrossRiver</option>      
<option value="Delta">Delta</option>        
<option value="Ebonyi">Ebonyi</option>      
<option value="Edo">Edo</option>        
<option value="Ekiti">Ekiti</option>        
<option value="Enugu">Enugu</option>        
<option value="Gombe">Gombe</option>        
<option value="F.C.T Abuja">F.C.T Abuja</option>        
<option value="Imo">Imo</option>        
<option value="Jigawa">Jigawa</option>      
<option value="Kaduna">Kaduna</option>      
<option value="Kano">Kano</option>      
<option value="Katsina">Katsina</option>        
<option value="Kebbi">Kebbi</option>        
<option value="Kogi">Kogi</option>      
<option value="Kwara">Kwara</option>        
<option value="Lagos" selected="selected">Lagos</option>        
<option value="Nasarawa">Nasarawa</option>      
<option value="Niger">Niger</option>        
<option value="Ogun">Ogun</option>      
<option value="Ondo">Ondo</option>      
<option value="Osun">Osun</option>      
<option value="Oyo">Oyo</option>        
<option value="Plateau">Plateau</option>        
<option value="Rivers">Rivers</option>      
<option value="Sokoto">Sokoto</option>      
<option value="Taraba">Taraba</option>      
<option value="Yobe">Yobe</option>      
<option value="Zamfara">Zamfara</option>        
<option value="Not in Nigeria">Not in Nigeria</option>  
</select>
                                                </div>
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                            <label class="col-sm-4 control-label">Country:</label>
                                                <div class="col-sm-8">
                                                <select name="country" class="form-control">        
<option value="Afghanistan">Afghanistan</option>         
<option value="Albania">Albania</option>         
<option value="Algeria">Algeria</option>         
<option value="American Samoa">American Samoa</option>       
<option value="Andorra">Andorra</option>         
<option value="Angola">Angola</option>       
<option value="Anguilla">Anguilla</option>       
<option value="Antarctica">Antarctica</option>       
<option value="Antigua and Barbuda">Antigua and Barbuda</option>         
<option value="Argentina">Argentina</option>         
<option value="Armenia">Armenia</option>         
<option value="Aruba">Aruba</option>         
<option value="Australia">Australia</option>         
<option value="Austria">Austria</option>         
<option value="Azerbaijan">Azerbaijan</option>       
<option value="Bahamas">Bahamas</option>         
<option value="Bahrain">Bahrain</option>         
<option value="Bangladesh">Bangladesh</option>       
<option value="Barbados">Barbados</option>       
<option value="Belarus">Belarus</option>         
<option value="Belgium">Belgium</option>         
<option value="Belize">Belize</option>       
<option value="Benin">Benin</option>         
<option value="Bermuda">Bermuda</option>         
<option value="Bhutan">Bhutan</option>       
<option value="Bolivia">Bolivia</option>         
<option value="Bosnia Herzegovina">Bosnia Herzegovina</option>       
<option value="Botswana">Botswana</option>       
<option value="Bouvet Island">Bouvet Island</option>         
<option value="Brazil">Brazil</option>       
<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>       
<option value="Brunei Darussalam">Brunei Darussalam</option>         
<option value="Bulgaria">Bulgaria</option>       
<option value="Burkina Faso">Burkina Faso</option>       
<option value="Burundi">Burundi</option>         
<option value="C.A.R.">C.A.R.</option>       
<option value="Cambodia">Cambodia</option>       
<option value="Cameroon">Cameroon</option>       
<option value="Canada">Canada</option>       
<option value="Cape Verde">Cape Verde</option>       
<option value="Cayman Islands">Cayman Islands</option>       
<option value="Central African Republic">Central African Republic</option>       
<option value="Chad">Chad</option>       
<option value="Chile">Chile</option>         
<option value="China">China</option>         
<option value="Christmas Island">Christmas Island</option>       
<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>         
<option value="Colombia">Colombia</option>       
<option value="Comoros">Comoros</option>         
<option value="Congo">Congo</option>         
<option value="Cook Islands">Cook Islands</option>       
<option value="Costa Rica">Costa Rica</option>       
<option value="Cote D Ivoire">Cote D Ivoire</option>         
<option value="Croatia">Croatia</option>         
<option value="Cuba">Cuba</option>       
<option value="Cyprus">Cyprus</option>       
<option value="Czech Republic">Czech Republic</option>       
<option value="Denmark">Denmark</option>         
<option value="Djibouti">Djibouti</option>       
<option value="Dominica">Dominica</option>       
<option value="Dominican Republic">Dominican Republic</option>       
<option value="East Timor">East Timor</option>       
<option value="Ecuador">Ecuador</option>         
<option value="Egypt">Egypt</option>         
<option value="El Salvador">El Salvador</option>         
<option value="England">England</option>         
<option value="Equatorial Guinea">Equatorial Guinea</option>         
<option value="Eritrea">Eritrea</option>         
<option value="Estonia">Estonia</option>         
<option value="Ethiopia">Ethiopia</option>       
<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>         
<option value="Faroe Islands">Faroe Islands</option>         
<option value="Fiji">Fiji</option>       
<option value="Finland">Finland</option>         
<option value="France">France</option>       
<option value="French Guiana">French Guiana</option>         
<option value="French Polynesia">French Polynesia</option>       
<option value="French Southern Territories">French Southern Territories</option>         
<option value="Gabon">Gabon</option>         
<option value="Gambia">Gambia</option>       
<option value="Georgia">Georgia</option>         
<option value="Germany">Germany</option>         
<option value="Ghana">Ghana</option>         
<option value="Gibraltar">Gibraltar</option>         
<option value="Greece">Greece</option>       
<option value="Greenland">Greenland</option>         
<option value="Grenada">Grenada</option>         
<option value="Guadeloupe">Guadeloupe</option>       
<option value="Guam">Guam</option>       
<option value="Guantemala">Guantemala</option>       
<option value="Guinea">Guinea</option>       
<option value="Guinea-Bissau">Guinea-Bissau</option>         
<option value="Guyana">Guyana</option>       
<option value="Haiti">Haiti</option>         
<option value="Heard And Mc Donald Islands">Heard And Mc Donald Islands</option>         
<option value="Honduras">Honduras</option>       
<option value="Hong Kong">Hong Kong</option>         
<option value="Hungary">Hungary</option>         
<option value="Iceland">Iceland</option>         
<option value="India">India</option>         
<option value="Indonesia">Indonesia</option>         
<option value="Iran">Iran</option>       
<option value="Iraq">Iraq</option>       
<option value="Ireland">Ireland</option>         
<option value="Israel">Israel</option>       
<option value="Italy">Italy</option>         
<option value="Jamaica">Jamaica</option>         
<option value="Japan">Japan</option>         
<option value="Jordan">Jordan</option>       
<option value="Kazakhstan">Kazakhstan</option>       
<option value="Kenya">Kenya</option>         
<option value="Kiribati">Kiribati</option>       
<option value="Korea, Democratic Peoples Republic of">Korea, Democratic Peoples Republic of</option>         
<option value="Korea, Republic of">Korea, Republic of</option>       
<option value="Kuwait">Kuwait</option>       
<option value="Kyrgyz Republic">Kyrgyz Republic</option>         
<option value="Lao Peoples Democratic Republic">Lao Peoples Democratic Republic</option>         
<option value="Latvia">Latvia</option>       
<option value="Lebanon">Lebanon</option>         
<option value="Lesotho">Lesotho</option>         
<option value="Liberia">Liberia</option>         
<option value="Libya">Libya</option>         
<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>       
<option value="Liechtenstein">Liechtenstein</option>         
<option value="Lithuania">Lithuania</option>         
<option value="Luxembourg">Luxembourg</option>       
<option value="Macau">Macau</option>         
<option value="Macedonia, The Former Yugoslav Republic">Macedonia, The Former Yugoslav Republic</option>         
<option value="Madagascar">Madagascar</option>       
<option value="Malawi">Malawi</option>       
<option value="Malaysia">Malaysia</option>       
<option value="Maldives">Maldives</option>       
<option value="Mali">Mali</option>       
<option value="Malta">Malta</option>         
<option value="Marshall Islands">Marshall Islands</option>       
<option value="Martinique">Martinique</option>       
<option value="Mauritania">Mauritania</option>       
<option value="Mauritius">Mauritius</option>         
<option value="Mayotte">Mayotte</option>         
<option value="Mexico">Mexico</option>       
<option value="Micronesia (Federated States Of)">Micronesia (Federated States Of)</option>       
<option value="Moldova, Republic Of">Moldova, Republic Of</option>       
<option value="Monaco">Monaco</option>       
<option value="Mongolia">Mongolia</option>       
<option value="Montserrat">Montserrat</option>       
<option value="Morocco">Morocco</option>         
<option value="Mozambique">Mozambique</option>       
<option value="Myanmar">Myanmar</option>         
<option value="Namibia">Namibia</option>         
<option value="Nauru">Nauru</option>         
<option value="Nepal">Nepal</option>         
<option value="Netherlands">Netherlands</option>         
<option value="Netherlands Antilles">Netherlands Antilles</option>       
<option value="New Caledonia">New Caledonia</option>         
<option value="New Zealand">New Zealand</option>         
<option value="Nicaragua">Nicaragua</option>         
<option value="Niger">Niger</option>         
<option value="Nigeria" selected="selected">Nigeria</option>         
<option value="Niue">Niue</option>       
<option value="Norfolk Island">Norfolk Island</option>       
<option value="North Korea">North Korea</option>         
<option value="Northern Ireland">Northern Ireland</option>       
<option value="Northern Mariana Islands">Northern Mariana Islands</option>       
<option value="Norway">Norway</option>       
<option value="Oman">Oman</option>       
<option value="Pakistan">Pakistan</option>       
<option value="Palau">Palau</option>         
<option value="Panama">Panama</option>       
<option value="Papua New Guinea">Papua New Guinea</option>       
<option value="Paraguay">Paraguay</option>       
<option value="Peru">Peru</option>       
<option value="Philippines">Philippines</option>         
<option value="Pitcairn">Pitcairn</option>       
<option value="Poland">Poland</option>       
<option value="Portugal">Portugal</option>       
<option value="Puerto Rico">Puerto Rico</option>         
<option value="Qatar">Qatar</option>         
<option value="Reunion">Reunion</option>         
<option value="Romania">Romania</option>         
<option value="Russia">Russia</option>       
<option value="Rwanda">Rwanda</option>       
<option value="Saint Kitts And Nevis">Saint Kitts And Nevis</option>         
<option value="Saint Lucia">Saint Lucia</option>         
<option value="Saint Vincent And The Grenadines">Saint Vincent And The Grenadines</option>       
<option value="Samoa">Samoa</option>         
<option value="San Marino">San Marino</option>       
<option value="Sao Tome And Principe">Sao Tome And Principe</option>         
<option value="Saudi Arabia">Saudi Arabia</option>       
<option value="Senegal">Senegal</option>         
<option value="Seychelles">Seychelles</option>       
<option value="Sierra Leone">Sierra Leone</option>       
<option value="Singapore">Singapore</option>         
<option value="Slovakia">Slovakia</option>       
<option value="Slovenia">Slovenia</option>       
<option value="Solomon Islands">Solomon Islands</option>         
<option value="Somalia">Somalia</option>         
<option value="South Africa">South Africa</option>       
<option value="South Georgia And The South Sandwich Isl">South Georgia And The South Sandwich Isl</option>       
<option value="South Korea">South Korea</option>         
<option value="Spain">Spain</option>         
<option value="Sri Lanka">Sri Lanka</option>         
<option value="St. Helena">St. Helena</option>       
<option value="St. Pierre And Miquelon">St. Pierre And Miquelon</option>         
<option value="Sudan">Sudan</option>         
<option value="Suriname">Suriname</option>       
<option value="Svalbard And Jan Mayen Islands">Svalbard And Jan Mayen Islands</option>       
<option value="Swaziland">Swaziland</option>         
<option value="Sweden">Sweden</option>       
<option value="Switzerland">Switzerland</option>         
<option value="Syria">Syria</option>         
<option value="Syrian Arab Republic">Syrian Arab Republic</option>       
<option value="Tahiti">Tahiti</option>       
<option value="Taiwan">Taiwan</option>       
<option value="Tajikistan">Tajikistan</option>       
<option value="Tanzania">Tanzania</option>       
<option value="Thailand">Thailand</option>       
<option value="Togo">Togo</option>       
<option value="Tokelau">Tokelau</option>         
<option value="Tonga">Tonga</option>         
<option value="Trinidad And Tobago">Trinidad And Tobago</option>         
<option value="Tunisia">Tunisia</option>         
<option value="Turkey">Turkey</option>       
<option value="Turkmenistan">Turkmenistan</option>       
<option value="Turks And Caicos Islands">Turks And Caicos Islands</option>       
<option value="Tuvalu">Tuvalu</option>       
<option value="Uganda">Uganda</option>       
<option value="Ukraine">Ukraine</option>         
<option value="United Arab Emirates">United Arab Emirates</option>       
<option value="United Kingdom">United Kingdom</option>       
<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>       
<option value="United States of America">United States of America</option>       
<option value="Uruguay">Uruguay</option>         
<option value="Uzbekistan">Uzbekistan</option>       
<option value="Vanuatu">Vanuatu</option>         
<option value="Vatican City State (Holy See)">Vatican City State (Holy See)</option>         
<option value="Venezuela">Venezuela</option>         
<option value="Vietnam">Vietnam</option>         
<option value="Virgin Islands (British)">Virgin Islands (British)</option>       
<option value="Virgin Islands (U.S)">Virgin Islands (U.S)</option>       
<option value="Wallis And Futuna Islands">Wallis And Futuna Islands</option>         
<option value="Western Sahara">Western Sahara</option>       
<option value="Yemen">Yemen</option>         
<option value="Yugoslavia">Yugoslavia</option>       
<option value="Zaire">Zaire</option>         
<option value="Zambia">Zambia</option>       
<option value="Zimbabwe">Zimbabwe</option>  
</select>
                                                </div>
                                            </div>

                                               <div class="form-group">
                                                <label class="col-sm-4 control-label">Mobile No:</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="name" class="form-control" placeholder="GSM Number" />
                                                </div>
                                            </div><!-- form-group -->
                                       
                                      </div>
                                   
                                        </div><!-- panel-body -->
                                        <div class="panel-footer">
                                        <div class="row">
                                       
                                      <div class="col-sm-12">
                                            <button class="btn btn-block btn-primary mr5 pull-right">Save</button>
                                        </div>
                                            </div>
                                        </div><!-- panel-footer -->
                                    </div><!-- panel -->
                                </form>
                                    
                        </div><!-- panel -->
                                      
                                      </div>

     
                                
                            </div><!-- col-md-6 -->
                     
                                                          
                 <div class="col-md-6">
                        <div class="panel panel-primary-head">
                            <div class="panel panel-heading">
                                <h4>Business Information</h4>
                                
                            </div>
                                        <form id="form2" class="form-horizontal form-bordered">
                                    <div class="panel panel-default">
                                 
                                        <div class="panel-body nopadding">
                                        <div class="row">
                                    <div class="col-md-12">

                                        <div class="form-group">
                                        <h4><i class="fa fa-envelope"></i>  Business Information</h4>
                                        </div>

                                              <div class="form-group">
                                                <label class="col-sm-4 control-label">Business/Organisation Name:</label>
                                                <div class="col-sm-8">
                                                         <div class="input-group">
                                            <input type="text" class="form-control" />
                                        </div><!-- input-group -->

                                                </div>
                                            </div><!-- form-group -->

                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Business/Organisation Type:</label>
                                                <div class="col-sm-8">
                                            <select name="business_type" class="form-control">
                                                <option>Choose Type</option>
                                                <option value="technology">Technology</option>
                                                <option value="sale">Sales</option>
                                            </select>

                                                </div>
                                            </div><!-- form-group -->

                                                  <div class="form-group">
                                                <label class="col-sm-4 control-label">Business Logo:</label>
                                                <div class="col-sm-8">
                                            <input type="file" class="form-control" />

                                                </div>
                                            </div><!-- form-group -->

                                      </div>
                                   
                                        </div><!-- panel-body -->
                                        <div class="panel-footer">
                                        <div class="row">
                                       
                                      <div class="col-sm-12">
                                            <button class="btn btn-block btn-primary mr5 pull-right">Save</button>
                                        </div>
                                            </div>
                                        </div><!-- panel-footer -->
                                    </div><!-- panel -->
                                </form>
                                    
                        </div><!-- panel -->
                                      
                                      </div>

                    </div><!-- contentpanel -->
                </div><!-- mainpanel -->
            </div><!-- mainwrapper -->
        </section>

        

        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/jquery-migrate-1.2.1.min.js"></script>
        <script src="js/jquery-ui-1.10.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/modernizr.min.js"></script>
        <script src="js/pace.min.js"></script>
        <script src="js/retina.min.js"></script>
        <script src="js/jquery.cookies.js"></script>
        
        <script src="js/jquery.autogrow-textarea.js"></script>
        <script src="js/jquery.mousewheel.js"></script>
        <script src="js/jquery.tagsinput.min.js"></script>
        <script src="js/toggles.min.js"></script>
        <script src="js/bootstrap-timepicker.min.js"></script>
        <script src="js/jquery.maskedinput.min.js"></script>
        <script src="js/select2.min.js"></script>
        <script src="js/colorpicker.js"></script>
        <script src="js/dropzone.min.js"></script>

        <script src="js/custom.js"></script>
        <script>
            jQuery(document).ready(function() {
                
                // Tags Input
                jQuery('#tags').tagsInput({width:'auto'});
                 
                // Textarea Autogrow
                jQuery('#autoResizeTA').autogrow();
                
            
                // Date Picker
            
                jQuery('#datebirth').datepicker({
                      changeMonth: true,
          changeYear: true,
          yearRange: "1940:2000",
          dateFormat: "yy-mm-dd",
          defaultDate: '1940-01-01'
                });
                
               
                
                
            });
        </script>

    </body>
</html>

