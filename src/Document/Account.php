<?php
namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Doctrine\ODM\MongoDB\Types\type as Type;

#[MongoDB\Document("demo-db", "Account")]

class Account 
{

	#[MongoDB\$Id]
	private $id;

	#[MongoDB\Fields(type: Type::STRING)]
	private $accountId;
	
	#[MongoDB\Fields(type: Type::STRING)]
	private $externalAccountId;

	#[MongoDB\Fields(type: Type::STRING)]
	private $currencyCode;

	#[MongoDB\Fields(type: Type::STRING)]
	private $status;

	#[MongoDB\Fields(type: Type::STRING)]
	private $type;

	#[MongoDB\Fields(type: Type::STRING)]
	private $accountName;

	/**
	*@param $accountId
	*/

	/**
	*@param $externalAccountId
	*/
	/**
	*@param $currencyCode
	*/
	/**
	*@param $status
	*/
	/**
	*@param $type
	*/
	/**
	*@param $accountName
	*/
	
	public function __construct($accountId,$externalAccountId,$currencyCode,$status,$type,$accountName)
	{

		$this->accountId 			= $accountId;
		$this->externalAccountId 	= $externalAccountId;
		$this->currencyCode 		= $currencyCode;
		$this->status 				= $status;
		$this->type 				= $type;
		$this->accountName 			= $accountName;
	}

}