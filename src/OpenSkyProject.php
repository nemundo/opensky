<?php

namespace Nemundo\OpenSky;

use Nemundo\Core\Path\Path;
use Nemundo\Project\AbstractProject;

class OpenSkyProject extends AbstractProject
{
    public function loadProject()
    {
        $this->project = 'OpenSky';
        $this->projectName = 'opensky';
        $this->path = __DIR__;
        $this->namespace = __NAMESPACE__;
        $this->modelPath = (new Path())
            ->addPath(__DIR__)
            ->addParentPath()
            ->addPath("model")
            ->getPath();
    }
}