<?php
namespace Nemundo\OpenSky\Data\Aircraft;
class AircraftDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var AircraftModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new AircraftModel();
}
}