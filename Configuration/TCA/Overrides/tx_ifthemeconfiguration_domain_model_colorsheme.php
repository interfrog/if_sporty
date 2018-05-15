<?php

$extKey = 'if_sporty';
$themeconfigKey = 'if_themeconfiguration';

$temporaryColorshemeColumn = array(
    'newsslidebg' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_colorsheme.newsslidebg',
        'config' => array(
            'type' => 'select',
            'eval' => 'required',
            'items' => array(
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.emptycolor',0)
            ),
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'newsslideimagebg' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_colorsheme.newsslideimagebg',
        'config' => array(
            'type' => 'select',
            'eval' => 'required',
            'items' => array(
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.emptycolor',0)
            ),
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'newsslideimageopacity' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_colorsheme.newsslideimageopacity',
        'config' => Array (
            'type' => 'input',
            'default' => '1',
            'size' => 50,
            'max' => 255,
        )
    ),
    'strokescolor' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_colorsheme.strokescolor',
        'config' => array(
            'type' => 'select',
            'eval' => 'required',
            'items' => array(
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.emptycolor',0)
            ),
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'tx_ifthemeconfiguration_domain_model_colorsheme',
    $temporaryColorshemeColumn,
    1
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tx_ifthemeconfiguration_domain_model_colorsheme',
    '--div--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_colorsheme.div.if_sporty,newsslidebg,newsslideimagebg,newsslideimageopacity,strokescolor',
    '',
    'after:linkcolor'
);