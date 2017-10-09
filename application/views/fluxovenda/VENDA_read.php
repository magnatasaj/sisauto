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
        <h2 style="margin-top:0px">FLUXO Read</h2>
        <table class="table">
	    <tr><td>Data</td><td><?php echo $data; ?></td></tr>
	    <tr><td>Lk Id Tipo Venda</td><td><?php echo $lk_id_tipo_venda; ?></td></tr>
	    <tr><td>Lk Id Tipo Pagamento</td><td><?php echo $lk_id_tipo_pagamento; ?></td></tr>
	    <tr><td>Lk Id Login</td><td><?php echo $lk_id_login; ?></td></tr>
	    <tr><td>Lk Id Aluno</td><td><?php echo $lk_id_aluno; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('fluxo') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>