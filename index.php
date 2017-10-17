<?php

require 'vendor/autoload.php';

$circle = new \CampusWonders\Shapes\Circle(new \CampusWonders\ValueObject\Radius(10));
echo $circle->area();