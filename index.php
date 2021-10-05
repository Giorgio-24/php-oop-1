<?php
class Movie
{
    public $id;
    public $title;
    public $duration;
    public $director;
    public $description;
    public $ranking;
    public $yearOfRelease;



    public  function  __construct($_id, $_director, $_title, $_duration, $_yearOfRelease, $_description = 'Unknown', $_ranking = 'n/d')
    {
        $this->id = $_id;
        $this->title = $_title;
        $this->duration = $_duration;
        $this->description = $_description;
        $this->ranking = $_ranking;
        $this->yearOfRelease = $_yearOfRelease;
        $this->director = $_director;
    }

    public function countYears($_currentYear = 2021)
    {
        $total_years = $_currentYear - $this->yearOfRelease;

        return "This movie has been released $total_years years ago.";
    }
};

$des_1 = 'Sara Goldfarb, a widow who lives alone in a Brighton Beach apartment, spends her time watching television.
 Her son Harry is a heroin addict, along with his friend Tyrone and girlfriend Marion. The three traffic heroin in a
 bid to realize their dreams; Harry and Marion plan to open a clothing store for Marion\'s designs,
 while Tyrone seeks an escape from the ghetto and the approval of his mother. When Sara receives a call that she has
 been invited to her favorite game show, she begins a restrictive crash diet in an attempt to fit into
 a red dress that she wore at Harry\'s graduation.';

$movie_1 = new Movie(1, 'Darren Aronofsky', 'Requiem for a Dream', 102, 2000, $des_1);
var_dump($movie_1);
echo $movie_1->countYears();

$movie_2 = new Movie(2, 'Martin Scorsese', 'Shutter Island ', 139, 2010);
var_dump($movie_2);
echo $movie_2->countYears();
