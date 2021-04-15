<?php

return [
    'articles/([1-9]+[0-9]*)/edit' => ['ArticleController', 'edit'],
    'articles/([1-9]+[0-9]*)/delete' => ['ArticleController', 'destroy'],
    'articles/([1-9]+[0-9]*)' => ['ArticleController', 'show'],
    'articles/create' => ['ArticleController', 'create'],
    'articles' => ['ArticleController', 'index'],
];
