<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../model/style/style.css">
</head>
<body>
  <div class="inputData">
    <form action="index.php" method="POST" enctype = "multipart/form-data">
      
      <div class="left">
        <label>First Name</label>
        <input type="text" name="firstName" id="firstName"/>
        <p style="color:red;" id="first"></p>
      </div> 
      <div class="right">
        <label>Last Name</label>
        <input type="text" name="lastName" id="lastName"/>
        <p style="color:red;" id="last"></p>
      </div> 

      <br style="clear:both;" />

      <div class="left">
        <label>Email</label>
        <input type="text" name="emailAddress" id="emailAddress"/>
        <p style="color:red;" id="email"></p>
      </div>
      <div class="right">
        <label>Telephone Number</label>
        <input type="text" name="telephoneNumber" id="telephoneNumber"/>
        <p style="color:red;" id="number"></p>
      </div>
      
      <br style="clear:both;" />

      <div class="left">
        <label>Address Line 1</label>
        <input type="text" name="address1" id="address1"/>
        <p style="color:red;" id="add1"></p>
      </div>
      <div class="right">
        <label>Address Line 2</label>
        <input type="text" name="address2" id="address2"/>
        <p style="color:red;" id="add2"></p>
      </div>
      
      <br style="clear:both;" />

      <div class="left">
        <label>Town</label>
        <input type="text" name="town" id="town"/>
        <p style="color:red;" id="townError"></p>
      </div>
      <div class="right">
        <label>County</label>
        <input type="text" name="county" id="county"/>
        <p style="color:red;" id="countyError"></p>
      </div>

      <br style="clear:both;" />

      <div class="left">
        <label>Postcode</label>
        <input type="text" name="postCode" id="postCode"/> 
        <p style="color:red;" id="postCodeError"></p>
      </div>
      <div class="right">
        <label>Country</label>
          <select name="country" id="country">
            <option>Afghanistan</option>
            <option>Åland Islands</option>
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
            <option>Bolivia, Plurinational State of</option>
            <option>Bonaire, Sint Eustatius and Saba</option>
            <option>Bosnia and Herzegovina</option>
            <option>Botswana</option>
            <option>Bouvet Island</option>
            <option>Brazil</option>
            <option>British Indian Ocean Territory</option>
            <option>Brunei Darussalam</option>
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
            <option>Congo, the Democratic Republic of the</option>
            <option>Cook Islands</option>
            <option>Costa Rica</option>
            <option>Côte d'Ivoire</option>
            <option>Croatia</option>
            <option>Cuba</option>
            <option>Curaçao</option>
            <option>Cyprus</option>
            <option>Czech Republic</option>
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
            <option>Guadeloupe</option>
            <option>Guam</option>
            <option>Guatemala</option>
            <option>Guernsey</option>
            <option>Guinea</option>
            <option>Guinea-Bissau</option>
            <option>Guyana</option>
            <option>Haiti</option>
            <option>Heard Island and McDonald Islands</option>
            <option>Holy See (Vatican City State)</option>
            <option>Honduras</option>
            <option>Hong Kong</option>
            <option>Hungary</option>
            <option>Iceland</option>
            <option>India</option>
            <option>Indonesia</option>
            <option>Iran, Islamic Republic of</option>
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
            <option>Korea, Democratic People's Republic of</option>
            <option>Korea, Republic of</option>
            <option>Kuwait</option>
            <option>Kyrgyzstan</option>
            <option>Lao People's Democratic Republic</option>
            <option>Latvia</option>
            <option>Lebanon</option>
            <option>Lesotho</option>
            <option>Liberia</option>
            <option>Libya</option>
            <option>Liechtenstein</option>
            <option>Lithuania</option>
            <option>Luxembourg</option>
            <option>Macao</option>
            <option>Macedonia, the former Yugoslav Republic of</option>
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
            <option>Micronesia, Federated States of</option>
            <option>Moldova, Republic of</option>
            <option>Monaco</option>
            <option>Mongolia</option>
            <option>Montenegro</option>
            <option>Montserrat</option>
            <option>Morocco</option>
            <option>Mozambique</option>
            <option>Myanmar</option>
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
            <option>Northern Mariana Islands</option>
            <option>Norway</option>
            <option>Oman</option>
            <option>Pakistan</option>
            <option>Palau</option>
            <option>Palestinian Territory, Occupied</option>
            <option>Panama</option>
            <option>Papua New Guinea</option>
            <option>Paraguay</option>
            <option>Peru</option>
            <option>Philippines</option>
            <option>Pitcairn</option>
            <option>Poland</option>
            <option>Portugal</option>
            <option>Puerto Rico</option>
            <option>Qatar</option>
            <option>Réunion</option>
            <option>Romania</option>
            <option>Russian Federation</option>
            <option>Rwanda</option>
            <option>Saint Barthélemy</option>
            <option>Saint Helena, Ascension and Tristan da Cunha</option>
            <option>Saint Kitts and Nevis</option>
            <option>Saint Lucia</option>
            <option>Saint Martin (French part)</option>
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
            <option>Sint Maarten (Dutch part)</option>
            <option>Slovakia</option>
            <option>Slovenia</option>
            <option>Solomon Islands</option>
            <option>Somalia</option>
            <option>South Africa</option>
            <option>South Georgia and the South Sandwich Islands</option>
            <option>South Sudan</option>
            <option>Spain</option>
            <option>Sri Lanka</option>
            <option>Sudan</option>
            <option>Suriname</option>
            <option>Svalbard and Jan Mayen</option>
            <option>Swaziland</option>
            <option>Sweden</option>
            <option>Switzerland</option>
            <option>Syrian Arab Republic</option>
            <option>Taiwan, Province of China</option>
            <option>Tajikistan</option>
            <option>Tanzania, United Republic of</option>
            <option>Thailand</option>
            <option>Timor-Leste</option>
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
            <option selected >United Kingdom</option>
            <option>United States</option>
            <option>United States Minor Outlying Islands</option>
            <option>Uruguay</option>
            <option>Uzbekistan</option>
            <option>Vanuatu</option>
            <option>Venezuela, Bolivarian Republic of</option>
            <option>Viet Nam</option>
            <option>Virgin Islands, British</option>
            <option>Virgin Islands, U.S.</option>
            <option>Wallis and Futuna</option>
            <option>Western Sahara</option>
            <option>Yemen</option>
            <option>Zambia</option>
            <option>Zimbabwe</option>
          </select><br>
      </div>

      <br style="clear:both;" /><br>

      <div class="description">
        <label>Description</label>
        <input type="text" name="description"/>
      </div>

      <br style="clear:both;" />

      <div style="all:unset;">
        <label>Your C.V</label>
        
        <label>Select a file</label>
        <input type="file" name="the_file" id="fileToUpload">
        
      </div>
      <br>
      <button name="emailData" type="submit" id="submit" onclick="return validateForm()">Submit</button>
    </form>
  </div>
