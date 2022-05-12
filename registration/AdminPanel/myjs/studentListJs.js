function getStudentList() {
    $.ajax({
        url: './myphp/studentListPhp.php',
        data: {
            option: 'getStudentList',
            consultant : $('#consultant').val(),
            batch : $('#batch').val(),
        },
        type: 'POST',
        dataType: 'JSON',
        success: function (response) {
            var data = response['list'];
            $(document).ready(function () {
                var sno = 1;
                $('#dataTable1').DataTable({

                    "data": data,
                    "columns": [{
                            defaultContent: '',
                            render: function (data, type, row, meta) {
                                return sno;
                            }
                        },
                         {
                            data: 'foto'
                        },
                       
                        {
                            data: 'studentIdNumber'
                        },
                        {
                            data: 'name'
                        },
                        {
                            data: 'regId'
                        },
                        {
                            data: 'philippinesPhone'
                        },
                        {
                            data: 'center'
                        },
                        {
                            data: 'currentBatch'
                        },
                        {
                            defultContent: '',
                            render: function (data, type, row, meta) {
                                var options = Options(sno, row);
                                sno++;
                                return options;
                            }
                        }
                    ]
                });
            });
        }, error: function (error) {
            alert(JSON.stringify(error));
        }
    });
}

// $('#applyFilter').on('click',function(){
//   getStudentList(); 
// });

// $('#clearFilter').on('click',function(){
//     $('#consultant').val('');
//     $('#batch').val('');
//     getStudentList(); 
// });
function Options(sno, rowValue) {
    var btn1 = '';

    if (rowValue['approval'] === '1') {
        btn1 = '<a href="student-details.php?id=' + rowValue['id'] + '" class="btn btn-sm btn-primary shadow-sm float-left font_class" >View Details</a></td>';
    } else {
        btn1 = '<td class="btnAction"><a href="add-consultant.php?id=' + rowValue['id'] + '&regId=' + rowValue['regId'] + '" class="btn btn-sm btn-success shadow-sm float-left font_class">Approve</a>\n\
                <a href="student-details.php?id=' + rowValue['id'] + '" class="btn btn-sm btn-primary shadow-sm float-right font_class" >View Details</a></td>';
    }
    return btn1;
}

function login() {
    var userType = document.getElementById('userType').value;
    var userName = document.getElementById('userName').value;
    var password = document.getElementById('password').value;
    $.ajax({
        url: './myphp/studentListPhp.php',
        dataType: 'json',
        data: {
            option: 'login',
            userType: userType,
            userName: userName,
            password: password
        },
        success: function (data) {
            if (data['message'] === 'success') {
                if (data['userType'] === 'Counseling') {
                    location.replace('CounselingIndex.php');
                } else if (data['userType'] === 'Verification') {
                    location.replace('VerificationIndex.php');
                } else if (data['userType'] === 'Correction') {
                    location.replace('CorrectionIndex.php');
                } else if (data['userType'] === 'Finance') {
                    location.replace('FinanceIndex.php');
                } else if (data['userType'] === 'Submission') {
                    location.replace('SubmissionIndex.php');
                }
            } else {

                alert("Incorrect Username or Password!");
            }
        },
        error: function (data) {
            alert(JSON.stringify(data));
        }
    });
}

function addRemark() {
    var id = document.getElementById('id').value;
    var remark = document.getElementById('remark1').value;

    $.ajax({
        url: './myphp/studentListPhp.php',
        data: {
            option: 'addremark',
            id: id,
            remark: remark
        },
        type: 'POST',
        dataType: 'JSON',
        success: function (data) {
            window.location.href = "student-details.php?id=" + id;
        }, error: function (error) {
            alert(JSON.stringify(error));
        }
    });
}

