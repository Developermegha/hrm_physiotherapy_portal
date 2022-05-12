function registration() {

    var studentIdNumber = document.getElementById('studentIdNumber').value;
    var philippinesPhone = document.getElementById('philippinesPhone').value;
    var fName = document.getElementById('fName').value;
    var mName = document.getElementById('mName').value;
    var lName = document.getElementById('lName').value;
    var telegramNumber = document.getElementById('telegramNumber').value;
    var whatsappNumber = document.getElementById('whatsappNumber').value;
    var email = document.getElementById('email').value;
    var gender = document.getElementById('gender').value;
    var dob = document.getElementById('dob').value;
    var foto = document.getElementById('foto').files[0];
    var bloodGroup = document.getElementById('bloodGroup').value;
    var nationality = document.getElementById('nationality').value;

    var fatherName = document.getElementById('fatherName').value;
    var fatherMobile = document.getElementById('fatherMobile').value;
    var fatherEmail = document.getElementById('fatherEmail').value;
    var motherName = document.getElementById('motherName').value;
    var motherMobile = document.getElementById('motherMobile').value;
    var motherEmail = document.getElementById('motherEmail').value;
    var fatherOccupation = document.getElementById('fatherOccupation').value;
    var motherOccupation = document.getElementById('motherOccupation').value;
    var temporaryAddress = document.getElementById('temporaryAddress').value;
    var tCountry = document.getElementById('tCountry').value;
    var tState = document.getElementById('tState').value;
    var tDistrict = document.getElementById('tDistrict').value;
    var tCity = document.getElementById('tCity').value;
    var tPincode = document.getElementById('tPincode').value;
    var permanentAddress = document.getElementById('permanentAddress').value;
    var pCountry = document.getElementById('pCountry').value;
    var pState = document.getElementById('pState').value;
    var pDistrict = document.getElementById('pDistrict').value;
    var pCity = document.getElementById('pCity').value;
    var pPincode = document.getElementById('pPincode').value;
    var passportNumber = document.getElementById('passportNumber').value;
//    var eContactPerson = document.getElementById('eContactPerson').value;
    var dateOfIssue = document.getElementById('dateOfIssue').value;
    var placeOfIssue = document.getElementById('placeOfIssue').value;
    var dateOfExpiry = document.getElementById('dateOfExpiry').value;
//    var passportFirstPage = document.getElementById('passportFirstPage').files[0];
//    var passportLastPage = document.getElementById('passportLastPage').files[0];
//    var visaExpiryDate = document.getElementById('visaExpiryDate').value;


    var hostelOrHomeHos = document.getElementsByName('customRadioHos');
    var hostelOrHome = 'null';
    for (var i = 0; i < hostelOrHomeHos.length; i++) {
        if (hostelOrHomeHos[i].checked)
            hostelOrHome = hostelOrHomeHos[i].value;
    }

    var centerRadio = document.getElementsByName('centerRadio12');
    var center = 'null';
    for (var j = 0; j < centerRadio.length; j++) {
        if (centerRadio[j].checked)
            center = centerRadio[j].value;
    }

    var currentBatch = document.getElementById('currentBatch').value;
    var studied = document.getElementById('studied').value;
    var yearOfStartBS = document.getElementById('yearOfStartBS').value;
    var monthBS = document.getElementById('monthBS').value;
    var responsibleName = document.getElementById('responsibleName').value;
    var responsibleOccupation = document.getElementById('responsibleOccupation').value;
    var relationship = document.getElementById('relationship').value;
    var responsibleContactNumber = document.getElementById('responsibleContactNumber').value;
    var responsibleEmail = document.getElementById('responsibleEmail').value;
       
    var lateralEntry = document.getElementsByName('lateralEntry');
    var lateral = 'null';
    for (var k = 0; k < lateralEntry.length; k++) {
        if (lateralEntry[k].checked)
            lateral = lateralEntry[k].value;
    }
    
    var universityName = document.getElementById('universityName').value;
    var collegeName = document.getElementById('collegeName').value;
    var yearOfPassing = document.getElementById('yearOfPassing').value;
    var percentage = document.getElementById('percentage').value;

    var sslcMarksheet = document.getElementById('sslcMarksheet').files[0];
    var elevenMarksheet = document.getElementById('elevenMarksheet').files[0];
    var hscMarksheet = document.getElementById('hscMarksheet').files[0];
    var neetMarksheet = document.getElementById('neetMarksheet').files[0];
    var ugMarksheet = document.getElementById('ugMarksheet').files[0];
    var tc = document.getElementById('tc').files[0];
    var migration = document.getElementById('migration').files[0];
    var birth = document.getElementById('birth').files[0];
    var communication = document.getElementById('communication').files[0];
    var passport = document.getElementById('passport').files[0];
    var photo = document.getElementById('photo').files[0];
    var aadharCard = document.getElementById('aadharCard').files[0];
    var aadharCardBack = document.getElementById('aadharCardBack').files[0];

    var tenthPercentage = document.getElementById('tenthPercentage').value;
    var tenthSchoolName = document.getElementById('tenthSchoolName').value;
    var tenthBoard = document.getElementById('tenthBoard').value;
    var tenthSchoolAddress = document.getElementById('tenthSchoolAddress').value;
    var tenthDistrict = document.getElementById('tenthDistrict').value;
    var tenthState = document.getElementById('tenthState').value;
    var tenthCountry = document.getElementById('tenthCountry').value;
    var tenthPassingYear = document.getElementById('tenthPassingYear').value;
    var twelvethPercentage = document.getElementById('twelvethPercentage').value;
    var twelvethSchoolName = document.getElementById('twelvethSchoolName').value;
    var twelvethBoard = document.getElementById('twelvethBoard').value;
    var twelvethSchoolAddress = document.getElementById('twelvethSchoolAddress').value; 
    var twelvethDistrict = document.getElementById('twelvethDistrict').value;
    var twelvethState = document.getElementById('twelvethState').value;
    var twelvethCountry = document.getElementById('twelvethCountry').value;
    var twelvethPassingYear = document.getElementById('twelvethPassingYear').value;
    var neetScore = document.getElementById('neetScore').value;
    var neet_applicable = document.getElementById('neet_applicable').value;
    
    
    var s1 = document.getElementById('s1').value;
    var m1 = document.getElementById('m1').value;
    var s2 = document.getElementById('s2').value;
    var m2 = document.getElementById('m2').value;
    var s3 = document.getElementById('s3').value;
    var m3 = document.getElementById('m3').value;
    var s4 = document.getElementById('s4').value;
    var m4 = document.getElementById('m4').value;
    var s5 = document.getElementById('s5').value;
    var m5 = document.getElementById('m5').value;
    var s6 = document.getElementById('s6').value;
    var m6 = document.getElementById('m6').value;
    
    var ss1 = document.getElementById('ss1').value;
    var mm1 = document.getElementById('mm1').value;
    var ss2 = document.getElementById('ss2').value;
    var mm2 = document.getElementById('mm2').value;
    var ss3 = document.getElementById('ss3').value;
    var mm3 = document.getElementById('mm3').value;
    var ss4 = document.getElementById('ss4').value;
    var mm4 = document.getElementById('mm4').value;
    var ss5 = document.getElementById('ss5').value;
    var mm5 = document.getElementById('mm5').value;
    var ss6 = document.getElementById('ss6').value;
    var mm6 = document.getElementById('mm6').value;

    var form_data = new FormData();
    form_data.append("option", "reg");
    form_data.append("studentIdNumber", studentIdNumber);
    form_data.append("philippinesPhone", philippinesPhone);
    form_data.append("fName", fName);
    form_data.append("mName", mName);
    form_data.append("lName", lName);
    form_data.append("telegramNumber", telegramNumber);
    form_data.append("whatsappNumber", whatsappNumber);
    form_data.append("email", email);
    form_data.append("gender", gender);
    form_data.append("dob", dob);
    form_data.append("foto", foto);
    form_data.append("bloodGroup", bloodGroup);
    form_data.append("nationality", nationality);
//    form_data.append("sPassportNumber", sPassportNumber);


    form_data.append("fatherName", fatherName);
    form_data.append("fatherMobile", fatherMobile);
    form_data.append("fatherEmail", fatherEmail);
    form_data.append("motherName", motherName);
    form_data.append("motherMobile", motherMobile);
    form_data.append("motherEmail", motherEmail);
    form_data.append("fatherOccupation", fatherOccupation);
    form_data.append("motherOccupation", motherOccupation);
    form_data.append("temporaryAddress", temporaryAddress);
    form_data.append("tCountry", tCountry);
    form_data.append("tState", tState);
    form_data.append("tDistrict", tDistrict);
    form_data.append("tCity", tCity);
    form_data.append("tPincode", tPincode);
    form_data.append("permanentAddress", permanentAddress);
    form_data.append("pCountry", pCountry);
    form_data.append("pState", pState);
    form_data.append("pDistrict", pDistrict);
    form_data.append("pCity", pCity);
    form_data.append("pPincode", pPincode);
    form_data.append("passportNumber", passportNumber);
    form_data.append("dateOfIssue", dateOfIssue);
    form_data.append("placeOfIssue", placeOfIssue);
    form_data.append("dateOfExpiry", dateOfExpiry);


    form_data.append("hostelOrHome", hostelOrHome);
    form_data.append("center", center);


    form_data.append("currentBatch", currentBatch);
    form_data.append("studied", studied);
    form_data.append("yearOfStartBS", yearOfStartBS);
    form_data.append("monthBS", monthBS);
    form_data.append("lateral", lateral);
    form_data.append("responsibleName", responsibleName);
    form_data.append("responsibleOccupation", responsibleOccupation);
    form_data.append("relationship", relationship);
    form_data.append("responsibleContactNumber", responsibleContactNumber);
    form_data.append("responsibleEmail", responsibleEmail);
    form_data.append("universityName", universityName);
    form_data.append("collegeName", collegeName);
    form_data.append("yearOfPassing", yearOfPassing);
    form_data.append("percentage", percentage);
    
    
    form_data.append("sslcMarksheet", sslcMarksheet);
    form_data.append("elevenMarksheet", elevenMarksheet);
    form_data.append("hscMarksheet", hscMarksheet);
    form_data.append("ugMarksheet", ugMarksheet);
    form_data.append("neetMarksheet", neetMarksheet);
    form_data.append("tc", tc);
    form_data.append("migration", migration);
    form_data.append("birth", birth);
    form_data.append("communication", communication);
    form_data.append("passport", passport);
    form_data.append("photo", photo);
    form_data.append("aadharCard", aadharCard);
    form_data.append("aadharCardBack", aadharCardBack);


    form_data.append("tenthPercentage", tenthPercentage);
    form_data.append("tenthSchoolName", tenthSchoolName);
    form_data.append("tenthBoard", tenthBoard);
    form_data.append("tenthSchoolAddress", tenthSchoolAddress);
    form_data.append("tenthDistrict", tenthDistrict);
    form_data.append("tenthState", tenthState);
    form_data.append("tenthCountry", tenthCountry);
    form_data.append("tenthPassingYear", tenthPassingYear);
    form_data.append("twelvethPercentage", twelvethPercentage);
    form_data.append("twelvethSchoolName", twelvethSchoolName);
    form_data.append("twelvethBoard", twelvethBoard);
    form_data.append("twelvethSchoolAddress", twelvethSchoolAddress);
    form_data.append("twelvethDistrict", twelvethDistrict);
    form_data.append("twelvethState", twelvethState);
    form_data.append("twelvethCountry", twelvethCountry);
    form_data.append("twelvethPassingYear", twelvethPassingYear);
    form_data.append("neetScore", neetScore);
     form_data.append("neet_applicable", neet_applicable);
    
    form_data.append("s1", s1);
    form_data.append("m1", m1);    
    form_data.append("s2", s2);
    form_data.append("m2", m2);   
    form_data.append("s3", s3);
    form_data.append("m3", m3);  
    form_data.append("s4", s4);
    form_data.append("m4", m4);   
    form_data.append("s5", s5);
    form_data.append("m5", m5);   
    form_data.append("s6", s6);
    form_data.append("m6", m6);
    
    form_data.append("ss1", ss1);
    form_data.append("mm1", mm1);    
    form_data.append("ss2", ss2);
    form_data.append("mm2", mm2);   
    form_data.append("ss3", ss3);
    form_data.append("mm3", mm3);  
    form_data.append("ss4", ss4);
    form_data.append("mm4", mm4);   
    form_data.append("ss5", ss5);
    form_data.append("mm5", mm5);   
    form_data.append("ss6", ss6);
    form_data.append("mm6", mm6);

    console.log(form_data);

    $.ajax({
        url: "./myphp/regPhp.php",
        type: 'POST',
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        success: function (data) {
			alert("Please wait,your application is being saved,Do not refresh or click on the back button");
            if (data['message'] === "success") {
                alert("Registration Success..");
                setTimeout(function () {
                    window.location.href = 'navi1.php?id=' + data['id'];
                }, 500);
            } else {
                alert("Registration Failed..");
            }

        }, error: function (error) {
            alert(JSON.stringify(error));
        }
    });

}

