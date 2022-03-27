<?php

namespace App\Service;

class GifResultManager {
    private $successGifs = [
        'dXFKDUolyLLi8gq6Cl',
        'xNBcChLQt7s9a',
        'WQr2txk5iEYUS6Kv3d',
        'JE6xHkcUPtYs0',
        'Zai3ffKrUcLFwalDor',
        'Fl0swIvVeX2KI',
        '13rdfktDFVa7TO',
        'p7JlL9v8mH6Gup4EPU',
        '3o7ZeTmU77UlPyeR2w',
        'YTE27Vntu3q9h2jKFu',
        'NDjtmyXAAUWKQ',
        'J8FZIm9VoBU6Q',
        '8fen5LSZcHQ5O',
        'pvbPYoYgA0MoM',
        'etGPvG1Pqj9ks',
        'lExXm1vSE7zb2',
        'ytTYwIlbD1FBu',
        'Swx36wwSsU49HAnIhC',
        '6oMKugqovQnjW',
        'l0MYt5jPR6QX5pnqM',
        'blSTtZehjAZ8I',
        'AcfTF7tyikWyroP0x7',
        'kHmVOy84g8G6my09fu',
        'IwAZ6dvvvaTtdI8SD5',
        'VuHn7Q4mjKfw4',
        'WUmwGKySIjs8L7oYn9',
        'Xfnd5FTLtsBM5XbStq',
        'iBEW5Amz0ztza',
        'l2Sq5GffrCyUMEXjW',
        'czubJ08i7deuKGJE9A',
        'QBjH0bEtlZheg',
        'rJY9OQDSDXBEA',
        'MSS0COPq80x68',
        'rWbbNv8E0JBq8',
        '10D6706EHfsMLK',
        'iqZGcl1AKeHja',
    ];
    private $failureGifs = [
        'ceeN6U57leAhi',
        '98maV70oAqIZtEYqB4',
        '127Q43zLdqqyJy',
        'AauJT0w8cJoSQ',
        'j0qSbeNFuzjhXKFVSP',
        'PvOFsGmY2NT6o',
        'uhW3I8kSDyV20',
        'YTJXDIivNMPuNSMgc0',
        'fndxAZZjaqBkpZOSLl',
        'TEEgXdWIv9NU9cJJIM',
        'm8eIbBdkJK7Go',
        'lsOXYUWG04xE1plhXa',
        'I3eqHlwz8L80Hgsv0Q',
        'SH5dYg10Gpjvq',
        'fsPcMdeXPxSP6zKxCA',
        'spfi6nabVuq5y',
        'JtLrtaN4VPoKXJRKGB',
        'vPN3zK9dNL236',
        'pgcVG1K7YZG9O',
        '10QQkXs4wThaF2',
        'Nr2274DjomTsI',
        'ne3WPF18cWvMQ',
        'o8VXwSvuLXhM4',
        'l3mZrLxM4iZaQlvNe',
        'zOuRCHez5UsKY',
        'l0MYzxkg0o1tkGSaI',
        '6E5t68nFYqdKo',
        'EVbEdEW3kuu0o',
        'sRb7yNtTJAtZS',
        'Z9jqlziozpC00',
    ];

    public function getSuccessGif(): string 
    {
        return $this->successGifs[array_rand($this->successGifs)];
    }

    public function getFailureGif(): string 
    {
        return $this->failureGifs[array_rand($this->failureGifs)];
    }
}