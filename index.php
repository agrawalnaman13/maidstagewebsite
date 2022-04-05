<style>

    input.invalid {

        background-color: #ff9d9d;

        border-color: #ff9d9d

    }

    input.finish {

        background-color: white;

        border-color: white

    }

</style>

<?php include 'include/header.php';?>

<div id="sticker" class="container-fluid headerpage-fluid background-home">

    <?php include 'include/menu.php';?>

    <div class="container">

        <div class="hedaerpart-design">

            <div class="row">

                <div class="col-md-7 col-12">

                    <div class="designpart">

                        <div class="textpart">

                            <h1>Techgropse- Innovative free prototypes and purpose driven app development company</h1>

                            <p>Reinforce your business operations with Techgropse’s innovative and purpose driven app development services. We provide full-fledged  mobile app development solutions with free prototypes that are highly robust to meet the advanced needs of today’s tech-driven work.</p>

                        </div>

                    </div>

                </div>

                <div class="col-md-5">

                    <?=$this->session->flashdata('response');?>

                    <form class="row form-styling" method="post" >

                        <div class="col-12">

                            <h2 class="form-heading">Get a Free Quote</h2>

                        </div>

                        <div class="col-6">

                            <div class="form-group">

                            <input type="text" name="name" class="form-control stepOne" id="" placeholder="Name">

                            <!-- <span class="text-danger" style="display:none;cursor: pointer;text-align: left;" id="errorMsg1"></span> -->

                            </div>

                        </div>

                        <div class="col-6">

                            <div class="form-group">

                            <input type="tel" name="mobile" class="form-control stepOne" id="" placeholder="Mobile No.">

                            <!-- <span class="text-danger" style="display:none;cursor: pointer;text-align: left;" id="errorMsg2"></span> -->

                            </div>

                        </div>

                        <div class="col-12">

                            <div class="form-group">

                            <input type="text" name="email" class="form-control stepOne" placeholder="Email Address">

                            <!-- <span class="text-danger" style="display:none;cursor: pointer;text-align: left;" id="errorMsg3"></span> -->

                            </div>

                        </div>

                        <div class="col-6">

                            <div class="form-group">

                                <!--<input type="text" name="country" class="form-control" id="" placeholder="Country">-->

                                <label for="text">Country</label>

                                <select name="country" required="" class="form-control">  <option value="United States">United States</option>  <option value="Afghanistan">Afghanistan</option>  <option value="Albania">Albania</option>  <option value="Algeria">Algeria</option>  <option value="American Samoa">American Samoa</option>  <option value="Andorra">Andorra</option>  <option value="Angola">Angola</option>  <option value="Anguilla">Anguilla</option>  <option value="Antarctica">Antarctica</option>  <option value="Antigua and Barbuda">Antigua and Barbuda</option>  <option value="Argentina">Argentina</option>  <option value="Armenia">Armenia</option>  <option value="Aruba">Aruba</option>  <option value="Australia">Australia</option>  <option value="Austria">Austria</option>  <option value="Azerbaijan">Azerbaijan</option>  <option value="Bahamas">Bahamas</option>  <option value="Bahrain">Bahrain</option>  <option value="Bangladesh">Bangladesh</option>  <option value="Barbados">Barbados</option>  <option value="Belarus">Belarus</option>  <option value="Belgium">Belgium</option>  <option value="Belize">Belize</option>  <option value="Benin">Benin</option>  <option value="Bermuda">Bermuda</option>  <option value="Bhutan">Bhutan</option>  <option value="Bolivia">Bolivia</option>  <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>  <option value="Botswana">Botswana</option>  <option value="Bouvet Island">Bouvet Island</option>  <option value="Brazil">Brazil</option>  <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>  <option value="Brunei Darussalam">Brunei Darussalam</option>  <option value="Bulgaria">Bulgaria</option>  <option value="Burkina Faso">Burkina Faso</option>  <option value="Burundi">Burundi</option>  <option value="Cambodia">Cambodia</option>  <option value="Cameroon">Cameroon</option>  <option value="Canada">Canada</option>  <option value="Cape Verde">Cape Verde</option>  <option value="Cayman Islands">Cayman Islands</option>  <option value="Central African Republic">Central African Republic</option>  <option value="Chad">Chad</option>  <option value="Chile">Chile</option>  <option value="China">China</option>  <option value="Christmas Island">Christmas Island</option>  <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>  <option value="Colombia">Colombia</option>  <option value="Comoros">Comoros</option>  <option value="Congo">Congo</option>  <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>  <option value="Cook Islands">Cook Islands</option>  <option value="Costa Rica">Costa Rica</option>  <option value="Cote d'Ivoire">Cote d'Ivoire</option>  <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>  <option value="Cuba">Cuba</option>  <option value="Cyprus">Cyprus</option>  <option value="Czech Republic">Czech Republic</option>  <option value="Denmark">Denmark</option>  <option value="Djibouti">Djibouti</option>  <option value="Dominica">Dominica</option>  <option value="Dominican Republic">Dominican Republic</option>  <option value="East Timor">East Timor</option>  <option value="Ecuador">Ecuador</option>  <option value="Egypt">Egypt</option>  <option value="El Salvador">El Salvador</option>  <option value="Equatorial Guinea">Equatorial Guinea</option>  <option value="Eritrea">Eritrea</option>  <option value="Estonia">Estonia</option>  <option value="Ethiopia">Ethiopia</option>  <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>  <option value="Faroe Islands">Faroe Islands</option>  <option value="Fiji">Fiji</option>  <option value="Finland">Finland</option>  <option value="France">France</option>  <option value="France Metropolitan">France Metropolitan</option>  <option value="French Guiana">French Guiana</option>  <option value="French Polynesia">French Polynesia</option>  <option value="French Southern Territories">French Southern Territories</option>  <option value="Gabon">Gabon</option>  <option value="Gambia">Gambia</option>  <option value="Georgia">Georgia</option>  <option value="Germany">Germany</option>  <option value="Ghana">Ghana</option>  <option value="Gibraltar">Gibraltar</option>  <option value="Greece">Greece</option>  <option value="Greenland">Greenland</option>  <option value="Grenada">Grenada</option>  <option value="Guadeloupe">Guadeloupe</option>  <option value="Guam">Guam</option>  <option value="Guatemala">Guatemala</option>  <option value="Guinea">Guinea</option>  <option value="Guinea-Bissau">Guinea-Bissau</option>  <option value="Guyana">Guyana</option>  <option value="Haiti">Haiti</option>  <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>  <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>  <option value="Honduras">Honduras</option>  <option value="Hong Kong">Hong Kong</option>  <option value="Hungary">Hungary</option>  <option value="Iceland">Iceland</option>  <option value="India">India</option>  <option value="Indonesia">Indonesia</option>  <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>  <option value="Iraq">Iraq</option>  <option value="Ireland">Ireland</option>  <option value="Israel">Israel</option>  <option value="Italy">Italy</option>  <option value="Jamaica">Jamaica</option>  <option value="Japan">Japan</option>  <option value="Jordan">Jordan</option>  <option value="Kazakhstan">Kazakhstan</option>  <option value="Kenya">Kenya</option>  <option value="Kiribati">Kiribati</option>  <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>  <option value="Korea, Republic of">Korea, Republic of</option>  <option value="Kuwait">Kuwait</option>  <option value="Kyrgyzstan">Kyrgyzstan</option>  <option value="Lao, People's Democratic Republic">Lao, People's Democratic Republic</option>  <option value="Latvia">Latvia</option>  <option value="Lebanon">Lebanon</option>  <option value="Lesotho">Lesotho</option>  <option value="Liberia">Liberia</option>  <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>  <option value="Liechtenstein">Liechtenstein</option>  <option value="Lithuania">Lithuania</option>  <option value="Luxembourg">Luxembourg</option>  <option value="Macau">Macau</option>  <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>  <option value="Madagascar">Madagascar</option>  <option value="Malawi">Malawi</option>  <option value="Malaysia">Malaysia</option>  <option value="Maldives">Maldives</option>  <option value="Mali">Mali</option>  <option value="Malta">Malta</option>  <option value="Marshall Islands">Marshall Islands</option>  <option value="Martinique">Martinique</option>  <option value="Mauritania">Mauritania</option>  <option value="Mauritius">Mauritius</option>  <option value="Mayotte">Mayotte</option>  <option value="Mexico">Mexico</option>  <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>  <option value="Moldova, Republic of">Moldova, Republic of</option>  <option value="Monaco">Monaco</option>  <option value="Mongolia">Mongolia</option>  <option value="Montserrat">Montserrat</option>  <option value="Morocco">Morocco</option>  <option value="Mozambique">Mozambique</option>  <option value="Myanmar">Myanmar</option>  <option value="Namibia">Namibia</option>  <option value="Nauru">Nauru</option>  <option value="Nepal">Nepal</option>  <option value="Netherlands">Netherlands</option>  <option value="Netherlands Antilles">Netherlands Antilles</option>  <option value="New Caledonia">New Caledonia</option>  <option value="New Zealand">New Zealand</option>  <option value="Nicaragua">Nicaragua</option>  <option value="Niger">Niger</option>  <option value="Nigeria">Nigeria</option>  <option value="Niue">Niue</option>  <option value="Norfolk Island">Norfolk Island</option>  <option value="Northern Mariana Islands">Northern Mariana Islands</option>  <option value="Norway">Norway</option>  <option value="Oman">Oman</option>  <option value="Pakistan">Pakistan</option>  <option value="Palau">Palau</option>  <option value="Panama">Panama</option>  <option value="Papua New Guinea">Papua New Guinea</option>  <option value="Paraguay">Paraguay</option>  <option value="Peru">Peru</option>  <option value="Philippines">Philippines</option>  <option value="Pitcairn">Pitcairn</option>  <option value="Poland">Poland</option>  <option value="Portugal">Portugal</option>  <option value="Puerto Rico">Puerto Rico</option>  <option value="Qatar">Qatar</option>  <option value="Reunion">Reunion</option>  <option value="Romania">Romania</option>  <option value="Russian Federation">Russian Federation</option>  <option value="Rwanda">Rwanda</option>  <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>  <option value="Saint Lucia">Saint Lucia</option>  <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>  <option value="Samoa">Samoa</option>  <option value="San Marino">San Marino</option>  <option value="Sao Tome and Principe">Sao Tome and Principe</option>  <option value="Saudi Arabia">Saudi Arabia</option>  <option value="Senegal">Senegal</option>  <option value="Seychelles">Seychelles</option>  <option value="Sierra Leone">Sierra Leone</option>  <option value="Singapore">Singapore</option>  <option value="Slovakia (Slovak Republic)">Slovakia (Slovak Republic)</option>  <option value="Slovenia">Slovenia</option>  <option value="Solomon Islands">Solomon Islands</option>  <option value="Somalia">Somalia</option>  <option value="South Africa">South Africa</option>  <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>  <option value="Spain">Spain</option>  <option value="Sri Lanka">Sri Lanka</option>  <option value="St. Helena">St. Helena</option>  <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>  <option value="Sudan">Sudan</option>  <option value="Suriname">Suriname</option>  <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>  <option value="Swaziland">Swaziland</option>  <option value="Sweden">Sweden</option>  <option value="Switzerland">Switzerland</option>  <option value="Syrian Arab Republic">Syrian Arab Republic</option>  <option value="Taiwan, Province of China">Taiwan, Province of China</option>  <option value="Tajikistan">Tajikistan</option>  <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>  <option value="Thailand">Thailand</option>  <option value="Togo">Togo</option>  <option value="Tokelau">Tokelau</option>  <option value="Tonga">Tonga</option>  <option value="Trinidad and Tobago">Trinidad and Tobago</option>  <option value="Tunisia">Tunisia</option>  <option value="Turkey">Turkey</option>  <option value="Turkmenistan">Turkmenistan</option>  <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>  <option value="Tuvalu">Tuvalu</option>  <option value="Uganda">Uganda</option>  <option value="Ukraine">Ukraine</option>  <option value="United Arab Emirates">United Arab Emirates</option>  <option value="United Kingdom">United Kingdom</option>  <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>  <option value="Uruguay">Uruguay</option>  <option value="Uzbekistan">Uzbekistan</option>  <option value="Vanuatu">Vanuatu</option>  <option value="Venezuela">Venezuela</option>  <option value="Vietnam">Vietnam</option>  <option value="Virgin Islands (British)">Virgin Islands (British)</option>  <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>  <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>  <option value="Western Sahara">Western Sahara</option>  <option value="Yemen">Yemen</option>  <option value="Yugoslavia">Yugoslavia</option>  <option value="Zambia">Zambia</option>  <option value="Zimbabwe">Zimbabwe</option> </select>

                            </div>

                        </div>

                        <div class="col-6">

                            <div class="form-group">

                                <!--<input type="tel" name="project" class="form-control" id="" placeholder="Project Type">-->

                                <label for="text">Project Type</label>

                                <select required="" name="project" class="form-control"> 

                                <option>Select</option> 

                                <option value="iOS App Development">iOS App Development</option> 

                                <option value="Android App Development">Android App Development</option> 

                                <option value="Web Development">Web Development</option> 

                                <option value="Others">Others</option></select>

                            </div>

                        </div>

                        <div class="col-12">

                            <div class="form-group">

                            <textarea cols="40" rows="3" name="about" class="form-control stepOne" data-warning="errorMsg4" placeholder="What's your project about"></textarea>

                            <span class="text-danger" style="display:none;cursor: pointer;text-align: left;" id="errorMsg4"></span>

                            </div>

                        </div>

                        <div class="col-12">

                        <button type="button" id="submit_1" name="submit" onclick="validate();" class="btn btn-primary mb-2 btn-styling">Submit <img src="<?=base_url('/common/images/icons/left-arrow.png');?>" class="arrowicon" alt="Submit"></button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

