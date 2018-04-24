<?php
/*!
 * template parser server for morningtrain
 * Copyright(c) 2018 Lijo E John
 * MIT Licensed
 */
include 'class\api.php';
$apiObj = new Api();
//check the api request method
if(isset($_POST['method']) && $_POST['method']=='set_template')
{
	//Create the mapping array
	$values = array(
		'employee_name'	=> (isset($_POST['employee_name']) && $_POST['employee_name']!=""?$_POST['employee_name']:"XXX"),
		'company_name' 	=> (isset($_POST['company_name'] )&& $_POST['company_name']!=""?$_POST['company_name']:"XXX"),
		'date'      	=> (isset($_POST['date'])&& $_POST['date']!=""?$_POST['date']:date("Y-m-d")),
		'department_name' 	=> (isset($_POST['department_name']) && $_POST['department_name']!=""?$_POST['department_name']:"XXX")
	);
	//Set the place holder tags
	$apiObj->set_appraisal_letter($values);
}
//Return the response
echo json_encode(array("status"=>1,"data"=>$apiObj->get_template()));
