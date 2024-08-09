<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/cadastro.css">
    <title>Cadastro</title>
</head>
<body>
<header>
<svg viewbox="0 0 100 20">
  <defs>
    <linearGradient id="gradient" x1="0" x2="0" y1="0" y2="1">
      <stop offset="5%" stop-color="#326384"/>
      <stop offset="95%" stop-color="#123752"/>
    </linearGradient>
    <pattern id="wave" x="0" y="0" width="120" height="20" patternUnits="userSpaceOnUse">
      <path id="wavePath" d="M-40 9 Q-30 7 -20 9 T0 9 T20 9 T40 9 T60 9 T80 9 T100 9 T120 9 V20 H-40z" mask="url(#mask)" fill="url(#gradient)"> 
        <animateTransform
            attributeName="transform"
            begin="0s"
            dur="1.5s"
            type="translate"
            from="0,0"
            to="40,0"
            repeatCount="indefinite" />
      </path>
    </pattern>
  </defs>
  <text text-anchor="middle" x="50" y="15" font-size="17" fill="url(#wave)"  fill-opacity="0.6">LOADING</text>
  <text text-anchor="middle" x="50" y="15" font-size="17" fill="url(#gradient)" fill-opacity="0.1">LOADING</text>
</svg>
<svg viewbox="0 0 100 20">
  <defs>
    <linearGradient id="gradient" x1="0" x2="0" y1="0" y2="1">
      <stop offset="5%" stop-color="#326384"/>
      <stop offset="95%" stop-color="#123752"/>
    </linearGradient>
    <pattern id="wave" x="0" y="0" width="120" height="20" patternUnits="userSpaceOnUse">
      <path id="wavePath" d="M-40 9 Q-30 7 -20 9 T0 9 T20 9 T40 9 T60 9 T80 9 T100 9 T120 9 V20 H-40z" mask="url(#mask)" fill="url(#gradient)"> 
        <animateTransform
            attributeName="transform"
            begin="0s"
            dur="1.5s"
            type="translate"
            from="0,0"
            to="40,0"
            repeatCount="indefinite" />
      </path>
    </pattern>
  </defs>
  <text text-anchor="middle" x="50" y="15" font-size="17" fill="url(#wave)"  fill-opacity="0.6">LOADING</text>
  <text text-anchor="middle" x="50" y="15" font-size="17" fill="url(#gradient)" fill-opacity="0.1">LOADING</text>
</svg>



</header>
<main>

    <section class="container-formulario">
        <h1 class="titulo">Formulário </h1>
        <div class="botoes-tipo-pessoa">
            <button class="botao ativo" id="pessoa-fisica">Pessoa Física</button>
        </div>
        <?php if (isset($_GET['erro'])):?>
            <div class="error">
                <p>O campo de <?= $_GET['erro'] ?> está incorreto</p>
            </div>
        <?php endif; ?>
        <form class="formulario" method="post" action="cadastro-form.php" autocomplete="off">
            <div class="formulario__nome_data-nascimento">
                <div class="formulario__nome">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="name" required>
                </div>
                <div class="formulario__data-nascimento">
                    <label for="data">Data de nascimento</label>
                    <input type="date" name="data" id="data" required>
                </div>
            </div>
            <div class="formulario__email">
                <label for="email">E-mail</label>
                <input type="email" name="email" required>
            </div>
            <div class="formulario__cpf_telefone">
                <div class="formulario__cpf ativo-form" id="cpf-div">
                    <label for="cpf">CPF</label>
                    <input type="text" name="cpf" id="cpf" required>
                </div>
                <div class="formulario__telefone">
                    <label for="telefone">Telefone</label>
                    <input type="text" name="telefone" id="telefone" required>
                </div>
            </div>

            <div class="formulario__endereco">

                <div class="formulario__endereco_cep">
                    <label for="cep">CEP</label>
                    <input type="text" name="cep" id="cep" required>
                </div>

                <div class="formulario__endereco_cidade">
                    <label for="cidade">Cidade</label>
                    <input type="text" name="cidade" required>
                </div>

                <div class="formulario__endereco_logradouro">
                    <label for="logradouro">Logradouro</label>
                    <input type="text" name="logradouro" required>
                </div>

                <div class="formulario__endereco_bairro_estado_numero">
                    <div class="formulario__endereco_bairro"">
                        <label for="bairro">Bairro</label>
                        <input type="text" name="bairro" required>
                    </div>
                    <div class="formulario__endereco_estado"">
                        <label for="estado">Estado</label>
                        <input type="text" name="estado" required maxlength="10">
                        </div>
                    <div class="formulario__endereco_numero">
                        <label for="numero">Número</label>
                        <input type="text" name="numero" required>
                    </div>
                </div>
            </div>
            <button class="botao-formulario">Cadastrar</button>
        </form>
    </section>
</main>
<script type="text/javascript" src="/js/index.js"></script>
<script type="text/javascript" src="/js/cpf-cnpj.js"></script>
</body>
</html>