<script type="text/javascript">

    function validate(){

        nullException = true;

        $(".stepOne").each(function () {



        if($(this).val() == ''){

            $(this).removeClass("finish");

            $(this).addClass("invalid");

            $(this).attr("placeholder", "*required field");

            nullException = false;

        }else{

            $(this).removeClass("invalid");

            $(this).addClass("finish");

            $(this).attr("placeholder", "");

        }

            if ($(this).val() == '' || $(this).val() == null || $(this).val() == 'null' || $(this).val() == 0) {

            var warnMsg = $(this).attr('data-warning');

            $("#" + warnMsg).empty();

            $("#" + warnMsg).append('*required field');

            $("#" + warnMsg).css('display', 'block');

            nullException = false;

            } else {

            var warnMsg = $(this).attr('data-warning');

            $("#" + warnMsg).css('display', 'none');

            }

            });

        if (nullException == true) {

            //document.getElementById('#submit_1').type = 'submit';

            $('#submit_1').attr('type', 'submit');

            }

    }

</script>

<div class="container-fluid homeabout-fluid">

    <div class="container">

        <div class="about-main-head">

            <div class="about-head">

                <ul>

                    <li><a href="https://www.behance.net/techgropse" target="_blank" rel="nofollow"><i class="fa fa-behance"></i></a></li>

                    <li><a href="https://www.linkedin.com/company/techgropse" target="_blank" rel="nofollow"><i class="fa fa-linkedin"></i></a></li>

                    <li><a href="https://twitter.com/techgropse" target="_blank" rel="nofollow"><i class="fa fa-twitter"></i></a></li>

                    <li><a href="https://www.instagram.com/techgropse" target="_blank" rel="nofollow"><i class="fa fa-instagram"></i></a></li>

                </ul>

                <h2>know more about us</h2>

            </div>

            <div class="row">

                <div class="col-lg-7">

                    <div class="about-main">

                        <div class="about-techgropse">

                            <h2 class="gropse-about">Techgropse- Full Spectrum Mobile App Development Company in UAE</h2>

                            <h3 class="about-subheading">Be it a budding start-up or an established enterprise, we provide development solutions to transform their business. Request for free prototypes.</h3>

                            <p>Techgropse is a highly qualified and experienced app development company in Dubai. Our team of experts develops end to end mobile applications that are built with epitome of innovation and are fully customized as per the client’s requirements. We help you to compete in the fast-growing and ever blooming mobile app market with technological breakthroughs integrated in the app development process.</p>

                            <p>We extend our services with an initiation of business experts that determine the parameters of a successful app development. The process is then followed by designing and development. Techgropse’s innovative team of development is highly skilled to mould a client’s idea into android app development, ios app development, blockchain development, AR VR app development.</p>

                        </div>

                        <div class="about-box">

                            <div class="row">

                                <div class="col-md-4">

                                    <div class="box1">

                                        <h3>5 + Years of<span>Experience</span></h3>

                                        <img src="<?php echo site_url();?>common/images/icons/experiance.png" alt="Experiance">

                                    </div>

                                </div>

                                <div class="col-md-4">

                                    <div class="box1 deliver">

                                        <h3>500 + Apps<span>Delivered</span></h3>

                                        <img src="<?php echo site_url();?>common/images/icons/delivered.png" alt="Delivered">

                                    </div>

                                </div>

                                <div class="col-md-5">

                                    <div class="box1 technology">

                                        <h3>100 +<span> Technology Experts</span></h3>

                                        <img src="<?php echo site_url();?>common/images/icons/technology.png" alt="Technology Expert">

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="read-more">

                            <a href="#">Read More <img src="<?php echo site_url( );?>common/images/icons/left-arrow.png"  class="arrowicon" alt="Get in Touch"></a>

                        </div>

                    </div>

                </div>

                <div class="col-lg-5">

                    <div class="circle-part rotate-full ">

                        <div class="main-circle ">

                            <img src="<?php echo site_url();?>common/images/home/circle.png">

                        </div>

                        <div class="rotatedpert">

                            <div class="circle1">

                                <img src="<?php echo site_url();?>common/images/home/block.png">

                            </div>

                            <div class="circle2">

                                <img src="<?php echo site_url();?>common/images/home/android.png">

                            </div>

                            <div class="circle3">

                                <img src="<?php echo site_url();?>common/images/home/web-mobile.png">

                            </div>

                            <div class="circle4">

                                <img src="<?php echo site_url();?>common/images/home/ios.png">

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<div class="container-fluid glimpse">

    <div class="container">

        <div class="glimpse-inner">

            <div class="heading">

                <h3>A GLIMPSE OF OUR <span>NUMBERS AND ACCOLADES</span></h3>

                <p>We are proud to use the latest cutting-edge technology to develop a user friendly <span>platform to your business with all the integrations you need</span></p>

            </div>

            <div class="app-number">

                <div class="row">

                    <div class="col-6 col-md-3">

                        <div class="number1 color1">

                            <h3>450+</h3>

                            <h4>Mobile Apps Developed</h4>

                            <p>& Still Counting</p>

                        </div>

                    </div>

                    <div class="col-6 col-md-3">

                        <div class="number1 color2">

                            <h3>300+</h3>

                            <h4>Web Apps Developed</h4>

                            <p>& Still Counting</p>

                        </div>

                    </div>

                    <div class="col-6 col-md-3">

                        <div class="number1 color3">

                            <h3>800+</h3>

                            <h4>Satisfied Clients</h4>

                            <p>& Still Counting</p>

                        </div>

                    </div>

                    <div class="col-6 col-md-3">

                        <div class="number1 color4">

                            <h3>15+</h3>

                            <h4>Countries Served</h4>

                            <p>& Still Counting</p>

                        </div>

                    </div>

                    <div class="col-6 col-md-3">

                        <div class="number1 color4">

                            <h3>5+</h3>

                            <h4>Years of</h4>

                            <p>Experience</p>

                        </div>

                    </div>

                    <div class="col-6 col-md-3">

                        <div class="number1 color1">

                            <h3>90%</h3>

                            <h4>Success Score</h4>

                            <p>on UpWork</p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>   

