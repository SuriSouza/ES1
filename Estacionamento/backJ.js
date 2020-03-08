
		var v = 0;
        


        selecionaVaga = function (vagatemp)
        {
            
            v = vagatemp;
            
        }

        confirmaVaga = function(){
           	if(v < 25 && v > 0 ){
        		alert("A vaga selecionada foi: " + v);
        		vetor[v].numeroVaga  =  v;
        	}
        	else{
        		alert("Nenhuma Vaga Foi Selecionada!");
        	}
        	return v;
        }




