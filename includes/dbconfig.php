<?php
 
     require(__DIR__.'/vendor/autoload.php');

    use Kreait\Firebase\Factory;
    use Kreait\Firebase\ServiceAccount;

    $serviceAccout = ServiceAccount::fromJsonFile(__DIR__.'/educa-mozambique-firebase-adminsdk-qahz4-0778a0fa8c.json');
    $firebase = (new Factory)
        ->withServiceAccount($serviceAccout)
        ->withDatabaseUri('https://educa-mozambique.firebaseio.com/')
        ->create();

    $database = $firebase->getDatabase();
?>