<div class="container-fluid reason-fluid">

    <div class="container">

        <div class="toppart-deaisgn">

            <div class="row">

                <div class="col-md-6">

                    <div class="leftpart">

                        <h2><span>05</span> REASONS</h2>

                        <h3> THAT MAKES TECHGROPSE STAND OUT</h3>

                        <p>Deploying Rapid Prototyping Methodology for Turning a Raw App Idea Into a Flawless App</p>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="rightpart">

                        <img src="<?php echo site_url();?>common/images/home/techgropse.png" alt="Top Mobile App Developers In Dubai, UAE">

                    </div>

                </div>

            </div>

        </div>

        <div class="bottompart">

            <nav>

                <div class="nav nav-tabs" id="nav-tab" role="tablist">

                    <a class="nav-item nav-link active" id="nav-home-tab1" data-toggle="tab" href="#why1" role="tab" aria-controls="nav-home1" aria-selected="true"><span>01</span></a>

                    <a class="nav-item nav-link" id="nav-home-tab2" data-toggle="tab" href="#why2" role="tab" aria-controls="nav-home2" aria-selected="false"><span>02</span></a>

                    <a class="nav-item nav-link" id="nav-home-tab3" data-toggle="tab" href="#why3" role="tab" aria-controls="nav-home3" aria-selected="false"><span>03</span></a>

                    <a class="nav-item nav-link" id="nav-home-tab4" data-toggle="tab" href="#why4" role="tab" aria-controls="nav-home4" aria-selected="false"><span>04</span></a>

                    <a class="nav-item nav-link" id="nav-home-tab5" data-toggle="tab" href="#why5" role="tab" aria-controls="nav-home5" aria-selected="false"><span>05</span></a>

                </div>

            </nav>

            <div class="tab-content" id="nav-tabContent">

                <div class="tab-pane fade show active" id="why1" role="tabpanel" aria-labelledby="nav-home-tab1">

                    <div class="tabcontent">

                        <h4><span>01.</span> Free Support For a Year</h4>

                        <p> We love to give our clients gratitude by offering them free assistance for a year.</p>

                        <img src="<?php echo site_url();?>common/images/icons/innovation.png" alt="Application development services in Dubai, UAE">

                    </div>

                </div>

                <div class="tab-pane fade" id="why2" role="tabpanel" aria-labelledby="nav-home-tab2">

                    <div class="tabcontent">

                        <h4><span>02.</span> On-Time Delivery</h4>

                        <p> You can rely on us for conveying our services quickly and with overall precision.</p>

                        <img src="<?php echo site_url();?>common/images/icons/innovation.png" alt="Application development services in Dubai, UAE">

                    </div>

                </div>

                <div class="tab-pane fade" id="why3" role="tabpanel" aria-labelledby="nav-home-tab3">

                    <div class="tabcontent">

                        <h4><span>03.</span> Delivers Bug-Free Apps</h4>

                        <p> After the launch of an application, we keep updating it to keepit refreshed.</p>

                        <img src="<?php echo site_url();?>common/images/icons/innovation.png" alt="Application development services in Dubai, UAE">

                    </div>

                </div>

                <div class="tab-pane fade" id="why4" role="tabpanel" aria-labelledby="nav-home-tab4">

                    <div class="tabcontent">

                        <h4><span>04.</span> 30 Days Money-Back Guarantee</h4>

                        <p> We guarantee the optimization of your hard-earned money.</p>

                        <img src="<?php echo site_url();?>common/images/icons/innovation.png" alt="Application development services in Dubai, UAE">

                    </div>

                </div>

                <div class="tab-pane fade" id="why5" role="tabpanel" aria-labelledby="nav-home-tab5">

                    <div class="tabcontent">

                        <h4><span>05.</span>Clients Across The Globe</h4>

                        <p> We are working on a 100% international client domain.</p>

                        <img src="<?php echo site_url();?>common/images/icons/innovation.png" alt="Application development services in Dubai, UAE">

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<div class="container-fluid Service">

    <div class="container">

        <div class="service-main">

            <div class="head">

                <h2 class="gropse-service">OUR SERVICES</h2>

                <p>Our Services Are Intended to Push the Boundaries & Explore New Horizons</p>

            </div>

            <div class="service-box">

                <div class="row">

                    <div class="col-lg-4 col-6">

                        <div class="box1 box2">

                            <h3>UI/UX Design</h3>

                            <p>Riding on your creative ideas, we curate a set of imaginative app designs with our passionate in-house team of UX/UI designers.</p>

                        </div>

                    </div>

                    <div class="col-lg-4 col-6">

                        <div class="box1 box3 ">

                            <h3>Web App Development</h3>

                            <p>We aim to push the limits and make a perfect web plan which fits your brand most exquisitely.</p>

                        </div>

                    </div>

                    <div class="col-lg-4 col-6">

                        <div class="box1 box4">

                            <h3>Mobile App Development</h3>

                            <p>We are dedicated to craft robust, process-based mobile applications for solving everyday business problems.</p>

                        </div>

                    </div>

                    <div class="col-lg-4 col-6">

                        <div class="box1 box5">

                            <h3>Digital Marketing</h3>

                            <p>Our proficient and advanced digital marketing executives leave no stone unturned to take your brand to the next level.</p>

                        </div>

                    </div>

                    <div class="col-lg-4 col-6">

                        <div class="box1 box6">

                            <h3>Game App Development</h3>

                            <p>Our team comprises game nerds who are whole-heartedly into mobile game development.</p>

                        </div>

                    </div>

                    <div class="col-lg-4 col-6">

                        <div class="box1 box7">

                            <h3>Wearable App Development</h3>

                            <p>We employ futuristic but practical wearable app development solutions and ensure that it sync with every digital device.</p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<div class="container-fluid homeportfolio-slider">

    <div id="testomlinial-slider" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">

            <li data-target="#testomlinial-slider" data-slide-to="0" class="active"></li>

            <li data-target="#testomlinial-slider" data-slide-to="1"></li>

            <li data-target="#testomlinial-slider" data-slide-to="2"></li>

            <li data-target="#testomlinial-slider" data-slide-to="3"></li>

            <li data-target="#testomlinial-slider" data-slide-to="4"></li>

        </ol>

        <div class="carousel-inner">

            <div class="carousel-item slider1 active">

                <div class="container">

                    <div class="row">

                        <div class="col-md-6">

                            <div class="content-part">

                                <div class="heading">

                                    <h2>Carasti</h2>

                                    <p>Carasti is the go-to car rental app in the UAE. With an all-inclusive monthly price, all you need to do is choose your rental car, wait for delivery, add fuel and drive.</p>

                                </div>

                                <div class="casectudy">

                                    <a href="<?php echo site_url('');?>">

                                        <h5>App Case Study</h5>

                                        <p>Comming soon <img src="<?php echo site_url( );?>common/images/icons/left-arrow.png" class="arrowicon" alt="App Developers in Dubai, UAE"></p>

                                    </a>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="image-part">

                                <img src="<?php echo site_url();?>common/images/home/carasti.png" alt="App Developers in Dubai, UAE" class="firstimage">

                                <img src="<?php echo site_url();?>common/images/home/carasti2.png" alt="App Developers in Dubai, UAE App" class="secondimage">

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="carousel-item slider2">

                <div class="container">

                    <div class="row">

                        <div class="col-md-6">

                            <div class="content-part">

                                <div class="heading">

                                    <h2>Jahez</h2>

                                    <p>Jahez is platform that helps you find and order food from wherever you are. Install the mobile application, type in an address, we list the restaurants that deliver to that location, other users ratings.</p>

                                </div>

                                <div class="casectudy">

                                    <a href="<?php echo site_url('');?>">

                                        <h5>App Case Study</h5>

                                        <p>Comming soon <img src="<?php echo site_url( );?>common/images/icons/left-arrow.png" class="arrowicon" alt="App Case Study"></p>

                                    </a>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="image-part">

                                <img src="<?php echo site_url();?>common/images/home/Jahez.png" alt="jahez" class="firstimage">

                                <img src="<?php echo site_url();?>common/images/home/Jahez2.png" alt="jahez App" class="secondimage">

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="carousel-item slider3">

                <div class="container">

                    <div class="row">

                        <div class="col-md-6">

                            <div class="content-part">

                                <div class="heading">

                                    <h2>MATIC</h2>

                                    <p>MATIC services offers you the cleaning care your home deserves, covering over 15 cities in UAE, KSA, Bahrain, Qatar, and Lebanon. With MATIC app, you can book a cleaning service online and get matched with trained and trusted house maids in your area.</p>

                                </div>

                                <div class="casectudy">

                                    <a href="<?php echo site_url('');?>">

                                        <h5>App Case Study</h5>

                                        <p>Comming soon <img src="<?php echo site_url( );?>common/images/icons/left-arrow.png" class="arrowicon" alt="App Case Study"></p>

                                    </a>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="image-part">

                                <img src="<?php echo site_url();?>common/images/home/Matic.png" alt="matic" class="firstimage">

                                <img src="<?php echo site_url();?>common/images/home/matic2.png" alt="matic App" class="secondimage">

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="carousel-item slider4">

                <div class="container">

                    <div class="row">

                        <div class="col-md-6">

                            <div class="content-part">

                                <div class="heading">

                                    <h2>Namshi</h2>

                                    <p>Namshi provides you shopping for latest fashion picks for men, women & kids – including over 500+ brands and 10,000+ of clothes, shoes and accessories right at your fingertips.</p>

                                </div>

                                <div class="casectudy">

                                    <a href="<?php echo site_url('');?>">

                                        <h5>App Case Study</h5>

                                        <p>Comming soon <img src="<?php echo site_url( );?>common/images/icons/left-arrow.png" class="arrowicon" alt="App Case Study"></p>

                                    </a>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="image-part">

                                <img src="<?php echo site_url();?>common/images/home/Namshi.png" alt="Namshi" class="firstimage">

                                <img src="<?php echo site_url();?>common/images/home/Namshi2.png" alt="Namshi App" class="secondimage">

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="carousel-item slider5">

                <div class="container">

                    <div class="row">

                        <div class="col-md-6">

                            <div class="content-part">

                                <div class="heading">

                                    <h2>Washmen</h2>

                                    <p>You don’t need to worry about sorting, washing, dry cleaning, or ironing your laundry no more with Washmen.</p>

                                </div>

                                <div class="casectudy">

                                    <a href="<?php echo site_url('');?>">

                                        <h5>App Case Study</h5>

                                        <p>Comming soon <img src="<?php echo site_url( );?>common/images/icons/left-arrow.png" class="arrowicon" alt="App Case Study"></p>

                                    </a>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="image-part">

                                <img src="<?php echo site_url();?>common/images/home/Washmen.png" alt="washmen" class="firstimage">

                                <img src="<?php echo site_url();?>common/images/home/Washmen2.png" alt="washmen App" class="secondimage">

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <a class="carousel-control-prev" href="#testomlinial-slider" role="button" data-slide="prev">

            <span class="carousel-control-prev-icon" aria-hidden="true"></span>

            <span class="sr-only">Previous</span>

        </a>

        <a class="carousel-control-next" href="#testomlinial-slider" role="button" data-slide="next">

            <span class="carousel-control-next-icon" aria-hidden="true"></span>

            <span class="sr-only">Next</span>

        </a>

    </div>

