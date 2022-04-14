		#!/bin/sh
	set -e
	php_script=futuruh.php

	while true; do
    	php $php_script $@
	done
