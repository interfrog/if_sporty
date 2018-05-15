<?php
namespace Interfrog\IfSporty\Domain\Model;

/**
 * ThemeConfiguration model for default ThemeConfiguration
 *
 * @package TYPO3
 * @subpackage tx_ifthemeconfiguration
 */
class ThemeConfiguration extends \Interfrog\IfThemeconfiguration\Domain\Model\ThemeConfiguration {

    /**
    *pagetitle          
    *
    *@var string
    */
    protected $pagetitle;

    /**
    *pid
    *
    *@var int
    */
    protected $maxwidth;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $pagebg;        

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $defaulttext;        
     
    /**
    *fontsize in px
    *
    *@var int
    */
    protected $fontsize;

    /**
    *determines general font
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Font
    */
    protected $generalfont;

    /**
    *fontweight          
    *
    *@var string
    */
    protected $fontweight;

    /**
    *svg logo
    *
    *@var string
    */
    protected $logo;

    /**
    *png/jpg/jpeg
    *
    *@var string
    */
    protected $logofallback;

    /**
    *width of logo
    *
    *@var int
    */
    protected $logowidth;

    /**
    *height of logo
    *
    *@var int
    */
    protected $logoheight;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $mediamenutext;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $mediamenubackground;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $mediamenuborder;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $mediamenuhinttext;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $mediamenuhintbackground;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $headerbackground;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $navtext;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $navtexthover;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $navtextactive;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $navslidecolor;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $dropdowntext;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $dropdowntexthover;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $dropdowntextactive;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $dropdownbackground;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $dropdownbackgroundhover;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $dropdownbackgroundactive;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $breadcrumbtext;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $breadcrumbtexthover;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $breadcrumbtextcurrent;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $breadcrumbtextlabel;

    /**
    *pid
    *
    *@var int
    */
    protected $socialmenupid;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $socialiconcolor;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $socialiconhover;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $submenubg;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $submenuheadline;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $submenuheadlinestrokes;
    
    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $submenutext;
 
     /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $submenuhover;  

     /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $submenustrokes;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $offcanvasopener;
    
    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $offcanvasbackground;
 
     /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $offcanvastext;  

     /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $offcanvasactive;   

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $footerlevel1;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $footerlevel2;
    
    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $footertext;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $footerbackground;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $h1;

    /**
    *font
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Font
    */
    protected $h1font;

    /**
    *h1style          
    *
    *@var string
    */
    protected $h1style;

    /**
    *h1weight          
    *
    *@var string
    */
    protected $h1weight;
    
    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $h2;

    /**
    *font
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Font
    */
    protected $h2font;

    /**
    *h2style          
    *
    *@var string
    */
    protected $h2style;

    /**
    *h2weight          
    *
    *@var string
    */
    protected $h2weight;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $h3;

    /**
    *font
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Font
    */
    protected $h3font;

    /**
    *h3style          
    *
    *@var string
    */
    protected $h3style;

    /**
    *h3weight          
    *
    *@var string
    */
    protected $h3weight;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $h4;

    /**
    *font
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Font
    */
    protected $h4font;

    /**
    *h4style          
    *
    *@var string
    */
    protected $h4style;

    /**
    *h4weight          
    *
    *@var string
    */
    protected $h4weight;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $h5;

    /**
    *font
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Font
    */
    protected $h5font;

    /**
    *h5style          
    *
    *@var string
    */
    protected $h5style;

    /**
    *h5weight          
    *
    *@var string
    */
    protected $h5weight;

    /**
    *font
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Font
    */
    protected $alternativefont;

    /**
    *alternativestyle          
    *
    *@var string
    */
    protected $alternativestyle;

    /**
    *alternativeweight          
    *
    *@var string
    */
    protected $alternativeweight;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $formfieldbackground;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $formtext;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $formlabel;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $formborder;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $formborderfocus;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $formbutton;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $formbuttonhover;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $link;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $linkhover;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $overlayboxtext;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $overlayboxbackground;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $divider;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $contentbg;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $teaserbg;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $tableborder;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $tablealternatedtext;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $tablealternatedodd;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $tablealternatedeven;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $accopenerbackground;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $accopenertext;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $accopenerhover;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $accfoldoutbackground;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $accfoldouttext;

    /**
    *copyrightheme
    *
    *@var string
    */
    protected $copyrighttheme;

	/**
	*__construct
	*
        *@param void
	*@return void
	*/

	public function __construct(){
    }
    
