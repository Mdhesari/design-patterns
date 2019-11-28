    <?php

    /**
     * Load application bootstraper and autoloads
     */


    require_once __DIR__ . '/app/config/bootstrap.php';

    use App\Composite\Html\Elements\Element;
    use App\Composite\Html\Elements\FieldSet;
    use App\Composite\Html\Elements\Form;
    use App\Composite\Html\Elements\Input;
    use App\Composite\Html\Elements\Label;
    use App\Composite\Html\Factory\InputFactory;
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

    /*     $recruiter = new Employment;

    $mojtaba = $recruiter->newEmploy(['name' => 'Mojhtaba']);
    $ghasem = $recruiter->newEmploy(['name' => 'Ghasem']);

    $coworker = $recruiter->newCoworker(['title' => "Nimckat"]);
    $mohamad = $recruiter->newCoworker(['title' => "Mohamad"]);

    $mohamad->employ($ghasem, $mojtaba);

    $coworker->employ($mohamad);

    $sina = $recruiter->newEmploy(['name' => 'sina']);

    $mohamad->employ($sina);

    echo $coworker->execute();
 */

    $form = new Form;

    $fieldset = new FieldSet;

    // the main container
    $fieldset
        ->setTitle("Welcome")
        ->add($form);

    $div = (new Element)->add($fieldset);

    $form->url("index");

    $name = InputFactory::labeled("fullname", "Name : ", "Your name...");

    $email = InputFactory::emailLabeled("email", "Email : ", "your email...");

    $submit = InputFactory::submit("Ok");

    $form->add($name, $email, $submit);

    echo $div->render();
