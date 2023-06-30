#!/bin/bash
exec service ssh start &
exec apache2ctl -D FOREGROUND
tail -f /dev/null
exec service ssh start &
