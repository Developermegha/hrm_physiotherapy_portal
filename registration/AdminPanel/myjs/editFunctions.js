function personalEdit(){
		
	var id = document.getElementById('mainId').value;
	var studentIdNumber = document.getElementById('studentIdNumber').value;
	var fName = document.getElementById('fName').value;
	var mName = document.getElementById('mName').value;
	var lName = document.getElementById('lName').value;
	var gender = document.getElementById('gender1').value;
	var dob = document.getElementById('dob').value;
	var philippinesPhone = document.getElementById('philippinesPhone').value;
	var telegramNumber = document.getElementById('telegramNumber').value;
	var whatsappNumber = document.getElementById('whatsappNumber').value;
	var email = document.getElementById('email').value;
	var nationality = document.getElementById('nationality1').value;
	var bloodGroup = document.getElementById('bloodGroup1').value;
		var consultant = document.getElementById('consultant').value;
	 $.ajax({
        url: './myphp/editFunctionsPhp.php',
        data: {
             option: 'editPersonal',
			id:id,
			studentIdNumber:studentIdNumber,
			fName:fName,
			mName:mName,
			lName:lName,
			gender:gender,
			dob:dob,
			philippinesPhone:philippinesPhone,
			telegramNumber:telegramNumber,
			whatsappNumber:whatsappNumber,
			email:email,
			nationality:nationality,
			bloodGroup:bloodGroup,
			consultant:consultant
        },
        type: 'POST',
        dataType: 'JSON',
        success: function (data) {
            if(data['message'] === 'success'){
					window.location.href = "correctionPage.php?id=" + id;
				}else{
					alert(data['message']);
				}
        }, 
		error: function (error) {
            alert(JSON.stringify(error));
        }
    });
 
}

function informationEdit(){
	
	var id = document.getElementById('mainId').value;
	var temporaryAddress = document.getElementById('temporaryAddress').value;
	var tCountry1 = document.getElementById('tCountry1').value;
	var tState = document.getElementById('tState').value;
	var tDistrict = document.getElementById('tDistrict').value;
	var tCity = document.getElementById('tCity').value;
	var tPincode = document.getElementById('tPincode').value;
	var permanentAddress = document.getElementById('permanentAddress').value;
	var pCountry1 = document.getElementById('pCountry1').value;
	var pState = document.getElementById('pState').value;
	var pDistrict = document.getElementById('pDistrict').value;
	var pCity = document.getElementById('pCity').value;
	var pPincode = document.getElementById('pPincode').value;
	
	var passportNumber = document.getElementById('passportNumber').value;
	var dateOfIssue = document.getElementById('dateOfIssue').value;
	var placeOfIssue = document.getElementById('placeOfIssue').value;
	var dateOfExpiry = document.getElementById('dateOfExpiry').value;
	
	var fatherName = document.getElementById('fatherName').value;
	var motherName = document.getElementById('motherName').value;
	var fatherEmail = document.getElementById('fatherEmail').value;
	var motherEmail = document.getElementById('motherEmail').value;
	var fatherMobile = document.getElementById('fatherMobile').value;
	var motherMobile = document.getElementById('motherMobile').value;
	var fatherOccupation = document.getElementById('fatherOccupation').value;
	var motherOccupation = document.getElementById('motherOccupation').value;
	 $.ajax({
        url: './myphp/editFunctionsPhp.php',
        data: {
             option: 'editInformation',
			id:id,
			temporaryAddress:temporaryAddress,
			tCountry1:tCountry1,
			tState:tState,
			tDistrict:tDistrict,
			tCity:tCity,
			tPincode:tPincode,
			permanentAddress:permanentAddress,
			pCountry1:pCountry1,
			pState:pState,
			pDistrict:pDistrict,
			pCity:pCity,
			pPincode:pPincode,
			
			passportNumber:passportNumber,
			dateOfIssue:dateOfIssue,
			placeOfIssue:placeOfIssue,
			dateOfExpiry:dateOfExpiry,
			
			fatherName:fatherName,
			motherName:motherName,
			fatherEmail:fatherEmail,
			motherEmail:motherEmail,
			fatherMobile:fatherMobile,
			motherMobile:motherMobile,
			fatherOccupation:fatherOccupation,
			motherOccupation:motherOccupation
        },
        type: 'POST',
        dataType: 'JSON',
        success: function (data) {
            if(data['message'] === 'success'){
					window.location.href = "correctionPage.php?id=" + id;
				}else{
					alert(data['message']);
				}
        }, 
		error: function (error) {
            alert(JSON.stringify(error));
        }
    });


}

