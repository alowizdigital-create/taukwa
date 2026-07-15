<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserProfile $userProfile
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
 
 // Couleurs AdvanceApp
$primaryColor = '#0d837c';
$darkColor = '#235467';
$secondaryColor = '#3c7d9e';

// 🔥 Voici les données temporaires utilisées pour la performance du trafic
// $deliveryRate = 83; // Pourcentage de messages délivrés
// $pendingRate = 16;  // Pourcentage de messages en attente
// $failedRate = 2;    // Pourcentage de messages échoués

$this->assign('title', 'Tableau de Bord');
?>

  <style>
        /* === VARIABLES GLOBALES === */
        :root {
            --color-primary: #4f46e5;
            --color-primary-dark: #4338ca;
            --color-success: #10b981;
            --color-danger: #ef4444;
            --color-warning: #f59e0b;
            --color-text-base: #1f2937;
            --color-text-light: #6b7280;
            --color-bg-light: #f9fafb;
            --border-radius: 0.5rem;
            --spacing-sm: 0.5rem;
            --spacing-md: 1rem;
            --spacing-lg: 1.5rem;
            --aa-primary: <?= $primaryColor ?>; 
            --aa-dark: <?= $darkColor ?>;
            --aa-secondary: <?= $secondaryColor ?>;
        }



        

    </style>

<body class="hold-transition sidebar-mini" style="padding-top: 55px;">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                    <?= $this->Html->image($userAuth->avatar ?? 'humain.jpg', [
                        'class' => 'profile-user-img img-fluid img-circle',
                        'alt' => 'AdminLTE Logo'
                    ]) ?>
                </div>
                <h3 class="profile-username text-center"><?php echo htmlspecialchars($userAuth->name ?? ''); ?></h3>
                <p class="text-muted text-center"><?php echo htmlspecialchars($userAuth->role ?? ''); ?></p>
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                     <a class="float-right"><?php echo htmlspecialchars($userAuth->email ?? ''); ?></a>
                  </li>
                
                </ul>
                </div>
              </div>
          </div>
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Réglage</a></li>
                </ul>
              </div><div class="card-body">
                <div class="tab-content">
                    <div class="active tab-pane" id="settings">
                      <?= $this->Form->create($userProfile, ['class'=>'form-horizontal','type'=>'file']) ?>
                        <h3 style="margin-bottom: 30px;">Profile</h3>
                     <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Nom</label>
                            <div class="col-sm-10">
                                        <?= $this->Form->control('name', ['label' => false, 'type' => '', 'class' => 'form-control','placeholder'=>'Ex: x-technova']) ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPhone" class="col-sm-2 col-form-label">Téléphone</label>
                            <div class="col-sm-10">
                                        <?= $this->Form->control('phone', ['label' => false, 'type' => '', 'class' => 'form-control','placeholder'=>'Ex: x-technova']) ?>
                            </div>
                        </div>
                       <div class="form-group row">
                            <label for="inputRole" class="col-sm-2 col-form-label">Photo</label>
                            <div class="col-sm-10">
                                <?= $this->Form->control('logo', ['label' => false,'required'=> false, 'type' => 'file', 'class' => 'form-control','placeholder'=>'Ex: exemple@gmail.com']) ?>
                            </div>
                        </div>
                                <h3 style="margin-bottom: 30px;">Configuration</h3>
                                <p style="color: red;"> * Attention ! Votre expediteur ne doit pas dépasser 11 caractères *</p>
                        <div class="form-group row">
                            <label for="inputPhone" class="col-sm-2 col-form-label">Expediteur</label>
                            <div class="col-sm-10">
                                    <?= $this->Form->control('company_name', ['label' => false, 'type' => '', 'class' => 'form-control','placeholder'=>'Ex: Recno']) ?>
                            </div>
                        </div>
                       <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                                <?= $this->Form->button(__('Sauvegarder'),['class'=>'btn btn-success']) ?>
                                    <?= $this->Form->end() ?>
                            </div>
                        </div>
                    </form>
                    
                  </div>
                  </div>
                </div></div>
            </div>
          </div>
        </div></section>

    
    </body>