<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
<title>Reserva</title>
</head>
<body >
 

    <form class ="box1">
            <p>
            <input type="button"  name ="" id="1" value ="1">
            <input type="button"  name =""id="1" value ="2">
            <input type="button"  name =""id="1" value ="3">
            <input type="button"  name =""id="1" value ="4">
            <input type="button"  name =""id="1" value ="5">
            <input type="button"  name =""id="1" value ="6">
        

        
            </p>
            <p>
                <input type="button"  name =""id="1" value ="7">
                <input type="button"  name =""id="1" value ="8">
                <input type="button"  name =""id="1" value ="9">
                <input type="button"  name =""id="1" value ="10">
                <input type="button"  name =""id="1" value ="11">
                <input type="button"  name =""id="1" value ="12">
                
            </p>
            <p>
                    <input type="button"  name =""id="2" value ="13">
                    <input type="button"  name =""id="2" value ="14">
                    <input type="button"  name =""id="2" value ="15">
                    <input type="button"  name =""id="2" value ="16">
                    <input type="button"  name =""id="2" value ="17">
                    <input type="button"  name =""id="2" value ="18">
                

                
                       
            </p>
                <p>
                        <input type="button"  name =""id="2" value ="19">
                        <input type="button"  name =""id="2" value ="20">
                        <input type="button"  name =""id="2" value ="21">
                        <input type="button"  name =""id="2" value ="22">
                        <input type="button"  name =""id="2" value ="23">
                        <input type="button"  name =""id="2" value ="24">
                </p>
                                        <p id="data" >
                            <?php 
                                $data = date("d/m/Y", mktime(gmdate("d"), gmdate("m"), gmdate("Y")));
                                $hora = date("H:i:s", mktime(gmdate("H")-3, gmdate("i"), gmdate("s")));

                                print "Data Atual.: " .$data.'<br>';
                                print "Hora Atual.: " .$hora;
                            ?>
                        
                    
                     </p>
            
                <input type ="text"readonly="true" placeholder="Calculo de preço">
                <input type ="button" onclick="window.location='indexC.html';" value="Confirmar">
            
             </p>
        
        </div>




</body>


</html>