</div>

<div class="container-fluid technology">

    <div class="container">

        <div class="heading">

            <h3>We Simplify Core Businesses By Embracing Emerging Technologies</h3>

            <p>Innovations and technologies are rapidly shaping our world in the most exemplary way. These innovations and technologies are evolving at a dynamic rate and unlocking the business potentials by generating more solutions</p>

        </div>

        <div class="tech-tabs">

            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                <li class="nav-item">

                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><img src="<?php echo site_url();?>common/images/home/blockchain.png" alt="Blockchain"></a>

                </li>

                <li class="nav-item">

                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><img src="<?php echo site_url();?>common/images/home/vertual_reality.png" alt="Vertual Rreality"></a>

                </li>

                <li class="nav-item">

                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"><img src="<?php echo site_url();?>common/images//home/internet_thing.png" alt="Internet of Thing"></a>

                </li>

                <li class="nav-item">

                    <a class="nav-link" id="pills-medical1-tab" data-toggle="pill" href="#pills-contact1" role="tab" aria-controls="pills-contact" aria-selected="false"><img src="<?php echo site_url();?>common/images/home/machine_learning.png" alt="Machine Learning"></a>

                </li>

                <li class="nav-item">

                    <a class="nav-link" id="pills-medical2-tab" data-toggle="pill" href="#pills-contact2" role="tab" aria-controls="pills-contact" aria-selected="false"><img src="<?php echo site_url();?>common/images/home/artificial_inteligence.png" alt="Artificial Inteligence"></a>

                </li>

            </ul>

            <div class="tab-content" id="pills-tabContent">

                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                    <div class="tab1">

                        <div class="row">

                            <div class="col-12">

                                <div class="reality">

                                    <h3>Blockchain Technology</h3>

                                    <p>After the success of Bitcoin and other cryptocurrency technologies, Blockchain is undoubtedly the most sophisticated innovation of this century. This technology has revolutionized the very basics of digital information by making it more secure. Blockchain technology has revolutionized the accountability, traceability, and transparency in transactions. Right from securing the users' data to providing them a secure platform for the transaction, Blockchain applications can be found everywhere.</p>

                                </div>

                            </div>

                        </div>

                    </div>



                </div>

                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">



                    <div class="tab1">

                        <div class="row">

                            <div class="col-12">

                                <div class="reality">

                                    <h3>Augmented Reality / Virtual Reality</h3>

                                    <p>A wave of AR/VR mobile applications has already hit the Apple's App Store and the Google Play Store, giving clients a chance to do everything from measure distance to the naked display of information. For mobile applications, augmented reality has boundless potential, while virtual reality replaces the field of vision by lacing it with the latest trends.</p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">

                    <div class="tab1">

                        <div class="row">

                            <div class="col-12">

                                <div class="reality">

                                    <h3>Internet of Things</h3>

                                    <p>The next great wave of the Internet of things is here, and it aims to revolutionize the way humans interact with the surrounding environment. The Internet of things is changing how we experience and communicate. Our mobile application developers effectively connect applications to devices, gadgets, and sensors. They build IoT based mobile applications that convey imaginative client experience.</p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="tab-pane fade" id="pills-contact1" role="tabpanel" aria-labelledby="pills-medical1-tab">

                    <div class="tab1">

                        <div class="row">

                            <div class="col-12">

                                <div class="reality">

                                    <h3>Machine Learning</h3>

                                    <p>Machine learning promises to bring enormous change to the world in the upcoming years. With ML, computers, gadgets, and other digital devices are programmed to perform remarkable programming. In the last couple of years, the use of machine learning techniques has diversified itself by making machines more intelligent and thus, transforming industries.</p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="tab-pane fade" id="pills-contact2" role="tabpanel" aria-labelledby="pills-medical2-tab">

                    <div class="tab1">

                        <div class="row">

                            <div class="col-12">

                                <div class="reality">

                                    <h3>Artificial Intelligence</h3>

                                    <p>The scope and market of artificial intelligence have enormously expanded itself due to several factors. Though the technology was already making rounds, it's only recently when it has been adopted globally because of other technological advancements. By making interfaces fit for comprehension and ability to respond in regular language, we help our clients create a 1:1 relationship with a large number of individuals simultaneously. </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<div class="container-fluid tech-company">

    <div class="container">

        <div class="heading">

            <h2>TechGropse: A Technology-Driven Mobile App Development Company</h2>

            <p>With a devoted focus on the most recent innovations, we generally thrive on the latest technologies and tools.</p>

        </div>

        <div class="technologytabs">

            <ul class="nav nav-tabs" role="tablist">

                <li role="presentation"><a href="#iOS" aria-controls="iOS" role="tab" data-toggle="tab" class="active">iOS</a></li>

                <li role="presentation"><a href="#Android" aria-controls="Android" role="tab" data-toggle="tab">Android</a></li>

                <li role="presentation"><a href="#Hybrid" aria-controls="Hybrid" role="tab" data-toggle="tab">Hybrid</a></li>

                <li role="presentation"><a href="#Wearable" aria-controls="Wearable" role="tab" data-toggle="tab">Wearable</a></li>

                <li role="presentation"><a href="#Web" aria-controls="Web" role="tab" data-toggle="tab">Web</a></li>

                <li role="presentation"><a href="#uiux" aria-controls="uiux" role="tab" data-toggle="tab">UI/UX </a></li>

                <li role="presentation"><a href="#Testing" aria-controls="Testing" role="tab" data-toggle="tab">Testing</a></li>

                <li role="presentation"><a href="#Database" aria-controls="Database" role="tab" data-toggle="tab">Database</a></li>

            </ul>

            <div class="tab-content">

                <div role="tabpanel" class="tab-pane active" id="iOS">

                    <div class="technologypart">

                        <ul>

                            <li><img src="<?php echo site_url();?>common/images/technology/ios/1.png">

                                <p>Swift</p>

                            </li>

                            <li><img src="<?php echo site_url();?>common/images/technology/ios/2.png">

                                <p>Objective-C</p>

                            </li>

                            <li><img src="<?php echo site_url();?>common/images/technology/ios/3.png">

                                <p>X-Code</p>

                            </li>

                            <li><img src="<?php echo site_url();?>common/images/technology/ios/4.png">

                                <p>Touch Id</p>

                            </li>

                            <li><img src="<?php echo site_url();?>common/images/technology/ios/5.png">

                                <p>React Native</p>

                            </li>

                            <li><img src="<?php echo site_url();?>common/images/technology/ios/6.png">

                                <p>Flutter</p>

                            </li>

                            <li><img src="<?php echo site_url();?>common/images/technology/ios/7.png">

                                <p>AFNetwork</p>

                            </li>

                        </ul>

                    </div>

                </div>

                <div role="tabpanel" class="tab-pane" id="Android">

                    <div class="technologypart tech1">

                        <ul>

                            <li><img src="<?php echo site_url();?>common/images/technology/android/2.png">

                                <p>Java</p>

                            </li>

                            <li><img src="<?php echo site_url();?>common/images/technology/android/3.png">

                                <p>Android Wear</p>

                            </li>

                            <li><img src="<?php echo site_url();?>common/images/technology/android/4.png">

                                <p>Kotlin</p>

                            </li>

                            <li><img src="<?php echo site_url();?>common/images/technology/android/5.png">

                                <p>React Native</p>

                            </li>

                            <li><img src="<?php echo site_url();?>common/images/technology/android/6.png">

                                <p>Flutter</p>

                            </li>

                        </ul>

                    </div>

                </div>

                <div role="tabpanel" class="tab-pane" id="Hybrid">

                    <div class="technologypart tech2">

                        <ul>

                            <li><img src="<?php echo site_url();?>common/images/technology/hybrid/1.png">

                                <p>Phone Gap</p>

                            </li>

                            <li><img src="<?php echo site_url();?>common/images/technology/hybrid/2.png">

                                <p>Sencha Touch</p>

                            </li>

                            <li><img src="<?php echo site_url();?>common/images/technology/hybrid/3.png">

                                <p>Angular Js</p>

                            </li>

                            <li><img src="<?php echo site_url();?>common/images/technology/hybrid/4.png">

                                <p>Ionic</p>

                            </li>

                            <li><img src="<?php echo site_url();?>common/images/technology/hybrid/5.png">

                                <p>HTML5</p>

                            </li>

                        </ul>

                    </div>

                </div>

                <div role="tabpanel" class="tab-pane" id="Wearable">

                    <div class="technologypart tech3">

                        <ul>

                            <li><img src="<?php echo site_url();?>common/images/technology/wearable/1.png">

                                <p>Apple Watch</p>

                            </li>

                            <li><img src="<?php echo site_url();?>common/images/technology/wearable/2.png">

                                <p>Android Wear</p>

                            </li>

                            <li><img src="<?php echo site_url();?>common/images/technology/wearable/3.png">

                                <p>Fitness Tracker</p>

                            </li>

                        </ul>

                    </div>

                </div>

                <div role="tabpanel" class="tab-pane" id="Web">

                    <div class="technologypart tech4">

                        <ul>

                            <li><img src="<?php echo site_url();?>common/images/technology/web/1.png">

                                <p>HTML5</p>

                            </li>

                            <li><img src="<?php echo site_url();?>common/images/technology/web/2.png">

                                <p>CSS3</p>

                            </li>

                            <li><img src="<?php echo site_url();?>common/images/technology/web/3.png">

                                <p>Angular JS</p>

                            </li>

                            <li><img src="<?php echo site_url();?>common/images/technology/web/4.png">

                                <p>Java</p>

                            </li>

                            <li><img src="<?php echo site_url();?>common/images/technology/web/5.png">

                                <p>WordPress</p>

                            </li>

                            <li><img src="<?php echo site_url();?>common/images/technology/web/6.png">

                                <p>Bootstrap</p>

                            </li>

                        </ul>

                    </div>

                </div>

                <div role="tabpanel" class="tab-pane" id="uiux">

                    <div class="technologypart tech5">

                        <ul>

                            <li><img src="<?php echo site_url();?>common/images/technology/design/1.png">

                                <p>Photoshop</p>

                            </li>

                            <li><img src="<?php echo site_url();?>common/images/technology/design/2.png">

                                <p>Illustrator</p>

                            </li>

                            <li><img src="<?php echo site_url();?>common/images/technology/design/3.png">

                                <p>SKetch</p>

                            </li>

                            <li><img src="<?php echo site_url();?>common/images/technology/design/4.png">

                                <p>Zeplin</p>

                            </li>

                            <li><img src="<?php echo site_url();?>common/images/technology/design/5.png">

                                <p>Invision</p>

                            </li>

                            <li><img src="<?php echo site_url();?>common/images/technology/design/6.png">

                                <p>Axure</p>

                            </li>

                            <li><img src="<?php echo site_url();?>common/images/technology/design/7.png">

                                <p>Balsamiq</p>

                            </li>

                        </ul>

                    </div>

                </div>

                <div role="tabpanel" class="tab-pane" id="Testing">

                    <div class="technologypart tech6">

                        <ul>

                            <li><img src="<?php echo site_url();?>common/images/technology/testing/1.png">

                                <p>Selenium</li>

                            <li><img src="<?php echo site_url();?>common/images/technology/testing/2.png">

                                <p>jMeter</li>

                            <li><img src="<?php echo site_url();?>common/images/technology/testing/3.png">

                                <p>Jira</li>

                            <li><img src="<?php echo site_url();?>common/images/technology/testing/4.png">

                                <p>Bugzila</li>

                            <li><img src="<?php echo site_url();?>common/images/technology/testing/5.png">

                                <p>QTP</li>

                            <li><img src="<?php echo site_url();?>common/images/technology/testing/6.png">

                                <p>Appium</li>

                            <li><img src="<?php echo site_url();?>common/images/technology/testing/7.png">

                                <p>Tsung</li>

                        </ul>

                    </div>

                </div>

                <div role="tabpanel" class="tab-pane" id="Database">

                    <div class="technologypart tech7">

                        <ul>

                            <li><img src="<?php echo site_url();?>common/images/technology/database/1.png">

                                <p>PostgreSQL</p>

                            </li>

                            <li><img src="<?php echo site_url();?>common/images/technology/database/2.png">

                                <p>Firebase</p>

                            </li>

                            <li><img src="<?php echo site_url();?>common/images/technology/database/3.png">

                                <p>DynamoDB</p>

                            </li>

                            <li><img src="<?php echo site_url();?>common/images/technology/database/4.png">

                                <p>Mongo DB</p>

                            </li>

                            <li><img src="<?php echo site_url();?>common/images/technology/database/5.png">

                                <p>Mariadb</p>

                            </li>

                            <li><img src="<?php echo site_url();?>common/images/technology/database/6.png">

                                <p>MySQL</p>

                            </li>

                        </ul>

                    </div>

                </div>

            </div>



        </div>

    </div>

