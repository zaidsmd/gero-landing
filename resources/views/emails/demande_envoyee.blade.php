<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande Envoyée</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #3b5461;
        }
        .email-container {
            background-color: #ffffff;
            margin: 20px auto;
            padding: 20px;
            max-width: 600px;
            border: 1px solid #dddddd;
            border-radius: 5px;
        }
        .email-header {
            text-align: center;
            background-color: #ffffff;
            padding: 10px 0;
            border-radius: 5px 5px 0 0;
        }
        .email-header img {
            max-width: 100px;
        }
        .email-body {
            padding: 20px;
        }
        .email-body h1 {
            color: #3b5461;
        }
        .email-body h2 {
            color: #3b5461;
        }
        .email-body p {
            font-size: 16px;
            line-height: 1.5;
        }
        .email-footer {
            text-align: center;
            padding: 10px;
            font-size: 12px;
            color: #3b5461;
        }
        .email-footer a {
            color: #3b5461;
            text-decoration: none;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 20px 0;
            font-size: 16px;
            color: #ffffff;
            background-color: #3b5461;
            border: none;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="email-container">
    <div class="email-header">
        <img src="{{ url('assets/images/logo.png') }}" alt="Logo">
    </div>
    <div class="email-body">
        <h1>Bonjour <strong>{{ $entreprise }}</strong></h1>
        <h2>Merci d'avoir choisi Gero!</h2>
        <p>Un administrateur vous contactera prochainement pour finaliser votre demande de démo!</p>
    </div>
    <div class="email-footer">
        <p>Si vous n'avez pas fait cette demande, veuillez ignorer cet email.</p>
        <p>Pour toute question, répondez à cet email ou contactez-nous à <a href="mailto:contact@tarmiz.ma">contact@tarmiz.ma</a>.</p>
    </div>
</div>
</body>
</html>
