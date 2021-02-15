<?php 
/**
 * @author Tizio tizio@email.it
 * @copyright 2021 Tizio
 */
class Squadra{
    public $nome;
    public $allenatore;
    public $colori;
    public $fondazione;

    public function __construct(string $nome, string $allenatore, string $colori, int $fondazione){
        $this->nome = $nome;
        $this->allenatore = $allenatore;
        $this->colori = $colori;
        $this->fondazione = $fondazione;
    }
}

$squadra1 = new Squadra('Napoli', 'Gattuso', 'bianco e blu', 1926);
$squadra2 = new Squadra('Inter', 'Conte', 'nero e blu', 1908);
$squadra3 = new Squadra('Milan', 'Pioli', 'rosso e nero', 1899);
$squadra4 = new Squadra('Roma', 'Fonseca', 'rosso e giallo', 1927);

$squadre = [
    $squadra1,
    $squadra2,
    $squadra3,
    $squadra4,
]

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        section{
            padding: 10px 0;
            line-height: 18px;
        }
    </style>
</head>
<body>
    <?php
    foreach($squadre as $team) { ?>
        <section>
            <h3>Squadra: <?php echo $team->nome; ?> </h3>
            <h3>Allenatore: <?php echo $team->allenatore; ?> </h3>
            <h3>Colori Sociali: <?php echo $team->colori; ?> </h3>
            <h3>Anno di Fondazione: <?php echo $team->fondazione; ?> </h3>
        </section>

    <?php
    }
    ?>

</body>
</html>









