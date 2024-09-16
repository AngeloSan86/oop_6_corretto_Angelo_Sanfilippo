<?php

/*
Crea un file chiamato class.php e crea una classe astratta di tipo Categoria , con i relativi figli (ovvero che estendono Category) seguendo questa struttura:
Category
-- Attualita'
-- Sport
-- Gossip
-- Storia

Tutte le classi dovranno avere un metodo astratto chiamato: getMyCategory() che mostri a schermo il valore relativo.
*/


abstract class Categoria{

  abstract function getMyCategory();

}

class Attualita extends Categoria{

  public function getMyCategory(){
    echo "Attualità\n";
  }

}

class Sport extends Categoria{
  public function getMyCategory(){
    echo "Sport\n";
  }
  
}

class Gossip extends Categoria{
  public function getMyCategory(){
    echo "Gossip\n";
  }
  
}

class Storia extends Categoria{
  public function getMyCategory(){
    echo "Storia\n";
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
?>