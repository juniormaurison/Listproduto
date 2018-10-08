<?php
include('php/conexao.php');
//Quantidade de itens por pagina
if($_GET['quantpag'] > 0){
	$itens_por_pagina = $_GET['quantpag'];
}else{
	$itens_por_pagina = 10;	
}
$pagina = intval($_GET['pagina']);

//Monta sql de pesquisa do campo 'buscar produtos'
if($_GET['search_prod'] != ''){
	$where = " where nomeproduto LIKE ('%".$_GET['search_prod']."%')";
}
if($pagina == 0){
	$pagina_sql = 0;
}else{
	$pagina_sql = ($pagina*$itens_por_pagina)-$itens_por_pagina;	
}
//echo $pagina_sql;
// sql de busca de produtos da pagina atual.
$sql = "select * from produtogeral $where LIMIT $pagina_sql, $itens_por_pagina";

$execute = $mysqli->query($sql);
$produto = $execute->fetch_assoc();
//sql que busca a quantidade total de intens 
$num_total = $mysqli->query("select nomeproduto from produtogeral $where")->num_rows;
$num = $execute->num_rows;

//monta o tipo de produto que esta sendo exibido na descricao
$Array_Tipo = array(
	1 => 'Solteiro extra',
	2 => 'Solteiro',
	3 => 'Casal',
	4 => 'Casal King'
);

$num_paginas = ceil($num_total/$itens_por_pagina);

//echo $num_paginas;exit;
?>

<!DOCTYPE HTML>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width-device.width, initial-scale-1"/>		
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/bootstrap-theme.min.css" />
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/index.js"></script>
	</head>
	<body>
		<div class="panel panel-default">
			<input type="hidden" name="itensporpage" id="itensporpage"/>
			<div class="panel-heading" style="text-align: center">
				<table style="width:100%">
					<tr>
						<td style="width:70%" align="left">mmartan</td>
						<td style="width:30%">
							<input type="text" id="search_prod" Onkeyup="pesquisa(this.value)" name="search_prod" value="<?php echo $_GET['search_prod'];?>"class="form-control" placeholder="Busque o produto" aria-describedby="sizing-addon1">
						</td>
					</tr>
				</table>
			</div>
			<div class="panel-heading" style="text-align: left; font-size:20px">
				<label id="titlelist"><?php if($_GET['search_prod'] != ''){echo $_GET['search_prod'];}else{ echo 'Lista de produtos';}?></label>
			</div>
			<div class="panel-body" align="center">
				<label id="titlelist" ><u><?php echo $num_total;?> PRODUTOS ENCONTRADOS</u></label>
				<?php if($num_total > 0){?>
				<table class="table table-condensed table table-hover" style="width:80%;">
					<?php do{
						if($produto['precodesconto'] > 0) {
							$preco = '<s>R$'.number_format($produto['precoproduto'],2,',','').'</s> por R$'.number_format($produto['precodesconto'],2,',','');
						}else{
							$preco = number_format($produto['precoproduto'],2,',','');
						}
						?>
						<tr>
							<td style="width:11%" align="left"><img width="70px" src="img/<?php echo $produto['imgproduto1'];?>" alt="<?php echo $produto['nomeproduto'];?>"/></td>
							<td style="width:11%"align="left"><img width="70px" src="img/<?php echo $produto['imgproduto2'];?>" alt="<?php echo $produto['nomeproduto'];?>"/></td>
							<td style="width:11%"align="left"><img width="70px" src="img/<?php echo $produto['imgproduto3'];?>" alt="<?php echo $produto['nomeproduto'];?>"/></td>
							<td style="width:22%"align="left">
								<?php echo $produto['nomeproduto'];?> <br/>
								<font size="2" color="#9C9C9C"><?php echo $produto['descricaoproduto'];?> | <?php echo $Array_Tipo[$produto['tipo']];?></font> 
							</td>
							<td style="width:15%"align="rigth"><?php echo $preco;?></td>
						</tr>
					<?php }while($produto = $execute->fetch_assoc()); ?>					
				</table>
				<?php } ?>
				<table style="width:80%">
					<tr>
						<td style="width:50%" align="rigth">
							<div class="col-sm-5 btn-group bootstrap-select">
								<select class="form-control" onchange="itensporpag(this.value)" name="quantpag" id="quantpag">
									<option <?php if($_GET['quantpag'] == 10) {echo "selected='selected'";}?> value="10">10 Itens por página</option>
									<option <?php if($_GET['quantpag'] == 16) {echo "selected='selected'";}?> value="16">16 Itens por página</option>
									<option <?php if($_GET['quantpag'] == 20) {echo "selected='selected'";}?> value="20">20 Itens por página</option>					
								</select>
							</div>
						</td>
						<td style="width:50%" align="rigth">
							<nav>
								<ul class="pagination">
									<li>
										<a href="index.php?pagina=0" aria-label="Previous">
											<span aria-hidden="true">&laquo;</span>
										</a>
									</li>
									<?php 
									for($i=1;$i<=$num_paginas;$i++){
										$estilo = "";
										if($pagina == $i)
											$estilo = "class=\"active\"";
										?>
										<li <?php echo $estilo; ?> ><a href="index.php?pagina=<?php echo $i; ?>&quantpag=<?php echo $_GET['quantpag']?>"><?php echo $i; ?></a></li>
									<?php } ?>
									<li>
										<a href="index.php?pagina=<?php echo $num_paginas; ?>" aria-label="Next">
											<span aria-hidden="true">&raquo;</span>
										</a>
									</li>
								</ul>
							</nav>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html>