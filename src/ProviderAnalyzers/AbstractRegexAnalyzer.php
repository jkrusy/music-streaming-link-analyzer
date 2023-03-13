<?php

namespace JKrusy\MusicStreamingLinkAnalyzer\ProviderAnalyzers;

use JKrusy\MusicStreamingLinkAnalyzer\Enumerations\Provider;

abstract class AbstractRegexAnalyzer implements ProviderAnalyzerInterface
{
    public function analyze(string $url): false|Provider
    {
        if (preg_match($this->getRegex(), $url) !== 0) {
            return $this->getProvider();
        } else {
            return false;
        }
    }

    abstract protected function getRegex(): string;

    abstract protected function getProvider(): Provider;
}
