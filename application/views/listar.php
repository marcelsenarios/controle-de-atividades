<?php $this->load->view('commons/cabecalho'); ?>

<div class="container">
	<div class="page-header">
		<h1>Lista de Atividades</h1>
	</div>

	<table class="table">
		<thead class="bg-info">
			<tr>
				<th>Nome</th>
				<th>Descrição</th>
				<th>Inicio</th>
				<th>Fim</th>
				<th>Status</th>
				<th>Situação</th>
				<th>Data Cadastro</th>
				<th>Ações</th>
			</tr>	
		</thead>
		
		<tbody>
			<?php foreach($atividades as $atividade): ?>
			<tr>
				<td><?= $atividade['nome']; ?></td>
				<td><?= $atividade['descricao']; ?></td>
				<td><?= $atividade['dataInicio']; ?></td>
				<td><?= $atividade['dataFim']; ?></td>
				<td><?= $atividade['status']; ?></td>
				<td><?= $atividade['situacao']; ?></td>
				<td><?= $atividade['dataCadastro']; ?></td>
				<td><a href="" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Editar</a></td>
			</tr>
			<?php endforeach; ?>					
		</tbody>
	</table>	


</div>

<?php $this->load->view('commons/rodape'); ?>
