<?php
if (!defined('sugarEntry') || !sugarEntry)
  die('Not A Valid Entry Point');
/*********************************************************************************
 * 
 * Copyright (c) 2014-2015 Hortindustrias Ltd.
 * Copyright (c) 2010-2012 Prudento (http://www.prudento.com)
 * Copyright (c) 2007-2009 Madcap BV (http://www.madcap.nl)
 * All rights reserved.
 *
 * Permission is granted for use, copying, modification, distribution,
 * and distribution of modified versions of this work as long as the
 * above copyright notice is included. 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 *
 *  
 ********************************************************************************/
 
 
 $mod_strings = array (
 
  'LBL_MODULE_NAME' => 'Agenda',
  'LBL_MODULE_TITLE' => 'Agenda',
  'LNK_NEW_CALL' => 'Nieuw telefoongesprek',
  'LNK_NEW_MEETING' => 'Nieuwe afspraak',
  'LNK_NEW_APPOINTMENT' => 'Nieuwe afspraak',
  'LNK_NEW_TASK' => 'Nieuwe taak',
  'LNK_CALL_LIST' => 'Telefoongesprekken',
  'LNK_MEETING_LIST' => 'Afspraken',
  'LNK_TASK_LIST' => 'Taken',
  'LNK_VIEW_CALENDAR' => 'Vandaag',
  'LNK_IMPORT_CALLS'=>'Importeer telefoongesprekken',
  'LNK_IMPORT_MEETINGS'=>'Importeer afspraken',
  'LNK_IMPORT_TASKS'=>'Importeer taken',
  'LBL_MONTH' => 'Maand',
  'LBL_DAY' => 'Dag',
  'LBL_YEAR' => 'Jaar',
  'LBL_WEEK' => 'Week',
  'LBL_PREVIOUS_MONTH' => 'Vorige maand',
  'LBL_PREVIOUS_DAY' => 'Vorige dag',
  'LBL_PREVIOUS_YEAR' => 'Vorig jaar',
  'LBL_PREVIOUS_WEEK' => 'Vorige week',
  'LBL_NEXT_MONTH' => 'Volgende maand',
  'LBL_NEXT_DAY' => 'Volgende dag',
  'LBL_NEXT_YEAR' => 'Volgend jaar',
  'LBL_NEXT_WEEK' => 'Volgende week',
  'LBL_AM' => 'AM',
  'LBL_PM' => 'PM',
  'LBL_SCHEDULED' => 'Gepland',
  'LBL_BUSY' => 'Bezet',
  'LBL_CONFLICT' => 'Conflict',
  'LBL_USER_CALENDARS' => 'Gebruikersagendas',
  'LBL_SHARED' => 'Gedeeld',
  'LBL_PREVIOUS_SHARED' => 'Vorige',
  'LBL_NEXT_SHARED' => 'Volgende',
  'LBL_SHARED_CAL_TITLE' => 'Gedeelde kalender',
  'LBL_USERS' => 'Gebruiker',
  'LBL_REFRESH' => 'Ververs',
  'LBL_EDIT' => 'Wijzigen',
  'LBL_SELECT_USERS' => 'Selecteer gebruikers voor kalender',
  'LBL_FILTER_BY_TEAM' => 'Filter gebruikerslijst per team:',
  'LBL_ASSIGNED_TO_NAME' => 'Toegewezen aan',
  'LBL_DATE' => 'Startdatum & tijd',
  'LBL_CREATE_MEETING' => 'Plan afsprak',
  'LBL_CREATE_CALL' => 'Log telefoongesprek',
  'LBL_HOURS_ABBREV' => 'u',
  'LBL_MINS_ABBREV' => 'm',


  'LBL_YES' => 'Ja',
  'LBL_NO' => 'Nee',
  'LBL_SETTINGS' => 'Instellingen',
  'LBL_CREATE_NEW_RECORD' => 'Creeer Activiteit',
  'LBL_LOADING' => 'Laden...',
  'LBL_SAVING' => 'Opslaan...',
  'LBL_SENDING_INVITES' => 'Opslaan & Versturen Genodigden .....',
  'LBL_CONFIRM_REMOVE' => 'Weet u zeker dat u dit record wilt verwijderen?',
  'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Weet u zker dat u al deze records wilt verwijderen?',
  'LBL_EDIT_RECORD' => 'Bewerkt activiteit',
  'LBL_ERROR_SAVING' => 'Fout bij opslaan',
  'LBL_ERROR_LOADING' => 'Fout bij laden',
  'LBL_GOTO_DATE' => 'Ga naar datum',
  'NOTICE_DURATION_TIME' => 'Tijdsduur moet groter zijn dan 0',
  'LBL_STYLE_BASIC' => 'Basis',
  'LBL_STYLE_ADVANCED' => 'Geavanceerd',
  
  'LBL_INFO_TITLE' => 'Extra details',
  'LBL_INFO_DESC' => 'Omschrijving',
  'LBL_INFO_START_DT' => 'Start datum tijd',
  'LBL_INFO_DUE_DT' => 'Vervaldag tijd',
  'LBL_INFO_DURATION' => 'Duur',
  'LBL_INFO_NAME' => 'Onderwerp',
  'LBL_INFO_RELATED_TO' => 'Gerelateerd aan',
  
  'LBL_NO_USER' => 'Geen match voor veld: Toegekend aan',
  'LBL_SUBJECT' => 'Onderwerp',
  'LBL_DURATION' => 'Duur',
  'LBL_STATUS' => 'Status',
  'LBL_DATE_TIME' => 'Datum en tijd',
  

  'LBL_SETTINGS_TITLE' => 'Instellingen',
  'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Toon tijden in Dag en Week stijl:',
  'LBL_SETTINGS_TIME_STARTS' => 'Start tijd:',
  'LBL_SETTINGS_TIME_ENDS' => 'Eind tijd:',
  'LBL_SETTINGS_CALLS_SHOW' => 'Toon taken:',
  'LBL_SETTINGS_CALLS_SHOW' => 'Toon telefoongesprekken:',
  'LBL_SETTINGS_TASKS_SHOW' => 'Toon taken:',
  
  'LBL_SAVE_BUTTON' => 'Opslaan',
  'LBL_DELETE_BUTTON' => 'Verwijderen',
  'LBL_APPLY_BUTTON' => 'Toepassen',
  'LBL_SEND_INVITES' => 'Verstuur uitnodigingen',
  'LBL_CANCEL_BUTTON' => 'Annuleer',
  'LBL_CLOSE_BUTTON' => 'Sluiten',
  
  'LBL_GENERAL_TAB' => 'Details',
  'LBL_PARTICIPANTS_TAB' => 'Uitgenodigden',
  'LBL_REPEAT_TAB' => 'Herhaling',	
	
	'LBL_REPEAT_TYPE' => 'Herhaal',
	'LBL_REPEAT_INTERVAL' => 'Allen',
	'LBL_REPEAT_END' => 'Eind',	
	'LBL_REPEAT_END_AFTER' => 'Na',
	'LBL_REPEAT_OCCURRENCES' => 'Herhalingen',
	'LBL_REPEAT_END_BY' => 'Door',	
	'LBL_REPEAT_DOW' => 'Op/Verder',	
	'LBL_REPEAT_UNTIL' => 'Herhaal tot',
	'LBL_REPEAT_COUNT' => 'Aantal Herhalingen',
	'LBL_REPEAT_LIMIT_ERROR' => 'Uw verzoek gaat meer dan de toegestane $limit van afspraken creeeren.',
	
	'LBL_EDIT_ALL_RECURRENCES' => 'Bewerk alles',
	'LBL_REMOVE_ALL_RECURRENCES' => 'Verwijder alles',

	'LBL_DATE_END_ERROR' => 'Eind datum is voor de start datum',
	'ERR_YEAR_BETWEEN' => 'Sorry, de agenda kan niet in dit jaar plannen<br>Het jaar moet tussen 1970 en 2037 zijn',
	'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: niet gedefineerd voor deze opmaak',

);

