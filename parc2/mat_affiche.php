<?php 

/********************** Gestion des erreurs *************/



/********************** Fin Gestion des erreurs *************/
require_once'model/materielDB.php';
$materieldb = new materielDB();
$materiels = $materieldb->readAll();



?>



<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Liste des fournisseurs</title>

		<link rel="stylesheet" type="text/css" href="cascade/cascade.css" />
		 <link rel="stylesheet" href="datatables.min.css">
		 <link rel="stylesheet" href="bootstrap4-glyphicons-master\bootstrap4-glyphicons\css\bootstrap-glyphicons.css">
		 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
          <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
          <script type="text/javascript" src="jquery-3.4.1.min.js"></script>
          <script type="text/javascript" src="jqueryui/jquery-ui.min.js"></script>
          <script type="text/javascript" src="datatables.min.js"></script>
          <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css" integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <script>
      $(document).ready(function(){
        $('#tab').DataTable();

      } );
    </script>


		




	</head>
	<style type="text/css">
		.color{
    background-color: rgb(0,28,55);
  }


.dropbtn {
    background-color: rgb(35,71,71);
    color: white;
    padding: 15px;
    font-size: 15px;
    border: none;
    border-radius: 12px;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: rgb(36,72,72);}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color:  rgb(36,72,72);
}
 


 
 
	</style>

	<body>

	<div class="container-fluid">
	<div class="row">
		<div class="col-md-12"><br>
		 <nav class="navbar navbar-expand-lg navbar-light col-md-12 color">
         
                <div class="col-md-12 form-inline">
             <p class="text-light">liste des fournisseurs</p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;






 <div class="dropdown">
  <button class="dropbtn">gestion intervenants</button>
  <div class="dropdown-content">
    <a href="intervenant.php">nouveau</a>
    <a href="intervenant_affiche.php">liste des intervenants</a>
    
  </div>
</div> &nbsp;


<div class="dropdown">
  <button class="dropbtn">gestion intervention</button>
  <div class="dropdown-content">
    <a href="intervention.php">nouveau</a>
    <a href="#">liste des interventions</a>
    
  </div>
</div> &nbsp;


<div class="dropdown">
  <button class="dropbtn">gestion logiciel</button>
  <div class="dropdown-content">
    <a href="logiciel.php">nouveau</a>
    <a href="logiciel_affiche.php">liste des logiciels</a>
    
  </div>
</div> &nbsp;


<div class="dropdown">
  <button class="dropbtn">gestion materiels</button>
  <div class="dropdown-content">
    <a href="materiel.php">nouveau</a>
    
  </div>
</div> &nbsp;


<div class="dropdown">
  <button class="dropbtn">gestion fournisseurs</button>
  <div class="dropdown-content">
    <a href="acceuil.php">nouveau</a>
    <a href="parc.php">liste des fournisseurs</a>
      </div>
  </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div>
 <a href="index.php"><i class="fas fa-home" style="color:white; size:83px;"></i></a> 

</div>
 

</div>
 

         </nav> 
    

                <br><br><br>       

		<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
	   <table id="tab" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                    <th class="th-sm">#<span class="glyphicon glyphicon-sort-by-attributes-alt"></span>
                     </th>
                    
                      <th class="th-sm">etat du materiel&nbsp;<span class="glyphicon glyphicon-sort"></span>
                       </th>
                        <th class="th-sm">type du materiel&nbsp;<span class="glyphicon glyphicon-sort"></span>
                         </th>
                          
                        <th class="th-sm">fournisseur&nbsp;<span class="glyphicon glyphicon-sort"></span>
                         </th>
                        <th class="th-sm">marque&nbsp;<span class="glyphicon glyphicon-sort"></span>
                         </th>
                        <th class="th-sm">numero_serie&nbsp;<span class="glyphicon glyphicon-sort"></span>
                         </th>
                        <th class="th-sm">date_achat&nbsp;<span class="glyphicon glyphicon-sort"></span>
                         </th>
                        <th class="th-sm">garantie&nbsp;<span class="glyphicon glyphicon-sort"></span>
                         </th>
                       
                               <th class="th-sm">fonction a executer<span class="glyphicon glyphicon-sort"></span>
                              
                                </th>
                                 </tr>
                      </thead>

	



		<?php
				if($materiels != null) {
					foreach ($materiels as $materiel) {
			?>
			<tr class="element">
				<td class="data"><?php echo $materiel->id ?></td>
				<td class="data"><?php echo $materiel->etat_materiel?></td>
				<td class="data"><?php echo $materiel->type_materiel ?></td>
				<td class="data"><?php echo $materiel->fournisseur ?></td>
				<td class="data"><?php echo $materiel->marque ?></td>
					<td class="data"><?php echo $materiel->numero_serie ?></td>
				<td class="data"><?php echo $materiel->date_achat?></td>
				<td class="data"><?php echo $materiel->garantie ?></td>
				

				<td>
					<a href="<?php echo 'controller/matController.php?action=read&id=' . $materiel->id ?>">
	  <button type="button" class="btn btn-success bt"name="modifier">modifier</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

					</a>
				
					<a href="<?php echo 'controller/matController.php?action=delete&id=' . $materiel->id ?>"></a>
<button type="button" class="btn btn-danger bt"name="suprimmer">suprimmer</button>&nbsp;&nbsp;&nbsp;

					
				</td>
			</tr>
			<?php
					}
				}
			?>
		</table>


 
   	
		</div>
	</div>
		
	</div>

 
   <script type="text/javascript">
   //PREMIERE METHODE//
    // jQuery('.alert').fadeIn().delay(3000).fadeOut();//
    //DEUXIEME METHODE//
    jQuery('.alert').fadeIn();
jQuery('.alert').queue(function(){
setTimeout(function(){
jQuery('.alert').dequeue();
}, 2000 );
});
jQuery('.alert').fadeOut();





   </script>

	</body>

</html>