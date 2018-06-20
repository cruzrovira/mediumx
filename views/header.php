<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$title?></title>
    <link rel="stylesheet" href="public/css/main.css">
   
</head>
<body>
    <div class="container p4">
        <header>
           <div class="rows justify-between-s align-baseline-s mt8">
               <div class="col-s-12  col-m-1 rows justify-center-s justify-start-m">
                   <a href="?url=home" class="color--black"><h1>Mediumx</h1></a>
               </div>
               <div class="col-s-12 col-m-5 rows justify-end-m">
               <?php if(!isset($_SESSION['user'])): ?>
                   <a href="?url=register" class="p4">Register</a>
                   <a href="?url=login" class="p4">Login</a>
                <?php endif ?>
                <?php if(isset($_SESSION['user']) &&  $_SESSION['user']['id_role'] == 2): ?>
                   <a href="" class="p4">Perfil</a>
                   <a href="?url=favorite&action=view" class="p4">Favorite</a>
                   <a href="?url=publication&action=publicationUser" class="p4">Post</a>
                   <a href="?url=publication" class="p4">Add</a>
                   <a href="?url=logout" class="p4">Logout</a>
                <?php endif ?>
                <?php if(isset($_SESSION['user']) &&  $_SESSION['user']['id_role'] == 1): ?>
                   <a href="?url=user&action=view" class="p4">Admin user<r/a>
                   <a href="" class="p4">Perfil</a>
                   <a href="?url=favorite&action=view" class="p4">Favorite</a>
                   <a href="?url=publication&action=publicationUser" class="p4">Post</a>
                   <a href="?url=publication" class="p4">Add</a>
                   <a href="?url=logout" class="p4">Logout</a>
                <?php endif ?>



               </div>
           </div>
        </header>
        <hr>