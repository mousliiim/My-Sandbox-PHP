<?php
@system('clear');
$asciitribu = "	
                                   ___---___
                             ___---___---___---___
                       ___---___---    *    ---___---___
                 ___---___---    o/ 0_/  @  o ^   ---___---___
           ___---___---        Tribunal d'Epitech       ---___---___
     ___---___---    __/|  //\  /|  |\  /\  |\|  |_  __--oj   ---___---___
__---___---_________________________________________________________---___---__
===============================================================================
 ||||                                                                     ||||
 |---------------------------------------------------------------------------|
 |___-----___-----___-----___-----___-----___-----___-----___-----___-----___|
 / _ \===/ _ \   / _ \===/ _ \   / _ \===/ _ \   / _ \===/ _ \   / _ \===/ _ \
( (.\ oOo /.) ) ( (.\ oOo /.) ) ( (.\ oOo /.) ) ( (.\ oOo /.) ) ( (.\ oOo /.) )
 \__/=====\__/   \__/=====\__/   \__/=====\__/   \__/=====\__/   \__/=====\__/
    |||||||         |||||||         |||||||         |||||||         |||||||
    |||||||         |||||||         |||||||         |||||||         |||||||
    |||||||         |||||||         |||||||         |||||||         |||||||
    |||||||         |||||||         |||||||         |||||||         |||||||
    |||||||         |||||||         |||||||         |||||||         |||||||
    |||||||         |||||||         |||||||         |||||||         |||||||
    |||||||         |||||||         |||||||         |||||||         |||||||
    |||||||         |||||||         |||||||         |||||||         |||||||
    (oOoOo)         (oOoOo)         (oOoOo)         (oOoOo)         (oOoOo)
    J%%%%%L         J%%%%%L         J%%%%%L         J%%%%%L         J%%%%%L
   ZZZZZZZZZ       ZZZZZZZZZ       ZZZZZZZZZ       ZZZZZZZZZ       ZZZZZZZZZ
  ===========================================================================
__|_________________________________________________________________________|__
_|___________________________________________________________________________|_
|_____________________________________________________________________________|
_______________________________________________________________________________";

echo $asciitribu . PHP_EOL;
sleep(5);
@system('clear');
sleep(3);
echo "Bienvenue au Tribunal , Si vous êtes ici c'est déjà car vous galerez" . PHP_EOL;
echo "tout simplement et que vous allez portez plainte virtuellement sur un Programme PHP contre une personne .." . PHP_EOL . PHP_EOL;
sleep(5);
$firstreponse = readline ("Est-ce bien cela ? : ");
if($firstreponse == "Oui" || $firstreponse == "oui"){
echo PHP_EOL . PHP_EOL . "D'accord .. Quelque seconde vous allez rentrer en salle d'audiance .. " . PHP_EOL;
sleep(4);
}
elseif($firstreponse != "Oui" || $firstreponse != "oui"){
echo "Sécurité !! SORTEZ CE GUEU D'ICI !" . PHP_EOL . PHP_EOL;;
sleep(4);
echo PHP_EOL ."\033[01;31m                      ________________
                      \      __      /         __
                       \_____()_____/         /  )
                       '============`        /  /
                        #---\  /---#        /  /
                       (# @\| |/@  #)      /  /
                        \   (_)   /       /  /
                        |\ '---` /|      /  /
                _______/ \\_____// \____/ o_|
               /       \  /     \  /   / o_|
              / |           o|        / o_| \
             /  |  _____     |       / /   \ \
            /   |  |===|    o|      / /\    \ \
           |    |   \@/      |     / /  \    \ \
           |    |___________o|__/----)   \    \/
           |    '              ||  --)    \     |
           |___________________||  --)     \    /
                |           o|   ''''   |   \__/
                |            |          |

 Ont arrête de faire le malin et ont sort maintenant le mec de la Wac \033[0m" . PHP_EOL . PHP_EOL;
 sleep(5);
 die;
}
@system('clear');

sleep(2);


// Lit 3 commandes de l'utilisateur
        $plaignant = readline ("Votre Nom en tant que Plaignant : ");
        echo "Bonjour , Monsieur $plaignant vous êtes au tribunal d'Epitech suite a une plainte , Merci de renseigner ces informations suivante";
        sleep(4);
        echo PHP_EOL . PHP_EOL;
        $name = readline("Nom de l'accusé : ");
        $fait = readline("Fait accusation : ");
        echo PHP_EOL . "D'accord je note quelque seconde ... " . PHP_EOL . PHP_EOL;
        sleep(3);
        echo "$plaignant accuse $name pour $fait !" . PHP_EOL;

        $deliberation = readline("Etes vous d'accord pour le comdamner pour une peine ferme ? ( Oui ou Non ) : ");

        if($deliberation == "Oui" || $deliberation == "oui"){
            echo PHP_EOL . PHP_EOL . PHP_EOL;
            $text = "Phase de Reflexion";
         for($inc = 0; $inc < 16; $inc++){
            echo substr($text, $inc , 16) . PHP_EOL;
            usleep(630000);
            @system('clear');
         }
         }
         elseif($deliberation != "Oui" || $deliberation != "oui"){
            sleep(3);
            echo PHP_EOL . PHP_EOL;
            echo "Monsieur $name vous êtes acquitée par la grace de Monsieur $plaignant vous pouvez disposez !" . PHP_EOL;
            sleep(4);
            @system('clear');
            die;
        }

        $randomanne = rand(0,20);
        $randommois = rand(1,12);
        echo "Nous avons délibérer !" . PHP_EOL;
        usleep(3000000);
        echo "\033[01;31m Monsieur $name as commis des fait trés graves de $fait !! ... \033[0m" . PHP_EOL;
        usleep(3000000);
        echo "Donc Monsieur $name , Aprés décision aussi la part de Monsieur $plaignant ..." . PHP_EOL;
        usleep(5000000);
        echo "Vous serez comdamnée à une peine de $randomanne années ferme et $randommois mois de prison !" . PHP_EOL;
        usleep(3000000);
        echo "\033[01;31m Audience Terminée ! CLAP CLAP CLAP \033[0m" . PHP_EOL;
        usleep(4000000);