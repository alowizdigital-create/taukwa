<?php
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
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

    :root {
        --primary-color:  <?= $primaryColor ?>; /* Bleu des boutons */
        --secondary-color:  <?= $secondaryColor ?>; /* Gris pour certains textes/boutons */
        --background-color: #ffffff; /* Arrière-plan clair */
        --card-background: #ffffff; /* Fond des cartes/sections */
        --border-color: #dee2e6; /* Couleur des bordures */
        --text-color: #343a40; /* Couleur principale du texte */
        --header-bg: #e9ecef; /* Fond pour l'entête */
    }

    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: 'Poppins', sans-serif;
        background-color: var(--background-color);
        color: var(--text-color);
        line-height: 1.6;
    }

    .container {
        max-width: 1200px;
        margin: 20px auto;
        padding: 0 20px;
    }

    /* Header */
    .header {
        margin-bottom: 20px;
    }

    .back-link {
        color: var(--primary-color);
        text-decoration: none;
        font-weight: 500;
    }

    .back-link i {
        margin-right: 8px;
    }

    /* Phonebook Details Section */
    .phonebook-details {
        background-color: var(--card-background);
        padding: 25px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        margin-bottom: 20px;
    }

    .title-section {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 25px;
    }

    .title-section h1 {
        font-size: 1.8em;
        font-weight: 600;
        margin: 0;
    }

    /* Buttons */
    .btn-primary, .btn-secondary, .btn-download, .btn-pagination {
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-weight: 500;
        font-size: 0.9em;
        transition: background-color 0.2s ease;
    }

    .btn-primary {
        background-color: var(--primary-color);
        color: white;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .btn-secondary {
        background-color: var(--card-background);
        color: var(--text-color);
        border: 1px solid var(--border-color);
    }

    .btn-secondary:hover {
        background-color: var(--header-bg);
    }

    .btn-download {
        background-color: #3c7d9e; /* Vert pour télécharger */
        color: white;
    }

    .btn-download:hover {
        background-color: #3c7d9e;
    }

    .btn-primary i, .btn-secondary i, .btn-download i {
        margin-right: 8px;
    }

    /* Stats Grid */
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 20px;
    }

    .stat-card {
        display: flex;
        align-items: center;
        background-color: var(--header-bg); /* Un fond légèrement différent */
        padding: 15px 20px;
        border-radius: 8px;
    }

    .stat-card i {
        font-size: 2em;
        color: var(--primary-color);
        margin-right: 15px;
    }

    .stat-info span {
        display: block;
        font-size: 0.85em;
        color: var(--secondary-color);
    }

    .stat-info strong {
        font-size: 1.2em;
        font-weight: 600;
    }

    .stat-info a {
        color: var(--primary-color);
        text-decoration: none;
        font-size: 0.9em;
    }

    .tags {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
        margin-top: 5px;
    }

    .tag {
        background-color: var(--primary-color);
        color: white;
        padding: 4px 10px;
        border-radius: 20px;
        font-size: 0.75em;
        font-weight: 400;
    }

    /* Phonebook Table Section */
    .phonebook-table-section {
        background-color: var(--card-background);
        padding: 25px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    }

    .table-actions-top {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
        border-bottom: 1px solid var(--border-color);
        padding-bottom: 15px;
    }

    .select-all {
        display: flex;
        align-items: center;
        font-weight: 500;
    }

    .select-all input[type="checkbox"] {
        margin-right: 8px;
        transform: scale(1.1);
    }

    .select-all label i {
        margin-left: 5px;
        font-size: 0.8em;
        color: var(--secondary-color);
    }

    .table-controls {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .search-box {
        position: relative;
        width: 300px;
    }

    .search-box input {
        width: 100%;
        padding: 10px 15px 10px 40px;
        border: 1px solid var(--border-color);
        border-radius: 5px;
        font-size: 0.9em;
    }

    .search-box i {
        position: absolute;
        left: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: var(--secondary-color);
    }

    /* Table */
    .table-responsive {
        overflow-x: auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    table th, table td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid var(--border-color);
    }

    table th {
        background-color: var(--header-bg);
        font-weight: 600;
        color: var(--text-color);
        font-size: 0.9em;
    }

    table tbody tr:hover {
        background-color: #f1f1f1;
    }

    table td input[type="checkbox"] {
        transform: scale(1.1);
    }

    .action-dots {
        cursor: pointer;
        font-size: 1.2em;
        color: var(--secondary-color);
    }

    /* Pagination */
    .pagination {
        display: flex;
        justify-content: flex-end; /* Aligner à droite comme dans l'image */
        align-items: center;
        gap: 5px;
        margin-top: 20px;
    }

    .btn-pagination {
        background-color: var(--card-background);
        color: var(--text-color);
        border: 1px solid var(--border-color);
        padding: 8px 15px;
        border-radius: 5px;
        font-size: 0.85em;
    }

    .btn-pagination:hover {
        background-color: var(--header-bg);
    }

    .page-number {
        padding: 8px 12px;
        border: 1px solid var(--border-color);
        border-radius: 5px;
        background-color: var(--card-background);
        font-size: 0.85em;
        color: var(--text-color);
        cursor: pointer;
    }

    .page-number.current {
        background-color: var(--primary-color);
        color: white;
        border-color: var(--primary-color);
        font-weight: 600;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .title-section {
            flex-direction: column;
            align-items: flex-start;
            gap: 15px;
        }
        .stats-grid {
            grid-template-columns: 1fr;
        }

        .table-actions-top,
        .table-controls {
            flex-direction: column;
            align-items: flex-start;
            gap: 15px;
        }

        .search-box {
            width: 100%;
        }
        .pagination {
            justify-content: center;
        }   
    }
    
</style>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Répertoire Téléphonique</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">

        <header class="header">
            <a href="#" class="back-link"><i class="fas fa-chevron-left"></i> Back to your phonebook</a>
        </header>

        <section class="phonebook-details">
            <div class="title-section">
                <h1><?= h($team->name) ?></h1>
                
                    <button class="btn-primary" data-modal-target="scheduleSmsModal">
                        <i class="fas fa-clock"></i> Programmer un campagne
                    </button>
                <button class="btn-primary" data-modal-target="directSmsModal"><i class="fas fa-paper-plane"></i><?= h('Faire une campagne') ?> </button>
            </div>
            <div class="stats-grid">
                <div class="stat-card">
                    <i class="fas fa-users"></i>
                    <div class="stat-info">
                        <span>Nombre de contacts</span>
                        <strong> <?= h($contactNbr) ?> </strong>
                    </div>
                </div>
                <div class="stat-card">
                    <i class="fas fa-bullhorn"></i>
                    <div class="stat-info">
                        <span>Message(s) envoyé(s)</span>
                        <strong> <?= h($sentMessageNbr) ?></strong>
                    </div>
                </div>
                <div class="stat-card">
                    <i class="fas fa-chart-line"></i>
                    <div class="stat-info">
                        <span>Message(s) en attente</span>
                        <a href="/messages/pending/<?= $team->uuid ?>">Consulter</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="phonebook-table-section">
            <div class="table-actions-top">
                <div class="select-all">
                    <input type="checkbox" id="selectAll">
                    <label for="selectAll"><i class="fas fa-chevron-down"></i> Contacts</label>
                </div>
                <!-- <button class="btn-secondary"><i class="fas fa-edit"></i> Edit phonebook</button> -->
            </div>

            <div class="table-controls">
                <div class="search-box">
                    <input type="text" placeholder="Search phonebook">
                    <i class="fas fa-search"></i>
                </div>
                <!-- <button class="btn-download"><i class="fas fa-download"></i> Download Phonebook</button> -->
            </div>
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th><input type="checkbox"></th>
                            <th>HEAD</th>
                            <th>Phone number</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                         <?php foreach ($team->contacts as $contact) : ?>
                            <tr>
                                <td><input type="checkbox"></td>
                                <td><?= h($contact->name) ?></td>
                                <td><?= h($contact->phone) ?></td>
                                <td class="actions">
                                     <?= $this->Html->link(__('<i class="fas fa-eye" style="color:#000;"></i>'), ['controller' => 'Contacts','action' => 'view', $contact->uuid], ['escape' => false,'title'=>'Modifier']) ?>

                                    <?= $this->Form->postLink(
                                        '<i class="fas fa-trash-alt" style="color:#dc3545;"></i>',
                                        ['controller' => 'Contacts','action' => 'delete', $contact->uuid],
                                        [
                                            'confirm' => __('Vous etes sur de vouloir supprimer le contact  de {0}?', $team->name),
                                            'escape' => false,
                                            'title' => 'Supprimer',
                                        ]
                                        ) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                </table>
            </div>

            <div class="pagination">
                <button class="btn-pagination prev">Prev</button>
                <span class="page-number current">1</span>
                <span class="page-number">Next</span>
                <button class="btn-pagination next">Next</button>
            </div>
        </section>
    </div>

    <!-- Modal -->
<!-- Modal PROGRAMMER UN MESSAGE -->
        <div id="scheduleSmsModal" class="modal" style="
            display:none; position: fixed; top:0; left:0; width:100%; height:100%;
            background: rgba(0,0,0,0.6); justify-content:center; align-items:center;
        ">
        <div style="
            background:#fff; padding:25px; width:450px; border-radius:8px;
            position:relative;
        ">
        <h2 style="margin-bottom:15px;">Programmer une campagne</h2>

        <?= $this->Form->create(null, [
            'url' => ['controller' => 'Teams', 'action' => 'scheduleGroupMessage', $team->uuid],
            'id' => 'scheduleGroupForm'
        ]) ?>

        <textarea name="message" required rows="5" class="form-control"
            placeholder="Votre message..."></textarea>

        <label style="margin-top:10px;">Date & heure d’envoi :</label>
        <input type="datetime-local" name="send_at" required class="form-control">

        <br>

        <button type="submit" class="btn-primary" style="width:100%;">
            Programmer pour tous les contacts
        </button>

        <?= $this->Form->end() ?>

        <!-- Bouton Fermer -->
        <span class="close-modal" data-close="scheduleSmsModal" style="
            position:absolute; top:10px; right:15px; cursor:pointer;
            font-size:20px; color:#333;
        ">&times;</span>
    </div>
</div>



    <!-- Modal d’envoi de message -->
<div id="directSmsModal" class="modal" style="
    display:none; position: fixed; top:0; left:0; width:100%; height:100%;
    background: rgba(0,0,0,0.6); justify-content:center; align-items:center;
">
    <div style="
        background:#fff; padding:25px; width:450px; border-radius:8px;
        position:relative;
    ">
        <h2 style="margin-bottom:15px;">Envoyer un message au groupe</h2>

        <?= $this->Form->create(null, [
            'url' => ['controller' => 'Teams', 'action' => 'sendGroupMessage', $team->uuid],
            'id' => 'sendGroupMessageForm'
        ]) ?>

        <textarea name="message" required rows="5" class="form-control"
            placeholder="Votre message..."></textarea>

        <br>

        <button type="submit" class="btn-primary" style="width:100%;">
            <i class="fas fa-paper-plane"></i> Envoyer à tous les contacts
        </button>

        <?= $this->Form->end() ?>

        <span id="closeModal" style="
            position:absolute; top:10px; right:15px; cursor:pointer;
            font-size:20px; color:#333;
        ">&times;</span>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        // Ouvrir le modal
        document.querySelectorAll("[data-modal-target]").forEach(btn => {
            btn.addEventListener("click", function () {
                let target = this.getAttribute("data-modal-target");
                document.getElementById(target).style.display = "flex";
            });
        });

        // Fermer
        document.getElementById("closeModal").addEventListener("click", () => {
            document.getElementById("directSmsModal").style.display = "none";
        });

        // Fermer en cliquant en dehors
        document.getElementById("directSmsModal").addEventListener("click", (e) => {
            if (e.target.id === "directSmsModal") {
                e.target.style.display = "none";
            }
        });
    });
</script>

<script>
        document.addEventListener("DOMContentLoaded", () => {
        // 🔥 OUVERTURE DES MODALS
        document.querySelectorAll("[data-modal-target]").forEach(btn => {
            btn.addEventListener("click", function () {
                let target = this.getAttribute("data-modal-target");
                let modal = document.getElementById(target);
                modal.style.display = "flex";
            });
        });

        // 🔥 FERMETURE VIA LE BOUTON ×
        document.querySelectorAll(".close-modal").forEach(closeBtn => {
            closeBtn.addEventListener("click", () => {
                let target = closeBtn.getAttribute("data-close");
                document.getElementById(target).style.display = "none";
            });
        });

        // 🔥 FERMETURE EN CLIQUANT À L’EXTÉRIEUR
        document.querySelectorAll(".modal").forEach(modal => {
            modal.addEventListener("click", (e) => {
                if (e.target.classList.contains("modal")) {
                    modal.style.display = "none";
                }
            });
        });

    });

</script>


</body>
</html>

