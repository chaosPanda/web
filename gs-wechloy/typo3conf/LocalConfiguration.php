<?php
return array(
	'BE' => array(
		'disable_exec_function' => 0,
		'installToolPassword' => 'bacb98acf97e0b6112b1d1b650b84971',
		'loginSecurityLevel' => 'rsa',
	),
	'DB' => array(
		'database' => 'gs_wechloy',
		'extTablesDefinitionScript' => 'extTables.php',
		'host' => 'localhost',
		'password' => 'root',
		'username' => 'root',
	),
	'EXT' => array(
		'extConf' => array(
			'saltedpasswords' => 'a:2:{s:3:"FE.";a:2:{s:7:"enabled";s:1:"1";s:21:"saltedPWHashingMethod";s:28:"tx_saltedpasswords_salts_md5";}s:3:"BE.";a:2:{s:7:"enabled";s:1:"1";s:21:"saltedPWHashingMethod";s:28:"tx_saltedpasswords_salts_md5";}}',
			'static_info_tables' => 'a:1:{s:7:"charset";s:5:"utf-8";}',
			'templavoila' => 'a:3:{s:7:"enable.";a:3:{s:13:"oldPageModule";s:1:"0";s:19:"selectDataStructure";s:1:"0";s:15:"renderFCEHeader";s:1:"0";}s:9:"staticDS.";a:3:{s:6:"enable";s:1:"0";s:8:"path_fce";s:27:"fileadmin/templates/ds/fce/";s:9:"path_page";s:28:"fileadmin/templates/ds/page/";}s:13:"updateMessage";s:1:"0";}',
		),
		'extListArray' => array(
			'info',
			'perm',
			'func',
			'filelist',
			'about',
			'version',
			'tsconfig_help',
			'context_help',
			'extra_page_cm_options',
			'impexp',
			'sys_note',
			'tstemplate',
			'tstemplate_ceditor',
			'tstemplate_info',
			'tstemplate_objbrowser',
			'tstemplate_analyzer',
			'func_wizards',
			'wizard_crpages',
			'wizard_sortpages',
			'lowlevel',
			'install',
			'belog',
			'beuser',
			'aboutmodules',
			'setup',
			'taskcenter',
			'info_pagetsconfig',
			'viewpage',
			'rtehtmlarea',
			'css_styled_content',
			't3skin',
			't3editor',
			'reports',
			'felogin',
			'form',
			'introduction',
			'rsaauth',
			'saltedpasswords',
			'templavoila',
			'static_info_tables',
		),
	),
	'FE' => array(
		'loginSecurityLevel' => 'rsa',
	),
	'GFX' => array(
		'gdlib_png' => 0,
		'im' => 0,
		'im_combine_filename' => '',
		'im_path' => '',
		'im_path_lzw' => '',
	),
	'SYS' => array(
		'compat_version' => '6.0',
		'encryptionKey' => '2c7ca690c96a9eaade0133eac644df95914fcdafe9101708360b816d25a5ded39b068f250f5354e32b223bed8f6c0b0d',
		'sitename' => 'gs-wechloy',
	),
);
?>