<?php
	require 'class.iCalReader.php';


	function show_event(){
		setlocale (LC_TIME, 'fr_FR.utf8','fra'); //Pour avoir les locales en fr
		$fichier_source = "http://aei:aei@aei-asso.fr/cloud/remote.php/caldav/calendars/aei/aei?export";
		$NB_EVENT_AFF = 3; //Nombre d'évènement à afficher par défaut.
		$pb_fichier = false;//En cas de problème d'ouverture du fichier, on passe à false
		$fichier_ics = "aei.ics"
		try{
			$ical = new ical($fichier_source);
		}
		catch(Exception $e){
			$pb_fichier = true;;
		}
		if($pb_fichier){//Erreur lors de l'ouverture du fichier
			echo "<p class=\"error\"> Ooops, l'agenda n'est pas disponible pour le moment. Appuyez sur \"F5\" pour re-visualiser la page.</p>";
		}
		else{//On récupére les données
			/*========== Récupération de tous les événements ==========*/
			if($ical->event_count === 0){//Pas d'événements de prévu
				echo "<ul>\n\t<li>Rien de prévu pour le moment. Repassez nous voir pour vous tenir au courant</li>\n</ul>";
			}
			else{
				$ical_event = $ical->sortEventsWithOrder($ical->events(), SORT_ASC);//On récupère les events trié
				/*========== Détermination des prochains événements à venir ==========*/
				$date_courante = intval(date("Ymd"));
				$it_event = 0;//Pointera au prochain événement à venir à la fin de la boucle
				while(intval(substr($ical_event[$it_event]['DTSTART'],0, 8) < $date_courante)
						&& $it_event < count($ical_event)){
					$it_event++;
				}
				/*========== Si le nombre d'événements est inférieur à NB_EVENT_AFF ==========*/
				if(count($ical_event) - $it_event < 3){
					//On utilise la taille du tableau car le tableau est trié.
					$NB_EVENT_AFF = count($ical_event) - $it_event;
				}
				/*========== On affiche les prochains événement ==========*/
				for($i = 0 ; $i < $NB_EVENT_AFF; $i++){
						echo "\t<ul>".$ical_event[$i+$it_event]['SUMMARY']."\n\t\t";
						echo "<li>".strftime("%A %e %G",$ical->iCalDateToUnixTimestamp($ical_event[$i+$it_event]['DTSTART']))."</li>\n\t\t";
						echo "<li>".$ical_event[$i+$it_event]['LOCATION']."</li>\n\n\t\t";
						echo "<li class=\"Description\">".$ical_event[$i+$it_event]['DESCRIPTION']."</li>\n\t";
						echo "</ul>\n";
				}
				echo "</ul>";
			}
		}
		echo "<p>Pour toujours être à jour, abonnez-vous à notre <a href=\"".$fichier_ics."\">calendrier</a></p>";
	}
?>
