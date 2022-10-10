<?php
namespace Nemundo\OpenSky\Data\Tracking;
use Nemundo\Model\Data\AbstractModelUpdate;
class TrackingUpdate extends AbstractModelUpdate {
/**
* @var TrackingModel
*/
public $model;

/**
* @var string
*/
public $aircraftId;

/**
* @var \Nemundo\Core\Type\Geo\GeoCoordinateAltitude
*/
public $position;

public function __construct() {
parent::__construct();
$this->model = new TrackingModel();
$this->position = new \Nemundo\Core\Type\Geo\GeoCoordinateAltitude();
}
public function update() {
$this->typeValueList->setModelValue($this->model->aircraftId, $this->aircraftId);
if ($this-> position->hasValue()) {
$property = new \Nemundo\Model\Data\Property\Geo\GeoCoordinateAltitudeDataProperty($this->model->position, $this->typeValueList);
$property->setValue($this->position);
}
parent::update();
}
}