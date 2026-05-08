<?php

namespace KyanoDigital\WeFact\Exceptions;

use RuntimeException;

class WeFactException extends RuntimeException
{
    /**
     * @param  array<string, mixed> $apiResponse
     */
    public function __construct(
        string $message,
        protected array $apiResponse = [],
    ) {
        parent::__construct($message);
    }

    /**
     * @return array<string, mixed>
     */
    public function getApiResponse(): array
    {
        return $this->apiResponse;
    }

    /**
     * @return string[]
     */
    public function getApiErrors(): array
    {
        return (array) ($this->apiResponse['errors'] ?? []);
    }
}
