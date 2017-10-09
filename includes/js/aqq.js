          
    function optionCheck(iduser,idcurso, tipo){
        

                 id = iduser;
                 curso = idcurso;
               var r;
                $.post('SvEvento', {
                        iduser : id,
                        idcurso : curso,
                        t : tipo
                       
                }, function(responseText) {
                      // $('#semestre').text(responseText);
                       r = responseText;
                    
                      // location.href="admAluno.jsp";
                     $('#'+ idcurso).slideDown("slow");
                          if(r === "1" && tipo === "ad"){
                        
                       document.getElementById("a"+idcurso).className = "alert-success";       
                       document.getElementById("a"+idcurso).innerHTML = "<span class='glyphicon glyphicon-ok'>Inscrito</span>";
                      //document.getElementById(idcurso).innerHTML = "<a style='cursor:pointer;' onclick=\"optionCheck("+iduser+","+idcurso+",'rm')\"><span class=\"glyphicon glyphicon-remove\"></span></a>";
                         setTimeout ("ocultaraa("+iduser+","+idcurso+")",5000);
                          }else{
                              if(tipo === "ad"){
                              dd = document.getElementById(idcurso).valueOf();
                              document.getElementById("a"+(idcurso)).className = "alert-danger";
                              document.getElementById("a"+(idcurso)).innerHTML = "<span class='glyphicon glyphicon-ok'>Erro! Tente novamente</span>";
                              setTimeout (ocultara(iduser,idcurso) ,5000);
                          }
                              }
                         if(r === "3" && tipo === "rm"){
                       document.getElementById("a"+(idcurso)).className = "alert-warning"; 
                       document.getElementById("a"+(idcurso)).innerHTML = "<span class=\"glyphicon glyphicon-remove\"></span>";
                       document.getElementById("a"+(idcurso)).innerHTML = "<span class='glyphicon glyphicon-ok'>Liberou a vaga</span>";
                        setTimeout ("ocultara("+iduser+","+idcurso+")",5000);
                          }else{
                              if(tipo === "rm"){
                              dd = document.getElementById(idcurso).valueOf();
                              document.getElementById("a"+(idcurso)).className = "alert-danger";
                              document.getElementById("a"+(idcurso)).innerHTML = "<span class='glyphicon glyphicon-ok'>Erro ao remover!</span>";

                              }
                              
                            if(r === "4" && tipo === "pr"){
                       document.getElementById("p"+(idcurso)).className = "alert-warning"; 
                       document.getElementById("p"+(idcurso)).innerHTML = "<span class=\"glyphicon glyphicon-remove\"></span>";
                       document.getElementById("p"+(idcurso)).innerHTML = "<span class='glyphicon glyphicon-ok'>Não é mais</span>";
                        setTimeout ("ocultarp("+iduser+","+idcurso+")",5000);
                          }else{
                              if(tipo === "pr"){
                              dd = document.getElementById("p"+(idcurso)).valueOf();
                              document.getElementById("p"+(idcurso)).className = "alert-danger";
                              document.getElementById("p"+(idcurso)).innerHTML = "<span class='glyphicon glyphicon-ok'>Erro ao remover!</span>";

                              }
                          }
                            if(r === "5" && tipo === "pa"){
                       document.getElementById("p"+(idcurso)).className = "alert-success"; 
                       document.getElementById("p"+(idcurso)).innerHTML = "<span class=\"glyphicon glyphicon-remove\"></span>";
                       document.getElementById("p"+(idcurso)).innerHTML = "<span class='glyphicon glyphicon-ok'>Adicionado</span>";
                        setTimeout ("ocultarpa("+iduser+","+idcurso+")",5000);
                          }else{
                              if(tipo === "pa"){
                              dd = document.getElementById("p"+(idcurso)).valueOf();
                              document.getElementById("p"+(idcurso)).className = "alert-danger";
                              document.getElementById("p"+(idcurso)).innerHTML = "<span class='glyphicon glyphicon-ok'>Erro ao adicionar!</span>";

                              }
                          }
    }   
    });
    





       
    }
    
function ocultara(id,curso){
            //$('#'+ curso).slideUp("slow");
            document.getElementById("a"+(curso)).className = "";
            document.getElementById("a"+(curso)).innerHTML = 
          "<a   onclick=\"optionCheck("+id+","+curso+",'ad')\" style='cursor:pointer;' ><i class='glyphicon glyphicon-user'></i></a>";
          //  document.getElementById("p"+(curso)).innerHTML = "<span class=\"glyphicon glyphicon-remove\">PalestrÃ¡r</span>";

            }
function ocultaraa(id,curso){
            //$('#'+ curso).slideUp("slow");
            document.getElementById("a"+(curso)).className = "alert-success";
            document.getElementById("a"+(curso)).innerHTML = 
          "<a   onclick=\"optionCheck("+id+","+curso+",'rm')\" style='cursor:pointer; color:#fff' ><i class='glyphicon glyphicon-user' >Sair do evento!</i></a>";
          //  document.getElementById("p"+(curso)).innerHTML = "<span class=\"glyphicon glyphicon-remove\">PalestrÃ¡r</span>";

            }
    
    
    
function ocultarp(id,curso){
            //$('#'+ curso).slideUp("slow");
            document.getElementById("p"+(curso)).className = "";
            document.getElementById("p"+(curso)).innerHTML = 
          "<a   onclick=\"optionCheck("+id+","+curso+",'pa')\" style='cursor:pointer;' ><i class='glyphicon glyphicon-user'></i></a>";
          //  document.getElementById("p"+(curso)).innerHTML = "<span class=\"glyphicon glyphicon-remove\">PalestrÃ¡r</span>";

            }
function ocultarpa(id,curso){
            //$('#'+ curso).slideUp("slow");
            document.getElementById("p"+(curso)).className = "alert-success";
            document.getElementById("p"+(curso)).innerHTML = 
          "<a   onclick=\"optionCheck("+id+","+curso+",'pr')\" style='cursor:pointer; color:#fff' ><i class='glyphicon glyphicon-user' >Sair do evento!</i></a>";
          //  document.getElementById("p"+(curso)).innerHTML = "<span class=\"glyphicon glyphicon-remove\">PalestrÃ¡r</span>";

            }


function ocultar(id,curso){
            //$('#'+ curso).slideUp("slow");
            document.getElementById("p"+(curso)).className = "";
            document.getElementById("p"+(curso)).innerHTML = 
          "<a onclick=\"optionCheck("+id+","+curso+",'ad')\" style='cursor:pointer;' ><i class=\"glyphicon glyphicon-user\"></i></a>";

            }
