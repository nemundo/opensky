<?php
namespace Nemundo\OpenSky\Data;
use Nemundo\Model\Collection\AbstractModelCollection;
class OpenSkyModelCollection extends AbstractModelCollection {
protected function loadCollection() {
$this->addModel(new \Nemundo\OpenSky\Data\Aircraft\AircraftModel());
$this->addModel(new \Nemundo\OpenSky\Data\Country\CountryModel());
$this->addModel(new \Nemundo\OpenSky\Data\Tracking\TrackingModel());
}
}