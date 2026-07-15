<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #235467;">
  <!-- Brand Logo -->
  <a href="<?= $this->Url->build(['controller' => 'Contacts', 'action' => 'edit']) ?>" class="brand-link" style="border-bottom: 1px solid #3c7d9e;">
    <!-- Utiliser un placeholder si l'image 'xtech.jpg' n'est pas AdvanceApp, sinon laisser l'image -->
    <?php
    /* Si l'image 'xtech.jpg' n'est pas le logo AdvanceApp, vous pouvez utiliser un placeholder SVG/CSS ici */
    echo $this->Html->image('xtech.jpg', [
        'class' => 'brand-image img-circle elevation-3',
        'alt' => 'AdvanceApp Logo'
    ]);
    ?>
    <span class="brand-text font-weight-light ml-2" style="font-size: 20px; color: #0d837c; font-weight: bold !important;">AdvanceApp</span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-header"></li>
        <li class="nav-item">
          <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'dashboard']) ?>" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p>
              Home
            </p>
          </a>
        </li>
        <?php if ($userAuth->role == 'admin' || $userAuth->role == 'directeur' ) : ?> 
          <li class="nav-item">
            <a href="<?= $this->Url->build(['controller' => 'Discounts', 'action' => 'dashboard']) ?>" class="nav-link">
              <i class="nav-icon fas fa-percentage"></i>
              <p><?= __('Reductions') ?></p>
            </a>
          </li>
        <?php endif; ?>
        <li class="nav-item">
          <a href="<?= $this->Url->build(['controller' => 'Vehicles', 'action' => 'add']) ?>" class="nav-link">
            <i class="nav-icon fas fa-plus"></i>
            <p>
              Nouveau véhicule
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= $this->Url->build(['controller' => 'Cashboxes', 'action' => 'index']) ?>" class="nav-link">
            <i class="nav-icon fas fa-cash-register"></i>
            <p><?= __('Caisse(s)') ?></p>
            <!-- J'ai mis à jour la couleur du badge pour correspondre à la charte si possible.
                 Note: L'utilisation d'une classe AdminLTE comme 'badge-info' pourrait être limitée.
                 Pour un contrôle total, vous pouvez ajouter 'style="background-color: #0d837c;"' au span. -->
            <span class="badge badge-info right" style="background-color: #0d837c;"><?= ($notifications) ?? 0 ?></span>
          </a>
        </li>
        <?php if ($userAuth->role == 'admin' || $userAuth->role == 'directeur' ) : ?> 
        <li class="nav-item">
          <a href="<?= $this->Url->build(['controller' => 'Genders', 'action' => 'index']) ?>" class="nav-link">
            <i class="nav-icon fas fa-car"></i>
            <p><?= __('Genres de véhicules') ?></p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= $this->Url->build(['controller' => 'Reminders', 'action' => 'index']) ?>" class="nav-link">
            <i class="nav-icon fas fa-bell"></i>
            <p><?= __('Rappels et modèles') ?></p>
          </a>
        </li>
        <?php endif; ?>
        <li class="nav-header">COMPTES</li>
        <li class="nav-item">
          <a href="<?= $this->Url->build(['controller' => 'Messages', 'action' => 'index']) ?>" class="nav-link ">
            <i class="nav-icon fas fa-paper-plane"></i>
            <p><?= __('Les relances') ?></p>
          </a>
        </li>
        <?php if ($userAuth->role == 'admin') : ?>
          <li class="nav-item">
            <a href="<?= $this->Url->build(['controller' => 'Startups', 'action' => 'index']) ?>" class="nav-link ">
              <i class="nav-icon fas fa-paper-plane"></i>
              <p><?= __('Entreprises') ?></p>
            </a>
          </li>
        <?php endif; ?>
        <?php if ($userAuth->role == 'admin' || $userAuth->role == 'directeur' ) : ?> 
          <li class="nav-item">
            <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'collabots']) ?>" class="nav-link ">
              <i class="nav-icon fas fa-user-friends"></i>
              <p><?= __('Collaborateurs') ?></p>
            </a>
          </li>
        <?php endif; ?>
        <li class="nav-item">
          <a href="<?= $this->Url->build(['controller' => 'users', 'action' => 'account']) ?>" class="nav-link ">
            <i class="nav-icon fas fa-user"></i>
            <p><?= __('Mon compte') ?></p>
          </a>
        </li>
        <!-- Déconnexion -->
        <?php $logoutUrl = ($userAuth->role == 'admin') ? 'http://localhost:8765/admin/logout' : 'http://localhost:8765/account/logout'; ?>
        <li class="nav-item">
          <a href="<?= $logoutUrl ?>" class="nav-link ">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p><?= __('Déconnexion') ?></p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
