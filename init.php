<?php
\Larakit\StaticFiles\Manager::package('larakit/sf-toastrjs')
    ->setSourceDir('public')
    ->jsPackage('toastr.min.js')
    ->jsPackage('toastr-init.js')
    ->cssPackage('toastr.css')
;