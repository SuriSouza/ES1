<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <script language="JavaScript" src="backj.js"></script>
<title>Entrar</title>
</head>
<body >
   

    <form class ="box1" action="inserir.php" method="POST">
            <h1>Entrada</h1>

            <p>
            <input type="button"  onclick="selecionaVaga(this.value)"  name ="v" id="1" value ="1">
            <input type="button"  onclick="selecionaVaga(this.value)"  name ="v" id="2" value ="2">
            <input type="button"  onclick="selecionaVaga(this.value)"  name ="v" id="3" value ="3">
            <input type="button"  onclick="selecionaVaga(this.value)" name ="v" id="4" value ="4">
            <input type="button"  onclick="selecionaVaga(this.value)"  name ="v" id="5" value ="5">
            <input type="button"  onclick="selecionaVaga(this.value)"  name ="v" id="6" value ="6">
        

        
            </p>
            <p>
                <input type="button"  name =""id="7" value ="7">
                <input type="button"  name =""id="8" value ="8">
                <input type="button"  name =""id="9" value ="9">
                <input type="button"  name =""id="10" value ="10">
                <input type="button"  name =""id="11" value ="11">
                <input type="button"  name =""id="12" value ="12">
                
            </p>
            <p>
                    <input type="button"  name =""id="13" value ="13">
                    <input type="button"  name =""id="14" value ="14">
                    <input type="button"  name =""id="15" value ="15">
                    <input type="button"  name =""id="16" value ="16">
                    <input type="button"  name =""id="17" value ="17">
                    <input type="button"  name =""id="18" value ="18">
                

                
                       
            </p>
                <p>
                        <input type="button"  name =""id="19" value ="19">
                        <input type="button"  name =""id="20" value ="20">
                        <input type="button"  name =""id="21" value ="21">
                        <input type="button"  name =""id="22" value ="22">
                        <input type="button"  name =""id="23" value ="23">
                        <input type="button"  name =""id="24" value ="24">
                </p>
   
                                <p id="data">
                            <?php 
                                $data = date("d/m/Y", mktime(gmdate("d"), gmdate("m"), gmdate("Y")));
                                $hora = date("H:i:s", mktime(gmdate("H")-3, gmdate("i"), gmdate("s")));

                                print "Data Atual.: " .$data.'<br>';
                                print "Hora Atual.: " .$hora;
                            ?>
                        
                    
                     </p>

                    <input type ="button"  value="confirmar vaga" onclick="confirmaVaga()">
                    <input type ="submit" onclick="window.location='index.php';" value="Confirmar">
    
     </p>



</div>




</body>



</html>

