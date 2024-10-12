<?php

namespace Mageplaza\HelloWorld\Controller\Adminhtml\Post;
use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Magento\Ui\Component\MassAction\Filter;
use Mageplaza\HelloWorld\Model\PostFactory;


class MassDelete extends Action
{
    public $collectionFactory;

    public $filter;

    public function __construct(
        Context $context,
        Filter $filter,
        PostFactory $collectionFactory,
        // \Vendor\Module\Model\ArticleFactory $blogFactory
    ) {
        $this->filter = $filter;
        $this->collectionFactory = $collectionFactory;
        // $this->blogFactory = $blogFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        try {
            $collection = $this->filter->getCollection($this->collectionFactory->create());

            $count = 0;
            foreach ($collection as $model) {
                // $model = $this->blogFactory->create()->load($model->getArticleId());
                // $model->delete();
                // $count++;
            }
            $this->messageManager->addSuccess(__('A total of %1 blog(s) have been deleted.', $count));
        } catch (\Exception $e) {
            $this->messageManager->addError(__($e->getMessage()));
        }
        return $this->resultFactory->create(ResultFactory::TYPE_REDIRECT)->setPath('*/*/index');
    }

    public function _isAllowed()
    {
        return $this->_authorization->isAllowed('Vendor_Module::delete');
    }
}