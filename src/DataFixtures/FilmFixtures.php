<?php

namespace App\DataFixtures;

use App\Entity\Film;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class FilmFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $film = new Film();
        $film->setTitre('La guerre des etoiles');
        $film->setDescription('Super film ');
        $film->setRealisateur('aucune idée');
        $manager->persist($film);

        $film2 = new Film();
        $film2->setTitre('Hitman');
        $film2->setDescription('Super film d\'action');
        $film2->setRealisateur('aucune idée');
        $manager->persist($film2);

        $manager->flush();
    }
}
