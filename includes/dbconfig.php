<?php
/**
 * Created by PhpStorm.
 * User: aminur
 * Date: 2/23/21
 * Time: 10:59 PM
 */

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

$factory = (new Factory)
            ->withServiceAccount(__DIR__.'/crud-4979d-firebase-adminsdk-pogaq-bb0f7cf053.json')
            ->withDatabaseUri('https://crud-4979d-default-rtdb.firebaseio.com');

$database = $factory->createDatabase();