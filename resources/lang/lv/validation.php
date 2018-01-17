<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'The :attribute must be accepted.',
    'active_url'           => ':attribute nav derīga URL adrese',
    'after'                => ':attribute jābūt datumam pēc :date.',
    'after_or_equal'       => ':attribute jābūt datumam vismaz :date.',
    'alpha'                => ':attribute drīkst saturēt tikai burtus.',
    'alpha_dash'           => ':attribute drīkst saturēt tikai burtus, ciparus un domuzīmes.',
    'alpha_num'            => ':attribute drīkst saturēt tikai burtus un ciparus.',
    'array'                => ':attribute jābūt masīvam.',
    'before'               => ':attribute jābūt datumam pirms :date.',
    'before_or_equal'      => ':attribute jābūt datumam, kas mazāks vai vienāds ar :date.',
    'between'              => [
        'numeric' => ':attribute jābūt starp :min un :max.',
        'file'    => ':attribute jābūt starp :min un :max kilobaitiem.',
        'string'  => ':attribute jābūt starp :min un :max simboliem.',
        'array'   => ':attribute jābūt staro :min un :max elementiem.',
    ],
    'boolean'              => ':attribute jābūt patiesam vai nepatiesam.',
    'confirmed'            => ':attribute apstiprinājums nesakrīt.',
    'date'                 => ':attribute nav derīgs datums.',
    'date_format'          => ':attribute neatbilst formātam :format.',
    'different'            => ':attribute un :other jābūt atšķirīgiem.',
    'digits'               => ':attribute jāsastāv no :digits cipariem.',
    'digits_between'       => ':attribute jāsastāv no :min līdz :max cipariem.',
    'dimensions'           => ':attribute ir nepareiza attēla izšķirtspēja.',
    'distinct'             => ':attribute lauks ir dublikāts.',
    'email'                => ':attribute jābūt derīgai epasta adresei.',
    'exists'               => 'Izvēlētais :attribute ir nepareizs.',
    'file'                 => ':attribute jābūt failam.',
    'filled'               => ':attribute jābūt ar vērtību.',
    'image'                => ':attribute jābūt attēlam.',
    'in'                   => 'Izvēlētais :attribute ir nepareizs.',
    'in_array'             => ':attribute jābūt starp :other.',
    'integer'              => ':attribute jābūt veselam skaitlim.',
    'ip'                   => ':attribute jābūt derīgai IP adresei.',
    'ipv4'                 => ':attribute jābūt derīgai IPv4 adresei.',
    'ipv6'                 => ':attribute jābūt derīgai IPv6 adresei.',
    'json'                 => ':attribute jābūt derīgam JSON tekstam.',
    'max'                  => [
        'numeric' => ':attribute nedrīkst būt lielākam par :max.',
        'file'    => ':attribute nedrīkst būt lielākam par :max kilobaitiem.',
        'string'  => ':attribute nedrīkst būt lielākam par :max simboliem.',
        'array'   => ':attribute nedrīkst būt vairāk nekā :max elementu.',
    ],
    'mimes'                => ':attribute jāatbilst failu tipiem: :values.',
    'mimetypes'            => ':attribute jāatbilst failu tipiem: :values.',
    'min'                  => [
        'numeric' => ':attribute jābūt vismaz :min.',
        'file'    => ':attribute jābūt vismaz :min kilobaitiem.',
        'string'  => ':attribute jābūt vismaz :min simboliem.',
        'array'   => ':attribute jābūt vismaz :min elementiem.',
    ],
    'not_in'               => 'Izvēlētais :attribute ir nepareizs.',
    'numeric'              => ':attribute jābūt skaitlim.',
    'present'              => ':attribute laukam ir jābūt.',
    'regex'                => ':attribute formāts ir nepareizs.',
    'required'             => ':attribute ir obligāts.',
    'required_if'          => ':attribute ir obligāts, ja :other ir :value.',
    'required_unless'      => ':attribute ir obligāts, ja :other nav starp :values.',
    'required_with'        => ':attribute ir obligāts, ja tas ir kopā ar :values.',
    'required_with_all'    => ':attribute ir obligāts, ja ir :values.',
    'required_without'     => ':attribute ir obligāts, ja nav :values.',
    'required_without_all' => ':attribute ir obligāts, ja nav neviens no :values.',
    'same'                 => ':attribute un :other ir jāsakrīt.',
    'size'                 => [
        'numeric' => ':attribute jābūt :size.',
        'file'    => ':attribute jābūt :size kilobaitiem.',
        'string'  => ':attribute jābūt :size simboliem.',
        'array'   => ':attribute jāsatur :size elementi.',
    ],
    'string'               => ':attribute jābūt tekstam.',
    'timezone'             => ':attribute mjābūt derīgai zonai.',
    'unique'               => ':attribute jau ir aizņemts.',
    'uploaded'             => ':attribute neizdevās augšuplādēt.',
    'url'                  => ':attribute formāts ir nepareizs.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
