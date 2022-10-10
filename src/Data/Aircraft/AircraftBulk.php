<?php
namespace Nemundo\OpenSky\Data\Aircraft;
class AircraftBulk extends \Nemundo\Model\Data\AbstractModelDataBulk {
/**
* @var AircraftModel
*/
protected $model;

/**
* @var string
*/
public $icao24;

/**
* @var string
*/
public $callsign;

public function __construct() {
parent::__construct();
$this->model = new AircraftModel();
}
public function save() {
$this->typeValueList->setModelValue($this->model->icao24, $this->icao24);
$this->typeValueList->setModelValue($this->model->callsign, $this->callsign);
$id = parent::save();
return $id;
}
}