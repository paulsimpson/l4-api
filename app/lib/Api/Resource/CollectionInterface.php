<?php namespace Api\Resource;

interface CollectionInterface {

	public function getEtags();

	public function setCollectionName($name);

	public function getCollectionName();

}