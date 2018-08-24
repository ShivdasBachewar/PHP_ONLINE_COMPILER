function submit_user_program_to_compile() {
	if (!(user_program.value=="")) {
		URI_encoded_user_program = encodeURI(user_program.value); 
		//to transfer the data over internet effertlessly 
		//convert it into URI format
		//alert(URI_encoded_user_program);
		user_output.innerHTML = "Working...";
    	var xhttp = new XMLHttpRequest();
    	xhttp.onreadystatechange = function() {
    	if (this.readyState == 4 && this.status == 200) {
	        document.getElementById("user_output").innerHTML = this.responseText;
	    }};
	    xhttp.open("POST", "PHP/compile_this_php_program.php?source_program="+URI_encoded_user_program, true);
	    xhttp.send();
	}
}

function reset_whole_system() {	
	user_output.innerHTML 	= "//Compiler Output";
	user_program.value 	= "";
}

function submit_user_program_to_run() {
	if (!(user_program.value=="")) {
		URI_encoded_user_program = encodeURI(user_program.value); 
		//to transfer the data over internet effertlessly 
		//convert it into URI format
		//alert(URI_encoded_user_program);
		user_output.innerHTML = "Working...";
    	var xhttp = new XMLHttpRequest();
    	xhttp.onreadystatechange = function() {
    	if (this.readyState == 4 && this.status == 200) {
	        document.getElementById("user_output").innerHTML = decodeURI(this.responseText);
	    }};
	    xhttp.open("POST", "PHP/run_this_php_program.php?source_program="+URI_encoded_user_program, true);
	    xhttp.send();
	}
}
