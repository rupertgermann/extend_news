<?php
namespace RG\ExtendNews;

use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

class TtNewsHooks {

    public function extraItemMarkerProcessor($markerArray, $row, $lConf, $pObj)
    {
        DebuggerUtility::var_dump(func_get_args());

        return $markerArray;
    }
}
