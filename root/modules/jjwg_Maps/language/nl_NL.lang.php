<?php
/**
 * Dutch Language file SuiteCRM version 7 
 * Copyright (c) 2014 Acniti (http:/www.acniti.com)
 * All rights reserved.
 *
 * Permission is granted for use, copying, modification, distribution,
 * and distribution of modified versions of this work as long as the
 * above copyright notice is included.
 */
$mod_strings['LBL_MAP'] = 'Kaart';
$mod_strings['LBL_MAPS'] = 'Kaarten';
$mod_strings['LBL_MODULE_NAME'] = 'Kaarten';
$mod_strings['LBL_MODULE_TITLE'] = 'Kaarten: Start';
$mod_strings['LBL_MODULE_ID'] = 'Kaarten';
$mod_strings['LBL_LIST_FORM_TITLE'] = 'Kaarten Lijst';
$mod_strings['LBL_MAP_CUSTOM_MARKER'] = 'Custom Markeerpunt';
$mod_strings['LBL_MAP_CUSTOM_AREA'] = 'Custom Gebied';
$mod_strings['LBL_HOMEPAGE_TITLE'] = 'Kaarten Lijst';

$mod_strings['LBL_FLEX_RELATE'] = 'Gerelateerd aan (Centrum):';
$mod_strings['LBL_MODULE_TYPE'] = 'Module type tonen:';
$mod_strings['LBL_DISTANCE'] = 'Afstand (Radius):';
$mod_strings['LBL_UNIT_TYPE'] = 'Eenheid type:';

$mod_strings['LBL_MAP_ACTION'] = 'Op de kaart zetten';
$mod_strings['LBL_MAP_DISPLAY'] = 'Kaart tonen';
$mod_strings['LBL_MAP_LEGEND'] = 'Legenda:';
$mod_strings['LBL_MAP_USERS'] = 'Gebruikers:';
$mod_strings['LBL_MAP_USER_GROUPS'] = 'Groepen:';
$mod_strings['LBL_MAP_GROUP'] = 'Groep';
$mod_strings['LBL_MAP_TYPE'] = 'Type';
$mod_strings['LBL_MAP_ASSIGNED_TO'] = 'Toegewezen aan:';
$mod_strings['LBL_MAP_GET_DIRECTIONS'] = 'Krijg routebeschrijving';

$mod_strings['LNK_NEW_MAP'] = 'Toevoegen nieuwe kaart';
$mod_strings['LNK_NEW_RECORD'] = 'Toevoegen nieuwe kaart';
$mod_strings['LNK_MAP_LIST'] = 'Kaarten lijst';
$mod_strings['LNK_IMPORT_MAPS'] = 'Importeer kaart';
$mod_strings['LBL_MAP_GEOCODE_ADDRESSES'] = 'Geocode Adresen';
$mod_strings['LBL_MAP_DONATE'] = 'Doneer';
$mod_strings['LBL_MAP_DONATE_TO_THIS_PROJECT'] = 'Doneer aan dit project';
$mod_strings['LBL_BUG_FIX'] = 'Bug Fix';

$mod_strings['LBL_MAP_ADDRESS_TEST'] = 'Geocoding Test';
$mod_strings['LBL_MAP_QUICK_RADIUS'] = 'Quick Radius Kaart';
$mod_strings['LBL_MAP_NULL_GROUP_NAME'] = 'Geen';
$mod_strings['LBL_MAP_ADDRESS'] = 'Adres';
$mod_strings['LBL_MAP_PROCESS'] = 'Verwerken!';

