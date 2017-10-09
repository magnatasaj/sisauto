<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">ALUNOS List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('alunos/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('alunos/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('alunos'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Cdaluno Nome</th>
		<th>Cdaluno Rg</th>
		<th>Cdaluno Datadenascimento</th>
		<th>Cdaluno Naturalidade</th>
		<th>Cdaluno Estadocivil</th>
		<th>Cdaluno Profissao</th>
		<th>Cdaluno Telefoneresidencial</th>
		<th>Cdaluno Telefonecomercial</th>
		<th>Cdaluno Telefonecelular</th>
		<th>Cdaluno Email</th>
		<th>Cdaluno Cep</th>
		<th>Cdaluno Cidade</th>
		<th>Cdaluno Endereco</th>
		<th>Cdaluno Numero</th>
		<th>Cdaluno Bairro</th>
		<th>Cdaluno Pontodereferencia</th>
		<th>Foto</th>
		<th>Status</th>
		<th>Id Aluno Id Login</th>
		<th>Data Criacao</th>
		<th>Action</th>
            </tr><?php
            foreach ($alunos_data as $alunos)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $alunos->cdaluno_nome ?></td>
			<td><?php echo $alunos->cdaluno_rg ?></td>
			<td><?php echo $alunos->cdaluno_datadenascimento ?></td>
			<td><?php echo $alunos->cdaluno_naturalidade ?></td>
			<td><?php echo $alunos->cdaluno_estadocivil ?></td>
			<td><?php echo $alunos->cdaluno_profissao ?></td>
			<td><?php echo $alunos->cdaluno_telefoneresidencial ?></td>
			<td><?php echo $alunos->cdaluno_telefonecomercial ?></td>
			<td><?php echo $alunos->cdaluno_telefonecelular ?></td>
			<td><?php echo $alunos->cdaluno_email ?></td>
			<td><?php echo $alunos->cdaluno_cep ?></td>
			<td><?php echo $alunos->cdaluno_cidade ?></td>
			<td><?php echo $alunos->cdaluno_endereco ?></td>
			<td><?php echo $alunos->cdaluno_numero ?></td>
			<td><?php echo $alunos->cdaluno_bairro ?></td>
			<td><?php echo $alunos->cdaluno_pontodereferencia ?></td>
			<td><?php echo $alunos->foto ?></td>
			<td><?php echo $alunos->status ?></td>
			<td><?php echo $alunos->id_aluno_id_login ?></td>
			<td><?php echo $alunos->data_criacao ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('alunos/read/'.$alunos->id_aluno),'Read'); 
				echo ' | '; 
				echo anchor(site_url('alunos/update/'.$alunos->id_aluno),'Update'); 
				echo ' | '; 
				echo anchor(site_url('alunos/delete/'.$alunos->id_aluno),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </body>
</html>