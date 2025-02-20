<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;


#[ORM\Table(name: 'user')]
#[ORM\Entity(repositoryClass: UserRepository::class)]
class User
{

    #[ORM\Column(name: 'id', type: 'integer')]
    #[ORM\Id]
    #[Groups(['branch:read', 'scheduleItems', 'branch:minimal', 'branch', 'branch_minimal', 'templates', 'availability', 'tipReport', 'companyEvent'])]
    private $id;

    #[ORM\Column(name: 'name', type: 'string', length: 255)]
    #[Groups(['branch:read', 'scheduleItems', 'swap', 'branch:minimal', 'branch_minimal', 'tipReport', 'companyEvent', 'availability'])]
    private $name;

}
