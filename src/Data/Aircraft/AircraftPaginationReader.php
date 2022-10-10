<?php
namespace Nemundo\OpenSky\Data\Aircraft;
class AircraftPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var AircraftModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new AircraftModel();
}
/**
* @return AircraftRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new AircraftRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}