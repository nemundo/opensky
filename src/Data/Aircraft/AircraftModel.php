<?php
namespace Nemundo\OpenSky\Data\Aircraft;
class AircraftModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $icao24;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $callsign;

protected function loadModel() {
$this->tableName = "opensky_aircraft";
$this->aliasTableName = "opensky_aircraft";
$this->label = "Aircraft";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "opensky_aircraft";
$this->id->externalTableName = "opensky_aircraft";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "opensky_aircraft_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->icao24 = new \Nemundo\Model\Type\Text\TextType($this);
$this->icao24->tableName = "opensky_aircraft";
$this->icao24->externalTableName = "opensky_aircraft";
$this->icao24->fieldName = "icao24";
$this->icao24->aliasFieldName = "opensky_aircraft_icao24";
$this->icao24->label = "Icao24";
$this->icao24->allowNullValue = false;
$this->icao24->length = 24;

$this->callsign = new \Nemundo\Model\Type\Text\TextType($this);
$this->callsign->tableName = "opensky_aircraft";
$this->callsign->externalTableName = "opensky_aircraft";
$this->callsign->fieldName = "callsign";
$this->callsign->aliasFieldName = "opensky_aircraft_callsign";
$this->callsign->label = "Callsign";
$this->callsign->allowNullValue = false;
$this->callsign->length = 20;

$index = new \Nemundo\Model\Definition\Index\ModelUniqueIndex($this);
$index->indexName = "icao24";
$index->addType($this->icao24);

}
}