function reload() {
    window.location.href = 'index.php';
}

function validateEmail(email, num) {
//    alert('dssfgf');

//    var email = document.getElementById('email').value;

    if (email !== "") {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (!regex.test(email)) {
            $('#invalid_email' + num).show();
        } else {
            $('#invalid_email' + num).hide();
        }
    } else {

    }
}

function validateId(idNum) {
	 $.ajax({
        url: "./myphp/regPhp.php",
        type: 'POST',
        dataType: 'json',
        data: {
				"option":"id_validate",
				"idNum":idNum
				},
        success: function (data) {
            if (data['m'] === "already") {
                 $('#invalid_id').show();
            } else {
                $('#invalid_id').hide();
            }

        }, error: function (error) {
            alert(JSON.stringify(error));
        }
    });
	
}

function validateMobile(mobileNumber, num) {
//    alert(mobileNumber);
//    var philippinesPhone = document.getElementById('philippinesPhone').value;

    var pattern = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
    if (!mobileNumber.match(pattern)) {
        $('#invalid_mobile' + num).show();
    } else {
        $('#invalid_mobile' + num).hide();
    }
}



function validationDOB(){
   
    var  dob = document.getElementById("dob").value;
   var flag = true;
     if (dob ==='') {
         flag = false;
        document.getElementById("invalid_dob1").innerHTML ="Choose The Date Of Birth";
    } else {
         document.getElementById("invalid_dob1").innerHTML  ="";
    }
    
}

