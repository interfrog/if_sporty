<?php

$extKey = 'if_sporty';
$themeconfigKey = 'if_themeconfiguration';

$temporaryThemeColumn = array(
    'name' => array(
        'label'=>'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.name',
        'config' => array(
            'type' => 'input',
            'max' => '255'
        )
    ),
    'pagetitle' => array(
        'label'=>'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.pagetitle',
        'config' => array(
            'type' => 'input',
            'max' => '255'
        )
    ),
    'maxwidth' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.maxwidth',
        'config' => array(
            'type' => 'input',
            'max' => 4,
            'lower' => 800,
            'upper' => 1920,
            'size' => 3,
            'default' => 1000
        )
    ),
    'pagebg' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.pagebg',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'defaulttext' => array(
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.color',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'fontsize' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontsize',
        'config' => array(
            'type' => 'input',
            'max' => 2,
            'lower' => 1,
            'upper' => 99,
            'size' => 3,
        )
    ),
    'generalfont' => array(
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.font',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_font',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_font.name ASC',
        ),
    ),
    'fontweight' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.200' ,'200'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.300' ,'300'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.400' ,'400'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.500' ,'500'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.600' ,'600'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.700' ,'700'),
            ),
        )
    ),
    'logo' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.logo',
        'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig('image', array(
                    'appearance' => array(
                            'createNewRelationLinkTitle' => 'LLL:EXT:cms/locallang_ttc.xlf:images.addFileReference'
                    ),
                    'minitems' => 0,
                    'maxitems' => 1,
                    'foreign_match_fields' => array(
                        'fieldname' => 'logo'
                    ),
                    'filter' => array(
                        '0' => array(
                            'parameters' => array(
                                'allowedFileExtensions' => 'svg',
                            ),
                        ),
                    ),
        )),
    ),
    'logofallback' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.logofallback',
        'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig('image', array(
                    'appearance' => array(
                            'createNewRelationLinkTitle' => 'LLL:EXT:cms/locallang_ttc.xlf:images.addFileReference'
                    ),
                    'minitems' => 0,
                    'maxitems' => 1,
                    'foreign_match_fields' => array(
                        'fieldname' => 'logofallback'
                    ),
                    'filter' => array(
                        '0' => array(
                            'parameters' => array(
                                'allowedFileExtensions' => 'jpg,jpeg,png',
                            ),
                        ),
                    ),
        )),
    ),
    'logowidth' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.logowidth',
        'config' => array(
            'type' => 'input',
            'eval' => 'num,required',
            'size' => 1,
        ),
    ),
    'logoheight' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.logoheight',
        'config' => array(
            'type' => 'input',
            'eval' => 'num,required',
            'size' => 1,
        ),
    ),
    'headerbackground' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.headerbackground',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'navtext' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.navtext',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'navtexthover' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.navtexthover',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'navtextactive' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.navtextactive',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'navslidecolor' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.navslidecolor',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'dropdowntext' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.dropdowntext',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'dropdowntexthover' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.dropdowntexthover',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'dropdowntextactive' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.dropdowntextactive',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'dropdownbackground' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.dropdownbackground',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'dropdownbackgroundhover' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.dropdownbackgroundhover',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'dropdownbackgroundactive' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.dropdownbackgroundactive',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'breadcrumbtext' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.breadcrumbtext',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'breadcrumbtexthover' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.breadcrumbtexthover',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'breadcrumbtextcurrent' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.breadcrumbtextcurrent',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'breadcrumbtextlabel' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.breadcrumbtextlabel',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'submenubg' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.submenubg',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'submenutext' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.submenutext',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'submenuhover' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.submenuhover',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'submenuheadline' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.submenuheadline',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'submenuheadlinestrokes' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.submenuheadlinestrokes',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'submenustrokes' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.submenustrokes',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'offcanvasopener' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.offcanvasopener',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'offcanvastext' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.offcanvastext',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'offcanvasbackground' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.offcanvasbackground',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'offcanvasactive' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.offcanvasactive',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'footerlevel1' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.footerlevel1',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'footerlevel2' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.footerlevel2',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'footertext' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.footertext',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'footerbackground' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.footerbackground',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'socialmenupid' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.socialmenupid',
        'config' => array(
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'maxitems' => 1,
            'minitems' => 0,
            'size' => 1
        )
    ),
    'socialiconcolor' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.socialiconcolor',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'socialiconhover' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.socialiconhover',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'legalmenupid' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.legalmenupid',
        'config' => array(
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'maxitems' => 1,
            'minitems' => 0,
            'size' => 1
        )
    ),
    'h1' => array(
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.color',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'h1font' => array(
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.font',
        'config' => array(
            'items' => array(
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.emptyfont',0)
            ),
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_font',
            'minitems' => 0,
            'maxitems' => 1
        ),
    ),
    'h1style' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle.normal' ,'normal'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle.italic' ,'italic'),
            ),
        )
    ),
    'h1weight' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.200' ,'200'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.300' ,'300'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.400' ,'400'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.500' ,'500'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.600' ,'600'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.700' ,'700'),
            ),
        )
    ),
    'h2' => array(
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.color',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'h2font' => array(
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.font',
        'config' => array(
            'items' => array(
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.emptyfont',0)
            ),
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_font',
            'minitems' => 0,
            'maxitems' => 1
        ),
    ),
    'h2style' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle.normal' ,'normal'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle.italic' ,'italic'),
            ),
        )
    ),
    'h2weight' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.200' ,'200'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.300' ,'300'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.400' ,'400'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.500' ,'500'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.600' ,'600'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.700' ,'700'),
            ),
        )
    ),
    'h3' => array(
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.color',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'h3font' => array(
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.font',
        'config' => array(
            'items' => array(
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.emptyfont',0)
            ),
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_font',
            'minitems' => 0,
            'maxitems' => 1
        ),
    ),
    'h3style' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle.normal' ,'normal'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle.italic' ,'italic'),
            ),
        )
    ),
    'h3weight' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.200' ,'200'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.300' ,'300'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.400' ,'400'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.500' ,'500'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.600' ,'600'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.700' ,'700'),
            ),
        )
    ),
    'h4' => array(
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.color',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'h4font' => array(
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.font',
        'config' => array(
            'items' => array(
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.emptyfont',0)
            ),
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_font',
            'minitems' => 0,
            'maxitems' => 1
        ),
    ),
    'h4style' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle.normal' ,'normal'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle.italic' ,'italic'),
            ),
        )
    ),
    'h4weight' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.200' ,'200'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.300' ,'300'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.400' ,'400'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.500' ,'500'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.600' ,'600'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.700' ,'700'),
            ),
        )
    ),
    'h5' => array(
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.color',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'h5font' => array(
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.font',
        'config' => array(
            'items' => array(
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.emptyfont',0)
            ),
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_font',
            'minitems' => 0,
            'maxitems' => 1
        ),
    ),
    'h5style' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle.normal' ,'normal'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle.italic' ,'italic'),
            ),
        )
    ),
    'h5weight' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.200' ,'200'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.300' ,'300'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.400' ,'400'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.500' ,'500'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.600' ,'600'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.700' ,'700'),
            ),
        )
    ),
    'alternativefont' => array(
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.font',
        'config' => array(
            'items' => array(
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.emptyfont',0)
            ),
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_font',
            'minitems' => 0,
            'maxitems' => 1
        ),
    ),
    'alternativestyle' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle.normal' ,'normal'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle.italic' ,'italic'),
            ),
        )
    ),
    'alternativeweight' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.200' ,'200'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.300' ,'300'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.400' ,'400'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.500' ,'500'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.600' ,'600'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.700' ,'700'),
            ),
        )
    ),
    'formfieldbackground' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.formfieldbackground',
        'config' => array(
            'items' => array(
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.emptycolor',0)
            ),
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'formtext' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.formtext',
        'config' => array(
            'items' => array(
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.emptycolor',0)
            ),
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'formlabel' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.formlabel',
        'config' => array(
            'items' => array(
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.emptycolor',0)
            ),
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'formborder' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.formborder',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'formborderfocus' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.formborderfocus',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'formbutton' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.formbutton',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'formbuttonhover' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.formbuttonhover',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'link' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.link',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'linkhover' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.linkhover',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'overlayboxtext' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.overlayboxtext',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'overlayboxbackground' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.overlayboxbackground',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'divider' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.divider',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'contentbg' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.contentbg',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'teaserbg' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.teaserbg',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'tableborder' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.tableborder',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'tablealternatedtext' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.tablealternatedtext',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'tablealternatedodd' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.tablealternatedodd',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'tablealternatedeven' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.tablealternatedeven',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'accopenerbackground' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.accopenerbackground',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'accopenertext' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.accopenertext',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'accopenerhover' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.accopenerhover',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'accfoldoutbackground' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.accfoldoutbackground',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'accfoldouttext' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.accfoldouttext',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'copyrighttheme' => array(
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.copyrighttheme',
        'config' => array(
            'type' => 'select',
            'items' => array(
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.copyrightthemebright','bright'),
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.copyrightthemedark','dark'),
            ),
        )
    ),
);

$typeConfig = array('showitem' => '
    --div--;LLL:EXT:if_themeconfiguration/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.label.general,name,theme,themeconfig,pagetitle,maxwidth,pagebg,
    --div--;Navigation,navbarbackground,
    --palette--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.palette.mainmenu;'.$extKey.'_mainmenu;,
    --palette--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.palette.dropdownmenu;'.$extKey.'_dropdownmenu;,
    --palette--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.palette.submenu;'.$extKey.'_submenu;,
    --palette--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.palette.breadcrumb;'.$extKey.'_breadcrumb;,
    --palette--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.palette.socialmenu;'.$extKey.'_socialmenu;,
    --palette--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.palette.legalmenu;'.$extKey.'_legalmenu;,
    --palette--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.palette.offcanvas;'.$extKey.'_offcanvas;,
    --div--;Header,
    --palette--;Logo;'.$extKey.'_logo;,headerbackground,
    --div--;Text,
    --palette--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.palette.generaltext;'.$extKey.'_generaltext;,
    --palette--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.palette.heading1;'.$extKey.'_heading1;,
    --palette--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.palette.heading2;'.$extKey.'_heading2;,
    --palette--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.palette.heading3;'.$extKey.'_heading3;,
    --palette--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.palette.heading4;'.$extKey.'_heading4;,
    --palette--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.palette.heading5;'.$extKey.'_heading5;,
    --palette--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.palette.alternative;'.$extKey.'_alternative;,
    --palette--;Links;'.$extKey.'_links;,
    --div--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.label.form,
    --palette--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.palette.formgeneral;'.$extKey.'_formgeneral;,
    --palette--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.palette.formborders;'.$extKey.'_formborders;,
    --palette--;Buttons;'.$extKey.'_formbuttons;,
    --div--;Footer,footerlevel1,footerlevel2,footertext,footerbackground,copyrighttheme,
    --div--;Special,--palette--;Content;'.$extKey.'_content;,--palette--;Tables;'.$extKey.'_table;,--palette--;Overlay-Box;'.$extKey.'_overlaybox;,--palette--;Accordeon;'.$extKey.'_accordeon;,
    --div--;LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.label.colorshemes,colorshemes,
    --div--;LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.label.generated,scssfile,cssfile'
);

$GLOBALS['TCA']['tx_ifthemeconfiguration_domain_model_themeconfiguration']['types'][$extKey] = $typeConfig;

$newPalettes = array(
    $extKey."_logo" => array("showitem" => "logo,--linebreak--,logowidth,logoheight,--linebreak--,logofallback","canNotCollapse" => true),
    $extKey."_mainmenu" => array("showitem" => "navtext,navtexthover,navtextactive,navslidecolor","canNotCollapse" => true),
    $extKey."_dropdownmenu" => array("showitem" => "dropdowntext,dropdowntexthover,dropdowntextactive,--linebreak--,dropdownbackground,dropdownbackgroundhover,dropdownbackgroundactive","canNotCollapse" => true),
    $extKey."_submenu" => array("showitem" => "submenubg,submenuheadline,submenuheadlinestrokes,--linebreak--,submenutext,submenuhover,submenustrokes","canNotCollapse" => true),
    $extKey."_breadcrumb" => array("showitem" => "breadcrumbtext,breadcrumbtexthover,breadcrumbtextcurrent,breadcrumbtextlabel","canNotCollapse" => true),
    $extKey."_socialmenu" => array("showitem" => "socialmenupid,--linebreak--,socialiconcolor,socialiconhover","canNotCollapse" => true),
    $extKey."_legalmenu" => array("showitem" => "legalmenupid","canNotCollapse" => true),
    $extKey."_offcanvas" => array("showitem" => "offcanvasopener,offcanvasbackground,offcanvastext,offcanvasactive","canNotCollapse" => true),
    $extKey."_generaltext" => array("showitem" => "fontsize,defaulttext,generalfont,fontweight","canNotCollapse" => true),
    $extKey."_heading1" => array("showitem" => "h1,h1font,h1style,h1weight","canNotCollapse" => true),
    $extKey."_heading2" => array("showitem" => "h2,h2font,h2style,h2weight","canNotCollapse" => true),
    $extKey."_heading3" => array("showitem" => "h3,h3font,h3style,h3weight","canNotCollapse" => true),
    $extKey."_heading4" => array("showitem" => "h4,h4font,h4style,h4weight","canNotCollapse" => true),
    $extKey."_heading5" => array("showitem" => "h5,h5font,h5style,h5weight","canNotCollapse" => true),
    $extKey."_alternative" => array("showitem" => "alternativefont,alternativestyle,alternativeweight","canNotCollapse" => true),
    $extKey."_formgeneral" => array("showitem" => "formfieldbackground,formtext,formlabel","canNotCollapse" => true),
    $extKey."_formborders" => array("showitem" => "formborder,formborderfocus","canNotCollapse" => true),
    $extKey."_formbuttons" => array("showitem" => "formbutton,formbuttonhover","canNotCollapse" => true),
    $extKey."_links" => array("showitem" => "link,linkhover","canNotCollapse" => true),
    $extKey."_content" => array("showitem" => "contentbg,teaserbg,divider","canNotCollapse" => true),
    $extKey."_table" => array("showitem" => "tableborder,--linebreak--,tablealternatedtext,tablealternatedodd,tablealternatedeven","canNotCollapse" => true),
    $extKey."_overlaybox" => array("showitem" => "overlayboxtext,overlayboxbackground","canNotCollapse" => true),
    $extKey."_accordeon" => array("showitem" => "accopenerbackground,accopenertext,accopenerhover,--linebreak--,accfoldoutbackground,accfoldouttext","canNotCollapse" => true),
);

foreach ($newPalettes as $key => $value) {
    $GLOBALS['TCA']['tx_ifthemeconfiguration_domain_model_themeconfiguration']['palettes'][$key] = $value;
}


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'tx_ifthemeconfiguration_domain_model_themeconfiguration',
    $temporaryThemeColumn,
    1
);