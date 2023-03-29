
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Curriculo</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
      body{
        background-image: url('https://img.freepik.com/vetores-gratis/fundo-de-luzes-de-neon-de-formas-geometricas_23-2148435097.jpg?w=1380&t=st=1679335787~exp=1679336387~hmac=9c8d2af2793ae175150bfd969ecd4c170377722925ba16d47d212afce74c99df')
      }
       h2{
  text-align: center;
  margin-top: 0px;
  padding: 5px;
  color:black;      
}
      p{
  text-align: center;
  margin-top: 0px;
  padding: 5px;
  color:black;
          
}
    </style>
</head>
  <body>
    <h1 id="printDados">Cadastrar curriculo</h1>
    <section id="print">
   <?php
        // Recupera os dados do formulário enviado pelo usuário
        $nome = $_POST["nome"];
        $DataDeNascimento = $_POST["DataDeNascimento"];
        $Telefone = $_POST["Telefone"];
        $Email = $_POST["Email"];
        $Endereco = $_POST["Endereco"];
        $Numero = $_POST["Numero"];
        $Objetivo = $_POST["Objetivo"];
        $formacao = $_POST["formacao_lista"];
        $Experiencia = $_POST["Experiencia"];
        $Habilidades = $_POST["Habilidades"];
        $Genero = $_POST["Genero"];
        $EstadoCivil = $_POST["EstadoCivil"];

//retorna os dados do formulario enviado pelos usuarios.


        // Imprime as informações do currículo
        echo "<h2>Nome:$nome</h2>";
echo "<h2>Data de nascimento:$DataDeNascimento</h2>";
echo "<h2>Telefone:$Telefone</h2>";
        echo "<h2>E-mail:$Email</h2>";
        echo "<h2>Endereço:$Endereco</h2>";
echo "<h2>Numero:$Numero</h2>";
       
    ?>
    
    <hr>
    <?php
       
//Declarando a variável que vai receber o conteúdo da lista
        $areaDeInteresse = null;
        
        //Verificamos se o índice existe
        if (isset($_POST['areaDeInteresse']))
        
            //Atribuimos a variável todo conteúdo do índice
            $areaDeInteresse = $_POST['areaDeInteresse'];
        
        //Verificamos se a variável não é nula
        if ($areaDeInteresse !== null)
        
            //Percorremos todos os conteúdos do array
            for ($i = 0; $i < count($areaDeInteresse); $i++)
            
                //exibimos o valor atual na tela
        
                echo "<p class='areaDeInteresse'>{$areaDeInteresse[$i]}</p>";

 echo "<h2>Objetivo: $Objetivo</h2>";
        echo "<h2>Formacao:$formacao</h2>";
        echo "<h2>Experiência:$Experiencia</h2>";
echo "<h2>Habilidades:$Habilidades</h2>";
?>
<hr>
    <?php
echo "<h2>Genero:$Genero</h2>";
echo "<h2>Estado civil:$EstadoCivil</h2>";
?>
</section>
  </body>
</html>