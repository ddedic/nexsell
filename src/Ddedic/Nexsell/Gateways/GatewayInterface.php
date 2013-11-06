<?php namespace Ddedic\Nexsell\Gateways;


interface GatewayInterface {

	public function getAll();


	public function isActive();

	public function findById($id);

	public function getId();

	public function getClassName();

	public function getApiKey();

	public function getApiSecret();

	public function getPlans();


}