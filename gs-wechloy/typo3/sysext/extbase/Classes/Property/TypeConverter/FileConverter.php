<?php
namespace TYPO3\CMS\Extbase\Property\TypeConverter;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Oliver Hader <oliver.hader@typo3.org>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/
/**
 * Converter which transforms simple types to \TYPO3\CMS\Extbase\Domain\Model\File.
 *
 * @api experimental! This class is experimental and subject to change!
 */
class FileConverter extends \TYPO3\CMS\Extbase\Property\TypeConverter\AbstractFileFolderConverter implements \TYPO3\CMS\Core\SingletonInterface {

	/**
	 * @var array<string>
	 */
	protected $sourceTypes = array('integer', 'string');

	/**
	 * @var string
	 */
	protected $targetType = 'TYPO3\\CMS\\Extbase\\Domain\\Model\\File';

	/**
	 * @var string
	 */
	protected $expectedObjectType = 'TYPO3\\CMS\\Core\\Resource\\File';

	/**
	 * @param string|integer $source
	 * @return \TYPO3\CMS\Core\Resource\FileInterface|\TYPO3\CMS\Core\Resource\Folder
	 */
	protected function getObject($source) {
		return $this->fileFactory->retrieveFileOrFolderObject($source);
	}
}

?>