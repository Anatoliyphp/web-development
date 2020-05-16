let left = document.getElementById('left');
let right = document.getElementById('right');
const slideBox = document.getElementById('block');
let I = 1;
let J = 12;

right.onclick = changerightPosition;
function changerightPosition() {
	if (J != 12){
		I = J;
		slideBox.appendChild(document.getElementById(I+1));
		J++;
	}
	else{
	    if (I > 12){
		  I = 1;
	    }
	    slideBox.appendChild(document.getElementById(I));
	}
    I++;
}

left.onclick = changeleftPosition;
function changeleftPosition() {
	if (I != 1){
		J = I;
		slideBox.prepend(document.getElementById(J));
		I--;
	}
	else{
		if (J < 1){
		  J = 12;
	    }
	    slideBox.prepend(document.getElementById(J));
	}
	J--;
}

