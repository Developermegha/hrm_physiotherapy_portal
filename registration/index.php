<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Davao Medical School Foundation-DMSF</title>
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/bootstrap-select.css" />
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/device.css">

        <style>


            .text_style{
                text-align: left;
                /* padding-left: 44px; */
                width: 100%;
            }


            .select2-container .select2-selection--single {
                height:40px!important; 

            }
            .select2-container--default .select2-selection--single .select2-selection__arrow{height:40px!important; }
            .select2-container--default .select2-selection--single .select2-selection__rendered{color: #8e8b8b!important;
                                                                                                line-height: 35px!important;
                                                                                                font-size: 14px!important;}
            .select2-results__option{
                font-size: 14px!important;
            }   
            .select2-search--dropdown .select2-search__field{
                font-size: 14px!important; 
            }
        </style>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->

        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    </head>
    <body>
        <div class="Wrapper">
            <div class="container-lg">
                <div class="row justify-content-center m-0">
                    <div class="col-lg-10 col-sm-12">
                        <div class="formWrap">
                            <div class="col-md-12 TitleWrap ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="uploads/logo.png" width="100%" />
                                    </div>
                                    <div class="col-md-9">
                                        <div class="">
                                            <h2>DMSF IMD student Database - Online Registration</h2>
                                            <h2>Pre Registration Academic Year 2020-2021 </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                            <ul class="progressWrap">
                                <li class="active">Step 1 : Personal Details</li>
                                <li>Step 2 : Contact Details</li>
                                <li>Step 3 : Hostel Details</li>
                                <li>Step 4 : Course Details</li>
                                <li>Step 5 : Documents Upload</li>
                                <li>Step 6 : Education Details</li>
                            </ul>
                            <form  action="" method="post" class="registration-form">
                                <fieldset>
                                    <ul class="formListing">
                                        <li class="half">
                                            <div class="formField">
                                                <label>Student Roll Number</label>
                                                <input type="text" id="studentIdNumber" onfocusout="validateId(this.value)" placeholder="Student Id Number">
												<span class="error" style="color:red" id="invalid_id">Already Registered. Please edit from your portal login.</span>
                                            </div>
                                        </li>
                                        <li class="half">
                                            <div class="formField">
                                                <label>Valid Phone Number (+91)</label>
                                                <input type="number" onfocusout="validateMobile(this.value,1)"  id="philippinesPhone"  placeholder="Phone Number">
                                                <span class="error" style="color:red" id="invalid_mobile1">Invalid Mobile Number(10 Digits)</span> 
                                            </div>
                                        </li>
                                        <!--                                        <li class="half">
                                                                                    <div class="formField">
                                                                                        <label>Student Passport Number</label>
                                                                                        <input type="text"  id="sPassportNumber" placeholder="Student Passport Number">
                                                                                    </div>
                                                                                </li>-->
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>First Name <span>(as per passport)</span></label>
                                                <input type="text" id="fName" placeholder="First Name">
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Middle Name <span>(Optional)</span></label>
                                                <input type="text" id="mName" placeholder="Last Name" value=" ">
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Last Name <span>(as per passport)</span></label>
                                                <input type="text" id="lName" placeholder="Last Name">
                                            </div>
                                        </li>

                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Telegram Number  (with country code)</label>
                                                <input type="text" id="telegramNumber" placeholder="Telegram Number(ex:+91 XXXX  XXXX)"> 
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Whatsapp Number(with country code)</label>
                                                <input type="text" id="whatsappNumber" placeholder="Whatsapp Number(ex:+91 XXXX  XXXX)">
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Email</label>
                                                <input type="email" id="email" onfocusout="validateEmail(this.value,1);" placeholder="Email">
                                                <span class="error" style="color:red" id="invalid_email1">Email-id is invalid</span> 
                                            </div>
                                        </li>
                                        <li class="half">
                                            <div class="formField"> 
                                                <label>Gender</label>
                                                <div class="selectWrap">
                                                    <select id="gender" class="select2" style="width:100%;">
                                                        <option value="">-- select one --</option>
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                        <option>Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="half">
                                            <div class="formField">
                                                <label>Date Of Birth</label>
                                                <div class="selectWrap">
                                                    <input type="date" id="dob" onfocusout="validationDOB()">
                                                     <span  style="color:red;font-size:18px" id="invalid_dob1" ></span> 
                                                </div>
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Upload Photo <span>(Optional)</span></label>
                                                <input type="file" id="foto"  accept="image/*"> 
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Blood Group</label>
                                                <div class="selectWrap">
                                                    <select id="bloodGroup" class="select2" style="width:100%;">
                                                        <option value="">-- select one --</option>
                                                        <option>A+</option>
                                                        <option>A-</option>
                                                        <option>B+</option>
                                                        <option>B-</option>
                                                        <option>AB+</option>
                                                        <option>AB-</option>
                                                        <option>O+</option>
                                                        <option>O-</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Nationality <span>(as per passport)</span></label>
                                                <div class="selectWrap">
                                                    <select id="nationality" name="" class="select2" style="width:100%;">
                                                        <option value="">-- select one --</option>
                                                        <option value="afghan">Afghan</option>
                                                        <option value="albanian">Albanian</option>
                                                        <option value="algerian">Algerian</option>
                                                        <option value="american">American</option>
                                                        <option value="andorran">Andorran</option>
                                                        <option value="angolan">Angolan</option>
                                                        <option value="antiguans">Antiguans</option>
                                                        <option value="argentinean">Argentinean</option>
                                                        <option value="armenian">Armenian</option>
                                                        <option value="australian">Australian</option>
                                                        <option value="austrian">Austrian</option>
                                                        <option value="azerbaijani">Azerbaijani</option>
                                                        <option value="bahamian">Bahamian</option>
                                                        <option value="bahraini">Bahraini</option>
                                                        <option value="bangladeshi">Bangladeshi</option>
                                                        <option value="barbadian">Barbadian</option>
                                                        <option value="barbudans">Barbudans</option>
                                                        <option value="batswana">Batswana</option>
                                                        <option value="belarusian">Belarusian</option>
                                                        <option value="belgian">Belgian</option>
                                                        <option value="belizean">Belizean</option>
                                                        <option value="beninese">Beninese</option>
                                                        <option value="bhutanese">Bhutanese</option>
                                                        <option value="bolivian">Bolivian</option>
                                                        <option value="bosnian">Bosnian</option>
                                                        <option value="brazilian">Brazilian</option>
                                                        <option value="british">British</option>
                                                        <option value="bruneian">Bruneian</option>
                                                        <option value="bulgarian">Bulgarian</option>
                                                        <option value="burkinabe">Burkinabe</option>
                                                        <option value="burmese">Burmese</option>
                                                        <option value="burundian">Burundian</option>
                                                        <option value="cambodian">Cambodian</option>
                                                        <option value="cameroonian">Cameroonian</option>
                                                        <option value="canadian">Canadian</option>
                                                        <option value="cape verdean">Cape Verdean</option>
                                                        <option value="central african">Central African</option>
                                                        <option value="chadian">Chadian</option>
                                                        <option value="chilean">Chilean</option>
                                                        <option value="chinese">Chinese</option>
                                                        <option value="colombian">Colombian</option>
                                                        <option value="comoran">Comoran</option>
                                                        <option value="congolese">Congolese</option>
                                                        <option value="costa rican">Costa Rican</option>
                                                        <option value="croatian">Croatian</option>
                                                        <option value="cuban">Cuban</option>
                                                        <option value="cypriot">Cypriot</option>
                                                        <option value="czech">Czech</option>
                                                        <option value="danish">Danish</option>
                                                        <option value="djibouti">Djibouti</option>
                                                        <option value="dominican">Dominican</option>
                                                        <option value="dutch">Dutch</option>
                                                        <option value="east timorese">East Timorese</option>
                                                        <option value="ecuadorean">Ecuadorean</option>
                                                        <option value="egyptian">Egyptian</option>
                                                        <option value="emirian">Emirian</option>
                                                        <option value="equatorial guinean">Equatorial Guinean</option>
                                                        <option value="eritrean">Eritrean</option>
                                                        <option value="estonian">Estonian</option>
                                                        <option value="ethiopian">Ethiopian</option>
                                                        <option value="fijian">Fijian</option>
                                                        <option value="filipino">Filipino</option>
                                                        <option value="finnish">Finnish</option>
                                                        <option value="french">French</option>
                                                        <option value="gabonese">Gabonese</option>
                                                        <option value="gambian">Gambian</option>
                                                        <option value="georgian">Georgian</option>
                                                        <option value="german">German</option>
                                                        <option value="ghanaian">Ghanaian</option>
                                                        <option value="greek">Greek</option>
                                                        <option value="grenadian">Grenadian</option>
                                                        <option value="guatemalan">Guatemalan</option>
                                                        <option value="guinea-bissauan">Guinea-Bissauan</option>
                                                        <option value="guinean">Guinean</option>
                                                        <option value="guyanese">Guyanese</option>
                                                        <option value="haitian">Haitian</option>
                                                        <option value="herzegovinian">Herzegovinian</option>
                                                        <option value="honduran">Honduran</option>
                                                        <option value="hungarian">Hungarian</option>
                                                        <option value="icelander">Icelander</option>
                                                        <option value="indian">Indian</option>
                                                        <option value="indonesian">Indonesian</option>
                                                        <option value="iranian">Iranian</option>
                                                        <option value="iraqi">Iraqi</option>
                                                        <option value="irish">Irish</option>
                                                        <option value="israeli">Israeli</option>
                                                        <option value="italian">Italian</option>
                                                        <option value="ivorian">Ivorian</option>
                                                        <option value="jamaican">Jamaican</option>
                                                        <option value="japanese">Japanese</option>
                                                        <option value="jordanian">Jordanian</option>
                                                        <option value="kazakhstani">Kazakhstani</option>
                                                        <option value="kenyan">Kenyan</option>
                                                        <option value="kittian and nevisian">Kittian and Nevisian</option>
                                                        <option value="kuwaiti">Kuwaiti</option>
                                                        <option value="kyrgyz">Kyrgyz</option>
                                                        <option value="laotian">Laotian</option>
                                                        <option value="latvian">Latvian</option>
                                                        <option value="lebanese">Lebanese</option>
                                                        <option value="liberian">Liberian</option>
                                                        <option value="libyan">Libyan</option>
                                                        <option value="liechtensteiner">Liechtensteiner</option>
                                                        <option value="lithuanian">Lithuanian</option>
                                                        <option value="luxembourger">Luxembourger</option>
                                                        <option value="macedonian">Macedonian</option>
                                                        <option value="malagasy">Malagasy</option>
                                                        <option value="malawian">Malawian</option>
                                                        <option value="malaysian">Malaysian</option>
                                                        <option value="maldivan">Maldivan</option>
                                                        <option value="malian">Malian</option>
                                                        <option value="maltese">Maltese</option>
                                                        <option value="marshallese">Marshallese</option>
                                                        <option value="mauritanian">Mauritanian</option>
                                                        <option value="mauritian">Mauritian</option>
                                                        <option value="mexican">Mexican</option>
                                                        <option value="micronesian">Micronesian</option>
                                                        <option value="moldovan">Moldovan</option>
                                                        <option value="monacan">Monacan</option>
                                                        <option value="mongolian">Mongolian</option>
                                                        <option value="moroccan">Moroccan</option>
                                                        <option value="mosotho">Mosotho</option>
                                                        <option value="motswana">Motswana</option>
                                                        <option value="mozambican">Mozambican</option>
                                                        <option value="namibian">Namibian</option>
                                                        <option value="nauruan">Nauruan</option>
                                                        <option value="nepalese">Nepalese</option>
                                                        <option value="new zealander">New Zealander</option>
                                                        <option value="ni-vanuatu">Ni-Vanuatu</option>
                                                        <option value="nicaraguan">Nicaraguan</option>
                                                        <option value="nigerien">Nigerien</option>
                                                        <option value="north korean">North Korean</option>
                                                        <option value="northern irish">Northern Irish</option>
                                                        <option value="norwegian">Norwegian</option>
                                                        <option value="omani">Omani</option>
                                                        <option value="pakistani">Pakistani</option>
                                                        <option value="palauan">Palauan</option>
                                                        <option value="panamanian">Panamanian</option>
                                                        <option value="papua new guinean">Papua New Guinean</option>
                                                        <option value="paraguayan">Paraguayan</option>
                                                        <option value="peruvian">Peruvian</option>
                                                        <option value="polish">Polish</option>
                                                        <option value="portuguese">Portuguese</option>
                                                        <option value="qatari">Qatari</option>
                                                        <option value="romanian">Romanian</option>
                                                        <option value="russian">Russian</option>
                                                        <option value="rwandan">Rwandan</option>
                                                        <option value="saint lucian">Saint Lucian</option>
                                                        <option value="salvadoran">Salvadoran</option>
                                                        <option value="samoan">Samoan</option>
                                                        <option value="san marinese">San Marinese</option>
                                                        <option value="sao tomean">Sao Tomean</option>
                                                        <option value="saudi">Saudi</option>
                                                        <option value="scottish">Scottish</option>
                                                        <option value="senegalese">Senegalese</option>
                                                        <option value="serbian">Serbian</option>
                                                        <option value="seychellois">Seychellois</option>
                                                        <option value="sierra leonean">Sierra Leonean</option>
                                                        <option value="singaporean">Singaporean</option>
                                                        <option value="slovakian">Slovakian</option>
                                                        <option value="slovenian">Slovenian</option>
                                                        <option value="solomon islander">Solomon Islander</option>
                                                        <option value="somali">Somali</option>
                                                        <option value="south african">South African</option>
                                                        <option value="south korean">South Korean</option>
                                                        <option value="spanish">Spanish</option>
                                                        <option value="sri lankan">Sri Lankan</option>
                                                        <option value="sudanese">Sudanese</option>
                                                        <option value="surinamer">Surinamer</option>
                                                        <option value="swazi">Swazi</option>
                                                        <option value="swedish">Swedish</option>
                                                        <option value="swiss">Swiss</option>
                                                        <option value="syrian">Syrian</option>
                                                        <option value="taiwanese">Taiwanese</option>
                                                        <option value="tajik">Tajik</option>
                                                        <option value="tanzanian">Tanzanian</option>
                                                        <option value="thai">Thai</option>
                                                        <option value="togolese">Togolese</option>
                                                        <option value="tongan">Tongan</option>
                                                        <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                                                        <option value="tunisian">Tunisian</option>
                                                        <option value="turkish">Turkish</option>
                                                        <option value="tuvaluan">Tuvaluan</option>
                                                        <option value="ugandan">Ugandan</option>
                                                        <option value="ukrainian">Ukrainian</option>
                                                        <option value="uruguayan">Uruguayan</option>
                                                        <option value="uzbekistani">Uzbekistani</option>
                                                        <option value="venezuelan">Venezuelan</option>
                                                        <option value="vietnamese">Vietnamese</option>
                                                        <option value="welsh">Welsh</option>
                                                        <option value="yemenite">Yemenite</option>
                                                        <option value="zambian">Zambian</option>
                                                        <option value="zimbabwean">Zimbabwean</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ctaWrap">
                                                <button type="button" class="btn btn-next btn-act">Next</button>
                                            </div>
                                        </li>
                                    </ul>
                                </fieldset>
                                <fieldset>
                                    <ul class="formListing">
                                        <h2 class="text_style">Family Details</h2>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Name of Father/Guardian</label>
                                                <input type="text" id="fatherName" placeholder="Name of Father/Guardian">
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Phone Number <span>(should be verifiable)</span></label>
                                                <input type="text" id="fatherMobile" onfocusout="validateMobile(this.value,2)" placeholder="Phone Number">
                                                <span class="error" style="color:red" id="invalid_mobile2">Invalid Mobile Number(10 Digits)</span> 
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Email</label>
                                                <input type="email" id="fatherEmail" onfocusout="validateEmail(this.value,2);" placeholder="Email">
                                                <span class="error" style="color:red" id="invalid_email2">Email-id is invalid</span>
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Name of Mother/Guardian</label>
                                                <input type="text" id="motherName" placeholder="Name of Mother/Guardian">
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Phone Number <span>(should be verifiable)</span></label>
                                                <input type="text" id="motherMobile" onfocusout="validateMobile(this.value,3)" placeholder="Phone Number">
                                                <span class="error" style="color:red" id="invalid_mobile3">Invalid Mobile Number(10 Digits)</span> 
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Email</label>
                                                <input type="email" id="motherEmail" onfocusout="validateEmail(this.value,3);" placeholder="Email">
                                                <span class="error" style="color:red" id="invalid_email3">Email-id is invalid</span>
                                            </div>
                                        </li>
                                        <li class="half">
                                            <div class="formField">
                                                <label>Father Occupation</label>
                                                <input type="text" id="fatherOccupation" placeholder="Father Occupation"> 
                                            </div>
                                        </li>
                                        <li class="half">
                                            <div class="formField">
                                                <label>Mother Occupation</label>
                                                <input type="text" id="motherOccupation" placeholder="Father Occupation">
                                            </div>
                                        </li>
                                        <h2 class="text_style">Address Details</h2>
                                        <li class="half">
                                            <div class="formField">
                                                <label>Communication Address</label>
                                                <input type="text" id="temporaryAddress" placeholder="Communication Address">
                                            </div>
                                        </li>
                                        <li class="half"></li>

                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Country</label>
                                                <div class="selectWrap">
                                                    <select id="tCountry"  class="select2" style="width:100%;">
                                                        <option value="">-- select one --</option>
                                                        <option value="Afghanistan">Afghanistan</option>
                                                        <option value="Åland Islands">Åland Islands</option>
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
                                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                        <option value="Botswana">Botswana</option>
                                                        <option value="Bouvet Island">Bouvet Island</option>
                                                        <option value="Brazil">Brazil</option>
                                                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                        <option value="Bulgaria">Bulgaria</option>
                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                        <option value="Burundi">Burundi</option>
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
                                                        <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                                        <option value="Cook Islands">Cook Islands</option>
                                                        <option value="Costa Rica">Costa Rica</option>
                                                        <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                        <option value="Croatia">Croatia</option>
                                                        <option value="Cuba">Cuba</option>
                                                        <option value="Cyprus">Cyprus</option>
                                                        <option value="Czech Republic">Czech Republic</option>
                                                        <option value="Denmark">Denmark</option>
                                                        <option value="Djibouti">Djibouti</option>
                                                        <option value="Dominica">Dominica</option>
                                                        <option value="Dominican Republic">Dominican Republic</option>
                                                        <option value="Ecuador">Ecuador</option>
                                                        <option value="Egypt">Egypt</option>
                                                        <option value="El Salvador">El Salvador</option>
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
                                                        <option value="Guatemala">Guatemala</option>
                                                        <option value="Guernsey">Guernsey</option>
                                                        <option value="Guinea">Guinea</option>
                                                        <option value="Guinea-bissau">Guinea-bissau</option>
                                                        <option value="Guyana">Guyana</option>
                                                        <option value="Haiti">Haiti</option>
                                                        <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                                        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                        <option value="Honduras">Honduras</option>
                                                        <option value="Hong Kong">Hong Kong</option>
                                                        <option value="Hungary">Hungary</option>
                                                        <option value="Iceland">Iceland</option>
                                                        <option value="India">India</option>
                                                        <option value="Indonesia">Indonesia</option>
                                                        <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                        <option value="Iraq">Iraq</option>
                                                        <option value="Ireland">Ireland</option>
                                                        <option value="Isle of Man">Isle of Man</option>
                                                        <option value="Israel">Israel</option>
                                                        <option value="Italy">Italy</option>
                                                        <option value="Jamaica">Jamaica</option>
                                                        <option value="Japan">Japan</option>
                                                        <option value="Jersey">Jersey</option>
                                                        <option value="Jordan">Jordan</option>
                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                        <option value="Kenya">Kenya</option>
                                                        <option value="Kiribati">Kiribati</option>
                                                        <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                        <option value="Korea, Republic of">Korea, Republic of</option>
                                                        <option value="Kuwait">Kuwait</option>
                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                        <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                        <option value="Latvia">Latvia</option>
                                                        <option value="Lebanon">Lebanon</option>
                                                        <option value="Lesotho">Lesotho</option>
                                                        <option value="Liberia">Liberia</option>
                                                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                        <option value="Lithuania">Lithuania</option>
                                                        <option value="Luxembourg">Luxembourg</option>
                                                        <option value="Macao">Macao</option>
                                                        <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
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
                                                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                        <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                        <option value="Monaco">Monaco</option>
                                                        <option value="Mongolia">Mongolia</option>
                                                        <option value="Montenegro">Montenegro</option>
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
                                                        <option value="Nigeria">Nigeria</option>
                                                        <option value="Niue">Niue</option>
                                                        <option value="Norfolk Island">Norfolk Island</option>
                                                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                        <option value="Norway">Norway</option>
                                                        <option value="Oman">Oman</option>
                                                        <option value="Pakistan">Pakistan</option>
                                                        <option value="Palau">Palau</option>
                                                        <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
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
                                                        <option value="Russian Federation">Russian Federation</option>
                                                        <option value="Rwanda">Rwanda</option>
                                                        <option value="Saint Helena">Saint Helena</option>
                                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                        <option value="Saint Lucia">Saint Lucia</option>
                                                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                        <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                                        <option value="Samoa">Samoa</option>
                                                        <option value="San Marino">San Marino</option>
                                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                        <option value="Senegal">Senegal</option>
                                                        <option value="Serbia">Serbia</option>
                                                        <option value="Seychelles">Seychelles</option>
                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                        <option value="Singapore">Singapore</option>
                                                        <option value="Slovakia">Slovakia</option>
                                                        <option value="Slovenia">Slovenia</option>
                                                        <option value="Solomon Islands">Solomon Islands</option>
                                                        <option value="Somalia">Somalia</option>
                                                        <option value="South Africa">South Africa</option>
                                                        <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                                        <option value="Spain">Spain</option>
                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                        <option value="Sudan">Sudan</option>
                                                        <option value="Suriname">Suriname</option>
                                                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                        <option value="Swaziland">Swaziland</option>
                                                        <option value="Sweden">Sweden</option>
                                                        <option value="Switzerland">Switzerland</option>
                                                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                        <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                                        <option value="Tajikistan">Tajikistan</option>
                                                        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                        <option value="Thailand">Thailand</option>
                                                        <option value="Timor-leste">Timor-leste</option>
                                                        <option value="Togo">Togo</option>
                                                        <option value="Tokelau">Tokelau</option>
                                                        <option value="Tonga">Tonga</option>
                                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                        <option value="Tunisia">Tunisia</option>
                                                        <option value="Turkey">Turkey</option>
                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                        <option value="Tuvalu">Tuvalu</option>
                                                        <option value="Uganda">Uganda</option>
                                                        <option value="Ukraine">Ukraine</option>
                                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United States">United States</option>
                                                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                        <option value="Uruguay">Uruguay</option>
                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                        <option value="Vanuatu">Vanuatu</option>
                                                        <option value="Venezuela">Venezuela</option>
                                                        <option value="Viet Nam">Viet Nam</option>
                                                        <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                        <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                        <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                        <option value="Western Sahara">Western Sahara</option>
                                                        <option value="Yemen">Yemen</option>
                                                        <option value="Zambia">Zambia</option>
                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>State</label>
                                                <input type="text" id="tState" placeholder="state">
                                            </div>
                                        </li>


                                        <li class="thirds">
                                            <div class="formField">
                                                <label>District</label>
                                                <input type="text" id="tDistrict" placeholder="District">
                                            </div>
                                        </li>

                                        <li class="thirds">
                                            <div class="formField">
                                                <label>City</label>
                                                <input type="text" id="tCity" placeholder="City">
                                            </div>
                                        </li>

                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Pincode</label>
                                                <input type="text" id="tPincode" placeholder="Pincode">
                                            </div>                                           
                                        </li>
                                        <li class="thirds"></li>
                                        <li class="half">
                                            <div class="formField">
                                                <label>Same us above</label>
                                                
                                            </div>
                                            <input type="checkbox" id="same" onchange="addressFunction()" >
                                        </li>
                                        <li class="half"></li>
                                        <li class="half">
                                            <div class="formField">
                                                <label>Permanent Address in Home Country</label>
                                                <input type="text" id="permanentAddress" placeholder="Permanent Address in Home Country">
                                            </div>
                                        </li>                                      
                                        <li class="half"></li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Country</label>
                                                <div class="selectWrap">
                                                    <select id="pCountry" class="select2" style="width:100%;">
                                                        <option value="">-- select one --</option>
                                                        <option value="Afghanistan">Afghanistan</option>
                                                        <option value="Åland Islands">Åland Islands</option>
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
                                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                        <option value="Botswana">Botswana</option>
                                                        <option value="Bouvet Island">Bouvet Island</option>
                                                        <option value="Brazil">Brazil</option>
                                                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                        <option value="Bulgaria">Bulgaria</option>
                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                        <option value="Burundi">Burundi</option>
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
                                                        <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                                        <option value="Cook Islands">Cook Islands</option>
                                                        <option value="Costa Rica">Costa Rica</option>
                                                        <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                        <option value="Croatia">Croatia</option>
                                                        <option value="Cuba">Cuba</option>
                                                        <option value="Cyprus">Cyprus</option>
                                                        <option value="Czech Republic">Czech Republic</option>
                                                        <option value="Denmark">Denmark</option>
                                                        <option value="Djibouti">Djibouti</option>
                                                        <option value="Dominica">Dominica</option>
                                                        <option value="Dominican Republic">Dominican Republic</option>
                                                        <option value="Ecuador">Ecuador</option>
                                                        <option value="Egypt">Egypt</option>
                                                        <option value="El Salvador">El Salvador</option>
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
                                                        <option value="Guatemala">Guatemala</option>
                                                        <option value="Guernsey">Guernsey</option>
                                                        <option value="Guinea">Guinea</option>
                                                        <option value="Guinea-bissau">Guinea-bissau</option>
                                                        <option value="Guyana">Guyana</option>
                                                        <option value="Haiti">Haiti</option>
                                                        <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                                        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                        <option value="Honduras">Honduras</option>
                                                        <option value="Hong Kong">Hong Kong</option>
                                                        <option value="Hungary">Hungary</option>
                                                        <option value="Iceland">Iceland</option>
                                                        <option value="India">India</option>
                                                        <option value="Indonesia">Indonesia</option>
                                                        <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                        <option value="Iraq">Iraq</option>
                                                        <option value="Ireland">Ireland</option>
                                                        <option value="Isle of Man">Isle of Man</option>
                                                        <option value="Israel">Israel</option>
                                                        <option value="Italy">Italy</option>
                                                        <option value="Jamaica">Jamaica</option>
                                                        <option value="Japan">Japan</option>
                                                        <option value="Jersey">Jersey</option>
                                                        <option value="Jordan">Jordan</option>
                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                        <option value="Kenya">Kenya</option>
                                                        <option value="Kiribati">Kiribati</option>
                                                        <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                        <option value="Korea, Republic of">Korea, Republic of</option>
                                                        <option value="Kuwait">Kuwait</option>
                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                        <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                        <option value="Latvia">Latvia</option>
                                                        <option value="Lebanon">Lebanon</option>
                                                        <option value="Lesotho">Lesotho</option>
                                                        <option value="Liberia">Liberia</option>
                                                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                        <option value="Lithuania">Lithuania</option>
                                                        <option value="Luxembourg">Luxembourg</option>
                                                        <option value="Macao">Macao</option>
                                                        <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
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
                                                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                        <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                        <option value="Monaco">Monaco</option>
                                                        <option value="Mongolia">Mongolia</option>
                                                        <option value="Montenegro">Montenegro</option>
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
                                                        <option value="Nigeria">Nigeria</option>
                                                        <option value="Niue">Niue</option>
                                                        <option value="Norfolk Island">Norfolk Island</option>
                                                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                        <option value="Norway">Norway</option>
                                                        <option value="Oman">Oman</option>
                                                        <option value="Pakistan">Pakistan</option>
                                                        <option value="Palau">Palau</option>
                                                        <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
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
                                                        <option value="Russian Federation">Russian Federation</option>
                                                        <option value="Rwanda">Rwanda</option>
                                                        <option value="Saint Helena">Saint Helena</option>
                                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                        <option value="Saint Lucia">Saint Lucia</option>
                                                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                        <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                                        <option value="Samoa">Samoa</option>
                                                        <option value="San Marino">San Marino</option>
                                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                        <option value="Senegal">Senegal</option>
                                                        <option value="Serbia">Serbia</option>
                                                        <option value="Seychelles">Seychelles</option>
                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                        <option value="Singapore">Singapore</option>
                                                        <option value="Slovakia">Slovakia</option>
                                                        <option value="Slovenia">Slovenia</option>
                                                        <option value="Solomon Islands">Solomon Islands</option>
                                                        <option value="Somalia">Somalia</option>
                                                        <option value="South Africa">South Africa</option>
                                                        <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                                        <option value="Spain">Spain</option>
                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                        <option value="Sudan">Sudan</option>
                                                        <option value="Suriname">Suriname</option>
                                                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                        <option value="Swaziland">Swaziland</option>
                                                        <option value="Sweden">Sweden</option>
                                                        <option value="Switzerland">Switzerland</option>
                                                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                        <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                                        <option value="Tajikistan">Tajikistan</option>
                                                        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                        <option value="Thailand">Thailand</option>
                                                        <option value="Timor-leste">Timor-leste</option>
                                                        <option value="Togo">Togo</option>
                                                        <option value="Tokelau">Tokelau</option>
                                                        <option value="Tonga">Tonga</option>
                                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                        <option value="Tunisia">Tunisia</option>
                                                        <option value="Turkey">Turkey</option>
                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                        <option value="Tuvalu">Tuvalu</option>
                                                        <option value="Uganda">Uganda</option>
                                                        <option value="Ukraine">Ukraine</option>
                                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United States">United States</option>
                                                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                        <option value="Uruguay">Uruguay</option>
                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                        <option value="Vanuatu">Vanuatu</option>
                                                        <option value="Venezuela">Venezuela</option>
                                                        <option value="Viet Nam">Viet Nam</option>
                                                        <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                        <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                        <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                        <option value="Western Sahara">Western Sahara</option>
                                                        <option value="Yemen">Yemen</option>
                                                        <option value="Zambia">Zambia</option>
                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>State</label>
                                                <input type="text" id="pState" placeholder="state">
                                            </div>
                                        </li>


                                        <li class="thirds">
                                            <div class="formField">
                                                <label>District</label>
                                                <input type="text" id="pDistrict" placeholder="District">
                                            </div>
                                        </li>

                                        <li class="thirds">
                                            <div class="formField">
                                                <label>City</label>
                                                <input type="text" id="pCity" placeholder="City">
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Pincode</label>
                                                <input type="text" id="pPincode" placeholder="Pincode">
                                            </div>
                                        </li>


                                        <li class="thirds"></li>
                                        <h2 class="text_style">Do you have a passport?</h2>
                                        <div class="col-md-6">
                                                <!--<label><b>Do you have a passport?</b></label>-->
                                                <div class="radioWrap">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadiop" name="radiopassport" value="yes" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadiop">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadiop1" name="radiopassport" value="no" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadiop1">No</label>
                                                    </div>
                                                </div>
                                                
                                                
                                                 <div id="passportyes" class="showBox1 mt-5">
                                            <ul>
                                        <li class="half">
                                            <div class="formField">
                                                <label>Passport Number <span>(current)</span></label>
                                                <input type="text" id="passportNumber" placeholder="Passport Number" value=" ">
                                            </div>
                                        </li>
                                        <li class="half">
                                            <div class="formField">
