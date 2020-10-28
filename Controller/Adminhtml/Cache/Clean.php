<?php
namespace Sga\OpCache\Controller\Adminhtml\Cache;

use Magento\Framework\App\Action\HttpGetActionInterface as HttpGetActionInterface;

class Clean extends \Magento\Backend\Controller\Adminhtml\Cache implements HttpGetActionInterface
{
    /**
     * Authorization level of a basic admin session
     *
     * @see _isAllowed()
     */
    const ADMIN_RESOURCE = 'Magento_Backend::flush_cache_storage';

    /**
     * Flush cache storage
     *
     * @return \Magento\Backend\Model\View\Result\Redirect
     */
    public function execute()
    {
        opcache_reset();
        $this->messageManager->addSuccessMessage(__("PHP Opcache Reset"));

        $resultRedirect = $this->resultRedirectFactory->create();
        return $resultRedirect->setPath('adminhtml/*');
    }
}
