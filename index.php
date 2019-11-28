    <?php

    /**
     * Load application bootstraper and autoloads
     */


    require_once __DIR__ . '/app/config/bootstrap.php';

    use App\Composite\Office\Employment;

    /*    use App\Composite\Box\Branch\Charger;
    use App\Composite\Box\Branch\Headphone;
    use App\Composite\Box\Branch\Smartphone;
    use App\Composite\Box\Container\Composite;

    $box = new Composite;

    $smartphone = new Smartphone;

    $headphone = new Headphone;

    $charger = new Charger;

    $container = new Composite;

    $container->add($smartphone, $headphone, $charger);

    $container->remove($charger);

    $box->add($container);

    echo $box->execute(); */

    $recruiter = new Employment;

    $mojtaba = $recruiter->newEmploy(['name' => 'Mojhtaba']);
    $ghasem = $recruiter->newEmploy(['name' => 'Ghasem']);

    $coworker = $recruiter->newCoworker(['title' => "Nimckat"]);
    $mohamad = $recruiter->newCoworker(['title' => "Mohamad"]);

    $mohamad->employ($ghasem, $mojtaba);

    $coworker->employ($mohamad);

    $sina = $recruiter->newEmploy(['name' => 'sina']);

    $mohamad->employ($sina);

    echo $coworker->execute();
