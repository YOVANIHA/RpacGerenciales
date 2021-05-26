<?php
    function fechaConFormato($date){
		 $c =  substr($date, 0, 10);
		 $date = new \DateTime($c);
		 return $date->format('d/m/Y') ;
	}
    function fechaDeAhora(){
        $today = getdate();
        return $today['year'].'-'.$today['mon'].'-'.$today['mday'];
    }
?>