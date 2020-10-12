$(document).ready(function(){
    //check if window scroll is < 100
    if($(window).scrollTop() < 100){
        $('#pageUp').fadeOut().hide();
    }

    //Check to see if the window is top if not then display button
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('#pageUp').show().fadeIn();
        } else {
            $('#pageUp').fadeOut().hide();
        }
    });

    //Click event to scroll to top
    $('#pageUp a').click(function(){
        $('html, body').animate({scrollTop : 0},360);
        return false;
    });

    //Send inquiry
    $('#send-inq').click(function(){

        $description = $('#description-inq').val();
        $email = $('#email-inq').val();
        $mobile_no = $('#mobile-inq').val();

        //Validation
        if($description===''){
            $('#description-inq').addClass('border-danger');
            $('#alert-danger-description-inq').addClass('d-block');
            setTimeout(function() {
                $('#description-inq').removeClass("border-danger");
                $('#alert-danger-description-inq').removeClass("d-block");
                $('#alert-danger-description-inq').addClass("d-none");
            }, 3500);
        }

        if($email===''){
            $('#email-inq').addClass('border-danger');
            $('#alert-danger-email-inq').addClass('d-block');
            setTimeout(function() {
                $('#email-inq').removeClass("border-danger");
                $('#alert-danger-email-inq').removeClass("d-block");
                $('#alert-danger-email-inq').addClass("d-none");
            }, 3500);
        }

        if($mobile_no===''){
            $('#mobile-inq').addClass('border-danger');
            $('#alert-danger-mobile-inq').addClass('d-block');
            setTimeout(function() {
                $('#mobile-inq').removeClass("border-danger");
                $('#alert-danger-mobile-inq').removeClass("d-block");
                $('#alert-danger-mobile-inq').addClass("d-none");
            }, 3500);
        }

        //Ajax call for insertion inquiry
        if($description != '' && $email !='' && $mobile_no !=''){
            $.ajax({
                url: "insert-inquiry.php",
                type: "POST",
                data:{
                    description: $description,
                    email: $email,
                    mobile_no: $mobile_no
                },
                success: function(response){
                    if(response=='success'){
                        $.resetInquiry();
                        $('#alert-success-inq').addClass('d-block');
                        setTimeout(function() {
                            $('#alert-success-inq').removeClass("d-block");
                            $('#alert-success-inq').addClass("d-none");
                        }, 3500);
                    } else{
                        $.resetInquiry();
                        $('#alert-danger-inq').addClass('d-block');
                        setTimeout(function() {
                            $('#alert-danger-inq').removeClass("d-block");
                            $('#alert-danger-inq').addClass("d-none");
                        }, 3500);
                    }
                }
            });
        }
        
        //Reset inquiry
        $.resetInquiry  = function(){
            $('#description-inq').val("");
            $('#email-inq').val("");
            $('#mobile-inq').val("");
        }
    });

    //Send dialog inquiry
    $("#send-dlg-inq").click(function(){

        $description = $('#description-dlg-inq').val();
        $email = $('#email-dlg-inq').val();
        $mobile_no = $('#mobile-dlg-inq').val();

        //Validation
        if($description===''){
            $('#description-dlg-inq').addClass('border-danger');
            $('#alert-danger-description-dlg-inq').addClass('d-block');
            setTimeout(function() {
                $('#description-dlg-inq').removeClass("border-danger");
                $('#alert-danger-description-dlg-inq').removeClass("d-block");
                $('#alert-danger-description-dlg-inq').addClass("d-none");
            }, 3500);
        }

        if($email===''){
            $('#email-dlg-inq').addClass('border-danger');
            $('#alert-danger-email-dlg-inq').addClass('d-block');
            setTimeout(function() {
                $('#email-dlg-inq').removeClass("border-danger");
                $('#alert-danger-email-dlg-inq').removeClass("d-block");
                $('#alert-danger-email-dlg-inq').addClass("d-none");
            }, 3500);
        }

        if($mobile_no===''){
            $('#mobile-dlg-inq').addClass('border-danger');
            $('#alert-danger-mobile-dlg-inq').addClass('d-block');
            setTimeout(function() {
                $('#mobile-dlg-inq').removeClass("border-danger");
                $('#alert-danger-mobile-dlg-inq').removeClass("d-block");
                $('#alert-danger-mobile-dlg-inq').addClass("d-none");
            }, 3500);
        }

        //Alax call for insertion dialog inquiry
        if($description != '' && $email !='' && $mobile_no !=''){
            $.ajax({
                url: "insert-inquiry.php",
                type: "POST",
                data:{
                    description: $description,
                    email: $email,
                    mobile_no: $mobile_no
                },
                success: function(response){
                    if(response=='success'){
                        $.resetDialogInquiry();
                        $('#alert-success-dlg-inq').addClass('d-block');
                        setTimeout(function() {
                            $('#alert-success-dlg-inq').removeClass("d-block");
                            $('#alert-success-dlg-inq').addClass("d-none");
                        }, 3500);
                    } else{
                        $.resetDialogInquiry();
                        $('#alert-danger-dlg-inq').addClass('d-block');
                        setTimeout(function() {
                            $('#alert-danger-dlg-inq').removeClass("d-block");
                            $('#alert-danger-dlg-inq').addClass("d-none");
                        }, 3500);
                    }
                }
            });
        }
        
        //Reset dailog inquiry
        $.resetDialogInquiry  = function(){
            $('#description-dlg-inq').val("");
            $('#email-dlg-inq').val("");
            $('#mobile-dlg-inq').val("");
        }
    });
    
    $("#card-carousel").on("slide.bs.carousel", function(e) {
        var $e = $(e.relatedTarget);
        var idx = $e.index();
        var itemsPerSlide = 4;
        var totalItems = $(".carousel-item").length;

        if (idx >= totalItems - (itemsPerSlide - 1)) {
            var it = itemsPerSlide - (totalItems - idx);
            for (var i = 0; i < it; i++) {
                // append slides to end
                if (e.direction == "left") {
                    $(".carousel-item")
                    .eq(i)
                    .appendTo(".carousel-inner");
                } else {
                    $(".carousel-item")
                    .eq(0)
                    .appendTo($(this).find(".carousel-inner"));
                }
            }
        }
    });

    $("#best-product-card-carousel").on("slide.bs.carousel", function(e) {
        var $e = $(e.relatedTarget);
        var idx = $e.index();
        var itemsPerSlide = 4;
        var totalItems = $(".carousel-item").length;

        if (idx >= totalItems - (itemsPerSlide - 1)) {
            var it = itemsPerSlide - (totalItems - idx);
            for (var i = 0; i < it; i++) {
                // append slides to end
                if (e.direction == "left") {
                    $(".carousel-item")
                    .eq(i)
                    .appendTo(".carousel-inner");
                } else {
                    $(".carousel-item")
                    .eq(0)
                    .appendTo($(this).find(".carousel-inner"));
                }
            }
        }
    });
});
