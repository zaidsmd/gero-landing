<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouvelle Demande Commerciale</title>
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
            background-color: #3b5461;
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
    </style>
</head>
<body>
<div class="email-container">
    <div class="email-body">
        <h1>Nouvelle Demande de demonstration</h1>
        <p>Une nouvelle demande de demonstration a été soumise avec les détails suivants :</p>
        <p><strong>Entreprise :</strong> {{ $entreprise }}</p>
        <p><strong>Email :</strong> <a href="mailto:{{ $email }}">{{ $email }}</a></p>
        <p><strong>Téléphone :</strong> {{ $telephone }}</p>
        <p>Merci de traiter cette demande rapidement.</p>
    </div>
    <div class="email-footer">
        <p>Si vous avez des questions, veuillez répondre à cet email ou nous contacter à <a href="mailto:contact@tarmiz.ma">contact@tarmiz.ma</a>.</p>
    </div>
</div>
</body>
</html>
