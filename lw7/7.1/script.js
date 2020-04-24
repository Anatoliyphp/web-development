let n = ['a'];
isPrimeNumber(n);

function isPrimeNumber(n){
  let isNumberArray = n.every(isInteger);

  function isInteger(elem){
  	return((typeof elem) === "number");
  }

  if (isNumberArray){
    if (n.length == 0){
  	  console.log('Данные не введены')
    }
    else{
      for (let y = 0; y < n.length; y++){
    	    if ((n[y] % 2) == 0){
    		    if(n[y] == 2){
    			    console.log(n[y], ' простое число');
    	        }
    	        else
    	        {
    	    	    console.log(n[y], ' не простое число');
    	        }
    	    }
            else{
        	    console.log(n[y], ' простое число');
            }
      }
    }
  }
  else{
  	console.log('Данные введены некорректно');
  }
}