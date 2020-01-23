<?php
class Character {
  protected int $health;
  protected int $mana;
  protected Stuff $stuff;

  public function __construct($health, $mana, $stuff) {
    $this->health = $health;
    $this->mana = $mana;
    $this->stuff = $stuff;
  }
  public function __destruct() {
  }
  public function chat(string $var) : string {
  }
}
class Orc extends Character {
  protected int $health = 1000;

  public function useHammer() : bool {
  }
  public function useSword() : bool {
  }
}
class Stuff {
  protected string $head;
  protected string $body;
  protected string $weapon;

  public function __construct($head, $body, $weapon) {
    $this->head = $head;
    $this->body = $body;
    $this->weapon = $weapon;
  }
  public function view() : string {
  }
  public function __destruct() {
  }
}