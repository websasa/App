<?php
class Osoba{
    protected readonly string $name;

    protected int $age;

    protected string $gender;
    public function __construct(
        protected string $name, 
        protected int $age = 20, 
        protected string $gender = 'f'
        )
    {
        echo "Calling construct in Osoba\n";
    }
