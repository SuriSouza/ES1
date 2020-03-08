
<?php

                        
// Verifica se usuário escolheu algum número
function enviar(){
               
                 
  
	$_POST[''] = ( isset($_POST['bike']) ) ? true : null;
$_POST['car']  = ( isset($_POST['car']) )  ? true : null;

# Visualizando os dados
var_dump($_POST);
               
}

/**
 * 
 */
class Vaga{
	public $num;
	public $dataE;
	public $horaE;
	public $situacao;



	function __construct(argument)
	{
		# code...
	}
}
  

?>