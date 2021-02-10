<?php require 'partials/headformain.php'?>

<!-- content -->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3303.761723296047!2d-118.34587228435389!3d34.10124408059257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bf20e4c82873%3A0x14015754d926dadb!2s7060%20Hollywood%20Blvd%2C%20Los%20Angeles%2C%20CA%2090028%2C%20USA!5e0!3m2!1sen!2sua!4v1604045496204!5m2!1sen!2sua"
width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                
                <div class="card-body">
                    <form method="POST" id="first" class="first none">
                        <h2 class="title">To participate in the conference, please fill out the form</h2>

                        <div class="row row-space">

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" for="firstname">Firstname*</label>
                                    <input class="input--style-4" type="text" name="firstname" id="firstname">
                                    <p class="none err" id="nameError"></p>
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" for="lastname">Last name*</label>
                                    <input class="input--style-4" type="text" name="lastname" id="lastname">
                                    <p class="none err" id="lastnameError"></p>
                                </div>
                            </div>

                        </div>


                        <div class="row row-space">

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" for="birthdate">Birthdate*</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="birthdate" id="birthdate">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                        <p class="none err" id="birthError"></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" for="reportSubject">Report Subject*</label>
                                    <input class="input--style-4" type="text" name="reportSubject" id="reportSubject">
                                    <p class="none err" id="subError"></p>
                                </div>
                            </div>
                            
                        </div>                          

                        <div class="row row-space">

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" for="country">Country*</label>
                                    <select class="input--style-4" style="width: 100%;" name="country" id="country">
                                        <option selected  value=""></option>
                                        <option value="AX">AALAND ISLANDS</option>
                                        <option value="AF">AFGHANISTAN</option>
                                        <option value="AL">ALBANIA</option>
                                        <option value="DZ">ALGERIA</option>
                                        <option value="AS">AMERICAN SAMOA</option>
                                        <option value="AD">ANDORRA</option>
                                        <option value="AO">ANGOLA</option>
                                        <option value="AI">ANGUILLA</option>
                                        <option value="AQ">ANTARCTICA</option>
                                        <option value="AG">ANTIGUA AND BARBUDA</option>
                                        <option value="AR">ARGENTINA</option>
                                        <option value="AM">ARMENIA</option>
                                        <option value="AW">ARUBA</option>
                                        <option value="AU">AUSTRALIA</option>
                                        <option value="AT">AUSTRIA</option>
                                        <option value="AZ">AZERBAIJAN</option>
                                        <option value="BS">BAHAMAS</option>
                                        <option value="BH">BAHRAIN</option>
                                        <option value="BD">BANGLADESH</option>
                                        <option value="BB">BARBADOS</option>
                                        <option value="BY">BELARUS</option>
                                        <option value="BE">BELGIUM</option>
                                        <option value="BZ">BELIZE</option>
                                        <option value="BJ">BENIN</option>
                                        <option value="BM">BERMUDA</option>
                                        <option value="BT">BHUTAN</option>
                                        <option value="BO">BOLIVIA</option>
                                        <option value="BA">BOSNIA AND HERZEGOWINA</option>
                                        <option value="BW">BOTSWANA</option>
                                        <option value="BV">BOUVET ISLAND</option>
                                        <option value="BR">BRAZIL</option>
                                        <option value="IO">BRITISH INDIAN OCEAN TERRITORY</option>
                                        <option value="BN">BRUNEI DARUSSALAM</option>
                                        <option value="BG">BULGARIA</option>
                                        <option value="BF">BURKINA FASO</option>
                                        <option value="BI">BURUNDI</option>
                                        <option value="KH">CAMBODIA</option>
                                        <option value="CM">CAMEROON</option>
                                        <option value="CA">CANADA</option>
                                        <option value="CV">CAPE VERDE</option>
                                        <option value="KY">CAYMAN ISLANDS</option>
                                        <option value="CF">CENTRAL AFRICAN REPUBLIC</option>
                                        <option value="TD">CHAD</option>
                                        <option value="CL">CHILE</option>
                                        <option value="CN">CHINA</option>
                                        <option value="CX">CHRISTMAS ISLAND</option>
                                        <option value="CO">COLOMBIA</option>
                                        <option value="KM">COMOROS</option>
                                        <option value="CK">COOK ISLANDS</option>
                                        <option value="CR">COSTA RICA</option>
                                        <option value="CI">COTE D'IVOIRE</option>
                                        <option value="CU">CUBA</option>
                                        <option value="CY">CYPRUS</option>
                                        <option value="CZ">CZECH REPUBLIC</option>
                                        <option value="DK">DENMARK</option>
                                        <option value="DJ">DJIBOUTI</option>
                                        <option value="DM">DOMINICA</option>
                                        <option value="DO">DOMINICAN REPUBLIC</option>
                                        <option value="EC">ECUADOR</option>
                                        <option value="EG">EGYPT</option>
                                        <option value="SV">EL SALVADOR</option>
                                        <option value="GQ">EQUATORIAL GUINEA</option>
                                        <option value="ER">ERITREA</option>
                                        <option value="EE">ESTONIA</option>
                                        <option value="ET">ETHIOPIA</option>
                                        <option value="FO">FAROE ISLANDS</option>
                                        <option value="FJ">FIJI</option>
                                        <option value="FI">FINLAND</option>
                                        <option value="FR">FRANCE</option>
                                        <option value="GF">FRENCH GUIANA</option>
                                        <option value="PF">FRENCH POLYNESIA</option>
                                        <option value="TF">FRENCH SOUTHERN TERRITORIES</option>
                                        <option value="GA">GABON</option>
                                        <option value="GM">GAMBIA</option>
                                        <option value="GE">GEORGIA</option>
                                        <option value="DE">GERMANY</option>
                                        <option value="GH">GHANA</option>
                                        <option value="GI">GIBRALTAR</option>
                                        <option value="GR">GREECE</option>
                                        <option value="GL">GREENLAND</option>
                                        <option value="GD">GRENADA</option>
                                        <option value="GP">GUADELOUPE</option>
                                        <option value="GU">GUAM</option>
                                        <option value="GT">GUATEMALA</option>
                                        <option value="GN">GUINEA</option>
                                        <option value="GW">GUINEA-BISSAU</option>
                                        <option value="GY">GUYANA</option>
                                        <option value="HT">HAITI</option>
                                        <option value="HM">HEARD AND MC DONALD ISLANDS</option>
                                        <option value="HN">HONDURAS</option>
                                        <option value="HK">HONG KONG</option>
                                        <option value="HU">HUNGARY</option>
                                        <option value="IS">ICELAND</option>
                                        <option value="IN">INDIA</option>
                                        <option value="ID">INDONESIA</option>
                                        <option value="IQ">IRAQ</option>
                                        <option value="IE">IRELAND</option>
                                        <option value="IL">ISRAEL</option>
                                        <option value="IT">ITALY</option>
                                        <option value="JM">JAMAICA</option>
                                        <option value="JP">JAPAN</option>
                                        <option value="JO">JORDAN</option>
                                        <option value="KZ">KAZAKHSTAN</option>
                                        <option value="KE">KENYA</option>
                                        <option value="KI">KIRIBATI</option>
                                        <option value="KW">KUWAIT</option>
                                        <option value="KG">KYRGYZSTAN</option>
                                        <option value="LA">LAO PEOPLE'S DEMOCRATIC REPUBLIC</option>
                                        <option value="LV">LATVIA</option>
                                        <option value="LB">LEBANON</option>
                                        <option value="LS">LESOTHO</option>
                                        <option value="LR">LIBERIA</option>
                                        <option value="LY">LIBYAN ARAB JAMAHIRIYA</option>
                                        <option value="LI">LIECHTENSTEIN</option>
                                        <option value="LT">LITHUANIA</option>
                                        <option value="LU">LUXEMBOURG</option>
                                        <option value="MO">MACAU</option>
                                        <option value="MG">MADAGASCAR</option>
                                        <option value="MW">MALAWI</option>
                                        <option value="MY">MALAYSIA</option>
                                        <option value="MV">MALDIVES</option>
                                        <option value="ML">MALI</option>
                                        <option value="MT">MALTA</option>
                                        <option value="MH">MARSHALL ISLANDS</option>
                                        <option value="MQ">MARTINIQUE</option>
                                        <option value="MR">MAURITANIA</option>
                                        <option value="MU">MAURITIUS</option>
                                        <option value="YT">MAYOTTE</option>
                                        <option value="MX">MEXICO</option>
                                        <option value="MC">MONACO</option>
                                        <option value="MN">MONGOLIA</option>
                                        <option value="MS">MONTSERRAT</option>
                                        <option value="MA">MOROCCO</option>
                                        <option value="MZ">MOZAMBIQUE</option>
                                        <option value="MM">MYANMAR</option>
                                        <option value="NA">NAMIBIA</option>
                                        <option value="NR">NAURU</option>
                                        <option value="NP">NEPAL</option>
                                        <option value="NL">NETHERLANDS</option>
                                        <option value="AN">NETHERLANDS ANTILLES</option>
                                        <option value="NC">NEW CALEDONIA</option>
                                        <option value="NZ">NEW ZEALAND</option>
                                        <option value="NI">NICARAGUA</option>
                                        <option value="NE">NIGER</option>
                                        <option value="NG">NIGERIA</option>
                                        <option value="NU">NIUE</option>
                                        <option value="NF">NORFOLK ISLAND</option>
                                        <option value="MP">NORTHERN MARIANA ISLANDS</option>
                                        <option value="NO">NORWAY</option>
                                        <option value="OM">OMAN</option>
                                        <option value="PK">PAKISTAN</option>
                                        <option value="PW">PALAU</option>
                                        <option value="PA">PANAMA</option>
                                        <option value="PG">PAPUA NEW GUINEA</option>
                                        <option value="PY">PARAGUAY</option>
                                        <option value="PE">PERU</option>
                                        <option value="PH">PHILIPPINES</option>
                                        <option value="PN">PITCAIRN</option>
                                        <option value="PL">POLAND</option>
                                        <option value="PT">PORTUGAL</option>
                                        <option value="PR">PUERTO RICO</option>
                                        <option value="QA">QATAR</option>
                                        <option value="RE">REUNION</option>
                                        <option value="RO">ROMANIA</option>
                                        <option value="RU">RUSSIAN FEDERATION</option>
                                        <option value="RW">RWANDA</option>
                                        <option value="SH">SAINT HELENA</option>
                                        <option value="KN">SAINT KITTS AND NEVIS</option>
                                        <option value="LC">SAINT LUCIA</option>
                                        <option value="PM">SAINT PIERRE AND MIQUELON</option>
                                        <option value="VC">SAINT VINCENT AND THE GRENADINES</option>
                                        <option value="WS">SAMOA</option>
                                        <option value="SM">SAN MARINO</option>
                                        <option value="ST">SAO TOME AND PRINCIPE</option>
                                        <option value="SA">SAUDI ARABIA</option>
                                        <option value="SN">SENEGAL</option>
                                        <option value="CS">SERBIA AND MONTENEGRO</option>
                                        <option value="SC">SEYCHELLES</option>
                                        <option value="SL">SIERRA LEONE</option>
                                        <option value="SG">SINGAPORE</option>
                                        <option value="SK">SLOVAKIA</option>
                                        <option value="SI">SLOVENIA</option>
                                        <option value="SB">SOLOMON ISLANDS</option>
                                        <option value="SO">SOMALIA</option>
                                        <option value="ZA">SOUTH AFRICA</option>
                                        <option value="GS">SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS</option>
                                        <option value="ES">SPAIN</option>
                                        <option value="LK">SRI LANKA</option>
                                        <option value="SD">SUDAN</option>
                                        <option value="SR">SURINAME</option>
                                        <option value="SJ">SVALBARD AND JAN MAYEN ISLANDS</option>
                                        <option value="SZ">SWAZILAND</option>
                                        <option value="SE">SWEDEN</option>
                                        <option value="CH">SWITZERLAND</option>
                                        <option value="SY">SYRIAN ARAB REPUBLIC</option>
                                        <option value="TW">TAIWAN</option>
                                        <option value="TJ">TAJIKISTAN</option>
                                        <option value="TH">THAILAND</option>
                                        <option value="TL">TIMOR-LESTE</option>
                                        <option value="TG">TOGO</option>
                                        <option value="TK">TOKELAU</option>
                                        <option value="TO">TONGA</option>
                                        <option value="TT">TRINIDAD AND TOBAGO</option>
                                        <option value="TN">TUNISIA</option>
                                        <option value="TR">TURKEY</option>
                                        <option value="TM">TURKMENISTAN</option>
                                        <option value="TC">TURKS AND CAICOS ISLANDS</option>
                                        <option value="TV">TUVALU</option>
                                        <option value="UG">UGANDA</option>
                                        <option value="UA">UKRAINE</option>
                                        <option value="AE">UNITED ARAB EMIRATES</option>
                                        <option value="GB">UNITED KINGDOM</option>
                                        <option value="US">UNITED STATES</option>
                                        <option value="UM">UNITED STATES MINOR OUTLYING ISLANDS</option>
                                        <option value="UY">URUGUAY</option>
                                        <option value="UZ">UZBEKISTAN</option>
                                        <option value="VANUATU">VANUATU</option>
                                        <option value="VENEZUELA">VENEZUELA</option>
                                        <option value="VIET NAM">VIET NAM</option>
                                        <option value="WALLIS AND FUTUNA ISLANDS">WALLIS AND FUTUNA ISLANDS</option>
                                        <option value="WESTERN SAHARA">WESTERN SAHARA</option>
                                        <option value="YEMEN">YEMEN</option>
                                        <option value="ZAMBIA">ZAMBIA</option>
                                        <option value="ZZIMBABWEW">ZIMBABWE</option>
                                    </select>
                                    <p class="none err" id="countryError"></p>
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" for="phone">Phone Number*</label>
                                    <input class="input--style-4 phone" id="phone" type="tel" name="phone" placeholder="+1 (555) 555-5555">
                                    <p class="none err" id="phoneError"></p>
                                </div>
                            </div>

                        </div>

                        
                            <div class="input-group">
                                <label class="label" for="email">Email*</label>
                                <input class="input--style-4" type="text" name="email" id="email">
                                <p class="none err" id="emailError"></p>
                            </div>
                        
                
                        <!-- hidden input for $_POST-->
                        <input type="hidden" name="form" value="firstForm" id="firstform">

                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" id="next-bnt" type="submit">Next</button>
                        </div>

                        <p class="msg none" id="msg"></p> 
                    <!-- close first form -->            
                    </form>
                    <!--start second form -->
                    <form class="second none" id="second" enctype="multipart/form-data" method="POST" action="/main">
                        <h2 class="title">Second form</h2>
                        
                        <div class="row row-space">

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" for="company">Company</label>
                                    <input type="text" class="input--style-4" name="company" id="company">
                                    <p class="none err" id="companyError"></p>
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-grop">
                                    <label class="label" for="position">Position</label>
                                    <input type="text" class="input--style-4" name="position" id="position">
                                    <p class="none err" id="posError"></p>
                                </div>
                            </div>

                        </div>


                        <div class="input-group">
                            <label class="label" for="aboutMember">About me</label>
                            <div class="input-group">
                                <textarea class="input--style-4" cols="50" name="aboutMember" id="aboutMember1"></textarea>
                                <p class="none err" id="aboutError"></p>
                            </div>
                        </div>


                        <div class="input-group">
                            <label class="label" for="photo">Choose photo</label>
                            <div class="input-group">
                                <input type="hidden" name="MAX_FILE_SIZE" value="3000000000">
                                <input class="input--style-4" type="file" name="photo" id="photo">
                                <p class="none err" id="photoError"></p>
                            </div>
                        </div>
                        <p class="msg none" id="msg2"></p>

                         <!-- hidden input for $_POST-->
                         <input type="hidden" name="form" value="secondForm" id="secondform">

                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" id="btn-sub" type="submit">Submit</button>
                        </div> 
                         
                    <!--close second form -->
                    </form>
                    <!-- share button-->
                    
                <div id="share" class="none">
                    <div class="share__buttons">
                    <a class="share__item none" target="_blank" href="http://facebook.com/share.php?u=https://vlad.tst.albedo.dev/&<?php echo $config['text']?>"
                        onclick="return Share.me(this)">
                        <img src="public/assets/modal/shareImages/facebook.svg" height="50" alt="">
                    </a>
                    <a class="share__item none" href="https://twitter.com/intent/tweet?original_referer=http%3A%2F%2Ffiddle.jshell.net%2F_display%2F&text=<?=$config['text']?>" 
                        target="_blank" onclick="return Share.me(this)">
                        <img src="public/assets/modal/shareImages/twitter.svg" height="50" alt="">
                    </a>
                        <a class="share__item none" id="link" href="/users">All Members</a>
                    </div>
                </div><!-- close share button-->
                
            </div>
        </div>
    </div>
    

<?php require 'partials/footerformain.php'?>




