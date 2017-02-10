<?php
/**
 * Create simple insagram blocks and widgets
 * Copyright (C) 2016 Dava Gordon
 * 
 * This file is part of Davagordon/Instafeed.
 * 
 * Davagordon/Instafeed is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

namespace Davagordon\Instafeed\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class InstaFeed extends \Magento\Framework\View\Element\Template implements \Magento\Widget\Block\BlockInterface
{

    public function _toHtml()
    {
        $this->setTemplate('widget/instaFeed.phtml');
        return parent::_toHtml();
    }

    public function getClientId()
    {
        return $this->_scopeConfig->getValue(
            'davagordon_instafeed/general/client_id',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    public function getaAuthToken()
    {
        return $this->_scopeConfig->getValue(
            'davagordon_instafeed/general/auth_token',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

}
