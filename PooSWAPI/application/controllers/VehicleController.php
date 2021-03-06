<?php

require_once ROOT_PATH . 'controllers/Manager.php';
require_once ROOT_PATH . 'models/Vehicle.php';

class VehicleController extends Manager{

    public function getById(int $id) {
        return $this->jsonMapper($this->vehicle, $this->sendRequest('https://swapi.dev/api/vehicles/' . $id));

    public function get() {
        return $this->jsonMassMapper(new Vehicle(), $this->sendRequest('https://swapi.dev/api/vehicles/')['results']);
    }
}