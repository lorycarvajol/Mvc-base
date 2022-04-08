<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://bootswatch.com/5/darkly/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="style.css">
     <title>Bibliothèque</title>
</head>

<body>

     <nav class="navbar navbar-expand-lg navbar-dark bg-primary
     ">
          <div class="container-fluid">               
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarColor02">
                    <ul class="navbar-nav me-auto">
                         <li class="nav-item">
                              <a class="nav-link active" href="index.php">Accueil
                                   <span class="visually-hidden">(current)</span>
                              </a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="livres.php">Livres</a>
                         </li>                        
                    </ul>
                    
               </div>
          </div>
     </nav>
<div class="container">
     <h1 class="rounded border border-success p-2 m-2 text-center text-white bg-primary">
          <?= $titre ?>
     </h1>
     <?= $content ?>
</div>


     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>