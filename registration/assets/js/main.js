
jQuery(document).ready(function () {

    /*
     Form
     */
    $('.registration-form fieldset:first-child').fadeIn('slow');

    $('.registration-form input[type="text"], .registration-form input[type="email"], .registration-form input[type="radio"], .registration-form input[type="file"], .registration-form select').on('focus', function () {
        $(this).removeClass('input-error');
    });
//  
    // next step
    $('.registration-form .btn-next').on('click', function () {
        var parent_fieldset = $(this).parents('fieldset');
        var next_step = true;

        parent_fieldset.find('input[type="text"], input[type="number"], input[type="email"], input[type="file"], select').each(function () {
        //  parent_fieldset.find('').each(function () {
            if ($(this).val() === "") {
                
                $(this).addClass('input-error');
                next_step = false;

            } else {
                $(this).removeClass('input-error');
            }
        });
        
        if($('.view-coment').text() != 'Successfully Varify SMS OTP'){
            alert('Please validate the email otp correct.');
            next_step = false;
            return false;
            
        }else{
            next_step = true;
        }

        if($('.view-coment-sms').text() != 'Successfully Varify OTP'){
            alert('Please validate the sms otp correct.');
            next_step = false;
            return false;
            
        }else{
            next_step = true;
        }
//  input[type="text"], input[type="number"], input[type="email"], input[type="file"], select
//  input[type="text"], input[type="number"], input[type="email"], input[type="file"], select
//        $("#email").blur(function (event) {
//            if ($(this).val() === "" || $(this).val() !== "") {
//                var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
//                var email = $("#email").val();
//                if (!regex.test(email)) {
//                    $(this).addClass('input-error');
//                    next_step = false;
//                } else {
//                    $(this).removeClass('input-error');
//                }
//            } else {
//                $(this).removeClass('input-error');
//            }
//        });

        if (next_step) {
            parent_fieldset.fadeOut(400, function () {
                $(this).next().fadeIn();
                var $selected = $(".progressWrap");
                $next = $selected.find('li.active');
                $next.addClass("active");

                //target next sibling of active
                $next.next('li').addClass('active');
            });
        }

    });

    // // next step 1 custom  
    $('.registration-form .btn-next1').on('click', function () {
        var parent_fieldset = $(this).parents('fieldset');
        var next_step = true;

        parent_fieldset.find('').each(function () {
            if ($(this).val() === "") {
                $(this).addClass('input-error');
                next_step = false;
            } else {
                $(this).removeClass('input-error');
            }
        });

        if (next_step) {
            parent_fieldset.fadeOut(400, function () {
                $(this).next().fadeIn();
                var $selected = $(".progressWrap");
                $next = $selected.find('li.active');
                $next.addClass("active");
                //target next sibling of active
                $next.next('li').addClass('active');
                               
//                $(this).next().fadeIn();
            });
        }

    });

// previous step
    $('.registration-form .btn-previous').on('click', function () {
        $(this).parents('fieldset').fadeOut(400, function () {
            $(this).prev().fadeIn();
        });
    });

// submit
//    $('.registration-form').on('submit', function (e) {
//
//        $(this).find('input[type="text"]').each(function () {
//            if ($(this).val() == "") {
//                e.preventDefault();
//                $(this).addClass('input-error');
//            } else {
//                $(this).removeClass('input-error');
//            }
//        });
//    });
    
     //Custom submit
    $('.registration-form .btn-submt').on('click', function () {
        var parent_fieldset = $(this).parents('fieldset');
        var next_step = true;

        // parent_fieldset.find('input[type="text"]').each(function () {
            parent_fieldset.find('').each(function () {
            if ($(this).val() === "") {
                $(this).addClass('input-error');
                next_step = false;
            } else {
                $(this).removeClass('input-error');
            }
        });

        if (next_step) {
            parent_fieldset.fadeOut(400, function () {
//                $(this).next().fadeIn();
                registration();
            });
        }

    });
}
);