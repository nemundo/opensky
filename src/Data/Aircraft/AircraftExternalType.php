<?php
namespace Nemundo\OpenSky\Data\Aircraft;
class AircraftExternalType extends \Nemundo\Model\Type\External\ExternalType {
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

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = AircraftModel::class;
$this->externalTableName = "opensky_aircraft";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->icao24 = new \Nemundo\Model\Type\Text\TextType();
$this->icao24->fieldName = "icao24";
$this->icao24->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->icao24->externalTableName = $this->externalTableName;
$this->icao24->aliasFieldName = $this->icao24->tableName . "_" . $this->icao24->fieldName;
$this->icao24->label = "Icao24";
$this->addType($this->icao24);

$this->callsign = new \Nemundo\Model\Type\Text\TextType();
$this->callsign->fieldName = "callsign";
$this->callsign->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->callsign->externalTableName = $this->externalTableName;
$this->callsign->aliasFieldName = $this->callsign->tableName . "_" . $this->callsign->fieldName;
$this->callsign->label = "Callsign";
$this->addType($this->callsign);

}
}