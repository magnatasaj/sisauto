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
        <h2 style="margin-top:0px">ALUNOS Read</h2>
        <table class="table">
	    <tr><td>Cdaluno Nome</td><td><?php echo $cdaluno_nome; ?></td></tr>
	    <tr><td>Cdaluno Rg</td><td><?php echo $cdaluno_rg; ?></td></tr>
	    <tr><td>Cdaluno Datadenascimento</td><td><?php echo $cdaluno_datadenascimento; ?></td></tr>
	    <tr><td>Cdaluno Naturalidade</td><td><?php echo $cdaluno_naturalidade; ?></td></tr>
	    <tr><td>Cdaluno Estadocivil</td><td><?php echo $cdaluno_estadocivil; ?></td></tr>
	    <tr><td>Cdaluno Profissao</td><td><?php echo $cdaluno_profissao; ?></td></tr>
	    <tr><td>Cdaluno Telefoneresidencial</td><td><?php echo $cdaluno_telefoneresidencial; ?></td></tr>
	    <tr><td>Cdaluno Telefonecomercial</td><td><?php echo $cdaluno_telefonecomercial; ?></td></tr>
	    <tr><td>Cdaluno Telefonecelular</td><td><?php echo $cdaluno_telefonecelular; ?></td></tr>
	    <tr><td>Cdaluno Email</td><td><?php echo $cdaluno_email; ?></td></tr>
	    <tr><td>Cdaluno Cep</td><td><?php echo $cdaluno_cep; ?></td></tr>
	    <tr><td>Cdaluno Cidade</td><td><?php echo $cdaluno_cidade; ?></td></tr>
	    <tr><td>Cdaluno Endereco</td><td><?php echo $cdaluno_endereco; ?></td></tr>
	    <tr><td>Cdaluno Numero</td><td><?php echo $cdaluno_numero; ?></td></tr>
	    <tr><td>Cdaluno Bairro</td><td><?php echo $cdaluno_bairro; ?></td></tr>
	    <tr><td>Cdaluno Pontodereferencia</td><td><?php echo $cdaluno_pontodereferencia; ?></td></tr>
	    <tr><td>Foto</td><td><?php echo $foto; ?></td></tr>
	    <tr><td>Status</td><td><?php echo $status; ?></td></tr>
	    <tr><td>Id Aluno Id Login</td><td><?php echo $id_aluno_id_login; ?></td></tr>
	    <tr><td>Data Criacao</td><td><?php echo $data_criacao; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('alunos') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>