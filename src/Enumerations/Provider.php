<?php

namespace JKrusy\MusicStreamingLinkAnalyzer\Enumerations;

enum Provider: string
{
    case UNKNOWN = 'unknown';
    case SPOTIFY = 'spotify';
    case APPLE_MUSIC = 'applemusic';
    case AMAZON_MUSIC = 'amazonmusic';
}
