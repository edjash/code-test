<?php

class Vehicles
{
    protected $vehicles;
    protected $vehicle_groups;

    public function __construct()
    {
        $this->vehicles = $this->readJson('vehicles.json');
        $this->vehicle_groups = $this->readJson('vehicle_groups.json');
    }

    public function readJson($file)
    {
        $file = file_get_contents(__DIR__ . '/' . $file);

        return json_decode($file, true);
    }

    /*
     * YOUR FUNCTION HERE
     * */
}