function hostelEdit(){
	var studentIdNumber = document.getElementById('studentIdNumber').value;
	var id = document.getElementById('mainId').value;
	var accommodation = document.getElementById('accommodation1').value;
	var center = document.getElementById('center1').value;
	    
	 $.ajax({
        url: './myphp/editFunctionsPhp.php',
        data: {
             option: 'editHostel',
			id:id, 
			studentIdNumber:studentIdNumber,
			accommodation:accommodation,
			center:center
        },
        type: 'POST',
        dataType: 'JSON',
        success: function (data) {
            if(data['message'] === 'success'){
					window.location.href = "correctionPage.php?id=" + id;
				}else{
					alert(data['message']);
				}
        }, 
		error: function (error) {
            alert(JSON.stringify(error));
        }
    });
}

function studiedEdit(){
	var id = document.getElementById('mainId').value;
	
	var currentBatch = document.getElementById('currentBatch1').value;
	var studied = document.getElementById('studied1').value;
	var yearOfStartBS = document.getElementById('yearOfStartBS1').value;
	var monthBS = document.getElementById('monthBS1').value;
	var responsibleName = document.getElementById('responsibleName').value;
	var responsibleOccupation = document.getElementById('responsibleOccupation').value;
	var relationship = document.getElementById('relationship').value;
	var responsibleContactNumber = document.getElementById('responsibleContactNumber').value;
	var responsibleEmail = document.getElementById('responsibleEmail').value;
	var lateralEntry = document.getElementById('lateralEntry1').value;
	var universityName = document.getElementById('universityName').value;
	var collegeName = document.getElementById('collegeName').value;
	var yearOfPassing = document.getElementById('yearOfPassing').value;
	var percentage = document.getElementById('percentage').value;
	$.ajax({
        url: './myphp/editFunctionsPhp.php',
        data: {
             option: 'editStudied',
			id:id,
			currentBatch:currentBatch,
			studied:studied,
			yearOfStartBS:yearOfStartBS,
			monthBS:monthBS,
			responsibleName:responsibleName,
			responsibleOccupation:responsibleOccupation,
			relationship:relationship,
			responsibleContactNumber:responsibleContactNumber,
			responsibleEmail:responsibleEmail,
			lateralEntry:lateralEntry,
			universityName:universityName,
			collegeName:collegeName,
			yearOfPassing:yearOfPassing,
			percentage:percentage
			
        },
        type: 'POST',
        dataType: 'JSON',
        success: function (data) {
            if(data['message'] === 'success'){
					window.location.href = "correctionPage.php?id=" + id;
				}else{
					alert(data['message']);
				}
        }, 
		error: function (error) {
            alert(JSON.stringify(error));
        }
    });
}

