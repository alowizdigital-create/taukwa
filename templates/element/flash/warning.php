<?php
/**
 * @var \App\View\AppView $this
 * @var array $params
 * @var string $message
 */
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>

<?php if (!empty($message)): ?>
<style>
/* ===== STYLE DU MESSAGE FLASH WARNING ===== */
.flash-warning {
    position: fixed;
    top: -120px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 1050;
    width: 90%;
    max-width: 500px;
    padding: 18px 22px 18px 55px;
    border-radius: 10px;
    background-color: #fff3cd;
    color: #664d03;
    border: 1px solid #ffeeba;
    font-family: "Inter", sans-serif;
    font-size: 15px;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
    display: flex;
    align-items: center;
    overflow: hidden;
    animation: slideDownCenter 0.6s ease forwards;
}

/* Icône d’avertissement */
.flash-warning i {
    margin-right: 12px;
    font-size: 22px;
    color: #ffc107;
    flex-shrink: 0;
    animation: pulseIcon 1.5s infinite;
}

/* Bouton de fermeture */
.flash-warning .close-btn {
    background: none;
    border: none;
    font-size: 20px;
    color: #664d03;
    cursor: pointer;
    opacity: 0.7;
    margin-left: auto;
    transition: opacity 0.2s;
}

.flash-warning .close-btn:hover {
    opacity: 1;
}

/* Animation d’apparition (de haut vers le centre) */
@keyframes slideDownCenter {
    from {
        opacity: 0;
        transform: translate(-50%, -100%);
    }
    to {
        opacity: 1;
        transform: translate(-50%, 0);
        top: 40px;
    }
}

/* Animation de disparition (vers le haut) */
@keyframes slideUpCenter {
    from {
        opacity: 1;
        transform: translate(-50%, 0);
    }
    to {
        opacity: 0;
        transform: translate(-50%, -100%);
    }
}

/* Animation d’icône */
@keyframes pulseIcon {
    0% { transform: scale(1); }
    50% { transform: scale(1.15); }
    100% { transform: scale(1); }
}
</style>

<div class="flash-warning" id="flash-warning">
    <i class="bi bi-exclamation-triangle-fill"></i>
    <?= $message ?>
    <button class="close-btn" onclick="closeFlashWarning()">×</button>
</div>

<script>
function closeFlashWarning() {
    const msg = document.getElementById('flash-warning');
    msg.style.animation = 'slideUpCenter 0.5s forwards';
    setTimeout(() => msg.remove(), 500);
}

// Fermeture automatique après 4 secondes
setTimeout(() => {
    if (document.getElementById('flash-warning')) closeFlashWarning();
}, 4000);
</script>
<?php endif; ?>
