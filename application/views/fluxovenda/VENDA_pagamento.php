<?php  $this -> load -> view('temas/topo-painel'); ?>
<?php $this -> load -> view('temas/menu-painel'); ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Finalizar venda</h3><h3 style="float: right;text-align: right;" class="box-title">Nº da Venda:<?php echo $id_fluxo ?></h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="box" >

            </div>
            <div class="box-body">
              <td style="width: 460px;">

                <div id="pos">
                  <form action="<?php echo base_url(); ?>requisicao/additem" id="formProcessos" method="post" accept-charset="utf-8">
                    <div class="well well-sm" id="leftdiv">
                      <div id="lefttop" style="margin-bottom:5px;">
                        <div class="form-group" style="margin-bottom:5px;">
                         <p>Nome Aluno: <?php echo $Aluno->cdaluno_nome ?></p>
                         <p>Nome Data de Nascimento: <?php echo $Aluno->cdaluno_datadenascimento ?></p>
                         <p>cpf: <?php echo $Aluno->cdaluno_cpf ?></p>
                         <div style="clear:both;"></div>
                       </div>

                     </div>


                   </div>
                   <div id="printhead" class="print">
                    <p>Date: <?php echo date('d/m/Y')?></p>
                  </div>
                  <div id="print">
                    <div id="list-table-div" class="ps-container" data-ps-id="aa4952cd-94ce-f904-0e09-dd3de6aa7f4b" style="height: 300px;">
                      <table id="itens" class="table table-striped table-condensed table-hover list-table" style="margin:0;">
                        <thead>
                          <tr class="success">
                            <th>Produto</th>
                            <th style="width: 15%;text-align:center;">Preço</th>
                            <th style="width: 15%;text-align:center;">Qtd</th>
                            <th style="width: 20%;text-align:center;">Subtotal</th>
                            <th style="width: 20px;" class="satu"><i class="fa fa-trash-o"></i></th>
                          </tr>
                        </thead>
                        <tbody >
                         <?php 
                         $qtd_itens = 0;
                         $total = 0;
                         foreach ($itens as $item){

                           $qtd_itens += $item->qtd;
                           $total += ($item->valor * $item->qtd);
                                                            //adiciona os itens a tabela

                           ?>
                           <tr><td><span class="btn-block btn-xs edit btn-warning" id="name_1506948209785"><?php echo $item->nome ?></span></td>
                             <td class="text-right"><span class="text-right sprice" id=""><?php echo rs($item -> valor); ?></span></td>
                             <td style="text-align: center;"><?php echo $item->qtd ?></td>
                             <td style="text-align: center;"><span class="text-right ssubtotal" id="subtotal_1506948209785"><?php echo rs($item->valor * $item->qtd) ?></span></td><td class="text-center"><i id="rm" class="fa fa-trash-o tip pointer posdel" idAcao="<?php echo $item->id_vendas ?>" title="Remove"></i></td></tr>
                             <?php } ?>
                           </tbody>
                         </table>
                       </div>
                       <div style="clear:both;"></div>
                       <div id="totaldiv">
                         <table id="itens2" class="table table-condensed totals" style="margin-bottom:10px;">
                           <tbody>
                             <tr class="info">
                               <td width="25%">Total de Itens</td>
                               <td class="text-right" style="padding-right:10px;"><span id="count"><?php echo  $qtd_itens ?></span></td>
                               <td width="25%">Total</td>
                               <td class="text-right" colspan="2"><span id="total"> <?php echo rs($total); ?>  </span></td>
                             </tr>
                             <tr class="info">


                             </tr>
                             <tr class="success">
                               <td colspan="2" style="font-weight:bold;">Total a Pagar</td>
                               <td class="text-right" colspan="2" style="font-weight:bold;"><span id="total-payable"><?php echo rs($total); ?></span></td>
                             </tr>
                           </tbody>
                         </table>
                       </div>
                     </div>
                     <div id="botbuttons" class="col-xs-12 text-center">
                      <div class="row">
                        <div class="col-xs-4" style="padding: 0;">
                          <div class="btn-group-vertical btn-block">
                           <select class="form-control" data-live-search="true" name="tipo">
                           <?php foreach($s as $ss ) { ?>
                              <option id="<?php echo $ss -> id_situacao; ?>" value="<?php echo $ss -> id_situacao; ?>" selected ><?php echo $ss -> situacao_nome; ?></option>

                              <?php } ?>

                            </select>

                          </div>

                        </div>
                        <div class="col-xs-4" style="padding: 0 5px;">
                         <div class="btn-group-vertical btn-block">

                         </div>
                       </div>
                       <div class="col-xs-4" style="padding: 0;">

                       </div>
                     </div>

                   </div>
                   <div class="clearfix"></div>

                   <div id="campos_ocultos">
                     <input id="id_aluno" class="span12" type="hidden" name="id_aluno" value=""  />


                   </div>
                 </form>                             </div>

               </td>



             </div>
             <!-- /.box-body -->
           </div>
           <!-- /.box -->


         </section>   

       </div>



     </div>

     <?php $this -> load -> view('temas/rodape-painel'); ?>

     <script type="text/javascript">
      		$("#valor").maskMoney({
        symbol: '',
        showSymbol: true,
        thousands: '.',
        decimal: ',',
        symbolStay: true
      });     

      $("#id_aluno_buscar").autocomplete({
       source: "<?= base_url() ?>
		Alunos / autoCompleteAluno",
		minLength: 1,
		select: function( event, ui ) {
		$("#id_aluno").val(ui.item.id);

		}
		});

		$("#servico").autocomplete({
		source: "
<?= base_url() ?>
		Servico / autoCompleteServico",
		minLength: 1,
		select: function( event, ui ) {
		$("#valor").val(ui.item.valor_base);
		$("#qtd").val(1);

		}
		});

		$(document).on('click', '#rm', function(event) {
		var idServico = $(this).attr('idAcao');
		var apagar = confirm('Deseja realmente excluir este registro?');
		if (apagar){
		if((idServico % 1) == 0){
		$("#itens").html("<div class='progress-bar progress-bar-striped active' role='progressbar'  aria-valuenow='100' aria-valuemin='0' aria-valuemax='100' style='width:100%'>CARREGANDO...</div>");
		$.ajax({
		type: "POST",
		url: "
<?php echo base_url(); ?>Vendas_itens/delete",
           data: "iditem="+idServico,
           dataType: 'json',
           success: function(data)
           {
            if(data.result == true){
              $( "#itens" ).load("<?php echo current_url() ?>
				#itens" );
				$( "#itens2" ).load("
<?php echo current_url() ?>
				#itens2" );

				}
				else{
				alert('Ocorreu um erro ao tentar remover!.');
				}
				}
				});
				return false;
				}
				}

				});

				$("#formProcessos").validate({
				rules:{
				descricao: {required:true},
				valor: {required:true},
				qtd: {required:true}
				},
				messages:{
				valor: {required: 'é preciso especificar o valor!'},
				qtd: {required: 'é preciso especificar a quantidade!'}
				},
				submitHandler: function( form ){

				var dados = $( form ).serialize();
				$("#itens").html("<div class='progress-bar progress-bar-striped active' role='progressbar'  aria-valuenow='100' aria-valuemin='0' aria-valuemax='100' style='width:100%'>CARREGANDO...</div>");
				$.ajax({
				type: "POST",
				url: "
<?php echo base_url(); ?>
			Vendas_itens / add_venda_item",
			data: dados,
			dataType: 'json',
			success: function(data)
			{
			if(data.result == true){
			$( "#itens" ).load("
<?php echo current_url() ?>
			#itens" );
			$( "#itens2" ).load("
<?php echo current_url() ?>
				#itens2" );
				$("#servico").val('').focus();
				$("#valor").val('');
				$("#desconto").val('');

				}
				else{
				alert('Ocorreu um erro:'+ data.msg);
				$( "#divProdutos" ).load("
<?php echo current_url() ?>
				#divProdutos" );

				}
				}
				});

				return false;

				}

				});

 </script>