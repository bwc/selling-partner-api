<?php
/**
 * ProductPricingV20220501Api
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApiV5
 */

/**
 * Selling Partner API for Pricing
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer pricing information for Amazon Marketplace products. For more information, see the [Product Pricing v2022-05-01 Use Case Guide](https://developer-docs.amazon.com/sp-api/docs/product-pricing-api-v2022-05-01-use-case-guide).
 *
 * The version of the OpenAPI document: 2022-05-01
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
 * ProductPricingV20220501Api Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApiV5
 */
class ProductPricingV20220501Api extends BaseApi
{
    /**
     * Operation getFeaturedOfferExpectedPriceBatch
     *
     * @param  \SellingPartnerApiV5\Model\ProductPricingV20220501\GetFeaturedOfferExpectedPriceBatchRequest $get_featured_offer_expected_price_batch_request_body get_featured_offer_expected_price_batch_request_body (required)
     *
     * @throws \SellingPartnerApiV5\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SellingPartnerApiV5\Model\ProductPricingV20220501\GetFeaturedOfferExpectedPriceBatchResponse
     */
    public function getFeaturedOfferExpectedPriceBatch($get_featured_offer_expected_price_batch_request_body)
    {
        $response = $this->getFeaturedOfferExpectedPriceBatchWithHttpInfo($get_featured_offer_expected_price_batch_request_body);
        return $response;
    }

    /**
     * Operation getFeaturedOfferExpectedPriceBatchWithHttpInfo
     *
     * @param  \SellingPartnerApiV5\Model\ProductPricingV20220501\GetFeaturedOfferExpectedPriceBatchRequest $get_featured_offer_expected_price_batch_request_body (required)
     *
     * @throws \SellingPartnerApiV5\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SellingPartnerApiV5\Model\ProductPricingV20220501\GetFeaturedOfferExpectedPriceBatchResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getFeaturedOfferExpectedPriceBatchWithHttpInfo($get_featured_offer_expected_price_batch_request_body)
    {
        $request = $this->getFeaturedOfferExpectedPriceBatchRequest($get_featured_offer_expected_price_batch_request_body);
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
                case 200:
                    if ('\SellingPartnerApiV5\Model\ProductPricingV20220501\GetFeaturedOfferExpectedPriceBatchResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\SellingPartnerApiV5\Model\ProductPricingV20220501\GetFeaturedOfferExpectedPriceBatchResponse', $response->getHeaders());
                case 400:
                    if ('\SellingPartnerApiV5\Model\ProductPricingV20220501\Errors' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\SellingPartnerApiV5\Model\ProductPricingV20220501\Errors', $response->getHeaders());
                case 401:
                    if ('\SellingPartnerApiV5\Model\ProductPricingV20220501\Errors' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\SellingPartnerApiV5\Model\ProductPricingV20220501\Errors', $response->getHeaders());
                case 403:
                    if ('\SellingPartnerApiV5\Model\ProductPricingV20220501\Errors' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\SellingPartnerApiV5\Model\ProductPricingV20220501\Errors', $response->getHeaders());
                case 404:
                    if ('\SellingPartnerApiV5\Model\ProductPricingV20220501\Errors' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\SellingPartnerApiV5\Model\ProductPricingV20220501\Errors', $response->getHeaders());
                case 429:
                    if ('\SellingPartnerApiV5\Model\ProductPricingV20220501\Errors' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\SellingPartnerApiV5\Model\ProductPricingV20220501\Errors', $response->getHeaders());
                case 500:
                    if ('\SellingPartnerApiV5\Model\ProductPricingV20220501\Errors' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\SellingPartnerApiV5\Model\ProductPricingV20220501\Errors', $response->getHeaders());
                case 503:
                    if ('\SellingPartnerApiV5\Model\ProductPricingV20220501\Errors' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\SellingPartnerApiV5\Model\ProductPricingV20220501\Errors', $response->getHeaders());
            }

            $returnType = '\SellingPartnerApiV5\Model\ProductPricingV20220501\GetFeaturedOfferExpectedPriceBatchResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return ObjectSerializer::deserialize($content, $returnType, $response->getHeaders());

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApiV5\Model\ProductPricingV20220501\GetFeaturedOfferExpectedPriceBatchResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApiV5\Model\ProductPricingV20220501\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApiV5\Model\ProductPricingV20220501\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApiV5\Model\ProductPricingV20220501\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApiV5\Model\ProductPricingV20220501\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApiV5\Model\ProductPricingV20220501\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApiV5\Model\ProductPricingV20220501\Errors',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApiV5\Model\ProductPricingV20220501\Errors',
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
     * Operation getFeaturedOfferExpectedPriceBatchAsync
     *
     * 
     *
     * @param  \SellingPartnerApiV5\Model\ProductPricingV20220501\GetFeaturedOfferExpectedPriceBatchRequest $get_featured_offer_expected_price_batch_request_body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFeaturedOfferExpectedPriceBatchAsync($get_featured_offer_expected_price_batch_request_body)
    {
        return $this->getFeaturedOfferExpectedPriceBatchAsyncWithHttpInfo($get_featured_offer_expected_price_batch_request_body);
    }

    /**
     * Operation getFeaturedOfferExpectedPriceBatchAsyncWithHttpInfo
     *
     * 
     *
     * @param  \SellingPartnerApiV5\Model\ProductPricingV20220501\GetFeaturedOfferExpectedPriceBatchRequest $get_featured_offer_expected_price_batch_request_body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFeaturedOfferExpectedPriceBatchAsyncWithHttpInfo($get_featured_offer_expected_price_batch_request_body)
    {
        $returnType = '\SellingPartnerApiV5\Model\ProductPricingV20220501\GetFeaturedOfferExpectedPriceBatchResponse';
        $request = $this->getFeaturedOfferExpectedPriceBatchRequest($get_featured_offer_expected_price_batch_request_body);
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
     * Create request for operation 'getFeaturedOfferExpectedPriceBatch'
     *
     * @param  \SellingPartnerApiV5\Model\ProductPricingV20220501\GetFeaturedOfferExpectedPriceBatchRequest $get_featured_offer_expected_price_batch_request_body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getFeaturedOfferExpectedPriceBatchRequest($get_featured_offer_expected_price_batch_request_body)
    {
        // verify the required parameter 'get_featured_offer_expected_price_batch_request_body' is set
        if ($get_featured_offer_expected_price_batch_request_body === null || (is_array($get_featured_offer_expected_price_batch_request_body) && count($get_featured_offer_expected_price_batch_request_body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $get_featured_offer_expected_price_batch_request_body when calling getFeaturedOfferExpectedPriceBatch'
            );
        }

        $resourcePath = '/batches/products/pricing/2022-05-01/offer/featuredOfferExpectedPrice';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

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
        if (isset($get_featured_offer_expected_price_batch_request_body)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($get_featured_offer_expected_price_batch_request_body));
            } else {
                $httpBody = $get_featured_offer_expected_price_batch_request_body;
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
