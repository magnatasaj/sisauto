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
        <h2 style="margin-top:0px">ALUNOS <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Cdaluno Nome <?php echo form_error('cdaluno_nome') ?></label>
            <input type="text" class="form-control" name="cdaluno_nome" id="cdaluno_nome" placeholder="Cdaluno Nome" value="<?php echo $cdaluno_nome; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Cdaluno Rg <?php echo form_error('cdaluno_rg') ?></label>
            <input type="text" class="form-control" name="cdaluno_rg" id="cdaluno_rg" placeholder="Cdaluno Rg" value="<?php echo $cdaluno_rg; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">Cdaluno Datadenascimento <?php echo form_error('cdaluno_datadenascimento') ?></label>
            <input type="text" class="form-control" name="cdaluno_datadenascimento" id="cdaluno_datadenascimento" placeholder="Cdaluno Datadenascimento" value="<?php echo $cdaluno_datadenascimento; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Cdaluno Naturalidade <?php echo form_error('cdaluno_naturalidade') ?></label>
            <input type="text" class="form-control" name="cdaluno_naturalidade" id="cdaluno_naturalidade" placeholder="Cdaluno Naturalidade" value="<?php echo $cdaluno_naturalidade; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Cdaluno Estadocivil <?php echo form_error('cdaluno_estadocivil') ?></label>
            <input type="text" class="form-control" name="cdaluno_estadocivil" id="cdaluno_estadocivil" placeholder="Cdaluno Estadocivil" value="<?php echo $cdaluno_estadocivil; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Cdaluno Profissao <?php echo form_error('cdaluno_profissao') ?></label>
            <input type="text" class="form-control" name="cdaluno_profissao" id="cdaluno_profissao" placeholder="Cdaluno Profissao" value="<?php echo $cdaluno_profissao; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Cdaluno Telefoneresidencial <?php echo form_error('cdaluno_telefoneresidencial') ?></label>
            <input type="text" class="form-control" name="cdaluno_telefoneresidencial" id="cdaluno_telefoneresidencial" placeholder="Cdaluno Telefoneresidencial" value="<?php echo $cdaluno_telefoneresidencial; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Cdaluno Telefonecomercial <?php echo form_error('cdaluno_telefonecomercial') ?></label>
            <input type="text" class="form-control" name="cdaluno_telefonecomercial" id="cdaluno_telefonecomercial" placeholder="Cdaluno Telefonecomercial" value="<?php echo $cdaluno_telefonecomercial; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Cdaluno Telefonecelular <?php echo form_error('cdaluno_telefonecelular') ?></label>
            <input type="text" class="form-control" name="cdaluno_telefonecelular" id="cdaluno_telefonecelular" placeholder="Cdaluno Telefonecelular" value="<?php echo $cdaluno_telefonecelular; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Cdaluno Email <?php echo form_error('cdaluno_email') ?></label>
            <input type="text" class="form-control" name="cdaluno_email" id="cdaluno_email" placeholder="Cdaluno Email" value="<?php echo $cdaluno_email; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Cdaluno Cep <?php echo form_error('cdaluno_cep') ?></label>
            <input type="text" class="form-control" name="cdaluno_cep" id="cdaluno_cep" placeholder="Cdaluno Cep" value="<?php echo $cdaluno_cep; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Cdaluno Cidade <?php echo form_error('cdaluno_cidade') ?></label>
            <input type="text" class="form-control" name="cdaluno_cidade" id="cdaluno_cidade" placeholder="Cdaluno Cidade" value="<?php echo $cdaluno_cidade; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Cdaluno Endereco <?php echo form_error('cdaluno_endereco') ?></label>
            <input type="text" class="form-control" name="cdaluno_endereco" id="cdaluno_endereco" placeholder="Cdaluno Endereco" value="<?php echo $cdaluno_endereco; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Cdaluno Numero <?php echo form_error('cdaluno_numero') ?></label>
            <input type="text" class="form-control" name="cdaluno_numero" id="cdaluno_numero" placeholder="Cdaluno Numero" value="<?php echo $cdaluno_numero; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Cdaluno Bairro <?php echo form_error('cdaluno_bairro') ?></label>
            <input type="text" class="form-control" name="cdaluno_bairro" id="cdaluno_bairro" placeholder="Cdaluno Bairro" value="<?php echo $cdaluno_bairro; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Cdaluno Pontodereferencia <?php echo form_error('cdaluno_pontodereferencia') ?></label>
            <input type="text" class="form-control" name="cdaluno_pontodereferencia" id="cdaluno_pontodereferencia" placeholder="Cdaluno Pontodereferencia" value="<?php echo $cdaluno_pontodereferencia; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Foto <?php echo form_error('foto') ?></label>
            <input type="text" class="form-control" name="foto" id="foto" placeholder="Foto" value="<?php echo $foto; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Status <?php echo form_error('status') ?></label>
            <input type="text" class="form-control" name="status" id="status" placeholder="Status" value="<?php echo $status; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Id Aluno Id Login <?php echo form_error('id_aluno_id_login') ?></label>
            <input type="text" class="form-control" name="id_aluno_id_login" id="id_aluno_id_login" placeholder="Id Aluno Id Login" value="<?php echo $id_aluno_id_login; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">Data Criacao <?php echo form_error('data_criacao') ?></label>
            <input type="text" class="form-control" name="data_criacao" id="data_criacao" placeholder="Data Criacao" value="<?php echo $data_criacao; ?>" />
        </div>
	    <input type="hidden" name="id_aluno" value="<?php echo $id_aluno; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('alunos') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>