function educationEdit(){
	
	var id = document.getElementById('mainId').value;
	var tenthPercentage = document.getElementById('tenthPercentage').value;
	var twelvethPercentage = document.getElementById('twelvethPercentage').value;
	var tenthSchoolName = document.getElementById('tenthSchoolName').value;
	var twelvethSchoolName = document.getElementById('twelvethSchoolName').value;
	var tenthBoard = document.getElementById('tenthBoard').value;
	var twelvethBoard = document.getElementById('twelvethBoard').value;
	var tenthSchoolAddress = document.getElementById('tenthSchoolAddress').value;
	var twelvethSchoolAddress = document.getElementById('twelvethSchoolAddress').value;
	var tenthDistrict = document.getElementById('tenthDistrict').value;
	var twelvethDistrict = document.getElementById('twelvethDistrict').value;
	var tenthState = document.getElementById('tenthState').value;
	var twelvethState = document.getElementById('twelvethState').value;
	var tenthCountry = document.getElementById('tenthCountry').value;
	var twelvethCountry = document.getElementById('twelvethCountry').value;
	var tenthPassingYear = document.getElementById('tenthPassingYear').value;
	var twelvethPassingYear = document.getElementById('twelvethPassingYear').value;
	var neetScore = document.getElementById('neetScore').value;
	var neet_applicable = document.getElementById('neet_applicable').value;
	 $.ajax({
        url: './myphp/editFunctionsPhp.php',
        data: {
             option: 'editEducation',
			id:id,
			tenthPercentage:tenthPercentage,
			twelvethPercentage:twelvethPercentage,
			tenthSchoolName:tenthSchoolName,
			twelvethSchoolName:twelvethSchoolName,
			tenthBoard:tenthBoard,
			twelvethBoard:twelvethBoard,
			tenthSchoolAddress:tenthSchoolAddress,
			twelvethSchoolAddress:twelvethSchoolAddress,
			tenthDistrict:tenthDistrict,
			twelvethDistrict:twelvethDistrict,
			tenthState:tenthState,
			twelvethState:twelvethState,
			tenthCountry:tenthCountry,
			twelvethCountry:twelvethCountry,
			tenthPassingYear:tenthPassingYear,
			twelvethPassingYear:twelvethPassingYear,
			neetScore:neetScore,
			neet_applicable:neet_applicable 
		
        },
        type: 'POST',
        dataType: 'JSON',
        success: function (data) {
            if(data['message'] === 'success'){
					window.location.href = "correctionPage.php?id=" + id;
				}else{
					alert(data['message']);
				}
        }, 
		error: function (error) {
            alert(JSON.stringify(error));
        }
    });
	
}
function test(){
	alert('dd');
}
function markEdit(){
	var id = document.getElementById('mainId').value;
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
	 $.ajax({
        url: './myphp/editFunctionsPhp.php',
        data: {
             option: 'editMark',
			id:id,
			s1:s1,
			s2:s2,
			s3:s3,
			s4:s4,
			s5:s5,
			s6:s6,
			m1:m1,
			m2:m2,
			m3:m3,
			m4:m4,
			m5:m5,
			m6:m6,			
			ss1:ss1,
			ss2:ss2,
			ss3:ss3,
			ss4:ss4,
			ss5:ss5,
			ss6:ss6,
			mm1:mm1,
			mm2:mm2,
			mm3:mm3,
			mm4:mm4,
			mm5:mm5,
			mm6:mm6		
        },
        type: 'POST',
        dataType: 'JSON',
        success: function (data) {
            if(data['message'] === 'success'){
					window.location.href = "correctionPage.php?id=" + id;
				}else{
					alert(data['message']);
				}
        }, 
		error: function (error) {
            alert(JSON.stringify(error));
        }
    });
	
}

function img1(){
var id = document.getElementById('mainId').value;
var sslcMarksheet = document.getElementById('sslcMarksheet').files[0];

var form_data = new FormData();
    form_data.append("option", "img1");
    form_data.append("id", id);
    form_data.append("sslcMarksheet", sslcMarksheet);
	
	  $.ajax({
        url: './myphp/editFunctionsPhp.php',
        type: 'POST',
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        success: function (data) {
            if(data['message'] === 'success'){
					window.location.href = "correctionPage.php?id=" + id;
				}else{
					alert(data['message']);
				}
        }, error: function (error) {
            alert(JSON.stringify(error));
        }
    });
}

function img2(){
var id = document.getElementById('mainId').value;
var elevenMarksheet = document.getElementById('elevenMarksheet').files[0];

var form_data = new FormData();
    form_data.append("option", "img2");
    form_data.append("id", id);
    form_data.append("elevenMarksheet", elevenMarksheet);
	
	  $.ajax({
        url: './myphp/editFunctionsPhp.php',
        type: 'POST',
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        success: function (data) {
            if(data['message'] === 'success'){
					window.location.href = "correctionPage.php?id=" + id;
				}else{
					alert(data['message']);
				}
        }, error: function (error) {
            alert(JSON.stringify(error));
        }
    });
}

