# Test Backend Developer for mcmakler

This is my work done for the backend developer interview, any question please email me at [juansebastiancarreno](mailto:juansebastiancarreno@live.com)  

### Tech used

This project uses 3 source projects to work properly:

* [PHP 7.0] - The best for web apps!
* [MongoDB] - An excellent NoSQL database
* [Symfony 3.3.0] - And awesome php framework.

# Installation

  - Change app/config/parameters.yml with your mongodb configuration
 ```sh
#app/config/parameters.yml
$ mongodb_server: mongodb://localhost:27017
```
  - If you don't have a local db you can use my remote config
 ```sh
#app/config/parameters.yml
$    mongodb_server: "mongodb://juan:123456@ds129043.mlab.com:29043/nasa"
```
  - Go to the neo folder with your console and execute
```sh
$ php bin/console server:run
```

### Test

Just run

```sh
$ phpunit tests/AppBundle
```


#### Routes
 - /
 - /Load
 - /neo/hazardous
 - /neo/fastest?hazardous(true|false)
 - /neo/best-year?hazardous(true|false)
 - /neo/best-month?hazardous(true|false)
