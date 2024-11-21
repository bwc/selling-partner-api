<?php
/**
 * VendorDirectFulfillmentInventoryV1Api
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApiV5
 */

/**
 * Selling Partner API for Direct Fulfillment Inventory Updates
 *
 * The Selling Partner API for Direct Fulfillment Inventory Updates provides programmatic access to a direct fulfillment vendor's inventory updates.
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApiV5\Api;

use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use SellingPartnerApiV5\ApiException;
use SellingPartnerApiV5\ObjectSerializer;

/**
 * VendorDirectFulfillmentInventoryV1Api Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApiV5
 */
class VendorDirectFulfillmentInventoryV1Api extends BaseApi
{
    /**
     * Operation submitInventoryUpdate
     *
     * @param  string $warehouse_id Identifier for the warehouse for which to update inventory. (required)
     * @param  \SellingPartnerApiV5\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateRequest $body body (required)
     *
     * @throws \SellingPartnerApiV5\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SellingPartnerApiV5\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateResponse
     */
    public function submitInventoryUpdate($warehouse_id, $body)
    {
        $response = $this->submitInventoryUpdateWithHttpInfo($warehouse_id, $body);
        return $response;
    }

    /**
     * Operation submitInventoryUpdateWithHttpInfo
     *
     * @param  string $warehouse_id Identifier for the warehouse for which to update inventory. (required)
     * @param  \SellingPartnerApiV5\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateRequest $body (required)
     *
     * @throws \SellingPartnerApiV5\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SellingPartnerApiV5\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function submitInventoryUpdateWithHttpInfo($warehouse_id, $body)
    {
        $request = $this->submitInventoryUpdateRequest($warehouse_id, $body);
        $signedRequest = $this->config->signRequest(
            $request
        );

        $this->writeDebug($signedRequest);
        $this->writeDebug((string) $signedRequest->getBody());

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($signedRequest, $options);
                $this->writeDebug($response);
                $this->writeDebug((string) $response->getBody());
            } catch (RequestException $e) {
                $hasResponse = !empty($e->hasResponse());
                $body = (string) ($hasResponse ? $e->getResponse()->getBody() : '[NULL response]');
                $this->writeDebug($e->getResponse());
                $this->writeDebug($body);
                throw new ApiException(
                    "[{$e->getCode()}] {$body}",
                    $e->getCode(),
                    $hasResponse ? $e->getResponse()->getHeaders() : [],
                    $body
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $signedRequest->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()->getContents()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 202:
                    if ('\SellingPartnerApiV5\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\SellingPartnerApiV5\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateResponse', $response->getHeaders());
                case 400:
                    if ('\SellingPartnerApiV5\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\SellingPartnerApiV5\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateResponse', $response->getHeaders());
                case 403:
                    if ('\SellingPartnerApiV5\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\SellingPartnerApiV5\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateResponse', $response->getHeaders());
                case 404:
                    if ('\SellingPartnerApiV5\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\SellingPartnerApiV5\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateResponse', $response->getHeaders());
                case 413:
                    if ('\SellingPartnerApiV5\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\SellingPartnerApiV5\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateResponse', $response->getHeaders());
                case 415:
                    if ('\SellingPartnerApiV5\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\SellingPartnerApiV5\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateResponse', $response->getHeaders());
                case 429:
                    if ('\SellingPartnerApiV5\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\SellingPartnerApiV5\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateResponse', $response->getHeaders());
                case 500:
                    if ('\SellingPartnerApiV5\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\SellingPartnerApiV5\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateResponse', $response->getHeaders());
                case 503:
                    if ('\SellingPartnerApiV5\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\SellingPartnerApiV5\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateResponse', $response->getHeaders());
            }

            $returnType = '\SellingPartnerApiV5\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return ObjectSerializer::deserialize($content, $returnType, $response->getHeaders());

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 202:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApiV5\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApiV5\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApiV5\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApiV5\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 413:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApiV5\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 415:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApiV5\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApiV5\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApiV5\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApiV5\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            $this->writeDebug($e);
            throw $e;
        }
    }

    /**
     * Operation submitInventoryUpdateAsync
     *
     * 
     *
     * @param  string $warehouse_id Identifier for the warehouse for which to update inventory. (required)
     * @param  \SellingPartnerApiV5\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateRequest $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function submitInventoryUpdateAsync($warehouse_id, $body)
    {
        return $this->submitInventoryUpdateAsyncWithHttpInfo($warehouse_id, $body);
    }

    /**
     * Operation submitInventoryUpdateAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $warehouse_id Identifier for the warehouse for which to update inventory. (required)
     * @param  \SellingPartnerApiV5\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateRequest $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function submitInventoryUpdateAsyncWithHttpInfo($warehouse_id, $body)
    {
        $returnType = '\SellingPartnerApiV5\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateResponse';
        $request = $this->submitInventoryUpdateRequest($warehouse_id, $body);
        $signedRequest = $this->config->signRequest(
            $request
        );

        $this->writeDebug($signedRequest);
        $this->writeDebug((string) $signedRequest->getBody());

        return $this->client
            ->sendAsync($signedRequest, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $this->writeDebug($response);
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, $returnType, $response->getHeaders());
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $hasResponse = !empty($response);
                    $body = (string) ($hasResponse ? $response->getBody() : '[NULL response]');
                    $this->writeDebug($response);
                    $statusCode = $hasResponse ? $response->getStatusCode() : $exception->getCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $hasResponse ? $response->getHeaders() : [],
                        $body
                    );
                }
            );
    }

    /**
     * Create request for operation 'submitInventoryUpdate'
     *
     * @param  string $warehouse_id Identifier for the warehouse for which to update inventory. (required)
     * @param  \SellingPartnerApiV5\Model\VendorDirectFulfillmentInventoryV1\SubmitInventoryUpdateRequest $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function submitInventoryUpdateRequest($warehouse_id, $body)
    {
        // verify the required parameter 'warehouse_id' is set
        if ($warehouse_id === null || (is_array($warehouse_id) && count($warehouse_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $warehouse_id when calling submitInventoryUpdate'
            );
        }
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling submitInventoryUpdate'
            );
        }

        $resourcePath = '/vendor/directFulfillment/inventory/v1/warehouses/{warehouseId}/items';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // path params
        if ($warehouse_id !== null) {
            $resourcePath = str_replace(
                '{' . 'warehouseId' . '}',
                ObjectSerializer::toPathValue($warehouse_id),
                $resourcePath
            );
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($body)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

}
