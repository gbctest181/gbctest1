<?php

namespace App\DataFixtures;

use App\Entity\ClientFinal;
use App\Entity\ClientIntervention;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create('fr_FR');
        //Je crée 10 clientFinal, BAM!!
        for ($i =0; $i < 10; $i++) {
            $clientFinal = new ClientFinal();
            $clientFinal->setRaisonSociale($faker->company);
            $clientFinal->setNomResponsable($faker->lastName);
            $clientFinal->setEnseigne($faker->companySuffix);
            $clientFinal->setAdresse($faker->address);
            $clientFinal->setCodePostal($faker->numberBetween($min = 10000, $max = 99999));
            $clientFinal->setVille($faker->city);
            $clientFinal->setTelephone($faker->phoneNumber);
            $clientFinal->setMail($faker->companyEmail);
            $manager->persist($clientFinal);
        }
        for ($i =0; $i < 10; $i++) {
            $clientIntervention = new ClientIntervention();
            $clientIntervention->setNom($faker->name);
            $clientIntervention->setAdresse($faker->address);
            $clientIntervention->setCodePostal($faker->numberBetween($min = 10000, $max = 99999));
            $clientIntervention->setVille($faker->city);
            $clientIntervention->setDate($faker->dateTime);
            $clientIntervention->setTelephone($faker->phoneNumber);
            $clientIntervention->setMobile($faker->phoneNumber);
            $clientIntervention->setMail($faker->email);
            $clientIntervention->setRepresentant($faker->lastName);
            $manager->persist($clientIntervention);
        }
        $manager->flush();
    }
}