function approveFunction(approveValue,num) {
	alert(num);
    var id = document.getElementById('sid').value;
    //  var regno = document.getElementById('regno').value;

//    var consultantName = document.getElementById('consultantName').value;
      var remark = document.getElementById('rmk'+num).value;
// 		alert(remark);
    $.ajax({
        url: './myphp/studentListPhp.php',
        data: {
            option: 'approved',
            id: id,
            approveValue: approveValue,
			remark:remark,
// 			regno:regno
        },
        type: 'POST',
        dataType: 'JSON',
        success: function (data) {
            if(data['message'] === 'success'){
                if(data['label'] === 'Counseling'){
                   window.location.href = "CounselingIndex.php"; 
                }else if(data['label'] === 'Verification'){
                   window.location.href = "VerificationIndex.php"; 
                }else if(data['label'] === 'Correction'){
                   window.location.href = "CorrectionIndex.php"; 
                }else if(data['label'] === 'Finance'){
                   window.location.href = "FinanceIndex.php"; 
                }else if(data['label'] === 'Submission'){
                    window.location.href = "SubmissionIndex.php";
                }
            }
            
        }, error: function (error) {
            alert(JSON.stringify(error));
        }
    });
}

function approveFunction1(approveValue,num) {
// 	alert(num);
    var id = document.getElementById('sid').value;

//    var consultantName = document.getElementById('consultantName').value;
      var remark = document.getElementById('rmk'+num).value;

    $.ajax({
        url: './myphp/studentListPhp.php',
        data: {
            option: 'approved',
            id: id,
            approveValue: approveValue,
			remark:remark
        },
        type: 'POST',
        dataType: 'JSON',
        success: function (data) {
            if(data['message'] === 'success'){
                window.location.href = "VerificationIndex.php"; 
            }
            
        }, error: function (error) {
            alert(JSON.stringify(error));
        }
    });
}

function approveregnoFunction() { 
// 	alert(num);
    var id = document.getElementById('sid').value;
     var regno = document.getElementById('regno').value;

//    var consultantName = document.getElementById('consultantName').value;
      var remark = document.getElementById('rmk'+num).value;
// 		alert(remark);
    $.ajax({
        url: './myphp/studentListPhp.php',
        data: {
            option: 'approveregnoFunction',
            id: id,
            approveValue: approveValue, 
			remark:remark,
			regno:regno
        },
        type: 'POST',
        dataType: 'JSON',
        success: function (data) {
            if(data['message'] === 'success'){
                if(data['label'] === 'Counseling'){
                   window.location.href = "CounselingIndex.php"; 
                }else if(data['label'] === 'Verification'){
                   window.location.href = "VerificationIndex.php"; 
                }else if(data['label'] === 'Correction'){
                   window.location.href = "CorrectionIndex.php"; 
                }else if(data['label'] === 'Finance'){
                   window.location.href = "FinanceIndex.php"; 
                }else if(data['label'] === 'Submission'){
                    window.location.href = "SubmissionIndex.php";
                }
            }
            
        }, error: function (error) {
            alert(JSON.stringify(error));
        }
    });
}


function approveForFinance(approveValue,num){
      var id = document.getElementById('sid').value;
      var consultantName = document.getElementById('consultantName').value;
      var remark = document.getElementById('rmk'+num).value;

    $.ajax({
        url: './myphp/studentListPhp.php',
        data: {
            option: 'approveForFinance',
            id: id,
            approveValue: approveValue,
			remark:remark,
			consultantName:consultantName
        },
        type: 'POST',
        dataType: 'JSON',
        success: function (data) {
            if(data['message'] === 'success'){
                window.location.href = "FinanceIndex.php"; 
            }
            
        }, error: function (error) {
            alert(JSON.stringify(error));
        }
    });  
}

