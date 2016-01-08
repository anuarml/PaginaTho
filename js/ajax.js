function ajaxRequest(method, url, handle, data){
	var xmlhttp;

	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else { // code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange = function (){
		if (xmlhttp.readyState==4 && xmlhttp.status==200){
			var response = xmlhttp.responseText.trim()
			try{
                var obj = JSON.parse(response);
            	handle(obj);
            }
	        catch(e){
	            bootbox.alert('ERROR: ' + response);
				console.log(response +' '+e.message);
	        }
		}
	};
	// Llamar al web service del lado del servidor.
	xmlhttp.open( method, url, true);
	if(method == 'POST'){
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	}
	xmlhttp.send(data);
}