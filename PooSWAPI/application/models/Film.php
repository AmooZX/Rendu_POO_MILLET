<?php

require_once('APIData.php');

class Film extends APIData{

    public $title;
    public $episode_id;
    public $opening_crawl;
    public $director;
    public $producer;
    public $release_date;
    public $characters = [];
    public $planets = [];
    public $starships = [];
    public $vehicles = [];
    public $species = [];
}