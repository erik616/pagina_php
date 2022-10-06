<?php

  session_start();

  $usuario_autenticado = false;
  $usuario_id = null;
  $perfil_id = array(1,2);

  $meu_usuario = array(
    array('id' => 1, 'email' => 'erik@gmail.com', 'senha' => '1313', 'perfil_id' => 1),
    array('id' => 2, 'email' => 'dionata8@.com', 'senha' => '833', 'perfil_id' => 2)
  );

  foreach($meu_usuario as $user) {
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
      
      $usuario_autenticado = true;
      $usuario_id = $user['id'];
      
    }
  }

  if($usuario_autenticado){
    echo 'Usuario autenticado';
    $_SESSION['autenticado'] = 'SIM';
    $_SESSION['id'] = $usuario_id;
    $_SESSION['perfil_id'] = $perfil_id;
    header('Location: home.php');
  }else{
    $_SESSION['autenticado'] = 'NAO';
    header('Location: index.php?login=erro');
  }
 

?>

