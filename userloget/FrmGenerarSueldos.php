
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
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        
            <?php 
           $database = 'salario';
            
            
            //invoca al php en donde estan contenidas las funciones
           // include '../conexion.php';
            include 'funciones.php';
             // si el registro es la pantalla nuevo
              conexionlocal();
              $conectate=pg_connect("host=localhost port=5434 dbname=salario user=postgres password=postgres"
                    . "")or die ('Error al conectar a la base de datos');
            $consulta=pg_exec($conectate,"SELECT * from Salario where EXTRACT(MONTH FROM sal_fecha)= EXTRACT(MONTH FROM now()) and EXTRACT(YEAR FROM sal_fecha)= EXTRACT(YEAR FROM now())");
//***********************************Consulta sumatoria de descuentos*****************************
            $numregs=pg_numrows($consulta);

			if($numregs>0)
			{
			echo '<script type="text/javascript">
			alert("Sueldos del mes corriente ya ha sido Generado..!");
			 window.location="http://localhost/app/phpsueldos/userloget/FrmConsultaSueldo.php";
			 </script>';
			}
			 else{
                           Echo '<script type="text/javascript">
                                alert("Se Generaran Sueldos correspondientes al mes Corriente")
                                </script>';
                            
                            //se define el Query
                        
                            $query = "insert into salario (fun_cod,sal_fecha,sal_ips,sal_neto) 
                            select  f.fun_cod as fun_cod,now(),(cat_nom*9/100)as sal_ips,(cat_nom-(cat_nom*9/100)) as sal_neto from categoria c
                            INNER JOIN categoria_detalle cd
                            on c.cat_cod=cd.cat_cod
                            INNER JOIN funcionario f
                            on f.fun_cod=cd.fun_cod where f.fun_sit=true";
                            $ejecucion = pg_query($query)or die('Error al realizar la carga');
                            $query = '';
                            header("Refresh:0; url=http://localhost/app/phpsueldos/userloget/FrmConsultaSueldo.php");
                           
		}
                            
        ?>
    </body>
</html>
