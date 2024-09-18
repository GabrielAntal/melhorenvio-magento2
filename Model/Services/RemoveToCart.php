<?php

namespace MelhorEnvio\Quote\Model\Services;

use Magento\Framework\Exception\LocalizedException;
use MelhorEnvio\Quote\Api\Data\HttpResponseInterface;
use MelhorEnvio\Quote\Api\ServiceInterface;
use Laminas\Http\Request as HttpRequest;

/**
 * Class RemoveToCart
 * @package MelhorEnvio\Quote\Model\Services
 */
class RemoveToCart extends AbstractService implements ServiceInterface
{
    /**
     * @inheritDoc
     */
    public function getEndpoint(): string
    {
        return $this->generateEndpoint('/api/v2/me/cart');
    }

    /**
     * @inheritDoc
     */
    public function getMethod(): string
    {
        return HttpRequest::METHOD_DELETE;
    }

    /**
     * @return HttpResponseInterface
     * @throws LocalizedException
     */
    public function doRequest(): HttpResponseInterface
    {
        return $this->httpClient->doRequest($this);
    }
}
