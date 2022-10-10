<?php
namespace Nemundo\OpenSky\Data\Aircraft;
class AircraftValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var AircraftModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new AircraftModel();
}
}