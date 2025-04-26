<?php

// Class -> Tesla Y
// Object -> My Tesla Y or your Tesla Y

class Person {
  // public string $name;
  // public int $age;

  public function __construct(public string $name,public int $age) // this is valid class even not declare the name,age, and this->name, this->age because already pass the public argument on constructor
  {
    // $this->name = $name;
    // $this->age = $age;
  }

  public function introduce(): string {
    return "Hi, I'm {$this->name} and I'm {$this->age} years old \n";
  }
}

$person = new Person("Raphael", 30);
echo $person->introduce();

$person2 = new Person("Light", 10);
echo $person2->introduce();