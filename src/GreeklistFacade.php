<?php


    namespace ffy\greeklish;

    use Illuminate\Support\Facades\Facade;

    class GreeklishFacade extends Facade {
        protected static function getFacadeAccessor() { return 'ffy\greeklish\Greeklish'; }
    }