<?php
require  "config.php";


//(new \Nemundo/OpenSky\Setup\Nemundo/OpenSkySetup())->run();


(new \Nemundo\App\ModelDesigner\Application\ModelDesignerApplication())->installApp();
(new \Nemundo\App\CssDesigner\Application\CssDesignerApplication())->installApp();

(new \Nemundo\OpenSky\Application\OpenSkyApplication())->installApp();
