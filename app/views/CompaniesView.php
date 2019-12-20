<?php


class CompaniesView extends View
{
    protected $page = 'companies';
    protected $form = [
        'attr' => [
            'method' => 'GET',
            'class' => 'form-search',
        ],
        'fields' => [
            'searchWhat' => [
                'label' => 'Ieškoti pagal',
                'type' => 'select',
                'option' => [
                    'code' => 'Imones kodas',
                    'name' => 'Pavadinimas',
                    'municipality' => 'Veiklos vieta',
                ],
                'filter' => FILTER_SANITIZE_ENCODED,
                'extra' => [
                    'attr' => [
                        'class' => 'formInput',
                    ],
                ],
                'validators' => [
                    'validate_not_empty',
                ],
            ],
            'searchText' => [
                'label' => 'Radio second',
                'type' => 'text',
                'extra' => [
                    'attr' => [
                        'class' => 'formInput',
                    ],
                ],
                'validators' => [
                    'validate_not_empty',
                    'validate_chars_length_255',
                ],
            ],
        ],
        'buttons' => [
            'search' => [
                'title' => 'search',
                'extra' => [
                    'attr' => [
                        'class' => 'searchButton',
                    ],
                ],
            ],
        ],
    ];
    protected $table = [
        'attr' => [
            'class' => ''
        ],
        'thead' => [
            'attr' => [
                'class' => 'bg-secondary',
            ],
            'row' => [
                'Imones kodas',
                'Imones pavadinimas',
                'Vykdomos veiklos apskritis',
                'Daugiau info',
            ],
        ],
        'tbody' => [],
    ];

    public function setRequestedCompanies($requestedConpanies)
    {
        $this->table['tbody'] = $requestedConpanies;
    }

    public function setPage($page)
    {
        $this->page = $page;
    }

    public function setTable($table)
    {
        $this->table = $table;
    }
}