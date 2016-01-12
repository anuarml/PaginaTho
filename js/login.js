var aOffice = null;

window.onload = function(){
    initFields();
	//initEvents()
    //requestCompanyList();
};	
		
function initFields(){
    //oSltCompany = document.getElementById('slt_company');
	//oSltOffice = document.getElementById('slt_office');
	oTxtUsername = document.getElementById('txt_username');
	oTxtPassword = document.getElementById('txt_password');
}

/*function initEvents(){
	oSltCompany.onchange = function(){
		oSltOffice.selectedIndex = 0;
		oSltOffice.innerHTML = '<option hidden class="initial_config"></option>';
		requestOfficeList();
	}
}*/

/*function validateOptions(){
	if(oSltCompany.value){
		if(parseInt(oSltOffice.value)>=0){
			return true;
		}else{
			bootbox.alert("Selecciona un sucursal");
		}
	}else{
		bootbox.alert("Selecciona una empresa");
		return false;
	}
}*/

function login(){
	//if(validateOptions()){
		requestUser();
	//}
}

function requestUser(){
 
	username = oTxtUsername.value;
	password = oTxtPassword.value;
	var handle = function (obj){
		
		if(obj){
			/*var nSelectedOffice = parseInt(oSltOffice.value);
			var oOffice = aOffice[nSelectedOffice];

			obj.company = oSltCompany.value;
			obj.office = {
			   	id: oOffice.id,
				name: oOffice.name
			};*/
			//oStorage.store('oUserCfg', oUserCfg);
			//oStorage.store('oUser',obj);
			//window.location = 'index.html';
			//decryptPassword(obj);
			bootbox.alert("Bienvenido",function(){
				window.location="adminPanel.php";
			});
			//console.log(obj);
			
		}else{
			bootbox.alert("El nombre de usuario y la contraseña no coinciden");
		}
	};

	var url = 'php/db/getUser.php?username='+username +'&password='+ password;
	ajaxRequest('GET', url, handle, null);
	
}

/*function decryptPassword(user){
	password = oTxtPassword.value;
	
	var handle = function (obj){
		
		if(obj){
			oStorage.store('oUser',user);
			requestConfigurations(user.company);
			//window.location = 'index.html';
		}else{
			bootbox.alert("Contraseña incorrecta");
		}
	};
	
	var url = 'php/db/ThoDecrypt.php?username='+ username +'&password='+ password +'&module='+ oUserCfg.module;

	ajaxRequest('GET', url, handle, null);
}*/

/*function requestCompanyList(){
	var handle = function (obj){
		if(obj){
			var nLen = obj.length;
			for(var i=0; i<nLen; i++){
				var oOptionCompany = document.createElement('option');
				var oCompany = obj[i];
				oOptionCompany.value = oCompany.company;
                oOptionCompany.innerHTML = oCompany.company;
				oOptionCompany.className = "initial_config";

                oSltCompany.appendChild(oOptionCompany);
			}
		}
	};
	ajaxRequest('GET', 'php/db/getCompanyList.php', handle, null);
}*/

/*function requestOfficeList(){
	var handle = function (obj){
		if(obj){
			var nLen = obj.length;
			aOffice = obj;

			for(var i=0; i<nLen; i++){
				var oOptionOffice = document.createElement('option');
				//var oOffice = obj[i];
				oOptionOffice.value = i; //oOffice.officeId;
                oOptionOffice.innerHTML = aOffice[i].name;
				oOptionOffice.className = "initial_config";

                oSltOffice.appendChild(oOptionOffice);
			}
		}
	};
	ajaxRequest('GET', 'php/db/getOfficeList.php?company=' + oSltCompany.value, handle, null);
}*/

