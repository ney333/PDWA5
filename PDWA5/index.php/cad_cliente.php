<?php
include_once '../conexao/conexao.php';
?>
<div class="titulo-cadastros on-off"> <img src="../img/cad.jpg" height="30" width="30">Cadastro de Clientes</div><br/>
	
	<div class="container-img">
	<div class="container-cadastros">
	
	<fieldset class="fieldset-cliente">
	
	<table width="100%" border="0" cellspacing="" cellpadding="3">	
	<tr>
	<div class="subtitulo-cadstro">Dados Cadastrais:</div><br/>

	<form name="formCadastro" id="formulario" method="post" action="cad_cliente.php" onsubmit="return(tipo,nome,cpf,Rg,cnpj,Endereco,Numero,Bairro,Cidade,CEP,'formulario','erroFormulario','field')"/>
	<fieldset id="field" style="display:none;wigth:10px;height:40px;background-color:#ececec">
	<label id="erroFormulario"></label>
	</fieldset>
		Nome:<br/>
	<input type="text"  name="nome" id="nome" size="60" onkeyup="mudarTamanho(this)" /><br/>
                CPF: <br/><input type="text" name="txtCpf" id="cpf"  title="Gravar Cliente" onblur="valida_cpf(cpf)" onkeypress="mascara_cpf(this)"/>
	 <label id="Cpfl"> </label><br/>
                Endereco:<br/>
	<input type="text" name="endereco" id="Endereco" size="40" onkeyup="mudarTamanho(this)"><br/>
                Numero.:<br/>
	<input type="text" name="numero" id="Numero" size="10"><br/>
                Bairro:<br/>
	<input type="text" name="bairro" id="Bairro" size="40"onkeyup="mudarTamanho(this)"><br/>
                Cidade:<br/>
	<input type="text"  name="cidade" id="Cidade" size="25"onkeyup="mudarTamanho(this)"><br/>
                Estado:<br/>
	<select name="uf" id="Estado">
	<option value="Acre">Acre</option> 
	<option value="Alagoas">Alagoas</option> 
	<option value="Amap&aacute;">Amap&aacute;</option> 
	<option value="Amazonas">Amazonas</option> 
	<option value="Bahia">Bahia</option>
	<option value="Cear&aacute;">Cear&aacute;</option> 
	<option value="Distrito Federal">Distrito Federal</option> 
	<option value="Esp&iacute;rito Santo">Esp&iacute;rito Santo</option> 
	<option value="Goi&aacute;s">Goi&aacute;s</option> 
	<option value="Maranh&atilde;o">Maranh&atilde;o</option> 
	<option value="Mato Grosso">Mato Grosso</option> 
	<option value="Mato Grosso do Sul">Mato Grosso do Sul</option> 
	<option value="Minas Gerais">Minas Gerais</option> 
	<option value="Par&aacute;">Par&aacute;</option> 
	<option value="Para&iacute;ba">Para&iacute;ba</option> 
	<option value="Paran&aacute;">Paran&aacute;</option> 
	<option value="Pernambuco">Pernambuco</option> 
	<option value="Piau&iacute;">Piau&iacute;</option> 
	<option value="Rio de Janeiro">Rio de Janeiro</option> 
	<option value="Rio Grande do Norte">Rio Grande do Norte</option> 
	<option value="Rio Grande do Sul">Rio Grande do Sul</option> 
	<option value="Rond&ocirc;nia">Rond&ocirc;nia</option> 
	<option value="Ror&acirc;ima">Ror&acirc;ima</option> 
	<option value="Santa Catarina">Santa Catarina</option> 
	<option value="S&atilde;o Paulo">S&atilde;o Paulo</option> 
	<option value="Sergipe">Sergipe</option> 
	<option value="Tocantins">Tocantins</option>
	</select><br/>
                CEP.:<br/>
	<input type="text" name="ceo" id="CEP" size="25" onkeypress="mascara_Numero(this,'errocepj','Apenas N�mero')"><label id="errocepj"></label><br/><br/>
	<div class="subtitulo-cadstro">Dados para contato:</div><br/>
                Telefone:<br/>
	<input type="text" name="tel" id="Telefone" size="20" onkeypress=" mascaraTelefone(this)"><br/>
                Celular:<br/>
	<input type="text" name="cel" id="Celular" size="20"><br/>
                E-mail:<br/>
	<input type="text" name="email" id="E-mail" size="60" onkeyup="mudarTamanho(this)"><br/><br/><br/>
                Defina sua senha:<br/>
                <br/>Senha:<br/>
        <input type="password" name="senha1" id="valor1" size="45"/><br/>
                Confirmar Senha:<br/>
        <input type="password" name="senha2" id="valor2" size="45" onblur="mascaraSenha(txtSenha1,txtSenha2,'erro')"/><label id="erro"></label><br/><br/>
	
	<button name="salvar" id="salvar" value="salvar" type="submit" title="Salvar Cliente" onclick="confirm('Cadastro realizado com sucesso!')">    
      Salvar
    </button>
    <button name="cancelar" name="btnCancelar" id="Cancelar" value="cancelar" type="submit" title="Cancelar Cadastro" onclick="confirm('Deseja  Realmente cancelar!')">    
      Cancelar
    </button>
		<br/><br/>
	
	</tr>
	</table>	