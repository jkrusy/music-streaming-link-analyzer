<?php

namespace JKrusy\MusicStreamingLinkAnalyzer\ProviderAnalyzers;

use JKrusy\MusicStreamingLinkAnalyzer\Enumerations\Provider;

class AmazonMusicAnalyzer extends AbstractRegexAnalyzer implements ProviderAnalyzerInterface
{
    public const REGEX = '~https://music\.amazon\.[a-z\.]{2,5}/.*~m';

    protected function getRegex(): string
    {
        return self::REGEX;
    }

    protected function getProvider(): Provider
    {
        return Provider::AMAZON_MUSIC;
    }
}
