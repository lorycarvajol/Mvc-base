<?php ob_start() ?>

<table class=" border border-dark table table-striped text-center">
     <thead>
          <tr class="table-secondary">
               <th scope="col">Image</th>
               <th scope="col">Titre</th>
               <th scope="col">Auteur</th>
               <th scope="col">Genre</th>
               <th colspan="2">Action</th>
               
          </tr>
     </thead>
     <tbody>
          
               <tr>
                    
                    <td class="align-middle"><img src="public/images/img1.jpg" width="60px"</td>
                    <td class="align-middle">Peter Pan</td>
                    <td class="align-middle">J.M.Barrie</td>
                    <td class="align-middle">Fantasy</td>
                    <td class="align-middle">
                         <a href="index.php?action=detail&id=1" class="btn btn-outline-primary">Voir</a>
                    </td>
                    <td class="align-middle">
                         <a href="index.php?action=delete&id=1" class="btn btn-outline-danger">Supprimer</a>
                    </td>
               </tr>
               
          
     </tbody>
</table>
<a href="index.php?action=add" class="btn btn-success d-block">Ajouter</a>
<?php
$titre = "Livres";
$content = ob_get_clean();

require "template.php";
?>