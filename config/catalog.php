<?php

return [
    'nav' => [
        ['label' => 'Test', 'href' => '#test'],
        ['label' => 'Formazione', 'href' => '#formazione'],
        ['label' => 'Risorse', 'href' => '#risorse'],
        ['label' => 'Contatti', 'href' => '#contatti'],
    ],

    'categories' => [
        'Clinica e Neuropsicologia',
        'Scuola ed Età evolutiva',
        'Lavoro e Organizzazioni',
        'Formazione',
    ],

    'products' => [
        [
            'kind' => 'test', 'id' => 'mmpi-2', 'name' => 'MMPI-2',
            'author' => 'Dott.ssa Elena Rossi',
            'image' => '/images/image1.jpg',
            'category' => 'Clinica e Neuropsicologia',
            'price' => 1250, 'discount_price' => 1062.5,
            'format' => 'Cartaceo', 'age_range' => '18+ anni',
        ],
        [
            'kind' => 'test', 'id' => 'wisc-v', 'name' => 'WISC-V',
            'author' => 'Prof. Marco Bianchi',
            'image' => '/images/image2.jpg',
            'category' => 'Scuola ed Età evolutiva',
            'price' => 980, 'discount_price' => 882,
            'format' => 'Digitale', 'age_range' => '6–16 anni',
        ],
        [
            'kind' => 'test', 'id' => 'bfq-2', 'name' => 'BFQ-2',
            'author' => 'Dott. Luca Ferrari',
            'image' => '/images/image3.jpg',
            'category' => 'Lavoro e Organizzazioni',
            'price' => 215, 'discount_price' => 193.5,
            'format' => 'Digitale', 'age_range' => '12+ anni',
        ],
        [
            'kind' => 'test', 'id' => 'bdi-ii', 'name' => 'BDI-II',
            'author' => 'Dott.ssa Chiara Romano',
            'image' => '/images/image4.jpg',
            'category' => 'Clinica e Neuropsicologia',
            'price' => 340, 'discount_price' => 289,
            'format' => 'Cartaceo', 'age_range' => '13+ anni',
        ],
        [
            'kind' => 'corso', 'id' => 'corso-wais-iv',
            'name' => 'Somministrazione e scoring WAIS-IV',
            'author' => 'Prof. Andrea Conti',
            'image' => '/images/image5.jpg',
            'category' => 'Formazione',
            'price' => 450, 'discount_price' => 360,
            'format' => 'Corso online', 'start_date' => '2027-01-20',
        ],
        [
            'kind' => 'corso', 'id' => 'corso-colloquio',
            'name' => 'Il colloquio clinico in ambito peritale',
            'author' => 'Dott.ssa Giulia Marino',
            'image' => '/images/image6.jpg',
            'category' => 'Formazione',
            'price' => 1250, 'discount_price' => 1000,
            'format' => 'In presenza', 'start_date' => '2027-03-12',
        ],
        [
            'kind' => 'test', 'id' => '16pf-5', 'name' => '16PF-5',
            'author' => 'Dott. Paolo Greco',
            'image' => '/images/image4.jpg',
            'category' => 'Lavoro e Organizzazioni',
            'price' => 590, 'discount_price' => 531,
            'format' => 'Digitale', 'age_range' => '16+ anni',
        ],
        [
            'kind' => 'test', 'id' => 'mt-3-clinica', 'name' => 'Prove MT-3 Clinica',
            'author' => 'Prof.ssa Sara Colombo',
            'image' => '/images/image2.jpg',
            'category' => 'Scuola ed Età evolutiva',
            'price' => 275, 'discount_price' => 234.75,
            'format' => 'Cartaceo', 'age_range' => '8–14 anni',
        ],
    ],
];