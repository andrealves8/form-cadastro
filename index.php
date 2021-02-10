<!DOCTYPE html>
<html lang="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=uft-8" />
<title>CADASTRO DE ARTISTAS - SECULT</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  

<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
<style type="text/css">

.style1 {
	color: #FF0000;
	font-size:16px ;
}
.style3 {color: window; background-color:black; font-size: 18px; }

form {border:1px solid #000; float:left; padding:30px; margin-left:330px   }
</style>
<head>
<script type="text/javascript">
function validaCampo()
{
if(document.cadastro.nome.value=="")
	{
	alert("O Campo nome é obrigatório!");
	return false;
	}
else
	if(document.cadastro.cpf.value=="")
	{
	alert("O Campo CPF é obrigatório!");
	return false;
	}
else
	if(document.cadastro.telefone.value=="")
	{
	alert("O Campo telefone é obrigatório!");
	return false;
	}
else
	if(document.cadastro.categoria.value=="")
	{
	alert("O Campo categoria é obrigatório!");
	return false;
	}
else
return true;
}
<!-- Fim do JavaScript que validará os campos obrigatórios! -->
</script>
</head>
        
    <body bgcolor=#ccc>
        
        <h1><center>CADASTRO DE ARTISTAS - SECULT</center></h1>
<form id="cadastro" name="cadastro" method="post" enctype="multipart/form-data"
      action="cadastro.php" onsubmit="return validaCampo(); return false;">

<table width="625" border="0"> 
        
<tr>
    <td width="69">Nome:</td>
    <td width="546"><input name="nome" type="text" id="nome" size="60" maxlength="60" />
    <span class="style1">*</span></td>
</tr> 
<tr>
    <td width="69">CPF:</td>
    <td width="546"><input name="cpf" type="text" id="cpf" size="15" maxlength="60" />
    <span class="style1">*</span></td>
</tr> 
<tr>
    <td width="69">Telefone:</td>
    <td width="546"><input name="telefone" type="text" id="telefone" size="15" maxlength="60" />
    <span class="style1">*</span></td>
</tr> 
<tr>
    <td width="69">Endereço:</td>
    <td width="546"><input name="endereco" type="text" id="endereco" size="60" maxlength="60" />
</tr> 
<tr>
    <td width="69">Bairro:</td>
    <td width="546"><input name="bairro" type="text" id="bairro" size="60" maxlength="60" />
    </tr> 
<tr>
    <td width="69">Cidade:</td>
    <td width="546"><input name="cidade" type="text" id="cidade" size="60" maxlength="60" />
</tr> 
<tr>
      <td>Estado:</td>
      <td><select name="estado" id="estado">
        <option>Selecione...</option>
        <option value="AC">AC</option>
        <option value="AL">AL</option>
        <option value="AP">AP</option>
        <option value="AM">AM</option>
        <option value="BA">BA</option>
        <option value="CE">CE</option>
        <option value="ES">ES</option>
        <option value="DF">DF</option>
        <option value="MA">MA</option>
        <option value="MT">MT</option>
        <option value="MS">MS</option>
        <option value="MG">MG</option>
        <option value="PA">PA</option>
        <option value="PB">PB</option>
        <option value="PR">PR</option>
        <option value="PE">PE</option>
        <option value="PI">PI</option>
        <option value="RJ">RJ</option>
        <option value="RN">RN</option>
        <option value="RS">RS</option>
        <option value="RO">RO</option>
        <option value="RR">RR</option>
        <option value="SC">SC</option>
        <option value="SP">SP</option>
        <option value="SE">SE</option>
        <option value="TO">TO</option>
          </select>
</tr>
<tr>
    <td width="69">Categoria:</td>
    <td width="546"><input name="categoria" type="text" id="categoria" size="40" maxlength="60" />
        <span class="style1">*</span></td>
</tr> 
<tr>
    <td width="69">Foto:</td> 
    <td width="546"><input name="arquivo" type="file" id="foto" size="15" maxlength="60" />
    <span class="style1">*</span></td>
</tr> 

<tr>
      <td colspan="2"><p>
              
        <br><input name="cadastrar" type="submit" id="cadastrar" class="style3" value="Cadastrar" /> <br>
        <br/>
          <input name="limpar" type="reset" id="limpar" class="style3" value="Limpar Campos" />
          <br/>
          <br><span class="style1">Campos com (*) são obrigatórios!</span></p>
      <p>&nbsp; </p></td>
    </tr>

</form>

</body>
</html>