</div>

<div class="container-fluid industries">

    <div class="container">

        <div class="main-in">

            <div class="heading">

                <h3>Industries We Work With</h3>

                <p>Regardless of whether you need an app for banking & finance, healthcare, online food delivery, or gaming domain, we always keep up with you by delivering the best mobile application services and by adjoining your dreams with reality.</p>

            </div>

            <div class="box">

                <div class="row">

                    <div class="col-md-4 col-6">

                        <div class="box-inner">

                            <h3>Real Estate</h3>

                            <img src="<?php echo site_url();?>common/images/industry/inds1.png" alt="Real estate">

                        </div>

                    </div>

                    <div class="col-md-4 col-6">

                        <div class="box-inner">

                            <h3>Tour & Travels</h3>

                            <img src="<?php echo site_url();?>common/images/industry/inds2.png" alt="Tour & Travels">

                        </div>

                    </div>

                    <div class="col-md-4 col-6">

                        <div class="box-inner">

                            <h3>Education</h3>

                            <img src="<?php echo site_url();?>common/images/industry/inds3.png" alt="Education">

                        </div>

                    </div>

                    <div class="col-md-4 col-6">

                        <div class="box-inner">

                            <h3>Transport</h3>

                            <img src="<?php echo site_url();?>common/images/industry/inds4.png" alt="Transport">

                        </div>

                    </div>

                    <div class="col-md-4 col-6">

                        <div class="box-inner">

                            <h3>Events</h3>

                            <img src="<?php echo site_url();?>common/images/industry/inds5.png" alt="Events">

                        </div>

                    </div>

                    <div class="col-md-4 col-6">

                        <div class="box-inner">

                            <h3>eCommmerce</h3>

                            <img src="<?php echo site_url();?>common/images/industry/inds6.png" alt="eCommmerce">

                        </div>

                    </div>

                    <div class="col-md-4 col-6">

                        <div class="box-inner">

                            <h3>Game</h3>

                            <img src="<?php echo site_url();?>common/images/industry/inds7.png" alt="Game">

                        </div>

                    </div>

                    <div class="col-md-4 col-6">

                        <div class="box-inner">

                            <h3>Healthcare</h3>

                            <img src="<?php echo site_url();?>common/images/industry/inds8.png" alt="Real estate">

                        </div>

                    </div>

                    <div class="col-md-4 col-6">

                        <div class="box-inner">

                            <h3>Finance</h3>

                            <img src="<?php echo site_url();?>common/images/industry/inds9.png" alt="Healthcare">

                        </div>

                    </div>

                    <div class="col-md-4 col-6">

                        <div class="box-inner">

                            <h3>Restaurant</h3>

                            <img src="<?php echo site_url();?>common/images/industry/inds10.png" alt="Finance">

                        </div>

                    </div>

                    <div class="col-md-4 col-6">

                        <div class="box-inner">

                            <h3>On-Demand</h3>

                            <img src="<?php echo site_url();?>common/images/industry/inds11.png" alt="Restaurant">

                        </div>

                    </div>

                    <div class="col-md-4 col-6">

                        <div class="box-inner">

                            <h3>Grocery</h3>

                            <img src="<?php echo site_url();?>common/images/industry/inds12.png" alt="On-Demand">

                        </div>

                    </div>

                    <div class="col-md-4 col-6">

                        <div class="box-inner">

                            <h3>Jewelry</h3>

                            <img src="<?php echo site_url();?>common/images/industry/inds13.png" alt="Grocery">

                        </div>

                    </div>

                    <div class="col-md-4 col-6">

                        <div class="box-inner">

                            <h3>Fitness Center</h3>

                            <img src="<?php echo site_url();?>common/images/industry/inds14.png" alt="Jewellry">

                        </div>

                    </div>

                    <div class="col-md-4 col-6 mob-none">

                        <div class="box-inner">

                            <h3>Automobile</h3>

                            <img src="<?php echo site_url();?>common/images/industry/inds4.png" alt="Automobile">

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<div class="container-fluid testimonial-section">

    <div class="container">

        <div class="testimonial-main">

            <div class="topheading">

                <div class="heading">

                    <h1>Testimonials</h1>

                </div>

                <div class="content">

                    <h2>Stories Of Our Clients Gives A Bold Statement Of Our Success</h2>

                </div>

            </div>

        </div>

        <div class="testimonial-part">

            <div id="myCarousel" class="carousel vertical slide" data-ride="carousel">



                <div class="row">

                    <div class="col-sm-6">

                        <div class="imgBox">

                            <img src="<?php echo site_url();?>common/images/testimonial/user1.jpg" class="thumbimg thumbimg1 activeImg" data-id="slide_id_0">

                            <img src="<?php echo site_url();?>common/images/testimonial/user2.jpg" class="thumbimg thumbimg2" data-id="slide_id_1">

                            <img src="<?php echo site_url();?>common/images/testimonial/user3.jpg" class="thumbimg thumbimg3" data-id="slide_id_2">

                            <img src="<?php echo site_url();?>common/images/testimonial/user4.jpg" class="thumbimg thumbimg4" data-id="slide_id_3">

                        </div>

                    </div>

                    <div class="col-sm-6">

                        <!-- Indicators -->

                        <ol class="carousel-indicators timeline">

                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>

                            <li data-target="#myCarousel" data-slide-to="1"></li>

                            <li data-target="#myCarousel" data-slide-to="2"></li>

                            <li data-target="#myCarousel" data-slide-to="3"></li>

                        </ol>



                        <!-- Wrapper for slides -->

                        <div class="carousel-inner">

                            <div class="item carousel-item active" id="slide_id_0">

                                <div class="itembox">

                                    <h1>Hani Adel Omar<small>Egypt</small></h1>

                                    <p>TechGropse developed an engaging application for us. It was truly a pleasure to work with TechGropse. Every team member is focused and enthusiastic about their work. They have a team of exceptionally skilled developers.</p>

                                </div>

                            </div>



                            <div class="item carousel-item" id="slide_id_1">

                                <div class="itembox">

                                    <h1>Junaid-Al-Hasan<small>Saudi Arabia</small></h1>

                                    <p>Getting my app developed was quite demanding for me because converting my idea to convert into a live project was really a task. In such a challenging environment, TechGropse guided me to find the best possibilities to launch my first application and go live.</p>

                                </div>

                            </div>



                            <div class="item carousel-item" id="slide_id_2">

                                <div class="itembox">

                                    <h1>Mahmod Nasim<small>Iraq</small></h1>

                                    <p>Working with TechGropse was rewarding. Their core team of developers worked so assiduously that it was beyond my expectations. I must say, they are an expert on a conceptual phase and are always a step ahead in touch of innovation, which makes the application more creative and exciting.</p>

                                </div>

                            </div>

                            <div class="item carousel-item" id="slide_id_3">

                                <div class="itembox">

                                    <h1>Emad Alrabadi<small>Jordan</small></h1>

                                    <p>From the starting phase to the end, TechGropse backed me up. To create a different idea that is a fantasy app for football fans, the TechGropse team interacted with me in every phase. During the development process, they continually suggested better ideas for my application. The involvement of each developer and team member infused positive vibes in me. They understand every rule of the Fantasy Sports Trade Association (FSTA) and built my application accordingly. Thank you TechGropse for your Support.</p>

                                </div>

                            </div>

                        </div>



                    </div>

                </div>

            </div>

                <div class="loader loader1"><span></span><span></span></div>

                <div class="loader loader2"><span></span><span></span></div>

                <div class="loader loader3"><span></span><span></span></div>

                <div class="loader loader4"><span></span><span></span></div>

                <div class="loader loader5"><span></span><span></span></div>

                <div class="loader loader6"><span></span><span></span></div>

                <div class="loader loader7"><span></span><span></span></div>

                <div class="loader loader8"><span></span><span></span></div>

                <div class="loader loader9"><span></span><span></span></div>

        </div>

    </div>

