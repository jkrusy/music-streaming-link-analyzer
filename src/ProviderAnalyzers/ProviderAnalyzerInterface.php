<?php

namespace JKrusy\MusicStreamingLinkAnalyzer\ProviderAnalyzers;

use JKrusy\MusicStreamingLinkAnalyzer\Enumerations\Provider;

interface ProviderAnalyzerInterface
{
    public function analyze(string $url): false|Provider;
}
