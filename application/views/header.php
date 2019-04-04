<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper(['url','html']); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>My Blog</title>
    <?php echo link_tag('public/css/spectre.min.css'); ?>
    <?php echo link_tag('public/css/spectre-icons.css'); ?>
    <?php echo link_tag('public/css/custom.css'); ?>

</head>
<body>
  <header class="navbar bg-primary">
  <section class="navbar-section">
    <a href="#" class="navbar-brand mr-2 text-secondary">Mes Séries</a>
    <a href="#" class="btn btn-primary">Calendrier</a>
    <a href="#" class="btn btn-primary">Rechercher</a>
  </section>
<?php if (isset($email)): ?>
  <section class="navbar-section">
    <form action="<?php echo site_url("welcome/logout"); ?>" method="post">
    <div class="input-group input-inline">
      <span class="input-group-addon text-primary">
        <i class="form-icon icon icon-people text-primary"></i>
        <?php echo $email." "; ?></span>
      <button type="submit" class="btn btn-secondary input-group-btn">Déconnexion</button>
    </div>
  </form>
  </section>
<?php else: ?>
  <section class="navbar-section">
    <form action="<?php echo site_url("welcome/login"); ?>" method="post">
    <div class="input-group input-inline has-icon-left">
        <input class="form-input" name="email" type="email" placeholder="email">
        <i class="form-icon icon icon-people text-primary"></i>
      <input class="form-input" name="password" type="password" placeholder="password">
      <button type="submit" class="btn btn-secondary input-group-btn">Se connecter/S'inscrire</button>
    </div>
  </form>
  </section>
<?php endif; ?>
</header>
