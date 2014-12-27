<?php

const SERVER_IP = '212.18.193.124';

/**
 * Liefert ein Array mit den nächsten Bussen.
 * 
 * @param String $sStreet
 * @return Array
 */
function getData($sStreet) {
	$sUrl = 'http://' . SERVER_IP . '/onlineinfo/onlineinfo/stopData';
		
	$aContext = stream_context_create(
		array(
			'http' => array(
			'method' => 'POST',
			'header' => "Content-Type: text/x-gwt-rpc; charset=UTF-8\r\nX-GWT-Permutation: 45BD068FAC09AE03D1AD107BB98F4B13",
			'content' => "7|0|6|http://" . SERVER_IP . "/onlineinfo/onlineinfo/|887B910CE21D9A30864A7AC4A6DF1AF7|com.initka.onlineinfo.client.services.StopDataService|getDepartureInformationForStop|java.lang.String/2004016611|" . $sStreet . "|1|2|3|4|1|5|6|"
		)
	));
	
	$sResult = file_get_contents($sUrl, false, $aContext);
	
	// Es fahren zur Zeit keine Busse?
	if (strlen($sResult) < 100) {
		return;
	}
	
	// "OK//" am Anfang abschneiden.
	$sResult = substr($sResult, 4);
	
	// [0,1, vorne abschneiden
	$sResult = substr($sResult, 5);
	
	// ,0,7] hinten abschneiden
	$sResult = substr($sResult, 0, -5);
	
	// Zahlen von Info-Block trennen.
	$sResult = explode("[", $sResult);
	
	// Zahlen-Block zerschneiden anhand der immer gleichen ersten drei Zahlen.
	$aData = explode("3,2,0,1", $sResult[0]);
	
	// Leere Array-Elemente entfernen.
	$aData = array_diff($aData, array(''));
	
	foreach ($aData as &$sTmp) {
		$sTmp = array_values(array_diff(explode(",", $sTmp), array('')));
	}
	
	$aInfo = explode('","', substr($sResult[1], 0, -1));
	
	$aResult = array();
	foreach ($aData as $mKey => $aBus) {			
		$aResult[$mKey]["dateReally"] = decodeTime(str_replace("'", "", $aBus[4]));
		$aResult[$mKey]["datePlanned"] = decodeTime(str_replace("'", "", $aBus[0]));

		/*
		 * TODO: Vorhandene Gaensefuesschen werden hier entfernt.
		 * Das sollte schon vorher durch ordentliches Parsen verhindert werden.
		 */
		$aResult[$mKey]["target"] = str_replace('"', "", $aInfo[$aBus[3] - 1]);
		$aResult[$mKey]["line"] = str_replace('"', "", $aInfo[$aBus[2] - 1]);
	}
	
	// Das mehrdimensionale Array nach Datum sortieren.
	usort($aResult, "cmp");
	
	return $aResult;
}

// https://bitbucket.org/webhamster/swt-trier-echtzeitauskunft/src/4cb1115a519158561613f81c151dbc9a04d7d24e/swtdecode.py?at=master
function decodeTime($sTime) {
	$sBase = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789_$";
	$iSum = 0;
	
	for ($i = 0; $i < strlen($sTime); $i++) {
		$iSum += strpos($sBase, $sTime{$i}) * pow(strlen($sBase), strlen($sTime) - $i - 1);
	}

	return $iSum / 1000;
}

function cmp($a, $b) {
    return strcmp($a["dateReally"], $b["dateReally"]);
}
