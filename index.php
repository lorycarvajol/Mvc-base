<?php

if(empty($_GET['page'])){
     require "views/acceuil.views.php";
}else{
     switch($_GET['page']){
          case "accueil":
               require "views/acceuil.views.php";
               break;
     }          
}