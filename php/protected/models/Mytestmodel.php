<?php

class Mytestmodel extends EMongoDocument{

	function collectionName(){
		return 'trans';
	}

	public function relations(){
		return array(
		);
	}
	
	public static function model($className=__CLASS__){
		return parent::model($className);
	}

	function rules(){
		return array(
			array('date, desc, amount','required'),
			array('date, desc, amount','length','max'=>255),
			array('date, desc, amount, ano', 'safe', 'on' => 'search'),
			//array('ano','length','allowEmpty'=>true)
			array('ano','safe')
			 // search by title
		);
	}
	
}
