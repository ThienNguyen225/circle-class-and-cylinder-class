<?php
include_once "Circle.php";

class Cylinder extends Circle
{
public $height;

public function __construct($name, $radius, $height)
{
    parent::__construct($name, $radius);
    $this->height = $height;
}

//tính diện tích hình trụ
public function calculateArea(){
    //công thức: 2*pi*r^2 + 2*pi*r*h
    return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
}

//tính thể tích hình trụ
public function calculationVolume(){
    //công thức: pi*r^2*h
    return parent::calculateArea() * $this->height;
}
}