$mod_strings['LBL_MAP_LAST_STATUS'] = 'Laatste geocode status';
$mod_strings['LBL_MAP_GEOCODED_COUNTS'] = 'Geocoded tellingen';
$mod_strings['LBL_GEOCODED_COUNTS'] = 'Module Geocoded tellingen';
$mod_strings['LBL_CRON_URL'] = 'Cron URL:';
$mod_strings['LBL_MODULE_HEADING'] = 'Module';
$mod_strings['LBL_MODULE_TOTAL_HEADING'] = 'Total';
$mod_strings['LBL_MODULE_RESET_HEADING'] = 'Reset';
$mod_strings['LBL_GEOCODED_COUNTS_DESCRIPTION'] = 'The table shown belown shows the number of module objects geocoded, grouped by geocoding response. '. 
'Keep in mind that the standard Google Maps usage limit is 2500 requests per day. '.
'This module will cache the addresses geocoding information during processing to reduce the overall number of requests needed.';
$mod_strings['LBL_CRON_URL'] = 'CRON URL';
$mod_strings['LBL_CRON_INSTRUCTIONS'] = 'To process the geocoding requests it is recommended to setup a nightly Cron-Job. '.
'A custom entry point has been created for this purpose and can be accessed without authentication. '.
'The URL shown below is meant to be used with an Administrative Scheduled Task. '.
'Please see the SugarCRM documentation for more information.';
$mod_strings['LBL_EXPORT_ADDRESS_URL'] = 'Export URLs';
$mod_strings['LBL_EXPORT_INSTRUCTIONS'] = 'Use the links below to export full addresses in need of geocodeing information. '.
'Then use an online or offline batch geocoding tool to geocode the addresses. '.
'When you are finished geocoding, import the addresses into the Address Cache module to be used with your maps.'.
'Note, the Address Cache module is optional. All geocoding information is stored in the representative module.';
$mod_strings['LBL_ADDRESS_CACHE'] = 'Address Cache';
$mod_strings['LBL_ADD_TO_TARGET_LIST'] = 'Add to Target List';
$mod_strings['LBL_ADD_TO_TARGET_LIST_CONFIRM'] = 'Are you sure you want to add the Selected Items to the Target List?';
$mod_strings['LBL_ADD_TO_TARGET_LIST_PROCESSING'] = 'Processing...';


$mod_strings['LBL_CONFIG_TITLE'] = 'Configuration Settings';
$mod_strings['LBL_CONFIG_SAVED'] = 'Settings Saved Successfully!';
$mod_strings['LBL_BILLING_ADDRESS'] = 'Billing Address';
$mod_strings['LBL_SHIPPING_ADDRESS'] = 'Shipping Address';
$mod_strings['LBL_PRIMARY_ADDRESS'] = 'Primary Address';
$mod_strings['LBL_ALTERNATIVE_ADDRESS'] = 'Alternative Address';
$mod_strings['LBL_ADDRESS_FLEX_RELATE'] = 'Flex Relate';
$mod_strings['LBL_ADDRESS_ADDRESS'] = 'Address (Simple, Users)';
$mod_strings['LBL_ADDRESS_CUSTOM'] = 'Custom (Custom Controller Logic)';
$mod_strings['LBL_ENABLED'] = 'Enabled';
$mod_strings['LBL_DISABLED'] = 'Disabled';
$mod_strings['LBL_DEFAULT'] = 'Default:';
$mod_strings['LBL_CONFIG_DEFAULT'] = 'Default:';

$mod_strings['LBL_CONFIG_VALID_GEOCODE_MODULES'] = 'Valid Geocode Modules:';
$mod_strings['LBL_CONFIG_VALID_GEOCODE_TABLES'] = 'Valid Geocode Tables:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_SETTINGS_TITLE'] = "Address Type Settings: This defines the modules' address types used when geocoding addresses. Acceptable Values: 'billing'; 'shipping'; 'primary'; 'alt'; 'flex_relate'";
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR'] = 'Address Type for ';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_ACCOUNTS'] = 'Address Type for Accounts:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CONTACTS'] = 'Address Type for Contacts:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_LEADS'] = 'Address Type for Leads:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_OPPORTUNITIES'] = 'Address Type for Opportunities:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT'] = '(of Related Account)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CASES'] = 'Address Type for Cases:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROJECTS'] = 'Address Type for Projects:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT_OPPORTUNITY'] = '(of Related Account/Opportunity)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_MEETINGS'] = 'Address Type for Meetings:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROSPECTS'] = 'Address Type for Prospects/Targets:';
$mod_strings['LBL_CONFIG_RELATED_OBJECT_THRU_FLEX_RELATE'] = 'Related Object thru Flex Relate Field';

