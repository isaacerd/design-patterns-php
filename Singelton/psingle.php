<?php


class Psingle
{
    private static  $instance;
    private $counter;

    private function __construct()
    {
        echo "Building object...".PHP_EOL;
    }

    public static function getInstance(){

        if(!self::$instance instanceof self){
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function DoSomeThing(){

        echo 'Writing on screen '.PHP_EOL;
        ++$this->counter;

    }


    public function getCounter(){

        return $this->counter;
    }

}


Psingle::getInstance()->DoSomeThing();
Psingle::getInstance()->DoSomeThing();
Psingle::getInstance()->DoSomeThing();

echo 'Contador = '.Psingle::getInstance()->getCounter().PHP_EOL;