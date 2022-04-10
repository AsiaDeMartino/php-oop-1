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
$inception = new Movie ("Inception", "Azione, Fantascienza, Thriller, Avventura", 2010 ,"Dominic 'Dom' Cobb è un 'estrattore', un professionista che si occupa di estrarre segreti dalle menti delle persone mentre queste dormono, infiltrandosi nei loro sogni tramite uno speciale apparecchio che permette a un gruppo di partecipare a un 'sogno condiviso'.", "Leonardo DiCaprio, Joseph Gordon-Levitt, Ellen Page", 9);
$bigFish = new Movie ("Big Fish - Le storie di una vita incredibile", "	Fantasy, Drammatico, Avventura", 2003, "Alla festa di nozze di Will Bloom, suo padre Edward ricorda il giorno in cui Will nacque, sostenendo di aver catturato un enorme pesce gatto usando la sua fede nuziale come esca. Will, avendo ascoltato queste storie per tutta la vita, crede che siano bugie, litiga con suo padre e di fatto interrompe i rapporti con lui.", "Ewan McGregor, Albert Finney, Jessica Lange", 7);
$wildTarget = new Movie ("Wild Target", "Commedia", 2010, "Victor Maynard è un abile sicario di mezz'età. È stato iniziato alla professione dal padre, ormai scomparso, e la madre Louisa lo incoraggia ancora oggi a proseguire con dedizione e passione la 'tradizione' di famiglia. La sua routine, relativamente tranquilla e abitudinaria, subisce un drastico cambio di rotta quando gli viene commissionato il delitto di Rose, un'affascinante ladra cleptomane che ha compiuto il colpo della vita beffando il ricco malavitoso Ferguson. Per la prima volta in carriera, inaspettatamente Victor non riesce a uccidere la sua vittima, innamorandosi anzi di lei e salvandola a sua volta da una prima vendetta di Ferguson.", "Bill Nighy, Emili Blunt, Rupert Grint, Martin Freeman", 11);
$scottPilgrim = new Movie ("Scott Pilgrim vs. the World", "Azione, Commedia, Sentimentale, Grottesco", 2010, "Se il ventiduenne Scott Pilgrim vuole avere il vero amore di Ramona, dovrà sconfiggere - uno dopo l'altro - i sette ex di lei.", "Michael Cera, Mary Elizabeth Winstead", 8);
$howl = new Movie ("Il castello errante di Howl", "Animazione, Fantasy, Sentimentale, Avventura", 2004, "Sophie È la figlia maggiore del cappellaio Hatter. Vive la sua giovinezza come un incanto di cui non sa che fare. Vittima di un sortilegio lanciatole dalla Strega delle Lande, diventa una vecchia di 90 anni e precipita nel castello errante del mago Howl. Howl Il padrone del castello errante.", "Chieko Baishō,Takuya Kimura", 9);

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
    <div>
        <?php echo $inception->FilmInfo() ?>
    </div>
    <div>
        <?php echo $bigFish->FilmInfo() ?>
    </div>
    <div>
        <?php echo $wildTarget->FilmInfo() ?>
    </div>
    <div>
        <?php echo $scottPilgrim->FilmInfo() ?>
    </div>
    <div>
        <?php echo $howl->FilmInfo() ?>
    </div>
</body>
</html>