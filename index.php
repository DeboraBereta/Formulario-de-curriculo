<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
    <title>Curriculo</title>
</head>
  <body>
   <form method="POST" action="printCurriculo.php">
        <h1>Dados do Currículo</h1>
     
        <label for="nome">Nome completo:</label>
        <input type="text" name="nome" required>

        <label for="DataDeNascimento">Data de Nascimento:</label>
        <input type="date" name="DataDeNascimento" required>

<label>
  <!--A label especifica o "rotulo do que será posto no input-->
        <label for="Telefone">Telefone:</label>
        <input type="text" name="Telefone" required>
     <!--A label especifica o "rotulo do que será posto no input-->
        <label for="Email">E-mail:</label>
        <input type="email" name="Email" required>
<!--A label especifica o "rotulo do que será posto no input-->
        <label for="Endereco">Estado:</label>
        <input type="text" name="Endereco" required>
<!--A label especifica o "rotulo do que será posto no input-->
        <label for="Numero">cidade:</label>
        <input type="text" name="Numero" required>

   <!-- Area de atuação -->
          <p><label>Area de atuação:</label></p>
          
        <section>
          <!-- Opções -->
          <!--A label especifica o "rotulo do que será marcado-->
              <label>
        			<input type="checkbox" id="HelpDesk" name="areaDeAtuacao" value="HelpDesk" >
        			Help Desk</label>
        <!--A label especifica o "rotulo do que será será marcado-->
        		  <label>
        			<input type="checkbox" id="Analise" name="areaDeAtuacao" value="Analise">
        			 Analise</label>
        <!--A label especifica o "rotulo do que será será marcado-->
        		  <label>
        			<input type="checkbox" id="CientistaDeDados" name="areaDeAtuacao" value="CientistaDeDados"> Cientista De Dados</label>
        <!--A label especifica o "rotulo do que será será marcado-->
        		  <label>
        			<input type="checkbox" id="Dev" name="areaDeAtuacao" value="Dev">
        			Desenvolvedor de sistemas</label>
        </section>
<!-- coloca uma linha horizontal-->
        <hr>
  
<!--A label especifica o "rotulo do que será posto no textearea-->
        <label for="Objetivo">Objetivo:</label>
        <textarea name="Objetivo" required></textarea>

         <!-- formação -->
        <label for="formacao">Formação:</label>
        <?php
            //array das formações.
            $formacao[0]="Selecione";
            $formacao[1]="Ensino Fundamental incompleto";
            $formacao[2]="Ensino Fundamental completo";
            $formacao[3]="Ensino médio incompleto";
            $formacao[4]="Ensino médio completo";
            $formacao[5]="Ensino médio técnico";
            $formacao[6]="Técnico";
            $formacao[7]="Graduação tecnólogo";
            $formacao[8]="Graduação bacharelado";
            $formacao[9]="Pós graduação";
            $formacao[10]="Mestrado";
            $formacao[11]="Doutorado";
            $formacao[12]="Pós doutorado";
            
        ?>
        <!--opção de seleção da lista de formação-->
        <select id="formacao" name="formacao_lista">
          <!-- lista da formação -->
            <?php foreach ($formacao as $value) {
                ?>
                
                <option id= "<?php echo $value;?>" value="<?php echo $value; ?>" > <?php echo $value;?> </option>

                <?php
                    }
                ?>
              </select>
  <!--A label especifica o "rotulo do que será posto no textearea-->
        <label for="instituicao">Instituição de ensino:</label>
        <textarea name="instituicao" required></textarea>
<!--A label especifica o "rotulo do que será posto no textearea-->
        <label for="Experiencia">Experiência:</label>
        <textarea name="Experiencia" required></textarea>
  <!--A label especifica o "rotulo do que será posto no textearea-->
        <label for="Habilidades">Habilidades:</label>
        <textarea name="Habilidades" required></textarea>

   <!-- Estado civil -->
          <p><label>Estado civil:</label></p>
          
        <section>
          <!-- Opções -->
          <!--A label especifica o "rotulo do que será será marcado-->
              <label>
        			<input type="radio" id="solteiro" name="EstadoCivil" value="solteiro" required>
        			Solteiro(a)</label>
        <!--A label especifica o "rotulo do que será será marcado-->
        		  <label>
        			<input type="radio" id="casado" name="EstadoCivil" value="casado">
        			 Casado(a)</label>
        <!--A label especifica o "rotulo do que será será marcado-->
        		  <label>
        			<input type="radio" id="divorciado" name="EstadoCivil" value="divorciado"> Divorciado(a)</label>
        <!--A label especifica o "rotulo do que será será marcado-->
        		  <label>
        			<input type="radio" id="viuvo" name="EstadoCivil" value="viuvo">
        			Viúvo(a)</label>
        </section>
<!-- coloca uma linha horizontal-->
        <hr>
        
        <!-- genero -->
        
          <p><label>Gênero:</label></p>

        <section>
          <!-- opções -->
 <label>
        			<input type="radio" id="mulher" name="Genero" value="mulher" required>
        			Mulher</label>
          
 <label>
        			<input type="radio" id="homem" name="Genero" value=homem" required>
        			Homem</label>
          
        		<label for="radio">
        			<input type="radio" id="mulhertrans" name="Genero" value="mulher trans">
        			Mulher transgênero</label>
        
        		  <label>
        			<input type="radio" id="homemtrans" name="Genero" value="homem trans">
        			Homem transgênero</label>

 <label>
        			<input type="radio" id="naobinario" name="Genero" value="nao binario" required>
        			Não binario</label>
          
              <label>
              <input type="radio" id="outro" name="Genero" value="outro">
        			Outro</label>

              <label>
              <input type="radio" id="naoresponder" name="Genero" value="sem resposta">
        			Prefiro não responder</label>
        </section>
        
<hr>
        <input type="submit" value="Enviar">
    </form>
  </body>
</html>