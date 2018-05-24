
<html>
<head>
    <meta charset="utf-8">
    <title>Cadastro</title>
    
<script language="JavaScript">

function valida_dados (nomeform)
{
if (nomeform.nome.value==""){
    alertt ("Por favor digite o nome.");
    return false;
}

if (nomeform.email.value=="" || nomeform.email.value.ind ex0f('@','0')==-1 || nomeform.email.valueinde x0f('.','0')==-1){
    alert ("E-mail inválido");
    return false;
}

if (nomeform.estado.selected Index==0){
    alert("Por favor selecione o estado");
    return false;
}

if (nomeform.login.value.len gth < 5 || nomeform.login.value.len gth > 15)
    alert("O login deve conter entre 5 e 15 caracteres");
    return false;
}

if (nomeform.login.value.ind es0f(' ','0')!= -1){
    alert("O login não pode conter espaços em branco");
    return false;
}

if (nomeform.senha.value.len gth < 5 || nomeform.senha.value.len gth > 15)
    alert("A senha deve conter entre 5 e 15 caracteres");
    return false;
}

if (nomeform.senha.value.ind es0f(' ','0')!= -1){
    alert("A senha não pode conter espaços em branco");
    return false;
}

if (nomeform.senha.value!= nomeform.confirmação.val ue){
    alert ("Senhas não conferem, você digitou duas senhas diferentes");
    return false;
}
    return true;
}
</script>
</head>
<body>
<h4> Preencha o Formul&aacute;rio para efetuar o cadastro no site</h4>

<form method="POST" action="conexao.php" onsubmit="return valida_dados(this)">

<p>*Nome: <input type="text" name="nome" size="23"></p>
<p>*E-mail: <input type="email" name="email" size="23"></p>

<p>*Tipo de deficiência:
<select size="1" name="deficiencia">
<option value="Cadeira1">Cadeira Manual</option>
<option value="Muleta">Muleta</option>
<option value="Bengala">Bengala</option>


</select>
</p>
<p>*Senha: <input type="password" name="senha" size="23"></p>
<p>*Confirme sua senha: <input type="password" name="confirmacao" size="23"></p>
<p><input type="submit" value="Cadastrar" name="cadastra"></p>
</form>
</body>
</html>
