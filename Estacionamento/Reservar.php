<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
<title>Reserva</title>
</head>
<body >
 

    <form class ="box1">
            <p>
            <input type="button"  name ="" value ="1">
            <input type="button"  name ="" value ="2">
            <input type="button"  name ="" value ="3">
            <input type="button"  name ="" value ="4">
            <input type="button"  name ="" value ="5">
            <input type="button"  name ="" value ="6">
        

        
            </p>
            <p>
                <input type="button"  name ="" value ="7">
                <input type="button"  name ="" value ="8">
                <input type="button"  name ="" value ="9">
                <input type="button"  name ="" value ="10">
                <input type="button"  name ="" value ="11">
                <input type="button"  name ="" value ="12">
                
            </p>
            <p>
                    <input type="button"  name ="" value ="13">
                    <input type="button"  name ="" value ="14">
                    <input type="button"  name ="" value ="15">
                    <input type="button"  name ="" value ="16">
                    <input type="button"  name ="" value ="17">
                    <input type="button"  name ="" value ="18">
                

                
                       
            </p>
                <p>
                        <input type="button"  name ="" value ="19">
                        <input type="button"  name ="" value ="20">
                        <input type="button"  name ="" value ="21">
                        <input type="button"  name ="" value ="22">
                        <input type="button"  name ="" value ="23">
                        <input type="button"  name ="" value ="24">
                </p>
                     <p id="case">
                        
                        
                        <input id="botao" type ="button" onclick="window.location='indexC.html';" value="Selecionar Diária">
                        <input id="botao" type ="button" onclick="window.location='indexC.html';" value="Selecionar Mensal">

                        <p id="data" >
                            <?php 
                                $data = date("d/m/Y", mktime(gmdate("d"), gmdate("m"), gmdate("Y")));
                                $hora = date("H:i:s", mktime(gmdate("H")-3, gmdate("i"), gmdate("s")));

                                print "Data Atual.: " .$data.'<br>';
                                print "Hora Atual.: " .$hora;
                            ?>
                        
                    
                     </p>
</form>

    







</body>
