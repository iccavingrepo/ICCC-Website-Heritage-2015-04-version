#!/bin/sh

find ../photo_archive -iname "*--thumb.jpg" | sed "s/--thumb.jpg//" | sed "s/\.\.\//\/caving\//" >  base.db

wc -l base.db | cut -f1 -d\  > basemax
