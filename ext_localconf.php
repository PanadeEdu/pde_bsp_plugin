<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'PanadeEdu.' . $_EXTKEY,
	'Bspplugin',
	array(
		'Example' => 'list',
		
	),
	// non-cacheable actions
	array(
		'Example' => 'list',
		
	)
);

?>