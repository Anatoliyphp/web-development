let n = [1, 2, 3, 4];
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
        for(let i = 2; i <= n[y]; i++){
    	  console.log(n[y], 'is prime number');
    	  for(let j = 2; j < i; j++){
    	  	if ((i % j) === 0){
              console.log(n[y], 'is not prime number');
              break;
            }
          }
        }
      }
    }
  }
  else{
  	console.log('Данные введены некорректно');
  }
}