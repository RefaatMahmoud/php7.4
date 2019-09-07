<?php
class User
{
    private int $id;
    private string $name;

    public function __construct(int $id, string $name) {
        $this->id = $id;
        $this->name = $name;
    }

    public function getUser(): string {
        return "ID : $this->id  , Name $this->name";
    }
}

$user = new User(1, 'refaat');
print_r($user);