# bdd-by-example
Código de demostración de mi charla en la XXIII BetaBeers Córdoba

## Instalar

Es necesario tener instalado [composer](http://getcomposer.org) e instalar las dependencias:

```
composer install
```

## Ejecutar

En el directorio _bin_ se encuentran los ejecutables para lanzar las pruebas:

```
bin/phpunit -c phpunit.xml-dist tests/CalculatorBundle/CalculatorTests.php
bin/phpspec run
bin/behat
```