</div>

<div class="container-fluid blog-fluid">

    <div class="container">

        <div class="toppartdesign">

            <h2>TRENDING BLOGS</h2>

            <p>Explore our expertise through these blogs, where we have showcased the best of our knowledge in the field.</p>

        </div>

        <div class="blogsection">

            <div id="blogslider" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner slider-carousel-inner row w-100" role="listbox">

                    <div class="carousel-item blog-slider col-md-4 active">

                        <div class="card">

                            <a href="https://www.techgropse.com/blog/why-apps-important-for-ecommerce-business/" target="_blank">

                                    <img class="blogimg" src="<?php echo site_url();?>common/images/blog/ecom-mobile.png" alt="App development agency in Dubai, UAE">

                                    <div class="card-body">

                                    <h5>Aug 31, 2020</h5>

                                    <h4 >Why Your eCommerce Business Need A Mobile App Promptly?</h4>

                                    <p >The mobile revolution is bringing organizations another spur, and eCommerce is no exception. Online eCommerce ...</p>

                                    </div>

                            </a>

                        </div>

                        </div>

                        <div class="carousel-item blog-slider col-md-4">

                        <div class="card">

                            <a href="https://www.techgropse.com/blog/cloud-apps-vs-web-apps/" target="_blank">

                                    <img class="blogimg" src="<?php echo site_url();?>common/images/blog/cloud-and-web.png" alt="App development agency in Dubai, UAE">

                                    <div class="card-body">

                                    <h5>Aug 29, 2020</h5>

                                    <h4 >Cloud Apps vs. Web Apps: Features & Differences</h4>

                                    <p >Mobile applications have managed to outgrow their respective competitors by increasing sales ...</p>

                                    </div>

                            </a>

                        </div>

                        </div>

                        <div class="carousel-item blog-slider col-md-4">

                        <div class="card">

                            <a href="https://www.techgropse.com/blog/importance-mobile-apps-digital-world/" target="_blank">

                                    <img class="blogimg" src="<?php echo site_url();?>common/images/blog/mob-app-digital.png" alt="App development agency in Dubai, UAE">

                                    <div class="card-body">

                                    <h5>Aug 27, 2020</h5>

                                    <h4 >Importance of Mobile Apps in Digital World</h4>

                                    <p >In this period of startup and business-situated standards, each association needs to adjust to the most ... </p>

                                    </div>

                            </a>

                        </div>

                        </div>

                        <div class="carousel-item blog-slider col-md-4">

                            <div class="card">

                                <a href="https://www.techgropse.com/blog/top-web-design-trends/" target="_blank">

                                    <img class="blogimg" src="<?php echo site_url();?>common/images/blog/web-design-trend.png" alt="App development agency in Dubai, UAE">

                                    <div class="card-body">

                                        <h5>Aug 25, 2020</h5>

                                        <h4 >Top Web Design Trends to Follow in 2020</h4>

                                        <p >Websites work as a digital contact book for possible customers and a dedicated website for the business is always ... </p>

                                    </div>

                                </a>

                            </div>

                        </div>

                        <div class="carousel-item blog-slider col-md-4">

                            <div class="card">

                                <a href="https://www.techgropse.com/blog/best-machine-learning-frameworks-2020/" target="_blank">

                                    <img class="blogimg" src="<?php echo site_url();?>common/images/blog/machine-learning.png" alt="App development agency in Dubai, UAE">

                                    <div class="card-body">

                                        <h5>Aug 23, 2020</h5>

                                        <h4 >Best Machine Learning Frameworks in 2020</h4>

                                        <p >As digitalization progresses at an increasingly fast pace, so is the popularity of machine learning that continues to solidify ... </p>

                                    </div>

                                </a>

                            </div>

                        </div>

                    </div>

                    <a class="carousel-control-prev" href="#blogslider" role="button" data-slide="prev">

                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                        <span class="sr-only">Previous</span>

                    </a>

                    <a class="carousel-control-next text-faded" href="#blogslider" role="button" data-slide="next">

                        <span class="carousel-control-next-icon" aria-hidden="true"></span>

                        <span class="sr-only">Next</span>

                    </a>

                </div>

            </div>

    </div>

