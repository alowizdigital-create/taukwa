<?php

// Génération de 7 jours de labels et données aléatoires
$chartLabels = json_encode($chartLabels);
$chartData = json_encode($chartData);
//  debug($chartData);
//  die();
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

<!-- === STYLES === -->
<style>
    
:root {
    --aa-primary: <?= $primaryColor ?>; 
    --aa-dark: <?= $darkColor ?>;
    --aa-secondary: <?= $secondaryColor ?>;
}
.content-wrapper { background-color: #f8f9fa !important; }

.metric-box {
    background-color: white;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    padding: 15px;
    text-align: center;
    margin-bottom: 20px;
    border: 1px solid #e9ecef;
    transition: transform 0.2s ease;
}
.metric-box:hover { transform: translateY(-3px); }
.metric-box h5 { font-size: 0.9rem; color: #6c757d; margin-bottom: 5px; }
.metric-box p { font-size: 1.5rem; font-weight: 700; color: var(--aa-dark); }
.metric-box.balance-metric p { color: var(--aa-primary); }

.info-card {
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    border: 1px solid #e9ecef;
    margin-bottom: 20px;
    background-color: white;
    padding: 20px;
}

.traffic-metric { font-size: 3rem; font-weight: 700; color: var(--aa-primary); }
.progress-bar-container {
    display: flex; width: 100%; height: 10px; border-radius: 5px; overflow: hidden;
}
.progress-bar-segment { height: 100%; transition: width 0.6s ease; }

.delivered-text { color: var(--aa-primary); font-weight: 600; }
.pending-text { color: var(--aa-secondary); font-weight: 600; }
.failed-text { color: #dc3545; font-weight: 600; }

.chart-box {
    min-height: 350px;
    background: linear-gradient(to top right, #f0f0f0, #ffffff);
    border: 1px dashed #ccc;
    border-radius: 8px;
    padding: 10px;
}
.contact-groups-box { padding-left: 30px; }
.contact-groups-box h3 { font-size: 2.5rem; font-weight: 700; color: var(--aa-dark); margin-bottom: 5px; }
.contact-groups-box p { font-size: 1rem; color: #6c757d; margin-bottom: 15px; }

footer.main-footer {
    position: fixed; bottom: 0; left: 0; width: 100%;
    z-index: 1030; background: #f8f9fa;
    padding: 10px 20px; border-top: 1px solid #dee2e6;
}
</style>

<!-- === CONTENU PRINCIPAL === -->
<div class="content">
  <div class="container-fluid">

    <!-- EN-TÊTE -->
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h1 class="m-0" style="font-weight:700;color:var(--aa-dark);">Dashboard</h1>
      <div class="d-flex align-items-center">
      
        <button class="btn btn-sm" style="background-color:var(--aa-primary);color:white;border-radius:8px;">
          <i class="fas fa-redo-alt mr-1"></i>
        </button>
      </div>
    </div>
    <div class="d-flex justify-content-between align-items-center mb-4">
      <p class="text-muted mb-4">* Données calculées sur les 7 derniers jours</p>
      <div class="d-flex align-items-center">
      
        <a href="https://wa.me/237656262480" target="_blank" 
              class="btn btn-sm" 
              style="background-color:var(--aa-primary); color:white; border-radius:8px;">
                 <i class="fas fa-redo-alt mr-1"></i> Recharger
         </a>
      </div>
    </div>

    <!-- === MÉTRIQUES === -->
    <div class="row">
      <div class="col-lg-3 col-6">
        <div class="metric-box"><h5>Total de SMS</h5><p><?= $thisMonthMessages ?></p></div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="metric-box"><h5>SMS d'aujourd'hui</h5><p><?= $allToDayMessages ?></p></div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="metric-box"><h5>SMS mensuels</h5><p><?= $thisMonthMessages ?></p></div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="metric-box balance-metric"><h5>Solde</h5><p> $<?= number_format($userAuth->amount ?? 0.0, 3, ',', ' ') ?></p></div>
      </div>
    </div>

    <!-- === PERFORMANCES === -->
    <div class="info-card">
      <h4 style="font-weight:600;color:var(--aa-dark);margin-bottom:20px;">Performances du trafic d'aujourd'hui</h4>
      <div class="row align-items-center">
        <div class="col-md-2 text-center">
          <span class="traffic-metric"><?= $allToDayMessages ?></span>
          <p class="text-muted">SMS</p>
        </div>
        <div class="col-md-10">
          <div class="row mb-2">
            <div class="col text-center"><span class="pending-text"><?= $pendingRate ?>%</span><div class="text-muted">En traitement</div></div>
            <div class="col text-center"><span class="delivered-text"><?= $deliveryRate ?>%</span><div class="text-muted">Délivré</div></div>
            <div class="col text-center"><span class="failed-text"><?= $failedRate ?>%</span><div class="text-muted">Échoué</div></div>
          </div>
          <div class="progress-bar-container">
            <div class="progress-bar-segment bg-info" style="width: <?= $pendingRate ?>%; background-color: <?= $secondaryColor ?>;"></div>
            <div class="progress-bar-segment bg-success" style="width: <?= $deliveryRate ?>%; background-color: <?= $primaryColor ?>;"></div>
            <div class="progress-bar-segment bg-danger" style="width: <?= $failedRate ?>%; background-color: #dc3545;"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- === GRAPHIQUE & GROUPES === -->
    <div class="info-card">
      <div class="row">
        <div class="col-md-8">
          <h4 style="font-weight:600;color:var(--aa-dark);">Trafic SMS hebdomadaire</h4>
          <p class="text-muted mb-3">Statistiques des 7 derniers jours</p>
          <div class="chart-box">
            <canvas id="smsChart"></canvas>
          </div>
        </div>
        <div class="col-md-4 border-left">
          <div class="contact-groups-box">
            <h4 style="font-weight:600;color:var(--aa-dark);margin-bottom:25px;">Groupes de contacts</h4>
            <h3 style="color:var(--aa-dark);"><?= $groupCount ?></h3><p>Groupes</p>
            <h3 style="color:var(--aa-primary);"><?= $contactCount ?></h3><p>Contacts</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- === PIED DE PAGE === -->
<!--<footer class="main-footer" style="position: fixed; bottom: 0; left: 0; width: 100%; z-index: 1030; background: #f8f9fa; padding: 10px 20px; border-top: 1px solid #dee2e6;">-->
<!--  <div class="float-right d-none d-sm-inline">-->
<!--    <b>Version</b> 3.2.0-->
<!--  </div>-->
<!--  <strong>Copyright &copy; 2025 <a href="#" style="color:var(--aa-primary);border-radius:8px;">AdvanceApp</a></strong> Tous droits réservés.-->

<!--  <a href="https://wa.me/237656262480" style="color:var(--aa-primary);border-radius:8px;" target="_bank" style="margin-left: 20px;"> Contactez-nous sur Whatsapp</a>-->
<!--</footer>-->


<!-- === CHART.JS SCRIPT === -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
  const ctx = document.getElementById('smsChart').getContext('2d');
  const labels = <?= $chartLabels ?>;
  const data = <?= $chartData ?>;

  new Chart(ctx, {
    type: 'line',
    data: {
      labels: labels,
      datasets: [{
        label: 'SMS envoyés',
        data: data,
        fill: true,
        backgroundColor: 'rgba(13,131,124,0.15)',
        borderColor: getComputedStyle(document.documentElement).getPropertyValue('--aa-primary'),
        borderWidth: 2,
        tension: 0.3,
        pointBackgroundColor: getComputedStyle(document.documentElement).getPropertyValue('--aa-primary')
      }]
    },
    options: {
      responsive: true,
      scales: { y: { beginAtZero: true } },
      plugins: {
        legend: { display: false },
        tooltip: {
          callbacks: {
            label: function(ctx) { return ctx.parsed.y + ' SMS'; }
          }
        }
      }
    }
  });
});
</script>







