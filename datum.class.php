<?
Class Datum{

	function den() {
	    static $nazvy = array('neděle', 'pondělí', 'úterý', 'středa', 'čtvrtek', 'pátek', 'sobota');
			$den = date("w");
	    return $nazvy[$den];
		}

	function mesic() {
		$mesic = date("n");
    static $nazvy = array(1 => 'ledna', 'února', 'března', 'dubna', 'května', 'června', 'červenece', 'srpna', 'září', 'října', 'listopadu', 'prosince');
    return $nazvy[$mesic];
	}

  function rok() {
    return date('Y');
  }

	function celeDatum() {
		return Datum::den() . ", ". date('d') . ". " . Datum::mesic() . " " . date('Y');
	}

	function cas() {
		return date("H:i:s");
	}

	function castDne() {
		// $hodina = date("H");
		$hodina = 17;   //testování
		if($hodina >= "3" AND $hodina <= "7"):
		$pozdrav="Dobré ráno";
		elseif($hodina >= "7" AND $hodina < "12"):
		$pozdrav="Dobré dopoledne";
		elseif($hodina=="12"):
		$pozdrav="Dobré poledne";
		elseif($hodina > "12" AND $hodina <= "16"):
		$pozdrav="Dobré odpoledne";
		elseif($hodina >= "17" AND $hodina <= "19"):
		$pozdrav="Dobrý podvečer";
		elseif($hodina >= "20" AND $hodina <="23"):
		$pozdrav="Dobrý večer";
		endif;
		return $pozdrav;
	}
}
?>
