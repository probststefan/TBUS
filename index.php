<!DOCTYPE html>
<html lang="de">
	<head>
    	<meta charset="utf-8" />
    	<title>BUS Trier</title>
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css" type="text/css" />
		<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
		<link rel="stylesheet" href="css/style.css" type="text/css" />
	</head>
	<body>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<div class="page-header">
  						<h1>Trier Bus <small>Wann kommt mein Bus?</small></h1>
					</div>
					<select tabindex="0" class="station"><option value="aache">Aachener Str.</option><option value="adast">Adastr.</option><option value="kolpi">Adolph-Kolping-Str.</option><option value="agrob">Agrobstr.</option><option value="alber">Alberoweg</option><option value="rollb">Alte Rollbahn</option><option value="ALH">Altenheim Haerenwies</option><option value="ortsk">Alter Ortskern</option><option value="beute">Am Beutelweg</option><option value="bilds">Am Bildstock</option><option value="hbrue">Am Herrenbruennchen</option><option value="kiewe">Am Kiewelsberg</option><option value="MAH">Am Mariahof</option><option value="mosel">Am Moselkai</option><option value="teich">Am Muehlenteich</option><option value="sandb">Am Sandbach</option><option value="wturm">Am Wasserturm</option><option value="wgran">Am Weidengraben Anf.</option><option value="WGR">Am Weidengraben Ende</option><option value="wgrmi">Am Weidengraben Mit.</option><option value="wpark">Am Wissenschaftspark</option><option value="flugp">Am alten Flugplatz</option><option value="amphi">Amphitheater</option><option value="feldp">An der Feldport</option><option value="maesw">An der Maeswiese</option><option value="weide">An der Pferdsweide</option><option value="TRS">An der Schule</option><option value="ziege">An der Ziegelei</option><option value="taran">Andreasstr.</option><option value="anhei">Anheierstr.</option><option value="arena">Arena Trier</option><option value="arnol">Arnoldistr.</option><option value="mohrb">Auf Mohrbuesch</option><option value="kirch">Auf dem Kirchspiel</option><option value="BAU">Auf der Bausch</option><option value="HIL">Auf der Hill</option><option value="jueng">Auf der Juengt</option><option value="augus">Augustastr.</option><option value="avhof">Avelerhof</option><option value="baldu">Balduinsbrunnen/HBF</option><option value="barth">Barbarathermen</option><option value="baruf">Barbaraufer/Roemerbr</option><option value="behri">Behringstr.</option><option value="bened">Benediktinerstr.</option><option value="bergs">Bergstr.</option><option value="bernh">Bernhardstr.</option><option value="berta">Bertard</option><option value="bette">Bettemburgstr.</option><option value="bnord">Biewer-Nord</option><option value="bsued">Biewer-Sued</option><option value="bitbu">Bitburger Str.</option><option value="bluec">Bluecherstr.</option><option value="bluet">Bluetenweg</option><option value="bohoc">Bon-Hochwaldstr</option><option value="boneu">Bon-Neustr.</option><option value="BON">Bon-Talsperrenblick</option><option value="bonif">Bonifatiusstr.</option><option value="bst">Bonner Str.</option><option value="brett">Brettenbach</option><option value="bhaus">Bruchhausenstr.</option><option value="buche">Buchenweg</option><option value="burgm">Burgmuehlenstr.</option><option value="caspa">Caspar-Olevian-Str.</option><option value="CAS">Castelforte</option><option value="charl">Charlottenstr.</option><option value="viebi">Clara-Viebig-Str.</option><option value="cusan">Cusanusstr.</option><option value="deuts">Deutschherrenstr.</option><option value="diede">Diedenhofener Str.</option><option value="domae">Domaenenstr.</option><option value="donau">Donaustr.</option><option value="egbhf">Ehrang-Bahnhof</option><option value="EGH">Ehrang-Hintere Heide</option><option value="egsch">Ehrang-Schule</option><option value="sport">Ehrang-Sportplatz</option><option value="EGU">Ehrang-Unterfuehrung</option><option value="egstr">Ehranger Str.</option><option value="eisen">Eisenbahnstr.</option><option value="eitel">Eitelsbach Mitte</option><option value="EUF">Euren-Friedhof</option><option value="EUH">Euren-Helenenbrunnen</option><option value="EUL">Euren-Lu.Steinb.Str.</option><option value="FHS">Fachhochschule</option><option value="fande">Fandelborn</option><option value="felds">Feldstr./Mutterhaus</option><option value="FEY">Feyen-Grafschaft</option><option value="fimit">Filsch Mitte</option><option value="FIL">Filscher Haeuschen</option><option value="fiweg">Fischweg</option><option value="fbuss">Franz-Buss-Str.</option><option value="fgeor">Franz-Georg-Str.</option><option value="freih">Freiherr-v.Stein-Str</option><option value="fried">Friedhofstr.</option><option value="quant">Fritz-Quant-Str.</option><option value="wille">Fritz-von-Wille-Str.</option><option value="froeb">Froebelstr.</option><option value="froeh">Froehlicherstr.</option><option value="gambr">Gambrinusstr.</option><option value="gfeld">Gartenfeldstr.</option><option value="georg">Georgstr.</option><option value="GIL">Gilbertstr.</option><option value="VB">Gottbillstr.</option><option value="grafr">Graf-Reginar-Str.</option><option value="gubil">Gus-Im Bilser</option><option value="guflu">Gus-Im Fluerchen</option><option value="gulae">Gus-Laerchenweg</option><option value="gulin">Gus-Lindenstr.</option><option value="gurom">Gus-Romika</option><option value="guruw">Gus-Ruwerstr.</option><option value="gusch">Gus-Schule</option><option value="gusom">Gus-Sommerauer Str.</option><option value="GUS">Gus-Trierer Str.</option><option value="ZEG">Gutenbergstr.</option><option value="GUT">Gutweiler-Im Boorfeld</option><option value="gtkir">Gutweiler-Kirche</option><option value="haend">Haendelstr.</option><option value="hafst">Hafenstr.</option><option value="HWK">Handwerkskammer</option><option value="hansb">Hans-Boeckler-Allee</option><option value="hansm">Hans-M.Schleyer-Str.</option><option value="HBF">Hauptbahnhof</option><option value="haupt">Hauptfriedhof</option><option value="heist">Heidestufe</option><option value="HKT">Heiligk.-Trevererstr</option><option value="helen">Helenenstr.</option><option value="HIN">Hinzenburg Mitte</option><option value="hochw">Hochwaldstr.</option><option value="HOK">Hockweiler Mitte</option><option value="hofri">Hoehenfriedhof</option><option value="hofbe">Hofberg</option><option value="holze">Holzerath Mitte</option><option value="honth">Hontheimstr.</option><option value="hospi">Hospitalsmuehle</option><option value="hunsr">Hunsrueckstr.</option><option value="igfei">Igel-Am Feilenkreuz</option><option value="igrod">Igel-Am Roderkamp</option><option value="igsbe">Igel-Am Schleidberg</option><option value="igsae">Igel-Igeler Saeule</option><option value="igkir">Igel-Kirche</option><option value="iglau">Igel-Laubenstr.</option><option value="IGL">Igel-Moselstr.</option><option value="igroe">Igel-Roemerstr.</option><option value="igsch">Igel-Schauinsland</option><option value="igwa">Igel-Waldstr.</option><option value="avtal">Im Avelertal</option><option value="HOP">Im Hopfengarten</option><option value="RUP">Im Paulinsgarten</option><option value="pflan">Im Pflanzgarten</option><option value="scham">Im Schammat</option><option value="siebe">Im Siebenborn</option><option value="IZE">Industriegeb.Zewen</option><option value="irabz">Irsch Abzweig</option><option value="IRH">Irsch-Hockweilerstr.</option><option value="IRP">Irsch-Propstei</option><option value="iberg">Irscher Berg</option><option value="irhof">Irscher Hof</option><option value="irmue">Irscher Muehle</option><option value="irstr">Irscher Str.</option><option value="isbru">Is-Brunnen</option><option value="isbst">Is-Brunnenstr.</option><option value="iskie">Is-Zur Kiesgrube</option><option value="KEJ">Jakob-Kneip-Str.</option><option value="jzick">Januarius-Zick-Str.</option><option value="haydn">Joseph-Haydn-Str.</option><option value="jwald">Jungenwald</option><option value="KTH">Kaiserthermen</option><option value="kants">Kantstr.</option><option value="ZEK">Kanzelstr.</option><option value="KMH">Karl-Marx-Haus</option><option value="karls">Karlsweg</option><option value="karre">Karrenbach</option><option value="kabhf">Kas-Bahnhof</option><option value="kabst">Kas-Bahnhofstr.</option><option value="KAG">Kas-Gemeindeplatz</option><option value="katim">Kas-Haus Timpert</option><option value="kasch">Kas-Schule</option><option value="kaspo">Kas-Sportplatz</option><option value="kawas">Kas-Wasserhaeuschen</option><option value="kenne">Kenner Weg</option><option value="hoeh1">Kernsch.Hoehenweg 1</option><option value="hoeh2">Kernsch.Hoehenweg 2</option><option value="KER">Kernscheid-Kirche</option><option value="KEU">Keune Grundschule</option><option value="OLK">Kleeburger Weg</option><option value="kohle">Kohlenstr.</option><option value="KOL">Kolonnenweg</option><option value="adebr">Konrad-Adenauer-Br.</option><option value="KON">Konstantin Basilika</option><option value="konze">Konzer Str.</option><option value="koneu">Korl-Neustr.</option><option value="koste">Korl-Zum Steinbruch</option><option value="kreuz">Kreuzflur</option><option value="KUE">Kuerenzer Str.</option><option value="kunos">Kuno-Stapel-Str.</option><option value="kurfu">Kurfuerstenstr.</option><option value="kyria">Kyrianderstr.</option><option value="ludwi">L.Erhard-Ring,Ausst.</option><option value="lambe">Lambertistr.</option><option value="lgbun">Lan-Im Bungert</option><option value="lgkir">Lan-Kirche</option><option value="lgloe">Lan-Loewener Muehle</option><option value="lgmes">Lan-Mesenicher Str.</option><option value="lgneu">Lan-Neustr.</option><option value="lgwas">Lan-Wasserbilligerbr</option><option value="langf">Langflur</option><option value="EGL">Layweg</option><option value="LWT">Lebenshilfe</option><option value="lenus">Lenus-Mars-Str.</option><option value="level">Levelingstr.</option><option value="lihei">Liersberg-Heintzhof</option><option value="LIE">Liersberg-Kirche</option><option value="loebs">Loebstr.</option><option value="simon">Ludwig-Simon-Str.</option><option value="luxem">Luxemburger Str.</option><option value="maars">Maarstr.</option><option value="MHS">Maeusheckerschule</option><option value="MHW">Maeusheckerweg</option><option value="magne">Magnerichstr.</option><option value="mholz">Marienholzstr.</option><option value="mkrhs">Marienkrankenhaus</option><option value="saeul">Mariensaeule</option><option value="mberg">Markusberg</option><option value="marku">Markusstr.</option><option value="schun">Martin-Schunck-Str.</option><option value="marti">Martinstr.</option><option value="maxim">Maximineracht</option><option value="meile">Meilenstr.</option><option value="OVB">Mert-Abzw.Eitelsbach</option><option value="meber">Mert-Bergstr.</option><option value="medor">Mert-Dorfbrunnen</option><option value="MEE">Mert-Eichgraben</option><option value="megru">Mert-Gruenhaus</option><option value="mesta">Mert-Stadionstr.</option><option value="mefes">Mert-Zur Festung</option><option value="mskir">Mesenich-Kirche</option><option value="mstri">Mesenich-Trierer Str</option><option value="MES">Messepark P+R</option><option value="MEZ">Metzer Allee</option><option value="MOR">Mohrenkopf</option><option value="monai">Monaiser Str.</option><option value="MOS">Morscheid Mitte</option><option value="stadio">Moselstadion</option><option value="muehl">Muehlenstr.</option><option value="musto">Mustorstr.</option><option value="MZK">Mz-Kirche</option><option value="mzwin">Mz-Wintersdorfer Str</option><option value="NPA">Nells Park</option><option value="npapa">Nells Park/Parkstr.</option><option value="nells">Nellstr.</option><option value="nieder">Niederkircher Str.</option><option value="niest">Niederstr.</option><option value="NIK">Nikolaus-Koch-Platz</option><option value="norda">Nordallee/Krankenhs.</option><option value="nordb">Nordbad</option><option value="prnor">P+R Trier Nord</option><option value="palli">Palliener Str.</option><option value="pelli">Pellinger Str.</option><option value="PRP">Peter-Roth-Platz</option><option value="pwust">Peter-Wust-Str.</option><option value="PET">Petrisberg</option><option value="aussi">Petrisberg-Aussicht</option><option value="pfbhf">Pfalzel-Bahnhof</option><option value="PFA">Pfalzel-Eltzstr.</option><option value="markt">Pferdemarkt</option><option value="philo">Philosophenweg</option><option value="plbhf">Plu-Bahnhof</option><option value="plbst">Plu-Bahnhofstr.</option><option value="plgus">Plu-Gusterather Str.</option><option value="plwei">Plu-In d. Weidenwies</option><option value="PLU">Plu-Ruwerstr.</option><option value="PN">Porta Nigra</option><option value="QUI">Quint-Schloss</option><option value="quist">Quinter Str.</option><option value="ratha">Rathaus/Stadttheater</option><option value="remig">Remigiusstr.</option><option value="retzg">Retzgrubenweg</option><option value="rings">Ringstr.</option><option value="ribau">Riv-Bausbach</option><option value="rimor">Riv-Morscheider Str</option><option value="rimit">Riveris Mitte</option><option value="roest">Roemerstr.</option><option value="ROT">Rotbachstr.</option><option value="rothi">Rothildisstr.</option><option value="ruben">Rubenstr.</option><option value="diese">Rudolf-Diesel-Str.</option><option value="rubhf">Ruwer-Bahnhof</option><option value="RUS">Ruwer-Sportplatz</option><option value="rustr">Ruwererstr.</option><option value="swtri">SWT Stadtwerke Trier</option><option value="schef">Scheffelstr.</option><option value="schif">Schiffstr.</option><option value="schlo">Schlossstr.</option><option value="schoe">Schoenbornstr.</option><option value="schue">Schuetzenstr.</option><option value="schwa">Schwarzer Weg</option><option value="sdalt">Sd-Altenweg</option><option value="sdhau">Sd-Hauptstr.</option><option value="sdkir">Sd-Kirche</option><option value="plham">Sd-Pluwigerhammer</option><option value="seife">Seiferstr.</option><option value="spiro">Spirostr.</option><option value="MAT">St. Matthias</option><option value="MED">St. Medard</option><option value="pauli">St. Paulin</option><option value="urban">St. Urban</option><option value="annas">St.-Anna-Str.</option><option value="matau">St.-Matthias-Aulstr.</option><option value="matki">St.-Matthias-Kirche</option><option value="merge">St.-Mergener-Str.</option><option value="bibli">Stadtbibliothek</option><option value="andre">Stefan-Andres-Str.</option><option value="stein">Steinbrueckstr.</option><option value="stweg">Steinsweg</option><option value="strass">Strassburger Allee</option><option value="SUE">Suedallee/Kaiserstr.</option><option value="SBF">Suedbahnhof</option><option value="suedf">Suedfriedhof</option><option value="swwei">Sw-Altes Weinhaus</option><option value="swbah">Sw-Bahnhofstr.</option><option value="swber">Sw-Bertradastr.</option><option value="swbru">Sw-Brunnen</option><option value="swerm">Sw-Ermesgraben</option><option value="SWE">Sw-Langfuhrstr.</option><option value="TAK">Tarf.-K.Carstens-Str</option><option value="TAL">Tarf.-L.Erhard-Ring</option><option value="tarst">Tarforster Str.</option><option value="taube">Taubenberg</option><option value="teher">Tempelherrenstr.</option><option value="teweg">Tempelweg</option><option value="THA">Theodor-Heuss-Allee</option><option value="thyrs">Thyrsusstr.</option><option value="OLT">Tiergarten</option><option value="toepf">Toepferstr.</option><option value="trebe">Trebetastr.</option><option value="TRV">Treviris</option><option value="galer">Trier Galerie</option><option value="hafen">Trierer Hafen</option><option value="TWW">Trierweilerweg</option><option value="TRH">Trim.Hof-August.str.</option><option value="UNI">Universitaet</option><option value="UC2">Universitaet Campus2</option><option value="UNH">Universitaet Hauptg.</option><option value="UNM">Universitaet Mensa</option><option value="unipa">Universitaet Parkpl.</option><option value="UNS">Universitaet Sued</option><option value="vbrea">VB-Real-Markt</option><option value="vbtes">VB-Testplatz</option><option value="vbto3">VB-Tor 3</option><option value="vbzen">VB-Zentrale</option><option value="villa">Villa Reverchon</option><option value="vheid">Vordere Heide</option><option value="WAL">Wald-Am Sportplatz</option><option value="waflu">Wald-Auf dem Fluerchen</option><option value="wabhf">Wald-Bahnhof</option><option value="wagem">Wald-Gemeindeplatz</option><option value="wagew">Wald-Gewerbegebiet</option><option value="waach">Wald-In der Acht</option><option value="walay">Wald-In der Lay</option><option value="wakir">Wald-Obere Kirchstr</option><option value="wapae">Wald-Paetscher Weg</option><option value="waros">Wald-Rosenbungert</option><option value="wasch">Wald-Schule</option><option value="wawei">Wald-Weinbergsweg</option><option value="wazol">Wald-Zollweg</option><option value="walds">Waldstr.</option><option value="walle">Wallenbachstr.</option><option value="wbill">Wasserbilliger Str.</option><option value="waweg">Wasserweg</option><option value="WEI">Weismark-Pfahlweiher</option><option value="wenze">Wenzelbachstr.</option><option value="werdi">Werdingstr.</option><option value="WBF">Westbahnhof</option><option value="WLE">Wilh.-Leuschner-Str.</option><option value="WDK">Win-Kirche</option><option value="wdlin">Win-Lindenstr.</option><option value="wdwei">Win-Weinbergsweg</option><option value="wispo">Wisportstr.</option><option value="WOB">Wolfsberg</option><option value="wolke">Wolkerstr.</option><option value="ZEF">Zewen-Friedhof</option><option value="hellb">Zum Hellberg</option><option value="sprud">Zum Roemersprudel</option><option value="ZUR">Zurlaubener Ufer</option><option value="zurma">Zurmaiener Str.Nord</option></select>
					
					<?php $aData = getData(); ?>
					<?php foreach ($aData as $aBus) : ?>
						<div class="bus well">
							<span class="line">
								<?= $aBus["line"] ?>
							</span>
							
							<span class="goal">
								<?= $aBus["target"] ?>
							</span>
							
							<span class="time">
								<b>in <?= round(($aBus["dateReally"] - time())/60) ?> Minute(n)</b>
							</span>
						</div>
					<?php endforeach; ?>
				</div>
				
				<i class="icon-info-sign"></i> 2013 Stefan Probst
			</div>
		</div>
	</body>