function getStudentListCounseling() {
    $.ajax({
        url: './myphp/studentListPhp.php',
        data: {
            option: 'getStudentList'
        },
        type: 'POST',
        dataType: 'JSON',
        success: function (response) {
            var data = response['list'];
            $(document).ready(function () {
                var sno = 1;
                $('#dataTable1').DataTable({

                    "data": data,
                    "columns": [{
                            defaultContent: '',
                            render: function (data, type, row, meta) {
                                return sno;
                            }
                        },
                        {
                            data: 'foto'
                        },
                        {
                            data: 'studentIdNumber'
                        },
                        {
                            data: 'name'
                        },
                        {
                            data: 'regId'
                        },
                        {
                            data: 'philippinesPhone'
                        },
                        {
                            data: 'center'
                        },
                        {
                            data: 'currentBatch'
                        },
                        {
                            defultContent: '',
                            render: function (data, type, row, meta) {
                                var optionsCounseling = OptionsCounseling(row);
                                sno++;
                                return optionsCounseling;
                            }
                        }
                    ]
                });
            });
        }, error: function (error) {
            alert(JSON.stringify(error));
        }
    });
}

function OptionsCounseling(rowValue) {
    var btn1 = '';
    var l = rowValue['approval'];
    var label = getLabelValue(l);

    if (rowValue['approval'] === '0') {
        btn1 = '<td class="btnAction"><label class="btn btn-sm btn-warning shadow-sm float-left font_class" disabled="true">' + label + '</label>\n\
                <a href="naviCounseling.php?id=' + rowValue['id'] + '" class="btn btn-sm btn-primary shadow-sm float-right font_class" >Details</a></td>';
                // <a href="counselingPage.php?id=' + rowValue['id'] + '" class="btn btn-sm btn-primary shadow-sm float-right font_class" >Details</a></td>';
    } else {
        btn1 = '<td class="btnAction"><label class="btn btn-sm btn-success shadow-sm float-left font_class" disabled="true">' + label + '</label>\n\
                <a href="student-details.php?id=' + rowValue['id'] + '&pageid=1" class="btn btn-sm btn-primary shadow-sm float-right font_class" >Details</a></td>';
    }
    return btn1;
}

function getStudentListVerification() {
    $.ajax({
        url: './myphp/studentListPhp.php',
        data: {
            option: 'getStudentList'
        },
        type: 'POST',
        dataType: 'JSON',
        success: function (response) {
            var data = response['list'];
            $(document).ready(function () {
                var sno = 1;
                $('#dataTable1').DataTable({

                    "data": data,
                    "columns": [{
                            defaultContent: '',
                            render: function (data, type, row, meta) {
                                return sno;
                            }
                        },
                        {
                            data: 'foto'
                        },
                        {
                            data: 'studentIdNumber'
                        },
                        {
                            data: 'name'
                        },
                        {
                            data: 'regId'
                        },
                        {
                            data: 'philippinesPhone'
                        },
                        {
                            data: 'center'
                        },
                        {
                            data: 'currentBatch'
                        },
                        {
                            defultContent: '',
                            render: function (data, type, row, meta) {
                                var optionsVerification = OptionsVerification(row);
                                sno++;
                                return optionsVerification;
                            }
                        }
                    ]
                });
            });
        }, error: function (error) {
            alert(JSON.stringify(error));
        }
    });
}

function OptionsVerification(rowValue) {
    var btn1 = '';
    var l = rowValue['approval'];
    var label = getLabelValue(l);

    if (rowValue['approval'] === '1') {
        btn1 = '<td class="btnAction"><label class="btn btn-sm btn-warning shadow-sm float-left font_class" disabled="true">' + label + '</label>\n\
                <a href="naviVerification.php?id=' + rowValue['id'] + '" class="btn btn-sm btn-primary shadow-sm float-right font_class" >Details</a></td>';
                // <a href="verificationPage.php?id=' + rowValue['id'] + '" class="btn btn-sm btn-primary shadow-sm float-right font_class" >Details</a></td>';
    } else {
        btn1 = '<td class="btnAction"><label class="btn btn-sm btn-success shadow-sm float-left font_class" disabled="true">' + label + '</label>\n\
                <a href="student-details.php?id=' + rowValue['id'] + '&pageid=2" class="btn btn-sm btn-primary shadow-sm float-right font_class" >Details</a></td>';
    }
    return btn1;
}

