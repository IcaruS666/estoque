<html>
	<body>
	<div class="container">
		<link href="/css/app.css" rel="stylesheet">
				<title>Controle	de	estoque</title>
	<h1>Listagem de	produtos</h1>
	<table class="table	table-striped	table-bordered	table-hover">
		<?php foreach ($produtos as $p): ?>
			<tr>
				<td><?=	$p->nome ?></td>
				<td><?=	$p->valor ?></td>
				<td><?=	$p->descricao ?></td>
				<td><?=	$p->quantidade ?></td>
				<td>	
					<a	href="/produtos/mostra?id= <?=	$p->id	?>">
						<span	class="glyphicon	glyphicon-search"></span>
					</a>
				</td>
			</tr>
		<?php endforeach ?>
	</table>
	</div>
	</body>
</html>