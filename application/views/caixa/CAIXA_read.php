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
        <h2 style="margin-top:0px">CAIXA Read</h2>
        <table class="table">
	    <tr><td>Caixa Saldo</td><td><?php echo $caixa_saldo; ?></td></tr>
	    <tr><td>Data Abertura</td><td><?php echo $data_abertura; ?></td></tr>
	    <tr><td>Data Fechamento</td><td><?php echo $data_fechamento; ?></td></tr>
	    <tr><td>Id Login Abertura</td><td><?php echo $id_login_abertura; ?></td></tr>
	    <tr><td>Id Login Fechamento</td><td><?php echo $id_login_fechamento; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('caixa') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>