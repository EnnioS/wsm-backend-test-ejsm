<?php
namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Doctrine\ODM\MongoDB\Types\type as Type;

/**
* @MongoDB\Document(collection = "Metric")
*/
class Metric 
{

	/** @MongoDB\Id */
	private $id;

	/** @MongoDB\Field(type="string")*/
	private $date;
	
	/** @MongoDB\Field(type="string")*/
	private $accountId;

	/** @MongoDB\Field(type="int")*/
	private $impressions;

	/** @MongoDB\Field(type="int")*/
	private $clicks;

	/** @MongoDB\Field(type="int")*/
	private $ctr;

	/** @MongoDB\Field(type="int")*/
	private $conversions;

	/** @MongoDB\Field(type="int")*/
	private $costPerClick;

	/** @MongoDB\Field(type="int")*/
	private $spend;


	/**
	*@param $date
	*/

	/**
	*@param $accountId
	*/

	/**
	*@param $impressions
	*/

	/**
	*@param $clicks
	*/

	/**
	*@param $ctr
	*/

	/**
	*@param $conversions
	*/

	/**
	*@param $costPerClick
	*/

	/**
	*@param $spend
	*/

	
	public function __construct($date,$accountId,$impressions,$clicks,$ctr,$conversions,$costPerClick,$spend)
	{

		$this->date 		= $date;
		$this->accountId 	= $accountId;
		$this->impressions 	= $impressions;
		$this->clicks 		= $clicks;
		$this->ctr 			= $ctr;
		$this->conversions 	= $conversions;
		$this->costPerClick = $costPerClick;
		$this->spend 		= $spend;
	}

	public function getDate(){
		return $this->date;
	}

	public function getAccountId(){
		return $this->accountId;
	}

	public function getImpressionse(){
		return $this->impressions;
	}


	public function getClicks(){
		return $this->clicks;
	}

	public function getCtr(){
		return $this->ctr;
	}

	public function getConversions(){
		return $this->conversions;
	}

	public function getCostPerClick(){
		return $this->costPerClick;
	}

	public function getSpend(){
		return $this->spend;
	}




/**
	* @return mixed
*/

	public function setDate($date){
		$this->date = $date;
	}

	public function setAccountId($accountId){
		$this->accountId = $accountId;
	}

	public function setImpressions($impressions){
		$this->impressions = $impressions;
	}

	public function setClicks($clicks){
		$this->clicks = $clicks;
	}

	public function setCtr($ctr){
		$this->ctr = $ctr;
	}

	public function setConversions($conversions){
		$this->conversions = $conversions;
	}

	public function setCostPerClick($costPerClick){
		$this->costPerClick = $costPerClick;
	}

	public function setSpend($spend){
		$this->spend = $spend;
	}

}