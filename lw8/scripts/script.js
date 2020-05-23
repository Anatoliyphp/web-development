let left = document.getElementById('left');
let right = document.getElementById('right');
const slideBox = document.getElementById('block');
let I = 1;
let J = 12;

right.onclick = changeRightPosition;
function changeRightPosition() {
  if (J != 12){
    I = J + 1;
    slideBox.appendChild(document.getElementById("Film_" + I));
    J++;
  }
  else{
    if (I > 12 || I < 1){
      I = 1;
    }
    slideBox.appendChild(document.getElementById("Film_" + I));
  }
  I++;
}

left.onclick = changeLeftPosition;
function changeLeftPosition() {
  if (I != 1){
    J = I - 1;
    slideBox.prepend(document.getElementById("Film_" + J));
    I--;
  }
  else{
    if (J < 1 || J > 12){
      J = 12;
    }
    slideBox.prepend(document.getElementById("Film_" + J));
  }
  J--;
}