<?php
include_once "class/Point2D.php";
include_once "class/Point3D.php";

$point2d = new Point2D();
$point2d->setXY(10, 20);
echo " 2D coordinates is: " . $point2d . "<br/>";

$point3d = new Point3D();
$point3d->setXYZ(100, 200, 300);
echo "3D coordinates is: " . $point3d;