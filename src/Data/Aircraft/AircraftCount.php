<?php
namespace Nemundo\OpenSky\Data\Aircraft;
class AircraftCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var AircraftModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new AircraftModel();
}
}