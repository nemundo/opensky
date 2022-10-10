<?php
namespace Nemundo\OpenSky\Data\Tracking;
class TrackingModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\External\Id\NumberExternalIdType
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

protected function loadModel() {
$this->tableName = "opensky_tracking";
$this->aliasTableName = "opensky_tracking";
$this->label = "Tracking";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "opensky_tracking";
$this->id->externalTableName = "opensky_tracking";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "opensky_tracking_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->aircraftId = new \Nemundo\Model\Type\External\Id\NumberExternalIdType($this);
$this->aircraftId->tableName = "opensky_tracking";
$this->aircraftId->fieldName = "aircraft";
$this->aircraftId->aliasFieldName = "opensky_tracking_aircraft";
$this->aircraftId->label = "Aircraft";
$this->aircraftId->allowNullValue = false;

$this->position = new \Nemundo\Model\Type\Geo\GeoCoordinateAltitudeType($this);
$this->position->tableName = "opensky_tracking";
$this->position->externalTableName = "opensky_tracking";
$this->position->fieldName = "position";
$this->position->aliasFieldName = "opensky_tracking_position";
$this->position->label = "Position";
$this->position->allowNullValue = false;

$index = new \Nemundo\Model\Definition\Index\ModelIndex($this);
$index->indexName = "aircraft_id";
$index->addType($this->aircraftId);
$index->addType($this->id);

}
public function loadAircraft() {
if ($this->aircraft == null) {
$this->aircraft = new \Nemundo\OpenSky\Data\Aircraft\AircraftExternalType($this, "opensky_tracking_aircraft");
$this->aircraft->tableName = "opensky_tracking";
$this->aircraft->fieldName = "aircraft";
$this->aircraft->aliasFieldName = "opensky_tracking_aircraft";
$this->aircraft->label = "Aircraft";
}
return $this;
}
}