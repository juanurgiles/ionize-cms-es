<?php

/*
 * Date format, translated
 * To use with the a date field through tags
 * This format uses days and months translation like defined in this file, if the PHP date format code is used.
 *
 *
 * Example of usage : 
 * 		$lang['dateformat_short'] = 'd m Y';	View call : <ion:date format="short" />		Output : 15 01 2011
 * 		$lang['dateformat_medium'] = 'd M Y'; 	View call : <ion:date format="medium" />	Output : 15 jan 2011
 * 		$lang['dateformat_long'] = 'l F d Y';	View call : <ion:date format="long" />		Output : saturday january 15 2011
 *
 * You can create your own format and call it in views :
 *		$lang['dateformat_complete'] = 'l F d Y H:i:s';		View call : <ion:date format="complete" />		Output : saturday january 15 2011 20:54:21

 *
 */
$lang['dateformat_short'] = 'm d Y';
$lang['dateformat_medium'] = 'M d Y';
$lang['dateformat_long'] = 'F d Y';

$lang['dateformat_complete'] = 'l d F Y \a\t H\hi';

/* 
 * PHP day date format 'D' translations
 * Lowercase. For other day date format (Ucase, etc.) use the "manip" tag attribute
 * Ex : <articles:date format="D" manip="ucase" />
 */
$lang['mon'] = 'lun';
$lang['tue'] = 'mar';
$lang['wed'] = 'mie';
$lang['thu'] = 'jue';
$lang['fri'] = 'vie';
$lang['sat'] = 'sab';
$lang['sun'] = 'dom';

/* 
 * PHP day date format 'l' translations
 */
$lang['monday'] = 'lunes';
$lang['tuesday'] = 'martes';
$lang['wednesday'] = 'miércoles';
$lang['thursday'] = 'jueves';
$lang['friday'] = 'viernes';
$lang['saturday'] = 'sabado';
$lang['sunday'] = 'domingo';

/* 
 * PHP month date format 'M' translations
 */
$lang['jan'] = 'ene';
$lang['feb'] = 'feb';
$lang['mar'] = 'mar';
$lang['apr'] = 'abr';
$lang['may'] = 'may';
$lang['jun'] = 'jun';
$lang['jul'] = 'jul';
$lang['aug'] = 'ago';
$lang['sep'] = 'sep';
$lang['oct'] = 'oct';
$lang['nov'] = 'nov';
$lang['dec'] = 'dic';

/* 
 * PHP month date format 'F' translations
 */
$lang['january'] = 'enero';
$lang['february'] = 'febrero';
$lang['march'] = 'marzo';
$lang['april'] = 'abril';
$lang['may'] = 'mayo';
$lang['june'] = 'junio';
$lang['july'] = 'julio';
$lang['august'] = 'augosto';
$lang['september'] = 'septiembre';
$lang['october'] = 'octubre';
$lang['november'] = 'noviembre';
$lang['december'] = 'diciembre';


?>