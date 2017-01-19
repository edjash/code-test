<?php

class Vehicles
{
    protected $vehicles;
    protected $vehicle_groups;

    public function __construct()
    {
        $this->vehicles = $this->readJson('vehicles.json');
	$this->vehicle_groups = $this->readJson('vehicle_groups.json');
	$this->sendResult();
    }

    public function readJson($file)
    {
        $file = file_get_contents(__DIR__ . '/' . $file);

        return json_decode($file, true);
    }

    public function sendResult()
    {	
	$result = array("vehicles" => array(), "vehicle_stats" => array());

	//Prepare array of group id's
	$groups = array();
	foreach ($this->vehicle_groups as $group)  {
		//convert string array to integer array
		$arr = array_map('intval', explode(",", $group['groups']));
		//remove 0 values
		$arr = (array_sum($arr)) ? $arr : array();
		$groups[$group['id']] = $arr;
	}

	
	//Loop vehicles and populate result array
	foreach ($this->vehicles as $vehicle) {
		$id = array_shift($vehicle);
		$status = $vehicle['status'];

		//convert string values to float
		$vehicle = array_map('floatval', $vehicle);
		$vehicle['groups'] = $groups[$id];
		$vehicle['status'] = $status;

		$result["vehicles"][$id] = $vehicle;
		$result["vehicle_stats"][$vehicle['status']]++;
	}

	$result['vehicle_stats']['total'] = array_sum($result['vehicle_stats']);
	
	die(json_encode($result, JSON_PRETTY_PRINT));
    }
}

new Vehicles();

