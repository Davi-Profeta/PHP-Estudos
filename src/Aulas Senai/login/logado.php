<html>
<head>
<meta charset = "utf-8"/>
<title>Untitled Document</title>
<style type="text/css">
<!--
#fundo {
	    position:absolute;
	    width:100%;
	    height:98%;
	    z-index:1;
	    background-color: #D8D8D8;
	    top: 1%;
		border-radius: 17px;
       }
#title {
	    position: absolute;
	    left: 99%;
	    width: 0%;
	    height: 0%;
	    z-index: 0;
	    background-color: #CCCCCC;
	    top: 99%;
       }
#menu {
	       position: absolute;
	       left: 1%;
	       top: 2%;
	       width: 20%;
	       height: 96%;
	       z-index: 2;
	       z-index: 1;
	       background-color: #FFFFFF;
		   display: flex;
		   justify-content: left;
		   align-items: center;
		   padding: 0px;
		   border-radius: 8px;
		   border: 2px solid #3399cc;
          }
#conteudo {
	         position: absolute;
	         left: 22%;
	         top: 11%;
	         width: 77%;
	         height: 88%;
	         z-index: 3
            }
#sair {
	   position:absolute;
	   left:95%;
	   top:1%;
	   width:4%;
	   height:10%;
	   z-index:4;
      }
#consulta_aluno {
	             position:absolute;
	             left:2%;
	             top:1%;
	             width:8%;
	             height:10%;
	             z-index:5;
                }
				

li {
	 list-style-type: none;
	 padding: 20px 7px;
   }	
	  
   a:link {
	       font-size: 1.1em;
		   font-family: verdana;
		   text-decoration: none;
		   color: #4682B4;
          }	
		  
		  
   a:hover {
	        font-size: 1.1em;
		    font-family: verdana;
		    text-decoration: none;
		    color: #FF0000;
           }		  
				
-->
</style>


<script language="JavaScript">
 // Script para esconder o c�digo da p�gina
    function protegercodigo() {
    if (event.button==2||event.button==3){
        alert('Indisponivel');}
    }
    document.onmousedown=protegercodigo
</script>



<script type="text/javascript">
function noBack(){window.history.forward()}
noBack();
window.onload=noBack;
window.onpageshow=function(evt){if(evt.persisted)noBack()}
window.onunload=function(){void(0)}
</script>
</head>

<body>

<div id="fundo">
  <div id="consulta_aluno">
    	
  </div>
  <div id="sair">
   <a href="index.html" target="_parent"><img width="100%" height="100%" border="0" src="imagens/sair.png" /></a>
  </div>
  <div id="conteudo">
   <iframe name="conteudo" width="100%" height="100%" frameborder="0" scrolling="auto"></iframe>
  </div>
  <div id="menu">
    <ul>
	  <li> <a href = "pages/cadastro_turma.html" target = "conteudo">Cadastrar turma</a>
	  <li> <a href = "pages/cad_aluno.php" target = "conteudo">Cadastrar Aluno</a>
	  <li> <a href = "pages/consultar_aluno.php" target = "conteudo">Consultar Aluno</a>
	</ul>
  </div>
  <!--
  <div id="title" style="vertical-align:middle" align="center">
   <img width="100%" height="100%" src="../imagens/bemvindo.png"/>
  </div>
  -->
</div>
</body>
</html>
