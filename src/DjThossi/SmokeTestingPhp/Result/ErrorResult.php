<?php
namespace DjThossi\SmokeTestingPhp\Result;

use DjThossi\SmokeTestingPhp\ValueObject\ErrorMessage;
use DjThossi\SmokeTestingPhp\ValueObject\Url;

class ErrorResult implements Result
{
    /**
     * @var Url
     */
    private $url;

    /**
     * @var ErrorMessage
     */
    private $errorMessage;

    /**
     * @param Url $url
     * @param ErrorMessage $errorMessage
     */
    public function __construct(Url $url, ErrorMessage $errorMessage)
    {
        $this->url = $url;
        $this->errorMessage = $errorMessage;
    }

    /**
     * @return string
     */
    public function asString()
    {
        return $this->errorMessage->asString();
    }

    /**
     * @return Url
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return bool
     */
    public function isValidResult()
    {
        return false;
    }

    public function getTimeToFirstByte()
    {
        throw new NotImplementedException('getTimeToFirstByte is not implemented');
    }

    public function getBody()
    {
        throw new NotImplementedException('getBody is not implemented');
    }

    public function getStatusCode()
    {
        throw new NotImplementedException('getStatusCode is not implemented');
    }
}
