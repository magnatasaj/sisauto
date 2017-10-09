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
						<h3 class="box-title">CADASTRO ALUNO</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<div class="box" ></div>
						<div class="box-body">
							<!-- conteudo -->
   <form  id="cadastro"  method="post" enctype="multipart/form-data" action="<?php echo base_url();?>requisicao/teste" acceptcharset="UTF-8" >
                            <div class="bootstrap-iso">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <form id="cadastro" method="post">
                                                <div class="form-group ">
                                                    <label class="control-label requiredField" for="cdaluno_nome">
                                                        Nome:
                                                        <span class="asteriskField">
                                                            *
                                                        </span>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-credit-card">
                                                            </i>
                                                        </div>
                                                        <input required="" class="form-control" id="cdaluno_nome" name="cdaluno_nome" placeholder="" type="text"/>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label requiredField" for="cdaluno_rg">
                                                        Rg
                                                        <span class="asteriskField">
                                                            *
                                                        </span>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-credit-card">
                                                            </i>
                                                        </div>
                                                        <input required="" class="form-control" id="cdaluno_rg" name="cdaluno_rg" placeholder="0000000000000" type="text"/>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label requiredField" for="cdaluno_datadenascimento">
                                                        Data de Nascimento
                                                        <span class="asteriskField">
                                                            *
                                                        </span>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-calendar">
                                                            </i>
                                                        </div>
                                                        <input required="" class="form-control" id="cdaluno_datadenascimento" name="cdaluno_datadenascimento" placeholder="00000000" type="text"/>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label requiredField" for="cdaluno_naturalidade">
                                                        Naturalidade
                                                        <span class="asteriskField">
                                                            *
                                                        </span>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-registered">
                                                            </i>
                                                        </div>
                                                        <input class="form-control" id="cdaluno_naturalidade" name="cdaluno_naturalidade" type="text"/>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label requiredField" for="cdaluno_estadocivil">
                                                        Estado Civil
                                                        <span class="asteriskField">
                                                            *
                                                        </span>
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-users">
                                                            </i>
                                                        </div>
                                                        <input class="form-control" id="cdaluno_estadocivil" name="cdaluno_estadocivil" type="text"/>
                                                    </div>
                                                </div>

                                                <div class="form-group ">
                                                    <label class="control-label " for="cdaluno_profissao">
                                                        Profiss&atilde;o
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-calendar-o">
                                                            </i>
                                                        </div>
                                                        <input class="form-control" id="cdaluno_profissao" name="cdaluno_profissao" type="text"/>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label " for="cdaluno_telefoneresidencial">
                                                        Telefone Residencial
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-phone-square">
                                                            </i>
                                                        </div>
                                                        <input class="form-control" id="cdaluno_telefoneresidencial" name="cdaluno_telefoneresidencial" placeholder="0000000000" type="text"/>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label " for="cdaluno_telefonecomercial">
                                                        Telefone Comercial
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-phone">
                                                            </i>
                                                        </div>
                                                        <input class="form-control" id="cdaluno_telefonecomercial" name="cdaluno_telefonecomercial" placeholder="0000000000" type="text"/>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label " for="cdaluno_telefonecelular">
                                                        Telefone Celular
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-phone-square">
                                                            </i>
                                                        </div>
                                                        <input required="" class="form-control" id="cdaluno_telefonecelular" name="cdaluno_telefonecelular" placeholder="00000000000" type="text"/>
                                                    </div>
                                                </div> 
                                        </div> <!-- fechou a primeira coluna -->

                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <label class="control-label requiredField" for="cdaluno_cep">
                                                    E-MAIL:
                                                    <span class="asteriskField">
                                                        *
                                                    </span>
                                                </label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                       <i type="button"  class="fa fa-email">
                                                 
                                                </i>
                                                    </div>
                                                    <input class="form-control" id="cdaluno_email" name="cdaluno_email" type="text"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label requiredField" for="cdaluno_cep">
                                                    CEP:
                                                    <span class="asteriskField">
                                                        *
                                                    </span>
                                                </label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                       <i type="button" onclick="pesquisacep()" class="fa fa-history">
                                                 
                                                </i>
                                                    </div>
                                                    <input class="form-control" id="cdaluno_cep" name="cdaluno_cep" type="text"/>
                                                </div>
                                            </div> 
                                            <div class="form-group">
                                                <label class="control-label requiredField" for="cdaluno_cidade">
                                                    Cidade
                                                    <span class="asteriskField">
                                                        *
                                                    </span>
                                                </label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-hospital-o">
                                                        </i>
                                                    </div>
                                                    <input class="form-control" id="cdaluno_cidade" name="cdaluno_cidade" type="text"/>
                                                </div>
                                            </div>      
                                            <div class="form-group ">
                                                <label class="control-label requiredField" for="cdaluno_endereco">
                                                    Endere&ccedil;o
                                                    <span class="asteriskField">
                                                        *
                                                    </span>
                                                </label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calculator">
                                                        </i>
                                                    </div>
                                                    <input class="form-control" id="cdaluno_endereco" name="cdaluno_endereco" type="text"/>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label requiredField" for="cdaluno_numero">
                                                    N&uacute;mero
                                                    <span class="asteriskField">
                                                        *
                                                    </span>
                                                </label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-thumb-tack">
                                                        </i>
                                                    </div>
                                                    <input class="form-control" id="cdaluno_numero" name="cdaluno_numero" placeholder="000000" type="text"/>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label requiredField" for="cdaluno_bairro">
                                                    Bairro
                                                    <span class="asteriskField">
                                                        *
                                                    </span>
                                                </label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-envelope">
                                                        </i>
                                                    </div>
                                                    <input class="form-control" id="cdaluno_bairro" name="cdaluno_bairro" type="text"/>
                                                </div>
                                            </div>

                                            <div class="form-group ">
                                                <label class="control-label " for="cdaluno_pontodereferencia">
                                                    Ponto de Refer&ecirc;ncia
                                                </label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-houzz">
                                                        </i>
                                                    </div>
                                                    <input class="form-control" id="cdaluno_pontodereferencia" name="cdaluno_pontodereferencia" type="text"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12 input-group">
                                                    <div class="input-group-addon text-bold">
                                                        FOTO:
                                                    </div>
                                                    <div class="file-input file-input-new"><div class="file-preview">
                                                            <div class="kv-upload-progress hide"><div class="progress">
                                                                    <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="50" >
                                                                    </div>
                                                                </div></div>
                                                            <div tabindex="200" class="btn btn-primary btn-file">
                                                                <input  id="foto" name="foto" class="file" type="file" multiple="" ></div>
                                                        </div></div>
                                                </div></div> 
                                           
                                        </div>
                                    </div>
                                    <div class="row">
                                <div class="col-md-6">
                                    <button id="btngo" type="submit"  class="btn btn-block btn-success btn-lg">Salvar</button>
                                </div>
                                <div class="col-md-6">
                                    <button onclick="limpar2()" id="limpar" type="button" class="btn btn-block btn-primary btn-lg disabled">Limpar</button>
                                </div>
                            </div>
                                </div>
                            </div>
                         </form>
 <div id="divProdutos">status</div>

							<!-- conteudo final -->
						</div>
						<!-- /.box-body -->
					</div>
					<!-- /.box -->


				</section>   

			</div>



		</div>

		<?php $this->load->view('temas/rodape-painel'); ?>
       
