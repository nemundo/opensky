<?php
namespace Nemundo\OpenSky\Data\Tracking;
class TrackingExternalType extends \Nemundo\Model\Type\External\ExternalType {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $aircraftId;

/**
* @var \Nemundo\OpenSky\Data\Aircraft\AircraftExternalType
*/
public $aircraft;

/**
* @var \Nemundo\Model\Type\Geo\GeoCoordinateAltitudeType
*/
public $position;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = TrackingModel::class;
$this->externalTableName = "opensky_tracking";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->aircraftId = new \Nemundo\Model\Type\Id\IdType();
$this->aircraftId->fieldName = "aircraft";
$this->aircraftId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->aircraftId->aliasFieldName = $this->aircraftId->tableName ."_".$this->aircraftId->fieldName;
$this->aircraftId->label = "Aircraft";
$this->addType($this->aircraftId);

$this->position = new \Nemundo\Model\Type\Geo\GeoCoordinateAltitudeType();
$this->position->fieldName = "position";
$this->position->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->position->externalTableName = $this->externalTableName;
$this->position->aliasFieldName = $this->position->tableName . "_" . $this->position->fieldName;
$this->position->label = "Position";
$this->position->createObject();
$this->addType($this->position);

}
public function loadAircraft() {
if ($this->aircraft == null) {
$this->aircraft = new \Nemundo\OpenSky\Data\Aircraft\AircraftExternalType(null, $this->parentFieldName . "_aircraft");
$this->aircraft->fieldName = "aircraft";
$this->aircraft->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->aircraft->aliasFieldName = $this->aircraft->tableName ."_".$this->aircraft->fieldName;
$this->aircraft->label = "Aircraft";
$this->addType($this->aircraft);
}
return $this;
}
}