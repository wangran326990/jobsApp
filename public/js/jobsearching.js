/*
	Nouislider Plugin  

*/


var rangeSlider = document.getElementById('distance');

noUiSlider.create(rangeSlider, {
	start: [ 0 ],
	step:1,
	connect: "lower",
	range: {
		'min': [ 0 ],
		'max': [ 50 ]
	}
});

var rangeSliderValueElement = document.getElementById('distance-field');

rangeSlider.noUiSlider.on('update', function( values, handle ) {
	rangeSliderValueElement.innerHTML = parseInt(values[handle]);
});



var handleSlider = document.getElementById('date');

noUiSlider.create(handleSlider, {
	start: [1],
	step:1,
	connect: "lower",
	range: {
		'min': [ 0 ],
		'max': [ 30 ]
	}
});

var handleValues = document.getElementById('date-range');

handleSlider.noUiSlider.on('update', function( values, handle ) {
	handleValues.innerHTML = parseInt(values[handle]);
});


// auto hint canadian cities

$("#location").on('input', function (){
	var $keywords = $(this).val();
	$.ajax({
		type:'GET',
		dataType:'jsonp',
		data:{},
		url:"http://gd.geobytes.com/AutoCompleteCity?callback=?&q="+$keywords	
	}).done(function(response){
		$("#hint").removeClass('inline-textbox-hint').html('');
		if(response[0]!=='%s'){
		    var html="";
			for(var i=0; i<response.length; i++){
				html +="<p class='searchItem'>"+response[i]+"</p>";
			}
			$("#hint").addClass('inline-textbox-hint').html(html);
			$(".searchItem").on('click', getHint);
		}
	}).fail(function(error){
		console.log(error);
	});
});

		
function getHint(){
	var address=$(this).html();
	var $location=$('#location').val(address);
	$("#hint").removeClass('inline-textbox-hint').html('');
}
