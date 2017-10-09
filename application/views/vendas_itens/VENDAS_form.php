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
        <h2 style="margin-top:0px">VENDAS <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">Lk Id Servico <?php echo form_error('lk_id_servico') ?></label>
            <input type="text" class="form-control" name="lk_id_servico" id="lk_id_servico" placeholder="Lk Id Servico" value="<?php echo $lk_id_servico; ?>" />
        </div>
	    <div class="form-group">
            <label for="decimal">Valor <?php echo form_error('valor') ?></label>
            <input type="text" class="form-control" name="valor" id="valor" placeholder="Valor" value="<?php echo $valor; ?>" />
        </div>
	    <input type="hidden" name="id_vendas" value="<?php echo $id_vendas; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('vendas') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>