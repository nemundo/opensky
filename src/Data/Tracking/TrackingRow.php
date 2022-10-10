<?php
namespace Nemundo\OpenSky\Data\Tracking;
class TrackingRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var TrackingModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var int
*/
public $aircraftId;

/**
* @var \Nemundo\OpenSky\Data\Aircraft\AircraftRow
*/
public $aircraft;

/**
* @var \Nemundo\Core\Type\Geo\GeoCoordinateAltitude
*/
public $position;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->aircraftId = intval($this->getModelValue($model->aircraftId));
if ($model->aircraft !== null) {
$this->loadNemundoOpenSkyDataAircraftAircraftaircraftRow($model->aircraft);
}
$property = new \Nemundo\Model\Reader\Property\Geo\GeoCoordinateAltitudeReaderProperty($row, $model->position);
$this->position = $property->getValue();
}
private function loadNemundoOpenSkyDataAircraftAircraftaircraftRow($model) {
$this->aircraft = new \Nemundo\OpenSky\Data\Aircraft\AircraftRow($this->row, $model);
}
}