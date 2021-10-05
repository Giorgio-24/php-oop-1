<?php
class Movie
{
    public $title;
    public $duration;
    public $director;
    public $actors;
    public $description;
    public $ranking;
    public $yearOfRelease;



    public  function  __construct($_title, $_duration, $_actors, $_description, $_ranking, $_yearOfRelease, $_director = 'Anonymous')
    {

        $this->title = $_title;
        $this->duration = $_duration;
        $this->actors = $_actors;
        $this->description = $_description;
        $this->ranking = $_ranking;
        $this->yearOfRelease = $_yearOfRelease;
        $this->director = $_director;
    }
};
