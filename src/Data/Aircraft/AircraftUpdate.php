<?php
namespace Nemundo\OpenSky\Data\Aircraft;
use Nemundo\Model\Data\AbstractModelUpdate;
class AircraftUpdate extends AbstractModelUpdate {
/**
* @var AircraftModel
*/
public $model;

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
public function update() {
$this->typeValueList->setModelValue($this->model->icao24, $this->icao24);
$this->typeValueList->setModelValue($this->model->callsign, $this->callsign);
parent::update();
}
}