<?php

/**
 * Represents the article itself, and all of its data
 */
class Mytestmodel extends EMongoDocument{

	// We are going to predefine the schema here
	//public $id; // The user id, creator
	public $date; // The article title
	public $desc; // The article content
	public $amount; // The article content


	function collectionName(){
		return 'trans';
	}

	

	public function relations(){
		return array(
		);
	}



	/**
	 * Returns the static model of the specified AR class.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__){
		return parent::model($className);
	}
	
	

	function rules(){
		return array(
			array('date, desc, amount','required'),
			array('date, desc, amount','length','max'=>255),
			

			array('id, date, desc, amount', 'safe', 'on' => 'search') // search by title
		);
	}

	

	
	
}
