<?php
namespace Aws\Tnb;

use Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Telco Network Builder** service.
 * @method \Aws\Result cancelSolNetworkOperation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelSolNetworkOperationAsync(array $args = [])
 * @method \Aws\Result createSolFunctionPackage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSolFunctionPackageAsync(array $args = [])
 * @method \Aws\Result createSolNetworkInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSolNetworkInstanceAsync(array $args = [])
 * @method \Aws\Result createSolNetworkPackage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSolNetworkPackageAsync(array $args = [])
 * @method \Aws\Result deleteSolFunctionPackage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSolFunctionPackageAsync(array $args = [])
 * @method \Aws\Result deleteSolNetworkInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSolNetworkInstanceAsync(array $args = [])
 * @method \Aws\Result deleteSolNetworkPackage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSolNetworkPackageAsync(array $args = [])
 * @method \Aws\Result getSolFunctionInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSolFunctionInstanceAsync(array $args = [])
 * @method \Aws\Result getSolFunctionPackage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSolFunctionPackageAsync(array $args = [])
 * @method \Aws\Result getSolFunctionPackageContent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSolFunctionPackageContentAsync(array $args = [])
 * @method \Aws\Result getSolFunctionPackageDescriptor(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSolFunctionPackageDescriptorAsync(array $args = [])
 * @method \Aws\Result getSolNetworkInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSolNetworkInstanceAsync(array $args = [])
 * @method \Aws\Result getSolNetworkOperation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSolNetworkOperationAsync(array $args = [])
 * @method \Aws\Result getSolNetworkPackage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSolNetworkPackageAsync(array $args = [])
 * @method \Aws\Result getSolNetworkPackageContent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSolNetworkPackageContentAsync(array $args = [])
 * @method \Aws\Result getSolNetworkPackageDescriptor(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSolNetworkPackageDescriptorAsync(array $args = [])
 * @method \Aws\Result instantiateSolNetworkInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise instantiateSolNetworkInstanceAsync(array $args = [])
 * @method \Aws\Result listSolFunctionInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSolFunctionInstancesAsync(array $args = [])
 * @method \Aws\Result listSolFunctionPackages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSolFunctionPackagesAsync(array $args = [])
 * @method \Aws\Result listSolNetworkInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSolNetworkInstancesAsync(array $args = [])
 * @method \Aws\Result listSolNetworkOperations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSolNetworkOperationsAsync(array $args = [])
 * @method \Aws\Result listSolNetworkPackages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSolNetworkPackagesAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result putSolFunctionPackageContent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putSolFunctionPackageContentAsync(array $args = [])
 * @method \Aws\Result putSolNetworkPackageContent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putSolNetworkPackageContentAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result terminateSolNetworkInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise terminateSolNetworkInstanceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateSolFunctionPackage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSolFunctionPackageAsync(array $args = [])
 * @method \Aws\Result updateSolNetworkInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSolNetworkInstanceAsync(array $args = [])
 * @method \Aws\Result updateSolNetworkPackage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSolNetworkPackageAsync(array $args = [])
 * @method \Aws\Result validateSolFunctionPackageContent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise validateSolFunctionPackageContentAsync(array $args = [])
 * @method \Aws\Result validateSolNetworkPackageContent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise validateSolNetworkPackageContentAsync(array $args = [])
 */
class TnbClient extends AwsClient {}
