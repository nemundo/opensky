<?php
namespace Nemundo\OpenSky\Data\Aircraft;
class AircraftReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var AircraftModel
*/
public $model;

public function __construct() {
$this->model = new AircraftModel();
parent::__construct();
}
/**
* @return AircraftRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = $this->getModelRow($dataRow);
$list[] = $row;
}
return $list;
}
/**
* @return AircraftRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return AircraftRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new AircraftRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}