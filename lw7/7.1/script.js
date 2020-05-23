let n = [1, 2, 3, 4];
let isNumberArray = n.every(isInteger);
let isPrime = false;
isPrimeNumber(n);

function isInteger(elem){
  return((typeof elem) === "number");
}

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

function isPrimeNumber(n){
  checkPrime(n);
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