<?php
namespace Nemundo\OpenSky\Data\Country;
class CountryModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $country;

protected function loadModel() {
$this->tableName = "opensky_country";
$this->aliasTableName = "opensky_country";
$this->label = "Country";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "opensky_country";
$this->id->externalTableName = "opensky_country";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "opensky_country_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->country = new \Nemundo\Model\Type\Text\TextType($this);
$this->country->tableName = "opensky_country";
$this->country->externalTableName = "opensky_country";
$this->country->fieldName = "country";
$this->country->aliasFieldName = "opensky_country_country";
$this->country->label = "Country";
$this->country->allowNullValue = false;
$this->country->length = 255;

$index = new \Nemundo\Model\Definition\Index\ModelUniqueIndex($this);
$index->indexName = "country";
$index->addType($this->country);

}
}