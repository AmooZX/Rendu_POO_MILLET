<?php

require_once ROOT_PATH . 'controllers/Manager.php';
require_once ROOT_PATH . 'models/Starship.php';

class StarshipController extends Manager{

    public function getById(int $id) {
        return $this->jsonMapper($this->starship, $this->sendRequest('https://swapi.dev/api/starships/' . $id));

    public function get() {
        return $this->jsonMassMapper(new Starship(), $this->sendRequest('https://swapi.dev/api/starships/')['results']);
    }
}