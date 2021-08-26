<?php
defined('TYPO3_MODE') or die();

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['tt_news']['extraItemMarkerHook'][] = \RG\ExtendNews\TtNewsHooks::class;
//$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['tt_news']['extraCodesHook'][] = \RG\ExtendNews\TtNewsHooks::class;
