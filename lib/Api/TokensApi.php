<?php
/**
 * TokensApi
 * PHP version 5
 *
 * @category Class
 * @package  Ashutosh\AmazonSellingPartnerAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Tokens
 *
 * The Selling Partner API for Tokens provides a secure way to access a customers's PII (Personally Identifiable Information). You can call the Tokens API to get a Restricted Data Token (RDT) for one or more restricted resources that you specify. The RDT authorizes you to make subsequent requests to access these restricted resources.
 *
 * OpenAPI spec version: 2021-03-01
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.20-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Ashutosh\AmazonSellingPartnerAPI\Api;

use GuzzleHttp\Client;
use Ashutosh\AmazonSellingPartnerAPI\Models\Tokens\CreateRestrictedDataTokenResponse;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Ashutosh\AmazonSellingPartnerAPI\ApiException;
use Ashutosh\AmazonSellingPartnerAPI\Configuration;
use Ashutosh\AmazonSellingPartnerAPI\HeaderSelector;
use Ashutosh\AmazonSellingPartnerAPI\Helpers\SellingPartnerApiRequest;
use Ashutosh\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * TokensApi Class Doc Comment
 *
 * @category Class
 * @package  Ashutosh\AmazonSellingPartnerAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TokensApi
{
    use SellingPartnerApiRequest;
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(Configuration $config) {
        $this->client = new Client();
        $this->config = $config;
        $this->headerSelector = new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation createRestrictedDataToken
     *
     * @param  \Ashutosh\AmazonSellingPartnerAPI\Models\Tokens\CreateRestrictedDataTokenRequest $body The restricted data token request details. (required)
     *
     * @throws \Ashutosh\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Ashutosh\AmazonSellingPartnerAPI\Models\Tokens\CreateRestrictedDataTokenResponse
     */
    public function createRestrictedDataToken($body)
    {
        list($response) = $this->createRestrictedDataTokenWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation createRestrictedDataTokenWithHttpInfo
     *
     * @param  \Ashutosh\AmazonSellingPartnerAPI\Models\Tokens\CreateRestrictedDataTokenRequest $body The restricted data token request details. (required)
     *
     * @throws \Ashutosh\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Ashutosh\AmazonSellingPartnerAPI\Models\Tokens\CreateRestrictedDataTokenResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createRestrictedDataTokenWithHttpInfo($body)
    {
        $request = $this->createRestrictedDataTokenRequest($body);
        return $this->sendRequest($request, CreateRestrictedDataTokenResponse::class);
    }

    /**
     * Operation createRestrictedDataTokenAsync
     *
     * 
     *
     * @param  \Ashutosh\AmazonSellingPartnerAPI\Models\Tokens\CreateRestrictedDataTokenRequest $body The restricted data token request details. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createRestrictedDataTokenAsync($body)
    {
        return $this->createRestrictedDataTokenAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createRestrictedDataTokenAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Ashutosh\AmazonSellingPartnerAPI\Models\Tokens\CreateRestrictedDataTokenRequest $body The restricted data token request details. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createRestrictedDataTokenAsyncWithHttpInfo($body)
    {
        $returnType = '\Ashutosh\AmazonSellingPartnerAPI\Models\Tokens\CreateRestrictedDataTokenResponse';
        $request = $this->createRestrictedDataTokenRequest($body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'createRestrictedDataToken'
     *
     * @param  \Ashutosh\AmazonSellingPartnerAPI\Models\Tokens\CreateRestrictedDataTokenRequest $body The restricted data token request details. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createRestrictedDataTokenRequest($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling createRestrictedDataToken'
            );
        }

        $resourcePath = '/tokens/2021-03-01/restrictedDataToken';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
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
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = build_query($formParams);
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

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
