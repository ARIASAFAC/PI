<?php
session_start();    
?>

<!DOCTYPE html>
<html>
<head>
	<title>GoldenBerry Trading</title>
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
    <style type="text/css">

form{
    max-width: 400px;
    width: calc(100% - 40px);
    padding: 28px;
   background-color: #fff;
    border-radius: 5px;
    margin: auto;
}
form h3{
    margin: 5px 0;
    font-size: 15px;
    
}
form input{
    padding: 7px 10px;
    width: calc(100% - 22px);
    text-align:center;
    font-size: 17px;
    margin-bottom: 10px;
}
form button{
    padding: 15px 15px;
    width: calc(100%);
    font-size: 17px;
    margin: 20px 0;
    
}
form select{
    padding: 10px 5px;
    width: calc(68%);
    font-size: 17px;
    margin: 20px 0;
    
}
form p{
    margin: 0;
    margin-bottom: 1px;
    color: rgb(223, 4, 4);
    font-size: 14px;
}
form I{
    padding: 7px 1px;
    width: calc(100% - 22px);
    text-align:center;
    font-size: 17px;
    margin-bottom: 10px;
}
</style>
</head>
<body>
	<header>
		<div class="logo-place"><a href="index.php"><img src="imagenes/gbtranding.png"></a></div>
		<div class="search-place">
			<input type="text" id="idbusqueda" placeholder="Encuentra todo lo que necesitas...">
			<button class="btn-main btn-search"><i class="fa fa-search" aria-hidden="true"></i></button>
		</div>
		<div class="options-place">
		<?php
		if(isset($_SESSION['ID_P'])){
			
			echo 
			'<div class="item-option" ><a href="publicacion.php">
			<i class="fa fa-user-circle-o" aria-hidden="true"></i>
			<p>'.$_SESSION['nombre'].'</a></p>
			</div>
			<div class="item-option" title="CERRAR SESION"><a href="login.php">
			<i class="fa fa-sign-out" aria-hidden="true"></i></a></div>
			';
            
				
		}else{
		?>
		<div class="item-option" title="Registrate"><i class="fa fa-user-circle-o" aria-hidden="true"></i></div>
		<div class="item-option" title="Ingresar"><i class="fa fa-sign-in" aria-hidden="true"></i></div>
		<?php	
		}
		?>
		</div>
		
	</header>
	<div class="main-content">
		<div class="content-page">
        <form action="servicios/publicacion.php" method="POST" enctype="multipart/form-data">
                <center><h2>Tu documento</h2></center>
                <I><input type="text" REQUIRED name="ID_P" value="<?=$_SESSION['ID_P']?>" readonly></I>
                <center><h2>Ingresa los datos</h2></center>
                <input type="text" REQUIRED name="titulo" placeholder="T??tulo">
                <input type="text" REQUIRED name="descrip" placeholder="Descripci??n">
                <input type="text" REQUIRED name="cantidad" placeholder="Cantidad">
                <?php
                date_default_timezone_set('America/Bogota');
                $fecha=date("Y-m-d H:i:s");
                ?>
               <center><label for="pseudo">Fecha actual</label></center>  
                <input type="datetime" name="fecha" value="<?=$fecha?>" readonly>
                <input type="file" name="imagen">
                <button type="submit">Publicar</button>
            </form>
			</div>
		</div>
	</div>
	<script type="text/javascript">
    </script>
</body>
</html>

