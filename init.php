<?php
\Larakit\StaticFiles\Manager::package('larakit/sf-toastrjs')
    ->setSourceDir('public')
    ->usePackage('larakit/sf-larakit-js')
    ->jsPackage('js/toastr.min.js')
    ->cssPackage('css/toastr.css')
;