function img3(){
var id = document.getElementById('mainId').value;
var hscMarksheet = document.getElementById('hscMarksheet').files[0];

var form_data = new FormData();
    form_data.append("option", "img3");
    form_data.append("id", id);
    form_data.append("hscMarksheet", hscMarksheet);
	
	  $.ajax({
        url: './myphp/editFunctionsPhp.php',
        type: 'POST',
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        success: function (data) {
            if(data['message'] === 'success'){
					window.location.href = "correctionPage.php?id=" + id;
				}else{
					alert(data['message']);
				}
        }, error: function (error) {
            alert(JSON.stringify(error));
        }
    });
}

function img4(){
var id = document.getElementById('mainId').value;
var neetMarksheet = document.getElementById('neetMarksheet').files[0];

var form_data = new FormData();
    form_data.append("option", "img4");
    form_data.append("id", id);
    form_data.append("neetMarksheet", neetMarksheet);
	
	  $.ajax({
        url: './myphp/editFunctionsPhp.php',
        type: 'POST',
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        success: function (data) {
            if(data['message'] === 'success'){
					window.location.href = "correctionPage.php?id=" + id;
				}else{
					alert(data['message']);
				}
        }, error: function (error) {
            alert(JSON.stringify(error));
        }
    });
}

function img5(){
var id = document.getElementById('mainId').value;
var ugMarksheet = document.getElementById('ugMarksheet').files[0];

var form_data = new FormData();
    form_data.append("option", "img5");
    form_data.append("id", id);
    form_data.append("ugMarksheet", ugMarksheet);
	
	  $.ajax({
        url: './myphp/editFunctionsPhp.php',
        type: 'POST',
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        success: function (data) {
            if(data['message'] === 'success'){
					window.location.href = "correctionPage.php?id=" + id;
				}else{
					alert(data['message']);
				}
        }, error: function (error) {
            alert(JSON.stringify(error));
        }
    });
}

function img6(){
var id = document.getElementById('mainId').value;
var tc = document.getElementById('tc').files[0];

var form_data = new FormData();
    form_data.append("option", "img6");
    form_data.append("id", id);
    form_data.append("tc", tc);
	
	  $.ajax({
        url: './myphp/editFunctionsPhp.php',
        type: 'POST',
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        success: function (data) {
            if(data['message'] === 'success'){
					window.location.href = "correctionPage.php?id=" + id;
				}else{
					alert(data['message']);
				}
        }, error: function (error) {
            alert(JSON.stringify(error));
        }
    });
}

function img7(){
var id = document.getElementById('mainId').value;
var migration = document.getElementById('migration').files[0];

var form_data = new FormData();
    form_data.append("option", "img7");
    form_data.append("id", id);
    form_data.append("migration", migration);
	
	  $.ajax({
        url: './myphp/editFunctionsPhp.php',
        type: 'POST',
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        success: function (data) {
            if(data['message'] === 'success'){
					window.location.href = "correctionPage.php?id=" + id;
				}else{
					alert(data['message']);
				}
        }, error: function (error) {
            alert(JSON.stringify(error));
        }
    });
}

function img8(){
var id = document.getElementById('mainId').value;
var birth = document.getElementById('birth').files[0];

var form_data = new FormData();
    form_data.append("option", "img8");
    form_data.append("id", id);
    form_data.append("birth", birth);
	
	  $.ajax({
        url: './myphp/editFunctionsPhp.php',
        type: 'POST',
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        success: function (data) {
            if(data['message'] === 'success'){
					window.location.href = "correctionPage.php?id=" + id;
				}else{
					alert(data['message']);
				}
        }, error: function (error) {
            alert(JSON.stringify(error));
        }
    });
}

