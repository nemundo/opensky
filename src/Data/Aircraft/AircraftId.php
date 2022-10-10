<?php
namespace Nemundo\OpenSky\Data\Aircraft;
use Nemundo\Model\Id\AbstractModelIdValue;
class AircraftId extends AbstractModelIdValue {
/**
* @var AircraftModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new AircraftModel();
}
}