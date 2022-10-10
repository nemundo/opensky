<?php
namespace Nemundo\OpenSky\Data\Aircraft;
class AircraftRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var AircraftModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var string
*/
public $icao24;

/**
* @var string
*/
public $callsign;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->icao24 = $this->getModelValue($model->icao24);
$this->callsign = $this->getModelValue($model->callsign);
}
}