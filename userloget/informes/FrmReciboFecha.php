
<!DOCTYPE html>
<html>
    
    <head>
        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Generar Recibo Por Fechas</title>
        <link href="../Site.css" rel="stylesheet">
        <link href="../tabla.css" rel="stylesheet">
        <link href="../style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width" />
        <meta charset="utf-8" /> 
		<meta http-equiv="X-UA-Compatible" content="chrome=1" /><!-- Optimistically rendering in Chrome Frame in IE. --> 
                <link rel="stylesheet" href="../twitter-signup.css" type="text/css" />
  
    </head>
     <?php include("../principal.php"); ?>
    <body>
        <script>  
         function Refrescar(){
           location.reload();
        }
        //para agregar una linea en mi tabla
    
        //para borrar un registro de mi tabla
       
        function ActualizaInput(){
            document.getElementById("cinConfirm").value = " ";
           
        }
      
        
      
     
</script>
       

               <div class='clearfix'></div>
                    <div id="twitter">
                        <FORM action="ReciboFuncFecha.php" method="post">
                            <div class='clearfix'></div>
                            <div id='name' class='outerDiv'>    
                            <label for="txtCI">CI Nº</label> 
                            <input type="text" name="txtCIConfirm" onKeypress="if ((event.keyCode < 45 || event.keyCode > 57) && (event.keyCode != 13)) event.returnValue = false;" id="cinConfirm" maxlength="10" required/>
                            </div>
                            <div class='clearfix'></div>
                             <div id='name' class='outerDiv'>    
                            <label for="txtFecha"> Fecha</label> 
                            <input type="date" name="txtFecha" id="fechaPagoHasta" required />
                            </div>
                             <div class='clearfix'></div>
                            <input type="submit" name="submit" value="Generar" />
                            <input type="button" name="cancel" value="Cancelar" onclick="window.location='http://localhost/app/phpsueldos/userloget/principal.php'"/>  
                    
                            
                            <div class='clearfix'></div>
                         </form>  
                    
    </div>
 </body>


 
 
</html>
