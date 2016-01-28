/**
 * Created by nopassword on 12/16/15.
 */

var jld = ( function( window, undefined ) {
	var privates = {};
	var outputDiv = $('#jsonFormat');

	function populateJson(data) {
		var pre = "&lt;script type='application/ld+json'&gt;\n";
		var aft = "\n&lt;/script&gt;";
		$(outputDiv).html(pre + data + aft);
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

	function addDateRange(id){

		var daystr = '<div class="daysdiv days'+ id + '" style=""><label><input type="checkbox" class="Mon" name="range' + id + '[]" value="Monday">Mon</label>';
		daystr += '<label><input type="checkbox" class="Tue" name="range' + id + '[]" value="Tuesday">Tue</label>';
		daystr += '<label><input type="checkbox" class="wed" name="range' + id + '[]"  value="Wednesday">Wed</label>';
		daystr += '<label><input type="checkbox" class="Thu"  name="range' + id + '[]" value="Thursday">Thu</label>';
		daystr += '<label><input type="checkbox" class="Fri" name="range' + id + '[]"  value="Friday">Fri</label>';
		daystr += '<label><input type="checkbox" class="Sat" name="range' + id + '[]"  value="Saturday">Sat</label>';
		daystr += '<label><input type="checkbox" class="Sun" name="range' + id + '[]"  value="Sunday">Sun</label>';
		daystr += '</div>';

		$('#hour-ranges').after(daystr);
		addHours(id);
	}

	function addHours(id){
		var hourStr = '<div class="hourdiv hour' + id + '">';
		hourStr += '<label>Open:<input type="text" class="openhour" name="open' + id + '" style="width:85px;"  size="20" value="09:00" placeholder="Opening Time"></label>';
		hourStr += '<label>Close:<input type="text" name="close' + id + '" size="20" style="width:85px;"  value="17:00" placeholder="Closing Time"></label>';
		hourStr += '</div>';

		$('.days' + id).after(hourStr);
	}

	function addSameAs(id){
		var linkStr = '<div class="linkDiv hour' + id + '">';
		linkStr += '<label><input type="text" class="sameLink" name="link' + id + '" placeholder="Social Media URL"></label>';
		linkStr += '</div>';
		$('#sameas').after(linkStr);
	}


	// explicitly return public methods when this object is instantiated
	return {
		populateJson : populateJson,
		processForm : processForm,
		copyIt : copyIt,
		addDateRange: addDateRange,
		addLinks: addSameAs
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

	$('#hour-ranges').on('change', function(e){
		var numberOfRanges = $(this).val();
		$('.daysdiv').remove();
		$('.hourdiv').remove();
		if(numberOfRanges > 0){
			while (numberOfRanges > 0) {
				jld.addDateRange(numberOfRanges);
				numberOfRanges = numberOfRanges -1;
			}
		}

	});

	$('#sameas').on('change', function(e){
		var numberOfLinks = $(this).val();
		$('.sameLink').remove();
		if(numberOfLinks > 0) {
			while (numberOfLinks > 0){
				jld.addLinks(numberOfLinks);
				numberOfLinks = numberOfLinks -1;
			}
		}
	});

	$('form :input').change(function(){
		if ($("#address:empty,#city:empty,#state:empty,#zip:empty").filter(function() { return $(this).val(); }).length == 4) {
			$('.coord').css('display','block');
		}
	});

	$('.coord').on('click', function(){
		var geoUrl = 'http://maps.google.com/maps/api/geocode/json?address=',
			$addr = $('#address').val(),
			$city = $('#city').val(),
			$state = $('#state').val(),
			$zip = $('#zip').val(),
			suffix = '&sensor=false',
			sp = '+';

		$.ajax({
			url     : geoUrl + $addr + sp + $city + sp + $state + sp + $zip + suffix ,
			type    : 'GET',
			success : function( response ) {
				$('#lat').val(response.results[0].geometry.location.lat);
				$('#long').val(response.results[0].geometry.location.lng);
			}
		});
	});
});