function getStudentListCorrection(){
     $.ajax({
        url: './myphp/studentListPhp.php',
        data: {
            option: 'getStudentList'
        },
        type: 'POST',
        dataType: 'JSON',
        success: function (response) {
            var data = response['list'];
            $(document).ready(function () {
                var sno = 1;
                $('#dataTable1').DataTable({

                    "data": data,
                    "columns": [{
                            defaultContent: '',
                            render: function (data, type, row, meta) {
                                return sno;
                            }
                        },
                        {
                            data: 'foto'
                        },
                        {
                            data: 'studentIdNumber'
                        },
                        {
                            data: 'name'
                        },
                        {
                            data: 'regId'
                        },
                        {
                            data: 'philippinesPhone'
                        },
                        {
                            data: 'center'
                        },
                        {
                            data: 'currentBatch'
                        },
                        {
                            defultContent: '',
                            render: function (data, type, row, meta) {
                                var optionsCorrection = OptionsCorrection(row);
                                sno++;
                                return optionsCorrection;
                            }
                        }
                    ]
                });
            });
        }, error: function (error) {
            alert(JSON.stringify(error));
        }
    });
}

function OptionsCorrection(rowValue) {
    var btn1 = '';
    var l = rowValue['approval'];
    var label = getLabelValue(l);

    // if (rowValue['approval'] === '2') {
        btn1 = '<td class="btnAction"><label class="btn btn-sm btn-warning shadow-sm float-left font_class" disabled="true">' + label + '</label>\n\
                <a href="naviCorrection.php?id=' + rowValue['id'] + '" class="btn btn-sm btn-primary shadow-sm float-right font_class" >Details</a></td>';
                // <a href="correctionPage.php?id=' + rowValue['id'] + '" class="btn btn-sm btn-primary shadow-sm float-right font_class" >Details</a></td>';
    // } else {
        // btn1 = '<td class="btnAction"><label class="btn btn-sm btn-success shadow-sm float-left font_class" disabled="true">' + label + '</label>\n\
                // <a href="student-details.php?id=' + rowValue['id'] + '&pageid=3" class="btn btn-sm btn-primary shadow-sm float-right font_class" >Details</a></td>';
    // }
    return btn1;
}

function getStudentListFinance(){
     $.ajax({
        url: './myphp/studentListPhp.php',
        data: {
            option: 'getStudentList'
        },
        type: 'POST',
        dataType: 'JSON',
        success: function (response) {
            var data = response['list'];
            $(document).ready(function () {
                var sno = 1;
                $('#dataTable1').DataTable({

                    "data": data,
                    "columns": [{
                            defaultContent: '',
                            render: function (data, type, row, meta) {
                                return sno;
                            }
                        },
                        {
                            data: 'foto'
                        },
                        {
                            data: 'studentIdNumber'
                        },
                        {
                            data: 'name'
                        },
                        {
                            data: 'regId'
                        },
                        {
                            data: 'philippinesPhone'
                        },
                        {
                            data: 'center'
                        },
                        {
                            data: 'currentBatch'
                        },
                        {
                            defultContent: '',
                            render: function (data, type, row, meta) {
                                var optionsFinance = OptionsFinance(row);
                                sno++;
                                return optionsFinance;
                            }
                        }
                    ]
                });
            });
        }, error: function (error) {
            alert(JSON.stringify(error));
        }
    });
}