$mod_strings['LBL_CONFIG_MARKER_GROUP_FIELD_SETTINGS_TITLE'] = "Marker Group Field Settings: This defines the 'field' to be used as the group parameter when displaying markers on a map. Examples: assigned_user_name, industry, status, sales_stage, priority";
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR'] = 'Group Field for ';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_ACCOUNTS'] = 'Group Field for Accounts:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CONTACTS'] = 'Group Field for Contacts:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_LEADS'] = 'Group Field for Leads:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_OPPORTUNITIES'] = 'Group Field for Opportunities:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CASES'] = 'Group Field for Cases:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROJECTS'] = 'Group Field for Projects:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_MEETINGS'] = 'Group Field for Meetings:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROSPECTS'] = 'Group Field for  Prospects/Targets:';

$mod_strings['LBL_CONFIG_GEOCODING_SETTINGS_TITLE'] = 'Geocoding/Google Settings:';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_TITLE'] = 'Geocoding API URL:';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_DESC'] = 'The URL of the Google Maps API V3 or Proxy';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_TITLE'] = 'Secret Phrase for Proxy:';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_DESC'] = 'The Secret Phrase to be used with the Proxy MD5 comparison.';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_TITLE'] = 'Geocoding Limit:';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_DESC'] = "'geocoding_limit' sets the query limit when selecting records to geocode.";
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_TITLE'] = 'Google Geocoding Limit:';
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_DESC'] = "'google_geocoding_limit' sets the request limit when geocoding using the Google Maps API.";
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_TITLE'] = 'Export Addresses Limit:';
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_DESC'] = "'export_addresses_limit' sets the query limit when selecting records to export.";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_TITLE'] = "Allow 'APPROXIMATE' Location Types:";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_DESC'] = "'allow_approximate_location_type' - allows location types of 'APPROXIMATE' to be considered 'OK' geocoding results.";

$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SETTINGS_TITLE'] = 'Address Cache Settings:';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_TITLE'] = 'Enable Address Cache (Get):';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_DESC'] = "'address_cache_get_enabled' allows the address cache module to retrieve data from the cache table.";
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_TITLE'] = 'Enable Saving Address Cache (Save):';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_DESC'] = "'address_cache_save_enabled' allows the address cache module to save data to the cache table.";

$mod_strings['LBL_CONFIG_LOGIC_HOOKS_SETTINGS_TITLE'] = 'Logic Hooks Setting:';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_TITLE'] = 'Enable All Logic Hooks: ';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_DESC'] = "'logic_hooks_enabled' allows logic hooks for automatic updating based on related objects. It is recommended to disable when upgrading your SugarCRM.";

$mod_strings['LBL_CONFIG_MARKER_MAPPING_SETTINGS_TITLE'] = 'Marker/Mapping Settings:';
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_TITLE'] = "Map Markers Limit:";
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_DESC'] = "'map_markers_limit' sets the query limit when selecting records to display on a map.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_TITLE'] = "Map Default Center Latitude:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_DESC'] = "'map_default_center_latitude' sets the default center latitude position for maps.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_TITLE'] = "Map Default Center Longitude:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_DESC'] = "'map_default_center_longitude' sets the default center longitude position for maps.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_TITLE'] = "Map Default Unit Type:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_DESC'] = "'map_default_unit_type' sets the default unit measurement type for distance calculations. Values: 'mi' (miles) or 'km' (kilometers).";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_TITLE'] = "Map Default Distance:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_DESC'] = "'map_default_distance' sets the default distance used for distance based maps.";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_TITLE'] = "Map Duplicate Marker Adjustment:";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_DESC'] = "'map_duplicate_marker_adjustment' sets an offset adjustment to be added to longitude and latitude in case of duplicate marker position.";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_TITLE'] = "Map Markers Clusterer Grid Size:";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_DESC'] = "'map_clusterer_grid_size' is used to set the grid size for calculating map clusterers.";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_TITLE'] = "Map Markers Clusterer Max Zoom:";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_DESC'] = "'map_clusterer_max_zoom' is used to set the maximum zoom level at which clustering will not be applied.";
$mod_strings['LBL_CONFIG_CUSTOM_CONTROLLER_DESC'] = "Important Note: All saved settings can be found in the 'config' table under category 'jjwg'. Note, a custom controller.php file should no longer be used to override settings.";
$mod_strings['LBL_CONFIG_MAP_ADSENSE_REMOVAL_KEY_TITLE'] = 'Map AdSense Removal Key:';
$mod_strings['LBL_CONFIG_MAP_ADSENSE_REMOVAL_KEY_DESC'] = 'Donate to this project! Then contact JJWDesign.com for an AdSense removal key.';
