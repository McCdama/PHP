<?php
// src/GreetingGenerator.php
namespace App;

class GreetingGenerator
{
    public function getRandomGreeting()
    {
        $greetings = ['Hey', 'Yo', 'Aloha', ' Señor'];
        $greeting = $greetings[array_rand($greetings)];

        return $greeting;
    }
}
