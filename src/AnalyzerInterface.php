<?php

namespace JKrusy\MusicStreamingLinkAnalyzer;

use JKrusy\MusicStreamingLinkAnalyzer\Enumerations\Provider;

interface AnalyzerInterface
{
    public function analyze(string $url): Provider;
}
