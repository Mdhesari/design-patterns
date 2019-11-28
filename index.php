    <?php

    /**
     * Load application bootstraper and autoloads
     */

    use App\Composite\Box\Branch\Charger;
    use App\Composite\Box\Branch\Headphone;
    use App\Composite\Box\Branch\Smartphone;
    use App\Composite\Box\Container\Composite;

    require_once __DIR__ . '/app/config/bootstrap.php';

    $box = new Composite;

    $smartphone = new Smartphone;

    $headphone = new Headphone;

    $charger = new Charger;

    $container = new Composite;

    $container->add($smartphone, $headphone, $charger);

    $box->add($container);

    echo $box->execute();
