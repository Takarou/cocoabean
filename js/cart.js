$(window).load(function(){
	$('.buy-button').bind('click', function(){
		var itemId = $(this).attr('id');
		addToCart(itemId);
	});
});

function addToCart(itemId){
	itemId = itemId.replace('id_', '');
	itemId = parseInt(itemId);
	//console.log(itemId);
	
	/*$.post('addCart.php', {id: itemId}, function(data){
		console.log(data);
		//location.reload(true);
	});*/
	
	$.ajax({
		type: 'POST',
		url: 'addCart.php',
		data: {
			id: itemId
		},
		cache: false,
		dataType: 'json',
		success: function(data){
			//console.log(data);
			for(var item in data){
				console.log(data[item].name);
			}
		}
	});
}
