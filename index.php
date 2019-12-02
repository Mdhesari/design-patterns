    <?php



    require_once __DIR__ . '/app/config/bootstrap.php';

    use App\Builder\Car\Car;
    use App\Builder\Car\CarBuilder;
    use App\Builder\Car\Company;
    use App\Builder\Car\Features\Computer;
    use App\Builder\Car\Features\ProEngine;


    // Sample 1 :

    /*    $car1 = $carBuilder
        ->buildComputer(new Computer)
        ->buildSeats()
        ->build();

    $car2 = $carBuilder
        ->buildSeats()
        ->buildEngine(new ProEngine)
        ->build();

 */

/* 
    $company = new Company(new CarBuilder);

    $car1 = $company->buildModernCar();

    $car2 = $company->buildModernCar();

    $car3 = $company->buildSimpleCar();

    echo $car1->getInfo();

    echo "____________________________________\n";

    echo $car2->getInfo();

    echo "_____________________________________\n";

    echo $car3->getInfo();
 */

 