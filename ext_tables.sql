#
# Table structure for table 'pages'
#
CREATE TABLE pages (
	iconconfig varchar(255) DEFAULT '' NOT NULL,
	seotitle varchar(255) DEFAULT '' NOT NULL,
    fblike varchar(255) DEFAULT '0' NOT NULL,
    twitter varchar(255) DEFAULT '0' NOT NULL,
    googleplus varchar(255) DEFAULT '0' NOT NULL,
);

#
# Table structure for table 'tt_content'
#
CREATE TABLE tt_content (
    subtitle varchar(255) DEFAULT '' NOT NULL,
    hidemobile tinyint(4) DEFAULT '0' NOT NULL,
    hidedesktop tinyint(4) DEFAULT '0' NOT NULL,
    backgroundimage varchar(255) DEFAULT '' NOT NULL,
    horizontalposition varchar(255) DEFAULT '' NOT NULL,
    verticalposition varchar(255) DEFAULT '' NOT NULL,
    fullwidth tinyint(4) DEFAULT '0' NOT NULL,
    roundimage tinyint(4) DEFAULT '0' NOT NULL,
    alternativefont tinyint(4) DEFAULT '0' NOT NULL,
    url varchar(255) DEFAULT '' NOT NULL,
    sourcetype varchar(255) DEFAULT '' NOT NULL,
    ratio varchar(255) DEFAULT '' NOT NULL,
    strokes tinyint(4) DEFAULT '0' NOT NULL,
    autoplay tinyint(4) DEFAULT '0' NOT NULL,
    showrel tinyint(4) DEFAULT '0' NOT NULL,
    showinfo tinyint(4) DEFAULT '0' NOT NULL,
    videoloop tinyint(4) DEFAULT '0' NOT NULL,
);

CREATE TABLE tx_powermail_domain_model_field (
    labelposition varchar(255) DEFAULT '' NOT NULL,
);