<!--                                                <label>Emergency contact person in Philippines (+63)</label>
                                                <input type="hidden" id="eContactPerson" placeholder="Emergency contact" value=" ">-->
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Date of issue</label>
                                                <input type="date" id="dateOfIssue" placeholder="Date of issue">
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Place of issue</label>
                                                <input type="text" id="placeOfIssue" placeholder="Place of issue" value=" ">
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Date of expiry</label>
                                                <input type="date" id="dateOfExpiry" placeholder="Date of expiry">
                                            </div>
                                        </li>
                                        </ul>
                                        </div>
                                            </div>
                                        
                                        
                                       
<!--                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Passport 1st page photo</label>
                                                <input type="file" id="passportFirstPage" placeholder="">
                                            </div>
                                        </li>

                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Passport Last page Photo</label>
                                                <input type="file" id="passportLastPage" placeholder="">
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Visa Expiry Date</label>
                                                <input type="hidden" id="visaExpiryDate" placeholder="Visa Expiry Date" value=" ">
                                            </div>
                                        </li>-->



                                        <li>
                                            <div class="ctaWrap">
                                                <button type="button" class="btn btn-previous btn-prev">Previous</button>
                                                <button type="button" class="btn btn-next btn-act">Next</button>
                                            </div>
                                        </li>
                                    </ul>
                                </fieldset>
                                <fieldset>
                                    <ul class="formListing"> 
                                        <li>
                                            <div class="formField">
                                                <label>Need Accommodation</label>
                                                <div class="radioWrap">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio1" name="customRadioHos" value="yes" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio1">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio2" name="customRadioHos" value="no" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio2">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <br/>
                                            <div class="formField">
                                                <label>Center</label>
                                                <div class="radioWrap">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio5" name="centerRadio12" value="Chennai" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio5">Chennai</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio6" name="centerRadio12" value="Pune" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio6">Pune</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ctaWrap">
                                                <button type="button" class="btn btn-previous btn-prev">Previous</button>
                                                <button type="button" class="btn btn-next btn-act">Next</button>
                                            </div>
                                        </li>
                                    </ul>
                                </fieldset>
                                <fieldset>
                                    <ul class="formListing"> 
                                        <li class="half">
                                            <div class="formField">
                                                <label>Current batch</label>
                                                <div class="selectWrap">
                                                    <select id="currentBatch" class="select2" style="width:100%;">
                                                        <option value="">-- select one --</option>
                                                       
                                                        <option value="BS - 20">BS - 2020</option>
                                                        <option value="BS - 19">BS - 2019</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="half">
                                            <div class="formField">
                                                <label>Direct to Philippines or Studied B.S in India</label>
                                                <div class="selectWrap">
                                                    <select id="studied" class="select2" style="width:100%;">
                                                        <option value="">-- select one --</option>
                                                        <option value="BS-MD (BS only Davao)">BS-MD (BS only Davao)</option>
                                                        <option value="BS-MD (BS Pune + Davao)">BS-MD (BS Pune + Davao)</option>
                                                        <option value="Direct to Philippines without BS">Direct to Philippines without BS</option>
                                                        <option value="BS-MD(BS Chennai + Davao)">BS-MD(BS Chennai + Davao)</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="formField">
                                                <label>Year and month of start of B.S course</label>
                                                <ul class="d-flex justify-content-between">
                                                    <li class="half mb-0">
                                                        <div class="selectWrap">
                                                            <select id="yearOfStartBS" class="select2" style="width:100%;">
                                                                <option>Year</option>
                                                                <option value="2021">2021</option>
                                                                <option value="2020">2020</option>
                                                                <option value="2019">2019</option>
                                                                <option value="2018">2018</option>
                                                                <option value="2017">2017</option>
                                                                <option value="2016">2016</option>
                                                                <option value="2015">2015</option>
                                                                <option value="2014">2014</option>
                                                                <option value="2013">2013</option>
                                                                <option value="2012">2012</option>
                                                            </select>
                                                        </div>
                                                    </li>
                                                    <li class="half mb-0">
                                                        <div class="selectWrap">
                                                            <select id="monthBS" class="select2" style="width:100%;">
                                                                <option value="">Month</option>
                                                                <option value="Jan">Jan</option>
                                                                <option value="Feb">Feb</option>
                                                                <option value="March">March</option>
                                                                <option value="Apr">Apr</option>
                                                                <option value="May">May</option>
                                                                <option value="June">June</option>
                                                                <option value="July">July</option>
                                                                <option value="Aug">Aug</option>
                                                                <option value="Sep">Sep</option>
                                                                <option value="Oct">Oct</option>
                                                                <option value="Nov">Nov</option>
                                                                <option value="Dec">Dec</option>
                                                            </select>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="formField">
                                                <label><b>Responsible Person for Fee Payment </b></label>
                                                <ul class="d-flex justify-content-between">
                                                    <li class="half mb-0">
                                                        <div class="selectWrap">
                                                            <label>Name</label>
                                                            <input type="text" id="responsibleName" placeholder="Name of the person responsible for fees">
                                                        </div>
                                                    </li>
                                                    <li class="half mb-0">
                                                        <div class="selectWrap">
                                                            <div class="selectWrap">
                                                                <label>Occupation</label>
                                                                <input type="text" id="responsibleOccupation" placeholder="Occupation">
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="formField">
                                                <ul class="d-flex justify-content-between">
                                                    <li class="thirds mb-0">
                                                        <div class="selectWrap">
                                                            <label>Relationship</label>
                                                            <input type="text" id="relationship" placeholder="Relationship">
                                                        </div>
                                                    </li>
                                                    <li class="thirds mb-0">
                                                        <div class="selectWrap">
                                                            <div class="selectWrap">
                                                                <label>Contact Number</label>
                                                                <input type="text" id="responsibleContactNumber" placeholder="Contact Number" onfocusout="validateMobile(this.value,4)">
                                                                <span class="error" style="color:red" id="invalid_mobile4">Invalid Mobile Number(10 Digits)</span>
                                                                
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="thirds mb-0">
                                                        <div class="selectWrap">
                                                            <label>Email</label>
                                                            <input type="text" id="responsibleEmail" placeholder="Email">
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="formField">
                                                <label><b>Lateral Entry</b></label>
                                                <div class="radioWrap">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio3" name="lateralEntry" value="yes" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio3">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio4" name="lateralEntry" value="no" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio4">No</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="yes" class="HostelYes boxcheck showBox">
                                                <ul>
                                                    <li class="half">
                                                        <div class="formField">
                                                            <label>Name of University</label>
                                                            <input type="text" id="universityName" placeholder="University Name" value=" ">
                                                        </div>
                                                    </li>
                                                    <li class="half">
                                                        <div class="formField">
                                                            <label>Name of College</label>
                                                            <input type="text" id="collegeName" placeholder="College Name" value=" ">
                                                        </div>
                                                    </li>
                                                    <li class="half">
                                                        <div class="formField">
                                                            <label>Year of Passing</label>
                                                            <input type="text" id="yearOfPassing" placeholder="year Of Passing" value=" ">
                                                        </div>
                                                    </li>
                                                    <li class="half">
                                                        <div class="formField">
                                                            <label>Percentage</label>
                                                            <input type="text" id="percentage" placeholder="Percentage" value=" ">
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ctaWrap">
                                                <button type="button" class="btn btn-previous btn-prev">Previous</button>
                                                <button type="button" class="btn btn-next btn-act">Next</button>
                                            </div>
                                        </li>
                                    </ul> 
                                </fieldset>
                                <fieldset>
                                    <ul class="formListing">

                                        <li class="thirds">
                                            <div class="formField">
                                                <label>10<sup>th</sup> Mark sheet</label>
                                                <input type="file" id="sslcMarksheet" >
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>11<sup>th</sup> Mark sheet</label>
                                                <input type="file" id="elevenMarksheet" >
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>12<sup>th</sup> Mark sheet</label>
                                                <input type="file" id="hscMarksheet" >
                                            </div>
                                        </li>

                                        <li class="thirds">
                                            <div class="formField">
                                                <label>NEET Mark sheet(optional)</label>
                                                <input type="file" id="neetMarksheet" >
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Under Graduate Mark Sheet(Only for Lateral Entry)</label>
                                                <input type="file" id="ugMarksheet" >
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Transfer Certificate</label>
                                                <input type="file" id="tc" >
                                            </div>
                                        </li>

                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Migration Certificate</label>
                                                <input type="file" id="migration" >
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Birth Certificate</label>
                                                <input type="file" id="birth" >
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Community / Caste Certificate(Only for SC/ST/OBC Students)</label>
                                                <input type="file" id="communication" > 
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Copy of Passport(All Pages including the front and back cover)</label>
                                                <input type="file" id="passport" >
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Passport size photo scan with white background</label>
                                                <input type="file" id="photo" >
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Student Aadhar card(front side)</label>
                                                <input type="file" id="aadharCard" > 
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Student Aadhar card(back side)</label>
                                                <input type="file" id="aadharCardBack" > 
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ctaWrap">
                                                <button type="button" class="btn btn-previous btn-prev">Previous</button>
                                                <button type="button" class="btn btn-next1 btn-act">Next</button>
                                            </div>
                                        </li>
                                    </ul>
                                </fieldset>
                                <fieldset>
                                    <ul class="formListing"> 
                                        <h2 class="text_style">10<sup>th</sup> Details</h2>

                                        <li class="thirds">
                                            <div class="formField">
                                                <label>School Name</label>
                                                <input type="text" id="tenthSchoolName" placeholder="School Name">
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Board</label>
                                                <input type="text" id="tenthBoard" placeholder="Board">
                                            </div>
                                        </li>


                                        <li class="thirds">
                                            <div class="formField">
                                                <label>School Address</label>
                                                <input type="text" id="tenthSchoolAddress" placeholder="School Address">
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>District</label>
                                                <input type="text" id="tenthDistrict" placeholder="District">
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>State</label>
                                                <input type="text" id="tenthState" placeholder="State">
                                            </div>
                                        </li>

                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Country</label>
                                                <input type="text" id="tenthCountry" placeholder="Country">
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Year of Passing</label>
                                                <input type="text" id="tenthPassingYear" >
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>10<sup>th</sup> Percentage</label>
                                                <input type="text" id="tenthPercentage" placeholder="10th Standard Percentage" value=" ">
                                            </div>
                                        </li>
                                        <li class="thirds"></li>
                                        <h2 class="text_style">10<sup>th</sup> Mark Details</h2>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Subject</label>
                                                <input type="text" id="s1" placeholder="Subject">
                                            </div>
                                        </li>

                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Mark</label>
                                                <input type="text" id="m1" placeholder="Mark">
                                            </div>
                                        </li>
                                        <li class="thirds"></li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label></label>
                                                <input type="text" id="s2" placeholder="Subject">
                                            </div>
                                        </li>

                                        <li class="thirds">
                                            <div class="formField">
                                                <label></label>
                                                <input type="text" id="m2" placeholder="Mark">
                                            </div>
                                        </li>
                                        <li class="thirds"></li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label></label>
                                                <input type="text" id="s3" placeholder="Subject">
                                            </div>
                                        </li>

                                        <li class="thirds">
                                            <div class="formField">
                                                <label></label>
                                                <input type="text" id="m3" placeholder="Mark">
                                            </div>
                                        </li>
                                        <li class="thirds"></li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label></label>
                                                <input type="text" id="s4" placeholder="Subject" value=" ">
                                            </div>
                                        </li>

                                        <li class="thirds">
                                            <div class="formField">
                                                <label></label>
                                                <input type="text" id="m4" placeholder="Mark" value=" ">
                                            </div>
                                        </li>
                                        <li class="thirds"></li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label></label>
                                                <input type="text" id="s5" placeholder="Subject" value=" ">
                                            </div>
                                        </li>

                                        <li class="thirds">
                                            <div class="formField">
                                                <label></label>
                                                <input type="text" id="m5" placeholder="Mark" value=" ">
                                            </div>
                                        </li>
                                        <li class="thirds"></li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label></label>
                                                <input type="text" id="s6" placeholder="Subject" value=" ">
                                            </div>
                                        </li>

                                        <li class="thirds">
                                            <div class="formField">
                                                <label></label>
                                                <input type="text" id="m6" placeholder="Mark" value=" ">
                                            </div>
                                        </li>
                                        <li class="thirds"></li>


                                        <h2 class="text_style">12<sup>th</sup> Details</h2>

                                        <li class="thirds">
                                            <div class="formField">
                                                <label>School Name</label>
                                                <input type="text" id="twelvethSchoolName" placeholder="School Name">
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Board</label>
                                                <input type="text" id="twelvethBoard" placeholder="Board">
                                            </div>
                                        </li>


                                        <li class="thirds">
                                            <div class="formField">
                                                <label>School Address</label>
                                                <input type="text" id="twelvethSchoolAddress" placeholder="School Address">
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>District</label>
                                                <input type="text" id="twelvethDistrict" placeholder="District">
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>State</label>
                                                <input type="text" id="twelvethState" placeholder="State">
                                            </div>
                                        </li>

                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Country</label>
                                                <input type="text" id="twelvethCountry" placeholder="Country">
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>NEET Score </label> 
                                                <input type="text" id="neetScore" placeholder="NEET Score" onfocusout="validationNeet()"> 
                                                <span style="color:red;font-size:18px" id="invalid_neet"></span>
                                            </div>
                                        </li> 
                                         <li class="half">
                                            <div class="formField">
                                                <label>NEET Applicable</label> 
                                                <div class="selectWrap"> 
                                                    <select id="neet_applicable" class="select2" style="width:100%;">
                                                        <option value="">-- select one --</option> 
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Year of Passing</label>
                                                <input type="text" id="twelvethPassingYear" >
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>12<sup>th</sup> Percentage</label>
                                                <input type="text" id="twelvethPercentage" value=" ">
                                            </div>
                                        </li>
                                        <h2 class="text_style">12<sup>th</sup> Mark Details<span style="color: red;">(Physics,Chemistry,Biology Mark is compulsory.)</span></h2>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Subject</label>
                                                <input type="text" id="ss1" placeholder="Subject">
                                            </div>
                                        </li>

                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Mark</label>
                                                <input type="text" id="mm1" placeholder="Mark">
                                            </div>
                                        </li>
                                        <li class="thirds"></li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label></label>
                                                <input type="text" id="ss2" placeholder="Subject">
                                            </div>
                                        </li>

                                        <li class="thirds">
                                            <div class="formField">
                                                <label></label>
                                                <input type="text" id="mm2" placeholder="Mark">
                                            </div>
                                        </li>
                                        <li class="thirds"></li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label></label>
                                                <input type="text" id="ss3" placeholder="Subject">
                                            </div>
                                        </li>

                                        <li class="thirds">
                                            <div class="formField">
                                                <label></label>
                                                <input type="text" id="mm3" placeholder="Mark">
                                            </div>
                                        </li>
                                        <li class="thirds"></li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label></label>
                                                <input type="text" id="ss4" placeholder="Subject" value=" ">
                                            </div>
                                        </li>

                                        <li class="thirds">
                                            <div class="formField">
                                                <label></label>
                                                <input type="text" id="mm4" placeholder="Mark" value=" ">
                                            </div>
                                        </li>
                                        <li class="thirds"></li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label></label>
                                                <input type="text" id="ss5" placeholder="Subject" value=" ">
                                            </div>
                                        </li>

                                        <li class="thirds">
                                            <div class="formField">
                                                <label></label>
                                                <input type="text" id="mm5" placeholder="Mark" value=" ">
                                            </div>
                                        </li>
                                        <li class="thirds"></li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label></label>
                                                <input type="text" id="ss6" placeholder="Subject" value=" ">
                                            </div>
                                        </li>

                                        <li class="thirds">
                                            <div class="formField">
                                                <label></label>
                                                <input type="text" id="mm6" placeholder="Mark" value=" ">
                                            </div>
                                        </li>
                                        <li class="thirds"></li>
                                        <p class="text_style" style="font-size: 14px;"><input type="checkbox" id="ene" onchange="enableSubmit()" >    I hereby declare that the information furnished above is true, complete and correct to the best of my knowledge and belief.</p>
                                        <li>
                                            <div class="ctaWrap">
                                                <button type="button" class="btn btn-previous btn-prev">Previous</button>
                                                <!--<button type="button"  class="btn btn-next">Submit</button>-->
                                                <button type="button" class="btn btn-submt" id="submit-btn" disabled="true">Submit</button>
                                            </div>
                                        </li>
                                    </ul> 
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--<script src="assets/js/jquery.min.js"></script>-->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/bootstrap-select.min.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="myjs/reg.js"></script>
<!--        <script>
            $('select').selectpicker();
        </script>-->
        <script>
            $('.error').hide();
           
           $(document).ready(function () {
                $('.showBox1').hide();
                $(':radio[id=customRadiop]').change(function () {
                    $("#passportyes").removeClass("none");
                    $('.showBox1').show();
                });
                $(':radio[id=customRadiop1]').change(function () {
                    $("#passportyes").addClass("none");
                    $('.showBox1').hide();
                });
            });


            $(document).ready(function () {
                $('.showBox').hide();
                $(':radio[id=customRadio3]').change(function () {
                    $("#yes").removeClass("none");
                    $('.showBox').show();
                });
                $(':radio[id=customRadio4]').change(function () {
                    $("#ifyes").addClass("none");
                    $('.showBox').hide();
                });
            });

//            $(".btn-act").click(function () {
//                var $selected = $(".progressWrap");
//                $next = $selected.find('li.active');
//                $next.addClass("active");
//
//                //target next sibling of active
//                $next.next('li').addClass('active');
//            });

            $(".btn-prev").click(function () {
                var $selected = $(".progressWrap");
                $next = $selected.find('li.active');
                $next.removeClass("active");

                //target previous sibling of active
                $next.prev('li').addClass('active');
            });
        </script>
        <script>
            $('.select2').select2();
        </script>
    </body>
</html>
