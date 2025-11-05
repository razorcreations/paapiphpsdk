<?php
error_reporting(E_ALL ^ E_DEPRECATED);
require_once(__DIR__ . '/../vendor/autoload.php'); // change path as needed

use Amazon\ProductAdvertisingAPI\v1\com\amazon\paapi5\v1\api\DefaultApi;
use Amazon\ProductAdvertisingAPI\v1\ApiException;
use Amazon\ProductAdvertisingAPI\v1\Configuration;
use Amazon\ProductAdvertisingAPI\v1\com\amazon\paapi5\v1\SearchItemsRequest;
use Amazon\ProductAdvertisingAPI\v1\com\amazon\paapi5\v1\SearchItemsResource;
use Amazon\ProductAdvertisingAPI\v1\com\amazon\paapi5\v1\PartnerType;
use Amazon\ProductAdvertisingAPI\v1\com\amazon\paapi5\v1\ProductAdvertisingAPIClientException;
use Amazon\ProductAdvertisingAPI\v1\com\amazon\paapi5\v1\GetBrowseNodesRequest;
use Amazon\ProductAdvertisingAPI\v1\com\amazon\paapi5\v1\GetItemsRequest;
use Amazon\ProductAdvertisingAPI\v1\com\amazon\paapi5\v1\GetVariationsRequest;

/*
 * Add your credentials
 * Please add your access key here
 */
$config = new Configuration();
$config->setAccessKey('# Please add your access key here');
$config->setSecretKey('# Please add your secret key here');
$config->setHost('# Please add the host here');
$config->setRegion('# Please add the region here');

$apiInstance = new DefaultApi(new GuzzleHttp\Client(), $config);

$getBrowseNodesRequest = new GetBrowseNodesRequest();
$getBrowseNodesRequest->setPartnerTag('# Please add your partner tag (store/tracking id) here');
$getBrowseNodesRequest->setPartnerType(PartnerType::ASSOCIATES);
$getBrowseNodesRequest->setBrowseNodeIds(array("908799031"));

$getBrowseNodesResponse = $apiInstance->getBrowseNodes($getBrowseNodesRequest);

var_dump($getBrowseNodesResponse);
