<?php

/**
 * Represents the transaction object, and all of its data
 */
class Transaction extends EMongoDocument{

	// We are going to predefine the schema here
	// the _id variable is automatically created by the Mongodb database itself
	/*
	public $useremail;
	public $userrole; //to be used for possible premium user that has access to more functionality
	public $date;
	public $accountname; //name of the account
	public $accounttype; //the type of asset e.g. current account, or ISA or saving etc.
	public $openingbalance; //complete this field when the user creates a new account
	public $maincat;
	public $subcat;
	public $inorout; //this is a flag to set the category as an income category otherwise an expense
	public $payee; //optional field to allow users to record who gets their money
	public $amount;
	public $reconciled; //this is a flag set when the transaction is reconciled on the users bank statement
	public $notes;
	*/
		
	function collectionName(){
		return 'transactions';
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

	/**
	 * the minimum items to be completed to create a valid transaction are
	 *    date, accountname, maincat, subcat, amount
	 * since transactions will be entered by a logged in user the 
	 * system should know the following about the user:
	 *    useremail, userrole
	 * other information which is supplementary for each transaction
	 *    accounttype, openingbalance, payee, reconciled, notes
	 */
	 
	function rules(){
		return array(
			array('useremail, date, accountname, maincat, subcat, amount','required'),
			array('date, accountname, maincat, subcat, amount','length','max'=>255),
			array('useremail,userrole,date,accountname,accounttype,openingbalance,maincat,subcat,inorout,payee,amount,reconciled,notes', 'safe'),
			array('useremail,userrole,date,accountname,accounttype,openingbalance,maincat,subcat,inorout,payee,amount,reconciled,notes', 'safe', 'on' => 'search')
		);
	}
}
