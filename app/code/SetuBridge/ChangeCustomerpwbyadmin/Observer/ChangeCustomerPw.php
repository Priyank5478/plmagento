<?php
/**
* Setubridge Technolabs
* http://www.setubridge.com/
* @author SetuBridge
* @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
*/
namespace SetuBridge\ChangeCustomerpwbyadmin\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Exception\LocalizedException;
class ChangeCustomerPw implements ObserverInterface
{
    /**
    * @var \Magento\Framework\App\RequestInterface
    */
    protected $request;
    protected $authSession;
    protected $messageManager;
    public function __construct(
        \Magento\Framework\App\RequestInterface $request,
        \Magento\Backend\Model\Auth\Session $authSession,
        \Magento\Framework\Message\ManagerInterface $messageManager

    ) {
        $this->request = $request;
        $this->authSession = $authSession;
        $this->messageManager = $messageManager;
    }
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        try {

            $writer = new \Zend_Log_Writer_Stream(BP . '/var/log/custom.log');
            $logger = new \Zend_Log();
            $logger->addWriter($writer);
            $logger->info('text message');

            $passwordManagement = $this->request->getParam('customer');
            if (!empty($passwordManagement) && is_array($passwordManagement)) {
                $passwordManagement = $passwordManagement['password_management'] ?? null;
                if (!empty($passwordManagement) && !empty($passwordManagement['new_password'])) {
                    $customer=$observer->getEvent()->getCustomer();
                    $logger->info('customer ==>'.json_encode($customer->getData()));

                    if($this->getCurrentUser()->verifyIdentity($passwordManagement['current_user_password'])){
                        $customer->setPassword($passwordManagement['new_password']); 
                    }else{
                        $this->messageManager->addErrorMessage(__('Current User Identity Verification failed'));
                    }
                }
            }
        } catch (LocalizedException $e) {
            throw $e;
        }
    }
    private function getCurrentUser()
    {
        return $this->authSession->getUser();
    }

}
