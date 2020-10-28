<?php
namespace Sga\OpCache\Block\Adminhtml\Cache;

class Additional extends \Magento\Backend\Block\Template
{
    public function getCleanPhpOpcacheUrl()
    {
        return $this->getUrl('sga_opcache/cache/clean');
    }
}
