<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #235467;">
  <!-- Brand Logo -->
  <a href="<?= $this->Url->build(['controller' => 'Contacts', 'action' => 'edit']) ?>" class="brand-link" style="border-bottom: 1px solid #3c7d9e;">
    <!-- Utiliser un placeholder si l'image 'xtech.jpg' n'est pas AdvanceApp, sinon laisser l'image -->
   
    <span class="brand-text font-weight-light ml-2" style="margin-left:120px; padding:80px; font-size: 20px; color: #fff; font-weight: bold !important;">Taukwa</span>
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
              Accueil
            </p>
          </a>
        </li>
      
        <li class="nav-item">
          <a href="<?= $this->Url->build(['controller' => 'contacts', 'action' => 'index']) ?>" class="nav-link">
            <i class="nav-icon fas fa-address-book"></i>
            <p><?= __('Contacts') ?></p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= $this->Url->build(['controller' => 'teams', 'action' => 'index']) ?>" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p><?= __('Groupes') ?></p>
          </a>
        </li>
         <li class="nav-item">
          <a href="<?= $this->Url->build(['controller' => 'Messages', 'action' => 'shedule']) ?>" class="nav-link">
            <i class="nav-icon fas fa-file"></i>
            <p><?= __('Messages programmés') ?></p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= $this->Url->build(['controller' => 'Messages', 'action' => 'pendings']) ?>" class="nav-link">
            <i class="nav-icon fas fa-file"></i>
            <p><?= __('Historique') ?></p>
          </a>
        </li>
      
<!--       
        <li class="nav-item">
          <a href="<?= $this->Url->build(['controller' => 'Messages', 'action' => 'index']) ?>" class="nav-link ">
            <i class="nav-icon fas fa-paper-plane"></i>
            <p><?= __('Les relances') ?></p>
          </a>
        </li>
    
          <li class="nav-item">
            <a href="<?= $this->Url->build(['controller' => 'Startups', 'action' => 'index']) ?>" class="nav-link ">
              <i class="nav-icon fas fa-paper-plane"></i>
              <p><?= __('Entreprises') ?></p>
            </a>
          </li> -->
       <li class="nav-item">
          <a href="<?= $this->Url->build(['controller' => 'UserProfiles', 'action' => 'edit', $userAuth->uuid]) ?>" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p><?= __('Réglages') ?></p>
          </a>
      </li>
        <!-- Déconnexion -->
        <li class="nav-item">
          <a href="/users/logout" class="nav-link ">
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
