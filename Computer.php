<?php

class Computer
{
    public $model = null;
    public $operating_system = null;
    public $is_portable = false;
    public $status = "off";

    public function switchOff()
    {
        $this->status = "off";
    }

    public function toggleSwitch()
    {
        $this->status = $this->status === "on" ? "off" : "on";
    }
}