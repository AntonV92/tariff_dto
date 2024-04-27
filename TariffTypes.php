<?php

namespace main;

enum TariffTypes: string
{
    case Current = 'current';
    case Archive = 'archive';
    case System = 'system';
}
