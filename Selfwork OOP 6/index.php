<?php

/*
Crea un nuovo file chiamato index.php e, importando la classe appena creata, crea una classe Post con i seguenti attributi:
Titolo
Categoria
Tag

Crea delle istanze di classe Post, iniettando la dipendenze Categoria all’interno dell’attributo dedicato. Crea anche dei metodi per visualizzare gli articoli completi.
*/

require_once("class.php");

class Post {
  public $titolo;
  public $categoria;
  public $tag;

  public function __construct(string $titolo, Categoria $categoria, string $tag) {
      $this->titolo = $titolo;
      $this->categoria = $categoria;
      $this->tag = $tag;
  }

  public function getTitolo(){
      echo $this->titolo;
  }

  public function getCategoria(){
      echo $this->categoria->getMyCategory();
  }

  public function getTag(){
      echo $this->tag;
  }

  public function postDescription(){

    echo "\n";
    $this->getTitolo();
    echo "\n";
    $this->getCategoria();
    $this->getTag();
    echo "\n";
  }
}

$attualita = new Attualita();
$attualita->getMyCategory();

$sport = new Sport();
$sport->getMyCategory();

$gossip = new Gossip();
$gossip->getMyCategory();

$storia = new Storia();
$storia->getMyCategory();

$postAttualita = new Post("Attualità di oggi", $attualita, "notizie");
$postAttualita->postDescription();

$postSport = new Post("Notizie sportine", $sport, "sport");
$postSport->postDescription();

$postGossip = new Post("Ultimer notizie di gossip dal mondo", $gossip, "gossip");
$postGossip->postDescription();

$postStoria = new Post("Scoperte di storia contemporanea", $storia, "storia");
$postStoria->postDescription();






?>