# bdd-by-example
Código de demostración de mi charla en la XXIII BetaBeers Córdoba

## Requisitos

Es necesario tener instalado [composer](http://getcomposer.org) e instalar las dependencias:

```
composer install
```

También es necesario instalar el módulo _xdebug_ de PHP para que funcione _codecoverage_:

```
apt-get install php5-xdebug
```

## Ejecutar

En el directorio _bin_ se encuentran los ejecutables para lanzar las pruebas:

```
bin/phpunit -c phpunit.xml.dist tests/CalculatorBundle/CalculatorTests.php
bin/phpspec run
bin/behat
```

Los archivos de _codecoverage_ se encuentran en _var/coverage_