$mod_list_strings = array (
    'dom_cal_weekdays' => array (
    '0' => 'Zo',
    '1' => 'Ma',
    '2' => 'Di',
    '3' => 'Wo',
    '4' => 'Do',
    '5' => 'Vr',
    '6' => 'Za'
  ),
  'dom_cal_weekdays_long' => array (
    '0' => 'Zondag',
    '1' => 'Maandag',
    '2' => 'Dinsdag',
    '3' => 'Woensdag',
    '4' => 'Donderdag',
    '5' => 'Vrijdag',
    '6' => 'Zaterdag'
  ),
   'dom_cal_month' => array (
    '0' => '',
    '1' => 'Jan',
    '2' => 'Feb',
    '3' => 'Maa',
    '4' => 'Apr',
    '5' => 'Mei',
    '6' => 'Jun',
    '7' => 'Jul',
    '8' => 'Aug',
    '9' => 'Sep',
    '10' => 'Okt',
    '11' => 'Nov',
    '12' => 'Dec'
  ),
  'dom_cal_month_long' => array (
    '0' => '',
    '1' => 'Januari',
    '2' => 'Februari',
    '3' => 'Maart',
    '4' => 'April',
    '5' => 'Mei',
    '6' => 'Juni',
    '7' => 'Juli',
    '8' => 'Augustus',
    '9' => 'September',
    '10' => 'Oktober',
    '11' => 'November',
    '12' => 'December'
  ),
);
