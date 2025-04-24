<?php

namespace app\model\entities;

abstract class Transaction
{

    //atributos

    public function set($prop, $value)
    {
        $this->{$prop} = $value;
    }

    public function get($prop)
    {
        return $this->{$prop};
    }


}
