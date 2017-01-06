$(document).ready( function() {
	checkPasswords();
	isNumberKey(event);
});

function isNumberKey(event) {
	var charCode = (event.which) ? event.which : event.keyCode;
	return !(charCode > 31 && (charCode < 48 || charCode > 57));
}

function checkPasswords() {
	var pass = $.find('.form-group.passwords #signinPasswordInput');
	
	if(pass.length <= 0 || pass == null || typeof(pass) == 'undefined') {
		return false;
	}
	
	var str = $(pass).val();
	
	var valid = false;
	
	if(str.length <= 0) {
		$(pass).removeClass('invalid');
		$(pass).removeClass('valid');
	}
	else {
		var pattern = /^[a-zA-Z]([a-z!-\.:-Z_])*\d[a-z!-Z_]*$/;
		var isMatch = (pattern.test(str) && str.length >= 6 && str.length < 64);
		
		// console.log('Match: ' + str + '(' + isMatch + ')');
		
		if(isMatch) {
			$(pass).addClass('valid');
			$(pass).removeClass('invalid');
		}
		else {
			$(pass).removeClass('valid');
			$(pass).addClass('invalid');
		}		
	}
	
	var passConfirm = $.find('.form-group.passwords #signinConfirmPasswordInput');
	var strConfirm = $(passConfirm).val();
	
	if(strConfirm.length <= 0) {
		$(passConfirm).removeClass('invalid');
		$(passConfirm).removeClass('valid');
	}
	else {
		if(strConfirm == str) {
			valid = true;
			$(passConfirm).addClass('valid');
			$(passConfirm).removeClass('invalid');
		}
		else {
			$(passConfirm).removeClass('valid');
			$(passConfirm).addClass('invalid');
		}		
	}
	
	if(!valid) {
		$($.find('#submit-registration-btn')).addClass('disabled');
	}
	else {
		$($.find('#submit-registration-btn')).removeClass('disabled');
	}
}

function validateForm(submitBtn, event) {
	var pass = $($.find('.form-group.passwords #signinPasswordInput')).val();
	var passConfirm = $($.find('.form-group.passwords #signinConfirmPasswordInput')).val();
	var NIF = $($.find('#signinNIFInput')).val();
	
	if(pass != passConfirm) {
		console.log('NO MATCH');
		event.preventDefault();
		return false;
	}

	if(NIF.length != 9) {
		console.log('NOT A VALID FISCAL NUMBER');
		event.preventDefault();
		return false;
	}
	
	return true;
}