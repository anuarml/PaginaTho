function requestConfigurations(company){
	var handle = function (obj){
		if(obj){
			oCompanyCfg = obj;
			oStorage.store('oCompanyCfg', oCompanyCfg);
			window.location = 'index.html';
		}
	};

	var url = 'php/db/getConfigurations.php?company='+ company;

	ajaxRequest('GET', url, handle, null);
}

