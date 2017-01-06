$(document).ready(function (){
	addPreventSubmitFormBehaviour();
});


function addPreventSubmitFormBehaviour() {
	$($.find('form:not(.navbar-form, .comment-form, #modal-search-form, #modal-login-form, #modal-register-form)')).each(function() {	
		$(this).on('keypress', function(event) {
			if($(event.target).prop('tagName') != 'TEXTAREA') {
				if(event.keyCode == 13) {
					event.preventDefault();
					return false;
				}					
			}
		});
	});
}

function filterProducts() {
	var filterBox = $.find('#filter-box');
	var value = $(filterBox).val().toLowerCase();
	var products = $.find('.product-item');
	
	if(value.length > 0) {
		for(i = 0; i < products.length; i++) {
			var product = products[i];
			var title = $(product).find('.product-title-short>.text');
			var titleText = $(title).html().toLowerCase();
			if(titleText.indexOf(value) < 0) {
				if(!$(product).hasClass('hidden')) {
					$(product).addClass('hidden');
				}
			}
			else {
				if($(product).hasClass('hidden')) {
					$(product).removeClass('hidden');
				}				
			}
		}
	}
	else {
		for(i = 0; i < products.length; i++) {
			var product = products[i];
			if($(product).hasClass('hidden')) {
				$(product).removeClass('hidden');
			}
		}
	}
}
