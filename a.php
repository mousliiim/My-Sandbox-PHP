<?php
function jemange($nbr){
	if($nbr > 2){
	for($i = 0; $i <= $nbr; $i++){
	echo "Tu vas manger $i Fois". PHP_EOL;
}
}
	elseif($nbr < 2){
	echo "Tu va manger seulement $nbr fois !". PHP_EOL;
}
}
echo jemange(1);
