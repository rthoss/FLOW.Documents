<?php
namespace KayStrobach\Documents\Domain\Model;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "KayStrobach.Documents". *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * @Flow\Entity
 */
class File extends FileSystemNode {

	/**
	 * @var \TYPO3\Flow\Resource\Resource
	 * @ORM\OneToOne
	 */
	protected $originalResource;

	/**
	 * @return \TYPO3\Flow\Resource\Resource
	 */
	public function getOriginalResource() {
		return $this->originalResource;
	}

	/**
	 * @param \TYPO3\Flow\Resource\Resource $originalResource
	 */
	public function setOriginalResource($originalResource) {
		$this->originalResource = $originalResource;
	}


}