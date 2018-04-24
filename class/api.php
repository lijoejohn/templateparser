<?php 
/*!
 * template parser client js for morningtrain
 * Copyright(c) 2018 Lijo E John
 * MIT Licensed
 */
Class Api {

	protected $template = '';

	/**
	* constructor
	*/
	public function __construct() 
	{
		$this->set_template();
	}

	/**
	* funtion to set the template to its its protected property
	* @param null 
	* @return null
	*/

	public function set_template(){
		$this->template = "Dear {%employee_name%},

		Congratulations!

		In recognition of your contribution towards {%company_name%}, We are pleased to inform you that your compensation has been revised effective from {%date%}.

		Kindly see the attached e-letter- revision copy for the further reference.

		Kindly keep this as strictly private and confidential. Kindly submit a signed hard copy of the same to the {%department_name%} as part of acknowledgment.

		We look forward to your continued contribution for  {%company_name%} to set new benchmarks for the organization/industry and beyond in the coming years.";
	}
	
	/**
	* funtion to get the template
	* @param null 
	* @return string template
	*/

	public function get_template(){
		return $this->template;
	}

	/**
	* function to translate an HTML template with placeholders into a HTML string with
	placeholders replaced by the corresponding values. 
	* @param $post_data array
	* @return string template
	*/

	public function set_appraisal_letter($post_data){ 

		// Break it up into the search and replace arrays
		$search 	= array();
		$replace 	= array();
		foreach ($post_data AS $index => $value)
		{
			$search[] = "{%" . $index . "%}"; // Wrapping the text in "{%...%}"
			$replace[] = "<b>".$value."</b>";
		}
		// Do the replacement
		$this->template = str_replace($search, $replace, $this->template);
	}
} 