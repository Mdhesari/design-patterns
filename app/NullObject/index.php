<?php

use App\NullObject\Person\Developer;
    use App\NullObject\Person\Manager;
    use App\NullObject\Person\NullPerson;

    $developer = new Developer("Mohamad Faze", "Hesari", "4360552742");

    $manager = new Manager("Ali Akbar", "Hesari", "41242133");

    $manager->employ($developer);
    $manager->employ(new NullPerson);

    echo $manager->getData();