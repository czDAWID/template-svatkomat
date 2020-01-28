<?php
// Logika: Kddyž url "/hledat.php" tak ukaž hledat.php


 ?>












<h1><? echo (new Datum)->castDne().","; ?></h1>
			<table>
	  <tr>
	    <th><h1>Dnes je:</h1></th>
	    <th><h1><span><? echo (new Datum)->celeDatum(); ?></span></h1> </th>
	  </tr>
	  <tr>
	    <td><h1>Svátek má:<h1></td>
	    <td><h1><span><? echo (new Svatek)->svatekMa(date("d"),date("n")); ?></span></h1></td>
	  </tr>
	  <tr>
	    <td><h1>Čas:</h1></td>
	    <td><h1><span><? echo (new Datum)->cas(); ?></span></h1></td>
	  </tr>
	</table>
