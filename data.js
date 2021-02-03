

function func33(id){
	var num = 0;
	if(document.getElementById("do150kv").checked){
		num = 129000;
	}
	else if(document.getElementById("do600kv").checked){
		num = 149000;
	}

	if(document.getElementById("plohayaTeplo").checked){
		num = 149000;
	}
	else if(document.getElementById("sredTeplo").checked){
		num = 149000;
	}
	else if(document.getElementById("horowTeplo").checked){
		num = 129000;
	}
	if(document.getElementById("rangevalue2").value > 20){
	num += (document.getElementById("rangevalue2").value - 20) * 4000;
	}


	if(document.getElementById("kolvoKotlov2").checked){
	num += 50000;
	}
	else if(document.getElementById("kolvoKotlov3").checked){
		num += 100000;
	}

	num += document.getElementById("rangevalue3").value * 4000;

	if(document.getElementById("rab1").checked){
		num += 19900;
	}
	if(document.getElementById("srok1").checked){
		num *= 1.5;
	}
	else if(document.getElementById("srok2").checked){
		num *= 1.1;
	}

	if(!document.getElementById("do150kv").checked && !document.getElementById("do600kv").checked){
		document.getElementById(id).style.display = "block";
	document.getElementById("result").innerHTML = "Пожалуйста заполните все данные!"
	}
	else if(!document.getElementById("plohayaTeplo").checked && !document.getElementById("sredTeplo").checked &&
			!document.getElementById("horowTeplo").checked){
		document.getElementById(id).style.display = "block";
		document.getElementById("result").innerHTML = "Пожалуйста аполните все данные!"
	}
	else if(!document.getElementById("kolvoKotlov1").checked && 
			!document.getElementById("kolvoKotlov2").checked && !document.getElementById("kolvoKotlov3").checked){
		document.getElementById(id).style.display = "block";
		document.getElementById("result").innerHTML = "Пожалуйста заполните все данные!"
	}
	else if(!document.getElementById("rab1").checked && !document.getElementById("rab2").checked){
		document.getElementById(id).style.display = "block";
		document.getElementById("result").innerHTML = "Пожалуйста заполните все данные!"
	}
	else if(!document.getElementById("srok1").checked && !document.getElementById("srok2").checked && !document.getElementById("srok3").checked){
		document.getElementById(id).style.display = "block";
		document.getElementById("result").innerHTML = "Пожалуйста заполните все данные!"
	}
	else{
	document.getElementById(id).style.display = "block";
	document.getElementById("result").innerHTML = Math.round(num);
}
}

function func7(){
	document.getElementById("gazop").style.display = "none";
	document.getElementById("liniya").style.display = "none";
}
function func5(){
document.getElementById("gazop").style.display = "block";
document.getElementById("liniya").style.display = "block";
}
function func6(){
	document.getElementById("gazop").style.display = "block";
	document.getElementById("liniya").style.display = "block";
}