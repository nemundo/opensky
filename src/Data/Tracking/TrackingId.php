<?php
namespace Nemundo\OpenSky\Data\Tracking;
use Nemundo\Model\Id\AbstractModelIdValue;
class TrackingId extends AbstractModelIdValue {
/**
* @var TrackingModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new TrackingModel();
}
}