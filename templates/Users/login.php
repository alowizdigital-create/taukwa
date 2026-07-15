<style>
    /* Assure que la page prend 100% de la hauteur et supprime les marges/paddings par défaut */
    html, body {
        height: 100%;
        margin: 0 !important;
        padding: 0 !important;
        /* Force la disposition en colonne pour éviter les interférences si le layout est flex par défaut */
        display: flex;
        flex-direction: column; 
    }
    
    /* Variables pour les couleurs AdvanceApp */
    :root {
        --primary-color: #0d837c; /* Vert-Bleu Principal AdvanceApp */
        --background-color: #f8f9fa;
        --dark-blue: #235467; /* Bleu marine/foncé AdvanceApp (Couleur de la police du logo) */
        --input-bg: #f1f7fe;
        --text-color: #333;
    }

</style>



<?php
/**
 * Vue de la page de connexion (login.php)
 * Elle utilise le style défini dans le bloc <style> pour un affichage en deux colonnes,
 * en respectant la charte graphique AdvanceApp.
 */

// CORRECTION : Utiliser disableAutoLayout() pour désactiver correctement le layout
$this->disableAutoLayout();
// Commence la mise en page
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Taukwa | Connexion</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <?= $this->Flash->render() ?>
  <div class="login-logo">
    <a href="#" style="color: var(--dark-blue);"><b style="color: var(--primary-color);">Tau</b>kwa</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Veuillez entrer vos identifiants pour continuer</p>

      <!-- <form action="../../index3.html" method="post"> -->
          <?= $this->Form->create() ?>
        <div class="input-group mb-3">
          <input type="email" class="email form-control" name="email"  placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
            <!-- <label for="password">Mot de passe</label> -->
            <input type="password" style="" class="password form-control" id="password" name="password" placeholder="••••••••" required>
          <!-- <input type="password" class="form-control" placeholder="Password"> -->
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary" style="background-color: var(--dark-blue); border:none">Connexion</button>
          </div>
          <!-- /.col -->
        </div>
      <?= $this->Form->end() ?>

      <p class="mb-1" style="margin-top: 90px;">
        <a href="forgot-password.html" style="color: var(--primary-color);">Mot de passe oublié ?</a>
      </p>
      <p class="mb-0" style="margin-bottom: 90px;">
        <a href="/users/add" style="color: var(--primary-color);" class="text-center">S'inscrire</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>


<!-- Script pour basculer l'affichage du mot de passe -->
<script>
    document.getElementById('togglePassword').addEventListener('click', function (e) {
        const passwordInput = document.getElementById('password');
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        
        // Basculer l'icône de l'œil
        const icon = this.querySelector('i');
        if (type === 'text') {
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        } else {
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        }
    });

    // Optionnel: Empêcher le body de défiler si le layout global le permet
    document.body.style.overflow = 'hidden';
</script>
