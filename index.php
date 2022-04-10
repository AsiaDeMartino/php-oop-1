<?php

// 1. è definita una classe ‘Movie’
    // a => all’interno della classe sono dichiarate delle variabili d’istanza
    // b => all’interno della classe è definito un costruttore
    // c => all’interno della classe è definito almeno un metodo
// 2. vengono istanziati almeno due oggetti ‘Movie’
// 3. stampate a schermo i valori delle relative proprietà di ogni oggetto (potete creare un array con dentro le due istanze e fare un ciclo per stampare i dati)


class Movie {
    public $titolo;
    public $genere;
    public $annoUscita;
    public $trama;
    public $attoriPrincipali;
    public $voto;

    function __construct($_titolo, string $_genere, int $_annoUscita, string $_trama, string $_attoriPrincipali, int $_voto) {
        $this->titolo = $_titolo;
        $this->genere = $_genere;
        $this->annoUscita = $_annoUscita;
        $this->trama = $_trama;
        $this->attoriPrincipali = $_attoriPrincipali;
        $this->voto = $_voto;

    }

    public function FilmInfo() {
        return
        "<h1> $this->titolo </h1>" .
        "<span> GENERE: $this->genere  </span>" . "<br>" . 
        "<span> ANNO DI USCITA: $this->annoUscita </span>" . "<br>" . 
        "<span> ATTORI PRINCIPALI: $this->attoriPrincipali </span>" . "<br>" . 
        "<span> VOTO: $this->voto </span>" . "<br>" . 
        "<h5>  TRAMA: </h5>" .
        "<p> $this->trama </p>";
    }
}


$harryPotter = new Movie ("Harry Potter e La Pietra Filosofale", "Fantasy, Avventura" , 2001 , "Harry Potter è un ragazzo orfano in seguito all'uccisione dei suoi genitori da parte di Lord Voldemort. Ha un viso sottile, occhi verde intenso e una cicatrice sulla fronte a forma di saetta. A un anno viene affidato agli zii Dursley, che però lo trattano male.", "Daniel Radcliffe, Rupert Grint, Emma Watson", 10);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php echo $harryPotter->FilmInfo() ?>
    </div>
</body>
</html>