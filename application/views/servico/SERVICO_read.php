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
        <h2 style="margin-top:0px">SERVICO Read</h2>
        <table class="table">
	    <tr><td>Nome</td><td><?php echo $nome; ?></td></tr>
	    <tr><td>Valor Base</td><td><?php echo $valor_base; ?></td></tr>
	    <tr><td>St Servico</td><td><?php echo $st_servico; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('servico') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>