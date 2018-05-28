use blog;

INSERT INTO `post` 
        (`id`, `author`, `title`, `teaser`, `body`, `posted_on`) 
VALUES (NULL
        , 'Jani'
        , 'Első postom'
        , 'Ez az első posztom ebben az alkalmazásban...'
        , 'Ez az első posztom ebben az alkalmazásban, szóval remélem minden jól sül el, és mindenütt az lesz látható aminek ténylegesen láthatónak kell lennie.'
        , CURRENT_TIMESTAMP
);

INSERT INTO `post` 
        (`id`, `author`, `title`, `teaser`, `body`, `posted_on`) 
VALUES (NULL
        , 'Jani'
        , 'Második postom'
        , 'Ez egy újabb posztom ebben az alkalmazásban...'
        , 'Itt már lényegesenmásik szöveget írok majd a body-ba, mint az előzőnél írtam.'
        , CURRENT_TIMESTAMP
);