</body>
</html>
<script>
function validateForm() {
  let notValidated = false;
  if(document.getElementById("firstName").value.length == 0)
  {
    document.getElementById("first").innerHTML = "Please insert a first name";
    notValidated = true;
  }else{
    document.getElementById("first").innerHTML = "";
  }

  if(document.getElementById("lastName").value.length == 0)
  {
    document.getElementById("last").innerHTML = "Please insert a last name";
    notValidated = true;
  }else{
    document.getElementById("last").innerHTML = "";
  }

  if(document.getElementById("emailAddress").value.length == 0)
  {
    document.getElementById("email").innerHTML = "Please insert an email address";
    notValidated = true;
  }else{
    document.getElementById("email").innerHTML = "";
  }

  if(document.getElementById("telephoneNumber").value.length == 0)
  {
    document.getElementById("number").innerHTML = "Please insert a telephone number";
    notValidated = true;
  }
  else{
    document.getElementById("number").innerHTML = "";
  }
  
  if(document.getElementById("address1").value.length == 0)
  {
    document.getElementById("add1").innerHTML = "Please insert an address 1";
    notValidated = true;
  }
  else{
    document.getElementById("add1").innerHTML = "";
  }

  if(document.getElementById("address2").value.length == 0)
  {
    document.getElementById("add2").innerHTML = "Please insert an address 2";
    notValidated = true;
  }
  else{
    document.getElementById("add2").innerHTML = "";
  }

  if(document.getElementById("town").value.length == 0)
  {
    document.getElementById("townError").innerHTML = "Please insert a town";
    notValidated = true;
  }else{
    document.getElementById("townError").innerHTML = "";
  }

  if(document.getElementById("county").value.length == 0)
  {
    document.getElementById("countyError").innerHTML = "Please insert a county";
    notValidated = true;
  }else{
    document.getElementById("countyError").innerHTML = "";
  }

  if(document.getElementById("postCode").value.length < 6)
  {
    document.getElementById("postCodeError").innerHTML = "Please insert a valid postcode";
    notValidated = true;
  }else{
    document.getElementById("postCodeError").innerHTML = "";
  }

  if(notValidated){
    return false;
  }
}
</script>
