<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>interface d'acceuil</title>


</head>
<link rel="stylesheet" type="text/css" href="cascade/cascade.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 <link rel="stylesheet" href="bootstrap4-glyphicons-master\bootstrap4-glyphicons\css\bootstrap-glyphicons.css">


    <link rel="stylesheet" a href="jquery-ui-1.12.1.custom (1)/jquery-ui-1.12.1.custom/jquery-ui.css">
    <script src="jquery-ui-1.12.1.custom (1)/jquery-ui-1.12.1.custom/jquery-ui.js">
</script>

   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css" integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
 
    <script src="jquery-3.4.1.min.js"></script>
   
<script>
       $(document).ready(function() {
  //toggle the component with class accordion_body
  $(".accordion_head").click(function() {
    if ($('.accordion_body').is(':visible')) {
      $(".accordion_body").slideUp(300);
      $(".plusminus").text('+');
    }
    if ($(this).next(".accordion_body").is(':visible')) {
      $(this).next(".accordion_body").slideUp(300);
      $(this).children(".plusminus").text('+');
    } else {
      $(this).next(".accordion_body").slideDown(300);
      $(this).children(".plusminus").text('-');
    }
  });
});

    </script>

<style type="text/css">
  .card-body {
    min-height: 150px;
    min-width: 150px;
    margin-right: 5px;
}
#col{
  margin-top: 56px;
}

body {
  font-family: 'Raleway', sans-serif;
background-image:url(img.jpg);
background-repeat: repeat;
cursor: pointer;
filter : brightness(60%);

}

.contenedor {
  height: 100%;
  padding: 5% 0;
}

h1 {
  color: #FCFBFA;
}

.container_foto {
  background-color: rgba(57, 62, 93, 0.7);
  padding: 0;
  overflow: hidden;
  max-width: 350px;
  margin: 5px;
}

.container_foto article {
  padding: 10%;
  position: absolute;
  bottom: 0;
  z-index: 1;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

.container_foto h2 {
  color: #fff;
  font-weight: 800;
  font-size: 25px;
  border-bottom: #fff solid 1px;
}

.container_foto h4 {
  font-weight: 300;
  color: #fff;
  font-size: 16px;
}

.container_foto img {
  width: 100%;
  top: 0;
  left: 0;
  opacity: 0.4;
  -webkit-transition: all 4s ease;
  -moz-transition: all 4s ease;
  -o-transition: all 4s ease;
  -ms-transition: all 4s ease;
  transition: all 4s ease;
}

.ver_mas {
  background-color: #FEB66C;
  position: absolute;
  width: 100%;
  height: 70px;
  bottom: 0;
  z-index: 1;
  opacity: 0;
  transform: translate(0px, 70px);
  -webkit-transform: translate(0px, 70px);
  -moz-transform: translate(0px, 70px);
  -o-transform: translate(0px, 70px);
  -ms-transform: translate(0px, 70px);
  -webkit-transition: all 0.2s ease-in-out;
  -moz-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  -ms-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}

.ver_mas span {
  font-size: 40px;
  color: #fff;
  position: relative;
  margin: 0 auto;
  width: 100%;
  top: 13px;
}


/*hovers*/

.container_foto:hover {
  cursor: pointer;
}

.container_foto:hover img {
  opacity: 0.1;
  transform: scale(1.5);
}

.container_foto:hover article {
  transform: translate(2px, -69px);
  -webkit-transform: translate(2px, -69px);
  -moz-transform: translate(2px, -69px);
  -o-transform: translate(2px, -69px);
  -ms-transform: translate(2px, -69px);
}

.container_foto:hover .ver_mas {
  transform: translate(0px, 0px);
  -webkit-transform: translate(0px, 0px);
  -moz-transform: translate(0px, 0px);
  -o-transform: translate(0px, 0px);
  -ms-transform: translate(0px, 0px);
  opacity: 1;
}
P{
  text-align: right;
  font-family: forte;
  text-decoration: none;
  color: black;
}

#reg:hover{
background-color: rgb(90,122,137);
transform : scale(1.2);
}
#reg{
  transition:0.5s;
}
img{
   animation: rotation 2s infinite linear;
}
/*effet de rotation*/
@keyframes rotation {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(359deg);
  }
}

</style>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
	 <nav class="navbar navbar-expand-lg navbar-light bg-info link col-md-12">
                <div class="col-md-4">
                    <img src="glp.png" width="15%" class="rounded-circle n">&nbsp;GESTION DU PARC INFORMATIQUE
                </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          
</nav>
</div>
<br><br><br>
<div class="col-md-12" id="col">
 <div class="d-flex flex-row flex-nowrap">
 <a href="intervention.php">
        <div class="card card-body" id="reg">
          
      
<H1><i class="fas fa-home" style="color:black;"></i></H1>

<p>GEST INTERVENTIONS</p>
     
       
        </div>
        </a>
        <a href="departement.php">
        <div class="card card-body" id="reg">
        <H1>  <i class="fas fa-water" style="color:black;size:77em;"></i></H1>
        <p>GEST DEPARTEMENTS</p>
        </div>
</a>
 <a href="marque.php">
        <div class="card card-body" id="reg">
          
            <H1>  <i class="fas fa-plane" style="color:black;size:77em;"></i></H1>
        <p>GESTION DES MARQUES</p>
     
        </div>
</a>





        <div class="card card-body" id="reg">
        <H1>  <i class="fas fa-passport" style="color:black;size:77em;"></i></H1>
        <p>PARAMETRE</p>
        </div>
        <div class="card card-body" id="reg">
          
            <H1>  <i class="fas fa-pen" style="color:black;size:77em;"></i></H1>
        <p>GESTION DES USERS</p>
     
        </div>




           </div>




</div>




<div class="col-md-12" id="col">
 <div class="d-flex flex-row flex-nowrap">
        <div class="card card-body" id="reg">
          
      
<H1><i class="fas fa-pencil" style="color:black;"></i></H1>

<p>GEST MATERIAUX</p>
     
       
        </div>
        <div class="card card-body" id="reg">
        <H1>  <i class="fas fa-circle" style="color:black;size:77em;"></i></H1>
        <p>GEST LOGICIEL</p>
        </div>
        <div class="card card-body" id="reg">
          
            <H1>  <i class="fas fa-list" style="color:black;size:77em;"></i></H1>
        <p>GEST FOURNISSEURS</p>
     
        </div>






        <div class="card card-body" id="reg">
        <H1>  <i class="fas fa-trash" style="color:black;size:77em;"></i></H1>
        <p>GEST INTERVENANTS</p>
        </div>
        <div class="card card-body" id="reg">
          
            <H1>  <i class="fas fa-lock" style="color:black;size:77em;"></i></H1>
        <p>GESTION DES MARQUES </p>
     
        </div>




           </div>




</div>

</div>
	</div>
</div>




</body>
</html>