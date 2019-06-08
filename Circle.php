<?php


class Circle
{
    public $name;
    public $radius;

    public function __construct($name, $radius)
    {
        $this->name = $name;
        $this->radius = $radius;
    }

    //diện tích hình tròn
    public function calculateArea(){
        return pi() * pow($this->radius,2);
    }

    //chu vi hình tròn
    public function calculatePerimeter(){
        return ($this->radius * 2 * pi());
    }
}