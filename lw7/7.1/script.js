let n = [1, 2, 3, 4];
isPrimeNumber(n);

function isPrimeNumber(n){
  let isNumberArray = n.every(isInteger);
  let isPrime = false;

  function checkPrime(n){
    for(let i = 2; i <= n; i++){
      isPrime = true;
        for(let j = 2; j < i; j++){
          if ((i % j) === 0){
            isPrime = false;
            break;
          }
        }
    }
  }

  function isInteger(elem){
  	return((typeof elem) === "number");
  }

  if (isNumberArray){
    if (n.length == 0){
  	  console.log('Данные не введены')
    }
    else{
      for (let y = 0; y < n.length; y++){
        checkPrime(n[y]);
        if (isPrime){
          console.log(n[y], 'is prime number');
        }
        else{
          console.log(n[y], 'is not prime number');
        }
      }
    }
  }
  else{
  	console.log('Данные введены некорректно');
  }
}