function OptionsFinance(rowValue) {
    var btn1 = '';
    var l = rowValue['approval'];
    var label = getLabelValue(l);

    if (rowValue['approval'] === '3') {
        btn1 = '<td class="btnAction"><label class="btn btn-sm btn-warning shadow-sm float-left font_class" disabled="true">' + label + '</label>\n\
                <a href="naviFinance.php?id=' + rowValue['id'] + '" class="btn btn-sm btn-primary shadow-sm float-right font_class" >Details</a></td>';
                // <a href="financePage.php?id=' + rowValue['id'] + '" class="btn btn-sm btn-primary shadow-sm float-right font_class" >Details</a></td>';
    } else {
        btn1 = '<td class="btnAction"><label class="btn btn-sm btn-success shadow-sm float-left font_class" disabled="true">' + label + '</label>\n\
                <a href="student-details.php?id=' + rowValue['id'] + '&pageid=4" class="btn btn-sm btn-primary shadow-sm float-right font_class" >Details</a></td>';
    }
    return btn1;
}

function getStudentListSubmission(){
     $.ajax({
        url: './myphp/studentListPhp.php',
        data: {
            option: 'getStudentList'
        },
        type: 'POST',
        dataType: 'JSON',
        success: function (response) {
            var data = response['list'];
            $(document).ready(function () {
                var sno = 1;
                $('#dataTable1').DataTable({

                    "data": data,
                    "columns": [{
                            defaultContent: '',
                            render: function (data, type, row, meta) {
                                return sno;
                            }
                        },
                        {
                            data: 'foto'
                        },
                        {
                            data: 'studentIdNumber'
                        },
                        {
                            data: 'name'
                        },
                        {
                            data: 'regId'
                        },
                        {
                            data: 'philippinesPhone'
                        },
                        {
                            data: 'center'
                        },
                        {
                            data: 'currentBatch'
                        },
                        {
                            defultContent: '',
                            render: function (data, type, row, meta) {
                                var optionsSubmission = OptionsSubmission(row);
                                sno++;
                                return optionsSubmission;
                            }
                        }
                    ]
                });
            });
        }, error: function (error) {
            alert(JSON.stringify(error));
        }
    });
}

function OptionsSubmission(rowValue) {
    var btn1 = '';
    var l = rowValue['approval'];
    var label = getLabelValue(l);

    if (rowValue['approval'] === '4') {
        btn1 = '<td class="btnAction"><label class="btn btn-sm btn-warning shadow-sm float-left font_class" disabled="true">' + label + '</label>\n\
                <a href="naviSubmission.php?id=' + rowValue['id'] + '" class="btn btn-sm btn-primary shadow-sm float-right font_class" >Details</a></td>';
        //  <a href="submissionPage.php?id=' + rowValue['id'] + '" class="btn btn-sm btn-primary shadow-sm float-right font_class" >Details</a></td>';
    } else {
        btn1 = '<td class="btnAction"><label class="btn btn-sm btn-success shadow-sm float-left font_class" disabled="true">' + label + '</label>\n\
                <a href="student-details1.php?id=' + rowValue['id'] + '&pageid=5" class="btn btn-sm btn-primary shadow-sm float-right font_class" >Details</a></td>';
    }
    return btn1;
}




    function getLabelValue(approval) {

        var labelValue = "";

        if (approval === '0') {
            labelValue = "Counseling Section";
        } else if (approval === '-5') {
            labelValue = "Hold in Counseling";
        } else if (approval === '1') {
            labelValue = "Approved in Counselling";
        } else if (approval === '-1') {
            labelValue = "Rejected in Counseling";
        } else if (approval === '-6') {
            labelValue = "Hold in Verification ";
        } else if (approval === '2') {
            labelValue = "Approved in Verification";
        } else if (approval === '-2') {
            labelValue = "Rejected in Verification";
        } else if (approval === '3') {
            labelValue = "Approved in Correction";
        } else if (approval === '-7') {
            labelValue = "Hold in Correction";
        } else if (approval === '-3') {
            labelValue = "Rejected in Correction";
        } else if (approval === '4') {
            labelValue = "Approved in Finance";
        } else if (approval === '-4') {
            labelValue = "Rejected in Finance";
        } else if (approval === '-8') {
            labelValue = "Hold in Finance";
        } else if (approval === '5') {
            labelValue = "Approved in Submission";
        } else if (approval === '-9') {
            labelValue = "Hold in Submission";
        } else if (approval === '-10') {
            labelValue = "Rejected in Submission";
        }
        return labelValue;

}

