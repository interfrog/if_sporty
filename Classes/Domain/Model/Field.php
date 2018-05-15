<?php
namespace Interfrog\IfSporty\Domain\Model;

/**
 * Class Field
 * @package Interfrog\IfSporty\Domain\Model
 */
class Field extends \In2code\Powermail\Domain\Model\Field {
	
	/**
	 * labelposition
	 *
	 * @var string
	 */
	protected $labelposition;
	
	/**
	 * @param string $labelposition
	 * @return void
	 */
	public function setLabelposition($labelposition) {
		$this->labelposition = $labelposition;
	}
	/**
	 * @return string
	 */
	public function getLabelposition() {
		return $this->labelposition;
	}
}