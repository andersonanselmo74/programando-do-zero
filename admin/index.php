<?php  include_once './config/config.php'; ?>
<?php 

  //Verificação se Usuario está Logado

  if(!isset($_SESSION['userLogged'])){
    header("Location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
  
  <!-- Header -->
  <?php include_once './partials/head.php'; ?>

  <body>    
  
  <!-- Menu -->
    <section>
      <?php include_once './partials/menu.php'; ?>

      <?php include_once './pages/routes.php'; ?>
    </section>
    
    <?php include_once './partials/scripts.php'; ?>
  </body>
</html>
