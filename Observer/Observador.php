<?php


class Observador implements SplSubject
{

    protected $posts = [];
    protected $storage;

    public function __construct()
    {
        $this->storage = new SplObjectStorage;
    }

    public function publish($post)
    {
        $this->posts[] = $post;
        $this->notify();
    }

    public function attach(SplObserver $observer)
    {
        $this->storage->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->storage->detach($observer);
    }

    public function notify()
    {
        foreach ($this->storage as $observer) {
            $observer->update($this);
        }
    }
}