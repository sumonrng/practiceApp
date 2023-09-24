<div class="modal fade iq-register" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title text-dark">Register</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{Route('index.ragistration') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" name="refer_id" id="refer_id" value="{{old('refer_id')}}" placeholder="Refer ID">
                    </div>
                    @error('refer_id')
                    <div class="mb-4 atert alert-danger">
                        {{$message}}
                    </div>
                    @enderror
                    <div class="form-group mb-3">
                        <input type="text" class="form-control @error('user_id') is-invalid @enderror" name="user_id" id="user_id" value="{{old('user_id')}}" placeholder="User ID">
                    </div>
                    @error('user_id')
                    <div class="mb-4 atert alert-danger">
                        {{$message}}
                    </div>
                    @enderror
                    <div class="form-group mb-3">
                        <input type="text" class="form-control @error('funllname') is-invalid @enderror" name="funllname" id="funllname" value="{{old('funllname')}}" placeholder="Enter your full name">
                    </div>
                    @error('funllname')
                    <div class="mb-4 atert alert-danger">
                        {{$message}}
                    </div>
                    @enderror
                    <div class="form-group mb-3">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your valid email address">
                    </div>
                    @error('email')
                    <div class="mb-4 atert alert-danger">
                        {{$message}}
                    </div>
                    @enderror
                    <div class="form-group mb-3">
                        <select class="form-control" name="country" id="country">
                            <option class="form-control current" value="">Select Your Country</option>
                            <option>Afghanistan</option>
                            <option>Aland Islands</option>
                            <option>Albania</option>
                            <option>Algeria</option>
                            <option>American Samoa</option>
                            <option>Andorra</option>
                            <option>Angola</option>
                            <option>Anguilla</option>
                            <option>Antarctica</option>
                            <option>Antigua and Barbuda</option>
                            <option>Argentina</option>
                            <option>Armenia</option>
                            <option>Aruba</option>
                            <option>Australia</option>
                            <option>Austria</option>
                            <option>Azerbaijan</option>
                            <option>Bahamas</option>
                            <option>Bahrain</option>
                            <option>Bangladesh</option>
                            <option>Barbados</option>
                            <option>Belarus</option>
                            <option>Belgium</option>
                            <option>Belize</option>
                            <option>Benin</option>
                            <option>Bermuda</option>
                            <option>Bhutan</option>
                            <option>Bolivia</option>
                            <option>Bonaire, Sint Eustatius and Saba</option>
                            <option>Bosnia and Herzegovina</option>
                            <option>Botswana</option>
                            <option>Bouvet Island</option>
                            <option>Brazil</option>
                            <option>British Indian Ocean Territory</option>
                            <option>Brunei</option>
                            <option>Bulgaria</option>
                            <option>Burkina Faso</option>
                            <option>Burundi</option>
                            <option>Cambodia</option>
                            <option>Cameroon</option>
                            <option>Canada</option>
                            <option>Cape Verde</option>
                            <option>Cayman Islands</option>
                            <option>Central African Republic</option>
                            <option>Chad</option>
                            <option>Chile</option>
                            <option>China</option>
                            <option>Christmas Island</option>
                            <option>Cocos (Keeling) Islands</option>
                            <option>Colombia</option>
                            <option>Comoros</option>
                            <option>Congo</option>
                            <option>Cook Islands</option>
                            <option>Costa Rica</option>
                            <option>Cote d'ivoire (Ivory Coast)</option>
                            <option>Croatia</option>
                            <option>Cuba</option>
                            <option>Curacao</option>
                            <option>Cyprus</option>
                            <option>Czech Republic</option>
                            <option>Democratic Republic of the Congo</option>
                            <option>Denmark</option>
                            <option>Djibouti</option>
                            <option>Dominica</option>
                            <option>Dominican Republic</option>
                            <option>Ecuador</option>
                            <option>Egypt</option>
                            <option>El Salvador</option>
                            <option>Equatorial Guinea</option>
                            <option>Eritrea</option>
                            <option>Estonia</option>
                            <option>Ethiopia</option>
                            <option>Falkland Islands (Malvinas)</option>
                            <option>Faroe Islands</option>
                            <option>Fiji</option>
                            <option>Finland</option>
                            <option>France</option>
                            <option>French Guiana</option>
                            <option>French Polynesia</option>
                            <option>French Southern Territories</option>
                            <option>Gabon</option>
                            <option>Gambia</option>
                            <option>Georgia</option>
                            <option>Germany</option>
                            <option>Ghana</option>
                            <option>Gibraltar</option>
                            <option>Greece</option>
                            <option>Greenland</option>
                            <option>Grenada</option>
                            <option>Guadaloupe</option>
                            <option>Guam</option>
                            <option>Guatemala</option>
                            <option>Guernsey</option>
                            <option>Guinea</option>
                            <option>Guinea-Bissau</option>
                            <option>Guyana</option>
                            <option>Haiti</option>
                            <option>Heard Island and McDonald Islands</option>
                            <option>Honduras</option>
                            <option>Hong Kong</option>
                            <option>Hungary</option>
                            <option>Iceland</option>
                            <option>India</option>
                            <option>Indonesia</option>
                            <option>Iran</option>
                            <option>Iraq</option>
                            <option>Ireland</option>
                            <option>Isle of Man</option>
                            <option>Israel</option>
                            <option>Italy</option>
                            <option>Jamaica</option>
                            <option>Japan</option>
                            <option>Jersey</option>
                            <option>Jordan</option>
                            <option>Kazakhstan</option>
                            <option>Kenya</option>
                            <option>Kiribati</option>
                            <option>Kosovo</option>
                            <option>Kuwait</option>
                            <option>Kyrgyzstan</option>
                            <option>Laos</option>
                            <option>Latvia</option>
                            <option>Lebanon</option>
                            <option>Lesotho</option>
                            <option>Liberia</option>
                            <option>Libya</option>
                            <option>Liechtenstein</option>
                            <option>Lithuania</option>
                            <option>Luxembourg</option>
                            <option>Macao</option>
                            <option>Macedonia</option>
                            <option>Madagascar</option>
                            <option>Malawi</option>
                            <option>Malaysia</option>
                            <option>Maldives</option>
                            <option>Mali</option>
                            <option>Malta</option>
                            <option>Marshall Islands</option>
                            <option>Martinique</option>
                            <option>Mauritania</option>
                            <option>Mauritius</option>
                            <option>Mayotte</option>
                            <option>Mexico</option>
                            <option>Micronesia</option>
                            <option>Moldava</option>
                            <option>Monaco</option>
                            <option>Mongolia</option>
                            <option>Montenegro</option>
                            <option>Montserrat</option>
                            <option>Morocco</option>
                            <option>Mozambique</option>
                            <option>Myanmar (Burma)</option>
                            <option>Namibia</option>
                            <option>Nauru</option>
                            <option>Nepal</option>
                            <option>Netherlands</option>
                            <option>New Caledonia</option>
                            <option>New Zealand</option>
                            <option>Nicaragua</option>
                            <option>Niger</option>
                            <option>Nigeria</option>
                            <option>Niue</option>
                            <option>Norfolk Island</option>
                            <option>North Korea</option>
                            <option>Northern Mariana Islands</option>
                            <option>Norway</option>
                            <option>Oman</option>
                            <option>Pakistan</option>
                            <option>Palau</option>
                            <option>Palestine</option>
                            <option>Panama</option>
                            <option>Papua New Guinea</option>
                            <option>Paraguay</option>
                            <option>Peru</option>
                            <option>Phillipines</option>
                            <option>Pitcairn</option>
                            <option>Poland</option>
                            <option>Portugal</option>
                            <option>Puerto Rico</option>
                            <option>Qatar</option>
                            <option>Reunion</option>
                            <option>Romania</option>
                            <option>Russia</option>
                            <option>Rwanda</option>
                            <option>Saint Barthelemy</option>
                            <option>Saint Helena</option>
                            <option>Saint Kitts and Nevis</option>
                            <option>Saint Lucia</option>
                            <option>Saint Martin</option>
                            <option>Saint Pierre and Miquelon</option>
                            <option>Saint Vincent and the Grenadines</option>
                            <option>Samoa</option>
                            <option>San Marino</option>
                            <option>Sao Tome and Principe</option>
                            <option>Saudi Arabia</option>
                            <option>Senegal</option>
                            <option>Serbia</option>
                            <option>Seychelles</option>
                            <option>Sierra Leone</option>
                            <option>Singapore</option>
                            <option>Sint Maarten</option>
                            <option>Slovakia</option>
                            <option>Slovenia</option>
                            <option>Solomon Islands</option>
                            <option>Somalia</option>
                            <option>South Africa</option>
                            <option>South Georgia</option>
                            <option>South Korea</option>
                            <option>South Sudan</option>
                            <option>Spain</option>
                            <option>Sri Lanka</option>
                            <option>Sudan</option>
                            <option>Suriname</option>
                            <option>Svalbard and Jan Mayen</option>
                            <option>Swaziland</option>
                            <option>Sweden</option>
                            <option>Switzerland</option>
                            <option>Syria</option>
                            <option>Taiwan</option>
                            <option>Tajikistan</option>
                            <option>Tanzania</option>
                            <option>Thailand</option>
                            <option>Timor-Leste (East Timor)</option>
                            <option>Togo</option>
                            <option>Tokelau</option>
                            <option>Tonga</option>
                            <option>Trinidad and Tobago</option>
                            <option>Tunisia</option>
                            <option>Turkey</option>
                            <option>Turkmenistan</option>
                            <option>Turks and Caicos Islands</option>
                            <option>Tuvalu</option>
                            <option>Uganda</option>
                            <option>Ukraine</option>
                            <option>United Arab Emirates</option>
                            <option>United Kingdom</option>
                            <option>United States</option>
                            <option>United States Minor Outlying Islands</option>
                            <option>Uruguay</option>
                            <option>Uzbekistan</option>
                            <option>Vanuatu</option>
                            <option>Vatican City</option>
                            <option>Venezuela</option>
                            <option>Vietnam</option>
                            <option>Virgin Islands, British</option>
                            <option>Virgin Islands, US</option>
                            <option>Wallis and Futuna</option>
                            <option>Western Sahara</option>
                            <option>Yemen</option>
                            <option>Zambia</option>
                            <option>Zimbabwe</option>
                        </select>
                    </div>
                    @error('country')
                    <div class="mb-4 atert alert-danger">
                        {{$message}}
                    </div>
                    @enderror<div class="form-group mb-3">
                        <input type="number" class="form-control" name="mobile" id="mobile" placeholder="Enter your mobile number">
                    </div>
                    @error('mobile')
                    <div class="mb-4 atert alert-danger">
                        {{$message}}
                    </div>
                    @enderror
                    <div class="form-group mb-3">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    </div>
                    @error('password')
                    <div class="mb-4 atert alert-danger">
                        {{$message}}
                    </div>
                    @enderror
                    <div class="form-group mb-3">
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password">
                    </div>
                    @error('password_confirmation')
                    <div class="mb-4 atert alert-danger">
                        {{$message}}
                    </div>
                    @enderror<div class="form-group mb-3">
                        <input type="password" class="form-control" name="trPass" id="trPass" placeholder="Enter your transection password">
                    </div>
                    @error('trPass')
                    <div class="mb-4 atert alert-danger">
                        {{$message}}
                    </div>
                    @enderror
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="check" id="check">I Agree to the Terms and Conditions</label>
                    </div>
                    @error('check')
                    <div class="mb-4 atert alert-danger">
                        {{$message}}
                    </div>
                    @enderror
                    <button type="submit" class="btn btn-primary w-100">Register</button>
                </form>
                <div class="mb-4 atert alert-success">
                    {{session('message')}}
                </div>
            </div>
            <div class="modal-footer text-center">
                <div> Already Have an Account? <a href="javascript:void(0)" class="iq-font-yellow">Login</a></div>
                <ul class="iq-media-blog iq-mt-20">
                    <li><a href="# "><i class="fa fa-twitter "></i></a></li>
                    <li><a href="# "><i class="fa fa-facebook "></i></a></li>
                    <li><a href="# "><i class="fa fa-google "></i></a></li>
                    <li><a href="# "><i class="fa fa-github "></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
