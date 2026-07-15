

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

        /* General Styles */
        :root {
            --primary-color: #0d837c;
            --secondary-color: #f8f9fa;
            --accent-color: #395369ff;
            --card-bg: #ffffff;
            --card-hover-bg: #f1f1f1;
            --text-color: #333;
            --link-color: #235467;
            --border-color: #ced4da;
            --shadow-light: rgba(0, 0, 0, 0.1);
        }
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: var(--secondary-color);
            color: var(--text-color);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        /* Login Container */
        .login-container {
            max-width: 450px;
            width: 100%;
            background-color: var(--card-bg);
            border-radius: 12px;
            box-shadow: 0 4px 15px var(--shadow-light);
            overflow: hidden;
            padding: 40px;
        }

        /* Header */
        .login-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .app-logo {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 15px;
        }

        .login-title {
            font-size: 1.8rem;
            color: var(--primary-color);
        }

        /* Form Styles */
        .login-form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .form-group {
            position: relative;
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            font-weight: 700;
            margin-bottom: 8px;
            font-size: 0.9rem;
        }

        .form-group input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        .form-group input:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(0, 86, 179, 0.2);
        }

        .password-group {
            position: relative;
        }

        .toggle-password {
            position: absolute;
            right: 15px;
            bottom: 12px;
            cursor: pointer;
            color: var(--accent-color);
            transition: color 0.2s;
        }

        .toggle-password:hover {
            color: var(--primary-color);
        }

        .login-button {
            background-color: var(--primary-color);
            color: white;
            padding: 14px;
            border: none;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
        }
        
        /* State for disabled button */
        .login-button:disabled {
            background-color: #8c8c8c;
            cursor: not-allowed;
            transform: none;
        }

        .login-button:hover {
            background-color: #235467;
            transform: translateY(-2px);
        }

        .forgot-password-link {
            text-align: right;
            font-size: 0.9rem;
            color: var(--link-color);
            text-decoration: none;
            transition: color 0.2s;
        }

        .forgot-password-link:hover {
            color: #235467;
            text-decoration: underline;
        }

        /* New User Section (the card) */
        .new-user-section {
            margin-top: 30px;
            padding-top: 25px;
            border-top: 1px solid #e0e0e0;
        }

        .pre-register-card {
            display: flex;
            align-items: center;
            text-decoration: none;
            background-color: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            padding: 20px;
            gap: 20px;
            transition: background-color 0.3s, transform 0.2s, box-shadow 0.3s;
        }

        .pre-register-card:hover {
            background-color: var(--card-hover-bg);
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        }

        .card-icon-wrapper {
            background-color: #e6e6fa; /* Light purple */
            color: #6a0dad; /* Dark purple */
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.5rem;
        }

        .card-text {
            flex-grow: 1;
        }

        .card-text h3 {
            font-size: 1.1rem;
            color: var(--text-color);
        }

        .card-text p {
            font-size: 0.9rem;
            color: var(--accent-color);
            margin-top: 5px;
        }

        .card-arrow {
            color: var(--accent-color);
            font-size: 1.2rem;
        }

        /* Media Queries for Responsiveness */
        @media (max-width: 500px) {
            .login-container {
                padding: 25px;
                margin: 10px;
            }

            .login-title {
                font-size: 1.5rem;
            }

            .pre-register-card {
                flex-direction: column;
                text-align: center;
            }

            .card-icon-wrapper, .card-arrow {
                margin-bottom: 10px;
            }
        }
    </style>
</head>
<body>

    <main class="login-container">
        <div class="login-box">
             <header class="login-header">
                 <?= $this->Html->image('taukwa.PNG', [
                      'class' => 'app-logo', 
                      'alt' => 'AdminLTE Logo'
                  ]) ?> 
                <h1 class="login-title">Connectez-vous à votre compte</h1>
            </header>
            <!-- Ajout d'un ID au formulaire pour le cibler en JavaScript -->
            <!-- <form  action="#" method="POST" class="login-form" > -->
            <?= $this->Form->create($user,['class'=>'login-form']) ?>
                <div class="form-group">
                     <?= $this->Form->control('email', ['required' => true]) ?>
                    <!-- <label for="email">Adresse e-mail</label>
                    <input type="email" id="email" name="email" placeholder="entrez votre e-mail" required> -->
                </div>

                <div class="form-group password-group">
                    <?= $this->Form->control('password', ['required' => true]) ?>
                    <!-- <label for="password">Mot de passe</label> -->
                    <!-- <input type="password" id="password" name="password" placeholder="entrez votre mot de passe" required> -->
                    <span class="toggle-password" onclick="togglePasswordVisibility()">
                        <i class="fas fa-eye"></i>
                    </span>
                </div>
                 <div class="form-group password-group">
                    <?= $this->Form->control('password2', ['required' => true]) ?>
                    <!-- <label for="password">Mot de passe</label> -->
                    <!-- <input type="password" id="password" name="password" placeholder="entrez votre mot de passe" required> -->
                    <span class="toggle-password" onclick="togglePasswordVisibility()">
                        <i class="fas fa-eye"></i>
                    </span>
                </div>
                <!-- Ajout d'un ID au bouton pour le cibler en JavaScript -->
                   <?= $this->Form->submit(__('Add',['class'=>'login-button']),['class'=>'login-button','style'=>'width:100%']); ?>
                     <a href="#" class="forgot-password-link">Password forgot ?</a>
                <a href="http://localhost:8765/users/login" class="forgot-password-link">Login</a>
                
                <?= $this->Form->end() ?>
        </div>
    </main>
</body>
</html>



<IfModule mod_rewrite.c>
    RewriteEngine on
    RewriteRule    ^(\.well-known/.*)$ $1 [L]
    RewriteRule    ^$    webroot/    [L]
    RewriteRule    (.*) webroot/$1    [L]
</IfModule>