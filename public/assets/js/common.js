$("#register").on("click", function () {
    var email = $("#email").val();
    jQuery.ajax({
        url: "/email_validation",
        type: "get",
        data: "email=" + email + "&_token={{csrf_token()}}",
        success: function (result) {
            if (result.status == 0) {
                $(".login__code").hide();
                $(".login__entry").show();
                printErrorMsgEmail(result.error);
            } else {
                $(".login__code").show();
            }
        },
    });
});

function printErrorMsgEmail(msg) {
    $(".email-print-error-msg").find("span").html("");
    $(".email-print-error-msg").css("display", "block");
    $.each(msg, function (key, value) {
        $(".email-print-error-msg").find("span").append(value);
    });
}

$("#submit").on("click", function () {
    var code1 = $("#code1").val();
    var code2 = $("#code2").val();
    var code3 = $("#code3").val();
    var code4 = $("#code4").val();

    var OTP = code1 + "" + code2 + "" + code3 + "" + code4;
    jQuery.ajax({
        url: "/OTP-code",
        type: "get",
        data: "OTP=" + OTP + "&_token={{csrf_token()}}",
        success: function (result) {
            if (result.status == 0) {
                printErrorMsgOTP(result.error);
                $(".login__code").show();
                $(".login__entry").hide();
            } else {
                $("#lastsubmitbtn").trigger( "click" ); 
            }
        },
    });
});

function printErrorMsgOTP(msg) {
    $(".otp-print-error-msg").find("span").html("");
    $(".otp-print-error-msg").css("display", "block");
    $.each(msg, function (key, value) {
        $(".otp-print-error-msg").find("span").append(value);
    });
}

