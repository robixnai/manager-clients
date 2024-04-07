<?php
class ClientModel
{
    private $id;
    private $code;
    private $name;
    private $last_name;
    private $age;

    public function __construct($id, $code, $name, $last_name, $age)
    {
        $this->id = $id;
        $this->code = $code;
        $this->name = $name;
        $this->last_name = $last_name;
        $this->age = $age;
    }

    public function get_id()
    {
        return $this->id;
    }

    public function get_code()
    {
        return $this->code;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function get_last_name()
    {
        return $this->last_name;
    }

    public function get_age()
    {
        return $this->age;
    }
}
