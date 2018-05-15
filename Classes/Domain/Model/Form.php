<?php
namespace Interfrog\IfSporty\Domain\Model;

use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

/**
 * Class Form
 * @package Interfrog\IfSporty\Domain\Model
 */
class Form extends \In2code\Powermail\Domain\Model\Form
{

    /**
     * pages
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Interfrog\IfSporty\Domain\Model\Page>
     */
    protected $pages;

    /**
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $pages
     * @return void
     */
    public function setPages(ObjectStorage $pages)
    {
        $this->pages = $pages;
    }

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
     */
    public function getPages()
    {
        return $this->pages;
    }
}


