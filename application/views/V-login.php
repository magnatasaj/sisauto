<?php  $this->load->view('temas/topo-login'); ?>

 <header>
        <div class="header-content">
            <div class="header-content-inner">
                 <form class="form-horizontal"  method="post" action="login/entrar">

<fieldset>


<h2>SISAUTO: MAIS AMIGOS</h2>
<p></p>
<div class="form-group">
    <?php if ($this->session->flashdata('erro')) { ?>
            <div id="erro" class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em>
                <?php echo $this->session->flashdata('erro'); ?>
            </div>
        <?php } ?>
</div>
<p></p>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Login</label>  
  <div class="col-md-4">
 <input class="form-control" placeholder="" name="login" type="login" autofocus="" required="">    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Senha">Senha</label>
  <div class="col-md-4">
                            <input class="form-control" placeholder="" name="senha" type="password" value="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button class="btn btn-success">Entrar</button>
  </div>
</div>
<p>Você não tem conta? <a  href="escolher.jsp">Clique aqui!</a></p>
<p>Você esqueceu a senha? <a  href="esqueciminhasenha.jsp">Clique aqui!</a></p>
</fieldset>
</form>
               </div>
        </div>
    </header>
 



<?php  $this->load->view('temas/rodape-login'); ?>
<script>
    $(document).ready(function () {

        setTimeout("$('#erro').slideUp('slow')", 6400);

    });
</script>