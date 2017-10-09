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
        <h2 style="margin-top:0px">FLUXO List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('fluxo/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('fluxo/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('fluxo'); ?>" class="btn btn-default">Reset</a>
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
		<th>Data</th>
		<th>Lk Id Tipo Venda</th>
		<th>Lk Id Tipo Pagamento</th>
		<th>Lk Id Login</th>
		<th>Lk Id Aluno</th>
		<th>Action</th>
            </tr><?php
            foreach ($fluxo_data as $fluxo)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $fluxo->data ?></td>
			<td><?php echo $fluxo->lk_id_tipo_venda ?></td>
			<td><?php echo $fluxo->lk_id_tipo_pagamento ?></td>
			<td><?php echo $fluxo->lk_id_login ?></td>
			<td><?php echo $fluxo->lk_id_aluno ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('fluxo/read/'.$fluxo->id_fluxo),'Read'); 
				echo ' | '; 
				echo anchor(site_url('fluxo/update/'.$fluxo->id_fluxo),'Update'); 
				echo ' | '; 
				echo anchor(site_url('fluxo/delete/'.$fluxo->id_fluxo),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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