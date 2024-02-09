<?php

/**
 * This work, "Cheetah - https://www.cheetahwsb.com", is a derivative of "Dolphin Pro V7.4.2" by BoonEx Pty Limited - https://www.boonex.com/, used under CC-BY. "Cheetah" is licensed under CC-BY by Dean J. Bassett Jr.
 * CC-BY License - http://creativecommons.org/licenses/by/3.0/
 */

ch_import('ChWsbPrivacy');

class ChEventsPrivacy extends ChWsbPrivacy
{
    var $oModule;

    /**
     * Constructor
     */
    function __construct(&$oModule)
    {
        $this->oModule = $oModule;
        parent::__construct($oModule->_oDb->_sPrefix . 'main', 'ID', 'ResponsibleID');
    }

    /**
     * Check whethere viewer is a member of dynamic group.
     *
     * @param  mixed   $mixedGroupId   dynamic group ID.
     * @param  integer $iObjectOwnerId object owner ID.
     * @param  integer $iViewerId      viewer ID.
     * @return boolean result of operation.
     */
    function isDynamicGroupMember($mixedGroupId, $iObjectOwnerId, $iViewerId, $iObjectId)
    {
        $aDataEntry = array ('ID' => $iObjectId, 'ResponsibleID' => $iObjectOwnerId);
        if ('p' == $mixedGroupId)  // participants
            return $this->oModule->isFan ($aDataEntry, $iViewerId, true);
        elseif ('a' == $mixedGroupId) // admins only
            return $this->oModule->isEntryAdmin ($aDataEntry, $iViewerId);

        return false;
    }
}
