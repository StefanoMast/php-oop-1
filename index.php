<?php
//dichiaro la classe con le variabili al suo interno
class Movie {
    public $title;
    public $year;
    public $language;

    function __constructor($_title, $_year, $_language)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->language= $_language;
    }

    public function getTitleYear() {
        return $this->title . " ".  "è uscito nell'anno" . " " . $this->year;
    }

    
} 

//creo array da far visualizzare nel browser
$movies =[];
// variabili
$jumanji = new Movie("Jumanji", "1995", "english");
$jumanji->title = "Jumanji";
$jumanji->year = "1995";
$jumanji->language = "english";
$movies [] = $jumanji;

$trainspotting = new Movie ("Trainspotting", "1996", "english");
$trainspotting->title = "Trainspotting";
$trainspotting->year = "1996";
$trainspotting->language = "english";
$movies[] = $trainspotting;

$ladolcevita = new Movie ("La dolce vita", "1960", "italian");
$ladolcevita->title = "La dolce vita";
$ladolcevita->year = "1960";
$ladolcevita->language = "italian";
$movies[] = $ladolcevita;
?>

<!-- visualizzazione nel browser -->
<ul>
    <?php foreach ($movies as $Movie) { ?>
        <li>
            <h3>
                <?php echo $Movie->getTitleYear(); ?>
            </h3>
            <h4>
                <?php echo $Movie->language; ?>
            </h4>
        </li>
    <?php } ?>
</ul>