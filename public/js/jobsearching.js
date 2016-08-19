/*
	Nouislider Plugin  

*/


var rangeSlider = document.getElementById('years');

noUiSlider.create(rangeSlider, {
	start: [ 0 ],
	step:1,
	connect: "lower",
	range: {
		'min': [ 0 ],
		'max': [ 50 ]
	}
});

var rangeSliderValueElement = document.getElementById('years-field');

rangeSlider.noUiSlider.on('update', function( values, handle ) {
	rangeSliderValueElement.innerHTML = parseInt(values[handle]);
});



var handleSlider = document.getElementById('salary');

noUiSlider.create(handleSlider, {
	start: [0,1000],
	step:100,
	connect: true,
	range: {
		'min': [ 0 ],
		'max': [ 20000 ]
	}
});

var handleValues = [
	document.getElementById('salary-field-lower'),
	document.getElementById('salary-field-upper')
];

handleSlider.noUiSlider.on('update', function( values, handle ) {
	handleValues[handle].innerHTML = parseInt(values[handle]);
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
