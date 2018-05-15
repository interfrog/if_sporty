<?php
namespace Interfrog\IfSporty\Domain\Model;

/**
 * Colorsheme model for default Colorsheme
 *
 * @package TYPO3
 * @subpackage tx_ifthemeconfiguration
 */
class Colorsheme extends \Interfrog\IfThemeconfiguration\Domain\Model\Colorsheme {
    
    /**
    *newsslidebg
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $newsslidebg;

    /**
    *newsslideimagebg
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $newsslideimagebg;

    /**
    *newsslideimageopacity
    *
    *@var string
    */
    public $newsslideimageopacity;

    /**
    *strokescolor
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $strokescolor;

	/**
	*__construct
	*
    *@param void
	*@return void
	*/

	public function __construct(){
    }
    
    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getNewsslidebg(){
        return $this->newsslidebg;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $newsslidebg
    * @return void
    */
    public function setNewsslidebg($newsslidebg){
        $this->newsslidebg=$newsslidebg;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getNewsslideimagebg(){
        return $this->newsslideimagebg;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $newsslideimagebg
    * @return void
    */
    public function setNewsslideimagebg($newsslideimagebg){
        $this->newsslideimagebg=$newsslideimagebg;
    }

    /**
     * @param string $newsslideimageopacity
     * @return void
     */
    public function setNewsslideimageopacity($newsslideimageopacity) {
        $this->newsslideimageopacity = $newsslideimageopacity;
    }
    /**
     * @return string
     */
    public function getNewsslideimageopacity() {
        return $this->newsslideimageopacity;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getStrokescolor(){
        return $this->strokescolor;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $strokescolor
    * @return void
    */
    public function setStrokescolor($strokescolor){
        $this->strokescolor=$strokescolor;
    }


}
?>