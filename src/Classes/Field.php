<?php

namespace Akkurate\LaravelDialog\Classes;

class Field
{
    public $title;
    public $value;
    public $short;

    public function title($value)
    {
        $this->title = $value;

        return $this;
    }

    public function value($value)
    {
        $this->value = $value;

        return $this;
    }

    public function short($param = true)
    {
        $this->short = (boolean) $param;

        return $this;
    }

}
