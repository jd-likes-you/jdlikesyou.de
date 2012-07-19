node default {
    include php
    include xdebug

    include apache
    include apache::php

    apache::vhost {'development':
        port    => 80,
        docroot => '/var/www/public/',
        options => 'Indexes MultiViews',
    }
}