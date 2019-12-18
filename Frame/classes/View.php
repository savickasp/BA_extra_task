<?php


class View
{
    protected $form;
    protected $headerTemplate;
    protected $footerTemplate;
    protected $page;
    protected $pageTitle;
    protected $header =  [
    'attr' => [
        'class' => 'navbar navbar-expand-lg navbar-dark bg-dark min-height-10vh',
    ],
    'containers' => [
        'menu' => [
            'attr' => [
                'class' => 'collapse navbar-collapse navbar-nav',
            ],
            'elements' => [
                'Home' => [
                    'attr' => [
                        'class' => 'nav-link',
                        'href' => ROOT_URL,
                    ],
                ],
                'Companies' => [
                    'attr' => [
                        'class' => 'nav-link',
                        'href' => ROOT_URL . '/companies',
                    ],
                ]
            ]

        ],
    ],
];
    protected $footer = [
        'attr' => [
            'class' => 'page-footer bg-dark min-height-5vh',
        ],
        'containers' => [
            'main' => [
                'attr' => [
                    'class' => 'text-center',
                ],
                'elements' => [
                    'madeBy' => [
                        'attr' => [
                            'class' => 'text-white',
                        ],
                        'text' => 'Pijus Savickas',
                    ],
                ],
            ],
        ],
    ];
    protected $page_css = [
        [
            'rel' => 'stylesheet',
            'href' => ROOT_URL . '/public/css/bootstrap-grid.min.css',
        ],
        [
            'rel' => 'stylesheet',
            'href' => ROOT_URL . '/public/css/bootstrap-reboot.min.css',
        ],
        [
            'rel' => 'stylesheet',
            'href' => ROOT_URL . '/public/css/bootstrap.min.css',
        ],
        [
            'rel' => 'stylesheet',
            'href' => ROOT_URL . '/public/css/style.css',
        ],
    ];
    protected $page_js = [
        'top' => [
            ['src' => ROOT_URL . '/public/js/jquery-3.4.1.slim.min.js',],
            ['src' => ROOT_URL . '/public/js/popper.min.js',],
            ['src' => ROOT_URL . '/public/js/bootstrap.min.js',]
        ],
        'bottom' => [

        ],
    ];

    // includes page
    public function printPage($fileName = 'page')
    {
        include ROOT . '/app/views/templates/' . $fileName . '.tmpl.php';
    }

    // setting properties
    public function setPageTitle($pageTitle)
    {
        $this->pageTitle = $pageTitle;
    }

    public function setHeader($array)
    {
        $this->header = $array;
    }

    public function setFooter($array)
    {
        $this->header = $array;
    }

    // Include page used to include content in page template
    protected function includePage()
    {
        include ROOT . '/app/views/pages/' . $this->page . '.page.php';
    }

    // used to render templates
    protected function render($templateName)
    {
        ob_start();
        include ROOT . '/app/views/templates/' . $templateName . '.tmpl.php';
        $ret = ob_get_contents();
        ob_end_clean();
        return $ret;
    }

    // prints html attributes
    protected function html_attr($array)
    {
        $stringArr = [];
        foreach ($array as $attr => $value) {
            $stringArr[] = "$attr=\"$value\"";
        }
        return implode(' ', $stringArr);
    }
}