function validationNeet(){
   var  neetScore = document.getElementById("neetScore").value;
   var flag = true;
     if (neetScore ==='') {
         flag = false;
        document.getElementById("invalid_neet").innerHTML ="Please Fill Field !";
    } else {
         document.getElementById("invalid_neet").innerHTML  ="";
    }  
}




function addressFunction() {
//    alert('sdf')
    if (document.getElementById("same").checked) {
        document.getElementById("permanentAddress").value = document.getElementById("temporaryAddress").value;
        document.getElementById("pCountry").value = document.getElementById("tCountry").value;
        document.getElementById("pState").value = document.getElementById("tState").value;
        document.getElementById("pDistrict").value = document.getElementById("tDistrict").value;
        document.getElementById("pCity").value = document.getElementById("tCity").value;
        document.getElementById("pPincode").value = document.getElementById("tPincode").value;
    } else {
        document.getElementById("pCountry").value = "";
        document.getElementById("pState").value = "";
        document.getElementById("pDistrict").value = "";
        document.getElementById("pCity").value = "";
        document.getElementById("pPincode").value = "";
    }
} 
function enableSubmit() {
    if (document.getElementById("ene").checked) {
        document.getElementById("submit-btn").disabled = false;
    } else {
        document.getElementById("submit-btn").disabled = true;
    }

}