# OpenSky


https://opensky-network.org/


### Installation
```
composer require nemundo/opensky
```

### composer.json
```
"repositories":[
    {
        "type": "vcs",
        "url": "https://github.com/nemundo/opensky"
    }
]
```


### Installation
```
composer config repositories.opensky vcs https://github.com/nemundo/opensky
composer require nemundo/opensky
```


### Php Installation
```
(new \Nemundo\OpenSky\Application\OpenSkyApplication())->installApp();
```




### Import
```
php bin/cmd.php opensky-live-tracking
```







