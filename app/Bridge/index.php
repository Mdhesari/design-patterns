<?php


 /*     use App\Bridge\Shape\Colors\Blue;
    use App\Bridge\Shape\Colors\Green;
    use App\Bridge\Shape\Colors\Red;
    use App\Bridge\Shape\Helpers\Style;
    use App\Bridge\Shape\Shapes\Circle;
    use App\Bridge\Shape\Shapes\Rectangle;
    use App\Bridge\Shape\Shapes\Square;

    $styler = new Style;

    $circle = new Circle(new Blue);

    $circle->style($styler->width("50px")->height("50px")->get());

    myprint($circle->draw());

    $square = new Square(new Red);

    $square->style($styler->width("200px")->height("200px")->get());

    myprint($square->draw());

    $rectangle = new Rectangle(new Green);

    myprint($rectangle->draw());
 */

use App\Bridge\Remote\Devices\Tv;
use App\Bridge\Remote\Remotes\AdvancedRemote;
use App\Bridge\Remote\Remotes\SimpleRemote;

$samsung = new Tv;

$remote = new SimpleRemote($samsung);

echo $remote->volumeUp();

$samsungAdvanced = new Tv;

$remote2 = new AdvancedRemote($samsungAdvanced);

echo $remtoe2->volumeUp();