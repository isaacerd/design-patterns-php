<?php

class User implements SplObserver
{
    public function update(SplSubject $subject)
    {
        echo 'Nuevo post publicado, email enviado al usuario!' . PHP_EOL;
    }
}


Class Food implements SplObserver{

    public function update(SplSubject $subject)
    {
        // TODO: Implement update() method.

        echo "La comida esta lista...".PHP_EOL;
    }
}