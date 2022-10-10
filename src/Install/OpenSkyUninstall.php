<?php
namespace Nemundo\OpenSky\Install;
use Nemundo\App\Application\Type\Install\AbstractUninstall;
use Nemundo\Model\Setup\ModelCollectionSetup;
use Nemundo\OpenSky\Data\OpenSkyModelCollection;
use Nemundo\OpenSky\Application\OpenSkyApplication;
use Nemundo\App\Application\Setup\ApplicationSetup;
class OpenSkyUninstall extends AbstractUninstall {
public function uninstall() {
(new ModelCollectionSetup())->removeCollection(new OpenSkyModelCollection());
}
}