function img9(){
var id = document.getElementById('mainId').value;
var communication = document.getElementById('communication').files[0];

var form_data = new FormData();
    form_data.append("option", "img9");
    form_data.append("id", id);
    form_data.append("communication", communication);
	
	  $.ajax({
        url: './myphp/editFunctionsPhp.php',
        type: 'POST',
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        success: function (data) {
            if(data['message'] === 'success'){
					window.location.href = "correctionPage.php?id=" + id;
				}else{
					alert(data['message']);
				}
        }, error: function (error) {
            alert(JSON.stringify(error));
        }
    });
}

function img10(){
var id = document.getElementById('mainId').value;
var passport = document.getElementById('passport').files[0];

var form_data = new FormData();
    form_data.append("option", "img10");
    form_data.append("id", id);
    form_data.append("passport", passport);
	
	  $.ajax({
        url: './myphp/editFunctionsPhp.php',
        type: 'POST',
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        success: function (data) {
            if(data['message'] === 'success'){
					window.location.href = "correctionPage.php?id=" + id;
				}else{
					alert(data['message']);
				}
        }, error: function (error) {
            alert(JSON.stringify(error));
        }
    });
}

function img11(){
var id = document.getElementById('mainId').value;
var photo = document.getElementById('photo').files[0];

var form_data = new FormData();
    form_data.append("option", "img11");
    form_data.append("id", id);
    form_data.append("photo", photo);
	
	  $.ajax({
        url: './myphp/editFunctionsPhp.php',
        type: 'POST',
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        success: function (data) {
            if(data['message'] === 'success'){
					window.location.href = "correctionPage.php?id=" + id;
				}else{
					alert(data['message']);
				}
        }, error: function (error) {
            alert(JSON.stringify(error));
        }
    });
}

function img12(){
var id = document.getElementById('mainId').value;
var aadharCard = document.getElementById('aadharCard').files[0];

var form_data = new FormData();
    form_data.append("option", "img12");
    form_data.append("id", id);
    form_data.append("aadharCard", aadharCard);
	
	  $.ajax({
        url: './myphp/editFunctionsPhp.php',
        type: 'POST',
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        success: function (data) {
            if(data['message'] === 'success'){
					window.location.href = "correctionPage.php?id=" + id;
				}else{
					alert(data['message']);
				}
        }, error: function (error) {
            alert(JSON.stringify(error));
        }
    });
}

function img13(){
    alert('dc');
var id = document.getElementById('mainId').value;
var aadharCardBack = document.getElementById('aadharCardBack').files[0];

var form_data = new FormData();
    form_data.append("option", "img13");
    form_data.append("id", id);
    form_data.append("aadharCardBack", aadharCardBack);
	
	  $.ajax({
        url: './myphp/editFunctionsPhp.php',
        type: 'POST',
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        success: function (data) {
            if(data['message'] === 'success'){
					window.location.href = "correctionPage.php?id=" + id;
				}else{
					alert(data['message']);
				}
        }, error: function (error) {
            alert(JSON.stringify(error));
        }
    });
}


function deleteStudent(){
    var pid = document.getElementById('pid').value;
     $.ajax({
        url: './myphp/editFunctionsPhp.php',
        data: {
             option: 'deleteStudent',
			id:pid
        },
        type: 'POST',
        dataType: 'JSON',
        success: function (data) {
            if(data['message'] === 'success'){
					window.location.href = "VerificationIndex.php";
				}else{
					alert(data['message']);
				}
        }, 
		error: function (error) {
            alert(JSON.stringify(error));
        }
    });
}


// new code include added arun start 08-02-2021
function DeleteApplication(){
    var id =  document.getElementById('Did').value;
    $.ajax({
        url: './myphp/editFunctionsPhp.php',
        data: {
             option: 'DeleteApplication',
			id:id
        },
        type: 'POST',
        dataType: 'JSON',
        success: function (data) {
            if(data['message'] === 'success'){
					window.location.href = "CorrectionIndex.php";
				}else{
					alert(data['message']);
				}
        }, 
		error: function (error) {
            alert(JSON.stringify(error));
        }
    });
}


// new code include added arun end  08-02-2021