<?php  $this->load->view('temas/topo-painel'); ?>
<?php $this->load->view('temas/menu-painel'); ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                    <h3 class="box-title">Abertura de caixa</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="box" >

                        </div>
                        <div class="box-body">
                            <?php if($this->session->flashdata('alerta')){ ?>
                            <div id="alerta" class="alert alert-warning alert-dismissible" role="alert">
                               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                               <em class="fa fa-lg fa-warning">&nbsp;</em>
                               <?php echo $this->session->flashdata('alerta'); ?>
                           </div>

                           <?php }?>
                           <form action="<?php echo base_url();?>caixa/abrir_acao" method="post">
                            <div class="form-group">
                                <label for="decimal">Caixa valor de abertura:</label>
                                <input type="text" class="form-control" name="caixa_saldo" id="caixa_saldo" placeholder="Caixa Saldo" value="" />
                            </div>
                                                      
                            <div class="row">
                                <div class="col-md-6">
                                    <button id="btngo" type="submit"  class="btn btn-block btn-success btn-lg">Salvar</button>
                                </div>
                                <div class="col-md-6">
                                    <button onclick="limpar2()" id="limpar" type="button" class="btn btn-block btn-primary btn-lg disabled">Limpar</button>
                                </div>
                            </div>
                        </form>


                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->


            </section>   

        </div>



    </div>

    <?php $this->load->view('temas/rodape-painel'); ?>

<script type="text/javascript">
    $("#caixa_saldo").maskMoney({
  symbol: '',
  showSymbol: true,
  thousands: '.',
  decimal: ',',
  symbolStay: true
});

</script>