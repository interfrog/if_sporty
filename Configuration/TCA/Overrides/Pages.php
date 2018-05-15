<?php
$extKey="if_sporty";

$temporaryPageColumns = array (
    'iconconfig' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.iconconfig',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.iconconfig.no' ,''),
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.iconconfig.house' ,'fa fa-home'),
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.iconconfig.envelope' ,'fa fa-envelope'),
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.iconconfig.glass' ,'fa fa-search'),
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.iconconfig.twitter' ,'fa fa-twitter'),
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.iconconfig.facebook' ,'fa fa-facebook'),
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.iconconfig.googleplus' ,'fa fa-google-plus'),
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.iconconfig.youtube' ,'fa fa-youtube'),
            ),
        )
    ),
    'seotitle' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.seotitle',
        'config' => Array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
        )
    ),
    'fblike' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.fblike',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.social.recursive' ,''),
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.social.enable' ,'enable'),
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.social.disable' ,'disable'),
            ),
        )
    ),
    'twitter' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.twitter',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.social.recursive' ,''),
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.social.enable' ,'enable'),
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.social.disable' ,'disable'),
            ),
        )
    ),
    'googleplus' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.googleplus',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.social.recursive' ,''),
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.social.enable' ,'enable'),
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.social.disable' ,'disable'),
            ),
        )
    ),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'pages',
    $temporaryPageColumns,
    1
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'pages',
    'layout',
    'iconconfig',
    'after:layout'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'pages',
    'title',
    '--linebreak--,seotitle',
    'after:title'
);

$GLOBALS['TCA']['pages']['palettes']['socialplugins'] = array(
    'showitem' => 'fblike,twitter,googleplus',
    'canNotCollapse' => TRUE
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'pages',
    '--palette--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.palette.socialplugins;socialplugins;',
    '',
    'after:backend_layout_next_level'
);