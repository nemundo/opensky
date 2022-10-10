<?php
namespace Nemundo\OpenSky\Data\Tracking;
class Tracking extends \Nemundo\Model\Data\AbstractModelData {
/**
* @var TrackingModel
*/
protected $model;

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
public function save() {
$this->typeValueList->setModelValue($this->model->aircraftId, $this->aircraftId);
if ($this-> position->hasValue()) {
$property = new \Nemundo\Model\Data\Property\Geo\GeoCoordinateAltitudeDataProperty($this->model->position, $this->typeValueList);
$property->setValue($this->position);
}
$id = parent::save();
return $id;
}
}