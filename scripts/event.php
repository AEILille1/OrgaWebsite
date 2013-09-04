<?php
require 'class.iCalReader.php';

function show_abo_ics(){
    echo "<p>Pour toujours être à jour, abonnez-vous à notre <a href=\"aei.ics\">calendrier</a></p>";
}

function extract_events($ical){
    if($ical->event_count === 0){//Rien de prévu
        echo  "<ul>\n\t<li>Rien de prévu pour le moment. Repassez nous voir pour vous tenir au courant</li>\n</ul>";
        show_abo_ics();
        die();
    }
    //On retourne tous les événement à venir
    return $ical->sortEventsWithOrder($ical->events(), SORT_ASC);
}

function next_event($ical_event){
    $date_courante = intval(date("Ymd"));
    $it_event = 0;//Pointera au prochain événement à venir à la fin de la boucle
    while(intval(substr($ical_event[$it_event]['DTSTART'],0, 8) < $date_courante)
          && $it_event < count($ical_event)){
        $it_event++;
    }
    return $it_event;
}

function show_event(){
    setlocale (LC_TIME, 'fr_FR.utf8','fra'); //Pour avoir les locales en fr
    $fichier_source = "http://aei:aei@aei-asso.fr/cloud/remote.php/caldav/calendars/aei/aei?export";
    //$fichier_source = "http://admin:admin@localhost/owncloud/remote.php/caldav/calendars/admin/defaultcalendar?export";
    $NB_EVENT_AFF = 3; //Nombre d'évènement à afficher par défaut.
    $fichier_ics = "aei.ics";
	//Ouverture du fichier
    try{
        $ical = new ical($fichier_source);
    }
    catch(Exception $e){
        echo "yolanda";
        echo "<p class=\"error\"> Ooops, l'agenda n'est pas disponible pour le moment. Appuyez sur \"F5\" pour re-visualiser la page.</p>";
        show_abo_ics();
        die();
    }
    //On a réussi à ouvrir le calendrier. Youhou!
    $ical_event = extract_events($ical);
    //Recherche de l'indice dans le tableau du prochain élément
    $it_event = next_event($ical_event);
    /*========== Si le nombre d'événements est inférieur à NB_EVENT_AFF ==========*/
    if(count($ical_event) - $it_event < 3){
        //On utilise la taille du tableau car le tableau est trié.
        $NB_EVENT_AFF = count($ical_event) - $it_event;
    }
    /*========== On affiche les prochains événement ==========*/
    for($i = 0 ; $i < $NB_EVENT_AFF; $i++){
        echo "\t<ul>".$ical_event[$i+$it_event]['SUMMARY']."\n\t\t";
        echo "<li>".strftime("%A %e %B %G",$ical->iCalDateToUnixTimestamp($ical_event[$i+$it_event]['DTSTART']))."</li>\n\t\t";
        echo "<li>".$ical_event[$i+$it_event]['LOCATION']."</li>\n\n\t\t";
        if(isset($ical_event[$i+$it_event]['DESCRIPTION'])){
            echo "<li class=\"Description\">".$ical_event[$i+$it_event]['DESCRIPTION']."</li>\n\t";
        }
        echo "</ul>\n";
    }
    echo "</ul>";
    //On affiche le lien de l'abonnement
    show_abo_ics();
}

?>