<?php


class CompaniesView extends View
{
    protected $page = 'companies';
    protected $form = [
        'attr' => [
            'method' => 'POST',
            'class' => 'form-search',
        ],
        'fields' => [
            'searchWhat' => [
                'label' => 'Ieškoti pagal',
                'type' => 'select',
                'option' => [
                    '0' => 'vienas',
                    '1' => 'trys',
                    '2' => 'du',
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
            'gerimai' => [
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

    ];
}