<?php
/**
 * Ejemplo 2:
 * Clase con el precio de la arepa
 */
class Arepa
{
    protected $basePrice = 1000;

    public function getPrice()
    {
        return $this->basePrice;
    }
}

/**
 * Creo una clase abstracta con las funcionalidades
 * comunes que tendrán los decoradores, para evitar
 * la duplicación de codigo
 */
abstract class ArepaDecorator
{
    protected $price;
    protected $arepa;

    public function __construct($arepa)
    {
        $this->arepa = $arepa;
    }

    public function getPrice()
    {
        return $this->arepa->getPrice() + $this->price;
    }
}

/**
 * Ahora si creo cada uno de los ingredientes y les asigno
 * un precio
 */
class withCheese extends ArepaDecorator { protected $price = 500; }
class withMeat extends ArepaDecorator { protected $price = 1200; }
class withFish extends ArepaDecorator { protected $price = 2000; }
/**
 * Ahora hagamos las pruebas
 */
$arepa = new Arepa();
echo 'Una arepa sola cuesta ' . $arepa->getPrice() . ' pesos' . PHP_EOL;

$arepa = new withCheese(new Arepa());
echo 'Una arepa con queso cuesta ' . $arepa->getPrice() . ' pesos' . PHP_EOL;

$arepa = new withMeat(new Arepa());
echo 'Una arepa con carne cuesta ' . $arepa->getPrice() . ' pesos' . PHP_EOL;

$arepa = new withFish(new Arepa());
echo 'Una arepa con pescado cuesta ' . $arepa->getPrice() . ' pesos' . PHP_EOL;

$arepa = new withFish(new withCheese(new withMeat(new Arepa())));
echo 'Una arepa con pescado, carne y queso cuesta ' . $arepa->getPrice() . ' pesos' . PHP_EOL;

?>