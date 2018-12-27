<?php

if (\extension_loaded('xdebug')) {
    \xdebug_set_filter(XDEBUG_FILTER_CODE_COVERAGE, XDEBUG_PATH_WHITELIST, [
        realpath(sprintf('%s/../../src/', __DIR__))
      ]
    );
}

require sprintf('%s/../../vendor/autoload.php', __DIR__);
