<?php

	if (!defined('TYPO3_MODE')) {
		die('Access denied.');
	}

	$tsTemplateName = $_EXTKEY.' - Templates & Assets';
	TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY,'Configuration/TypoScript',$tsTemplateName);

	$GLOBALS['TCA']['tt_content']['columns']['header']['config']['type'] = 'text';
	$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds']['sfeventmgt_pievent,list'] = 'FILE:EXT:'.$_EXTKEY.'/Configuration/Flexform/sf_event_mgt.xml';