    /**
    *returns the pagetitle
    *
    *@return string
    */
    public function getPagetitle(){
        return $this->pagetitle;
    }

    /**
    *set the pagetitle
    *
    *@param string $pagetitle
    *@return void
    */
    public function setPagetitle($pagetitle){
        $this->pagetitle=$pagetitle;
    }

    /**
    *get the maxwidth
    *
    *@param void
    *@return int maxwidth
    */
    public function getMaxwidth(){
        return $this->maxwidth;
    }

    /**
    *set the maxwidth
    *
    *@param int $maxwidth
    *@return void
    */
    public function setMaxwidth($maxwidth){
        $this->maxwidth=$maxwidth;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getPagebg(){
        return $this->pagebg;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $pagebg
    * @return void
    */
    public function setPagebg($pagebg){
        $this->pagebg=$pagebg;
    }   

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getDefaulttext(){
        return $this->defaulttext;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $defaulttext
    * @return void
    */
    public function setDefaulttext($defaulttext){
        $this->defaulttext=$defaulttext;
    }    
    
    /**
    *set the fontsize part
    *
    *@param int $fontsize
    *@return void
    */
    public function setFontsize($fontsize){
        $this->fontsize=$fontsize;
    }

    /**
    *get the fontsize part
    *
    *@param void
    *@return int fontsize
    */
    public function getFontsize(){
        return $this->fontsize;
    }

    /**
    *returns general font
    *
    *@return Interfrog\IfThemeconfiguration\Domain\Model\Font
    */
    public function getGeneralfont(){
        return $this->generalfont;
    }

    /**
    *set the generalfont
    *
    *@param Interfrog\IfThemeconfiguration\Domain\Model\Font $generalfont
    *@return void
    */
    public function setGeneralfont($generalfont){
        $this->generalfont=$generalfont;
    }

    /**
    *returns the fontweight
    *
    *@return string
    */
    public function getFontweight(){
        return $this->fontweight;
    }

    /**
    *set the fontweight
    *
    *@param string $fontweight
    *@return void
    */
    public function setFontweight($fontweight){
        $this->fontweight=$fontweight;
    }

    /**
    * returns the logo
    * 
    * @param void
    * @return string logo
    */
    public function getLogo(){
        return $this->logo;
    }
        
    /**
    * set the logo
    * 
    * @param string $logo the new logo
    * @return void
    */
    public function setLogo($logo){
        $this->logo=$logo;
    }

    /**
    * returns the logofallback
    * 
    * @param void
    * @return string logo
    */
    public function getLogofallback(){
        return $this->logofallback;
    }
        
    /**
    * set the logofallback
    * 
    * @param string $logofallback the new logofallback
    * @return void
    */
    public function setLogofallback($logofallback){
        $this->logofallback=$logofallback;
    }

    /**
    *get the logo width
    *
    *@param void
    *@return int logowidth
    */
    public function getLogowidth(){
        return $this->logowidth;
    }

    /**
    *set the logo width
    *
    *@param int $red
    *@return void
    */
    public function setLogowidth($logowidth=0){
        $this->logowidth=$logowidth;
    }

    /**
    *get the logo height
    *
    *@param void
    *@return int logoheight
    */
    public function getLogoheight(){
        return $this->logoheight;
    }

    /**
    *set the logo height
    *
    *@param int $logoheight
    *@return void
    */
    public function setLogoheight($logoheight=0){
        $this->logoheight=$logoheight;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getMediamenutext(){
        return $this->mediamenutext;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $mediamenutext
    * @return void
    */
    public function setMediamenutext($mediamenutext){
        $this->mediamenutext=$mediamenutext;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getMediamenubackground(){
        return $this->mediamenubackground;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $mediamenubackground
    * @return void
    */
    public function setMediamenubackground($mediamenubackground){
        $this->mediamenubackground=$mediamenubackground;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getMediamenuborder(){
        return $this->mediamenuborder;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $mediamenuborder
    * @return void
    */
    public function setMediamenuborder($mediamenuborder){
        $this->mediamenuborder=$mediamenuborder;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getMediamenuhinttext(){
        return $this->mediamenuhinttext;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $mediamenuhinttext
    * @return void
    */
    public function setMediamenuhinttext($mediamenuhinttext){
        $this->mediamenuhinttext=$mediamenuhinttext;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getmediamenuhintbackground(){
        return $this->mediamenuhintbackground;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $mediamenuhintbackground
    * @return void
    */
    public function setMediamenuhintbackground($mediamenuhintbackground){
        $this->mediamenuhintbackground=$mediamenuhintbackground;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getHeaderbackground(){
        return $this->headerbackground;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $headerbackground
    * @return void
    */
    public function setHeaderbackground($headerbackground){
        $this->headerbackground=$headerbackground;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getNavtext(){
        return $this->navtext;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $navtext
    * @return void
    */
    public function setNavtext($navtext){
        $this->navtext=$navtext;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getNavtexthover(){
        return $this->navtexthover;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $navtexthover
    * @return void
    */
    public function setNavtexthover($navtexthover){
        $this->navtexthover=$navtexthover;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getNavtextactive(){
        return $this->navtextactive;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $navtextactive
    * @return void
    */
    public function setNavtextactive($navtextactive){
        $this->navtextactive=$navtextactive;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getNavslidecolor(){
        return $this->navslidecolor;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $navslidecolor
    * @return void
    */
    public function setNavslidecolor($navslidecolor){
        $this->navslidecolor=$navslidecolor;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getDropdowntext(){
        return $this->dropdowntext;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $dropdowntext
    * @return void
    */
    public function setDropdowntext($dropdowntext){
        $this->dropdowntext=$dropdowntext;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getDropdowntexthover(){
        return $this->dropdowntexthover;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $dropdowntexthover
    * @return void
    */
    public function setDropdowntexthover($dropdowntexthover){
        $this->dropdowntexthover=$dropdowntexthover;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getDropdowntextactive(){
        return $this->dropdowntextactive;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $dropdowntextactive
    * @return void
    */
    public function setDropdowntextactive($dropdowntextactive){
        $this->dropdowntextactive=$dropdowntextactive;
    }

     /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getDropdownbackground(){
        return $this->dropdownbackground;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $dropdownbackground
    * @return void
    */
    public function setDropdownbackground($dropdownbackground){
        $this->dropdownbackground=$dropdownbackground;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getDropdownbackgroundhover(){
        return $this->dropdownbackgroundhover;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $dropdownbackgroundhover
    * @return void
    */
    public function setDropdownbackgroundhover($dropdownbackgroundhover){
        $this->dropdownbackgroundhover=$dropdownbackgroundhover;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getDropdownbackgroundactive(){
        return $this->dropdownbackgroundactive;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $dropdownbackgroundactive
    * @return void
    */
    public function setDropdownbackgroundactive($dropdownbackgroundactive){
        $this->dropdownbackgroundactive=$dropdownbackgroundactive;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getBreadcrumbtext(){
        return $this->breadcrumbtext;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $breadcrumbtext
    * @return void
    */
    public function setBreadcrumbtext($breadcrumbtext){
        $this->breadcrumbtext=$breadcrumbtext;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getBreadcrumbtexthover(){
        return $this->breadcrumbtexthover;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $breadcrumbtexthover
    * @return void
    */
    public function setBreadcrumbtexthover($breadcrumbtexthover){
        $this->breadcrumbtexthover=$breadcrumbtexthover;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getBreadcrumbtextcurrent(){
        return $this->breadcrumbtextcurrent;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $breadcrumbtextcurrent
    * @return void
    */
    public function setBreadcrumbtextcurrent($breadcrumbtextcurrent){
        $this->breadcrumbtextcurrent=$breadcrumbtextcurrent;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getBreadcrumbtextlabel(){
        return $this->breadcrumbtextlabel;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $breadcrumbtextlabel
    * @return void
    */
    public function setBreadcrumbtextlabel($breadcrumbtextlabel){
        $this->breadcrumbtextlabel=$breadcrumbtextlabel;
    }

    /**
    *get the pid
    *
    *@param void
    *@return int socialmenupid
    */
    public function getSocialmenupid(){
        return $this->socialmenupid;
    }

    /**
    *set the pid
    *
    *@param int $red
    *@return void
    */
    public function setSocialmenupid($socialmenupid){
        $this->socialmenupid=$socialmenupid;
    }

     /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getSocialiconcolor(){
        return $this->socialiconcolor;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $socialiconcolor
    * @return void
    */
    public function setSocialiconcolor($socialiconcolor){
        $this->socialiconcolor=$socialiconcolor;
    }

     /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getSocialiconhover(){
        return $this->socialiconhover;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $socialiconhover
    * @return void
    */
    public function setSocialiconhover($socialiconhover){
        $this->socialiconhover=$socialiconhover;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getSubmenubg(){
        return $this->submenubg;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $submenubg
    * @return void
    */
    public function setSubmenubg($submenubg){
        $this->submenubg=$submenubg;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getSubmenuheadline(){
        return $this->submenuheadline;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $submenuheadline
    * @return void
    */
    public function setSubmenuheadline($submenuheadline){
        $this->submenuheadline=$submenuheadline;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getSubmenuheadlinestrokes(){
        return $this->submenuheadlinestrokes;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $submenuheadlinestrokes
    * @return void
    */
    public function setSubmenuheadlinestrokes($submenuheadlinestrokes){
        $this->submenuheadlinestrokes=$submenuheadlinestrokes;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getSubmenutext(){
        return $this->submenutext;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $submenutext
    * @return void
    */
    public function setSubmenutext($submenutext){
        $this->submenutext=$submenutext;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getSubmenuhover(){
        return $this->submenuhover;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $submenuhover
    * @return void
    */
    public function setSubmenuhover($submenuhover){
        $this->submenuhover=$submenuhover;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getSubmenustrokes(){
        return $this->submenustrokes;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $submenustrokes
    * @return void
    */
    public function setSubmenustrokes($submenustrokes){
        $this->submenustrokes=$submenustrokes;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getOffcanvasopener(){
        return $this->offcanvasopener;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $offcanvasopener
    * @return void
    */
    public function setOffcanvasopener($offcanvasopener){
        $this->offcanvasopener=$offcanvasopener;
    }    

     /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getOffcanvasbackground(){
        return $this->offcanvasbackground;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $offcanvasbackground
    * @return void
    */
    public function setOffcanvasbackground($offcanvasbackground){
        $this->offcanvasbackground=$offcanvasbackground;
    }    
 
      /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getOffcanvastext(){
        return $this->offcanvastext;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $offcanvastext
    * @return void
    */
    public function setOffcanvastext($offcanvastext){
        $this->offcanvastext=$offcanvastext;
    }   

      /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getOffcanvasactive(){
        return $this->offcanvasactive;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $offcanvasactive
    * @return void
    */
    public function setOffcanvasactive($offcanvasactive){
        $this->offcanvasactive=$offcanvasactive;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getFooterlevel1(){
        return $this->footerlevel1;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $footerlevel1
    * @return void
    */
    public function setFooterlevel1($footerlevel1){
        $this->footerlevel1=$footerlevel1;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getFooterlevel2(){
        return $this->footerlevel2;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $footerlevel2
    * @return void
    */
    public function setFooterlevel2($footerlevel2){
        $this->footerlevel2=$footerlevel2;
    }
    
    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getFootertext(){
        return $this->footertext;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $footertext
    * @return void
    */
    public function setFootertext($footertext){
        $this->footertext=$footertext;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getFooterbackground(){
        return $this->footerbackground;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $footerbackground
    * @return void
    */
    public function setFooterbackground($footerbackground){
        $this->footerbackground=$footerbackground;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getH1(){
        return $this->h1;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $h1
    * @return void
    */
    public function setH1($h1){
        $this->h1=$h1;
    }

    /**
    * h1font
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Font
    */
    public function getH1font(){
        return $this->h1font;
    }

    /**
    * set the h1font
    *
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Font $h1font
    * @return void
    */
    public function setH1font($h1font){
        $this->h1font=$h1font;
    }

    /**
    *returns the h1style
    *
    *@return string
    */
    public function getH1style(){
        return $this->h1style;
    }

    /**
    *set the h1style
    *
    *@param string $h1style
    *@return void
    */
    public function setH1style($h1style){
        $this->h1style=$h1style;
    }

    /**
    *returns the h1weight
    *
    *@return string
    */
    public function getH1weight(){
        return $this->h1weight;
    }

    /**
    *set the h1weight
    *
    *@param string $h1weight
    *@return void
    */
    public function setH1weight($h1weight){
        $this->h1weight=$h1weight;
    } 
    
    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getH2(){
        return $this->h2;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $h1
    * @return void
    */
    public function setH2($h2){
        $this->h2=$h2;
    }

    /**
    * h2font
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Font
    */
    public function getH2font(){
        return $this->h2font;
    }

    /**
    * set the h2font
    *
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Font $h2font
    * @return void
    */
    public function setH2font($h2font){
        $this->h2font=$h2font;
    }

    /**
    *returns the h2style
    *
    *@return string
    */
    public function getH2style(){
        return $this->h2style;
    }

    /**
    *set the h2style
    *
    *@param string $h2style
    *@return void
    */
    public function setH2style($h2style){
        $this->h2style=$h2style;
    }

    /**
    *returns the h2weight
    *
    *@return string
    */
    public function getH2weight(){
        return $this->h2weight;
    }

    /**
    *set the h2weight
    *
    *@param string $h2weight
    *@return void
    */
    public function setH2weight($h2weight){
        $this->h2weight=$h2weight;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getH3(){
        return $this->h3;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $h1
    * @return void
    */
    public function setH3($h3){
        $this->h3=$h3;
    }

    /**
    * h3font
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Font
    */
    public function getH3font(){
        return $this->h3font;
    }

    /**
    * set the h3font
    *
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Font $h3font
    * @return void
    */
    public function setH3font($h3font){
        $this->h3font=$h3font;
    }

    /**
    *returns the h3style
    *
    *@return string
    */
    public function getH3style(){
        return $this->h3style;
    }

    /**
    *set the h3style
    *
    *@param string $h3style
    *@return void
    */
    public function setH3style($h3style){
        $this->h3style=$h3style;
    }

    /**
    *returns the h3weight
    *
    *@return string
    */
    public function getH3weight(){
        return $this->h3weight;
    }

    /**
    *set the h3weight
    *
    *@param string $h3weight
    *@return void
    */
    public function setH3weight($h3weight){
        $this->h3weight=$h3weight;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getH4(){
        return $this->h4;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $h1
    * @return void
    */
    public function setH4($h4){
        $this->h4=$h4;
    }

    /**
    * h4font
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Font
    */
    public function getH4font(){
        return $this->h4font;
    }

    /**
    * set the h4font
    *
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Font $h4font
    * @return void
    */
    public function setH4font($h4font){
        $this->h4font=$h4font;
    }

    /**
    *returns the h4style
    *
    *@return string
    */
    public function getH4style(){
        return $this->h4style;
    }

    /**
    *set the h4style
    *
    *@param string $h4style
    *@return void
    */
    public function setH4style($h4style){
        $this->h4style=$h4style;
    }

    /**
    *returns the h4weight
    *
    *@return string
    */
    public function getH4weight(){
        return $this->h4weight;
    }

    /**
    *set the h4weight
    *
    *@param string $h4weight
    *@return void
    */
    public function setH4weight($h4weight){
        $this->h4weight=$h4weight;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getH5(){
        return $this->h5;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $h1
    * @return void
    */
    public function setH5($h5){
        $this->h5=$h5;
    }

    /**
    * h5font
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Font
    */
    public function getH5font(){
        return $this->h5font;
    }

    /**
    * set the h5font
    *
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Font $h5font
    * @return void
    */
    public function setH5font($h5font){
        $this->h5font=$h5font;
    }

    /**
    *returns the h5style
    *
    *@return string
    */
    public function getH5style(){
        return $this->h5style;
    }

    /**
    *set the h5style
    *
    *@param string $h5style
    *@return void
    */
    public function setH5style($h5style){
        $this->h5style=$h5style;
    }

    /**
    *returns the h5weight
    *
    *@return string
    */
    public function getH5weight(){
        return $this->h5weight;
    }

    /**
    *set the h5weight
    *
    *@param string $h5weight
    *@return void
    */
    public function setH5weight($h5weight){
        $this->h5weight=$h5weight;
    }

/**
    * alternativefont
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Font
    */
    public function getAlternativefont(){
        return $this->alternativefont;
    }

    /**
    * set the alternativefont
    *
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Font $alternativefont
    * @return void
    */
    public function setAlternativefont($alternativefont){
        $this->alternativefont=$alternativefont;
    }

    /**
    *returns the alternativestyle
    *
    *@return string
    */
    public function getAlternativestyle(){
        return $this->alternativestyle;
    }

    /**
    *set the alternativestyle
    *
    *@param string $alternativestyle
    *@return void
    */
    public function setAlternativestyle($alternativestyle){
        $this->alternativestyle=$alternativestyle;
    }

    /**
    *returns the alternativeweight
    *
    *@return string
    */
    public function getAlternativeweight(){
        return $this->alternativeweight;
    }

    /**
    *set the alternativeweight
    *
    *@param string $alternativeweight
    *@return void
    */
    public function setAlternativeweight($alternativeweight){
        $this->alternativeweight=$alternativeweight;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getFormfieldbackground(){
        return $this->formfieldbackground;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $formfieldbackground
    * @return void
    */
    public function setFormfieldbackground($formfieldbackground){
        $this->formfieldbackground=$formfieldbackground;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getFormtext(){
        return $this->formtext;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $formtext
    * @return void
    */
    public function setFormtext($formtext){
        $this->formtext=$formtext;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getFormlabel(){
        return $this->formlabel;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $formlabel
    * @return void
    */
    public function setFormlabel($formlabel){
        $this->formlabel=$formlabel;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getFormborder(){
        return $this->formborder;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $formborder
    * @return void
    */
    public function setFormborder($formborder){
        $this->formborder=$formborder;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getFormborderfocus(){
        return $this->formborderfocus;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $formborderfocus
    * @return void
    */
    public function setFormborderfocus($formborderfocus){
        $this->formborderfocus=$formborderfocus;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getFormbutton(){
        return $this->formbutton;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $formbutton
    * @return void
    */
    public function setFormbutton($formbutton){
        $this->formbutton=$formbutton;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getFormbuttonhover(){
        return $this->formbuttonhover;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $formbuttonhover
    * @return void
    */
    public function setFormbuttonhover($formbuttonhover){
        $this->formbuttonhover=$formbuttonhover;
    } 

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getOverlayboxtext(){
        return $this->overlayboxtext;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $h1
    * @return void
    */
    public function setOverlayboxtext($overlayboxtext){
        $this->overlayboxtext=$overlayboxtext;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getLink(){
        return $this->link;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $h1
    * @return void
    */
    public function setLink($link){
        $this->link=$link;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getLinkhover(){
        return $this->linkhover;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $h1
    * @return void
    */
    public function setLinkhover($linkhover){
        $this->linkhover=$linkhover;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getDivider(){
        return $this->divider;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $divider
    * @return void
    */
    public function setDivider($divider){
        $this->divider=$divider;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getContentbg(){
        return $this->contentbg;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $contentbg
    * @return void
    */
    public function setContentbg($contentbg){
        $this->contentbg=$contentbg;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getTeaserbg(){
        return $this->teaserbg;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $teaserbg
    * @return void
    */
    public function setTeaserbg($teaserbg){
        $this->teaserbg=$teaserbg;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getTableborder(){
        return $this->tableborder;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $tableborder
    * @return void
    */
    public function setTableborder($tableborder){
        $this->tableborder=$tableborder;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getTablealternatedtext(){
        return $this->tablealternatedtext;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $tablealternatedtext
    * @return void
    */
    public function setTablealternatedtext($tablealternatedtext){
        $this->tablealternatedtext=$tablealternatedtext;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getTablealternatedodd(){
        return $this->tablealternatedodd;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $tablealternatedodd
    * @return void
    */
    public function setTablealternatedodd($tablealternatedodd){
        $this->tablealternatedodd=$tablealternatedodd;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getTablealternatedeven(){
        return $this->tablealternatedeven;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $tablealternatedeven
    * @return void
    */
    public function setTablealternatedeven($tablealternatedeven){
        $this->tablealternatedeven=$tablealternatedeven;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getAccopenerbackground(){
        return $this->accopenerbackground;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $accopenerbackground
    * @return void
    */
    public function setAccopenerbackground($accopenerbackground){
        $this->accopenerbackground=$accopenerbackground;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getAccopenertext(){
        return $this->accopenertext;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $accopenertext
    * @return void
    */
    public function setAccopenertext($accopenertext){
        $this->accopenertext=$accopenertext;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getAccopenerhover(){
        return $this->accopenerhover;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $accopenerhover
    * @return void
    */
    public function setAccopenerhover($accopenerhover){
        $this->accopenerhover=$accopenerhover;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getAccfoldoutbackground(){
        return $this->accfoldoutbackground;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $accfoldoutbackground
    * @return void
    */
    public function setAccfoldoutbackground($accfoldoutbackground){
        $this->accfoldoutbackground=$accfoldoutbackground;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getAccfoldouttext(){
        return $this->accfoldouttext;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $accfoldouttext
    * @return void
    */
    public function setAccfoldouttext($accfoldouttext){
        $this->accfoldouttext=$accfoldouttext;
    }

    /**
    * returns the copyrighttheme
    * 
    * @param void
    * @return string type of copyrighttheme
    */
    public function getCopyrighttheme(){
        return $this->copyrighttheme;
    }

    /**
    * set the copyrighttheme
    * 
    * @param string $copyrighttheme the new copyrighttheme
    * @return void
    */
    public function setCopyrighttheme($copyrighttheme){
        $this->copyrighttheme=$copyrighttheme;
    }
}
?>