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
        <h2 style="margin-top:0px">SERVICO <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nome <?php echo form_error('nome') ?></label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" value="<?php echo $nome; ?>" />
        </div>
	    <div class="form-group">
            <label for="decimal">Valor Base <?php echo form_error('valor_base') ?></label>
            <input type="text" class="form-control" name="valor_base" id="valor_base" placeholder="Valor Base" value="<?php echo $valor_base; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">St Servico <?php echo form_error('st_servico') ?></label>
            <input type="text" class="form-control" name="st_servico" id="st_servico" placeholder="St Servico" value="<?php echo $st_servico; ?>" />
        </div>
	    <input type="hidden" name="id_servico" value="<?php echo $id_servico; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('servico') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>