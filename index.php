<?php
include_once "class/Point2D.php";
include_once "class/Point3D.php";

$point2d = new Point2D();
$point2d->setXY(10, 20);
echo "Tọa độ 2D là: " . $point2d . "<br/>";

$point3d = new Point3D();
$point3d->setXYZ(100, 200, 300);
echo "Tọa độ 3D là: " . $point3d;