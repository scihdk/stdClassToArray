<?PHP

function toArray($c = array()){
    if($c instanceof stdClass){
	$c = (array)$c;
	foreach($c AS $key => $value){
	    $c[$key] = toArray($value);
	}
    }else if(is_array($c)){
	foreach($c AS $key => $value){
	    $c[$key] = toArray($value);
	}
    }else if(is_string($c)){
	return $c;
    }
    return $c;
}

?>
