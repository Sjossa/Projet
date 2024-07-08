<?php define('BASE_PATH', '/projet/projet1/');?> 
<?php define('accueil_PATH', '/projet/projet1/index.php');?> 
<?php define('BOOSTRAP_PATH', '/projet/projet1/main/boostrap/index.php');?>

<link rel="stylesheet" href="<?php echo BASE_PATH; ?>node_modules/bootstrap/dist/css/bootstrap.min.css">
<body>
  <div class="container-fluide">
<nav class="navbar navbar-expand-lg bg-dark ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="<?php echo BASE_PATH; ?>">accueil</a>
        <a class="nav-link" href="<?php echo BOOSTRAP_PATH; ?>">boostrap</a>
      </div>
    </div>
  </div>
</nav>
</div>
</body>




  