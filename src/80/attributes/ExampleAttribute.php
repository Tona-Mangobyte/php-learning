<?php

namespace classes;


#[\ExampleAttribute('Hello world', 42)]
class Foo {}

#[Attribute]
class ExampleAttribute
{
    private string $message;
    private int $answer;
    public function __construct(string $message, int $answer) {
        $this->message = $message;
        $this->answer = $answer;
    }
}

$reflector = new \ReflectionClass(Foo::class);
$attrs = $reflector->getAttributes();

foreach ($attrs as $attriubute) {

    print_r($attriubute->getName() . PHP_EOL); // "My\Attributes\ExampleAttribute"
    print_r($attriubute->getArguments()); // ["Hello world", 42]
    // $attriubute->newInstance();
    // object(ExampleAttribute)#1 (2) {
    //  ["message":"Foo":private]=> string(11) "Hello World"
    //  ["answer":"Foo":private]=> int(42)
    // }
}
