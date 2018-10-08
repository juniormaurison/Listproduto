<?
include('/php/conexao.php');


$sql = "select * from produtogeral as pg ";



?>

<!DOCTYPE HTML>



<html lang="pt-BR">
	<head>
		<meta charset="iso-8859-1"/>
		<meta name="description" content="MJSystem"/>
		<meta name="viewport" content="width-device.width, initial-scale-1"/>
		
		
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/bootstrap-theme.min.css" />
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		
		<script type="text/javascript">
			
		</script>
	</head>
	<body>
		<div class="panel panel-default">
		<input type="hidden" name="itensporpage" id="itensporpage"/>
		<div class="panel-heading" style="text-align: center">
			<table style="width:100%">
				<tr>
					<td style="width:70%" align="left">mmartan</td>
					<td style="width:30%">
						<input type="text" id="search_prod" name="search_prod" class="form-control" placeholder="Busque o produto" aria-describedby="sizing-addon1">
					</td>
				</tr>
			</table>
		</div>
		<div class="panel-heading" style="text-align: left; font-size:20px">
			Lista de produtos
		</div>
		<div class="panel-body">
			<table class="table table-condensed table table-hover">
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				
			</table>
		</div>
		<nav aria-label="Page navigation">
			<ul class="pagination">
				<li>
					<a href="#" aria-label="Previous">
						<span aria-hidden="true">&laquo;</span>
					</a>
				</li>
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li>
					<a href="#" aria-label="Next">
						<span aria-hidden="true">&raquo;</span>
					</a>
				</li>
			</ul>
		</nav>
	</div>
		<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	</body>
</html>