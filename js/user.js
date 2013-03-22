$(document).ready(function() {
	//alert("Hi");
	autocomplete()
});

function autocomplete(){
		$( "#autocomplete" ).autocomplete({
		source: function(request, response) {
			$.ajax({ url: 'index.php/userhome/suggestions',
			data: { term: $("#autocomplete").val()},
			dataType: "json",
			type: "POST",
			success: function(data){
				response(data);
			}
		});
	},
	minLength: 2
	});
}
