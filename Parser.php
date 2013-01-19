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
			'header' => 'Content-Type: text/x-gwt-rpc; charset=UTF-8',
			'X-GWT-Module-Base' => 'http://' . SERVER_IP . '/onlineinfo/onlineinfo/',
			'X-GWT-Permutation' => 'D8AB656D349DD625FC1E4BA18B0A253C',
			'content' => "5|0|6|http://" . SERVER_IP . "/onlineinfo/onlineinfo/|7E201FB9D23B0EA0BDBDC82C554E92FE|com.initka.onlineinfo.client.services.StopDataService|getDepartureInformationForStop|java.lang.String/2004016611|" . $sStreet . "|1|2|3|4|1|5|6|"
		)
	));
	
	$sResult = file_get_contents($sUrl, false, $aContext);
	
	// Es fahren zur Zeit keine Busse?
	if (strlen($sResult) < 100) {
		return;
	}
	
	// "OK//" am Anfang abschneiden.
	$sResult = substr($sResult, 4);
	// Zahlen von Info-Block trennen.
	$sResult = explode("[", $sResult);
	// Zahlen-Block zerschneiden anhand der immer gleichen ersten drei Zahlen.
	$aData = explode("0,1,1", $sResult[1]);
	// Leere Array-Elemente entfernen.
	$aData = array_diff($aData, array(''));
	
	foreach ($aData as &$sTmp) {
		$sTmp = "0,1,1" . $sTmp;
		$sTmp = substr($sTmp, 0, -1);
		$sTmp = explode(",", $sTmp);
	}
	
	$aInfo = explode('","', substr($sResult[2], 0, -6));
	
	$aResult = array();
	foreach ($aData as $mKey => $aBus) {
		$aResult[$mKey]["datePlanned"] = ($aBus[2] + $aBus[3])/1000;
		$aResult[$mKey]["dateReally"] = ($aBus[7] + $aBus[8])/1000;

		/*
		 * TODO: Vorhandene Gaensefuesschen werden hier entfernt.
		 * Das sollte schon vorher durch ordentliches Parsen verhindert werden.
		 */
		$aResult[$mKey]["target"] = str_replace('"', "", $aInfo[$aBus[6] - 1]);
		$aResult[$mKey]["line"] = str_replace('"', "", $aInfo[$aBus[5] - 1]);
	}

	// Das mehrdimensionale Array nach Datum sortieren.
	usort($aResult, "cmp");
	
	return $aResult;
}

function cmp($a, $b) {
    return strcmp($a["dateReally"], $b["dateReally"]);
}