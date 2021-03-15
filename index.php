<?php

class Videogioco {
    public $titolo;
    public $genere;
    public $sviluppatore;
    public $editore;
    public $multiplayer;
    public $annoDiUscita;

    public function __construct($titolo, $genere, $sviluppatore, $editore, $multiplayer, $annoDiUscita) {
        $this->titolo = $titolo;
        $this->genere = $genere;
        $this->sviluppatore = $sviluppatore;
        $this->editore = $editore;
        $this->multiplayer = $multiplayer;
        $this->annoDiUscita = $annoDiUscita;
    }
}

class Negozio {
    public $nome;

    private $videogiochi = [];

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function addVideogame(Videogioco $videogioco) {
        $this->videogiochi[] = $videogioco;
    }

    public function getVideogames() {
        return $this->videogiochi;
    }
}

$gioco_1 = new Videogioco('Death Stranding', 'Social Strand', 'Kojima Productions', 'Sony Interactive', 'Sì', '2019');
echo "Titolo: " . $gioco_1->titolo . "<br>";
echo "Genere: " . $gioco_1->genere . "<br>";
echo "Sviluppato da: " . $gioco_1->sviluppatore . "<br>"; 
echo "Pubblicato da: " . $gioco_1->editore . "<br>";
echo "Multiplayer: " . $gioco_1->multiplayer . "<br>";
echo "Anno di uscita: " . $gioco_1->annoDiUscita . "<br> <br>";

$gioco_2 = new Videogioco('Nier: Automata', 'Azione', 'Platinum Games', 'Square Enix', 'Sì', '2017');
var_dump($gioco_2);
echo "<br> <br>";

$gioco_3 = new Videogioco('The Witcher 3', 'GDR', 'CD Projekt RED', 'Bandai Namco', 'No', '2015');


$nuovoNegozio = new Negozio('GameStop');
$nuovoNegozio->addVideogame($gioco_3);

print_r($nuovoNegozio->getVideogames());