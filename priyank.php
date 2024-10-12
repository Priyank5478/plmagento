<?php

use Magento\Framework\App\Bootstrap;
use Magento\Framework\App\ObjectManager;
use Magento\Quote\Model\QuoteFactory;
use Magento\Quote\Model\ResourceModel\Quote as QuoteResource;

require __DIR__ . '/app/bootstrap.php';

$bootstrap = Bootstrap::create(BP, $_SERVER);

$customerId = 1;

$objectManager = \Magento\Framework\App\ObjectManager::getInstance();
$customerObj = $objectManager->create('Magento\Customer\Model\Customer')->load($customerId);
// $state->setAreaCode('frontend');

// Customer ID for which you want to get the quote ID
// $customerId = ; // Replace with the actual customer ID

print_r($customerObj);
// try {
//     // Initialize QuoteFactory and QuoteResource
//     $quoteFactory = $objectManager->get(QuoteFactory::class);
//     $quoteResource = $objectManager->get(QuoteResource::class);

//     // Create a quote instance and load it by customer ID
//     $quote = $quoteFactory->create();
//     $quoteResource->loadByCustomerId($quote, $customerId);

//     // Get the quote ID
//     $quoteId = $quote->getData();

//     if ($quoteId) {
//         echo 'Quote ID for customer ID ' . $customerId . ' is: ' . $quoteId . PHP_EOL;
//     } else {
//         echo 'No quote found for customer ID ' . $customerId . PHP_EOL;
//     }
// } catch (Exception $e) {
//     echo 'Error: ' . $e->getMessage() . PHP_EOL;
// }
