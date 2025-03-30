<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta name="theme-color" content="#f4434">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formúlario</title>
</head>
<style>
body{margin: auto;align-items: center;justify-content: center;text-align: center;background: linear-gradient(to right,blue,black,blue);}
h1{white-space:nowrap;text-decoration:underline;text-shadow:9px;cursor:grabbing;font-size: 30px;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style:oblique;color:white;}
h2{white-space:nowrap;text-decoration:none;text-shadow:9px;cursor:grabbing;font-size:16px;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-style:italic;color:black;}
p{white-space:none;text-decoration:none;text-shadow:9px;cursor:grabbing;font-size: 15px;font-family:Arial, Helvetica, sans-serif;font-style: inherit;color:whitesmoke;}
a{text-decoration: none;border-radius: 10px 10px;text-shadow: 9px;font-size: 16px;font-family: Arial, Helvetica, sans-serif;font-style: oblique;cursor: auto;}
footer:hover{transition: ease s;transform: scale(1.04);}
nav:hover{transition: ease s;transform: scale(1.05);}
summary:hover{transition: ease s;transform: scale(1.07);}
footer{cursor:grab;align-items: center;justify-content: center;text-align: center;margin: auto;border-radius: 10px 10px;padding: 30px;background-color:darkred;border: 5px solid whitesmoke;box-shadow: 5px 5px 5px black;width:300px;}
nav{cursor:grab;align-items: center;justify-content: center;text-align: center;margin: auto;border-radius: 10px 10px;padding: 30px;background-color:darkblue;border: 5px solid whitesmoke;box-shadow: 5px 5px 5px black;width:300px;}
summary{width: 100px;margin: auto;border-radius: 10px 10px;padding: 5px;background-color: white;color: red;border: 3px solid blue;box-shadow: 4px 4px 4px black;font-size: 16px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;cursor: grab;}
form{margin: auto;align-items: center;justify-content: center;text-align: center;display: flex;flex-direction: column;}
fieldset{cursor: grabbing;width: 300px;margin: auto;border-radius: 10px 10px;padding: 15px;display: flex;flex-direction: column;align-items: center;justify-content: center;text-align: center;background-color: whitesmoke;border: 4px solid red;box-shadow: 5px 5px 5px black;}
label{padding: 20px;text-shadow: 9px;text-decoration: none;color: black;display: flex;flex-direction: column;align-items: center;justify-content: center;text-align: center;font-size: 20px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;cursor: text;}
.color1{gap:6px;padding:10px;white-space:nowrap;margin:auto;width:850px;border-radius:10px 10px;padding:6px;background-color:darkslateblue;border:4px solid whitesmoke;box-shadow:5px 5px 5px black;cursor: grabbing;}
.color2{gap:6px;padding:10px;white-space:nowrap;margin:auto;width:850px;border-radius:10px 10px;padding:6px;background-color:darkgoldenrod;border:4px solid whitesmoke;box-shadow:5px 5px 5px black;cursor: grabbing;}
.color3{gap:6px;padding:10px;white-space:nowrap;margin:auto;width:850px;border-radius:10px 10px;padding:6px;background-color:darkmagenta;border:4px solid whitesmoke;box-shadow:5px 5px 5px black;cursor: grabbing;}
.color4{gap:6px;padding:10px;white-space:nowrap;margin:auto;width:850px;border-radius:10px 10px;padding:6px;background-color:darksalmon;border:4px solid whitesmoke;box-shadow:5px 5px 5px black;cursor: grabbing;}
input{margin: auto;width: 300px;border-radius: 10px 10px;padding: 4px;text-align: left;text-shadow: 9px;cursor: auto;display: flex;flex-direction: column;color: black;background-color: whitesmoke;border: 4px solid blue;box-shadow: 3px 3px 3px black;font-size: 16px;font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;font-style: oblique;}
select{width: 200px;margin: auto;border-radius: 10px 10px;padding: 5px;background-color: black;color: yellow;border: 4px solid white;box-shadow: 5px 5px 5px black;font-size: 20px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;cursor: grabbing;}
textarea{height: 200px;width: 300px;margin: auto;border-radius: 10px 10px;padding: 5px;font-size: 16px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-style: oblique;background-color: bisque;color: black;border: 3px solid black;cursor: grabbing}
button{cursor: progress;width: 280px;margin: auto;border-radius: 10px 10px;padding: 5px;background-color: blue;color: white;border: 3px solid white;box-shadow: 5px 5px 5px black;font-size: 20px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;}
</style>
<body>
<h1><big>Formulário</big></h1>
<br>
<p id="wrap"></p>
<br>
<p id="script"></p>
<br>
<p id="text"></p>
<br>
<p id="input"></p>
<br>
<br>
<div id="text"><details><summary style="width:300px;background-color:blue;color:white;border:3px solid white;box-shadow:4px 4px 4px black;">Formulário</summary>
<form action="form.php" method="post">
<header><h1><big>Cadastro de <b style="color: red;">BRS</b></big></h1></header>
<br>
<fieldset>
<label for="Nome">Nome</label>
<input type="text" name="nome" id="Nome" title="Digite o seu Nome;" placeholder="Exemplo: Guilherme Barbosa da Silva;" maxlength="30" max="30" required>
<label for="Idade">Idade</label>
<input type="number" name="idade" id="Idade" title="Digite a sua Idade;" placeholder="Exemplo: 23 ou 39 anos ??;" maxlength="30" max="30" required>
<label for="Cpf">Cpf</label>
<input type="text" name="cpf" id="Cpf" title="Digite o seu Cpf;" placeholder="Exemplo: 503.552.748-41;" maxlength="30" max="30" required>
<label for="RG">RG</label>
<input type="text" name="rg" id="RG" title="Digite o seu RG;" placeholder="Exemplo: 53.742.867-7;" maxlength="30" max="30" required>
<label for="Sexo">Sexo</label>
<select name="genero" id="sexo" required style="width: 170px;font-size:14px;background-color:white;color:black;border:3px solid red;box-shadow:4px 4px 4px black;">
<option value="" selected disabled>Selecione</option>
<option value="Masculino">Masculino</option>
<option value="Feminino">Feminino</option>
<option value="Agênero">Agênero</option>
<option value="Bigênero">Bigênero</option>
<option value="Transgênero">Transgênero</option>
<option value="Cisgênero">Cisgênero</option>
</select>
<br>
<label for="Email">Email</label>
<input type="email" name="email" id="Email" title="Digite o seu Email;" placeholder="Exemplo: guilherme8876sk@gmail.com;" maxlength="30" max="30" required>
<label for="Telefone">Telefone</label>
<input type="tel" name="telefone" id="Telefone" title="Digite o seu Telefone;" placeholder="Exemplo: (11) 98341-7590;" maxlength="30" max="30" required>
<label for="Endereço">Endereço</label>
<input type="text" name="endereco" id="Endereço" title="Digite o seu Endereço;" placeholder="Exemplo: AV rio das pedras Nª4100;" maxlength="30" max="30" required>
<label for="Cep">Cep</label>
<input type="text" name="cep" id="Cep" title="Digite o seu Cep;" placeholder="Exemplo: 03936-000;" maxlength="30" max="30" required>
<label for="Estado civil">Estado civil</label>
<select name="estado_civil" id="Estado civil" required style="width:160px;padding:3px;font-size:13px;background-color:black;color:white;border:3px solid white;box-shadow:4px 4px 4px black;">
<option value="" selected disabled>Selecione</option>
<option value="Solteiro">Solteiro</option>
<option value="Casado">Casado</option>
<option value="Divorciado">Divorciado</option>
<option value="Separado">Separado</option>
<option value="Víuvo">Víuvo</option>
<option value="Compromissado">Compromissado</option>
</select>
<br>
<label for="Altura">Altura</label>
<select name="altura" required id="Altura" style="width:140px;font-size:14px;padding:3px;background-color:brown;color:white;border:3px solid white;box-shadow:4px 4px 4px black;">
<option value="" selected disabled>Selecione</option>
<option value="1.50 cm">1.50 cm</option>
<option value="1.60 cm">1.60 cm</option>
<option value="1.70 cm">1.70 cm</option>
<option value="1.80 cm">1.80 cm</option>
<option value="1.90 cm">1.90 cm</option>
<option value="2.00 cm">2.00 cm</option>
</select>
<br>
<label for="Nível">Nível</label>
<input type="range" name="nivel" id="Nível" title="Digite o seu Nível;" placeholder="Exemplo: +/-;" maxlength="30" max="30" required>
<label for="Cor">Cor</label>
<input type="color" name="cor" id="Cor" title="Digite o seu Cor;" placeholder="Exemplo: branco ou negro;" maxlength="30" max="30" required>
<br>
<br>
<h2><big>Qual o seu nível de conhecimento ?</big></h2>
<br>
<div class="summary"><div id="text"><details><summary>Qual?</summary>
<br>
<div class="color1">
<label for="Aprendiz" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Aprendiz</label>
<input type="radio" name="conhecimento" value="Aprendiz" required>
<label for="Iniciante" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Iniciante</label>
<input type="radio" name="conhecimento" value="Iniciante" required>
<label for="Jovem" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Jovem</label>
<input type="radio" name="conhecimento" value="Jovem" required>
<label for="Mediano" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Mediano</label>
<input type="radio" name="conhecimento" value="Mediano" required>
<label for="Intermediário" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Intermediário</label>
<input type="radio" name="conhecimento" value="Intermediário" required>
<label for="Avançado" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Avançado</label>
<input type="radio" name="conhecimento" value="Avançado" required>
<label for="Profissional" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Profissional</label>
<input type="radio" name="conhecimento" value="Profissional" required>    
</div>
</details></div></div>
<br>
<br>
<h2><big>Qual o seu nível de experiência ?</big></h2>
<br>
<div class="summary"><div id="text"><details><summary>Qual?</summary>
<br>
<div class="color2">
<label for="Iniciante" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Iniciante</label>
<input type="radio" name="experiencia" value="Iniciante" required>
<label for="Jovem" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Jovem</label>
<input type="radio" name="experiencia" value="Jovem" required>
<label for="Aprendiz" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Aprendiz</label>
<input type="radio" name="experiencia" value="Aprendiz" required>
<label for="Intermediário" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Intermediário</label>
<input type="radio" name="experiencia" value="Intermediário" required>
<label for="Mediano" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Mediano</label>
<input type="radio" name="experiencia" value="Mediano" required>
<label for="Avançado" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Avançado</label>
<input type="radio" name="experiencia" value="Avançado" required>
<label for="Profissional" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Profissional</label>
<input type="radio" name="experiencia" value="Profissional" required>    
</div>
</details></div></div>
<br>
<br>
<h2><big>Qual o seu nível social ?</big></h2>
<br>
<div class="summary"><div id="text"><details><summary>Qual?</summary>
<br>
<div class="color3">
<label for="Conhecido" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Conhecido</label>
<input type="radio" name="nivel_social" value="Conhecido" required>
<label for="Desconhecido" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Desconhecido</label>
<input type="radio" name="nivel_social" value="Desconhecido" required>
<label for="Aprendiz" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Aprendiz</label>
<input type="radio" name="nivel_social" value="Aprendiz" required>
<label for="Flûente" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Flûente</label>
<input type="radio" name="nivel_social" value="Flûente" required>
<label for="Influênte" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Influênte</label>
<input type="radio" name="nivel_social" value="Influênte" required>
<label for="Famosinho" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Famosinho</label>
<input type="radio" name="nivel_social" value="Famosinho" required>
<label for="Tiktoker" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Tiktoker</label>
<input type="radio" name="nivel_social" value="Tiktoker" required>    
</div>
</details></div></div>
<br>
<br>
<h2><big>Qual o seu nível de classe social ?</big></h2>
<br>
<div class="summary"><div id="text"><details><summary>Qual?</summary>
<br>
<div class="color4">
<label for="Classe A" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Classe A</label>
<input type="radio" name="classe_social" value="Classe A" required>
<label for="Classe B" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Classe B</label>
<input type="radio" name="classe_social" value="Classe B" required>
<label for="Classe C" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Classe C</label>
<input type="radio" name="classe_social" value="Classe C" required>
<label for="Classe D" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Classe D</label>
<input type="radio" name="classe_social" value="Classe D" required>
<label for="Classe E" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Classe E</label>
<input type="radio" name="classe_social" value="Classe E" required>
<label for="Classe F" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Classe F</label>
<input type="radio" name="classe_social" value="Classe F" required>
<label for="Classe S" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:14px;color:white;">Classe S</label>
<input type="radio" name="classe_social" value="Classe S" required>
</div>
</details></div></div>
<br>
<br>
<h2><big>Qual é o seu Signo ?</big></h2>
<br>
<div class="summary"><div id="text"><details><summary style="background-color: black;color:yellow;border:4px solid white;box-shadow:4px 4px 4px black;">Qual?</summary>
<br>
<select name="signo" id="signo" required>
<option value="" selected disabled>Selecione</option>
<option value="Ofiúco">Ofiúco</option>
<option value="Aquário">Aquário</option>
<option value="Câncer">Câncer</option>
<option value="Capricôrnio">Capricôrnio</option>
<option value="Libra">Libra</option>
<option value="Leão">Leão</option>
<option value="Sagitário">Sagitário</option>
<option value="Escorpião">Escorpião</option>
<option value="Gêmeos">Gêmeos</option>
<option value="Virgem">Virgem</option>
<option value="Touro">Touro</option>
<option value="Peixes">Peixes</option>
<option value="Áries">Áries</option>
</select>
</details></div></div>
<br>
<br>
<h2><big>Me fale sobre a sua experiencia</big></h2>
<br>
<textarea name="experience_text" id="experiencia" required rows="9"></textarea>
<br>
<br>
<button value="experiencia">Cadastre</button>
<br>
</fieldset>
<br>
<br>
<div class="nav">
<nav style="background-color:darkblue;">
<p>Retorne para minha <a href="index.php" target="_blank" rel="noopener" style="background-color: white;color:black;border:3px solid red;box-shadow:4px 4px 4px black;font-size:14px;font-family:franklin;font-style:oblique;text-shadow:9px;text-decoration:none;border-radius:10px 10px;cursor:grab;">1Página</a></p>
</nav>
</div>
<br>
<div class="footer">
<footer style="background-color:darkred;">
<p>@GuilhermeBarbosaDaSilva,todos os direitos autorais.</p>
</footer>
</div>
</form>
</details></div>
<script>
alert('Ola');
alert('Seja Bem vindo');
alert(222*222);
alert(111/111);
alert('Ao Formulário');
console.log('Welcome');
console.log('To word');
console.log(2222*222);
console.log(2212/2222);
document.write('Acesse meu form');
document.write('Acima');
document.write('Feito');
document.write('Cuidadosamente');
document.getElementById('wrap').innerHTML='Acesse';
document.getElementById('script').innerHTML='Meu';
document.getElementById('text').innerHTML='Form';
document.getElementById('input').innerHTML='Logo Abaixo';
function age()
{
console.log('Hello Word');
document.write('Digite seu nome')
document.getElementById('word').innerHTML='Olá mundo seja bem-vindo';
}
function idade()
{
console.log(11*11);
document.write(233/333)
document.getElementById('word').innerHTML='Olá mundo seja bem-vindo';
}
function map()
{
console.log('Welcome to word');
document.write('Digite a sua idade')
document.getElementById('word').innerHTML='Olá mundo seja bem-vindo';
}
function dip()
{
console.log('Seja bem vindo');
document.write('Digite seu endereço')
document.getElementById('word').innerHTML='Olá mundo seja bem-vindo';
}
</script>
<?php
$host='127.0.0.1';
$username='guibarbosasilva';
$dbname='bdadogui';
$password='';
$conn= mysqli_connect($host,$username,$password,$dbname);
$nome=$_POST['nome']??null;
$idade=$_POST['idade']??null;
$cpf=$_POST['cpf']??null;
$rg=$_POST['rg']??null;
$genero=$_POST['genero']??null;
$email=$_POST['email']??null;
$telefone=$_POST['telefone']??null;
$endereco=$_POST['endereco']??null;
$cep=$_POST['cep']??null;
$estado_civil=$_POST['estado_civil']??null;
$altura=$_POST['altura']??null;
$nivel=$_POST['nivel']??null;
$cor=$_POST['cor']??null;
$conhecimento=$_POST['conhecimento']??null;
$experiencia=$_POST['experiencia']??null;
$nivel_social=$_POST['nivel_social']??null;
$classe_social=$_POST['classe_social']??null;
$signo=$_POST['signo']??null;
$experience_text=$_POST['experience_text']??null;
$sql = "INSERT INTO guibarbosasilva (nome, idade, cpf, rg, genero, email, telefone, endereco, cep, estado_civil, altura, nivel, cor, conhecimento, experiencia, nivel_social, classe_social, signo, experience_text)
VALUES ('$nome','$idade','$cpf','$rg','$genero','$email','$telefone,'$endereco','$cep','$estado_civil','$altura','$nivel','$cor','$conhecimento','$experiencia','$nivel_social','$classe_social','$signo','$experience_text');"
?>
</body>
</html>