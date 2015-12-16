/**
 * Created by nopassword on 12/16/15.
 */

var jld = ( function( window, undefined ) {
	var privates = {};
	var outputDiv = $('#jsonFormat');

	function populateJson(data) {
		$(outputDiv).html(data);
	}

	function getMyJson() {

	}

	function processForm(){
		var jqxhr = $.get( "process-ld.php", function(data) {
			alert( "success" );
		})
			.done(function() {
				//alert( "second success" );
				populateJson(jqxhr.responseJSON);
			})
			.fail(function() {
				alert( "error" );
			})
			.always(function() {
				//alert( "finished" );
			});
	}
	function copyIt(element) {
		var $temp = $("<input>");
		$("body").append($temp);
		$temp.val($(element).text()).select();
		document.execCommand("copy");
		$temp.remove();
	}

	// explicitly return public methods when this object is instantiated
	return {
		populateJson : populateJson,
		processForm : processForm,
		copyIt : copyIt
	};

} )( window );

$(document).ready(function(){
	$('form').on('submit', function(e){
		$.ajax({
			url     : $(this).attr('action'),
			type    : $(this).attr('method'),
			data    : $(this).serialize(),
			success : function( response ) {
				jld.populateJson( response );
			}
		});

		return false;
	});
	$('#copybutton').on('click', function(e){
		jld.copyIt('#jsonFormat');
	});
});
jld.myMethod();