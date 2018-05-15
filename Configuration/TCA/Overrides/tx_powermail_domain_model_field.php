<?php

    $extKey = 'if_sporty';

    $temporaryPowermailColumn = array(
        'labelposition' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.labelposition',
            'config' => array (
                'type' => 'select',
                'items' => array (
                    array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.labelposition.default' ,''),
                    array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.labelposition.right' ,'right'),
                    array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.labelposition.bottom' ,'bottom'),
                    array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.labelposition.left' ,'left'),
                    array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.labelposition.hide' ,'hide'),
                ),
            ),
        ),
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
        'tx_powermail_domain_model_field',
        $temporaryPowermailColumn,
        1
    );
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
        'tx_powermail_domain_model_field',
        '--div--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.div.extconfig,labelposition',
        '',
        'after:own_marker_select'
    );