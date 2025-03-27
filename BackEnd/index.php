<?php

    header('Access-Control-Allow-Origin: *');
    $data = [
        [
            'imagem'=>'https://wasabi.e-inscricao.com/uploads/hotsite/v2/cover/thumb_1654634461_560595ad-1c6c-4acd-81f8-e86aaecb6113.jpg',
            'conteudo'=> 'O Radical SP é um evento da Igreja Batista da Cidade de São Paulo que visa impactar pessoas a tomarem atitudes que agradem a Deus. O evento acontece num final de semana no sítio da igreja'
        ],
        [
            'imagem'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShZ3n8KNxhQV4XRWUQUX29lybSa3QfpTwLig&s',
            'conteudo'=> 'Arca Church São Paulo Oficial | Igreja Na Mooca, para mover do Espirito de Deus'
        ], 
        [
            'imagem'=>'https://fedorabr.org/uploads/272J4YW93TFF/logo.png?v=2022.003',
            'conteudo'=> 'comunidadefedorabr, somos opensources livres para usar fedora linux '
        ],
    ];

    die(json_encode($data));

?>