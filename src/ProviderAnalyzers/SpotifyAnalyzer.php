<?php

namespace JKrusy\MusicStreamingLinkAnalyzer\ProviderAnalyzers;

use JKrusy\MusicStreamingLinkAnalyzer\Enumerations\Provider;

class SpotifyAnalyzer extends AbstractRegexAnalyzer implements ProviderAnalyzerInterface
{
    public const REGEX = '~https://open\.spotify\.com/.*~m';

    protected function getRegex(): string
    {
        return self::REGEX;
    }

    protected function getProvider(): Provider
    {
        return Provider::SPOTIFY;
    }
}
