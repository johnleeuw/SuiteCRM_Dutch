<?php
if (!defined('sugarEntry') || !sugarEntry)
  die('Not A Valid Entry Point');

/**
 * Dutch Language file SuiteCRM version 7 
 * CCopyright (c) 2014-2015 Hortindustrias Ltd. 
 * Copyright (c) 2010-2012 Prudento (http://www.prudento.com)
 * Copyright (c) 2007-2009 Madcap BV (http://www.madcap.nl)
 * All rights reserved.
 *
 * Permission is granted for use, copying, modification, distribution,
 * and distribution of modified versions of this work as long as the
 * above copyright notice is included.
 */

$mod_strings = array (
  'LBL_FW' => 'FW:',
  'LBL_RE' => 'RE:',
  
  'LBL_BUTTON_CREATE' => 'Nieuw',
  'LBL_BUTTON_EDIT' => 'Wijzigen',
  'LBL_QS_DISABLED' => '(QuickSearch is niet beschikbaar voor deze module. Gebruik de SELECT-knop.)',
  'LBL_SIGNATURE_PREPEND' => 'Handtekening bovenaan antwoord',
  'LBL_EMAIL_DEFAULT_DESCRIPTION' => 'Hier is de offerte die u aanvroeg (u kunt deze tekst wijzigen)',
  'LBL_EMAIL_QUOTE_FOR' => 'Offerte voor: ',
  'LBL_QUOTE_LAYOUT_DOES_NOT_EXIST_ERROR' => 'offerte lay-out bestand bestaat niet: $layout',
  'LBL_QUOTE_LAYOUT_REGISTERED_ERROR' => 'offerte lay-out is niet geregistreerd modules/Quotes/Layouts.php',
  
  
  'LBL_CONFIRM_DELETE' => 'Weet je zeker dat je deze map wilt verwijderen?',
  'LBL_ENTER_FOLDER_NAME' => 'Voer een mapnaam in',
  
  'LBL_ERROR_SELECT_MODULE' => 'Selecteer een module voor het gerelateerde veld',
  
  'ERR_ARCHIVE_EMAIL' => 'Fout, selecteer E-mail voor archiveren',
  'ERR_DATE_START' => 'Startdatum',
  'ERR_DELETE_RECORD' => 'Er moet een record nummer zijn gespecificeerd om deze email te verwijderen.',
  'ERR_NOT_ADDRESSED' => 'Fout: E-mail moet tenminste een ontvanger hebben',
  'ERR_TIME_START' => 'Starttijd',
  'ERR_TIME_SENT' => 'Tijd verstuurd',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Relaties',
  'LBL_ADD_ANOTHER_FILE' => 'Nog een bestand toevoegen',
  'LBL_ADD_DASHLETS' => 'Sugar dashlets toevoegen',
  'LBL_ADD_DOCUMENT' => 'Document invoegen',
  'LBL_ADD_ENTRIES' => 'Toevoegen',
  'LBL_ADD_FILE' => 'Bestanden invoegen',
  'LBL_ARCHIVED_EMAIL' => 'Gearchiveerde e-mail',
  'LBL_ARCHIVED_MODULE_NAME' => 'Gearchiveerde e-mails',
  'LBL_ARCHIVED_EMAILS_CREATE'  => 'Maak',
  'LBL_ATTACHMENTS' => 'Bijlagen:',
  'LBL_HAS_ATTACHMENT' => 'Heeft Attachment?:',
  'LBL_BCC' => 'Bcc:',
  'LBL_BODY' => 'Inhoud:',
  'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',
  'LBL_CC' => 'Cc:',
  'LBL_COLON' => ':',
  'LBL_COMPOSE_MODULE_NAME' => 'E-mail opstellen',
  'LBL_CONTACT_FIRST_NAME' => 'Voornaam contactpersoon',
  'LBL_CONTACT_LAST_NAME' => 'Achternaam contactpersoon',
  'LBL_CONTACT_NAME' => 'Naam contactpersoon:',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactpersonen',
  'LBL_CREATED_BY' => 'Gemaakt door',
  'LBL_DATE_AND_TIME' => 'Datum en tijd verzending:',
  'LBL_DATE_SENT' => 'Datum verzending:',
  'LBL_DATE' => 'Datum verzending:',
  'LBL_DELETE_FROM_SERVER' => 'Verwijder bericht van server',
  'LBL_DESCRIPTION' => 'Beschrijving',
  'LBL_EDIT_ALT_TEXT' => 'Bewerk tekst',
  'LBL_SEND_IN_PLAIN_TEXT' => 'Stuur in platte tekst',
  'LBL_EDIT_MY_SETTINGS' => 'Mijn instellingen bewerken',
  'LBL_EMAIL_ATTACHMENT' => 'E-mail bijlage',
  'LBL_EMAIL_EDITOR_OPTION' => 'Verzend HTML e-mail',
  'LBL_EMAIL_SELECTOR_SELECT' => 'Selecteer',
  'LBL_EMAIL_SELECTOR_CLEAR'  => 'Maak leeg',
  'LBL_EMAIL' => 'E-mail:',
  'LBL_EMAILS_ACCOUNTS_REL' => 'E-mail: Relaties',
  'LBL_EMAILS_BUGS_REL' => 'E-mail: Bugs',
  'LBL_EMAILS_CASES_REL' => 'E-mail: Verzoeken',
  'LBL_EMAILS_CONTACTS_REL' => 'E-mail: Contacten',
  'LBL_EMAILS_LEADS_REL' => 'E-mail: Leads',
  'LBL_EMAILS_OPPORTUNITIES_REL' => 'E-mail: Kansen',
  'LBL_EMAILS_NOTES_REL' => 'E-mails: Notities',
  'LBL_EMAILS_PROJECT_REL' => 'E-mail: Projecten',
  'LBL_EMAILS_PROJECT_TASK_REL' => 'E-mails: Projecttaak',
  'LBL_EMAILS_PROSPECT_REL' => 'E-mail: Prospectus',
  'LBL_EMAILS_TASKS_REL' => 'E-mails: Taken',
  'LBL_EMAILS_USERS_REL' => 'E-mails: Gebruikers',
  'LBL_EMPTY_FOLDER' => 'Geen e-mails om te laten zien',
  'LBL_ERROR_SENDING_EMAIL' => 'Fout bij verzenden e-mail',
  'LBL_ERROR_SAVING_DRAFT' => 'Fout bij het opslaan Ontwerp',
  'LBL_FORWARD_HEADER' => 'Begin doorgestuurd bericht:',
  'LBL_FROM_NAME' => 'Van naam',
  'LBL_FROM' => 'Van:',
  'LBL_REPLY_TO'				=> 'Beantwoorden aan:',
  'LBL_HTML_BODY' => 'HTML Body',
  'LBL_INVITEE' => 'Ontvanger(s)',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
  'LBL_MESSAGE_SENT' => 'Bericht verstuurd',
  'LBL_MODIFIED_BY' => 'Gewijzigd door',
  'LBL_MODULE_NAME_NEW' => 'E-mail archiveren',
  'LBL_MODULE_NAME' => 'Alle E-mails',
  'LBL_MODULE_TITLE' => 'E-mails: Start ',
  'LBL_MY_EMAILS' => 'Mijn e-mails',
  'LBL_NEW_FORM_TITLE' => 'E-mail archiveren',
  'LBL_NONE' => 'geen',
  'LBL_NOT_SENT' => 'Verzendfout',
  'LBL_NOTE_SEMICOLON' => 'Opmerking: Gebruik komma\'s als scheiding voor meerdere e-mail adressen.',
  'LBL_NOTES_SUBPANEL_TITLE' => 'Bijlagen',
  'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Kansen',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Projecten',
  'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Project taak',
  'LBL_RAW' => 'Ruwe E-mail Data',
  'LBL_SAVE_AS_DRAFT_BUTTON_KEY' => 'Concept opslaan [Alt+R]',
  'LBL_SAVE_AS_DRAFT_BUTTON_LABEL' => 'Concept opslaan',
  'LBL_SAVE_AS_DRAFT_BUTTON_TITLE' => 'Concept opslaan',
  'LBL_SEARCH_FORM_DRAFTS_TITLE' => 'Zoek concepten',
  'LBL_SEARCH_FORM_SENT_TITLE' => 'Doorzoek verzonden e-mails',
  'LBL_SEARCH_FORM_TITLE' => 'E-mail zoeken',
  'LBL_SEND_ANYWAYS' => 'Deze E-mail heeft geen Onderwerp. Toch versturen/bewaren?',
  'LBL_SEND_BUTTON_KEY' => 'S',
  'LBL_SEND_BUTTON_LABEL' => 'Verzenden',
  'LBL_SEND_BUTTON_TITLE' => 'Verzenden [Alt+S]',
  'LBL_SEND' => 'SEND',
  'LBL_SENT_MODULE_NAME' => 'Verzonden e-mails',
  'LBL_SHOW_ALT_TEXT' => 'Toon niet geformatteerde tekst',
  'LBL_SIGNATURE' => 'Handtekening',
  'LBL_SUBJECT' => 'Onderwerp:',
  'LBL_TEXT_BODY' => 'Tekst body',
  'LBL_TIME' => 'Tijdstip verzending:',
  'LBL_TO_ADDRS' => 'Aan',
  'LBL_USE_TEMPLATE' => 'Gebruik template:',
  'LBL_USERS_SUBPANEL_TITLE' => 'Gebruikers',
  'LBL_USERS' => 'Gebruikers',
  
  'LNK_ALL_EMAIL_LIST' => 'Alle e-mails',
  'LNK_ARCHIVED_EMAIL_LIST' => 'Gearchiveerde e-mails',
  'LNK_CALL_LIST' => 'Telefoongesprekken',
  'LNK_DRAFTS_EMAIL_LIST' => 'Concepten',
  'LNK_EMAIL_LIST' => 'E-mails',
  'LBL_EMAIL_RELATE' => 'Gerelateerd aan',
  'LNK_EMAIL_TEMPLATE_LIST' => 'E-mail templates',
  'LNK_MEETING_LIST' => 'Afspraken',
  'LNK_NEW_ARCHIVE_EMAIL' => 'Nieuwe gearchiveerde e-mail',
  'LNK_NEW_CALL' => 'Nieuw telefoongesprek',
  'LNK_NEW_EMAIL_TEMPLATE' => 'Ontwerp e-mail template',
  'LNK_NEW_EMAIL' => 'E-mail archiveren',
  'LNK_NEW_MEETING' => 'Nieuwe afspraak',
  'LNK_NEW_NOTE' => 'Nieuwe notitie of bijlage',
  'LNK_NEW_SEND_EMAIL' => 'E-mail opstellen',
  'LNK_NEW_TASK' => 'Nieuwe Taak',
  'LNK_NOTE_LIST' => 'Notities',
  'LNK_SENT_EMAIL_LIST' => 'Verzonden e-mails',
  'LNK_TASK_LIST' => 'Taken',
  'LNK_VIEW_CALENDAR' => 'Vandaag',
  
  'LBL_LIST_ASSIGNED' => 'Toegewezen',
  'LBL_LIST_CONTACT_NAME' => 'Contactpersoon',
  'LBL_LIST_CREATED' => 'Aangemaakt',
  'LBL_LIST_DATE_SENT' => 'Datum verzending',
  'LBL_LIST_DATE' => 'Datum verzending',
  'LBL_LIST_FORM_DRAFTS_TITLE' => 'Draft',
  'LBL_LIST_FORM_SENT_TITLE' => 'Verzonden e-mails',
  'LBL_LIST_FORM_TITLE' => 'E-mail Lijst',
  'LBL_LIST_FROM_ADDR' => 'Van',
  'LBL_LIST_RELATED_TO' => 'Gerelateerd aan',
  'LBL_LIST_SUBJECT' => 'Onderwerp',
  'LBL_LIST_TIME' => 'Tijdstip verzending',
  'LBL_LIST_TO_ADDR' => 'Aan',
  'LBL_LIST_TYPE' => 'Type',
  
  'NTC_REMOVE_INVITEE' => 'Weet u zeker dat u deze ontvanger wilt verwijderen van de E-mail?',
  'WARNING_SETTINGS_NOT_CONF' => 'Waarschuwing: Uw e-mail instellingen zijn nog niet geconfigureerd voor mail verzending',
  'WARNING_NO_UPLOAD_DIR' => 'Bijlages kunnen niet worden verstuurd. Er is geen waarde gevonden voor "upload_tmp_dir". Hierdoor is er geen tijdelijke upload directory. Deze instelling is aan te passen in het php.ini op de server.',
  'WARNING_UPLOAD_DIR_NOT_WRITABLE' => 'Bijlages kunnen niet worden verstuurd. Er is een ongeldige waarde gevonden voor "upload_tmp_dir". Hierdoor is er geen tijdelijke upload directory. Deze instelling is aan te passen in het php.ini op de server.',
  
  // for All emails
  'LBL_BUTTON_RAW_TITLE' => 'Toon ruwe e-mail [ALT] + [E]',
  'LBL_BUTTON_RAW_KEY' => 'e',
  'LBL_BUTTON_RAW_LABEL' => 'Toon ruwe e-mail',
  'LBL_BUTTON_RAW_LABEL_HIDE' => 'Verberg ruwe e-mail',

// for InboundEmail
  'LBL_BUTTON_CHECK' => 'Haal e-mail',
  'LBL_BUTTON_CHECK_TITLE' => 'Haal nieuwe e-mail op [ALT+C]',
  'LBL_BUTTON_CHECK_KEY' => 'c',
  'LBL_BUTTON_FORWARD' => 'Doorsturen',
  'LBL_BUTTON_FORWARD_TITLE' => 'Deze e-mail doorsturen [ALT+F]',
  'LBL_BUTTON_FORWARD_KEY' => 'f',
  'LBL_BUTTON_REPLY_KEY' => 'r',
  'LBL_BUTTON_REPLY_TITLE' => 'Beantwoord [ALT+R]',
  'LBL_BUTTON_REPLY' => 'Beantwoord',
  'LBL_BUTTON_REPLY_ALL'		=> 'Allen beantwoorden',
  'LBL_CASES_SUBPANEL_TITLE' => 'Verzoeken',
  'LBL_INBOUND_TITLE' => 'Inkomende e-mail',
  'LBL_INTENT' => 'Bedoeling',
  'LBL_MESSAGE_ID' => 'Bericht ID',
  'LBL_REPLY_HEADER_1' => 'Aan ',
  'LBL_REPLY_HEADER_2' => 'schreef:',
  'LBL_REPLY_TO_ADDRESS' => 'Reply-to Adres',
  'LBL_REPLY_TO_NAME' => 'Reply-to Naam',
  
  'LBL_LIST_BUG' => 'Bugs',
  'LBL_LIST_CASE' => 'Verzoeken',
  'LBL_LIST_CONTACT' => 'Contactpersonen',
  'LBL_LIST_LEAD' => 'Leads',
  'LBL_LIST_TASK' => 'Taken',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Toegewezen gebruiker',
  
  // for Inbox
  'LBL_ALL' => 'Alles',
  'LBL_ASSIGN_WARN' => 'Zorg dat alle 3 opties zijn geselecteerd',
  'LBL_BACK_TO_GROUP' => 'Terug naar de groeps Inbox',
  'LBL_BUTTON_DISTRIBUTE_KEY' => 'a',
  'LBL_BUTTON_DISTRIBUTE_TITLE' => 'Toekennen [ALT+A]',
  'LBL_BUTTON_DISTRIBUTE' => 'Toekennen',
  'LBL_BUTTON_GRAB_KEY' => 't',
  'LBL_BUTTON_GRAB_TITLE' => 'Neem uit de groep [ALT+T]',
  'LBL_BUTTON_GRAB' => 'Neem uit de groep',
  'LBL_CREATE_BUG' => 'Nieuwe bug',
  'LBL_CREATE_CASE' => 'Nieuw verzoek',
  'LBL_CREATE_CONTACT' => 'Nieuw contactpersoon',
  'LBL_CREATE_LEAD' => 'Nieuwe lead',
  'LBL_CREATE_TASK' => 'Nieuwe taak',
  'LBL_DIST_TITLE' => 'Taak',
  'LBL_LOCK_FAIL_DESC' => 'Het gekozen item is niet beschikbaar',
  'LBL_LOCK_FAIL_USER' => ' heeft beheer genomen',
  'LBL_MASS_DELETE_ERROR' => 'Er zijn geen items geselecteerd voor verwijderen',
  'LBL_NEW' => 'Nieuw',
  'LBL_NEXT_EMAIL' => 'Volgend vrije item',
  'LBL_NO_GRAB_DESC' => 'Er zijn geen items beschikbaar. Probeer het later nog eens.',
  'LBL_QUICK_REPLY' => 'Beantwoord',
  'LBL_REPLIED' => 'Beantwoord',
  'LBL_SELECT_TEAM' => 'Selecteer teams',
  'LBL_TAKE_ONE_TITLE' => 'Antwoorden',
  'LBL_TITLE_SEARCH_RESULTS' => 'Zoekresultaten',
  'LBL_TO' => 'Aan:',
  'LBL_TOGGLE_ALL' => 'Kies alle',
  'LBL_UNKNOWN' => 'Onbekend',
  'LBL_UNREAD_HOME' => 'Ongelezen e-mail',
  'LBL_UNREAD' => 'Ongelezen',
  'LBL_USE_ALL' => 'Alle zoek resultaten',
  'LBL_USE_CHECKED' => 'Alleen geselecteerde',
  'LBL_USE_MAILBOX_INFO' => 'Gebruik e-mailbox van: Adres',
  'LBL_USE' => 'Toekennen:',
  'LBL_ASSIGN_SELECTED_RESULTS_TO' => 'Geselecteerde resultaten toewijzen aan: ',
  'LBL_USER_SELECT' => 'Selecteer Gebruikers',
  'LBL_USING_RULES' => 'Regels toegepast:',
  'LBL_WARN_NO_DIST' => 'Geen distributiemethode geselecteerd',
  'LBL_WARN_NO_USERS' => 'Er zijn geen Gebruikers geselecteerd',
  'LBL_WARN_NO_USERS_OR_TEAM' => 'Selecteer ofwel een gebruiker of het team voor toewijzen.',
  'LBL_IMPORT_STATUS_TITLE' => 'Status',
   'LBL_LIST_STATUS' => 'Status',
  'LBL_LIST_TITLE_GROUP_INBOX' => 'Groep inbox',
  'LBL_LIST_TITLE_MY_DRAFTS' => 'Mijn concepten',
  'LBL_LIST_TITLE_MY_INBOX' => 'Mijn inbox',
  'LBL_LIST_TITLE_MY_SENT' => 'Mijn verzonden e-mail',
  'LBL_LIST_TITLE_MY_ARCHIVES' => 'Mijn gearchiveerde e-mail',
  'LBL_ACTIVITIES_REPORTS' => 'Activiteitenverslag',
  
  'LNK_CHECK_MY_INBOX' => 'Haal nieuwe e-mail op',
  'LNK_DATE_SENT' => 'Datum verzending',
  'LNK_GROUP_INBOX' => 'Groep inbox',
  'LNK_MY_DRAFTS' => 'Mijn concepten',
  'LNK_MY_INBOX' => 'Mijn inbox',
  'LNK_VIEW_MY_INBOX' => 'Bekijk Mijn e-mail',
  'LNK_QUICK_REPLY' => 'Beantwoord',
  'LNK_MY_ARCHIVED_LIST' => 'Mijn archief',
  'LBL_EMAILS_NO_PRIMARY_TEAM_SPECIFIED' => 'Geen primaire team gespecificeerd ',
  
  // advanced search
  'LBL_ASSIGNED_TO'			=> 'Toegewezen aan:',
  'LBL_MEMBER_OF' => 'Bovenliggend',
  'LBL_QUICK_CREATE' => 'Snel aanmaken',
  'LBL_STATUS' => 'E-mail status:',
	'LBL_EMAIL_FLAGGED'			=> 'Belangrijk:',
	'LBL_EMAIL_REPLY_TO_STATUS'	=> 'Beantwoorden aan status:',
  'LBL_TYPE' => 'Type:',
  	//#20680 EmialTemplate Ext.Message.show;
  'LBL_EMAILTEMPLATE_MESSAGE_SHOW_TITLE' => 'Nakijken a.u.b.!',
  'LBL_EMAILTEMPLATE_MESSAGE_SHOW_MSG' => 'Door het selecteren van deze template overschrijft u alle gegevens die al zijn ingevoerd in het e-mailbericht. Wilt u doorgaan?',
  'LBL_EMAILTEMPLATE_MESSAGE_CLEAR_MSG' => 'Het selecteren van \"- Geen-\"  zal alle gegevens die al zijn opgeslagen in de email body verwijderen. Wilt u doorgaan?',
  'LBL_EMAILTEMPLATE_MESSAGE_WARNING_TITLE' => 'Waarschuwing',
  'LBL_EMAILTEMPLATE_MESSAGE_MULTIPLE_RECIPIENTS' => 'Gebruik maken van een email-template die contactpersoon-variabelen bevat, zoals bijvoorbeeld contactpersoon-naam, om een email te versturen aan meerdere ontvangers, kan onverwacht effect hebben. Het advies is om daarvoor een emailcampagne te gebruiken.',
'LBL_CHECK_ATTACHMENTS' => 'Controleer bijlagen!',
'LBL_HAS_ATTACHMENTS' => 'Deze e-mail heeft al bijlage (n). Wilt u de bijlage (n) behouden?',
'ERR_MISSING_REQUIRED_FIELDS' => 'Ontbrekende verplicht veld',
'ERR_INVALID_REQUIRED_FIELDS' => 'Ongeldige verplicht veld',
'LBL_FILTER_BY_RELATED_BEAN' => 'Alleen ontvangers tonen in verband met',
'LBL_RECIPIENTS_HAVE_BEEN_ADDED' => 'Ontvangers zijn toegevoegd.',
'LBL_ADD_INBOUND_ACCOUNT' => 'Toevoegen',
'LBL_ADD_OUTBOUND_ACCOUNT' => 'Toevoegen',
'LBL_EMAIL_ACCOUNTS_INBOUND' => 'E-mail account eigenschappen',
'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNT' => 'Uitgaande SMTP-mailserver',
'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNTS' => 'Uitgaande SMTP Mail Servers',
'LBL_EMAIL_SETTINGS_INBOUND_ACCOUNTS' => 'Mailaccounts',
'LBL_EMAIL_SETTINGS_INBOUND' => 'Inkomende e-mail',
'LBL_EMAIL_SETTINGS_OUTBOUND' => 'Uitgaande e-mail',
'LBL_ADD_CC' => 'Cc toevoegen',
'LBL_ADD_BCC' => 'BCC toevoegen',
'LBL_MOVE_TO_BCC' => 'Verplaats naar Bcc',
'LBL_ADD_TO_ADDR' => 'Voeg toe aan',
'LBL_SELECTED_ADDR' => 'Geselecteerd',
'LBL_ADD_CC_BCC_SEP' => '|',
'LBL_SEND_EMAIL_FAIL_TITLE' => 'Fout bij verzenden e-mail',
'LBL_EMAIL_DETAIL_VIEW_SHOW' => 'Tonen',
'LBL_EMAIL_DETAIL_VIEW_MORE' => 'meer',
'LBL_MORE_OPTIONS' => 'Meer',
'LBL_LESS_OPTIONS' => 'Minder',
'LBL_MAILBOX_TYPE_PERSONAL' => 'Persoonlijke',
'LBL_MAILBOX_TYPE_GROUP' => 'Groep',
'LBL_MAILBOX_TYPE_GROUP_FOLDER' => 'Groep - auto-importeren',
'LBL_SEARCH_FOR' => 'Zoeken naar',
'LBL_EMAIL_INBOUND_TYPE_HELP' => '<b>Persoonlijk:</b> E-mail-account toegankelijk voor u. Alleen u kunt e-mails van dit account beheren en importeren. <br> <b>Groep:</b> E-mail account toegankelijk voor de leden van de genoemde teams. Teamleden kunnen e-mails van dit account beheren en importeren. <br> <b>Groep - Auto-import:</b> E-mail account te toegankelijk voor leden van de genoemde teams. E-mails worden automatisch geïmporteerd als records.',
'LBL_ADDRESS_BOOK_SEARCH_HELP' => 'Geef een e-mailadres, voornaam, achternaam of accountnaam om ontvangers te vinden.',
'LBL_TEST_SETTINGS' => 'Test Instellingen',
'LBL_EMPTY_EMAIL_BODY' => '<p> <em><span style="color: #888888;">Dit bericht heeft geen inhoud</span></em> </p>',
'LBL_TEST_EMAIL_SUBJECT' => 'Test E-mail van Sugar',
'LBL_NO_SUBJECT' => '(Geen onderwerp)',
'LBL_CHECKING_ACCOUNT' => 'Controleren relatie',
'LBL_OF' => 'van',
'LBL_TEST_EMAIL_BODY' => 'Dit e-mail werd verzonden om de uitgaande mail server informatie in de Sugar toepassing te testen. Een succesvolle ontvangst van deze e-mail geeft aan dat de uitgaande mailserver informatie geldig is.',

// for outbound email dialog
'LBL_MAIL_SMTPUSER' => 'SMTP Gebruikersnaam:',
'LBL_MAIL_SMTPPASS' => 'SMTP-wachtwoord:',
'LBL_MAIL_SMTPSERVER' => 'SMTP-server:',
'LBL_SMTP_SERVER_HELP' => 'Deze SMTP Mail Server kan worden gebruikt voor uitgaande e-mail. Geef een gebruikersnaam en wachtwoord voor uw e-mailaccount om de mail server te gebruiken.',
'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'De beheerder is nog niet geconfigureerd voor het standaard uitgaande account. Niet in staat om de test e-mail te sturen.',
'LBL_MAIL_SMTPAUTH_REQ' => 'Gebruik SMTP-verificatie?',
 'LBL_MAIL_SMTPPASS'					=> 'SMTP Password:',
'LBL_MAIL_SMTPPORT' => 'SMTP-poort:',
'LBL_MAIL_SMTPSERVER'				=> 'SMTP Server:',
'LBL_MAIL_SMTPUSER'					=> 'SMTP Gebruikersnaam:',
'LBL_MAIL_SMTPTYPE' => 'SMTP Server Type:',
'LBL_MAIL_SMTP_SETTINGS' => 'SMTP-server specificatie',
'LBL_CHOOSE_EMAIL_PROVIDER' => 'Kies uw e-mailprovider:',
'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo Mail Wachtwoord:',
'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo Mail ID:',
'LBL_GMAIL_SMTPPASS' => 'Gmail-wachtwoord:',
'LBL_GMAIL_SMTPUSER' => 'Gmail-adres:',
'LBL_EXCHANGE_SMTPPASS' => 'Exchange Wachtwoord:',
'LBL_EXCHANGE_SMTPUSER' => 'Exchange Gebruikersnaam:',
'LBL_EXCHANGE_SMTPPORT' => 'Exchange Server Port:',
'LBL_EXCHANGE_SMTPSERVER' => 'Exchange Server:',

'LBL_EDIT_LAYOUT' => 'Bewerk Lay-out',
'LBL_ATTACHMENT' => 'Bijlage',   
'LBL_DELETE_INLINE' => 'Verwijder',
'LBL_CREATE_CASES' => 'Aanmaken zaak',
'LBL_CREATE_LEADS' => 'Aanmaken leads',
'LBL_CREATE_CONTACTS' => 'Aanmaken contactpersonen',
'LBL_CREATE_BUGS' => 'Aanmaken bugs',
'LBL_CREATE_TASKS' => 'Aanmaken taken',
'LBL_CHECK_INLINE' => 'Juist',
'LBL_CLOSE' => 'Sluiten',
'LBL_HELP' => 'Help',
'LBL_GMAIL_LOGO' => 'Gmail',
'LBL_YAHOO_MAIL' => 'Yahoo',
'LBL_EXCHANGE_LOGO' => 'Exchange',
'LBL_WAIT' => 'Wachten',
'LBL_CHECKEMAIL' => 'Controleer email',
'LBL_COMPOSEEMAIL' => 'Samenstellen email',
'LBL_EMAILSETTINGS' => 'Email instellingen',

//snip
'LBL_CONTACTS_SUBPANEL_TITLE_SNIP' => 'E-mail contactpersonen',
'LBL_EMAILS_MEETINGS_REL' => 'E-mails: afspraken',
'LBL_DATE_CREATED' => 'Datum aangemaakt',
'LBL_DATE_MODIFIED' => 'Datum gewijzigd',
);
