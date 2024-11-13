<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <div class="theme-toggle">
            <label>
                <input type="checkbox" id="modeToggle">
                <span>Darkmode</span>
            </label>
        </div>
        
        <div class="logo-placeholder">
            <h1>Logo</h1>
        </div>
        
        <form class="login-form">
            <h2>Login</h2>
            <label for="username">Benutzername</label>
            <input type="text" id="username" placeholder="Benutzername" required>
            
            <label for="password">Passwort</label>
            <input type="password" id="password" placeholder="Passwort" required>
            
            <button type="submit">Anmelden</button>
        </form>
    </div>
    
    <script src="script.js"></script>
</body>
</html>
