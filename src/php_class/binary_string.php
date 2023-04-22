<?php

namespace src\php_class;
class BinaryString
{
    private function __construct(private string $bits)
    {
    }

    public static function fromHex(string $hex): self
    {
        return new self(hex2bin($hex));
    }

    public static function fromBase64(string $b64): self
    {
        return new self(base64_decode($b64));
    }

    public function __toString(): string
    {
        return bin2hex($this->bits);
    }
}

$rawData = '48656c6c6f20776f726c6421';
$binary = BinaryString::fromHex($rawData);
