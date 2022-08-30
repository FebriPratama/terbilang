<?php 

namespace Riskihajar\Terbilang;

class TerbilangDB{

    protected $Angka = [
        'id' => array(
                'hyphen'      => ' ',
                'conjunction' => ' ',
                'separator'   => ' ',
                'negative'    => 'negatif ',
                'decimal'     => ' titik ',
                'prefix'      => '',
                'suffix'      => '',
                'prenum'      => 'se',
                'short' => [
                    'kilo' => 'k',
                    'million' => 'jt',
                    'billion' => 'M',
                    'trillion' => 'T'
                ],
                'dictionary'  => array(
                    0                   => 'nol',
                    1                   => 'satu',
                    2                   => 'dua',
                    3                   => 'tiga',
                    4                   => 'empat',
                    5                   => 'lima',
                    6                   => 'enam',
                    7                   => 'tujuh',
                    8                   => 'delapan',
                    9                   => 'sembilan',
                    10                  => 'sepuluh',
                    11                  => 'sebelas',
                    12                  => 'dua belas',
                    13                  => 'tiga belas',
                    14                  => 'empat belas',
                    15                  => 'lima belas',
                    16                  => 'enam belas',
                    17                  => 'tujuh belas',
                    18                  => 'delapan belas',
                    19                  => 'sembilan belas',
                    20                  => 'dua puluh',
                    30                  => 'tiga puluh',
                    40                  => 'empat puluh',
                    50                  => 'lima puluh',
                    60                  => 'enam puluh',
                    70                  => 'tujuh puluh',
                    80                  => 'delapan puluh',
                    90                  => 'sembilan puluh',
                    100                 => 'ratus',
                    1000                => 'ribu',
                    1000000             => 'juta',
                    1000000000          => 'miliar',
                    1000000000000       => 'triliun',
                    1000000000000000    => 'kuardriliun',
                    1000000000000000000 => 'kuintiliun'
                )
            ),
        'en' => array(
                'hyphen'      => '-',
                'conjunction' => ' and ',
                'separator'   => ', ',
                'negative'    => 'negative ',
                'decimal'     => ' point ',
                'prefix'      => '',
                'suffix'      => '',
                'prenum'      => '',
                'short' => [
                    'kilo' => 'k',
                    'million' => 'M',
                    'billion' => 'B',
                    'trillion' => 'T'
                ],
                'dictionary'  => array(
                    0                   => 'zero',
                    1                   => 'one',
                    2                   => 'two',
                    3                   => 'three',
                    4                   => 'four',
                    5                   => 'five',
                    6                   => 'six',
                    7                   => 'seven',
                    8                   => 'eight',
                    9                   => 'nine',
                    10                  => 'ten',
                    11                  => 'eleven',
                    12                  => 'twelve',
                    13                  => 'thirteen',
                    14                  => 'fourteen',
                    15                  => 'fifteen',
                    16                  => 'sixteen',
                    17                  => 'seventeen',
                    18                  => 'eighteen',
                    19                  => 'nineteen',
                    20                  => 'twenty',
                    30                  => 'thirty',
                    40                  => 'fourty',
                    50                  => 'fifty',
                    60                  => 'sixty',
                    70                  => 'seventy',
                    80                  => 'eighty',
                    90                  => 'ninety',
                    100                 => 'hundred',
                    1000                => 'thousand',
                    1000000             => 'million',
                    1000000000          => 'billion',
                    1000000000000       => 'trillion',
                    1000000000000000    => 'quadrillion',
                    1000000000000000000 => 'quintillion'
                )
            )
    ];

    public function getAngka($index){
        return $this->Angka[$index];
    }
}
