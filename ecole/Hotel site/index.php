<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Business</title>
    <link rel="stylesheet" href="../Hotel site/style.css">
    <link rel="stylesheet" href="../Hotel site/index.php">
    <link rel="stylesheet" href="../Hotel site/bootstrap-4.6.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../Hotel site/bootstrap-4.6.2-dist/js/bootstrap.js">

</head>

<body class="siana">
    <div id="wrapper">
        <section class="">
            <nav>
                <h3 style="color:white ;">My Business</h3>    
                <div class="nav-links" id="navlinks">
                     <i class="fa fa-times" onclick="hideMenu()"></i>
                     <ul>
                         <li><a href="index.html">Accueil</a></li>
                         <li><a href="inscription.html">Inscription</a></li>
                         <li><a href="">A propos</a></li>
                         <li><a href="">Listes des élèves</a></li>
                         <li><a href="">Contact</a></li>
                     </ul>
                </div>
                
            </div>
           
        
            </div>
        </nav>

    </section>

             <!--detail personnel Eleve-->

    <div class="container">
        
        <div class="row">
            <div class="col-md-12"><h3>Détail personnel</h3></div>
            <div class="col-md-4">
                
                <div class="row">
                    <label class="label col-md-2 control-label;">Nom</label>
                    <div class="col-md-10">
                    <input type="text" class="form-control" name="nom" placeholder="Entrez le nom de l'éleve" id="hh">
                </div>
                <label class="label col-md-2 control-label;">PostNom</label>
                    <div class="col-md-10">
                    <input type="text" class="form-control" name="nom" placeholder="Entrez le postnom de l'éleve" id="hh">
                </div>
                <label class="label col-md-2 control-label;">PreNom</label>
                <div class="col-md-10">
                <input type="text" class="form-control" name="nom" placeholder="Entrez le prenom de l'éleve" id="hh">
            </div>
            <label class="label col-md-2 control-label;">Religion</label>
                <div class="col-md-10">
                <input type="text" class="form-control" name="nom" placeholder="Entrez la religion" id="hh">
            </div>
                </div>
                
            </div>
            <div class="col-md-4">
                
                <div class="row">
                    <label class="label col-md-2 control-label;">Sexe</label>
                    <div class="col-md-10">
                    <center><input type="radio" name="gn" value="male "> <small >Masculin</small>
                    <input type="radio" name="gn" value="male"> <small >Féminin</small></center>
                </div>
                <label class="label col-md-2 control-label;"placeholder="Entrez l'adresse de l'éleve">Adresse</label>
                <div class="col-md-10">
                <textarea class="form-control" id="hh"></textarea>
            </div>
            <label class="label col-md-2 control-label;">Téléphone</label>
                <div class="col-md-10">
                <input type="number" class="form-control" name="nom" placeholder="Entrez le numéro de téléphone" id="hh">
            </div>
            <label class="label col-md-2 control-label;">E_Mail</label>
                <div class="col-md-10">
                <input type="email" class="form-control" name="nom" placeholder="Entrez l'adresse E-mail d'élève" id="hh">
            </div>
                </div>
            </div>
            <div class="col-md-4">
                
                <div class="row">
                    <hr>
                    <label class="label col-md-2 control-label;">DateNaiss</label>
                    <div class="col-md-10">
                    <input type="date" class="form-control" name="date" id="hh">
                </div>
                <label class="label col-md-2 control-label;">Groupe Sangin</label>
                    <div class="col-md-10">
                   <select name="" id="hh" class="form-control">
                    <option value="">O+</option>
                    <option value="">O-</option>
                    <option value="">SS</option>
                    <option value="">A</option>
                   </select>
                </div>
                <label class="label col-md-2 control-label;">Photo</label>
                <form method="post" enctype="multipart/form-data">
                    <div class="col-md-10">
                        <label for="file" >Selectionner une image de l'élève</label>
                        <input type="file"  name="file" accept=".jpg, .jpeg, .png,">

                    </div>
                </form>
                    
                </div>
                </div>
            </div>
            


                </div>
            </div>
        </div>

             <!--detail d'admission-->

        <div class="container">
        
            <div class="row">
                <div class="col-md-12"><h3>Détails de l'admission</h3></div>
                <div class="col-md-4">
                    
                    <div class="row">
                        <label class="label col-md-2 control-label;">Date</label>
                        <div class="col-md-10">
                        <input type="date" class="form-control" name="nom" placeholder="Entrez la date d'admission" id="hh">
                    </div>
                    <label class="label col-md-2 control-label;">Numero</label>
                        <div class="col-md-10">
                        <input type="number" class="form-control" name="nom" placeholder="Entrez le numéro d'admission" id="hh">
                    </div>
                    
                    </div>
                    
                </div>
                <div class="col-md-4">
                    
                    <div class="row">
                        <label class="label col-md-2 control-label;">Classe</label>
                        <div class="col-md-10">
                       <select name="" id="hh" class="form-control">
                        <option value="">1ère</option>
                        <option value="">2ème</option>
                        <option value="">3ème</option>
                        <option value="">4ème</option>
                        <option value="">5ème</option>
                        <option value="">6ème</option>
                       </select>
                    </div>
                    <label class="label col-md-2 control-label;">Classe</label>
                        <div class="col-md-10">
                       <select name="" id="hh" class="form-control">
                        <option value="">Primaire</option>
                        <option value="">Sécondaire</option>
                        <option value="">Humanité</option>
                       </select>
                    </div>
                    </div>
                </div>
                <div class="col-md-4">
                    
                    <div class="row">
                        <hr>
                        <label class="label col-md-2 control-label;">Section</label>
                        <div class="col-md-10">
                       <select name="" id="hh" class="form-control">
                        <option value="">Scientifique</option>
                        <option value="">Technique</option>
                       </select>
                    
                    </div>
                    <label class="label col-md-2 control-label;">Option</label>
                        <div class="col-md-10">
                       <select name="" id="hh" class="form-control">
                        <option value="">Electronique</option>
                        <option value="">Mecanique</option>
                        <option value="">Scientifique</option>
                        <option value="">Coupe et couture</option>
                        <option value="">Pédagogie</option>
                        <option value="">Petrochimie</option>
                        <option value="">Latin Philo</option>
                       </select>
                    
                    </div>
                    
                    </div>
                </div>
                
    
    
                    </div>
                </div>
            </div>

            <!--detail Parent-->

        <div class="container">
        
            <div class="row">
                <div class="col-md-12"><h3>Détail Parent</h3></div>
                <div class="col-md-4">
                    
                    <div class="row">
                        <label class="label col-md-2 control-label;">Nom_P</label>
                        <div class="col-md-10">
                        <input type="text" class="form-control" name="nom" placeholder="Entrez le nom du père" id="hh">
                    </div>
                    <label class="label col-md-2 control-label;">Nom_M</label>
                        <div class="col-md-10">
                        <input type="text" class="form-control" name="nom" placeholder="Entrez le nom de la mère" id="hh">
                    </div>
                    
                    </div>
                    
                </div>
                <div class="col-md-4">
                    
                    <div class="row">
                         <label class="label col-md-2 control-label;">Téléphone</label>
                        <div class="col-md-10">
                        <input type="number" class="form-control" name="nom" placeholder="Le numéro de téléphone du père" id="hh">
                    </div>
                    <label class="label col-md-2 control-label;">Téléphone</label>
                        <div class="col-md-10">
                        <input type="number" class="form-control" name="nom" placeholder="Le numéro de téléphone de la mère" id="hh">
                    </div>
                    </div>
                </div>
                <div class="col-md-4">
                    
                    <div class="row">
                        <hr>
                        <label class="label col-md-2 control-label;">Profession</label>
                        <div class="col-md-10">
                        <input type="text" class="form-control" name="nom" placeholder="Entrez la profession du père" id="hh">
                    </div>
                    <label class="label col-md-2 control-label;">Téléphone</label>
                        <div class="col-md-10">
                        <input type="text" class="form-control" name="nom" placeholder="Entrez la profession de la mère" id="hh">
                    </div>
                    
                    </div>
                </div>
                
    
    
                    </div>
                </div>
            </div>
           <center> <a href=""><div class="btn btn-info">Enregistrer</div></a></center>


   
<!--footer-->
<section class="footer">
    <h4 id="jess">About Us</h4>
    <p id="jes">Si vous disposez d'ouvrages ou d'articles de référence ou
        Si vous disposez d'ouvrages ou d'articles  <br> de référence ou si vous connaissez </p>
        <div class="icons">
            <i class="fa fa-facebook"></i> 
            <i class="fa fa-twitter"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-whatsapp"></i> 
            <i class="fa fa-youtube"></i>
        </div>
        <p style="color:white ;">Créer et concever par Hénock Calolo et Chadrack Mbu </p>
</section>

<?php

 $chadrack=new pdo('mysql:host=localhost;dbname=inscription','root','');


?>

























<!---javascript menu--->

    <script>
        var navlinks = document.getElementById("navlinks");
        function ShowMenu(){
            navlinks.style.right = "0";
        }
        function hideMenu(){
            navlinks.style.right = "-200px";
        }
    </script>
</body>
</html>