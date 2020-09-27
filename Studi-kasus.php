<?php

class Player
{
    private $nama;
    private $baseHealth;
    private Weapon $weapon;
    private Armor $armor;
    private $baseattack;
    private $level;
    private $incrementHealth;
    private $incrementAttack;

    public function __construct($nama)
    {
        $this->nama = $nama;
        $this->baseHealth = 100;
        $this->baseattack = 100;
        $this->level = 1;
        $this->incrementHealth = 20;
        $this->incrementAttack = 20;
    }

    public function LevelUp($level)
    {
        $this->level++;
    }

    public function Setwepon(Weapon $weapon)
    {
        $this->weapon = $weapon;
    }

    public function Setarmor(Armor $armor)
    {
        $this->armor = $armor;
    }

    public function MaxHealth()
    {
        return "{$this->baseHealth}" + "{$this->level}" * "{$this->incrementHealth}" + "{$this->armor->Getdefent()}";
    }

    public function getattack()
    {
        return "{$this->baseattack}" + "{$this->level}" * "{$this->incrementAttack}" + "{$this->weapon->Getattack()}";
    }

    public function Display()
    {
        echo "Player    : {$this->nama}<br>";
        echo "Level     : {$this->level}<br>";
        echo "MaxHealth : {$this->MaxHealth()}<br>";
        echo "Attack    : {$this->getattack()}<hr>";
    }
}

class Weapon
{
    private $nama;
    private $attack;

    public function __construct($nama, $attack)
    {
        $this->nama = $nama;
        $this->attack = $attack;
    }

    public function Getattack()
    {
        return "{$this->attack}";
    }
}

class Armor
{
    private $nama;
    private $defent;

    public function __construct($nama, $defent)
    {
        $this->nama = $nama;
        $this->defent = $defent;
    }

    public function Getdefent()
    {
        return "{$this->defent}";
    }
}

// Object
$player1 = new Player("Azriel");
$weapon1 = new Weapon("Pedang", 50);
$armor1 = new Armor("Baju besi", 50);
$player1->Setarmor($armor1);
$player1->Setwepon($weapon1);

$player2 = new Player("Raihan");
$weapon2 = new Weapon("ketapel", 20);
$armor2 = new Armor("Kaos Dalem", 10);
$player2->Setarmor($armor2);
$player2->Setwepon($weapon2);

// Cetak
echo $player1->Display();
echo $player2->Display();
