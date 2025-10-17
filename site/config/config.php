<?php

return [
  'api' => [
    'basicAuth' => true,
    'allowInsecure' => false,
  ],
  'debug' => false,
  'routes' => [
      [
          'pattern' => '/',
          'action'  => function () {
              return go('/panel');
          }
      ],
  ]
];
