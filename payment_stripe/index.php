<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css">
    <title>Page de commande</title>
    <style>
        form{
            max-width: 300px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center fw-3 ">Votre payment en ligne</h1>
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
            <form action="charge.php" method="POST" id="payement-form">
        <div class="form-group">
            <label for="first-name" class="form-label">Votre nom :</label>
            <input type="text" name="first-name" id="first-name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="last-name" class="form-label">Votre prenom :</label>
            <input type="text" name="last-name" id="last-name" class="form-control" required>
        </div>
        <input type="hidden" name ="amount" value="10">
        <div id="card-element">

        </div>
        <div id="card-errors" role="alert">
        </div>
       <button type="submit" class="btn btn-danger">Payer</button>
     </form>
            </div>
            <div class="col-4"></div>
        </div>
        
    </div>

     
     <script src="https://js.stripe.com/v3/"></script>
     <script src="app.js"></script>
</body>
</html>