<script>
 $("#cadastro").validate({
  rules:{
 },
 messages:{
 },
 submitHandler: function( form ){

   var file_data = $('#foto').prop('files')[0];
                    var form_data = new FormData();
                     form_data.append('file', file_data);
                    var other_data = $('#cadastro').serializeArray();
                     $.each(other_data,function(key,input){
        form_data.append(input.name,input.value);
    });
                   
                    $.ajax({
                        url: '<?php echo base_url();?>requisicao/teste', // point to server-side controller method
                        dataType: 'text', // what to expect back from the server
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: form_data,
                        type: 'post',
                        success: function (response) {
                            $('#msg').html(response); // display success response from the server
                        },
                        error: function (response) {
                            $('#msg').html(response); // display error response from the server
                        }
                    });

   return false;

 }

});
	
    $("#foto").fileinput({
        language: "pt",
        showUpload: false,
        showCaption: false,
        resizeImage: true,
        maxImageWidth: 200,
        maxImageHeight: 200,
        resizePreference: 'width',
        footer: false,
        overwriteInitial: false,
        initialPreviewAsData: true,
        initialPreviewAsData: true, // identify if you are sending preview data only and not the raw markup
        initialPreviewFileType: 'image' // image is the default and can be overridden in config below


    });

function limpa_formulário_cep() {
                        //Limpa valores do formulário de cep.
                        document.getElementById('cdaluno_endereco').value = "";
                        document.getElementById('cdaluno_bairro').value = "";
                        document.getElementById('cdaluno_cidade').value = "";
                        //document.getElementById('uf').value=("");
                        //document.getElementById('ibge').value=("");
                    }

                    function meu_callback(conteudo) {
                        if (!("erro" in conteudo)) {
                            //Atualiza os campos com os valores.
                            document.getElementById('cdaluno_endereco').value = (conteudo.logradouro);
                            document.getElementById('cdaluno_bairro').value = (conteudo.bairro);
                            document.getElementById('cdaluno_cidade').value = (conteudo.localidade);
                            //document.getElementById('uf').value=(conteudo.uf);
                            //document.getElementById('ibge').value=(conteudo.ibge);
                        } //end if.
                        else {
                            //CEP não Encontrado.
                            limpa_formulário_cep();
                            alert("CEP não encontrado.");
                        }
                    }

                    function pesquisacep() {

                        //Nova variável "cep" somente com dígitos.
                        var valor = document.getElementById("cdaluno_cep").value;
                        var cep = valor;
                        //Verifica se campo cep possui valor informado.
                        if (cep != "") {

                            //Expressão regular para validar o CEP.
                            var validacep = /^[0-9]{8}$/;

                            //Valida o formato do CEP.
                            if (validacep.test(cep)) {

                                //Preenche os campos com "..." enquanto consulta webservice.
                                document.getElementById('cdaluno_endereco').value = "...";
                                document.getElementById('cdaluno_bairro').value = "...";
                                document.getElementById('cdaluno_cidade').value = "...";
                                // document.getElementById('uf').value = "...";
                                //document.getElementById('ibge').value = "...";

                                //Cria um elemento javascript.
                                var script = document.createElement('script');

                                //Sincroniza com o callback.
                                script.src = 'http://viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

                                //Insere script no documento e carrega o conteúdo.
                                document.body.appendChild(script);

                            } //end if.
                            else {
                                //cep é inválido.
                                limpa_formulário_cep();
                                alert("Formato de CEP inválido.");
                            }
                        } //end if.
                        else {
                            //cep sem valor, limpa formulário.
                            limpa_formulário_cep();
                        }
                    }
                    ;
</script>