CREATE TABLE tx_ifthemeconfiguration_domain_model_themeconfiguration (

    pagetitle varchar(255) DEFAULT '' NOT NULL,
    maxwidth int(11) unsigned DEFAULT '1000' NOT NULL,
    pagebg int(11) unsigned DEFAULT '0' NOT NULL,

    socialmenupid int(11) DEFAULT '0' NOT NULL,
    socialiconcolor int(11) unsigned DEFAULT '0' NOT NULL,
    socialiconhover int(11) unsigned DEFAULT '0' NOT NULL,

    legalmenupid int(11) DEFAULT '0' NOT NULL,

    defaulttext int(11) unsigned DEFAULT '0' NOT NULL,
    fontsize int(11) DEFAULT '14' NOT NULL,
    generalfont int(11) unsigned DEFAULT '0' NOT NULL,
    fontweight varchar(255) DEFAULT '400' NOT NULL,

    logo varchar(255) DEFAULT '' NOT NULL,
    logofallback varchar(255) DEFAULT '' NOT NULL,
    logowidth int(11) DEFAULT '0' NOT NULL,
    logoheight int(11) DEFAULT '0' NOT NULL,

    headerbackground int(11) unsigned DEFAULT '0' NOT NULL,

    navtext int(11) unsigned DEFAULT '0' NOT NULL,
    navtexthover int(11) unsigned DEFAULT '0' NOT NULL,
    navtextactive int(11) unsigned DEFAULT '0' NOT NULL,
    navslidecolor int(11) unsigned DEFAULT '0' NOT NULL,
    dropdowntext int(11) unsigned DEFAULT '0' NOT NULL,
    dropdowntexthover int(11) unsigned DEFAULT '0' NOT NULL,
    dropdowntextactive int(11) unsigned DEFAULT '0' NOT NULL,
    dropdownbackground int(11) unsigned DEFAULT '0' NOT NULL,
    dropdownbackgroundhover int(11) unsigned DEFAULT '0' NOT NULL,
    dropdownbackgroundactive int(11) unsigned DEFAULT '0' NOT NULL,

    breadcrumbtext int(11) unsigned DEFAULT '0' NOT NULL,
    breadcrumbtexthover int(11) unsigned DEFAULT '0' NOT NULL,
    breadcrumbtextcurrent int(11) unsigned DEFAULT '0' NOT NULL,
    breadcrumbtextlabel int(11) unsigned DEFAULT '0' NOT NULL,

    submenubg int(11) unsigned DEFAULT '0' NOT NULL,
    submenuheadline int(11) unsigned DEFAULT '0' NOT NULL,
    submenuheadlinestrokes int(11) unsigned DEFAULT '0' NOT NULL,
    submenutext int(11) unsigned DEFAULT '0' NOT NULL,
    submenuhover int(11) unsigned DEFAULT '0' NOT NULL,
    submenustrokes int(11) unsigned DEFAULT '0' NOT NULL,
    offcanvasopener int(11) unsigned DEFAULT '0' NOT NULL,
    offcanvastext int(11) unsigned DEFAULT '0' NOT NULL,
    offcanvasbackground int(11) unsigned DEFAULT '0' NOT NULL,
    offcanvasactive int(11) unsigned DEFAULT '0' NOT NULL,
    footertext int(11) unsigned DEFAULT '0' NOT NULL,
    footerbackground int(11) unsigned DEFAULT '0' NOT NULL,
    footerlevel1 int(11) unsigned DEFAULT '0' NOT NULL,
    footerlevel2 int(11) unsigned DEFAULT '0' NOT NULL,

    h1 int(11) unsigned DEFAULT '0' NOT NULL,
    h1font int(11) unsigned DEFAULT '0' NOT NULL,
    h1style varchar(255) DEFAULT 'normal' NOT NULL,
    h1weight varchar(255) DEFAULT '400' NOT NULL,
    h2 int(11) unsigned DEFAULT '0' NOT NULL,
    h2font int(11) unsigned DEFAULT '0' NOT NULL,
    h2style varchar(255) DEFAULT 'normal' NOT NULL,
    h2weight varchar(255) DEFAULT '400' NOT NULL,
    h3 int(11) unsigned DEFAULT '0' NOT NULL,
    h3font int(11) unsigned DEFAULT '0' NOT NULL,
    h3style varchar(255) DEFAULT 'normal' NOT NULL,
    h3weight varchar(255) DEFAULT '400' NOT NULL,
    h4 int(11) unsigned DEFAULT '0' NOT NULL,
    h4font int(11) unsigned DEFAULT '0' NOT NULL,
    h4style varchar(255) DEFAULT 'normal' NOT NULL,
    h4weight varchar(255) DEFAULT '400' NOT NULL,
    h5 int(11) unsigned DEFAULT '0' NOT NULL,
    h5font int(11) unsigned DEFAULT '0' NOT NULL,
    h5style varchar(255) DEFAULT 'normal' NOT NULL,
    h5weight varchar(255) DEFAULT '400' NOT NULL,
    alternativefont int(11) unsigned DEFAULT '0' NOT NULL,
    alternativestyle varchar(255) DEFAULT 'normal' NOT NULL,
    alternativeweight varchar(255) DEFAULT '400' NOT NULL,

    formfieldbackground int(11) unsigned DEFAULT '0' NOT NULL,
    formtext int(11) unsigned DEFAULT '0' NOT NULL,
    formlabel int(11) unsigned DEFAULT '0' NOT NULL,
    formborder int(11) unsigned DEFAULT '0' NOT NULL,
    formborderfocus int(11) unsigned DEFAULT '0' NOT NULL,
    formbutton int(11) unsigned DEFAULT '0' NOT NULL,
    formbuttonhover int(11) unsigned DEFAULT '0' NOT NULL,

    link int(11) unsigned DEFAULT '0' NOT NULL,
    linkhover int(11) unsigned DEFAULT '0' NOT NULL,    

    divider int(11) unsigned DEFAULT '0' NOT NULL,
    contentbg int(11) unsigned DEFAULT '0' NOT NULL,
    teaserbg int(11) unsigned DEFAULT '0' NOT NULL,
    tableborder int(11) unsigned DEFAULT '0' NOT NULL,
    tablealternatedtext int(11) unsigned DEFAULT '0' NOT NULL,
    tablealternatedodd int(11) unsigned DEFAULT '0' NOT NULL,
    tablealternatedeven int(11) unsigned DEFAULT '0' NOT NULL,
    overlayboxtext int(11) unsigned DEFAULT '0' NOT NULL,    
    overlayboxbackground int(11) unsigned DEFAULT '0' NOT NULL,
    accopenerbackground int(11) unsigned DEFAULT '0' NOT NULL,
    accopenertext int(11) unsigned DEFAULT '0' NOT NULL,
    accopenerhover int(11) unsigned DEFAULT '0' NOT NULL,
    accfoldoutbackground int(11) unsigned DEFAULT '0' NOT NULL,
    accfoldouttext int(11) unsigned DEFAULT '0' NOT NULL,
    copyrighttheme varchar(255) DEFAULT 'bright' NOT NULL,
);

CREATE TABLE tx_ifthemeconfiguration_domain_model_colorsheme (
    newsslidebg int(11) unsigned DEFAULT '0' NOT NULL,
    newsslideimagebg int(11) unsigned DEFAULT '0' NOT NULL,
    newsslideimageopacity varchar(11) DEFAULT '1' NOT NULL,
    strokescolor int(11) unsigned DEFAULT '0' NOT NULL,
);