<section class="section-padding" id="sendotp">
    <div class="">
        <div class="col-lg-5 col-md-8 col-sm-12 m-auto">
            <h2 style="font-weight: 900;" class="text-center">Get Started</h2>     
            <form id="login_otp_frm" action="javascript:return;" data-bv-submitbuttons="button[type='submit']" data-remote="true" data-toggle="validator" method="post" role="form">         
            <div class="pt-4 user-phone-number">
                <label style="font-size: 0.9em;"><strong>Enter phone no.</strong></label>
                <input type="text" class="login-input form-control" placeholder="enter your phone no." maxlength="10" name="username" id="username">
                <div class="messageContainer"></div>
                <span id="ser-error"></span>
            </div>
            </form>
            <div class="pt-4">
                <label style="font-size: 0.9em;"><strong>or continue with</strong> </label>
                <div class="d-flex pt-3">
                    <div class="loginlogo mr-4">
                        <a href="<?= base_url()?>facebook"><img src="<?php echo asset_url();?>frontend/images/facebooklogo.png"></a>
                    </div>
                    <div class="loginlogo">
                        <a href="<?= base_url()?>google"><img src="<?php echo asset_url();?>frontend/images/googlelogo.png"></a>
                    </div>
                </div>       
            </div>
        </div>
    </div>
</section>

<section class="section-padding" id="verifyotp">
    <div class="">
		<div class="col-lg-5 col-md-8 col-sm-12 m-auto">
            <h2 style="font-weight: 900;" class="text-center">Verify</h2>              
                <div class="pt-4">
                    <span id="resent-msg" style="color: green;"></span><br>
                    <label style="font-size: 0.9em;"><strong>Enter OTP</strong></label>
                    <input type="hidden" name="sent-otp" id="sent-otp">
                    <input type="hidden" name="userid" id="userid">
                    <input type="text" class="login-input form-control" placeholder="Enter OTP" name="otp" id="otp" maxlength="6">
                    <span id="otp-error" style="color: red;"></span>
                </div>
                
                <div class="resendotp">
                    <div class="pt-3">
                        <a href="#" id="resendotp">Didn’t receive the OTP? Resend again</a>
                    </div>
                    <div class="pt-3">
                        <a href="#" id="show_number">Change phone no.</a>      
                    </div>
                </div>
		</div>
	</div>
</section>

<script type="text/javascript">
$(document).ready(function() {
	$("#verifyotp").hide();
	var options = {
		container: function($field, validator) {
            return $field.parent().find('.messageContainer');
        },
        feedbackIcons: {
            validating: 'glyphicon glyphicon-refresh'
        },
        excluded: ':disabled',
        fields: {
            username: {
                validators: {
                    notEmpty: {
                        message: 'Please enter mobile number'
                    },
                    regexp:{
                        regexp: '^[7-9][0-9]{9}$',
                        message: 'Enter valid mobile number'
                    }
                }
            } 
        }
	}

	$("#username").on('keyup', function () {
		$('#login_otp_frm').bootstrapValidator(options).bootstrapValidator('validate');
	    if ($('#login_otp_frm').bootstrapValidator('isValid')) {
	        var str = $("#username").val();
	        var pattern = '^[7-9][0-9]{9}$';
	        if (str.length == 10 && str.match(pattern)) {
	            loginWithOTP();
	        }
	    }
	});

	$(document).on('keyup', '#otp', function () {
		var otp = $("#otp").val();
		var pattern = '^[0-9]{6}$';
	    if (otp.length == 6 && otp.match(pattern)) {
	        var sent_otp = $("#sent-otp").val();
	    	if (otp === sent_otp) {
		        ajaxindicatorstart("Please wait..");
		        var username = $("#username").val();
		        var id = $("#userid").val();
		        $.post(base_url+"loginwithOTP",{username: username, id:id, otp:otp},function(data) {
		        ajaxindicatorstop();

		        location.reload();

		        },'json');
	    	}else {
	    		$("#otp-error").html('OTP is incorrect');
	    	}
	    } else {
	    	$("#otp-error").html('Please enter valid OTP');
	    }
	});

	function loginWithOTP() {
	        ajaxindicatorstart("Please wait..");
	        $.post(base_url+"sendLoginotp",{username: $("#username").val()},function(data) {
	            ajaxindicatorstop();
	            if(data !== ''){
	            $("#sent-otp").val(data.otp);
	            $("#userid").val(data.id);

	            $("#sendotp").hide();
	            $("#verifyotp").show();
	            $("#resent-msg").html('Please enter OTP which send your mobile number');
	            } else {
	            	$("#ser-error").html('something went wrong!');
	            	return false;
	            }
	        },'json');
	        return false;
	    }

	$("#show_number").on('click', function() {
		$("#verifyotp").hide();
		$("#sendotp").show();
		$("#username").focus();
	});

	$("#resendotp").on('click', function() {	
        ajaxindicatorstart("Please wait..");
        $.post(base_url+"sendLoginotp",{username: $("#username").val()},function(data) {
            ajaxindicatorstop();
            if(data !== ''){
	            $("#sent-otp").val(data.otp);
	            $("#userid").val(data.id);
	            $("#resent-msg").html('OTP resend successfully!');
            } else {
            	$("#ser-error").html('something went wrong!');
            	return false;
            }                
        },'json');
        return false;
	});
});

</script>