function pesquisa(val){
	if(val.length >= 3){
		$('#titlelist').text(val);
		setTimeout(function(){
			window.location.href = 'index.php?search_prod='+val;
		},3000);					
	}else{
		$('#titlelist').text('Lista de produtos');
		setTimeout(function(){
			window.location.href = 'index.php';
		},3000);
	}
}
function itensporpag(val){
	var conca = '';
	if($('#search_prod').val() != ''){
		conca = '&search_prod='+$('#search_prod').val();
	}				
	window.location.href = "index.php?quantpag="+val+conca;
}