</html>

<?php

function cmp($a, $b)
{
    return strcmp($a["dateReally"], $b["dateReally"]);
}

function getData() {
	$iIp = '212.18.193.124';
	$url = 'http://' . $iIp . '/onlineinfo/onlineinfo/stopData';
	
	$context = stream_context_create(
		array(
			'http' => array(
			'method' => 'POST',
			'header' => 'Content-Type: text/x-gwt-rpc; charset=UTF-8',
			'X-GWT-Module-Base' => 'http://212.18.193.124/onlineinfo/onlineinfo/',
			'X-GWT-Permutation' => 'D8AB656D349DD625FC1E4BA18B0A253C',
			'content' => "5|0|6|http://212.18.193.124/onlineinfo/onlineinfo/|7E201FB9D23B0EA0BDBDC82C554E92FE|com.initka.onlineinfo.client.services.StopDataService|getDepartureInformationForStop|java.lang.String/2004016611|domae|1|2|3|4|1|5|6|"
		)
	));
	
	$result = file_get_contents($url, false, $context);
	$result = substr($result, 4);
	
	// Zahlen von Info-Block trennen.
	$result = explode("[", $result);
	// Zahlen-Block zerschneiden anhand der immer gleichen ersten drei Zahlen.
	$aData = explode("0,1,1", $result[1]);
	// Leere Array-Elemente entfernen.
	$aData = array_diff($aData, array(''));
	
	foreach ($aData as &$sTmp) {
		$sTmp = "0,1,1" . $sTmp;
		$sTmp = substr($sTmp, 0, -1);
		$sTmp = explode(",", $sTmp);
	}
	
	$aInfo = explode('","', substr($result[2], 0, -6));
	
	$aResult = array();
	
	foreach ($aData as $mKey => $aBus) {
		$aResult[$mKey]["datePlanned"] = ($aBus[2] + $aBus[3])/1000;
		$aResult[$mKey]["dateReally"] = ($aBus[7] + $aBus[8])/1000;
		$aResult[$mKey]["line"] = $aInfo[$aBus[5] - 1];
		$aResult[$mKey]["target"] = $aInfo[$aBus[6] - 1];
	}
	
	unset($aData);
	unset($aInfo);
	unset($result);
	
	usort($aResult, "cmp");
	
	return $aResult;
}

