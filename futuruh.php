<?php
function heuremaghrib($H, $i){
$iftartime="
██╗   ██╗ █████╗     ███╗   ███╗ █████╗ ███╗   ██╗ ██████╗ ███████╗██████╗     ██╗██╗██╗
██║   ██║██╔══██╗    ████╗ ████║██╔══██╗████╗  ██║██╔════╝ ██╔════╝██╔══██╗    ██║██║██║
██║   ██║███████║    ██╔████╔██║███████║██╔██╗ ██║██║  ███╗█████╗  ██████╔╝    ██║██║██║
╚██╗ ██╔╝██╔══██║    ██║╚██╔╝██║██╔══██║██║╚██╗██║██║   ██║██╔══╝  ██╔══██╗    ╚═╝╚═╝╚═╝
 ╚████╔╝ ██║  ██║    ██║ ╚═╝ ██║██║  ██║██║ ╚████║╚██████╔╝███████╗██║  ██║    ██╗██╗██╗
  ╚═══╝  ╚═╝  ╚═╝    ╚═╝     ╚═╝╚═╝  ╚═╝╚═╝  ╚═══╝ ╚═════╝ ╚══════╝╚═╝  ╚═╝    ╚═╝╚═╝╚═";
$monprenom ="
__  __                 _ _             _____  __ _               _______ _                
 |  \/  |               | (_)           |_   _|/ _| |             |__   __(_)               
 | \  / | ___  _   _ ___| |_ _ __ ___     | | | |_| |_ __ _ _ __     | |   _ _ __ ___   ___ 
 | |\/| |/ _ \|	 | | / __| | | '_ ` _ \    | | |  _| __/ _` | '__|    | |  | | '_ ` _ \ / _ \
 | |  | | (_) | |_| \__ \ | | | | | | |  _| |_| | | || (_| | |       | |  | | | | | | |  __/
 |_|  |_|\___/ \__,_|___/_|_|_| |_| |_| |_____|_|  \__\__,_|_|       |_|  |_|_| |_| |_|\___|
";
$maintenant = new DateTime();
$future = new DateTime('2022-04-14');
$future->setTime($H, $i);
$future->format('H:i:s');
if($maintenant < $future){

$intervale = $future->diff($maintenant);
echo $intervale->format("\n\n\n\n $monprenom\n\n                               %h Heures, %i Minute, %s Secondes\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n");
}
elseif($maintenant > $future){
echo "\n\n\n\n\n\n\n\n\n\n\n\ $iftartime \n\n\n\n\n\n\n\n";
}
}
heuremaghrib(20, 44);
// Combien de Temps avant de pouvoir manger ? premier parametre avec +1h par rapport 
