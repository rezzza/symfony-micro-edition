<?php

/*
This file will automatically be included before EACH run.

Use it to configure atoum or anything that needs to be done before EACH run.

More information on documentation:
[en] http://docs.atoum.org/en/latest/chapter3.html#configuration-files
[fr] http://docs.atoum.org/fr/latest/lancement_des_tests.html#fichier-de-configuration
*/

use \mageekguy\atoum;

$report = $script->addDefaultReport();

// This will add a green or red logo after each run depending on its status.
$report->addField(new atoum\report\fields\runner\result\logo());

$runner->addTestsFromDirectory(__DIR__.'/tests/Units');
