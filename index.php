<?php
  $pontuacao = 0;

  for ($i=1; $i <= 5; $i++) {
    $pontuacao += $_POST['pergunta' . $i];
  }

  if ($pontuacao >= 5 && $pontuacao < 10) {
    $mensagem = "Seu projeto tem mais perfil de ser executado pelos métodos tradicionais da FCamara";
  } elseif ($pontuacao > 9 && $pontuacao < 18) {
    $mensagem = "Seu projeto pode ser feito pelo hpteam, o time de alta performance da FCamara";
  } elseif ($pontuacao > 17 && $pontuacao <= 25) {
    $mensagem = "Seu projeto tem total aderência com o hpteam, o time de alta performance da FCamara";
  }

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Home</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" />
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <!-- Formulário de vários passos -->
  <form id="msform" action="" method="post">
    <!-- Barra de progresso -->
    <?php if ($pontuacao == 0) { ?>
    <ul id="progressbar">
      <li class="active">Vamos começar?</li>
      <li>Passo 2</li>
      <li>Passo 3</li>
      <li>Passo 4</li>
      <li>Passo 5</li>
      <li>Passo 6</li>
      <li>Resultado</li>
    </ul>
    <!-- Perguntas -->
    <fieldset>
      <h2 class="fs-title">Precisa de um desenvolvimento de software e não sabe por onde começar?</h2>
      <h3 class="fs-subtitle">Siga esse roteiro e saiba como você pode chegar nos resultados mais rápido e fácil do que você imagina!</h3>

      <input type="text" name="nome" placeholder="Nome Completo" required type="text"/>
      <input type="email" name="email" placeholder="Email" required type="email"/>
      <input type="button" name="Próximo" class="next action-button" value="Começar!" />
    </fieldset>
    <fieldset>
      <h2 class="fs-title">Passo 2</h2>
      <h3 class="fs-subtitle">Você precisa de ajuda para definir a melhor entrega deste projeto?</h3>
      <input type="radio" class="radio" id="resposta1" name="pergunta1" value="1" />
      <label for="resposta1">Não</label><br/>
      <input type="radio" class="radio" id="resposta2" name="pergunta1" value="3" />
      <label for="resposta2">Sim</label><br/>
      <input type="radio" class="radio" id="resposta3" name="pergunta1" value="5" />
      <label for="resposta3">Sim, preciso de ajuda inclusive para definir escopo e resultados</label><br/>
      <input type="button" name="Anterior" class="previous action-button" value="Anterior" />
      <input type="button" name="Próximo" class="next action-button" value="Próximo" />
    </fieldset>
    <fieldset>
      <h2 class="fs-title">Passo 3</h2>
      <h3 class="fs-subtitle">O projeto envolve vários usuários e/ou clientes?</h3>
      <label for="resposta1">Não, o projeto é restrito em TI</label>
      <input type="radio" id="resposta1" name="pergunta2" value="1" />
      <label for="resposta2">Sim, vários usuários internos ou clientes internos</label>
      <input type="radio" id="resposta2" name="pergunta2" value="3" />
      <label for="resposta3">Sim, envolve vários usuários internos e clientes</label>
      <input type="radio" id="resposta3" name="pergunta2" value="5" />
      <input type="button" name="Anterior" class="previous action-button" value="Anterior" />
      <input type="button" name="Próximo" class="next action-button" value="Próximo" />
    </fieldset>
    <fieldset>
      <h2 class="fs-title">Passo 4</h2>
      <h3 class="fs-subtitle">Este projeto vai aumentar suas receitas ou reduzir custos?</h3>
      <label for="resposta1">Não, tem impacto interno e ainda não sei que resultados pode trazer</label>
      <input type="radio" id="resposta1" name="pergunta3" value="1" />
      <label for="resposta2">Sim, aumenta minhas receitas ou reduz meus custos</label>
      <input type="radio" id="resposta2" name="pergunta3" value="3" />
      <label for="resposta3">Sim, aumenta minhas receitas e reduz meus custos</label>
      <input type="radio" id="resposta3" name="pergunta3" value="5" />
      <input type="button" name="Anterior" class="previous action-button" value="Anterior" />
      <input type="button" name="Próximo" class="next action-button" value="Próximo" />
    </fieldset>
    <fieldset>
      <h2 class="fs-title">Passo 5</h2>
      <h3 class="fs-subtitle">Este projeto é algo novo no mercado ou a concorrência já possui algo similar?</h3>
      <label for="resposta1">A concorrência já possui similar, eu só preciso me atualizar</label>
      <input type="radio" id="resposta1" name="pergunta4" value="1" />
      <label for="resposta2">É algo novo e já sei exatamente o que quero</label>
      <input type="radio" id="resposta2" name="pergunta4" value="3" />
      <label for="resposta3">É algo novo, preciso estruturar e definir o resultado esperado</label>
      <input type="radio" id="resposta3" name="pergunta4" value="5" />
      <input type="button" name="Anterior" class="previous action-button" value="Anterior" />
      <input type="button" name="Próximo" class="next action-button" value="Próximo" />
    </fieldset>
    <fieldset>
      <h2 class="fs-title">Passo 6</h2>
      <h3 class="fs-subtitle">O quanto a velocidade de desenvolvimento é importante?</h3>
      <label for="resposta1">Pouco, esse projeto tem pouco impacto no negócio</label>
      <input type="radio" id="resposta1" name="pergunta5" value="1" />
      <label for="resposta2">Grande, não posso demorar muito para entregar</label>
      <input type="radio" id="resposta2" name="pergunta5" value="3" />
      <label for="resposta3">Urgente, preciso iniciar o mais rápido possível</label>
      <input type="radio" id="resposta3" name="pergunta5" value="5" />
      <input type="button" name="Anterior" class="previous action-button" value="Anterior" />
      <input type="submit" name="Enviar" class="next action-button" value="Finalizar" />
    </fieldset>
    <?php } else { ?>
    <ul id="progressbar">
      <li class="active">Vamos começar?</li>
      <li class="active">Passo 2</li>
      <li class="active">Passo 3</li>
      <li class="active">Passo 4</li>
      <li class="active">Passo 5</li>
      <li class="active">Passo 6</li>
      <li class="active">Resultado</li>
    </ul>
    <fieldset>
      <h2 class="fs-title">Parabéns!</h2>
      <h3 class="fs-subtitle">Acreditamos que temos o produto ideal para seu projeto.</h3>
      <p><?php echo $mensagem; ?></p>
      <input type="button" name="Próximo" class="finish-button" value="Quero enviar uma mensagem!" />
    </fieldset>
    <?php } ?>
  </form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>

  <script src="js/index.js"></script>

</body>
</html>
