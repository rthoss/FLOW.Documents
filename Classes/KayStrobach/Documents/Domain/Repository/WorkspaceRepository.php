<?php
namespace KayStrobach\Documents\Domain\Repository;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "KayStrobach.Documents". *
 *                                                                        *
 *                                                                        */

use KayStrobach\Documents\Domain\Model\Folder;
use KayStrobach\Documents\Domain\Model\Workspace;
use TYPO3\Flow\Annotations as Flow;
use TYPO3\Flow\Persistence\Repository;

/**
 * @Flow\Scope("singleton")
 */
class WorkspaceRepository extends Repository {

	// add customized methods here


    /**
     * @param Folder $folder
     * @return Workspace
     */
    public function findByRootFolder(Folder $folder) {
        $query = $this->createQuery();
        $query->matching(
            $query->equals(
                'folder',
                $folder
            )
        );
        return $query->execute()->getFirst();
    }
}