</div>

<div class="container-fluid form-full">

    <div class="container">

    <form class="row form-styling" method="post" >

            <div class="col-12">

                <h2 class="text-center form-heading">Request a Quote</h2>

            </div>

            <div class="col-6">

                <div class="form-group">

                    <input type="text" required name="name" class="form-control" id="" placeholder="Name">

                </div>

            </div>

            <div class="col-6">

                <div class="form-group">

                    <input type="tel" required name="mobile" class="form-control" id="" placeholder="Mobile No.">

                </div>

            </div>

            <div class="col-12">

                <div class="form-group">

                    <input type="text" required name="email" class="form-control" placeholder="Email Address">

                </div>

            </div>

            <div class="col-6">

                <div class="form-group">

                    <!--<input type="text" name="country" class="form-control" id="" placeholder="Country">-->

                    <label for="text">Country</label>

                    <select name="country" required="" class="form-control">  <option value="United States">United States</option>  <option value="Afghanistan">Afghanistan</option>  <option value="Albania">Albania</option>  <option value="Algeria">Algeria</option>  <option value="American Samoa">American Samoa</option>  <option value="Andorra">Andorra</option>  <option value="Angola">Angola</option>  <option value="Anguilla">Anguilla</option>  <option value="Antarctica">Antarctica</option>  <option value="Antigua and Barbuda">Antigua and Barbuda</option>  <option value="Argentina">Argentina</option>  <option value="Armenia">Armenia</option>  <option value="Aruba">Aruba</option>  <option value="Australia">Australia</option>  <option value="Austria">Austria</option>  <option value="Azerbaijan">Azerbaijan</option>  <option value="Bahamas">Bahamas</option>  <option value="Bahrain">Bahrain</option>  <option value="Bangladesh">Bangladesh</option>  <option value="Barbados">Barbados</option>  <option value="Belarus">Belarus</option>  <option value="Belgium">Belgium</option>  <option value="Belize">Belize</option>  <option value="Benin">Benin</option>  <option value="Bermuda">Bermuda</option>  <option value="Bhutan">Bhutan</option>  <option value="Bolivia">Bolivia</option>  <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>  <option value="Botswana">Botswana</option>  <option value="Bouvet Island">Bouvet Island</option>  <option value="Brazil">Brazil</option>  <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>  <option value="Brunei Darussalam">Brunei Darussalam</option>  <option value="Bulgaria">Bulgaria</option>  <option value="Burkina Faso">Burkina Faso</option>  <option value="Burundi">Burundi</option>  <option value="Cambodia">Cambodia</option>  <option value="Cameroon">Cameroon</option>  <option value="Canada">Canada</option>  <option value="Cape Verde">Cape Verde</option>  <option value="Cayman Islands">Cayman Islands</option>  <option value="Central African Republic">Central African Republic</option>  <option value="Chad">Chad</option>  <option value="Chile">Chile</option>  <option value="China">China</option>  <option value="Christmas Island">Christmas Island</option>  <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>  <option value="Colombia">Colombia</option>  <option value="Comoros">Comoros</option>  <option value="Congo">Congo</option>  <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>  <option value="Cook Islands">Cook Islands</option>  <option value="Costa Rica">Costa Rica</option>  <option value="Cote d'Ivoire">Cote d'Ivoire</option>  <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>  <option value="Cuba">Cuba</option>  <option value="Cyprus">Cyprus</option>  <option value="Czech Republic">Czech Republic</option>  <option value="Denmark">Denmark</option>  <option value="Djibouti">Djibouti</option>  <option value="Dominica">Dominica</option>  <option value="Dominican Republic">Dominican Republic</option>  <option value="East Timor">East Timor</option>  <option value="Ecuador">Ecuador</option>  <option value="Egypt">Egypt</option>  <option value="El Salvador">El Salvador</option>  <option value="Equatorial Guinea">Equatorial Guinea</option>  <option value="Eritrea">Eritrea</option>  <option value="Estonia">Estonia</option>  <option value="Ethiopia">Ethiopia</option>  <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>  <option value="Faroe Islands">Faroe Islands</option>  <option value="Fiji">Fiji</option>  <option value="Finland">Finland</option>  <option value="France">France</option>  <option value="France Metropolitan">France Metropolitan</option>  <option value="French Guiana">French Guiana</option>  <option value="French Polynesia">French Polynesia</option>  <option value="French Southern Territories">French Southern Territories</option>  <option value="Gabon">Gabon</option>  <option value="Gambia">Gambia</option>  <option value="Georgia">Georgia</option>  <option value="Germany">Germany</option>  <option value="Ghana">Ghana</option>  <option value="Gibraltar">Gibraltar</option>  <option value="Greece">Greece</option>  <option value="Greenland">Greenland</option>  <option value="Grenada">Grenada</option>  <option value="Guadeloupe">Guadeloupe</option>  <option value="Guam">Guam</option>  <option value="Guatemala">Guatemala</option>  <option value="Guinea">Guinea</option>  <option value="Guinea-Bissau">Guinea-Bissau</option>  <option value="Guyana">Guyana</option>  <option value="Haiti">Haiti</option>  <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>  <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>  <option value="Honduras">Honduras</option>  <option value="Hong Kong">Hong Kong</option>  <option value="Hungary">Hungary</option>  <option value="Iceland">Iceland</option>  <option value="India">India</option>  <option value="Indonesia">Indonesia</option>  <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>  <option value="Iraq">Iraq</option>  <option value="Ireland">Ireland</option>  <option value="Israel">Israel</option>  <option value="Italy">Italy</option>  <option value="Jamaica">Jamaica</option>  <option value="Japan">Japan</option>  <option value="Jordan">Jordan</option>  <option value="Kazakhstan">Kazakhstan</option>  <option value="Kenya">Kenya</option>  <option value="Kiribati">Kiribati</option>  <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>  <option value="Korea, Republic of">Korea, Republic of</option>  <option value="Kuwait">Kuwait</option>  <option value="Kyrgyzstan">Kyrgyzstan</option>  <option value="Lao, People's Democratic Republic">Lao, People's Democratic Republic</option>  <option value="Latvia">Latvia</option>  <option value="Lebanon">Lebanon</option>  <option value="Lesotho">Lesotho</option>  <option value="Liberia">Liberia</option>  <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>  <option value="Liechtenstein">Liechtenstein</option>  <option value="Lithuania">Lithuania</option>  <option value="Luxembourg">Luxembourg</option>  <option value="Macau">Macau</option>  <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>  <option value="Madagascar">Madagascar</option>  <option value="Malawi">Malawi</option>  <option value="Malaysia">Malaysia</option>  <option value="Maldives">Maldives</option>  <option value="Mali">Mali</option>  <option value="Malta">Malta</option>  <option value="Marshall Islands">Marshall Islands</option>  <option value="Martinique">Martinique</option>  <option value="Mauritania">Mauritania</option>  <option value="Mauritius">Mauritius</option>  <option value="Mayotte">Mayotte</option>  <option value="Mexico">Mexico</option>  <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>  <option value="Moldova, Republic of">Moldova, Republic of</option>  <option value="Monaco">Monaco</option>  <option value="Mongolia">Mongolia</option>  <option value="Montserrat">Montserrat</option>  <option value="Morocco">Morocco</option>  <option value="Mozambique">Mozambique</option>  <option value="Myanmar">Myanmar</option>  <option value="Namibia">Namibia</option>  <option value="Nauru">Nauru</option>  <option value="Nepal">Nepal</option>  <option value="Netherlands">Netherlands</option>  <option value="Netherlands Antilles">Netherlands Antilles</option>  <option value="New Caledonia">New Caledonia</option>  <option value="New Zealand">New Zealand</option>  <option value="Nicaragua">Nicaragua</option>  <option value="Niger">Niger</option>  <option value="Nigeria">Nigeria</option>  <option value="Niue">Niue</option>  <option value="Norfolk Island">Norfolk Island</option>  <option value="Northern Mariana Islands">Northern Mariana Islands</option>  <option value="Norway">Norway</option>  <option value="Oman">Oman</option>  <option value="Pakistan">Pakistan</option>  <option value="Palau">Palau</option>  <option value="Panama">Panama</option>  <option value="Papua New Guinea">Papua New Guinea</option>  <option value="Paraguay">Paraguay</option>  <option value="Peru">Peru</option>  <option value="Philippines">Philippines</option>  <option value="Pitcairn">Pitcairn</option>  <option value="Poland">Poland</option>  <option value="Portugal">Portugal</option>  <option value="Puerto Rico">Puerto Rico</option>  <option value="Qatar">Qatar</option>  <option value="Reunion">Reunion</option>  <option value="Romania">Romania</option>  <option value="Russian Federation">Russian Federation</option>  <option value="Rwanda">Rwanda</option>  <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>  <option value="Saint Lucia">Saint Lucia</option>  <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>  <option value="Samoa">Samoa</option>  <option value="San Marino">San Marino</option>  <option value="Sao Tome and Principe">Sao Tome and Principe</option>  <option value="Saudi Arabia">Saudi Arabia</option>  <option value="Senegal">Senegal</option>  <option value="Seychelles">Seychelles</option>  <option value="Sierra Leone">Sierra Leone</option>  <option value="Singapore">Singapore</option>  <option value="Slovakia (Slovak Republic)">Slovakia (Slovak Republic)</option>  <option value="Slovenia">Slovenia</option>  <option value="Solomon Islands">Solomon Islands</option>  <option value="Somalia">Somalia</option>  <option value="South Africa">South Africa</option>  <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>  <option value="Spain">Spain</option>  <option value="Sri Lanka">Sri Lanka</option>  <option value="St. Helena">St. Helena</option>  <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>  <option value="Sudan">Sudan</option>  <option value="Suriname">Suriname</option>  <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>  <option value="Swaziland">Swaziland</option>  <option value="Sweden">Sweden</option>  <option value="Switzerland">Switzerland</option>  <option value="Syrian Arab Republic">Syrian Arab Republic</option>  <option value="Taiwan, Province of China">Taiwan, Province of China</option>  <option value="Tajikistan">Tajikistan</option>  <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>  <option value="Thailand">Thailand</option>  <option value="Togo">Togo</option>  <option value="Tokelau">Tokelau</option>  <option value="Tonga">Tonga</option>  <option value="Trinidad and Tobago">Trinidad and Tobago</option>  <option value="Tunisia">Tunisia</option>  <option value="Turkey">Turkey</option>  <option value="Turkmenistan">Turkmenistan</option>  <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>  <option value="Tuvalu">Tuvalu</option>  <option value="Uganda">Uganda</option>  <option value="Ukraine">Ukraine</option>  <option value="United Arab Emirates">United Arab Emirates</option>  <option value="United Kingdom">United Kingdom</option>  <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>  <option value="Uruguay">Uruguay</option>  <option value="Uzbekistan">Uzbekistan</option>  <option value="Vanuatu">Vanuatu</option>  <option value="Venezuela">Venezuela</option>  <option value="Vietnam">Vietnam</option>  <option value="Virgin Islands (British)">Virgin Islands (British)</option>  <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>  <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>  <option value="Western Sahara">Western Sahara</option>  <option value="Yemen">Yemen</option>  <option value="Yugoslavia">Yugoslavia</option>  <option value="Zambia">Zambia</option>  <option value="Zimbabwe">Zimbabwe</option> </select>

                </div>

            </div>

            <div class="col-6">

                <div class="form-group">

                    <!--<input type="tel" name="project" class="form-control" id="" placeholder="Project Type">-->

                    <label for="text">Project Type</label>

                    <select required="" name="project" class="form-control"> 

                    <option>Select</option> 

                    <option value="iOS App Development">iOS App Development</option> 

                    <option value="Android App Development">Android App Development</option> 

                    <option value="Web Development">Web Development</option> 

                    <option value="Others">Others</option></select>

                </div>

            </div>

            <div class="col-12">

                <div class="form-group">

                    <textarea cols="40" name="about" rows="3" class="form-control" placeholder="What's your project about"></textarea>

                </div>

            </div>

            <div class="col-12 text-center">

            <button type="submit" id="submit_2" name="submit2" class="btn btn-primary mb-2 btn-styling">Submit <img src="<?php echo site_url();?>common/images/icons/left-arrow.png" class="arrowicon" alt="App development partner in Dubai, UAE"></button>

            </div>

        </form>

    </div>

</div>

<div class="client-heading-fluid container-fluid">

    <div class="container">

        <h2>Brands with which we have worked</h2>

    </div>

</div>

<div class="client-fluid"></div>

<?php include 'include/footer.php';?>