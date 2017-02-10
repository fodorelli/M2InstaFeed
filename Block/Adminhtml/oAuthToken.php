<?php
namespace Davagordon\Instafeed\Block\Adminhtml;

use Magento\Framework\Registry;
use Magento\Backend\Block\Template\Context;

class oAuthToken extends \Magento\Config\Block\System\Config\Form\Field
{
    /**
     * @var  Registry
     */
    protected $_coreRegistry;

    /**
     * @param Context $context
     * @param Registry $coreRegistry
     * @param array $data
     */
    public function __construct(
        Context $context,
        Registry $coreRegistry,
        array $data = []
    )
    {
        $this->_coreRegistry = $coreRegistry;
        parent::__construct($context, $data);
    }

    protected function _getElementHtml(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {

        $client_id = $this->_scopeConfig->getValue(
            'davagordon_instafeed/general/client_id',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
        $client_redirect_url = $this->_scopeConfig->getValue(
            'davagordon_instafeed/general/client_redirect_url',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
        if (!empty($client_id) && !empty($client_redirect_url)):
            $html = '<a href="https://www.instagram.com/oauth/authorize/?client_id=' . $client_id . '&redirect_uri='.$client_redirect_url.'&response_type=token&scope=public_content" target="_blank">Click here to get oAuth your token</a>';
        else:
            $html = 'You must fill out the Client ID & Client URL for your oAuth link to be generated';
        endif;

        return $html;
    }
}