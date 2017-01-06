// jquery extend function
$.extend(
{
	redirectPost: function(location, args)
	{
		var form = '';
		$.each( args, function( key, value ) {
			form += '<input type="hidden" name="' + key + '" value="' + value + '">';
		});
		$('<form action="' + location + '" method="POST">' + form + '</form>').appendTo('body').submit();
	}
});

$(document).ready(function() {
	setUpdateFunctions();
});

function setUpdateFunctions() {
	var userInfo = $(document).find('#user-info');
	var user_id = $(userInfo).attr('value');
	
	$(userInfo).find('.input-group').each(function(index, elem) {
		var inputElem = $(elem).find('input');
		var inputButton = $(elem).find('button');
		
		$(inputButton).on('click', function() {
			if($(inputElem).val() != $(inputElem).attr('value')) {
				$.redirectPost('../../actions/profiles/update.php', {key: $(inputElem).attr('name'), value: $(inputElem).val(), user_id: user_id});
			}
			else {
				console.log('unchanged value');
			}
		});
		
		$(inputElem).keyup(function(event){
			if(event.keyCode == 13) { // Enter key
				$(inputButton).click();
			}
		});
	});
}

function onSidebarMenuClicked(link, menu) {

	var span = $(link).find('.caret');
	var items = $.find('.' + menu);
	
	if($(items).hasClass('hidden')) {
		$(items).removeClass('hidden');
		$(span).addClass('caret-up');
	}
	else {
		$(items).addClass('hidden');
		$(span).removeClass('caret-up');
	}
}