function addCertificate() {
    var org = $("input[name='org[]']:checked").serializeArray();
    var copy = $("input[name='copy[]']:checked").serializeArray();
    var personalId = document.getElementById('personalId').value;

    var originalsArray = [];
    for (var i = 0; i < org.length; i++) {
        var orgArray = org[i]['value'];
        var arr = {
            "originals": orgArray
        }
        originalsArray.push(arr);
    }
    var copyArray = [];
    for (var j = 0; j < copy.length; j++) {
        var cpyArray = copy[j]['value'];
        var arr1 = {
            "copies": cpyArray
        }
        copyArray.push(arr1);
    }

//    alert(JSON.stringify(originalsArray));
//    alert(JSON.stringify(copyArray));

    $.ajax({
        url: './myphp/studentListPhp.php',
        data: {
            option: 'addCertificate',
            copyArray: copyArray,
            originalsArray: originalsArray,
            personalId: personalId
        },
        type: 'POST',
        dataType: 'JSON',
        success: function (response) {
            alert("Success" + JSON.stringify(response));
            window.location.reload();
        }, error: function (e) {
            alert(JSON.stringify(e));
        }
    });
}

function checkedCertificateList(personalId) {
    // alert(personalId);
    $.ajax({
        url: './myphp/studentListPhp.php',
        type: 'POST',
        data: {
            option: 'checkedCertificate',
            personalId: personalId

        },
        dataType: 'json',
        success: function (data) {
            // alert(JSON.stringify(data));
            var reserved = data;
            var seats = document.getElementsByClassName('orgCertificate');
            for (var i = 0; i < seats.length; i++) {
                reserved.map(function (v) {
                    if (seats[i].value === v) {
                        // seats[i].setAttribute("disabled", "true");
                        seats[i].setAttribute("checked", "true");
                    }
                });
            }
        },
        error: function (error) {
            alert(JSON.stringify(error));
        }
    });
}

function checkedXeroxCertificateList(personalId) {
    $.ajax({
        url: './myphp/studentListPhp.php',
        type: 'POST',
        data: {
            option: 'checkedXeroxCertificateList',
            personalId: personalId

        },
        dataType: 'json',
        success: function (data) {
            var reserved = data;
            var seats = document.getElementsByClassName('copyCertificate');
            for (var i = 0; i < seats.length; i++) {
                reserved.map(function (v) {
                    if (seats[i].value === v) {
                        // seats[i].setAttribute("disabled", "true");
                        seats[i].setAttribute("checked", "true");
                    }
                });
            }
        },
        error: function (error) {
            alert(JSON.stringify(error));
        }
    });
}

function orgCertificateRemove() {
    var personalId = document.getElementById('personalId').value;


    var originalsArray = $('.orgCertificate').map(function () {
        if (!this.checked)
            return this.value;
    }).get();

    var copyArray = $('.copyCertificate').map(function () {
        if (!this.checked)
            return this.value;
    }).get();
    
//    alert(JSON.stringify(originalsArray));
//    alert(JSON.stringify(copyArray));

    $.ajax({
        url: './myphp/studentListPhp.php',
        data: {
            option: 'orgCertificateRemove',
            copyArray:copyArray,
            originalsArray:originalsArray,
            personalId:personalId
        },
        type: 'POST',
        dataType: 'JSON',
        success: function (response) {
            alert("Success"+JSON.stringify(response));
            window.location.reload();
        },error:function(e){
            alert(JSON.stringify(e));
        }
    }); 
}