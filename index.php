<?php
class Character {
  private int $health;
  private int $mana;
  private Stuff $stuff;

  public function __construct() {
  }
  public function __destruct() {
  }
  public function chat(string $var) : string {
  }
}
class Orc extends Character {
  private int $health = 1000;

  public function useHammer() : bool {
  }
  public function useSword() : bool {
  }
}
class Stuff {
  private string $head;
  private string $body;
  private string $weapon;

  public function __construct() {
  }
  public function view() : string {
  }
  public function __destruct() {
  }
}