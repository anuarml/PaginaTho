<?php
    // ----------------SQL Server config------------------------
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'paginatho';

    $db_url = 'mysql:host='.$host.';dbname='.$database;


    //----------------- DB tables names -------------------------
	$table_user = 'usuarios';
	$table_CxcDMov = 'CxcDMov';
    $table_pay_type = 'FormaPago';
	$table_cte = 'cte';
	$table_concept = 'Concepto';
	$table_CteEnviarA = 'CteEnviarA';
    $table_cxc = 'Cxc';
	$table_Empresa = 'Empresa';
	$table_Sucursal = 'Sucursal';
	$table_cxcD = 'CxcD';
	$table_msgList = 'MensajeLista';
	$table_Observacion = 'Observacion';
	$table_CxcSaldo = 'CxcSaldo';
	$table_Moneda = 'Mon';
	$table_CxcPendiente = 'CxcPendiente';
	$table_ThoUsuarioAcceso = 'ThoUsuarioAcceso';
	//$table_CxcPendiente = 'CxcPendiente';
	$table_FormaPago = 'FormaPago';
	$table_EmpresaCfg = 'EmpresaCfg';
	$table_MovTipo = 'MovTipo';
	$table_Embarque = 'Embarque';
	$table_EmbarqueMov = 'EmbarqueMov';
	
	//---------DB views names---------------------------
	$view_CxcInfo = 'CxcInfo';
	$view_CxcRef = 'CxcRef';
	
	//----------DB procedures names--------------------------
	$prod_ValidacionLogin = 'spThoValidaPwdWeb';
	$prod_DescuentoPPP = 'spThoPrue';
	$prod_ObtenerConceptos = 'spThoConceptosCxcWeb';
	$prod_Afectar = 'spAfectar';
?>