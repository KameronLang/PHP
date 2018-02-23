<?php
class Foo {
  public $bar;
  public function __construct($foo) {
    $this->foo = $foo;
    $this->bar = $this->getBar();
  }

  public function getBar() {
    return "Bar";
  }

  public function setFoo() {
    return $this->foo . ' ' . $this->bar;
  }
}

$foo = new Foo('Kava');
echo $foo->setFoo();
