<?php
/**
 * Created by PhpStorm.
 * User: kay
 * Date: 13.12.14
 * Time: 09:22
 */

namespace KayStrobach\Documents\Controller;

use TYPO3\Flow\Annotations as Flow;

class FileController extends \TYPO3\Flow\Mvc\Controller\ActionController {

	/**
	 * @Flow\Inject
	 * @var \KayStrobach\Documents\Domain\Repository\FileRepository
	 */
	protected $fileRepository;

	/**
	 * Upload a file
	 *
	 * @param Folder $folder
	 * @param File $file
	 */
	public function addFileAction(Folder $folder, File $file) {
		$folder->addFile($file);
		$this->redirect(
				'getFolder',
				NULL,
				NULL,
				array(
						'folder' => $folder
				)
		);
	}

	/**
	 * @param File $file
	 * @return string
	 */
	public function getFileAction(File $file) {
		return $file->getContent();
	}


}