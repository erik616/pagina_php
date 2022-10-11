<html>

<head>
  <link rel="stylesheet" href="stilos.css">
  <title>PHP Test</title>
</head>

<body>
  <div class="bloc">
    <div class="img">
      <img src="./imagns/office.svg" alt="office">
    </div>
    <div class='container'>
    <form action="valida_login.php"  method='post'>
      <div class='card'>
      <h2>Login:</h2>
        <div>
          <p>E-mail</p>
          <input type='email' name='email' placeholder='E-mail' />
        </div>
        <div>
        <p>Senha</p>
          <input type='password' name='senha' placeholder='Digite sua senha' />
        </div>
        <div>
          <button type="submit">Confirmar</button>
          <div class="p">
            <p>ou</p>
          </div>
            <div class="outros">
              <img class="g" src="./imagns/google.svg" alt="">
              <h3>Logar com o Google</h3>
            </div>
            <div class="outros">
              <img class="git" src="./imagns/github.svg" alt="">
              <h3>Logar com o GitHub</h3>
            </div>          
        </div>
      </div>
    </form>
  </div>
  </div>

  <?php



  ?>


  <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script>
</body>

</html>