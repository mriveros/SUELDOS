<?php
if (!isset($_SESSION) ){session_start();}

if(($_SESSION['nombre_usuario'])=='')
   {
    header("Refresh:0; url=http://localhost/app/phpsueldos/index.php"); 
   }
?>
<!DOCTYPE html>
<!--
/*
 * Autor: Marcos A. Riveros.
 * Año: 2015
 * Sistema de Sueldos INTN
 */
-->
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Principal</title>
    <?php
              echo '<div align="right"><p><strong><H4><i> Bienvenid@ !</i> '.$_SESSION["nombre_usuario"].'</h4></strong></p></div>';
    ?>
	<div class="header">
	  <div class="header_resize">
                <div class="logo">
			<h1><a href="http://localhost/app/phpsueldos/userloget/principal.php"><span>INTN</span>- SUELDOS<br />
			<small>Instituto Nacional de Tecnologia Normalizacion y Metrologia</small></a></h1> 
		</div>
              </br>
	  </div>
	  </div>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css" >
    <script src="../jquery-1.3.2.min.js" tyzzpe="text/javascript" ></script>
    <script src="js/menu.js" type="text/javascript"></script> 
</head>
<body style="background-image:url('../logointn.jpg'); 
             background-position:center;  
             background-repeat:no-repeat; 
             background-attachment :fixed;">
    

 <div class="mainWrap">
    <a id="touch-menu" class="mobile-menu" href="#"><i class="icon-reorder"></i>Menu</a>
    <nav>
    <ul class="menu">
   <li><a href="#"><i class="icon-user"></i>CARGA DATOS</a>
   <ul class="sub-menu">
		<li><a href="#">USUARIOS</a>
                        <ul><li><a href="http://localhost/app/phpsueldos/userloget/FrmusuarioNuevo.php">NUEVO</a></li>
                        <li><a href="http://localhost/app/phpsueldos/userloget/FrmusuarioModif.php">MODIFICAR</a></li>
                        <li><a href="http://localhost/app/phpsueldos/userloget/FrmusuarioElim.php">ELIMINAR</a></li>
                        </ul>
                </li>
		<li><a href="#">FUNCIONARIOS</a>
                    <ul><li><a href="http://localhost/app/phpsueldos/userloget/FrmFuncionarioNuevo.php">NUEVO</a></li>
                        <li><a href="http://localhost/app/phpsueldos/userloget/FrmFuncionarioModif.php">MODIFICAR</a></li>
                        <li><a href="http://localhost/app/phpsueldos/userloget/FrmFuncionarioElim.php">ELIMINAR</a></li>
                        </ul>
                </li>
                <li><a href="#">CATEGORÍAS</a>
                        <ul><li><a  href="http://localhost/app/phpsueldos/userloget/FrmCategoriaNuevo.php">NUEVO</a></li>
                        <li><a href="http://localhost/app/phpsueldos/userloget/FrmCategoriaModif.php">MODIFICAR</a></li>
                        <li><a href="http://localhost/app/phpsueldos/userloget/FrmCategoriaElim.php">ELIMINAR</a></li>
                        </ul>
                </li>
		<li><a href="#">CARGO</a>
                        <ul><li><a href="http://localhost/app/phpsueldos/userloget/FrmCargoNuevo.php">NUEVO</a></li>
                        <li><a href="http://localhost/app/phpsueldos/userloget/FrmCargoModif.php">MODIFICAR</a></li>
                        <li><a href="http://localhost/app/phpsueldos/userloget/FrmCargoElim.php">ELIMINAR</a></li>
                        </ul>
                </li>
		<li><a  href="#">ORGANISMO</a>
                    <ul><li><a href="http://localhost/app/phpsueldos/userloget/FrmOrganismoNuevo.php">NUEVO</a></li>
                        <li><a href="http://localhost/app/phpsueldos/userloget/FrmOrganismoModif.php">MODIFICAR</a></li>
                        <li><a href="http://localhost/app/phpsueldos/userloget/FrmOrganismoElim.php">ELIMINAR</a></li>
                        </ul>
                </li>
                <li><a  href="#">LINEA</a>
                    <ul><li><a href="http://localhost/app/phpsueldos/userloget/FrmLineaNuevo.php">NUEVO</a></li>
                        <li><a href="http://localhost/app/phpsueldos/userloget/FrmLineaModif.php">MODIFICAR</a></li>
                        <li><a href="http://localhost/app/phpsueldos/userloget/FrmLineaElim.php">ELIMINAR</a></li>
                        </ul>
                </li>
		<li><a href="#">TIPO DESCUENTOS</a>
                    <ul><li><a href="http://localhost/app/phpsueldos/userloget/FrmTipoDescuentoNuevo.php">NUEVO</a></li>
                        <li><a href="http://localhost/app/phpsueldos/userloget/FrmTipoDescuentoModif.php">MODIFICAR</a></li>
                        <li><a href="http://localhost/app/phpsueldos/userloget/FrmTipoDescuentoElim.php">ELIMINAR</a></li>
                        </ul>
                </li>
                <li><a href="#">CATEGORIA FUNCIONARIO</a>
                    <ul><li><a href="http://localhost/app/phpsueldos/userloget/FrmCategoriaDetNuevo.php">NUEVO</a></li>
                        <li><a href="http://localhost/app/phpsueldos/userloget/FrmCategoriaDetModif.php">MODIFICAR</a></li>
                        <li><a href="http://localhost/app/phpsueldos/userloget/FrmCategoriaDetElim.php">ELIMINAR</a></li>
                        </ul>
                </li>
                <li><a href="#">ORGANISMO FUNCIONARIO</a>
                    <ul><li><a href="http://localhost/app/phpsueldos/userloget/FrmOrganismoDetNuevo.php">NUEVO</a></li>
                        <li><a href="http://localhost/app/phpsueldos/userloget/FrmOrganismoDetModif.php">MODIFICAR</a></li>
                        <li><a href="http://localhost/app/phpsueldos/userloget/FrmOrganismoDetElim.php">ELIMINAR</a></li>
                        </ul>
                </li>
                <li><a href="#">LINEA FUNCIONARIO</a>
                    <ul><li><a href="http://localhost/app/phpsueldos/userloget/FrmLineaDetNuevo.php">NUEVO</a></li>
                        <li><a href="http://localhost/app/phpsueldos/userloget/FrmLineaDetModif.php">MODIFICAR</a></li>
                        <li><a href="http://localhost/app/phpsueldos/userloget/FrmLineaDetElim.php">ELIMINAR</a></li>
                        </ul>
                </li>
                </ul>
    </li>
   <li><a href="#"><i class="icon-money"></i>SUELDOS</a>
		<ul class="sub-menu">
                <li><a  href="http://localhost/app/phpsueldos/userloget/FrmGenerarSueldos.php">GENERAR SUELDOS</a>
		<li><a  href="#">REGISTRAR</a>
                    <ul><li><a href="http://localhost/app/phpsueldos/userloget/FrmSalarioF10.php">FUENTE 10</a></li>
                        <li><a href="http://localhost/app/phpsueldos/userloget/FrmSalarioF30.php">FUENTE 30</a>
                    </ul>
                <li><a href="http://localhost/app/phpsueldos/userloget/FrmConsultaSueldo10.php">SUELDOS FUENTE 10</a></li>
                <li><a href="http://localhost/app/phpsueldos/userloget/FrmConsultaSueldo30.php">SUELDOS FUENTE 30</a></li>
                <li><a href="http://localhost/app/phpsueldos/userloget/FrmConsultaSueldo.php">SUELDOS GENERAL</a></li>
                </li>
		</ul>
   </li>
  <li><a  href="#"><i class="icon-folder-close-alt"></i>IMPRESIONES</a>
  <ul class="sub-menu">
  <li><a href="http://localhost/app/phpsueldos/userloget/informes/FrmGenerarReciboOrgan.php">GENERAR RECIBOS</a></li>    
  <li><a href="http://localhost/app/phpsueldos/userloget/informes/FrmReciboFunc.php">IMPRIMIR RECIBO</a></li>
   <li><a href="#">SALARIO / RESUMEN</a>
    <ul>
   <li><a href="http://localhost/app/phpsueldos/userloget/informes/InformeSueldoF10.php">SALARIO FUENTE 10</a></li>
   <li><a href="http://localhost/app/phpsueldos/userloget/informes/InformeSueldoF30.php">SALARIO FUENTE 30</a></li>
    <li><a href="http://localhost/app/phpsueldos/userloget/informes/FrmOrganismos.php">POR ORGANISMOS</a></li>
     <li><a href="http://localhost/app/phpsueldos/userloget/informes/InformeSueldoResumen.php">TOTAL GENERAL</a></li>
     <li><a href="http://localhost/app/phpsueldos/userloget/informes/InformeSueldoResumenF10.php">TOTAL GENERAL FUENTE 10</a></li>
     <li><a href="http://localhost/app/phpsueldos/userloget/informes/InformeSueldoResumenF30.php">TOTAL GENERAL FUENTE 30</a></li>
    </ul>
       <li><a href="#">EXPORTAR A EXCEL</a>
    <ul>
       <li><a href="http://localhost/app/phpsueldos/userloget/excel/informeExcelF10.php">SALARIO FUENTE 10</a></li>
       <li><a href="http://localhost/app/phpsueldos/userloget/excel/informeExcelF30.php">SALARIO FUENTE 30</a></li>
        <li><a href="http://localhost/app/phpsueldos/userloget/excel/informeExcelTotal.php">TOTAL GENERAL</a></li>
    </ul>
   </li>
    <li><a href="#">GENERAR TXT</a>
    <ul>
       <li><a href="http://localhost/app/phpsueldos/userloget/GenTXT/InformeTxt10.php">FUENTE 10</a></li>
       <li><a href="http://localhost/app/phpsueldos/userloget/GenTXT/InformeTxt30.php">FUENTE 30</a></li>
        <li><a href="http://localhost/app/phpsueldos/userloget/GenTXT/InformeTxtT.php">GENERAL</a></li>
    </ul>
   </li>
   </ul>
  </li>
  <li><a  href="#"><i class="icon-print"></i>CONSULTAS</a>
  <ul>
   <li><a href="http://localhost/app/phpsueldos/userloget/informes/FrmReciboFecha.php">RECIBO POR FECHA</a></li>
   <li><a href="http://localhost/app/phpsueldos/userloget/informes/FrmOrganismosFecha.php">ORGANISMOS POR FECHA</a></li>
   <li><a href="http://localhost/app/phpsueldos/userloget/informes/FrmResumenFunc.php">FUNCIONARIO FECHA</a></li>
   <li><a href="">RESUMEN FECHA</a>
   <ul>
   <li><a href="http://localhost/app/phpsueldos/userloget/informes/FrmResumenTotalFecha.php">RESUMEN TOTAL</a></li>
   <li><a href="http://localhost/app/phpsueldos/userloget/informes/FrmResumenF10Fecha.php">RESUMEN F10</a></li>
    <li><a href="http://localhost/app/phpsueldos/userloget/informes/FrmResumenF30Fecha.php">RESUMEN F30</a></li>
   </ul>
   </li>
   </ul>
   </li>
  <li><a  href="http://localhost/app/phpsueldos/logout.php"><i class="icon-warning-sign"></i>SALIR</a></li>
  <li><a  href="http://localhost/app/phpsueldos/userloget/Manual de Usuario.pdf"><i class="icon-info-sign"></i>INFO</a></li>
  </ul>
  </nav>       
 </div><!--end mainWrap-->
</body>
</html>