<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Pi1',
	array(
		
	),
	// non-cacheable actions
	array(
		
	)
);

if (TYPO3_MODE === 'FE') {
	/* @var $renderer t3lib_PageRenderer */
    $renderer = t3lib_div::makeInstance('t3lib_PageRenderer');
	$renderer->addMetaTag('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
    // $renderer->addCssFile(t3lib_extMgm::siteRelPath($_EXTKEY) . 'Resources/Public/Css/seo.css');
	// append as last
    $renderer->addHeaderData('<link rel="stylesheet" type="text/css" href="typo3conf/ext/hriyaml/Resources/Public/Css/mobile.css" media="all" />');
}


?>