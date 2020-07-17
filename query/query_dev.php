<?php

$query_select_from_join_on = 'SELECT page.tag_id,tags.name FROM page INNER JOIN tags ON page.tag_id = tags.id';
$query_select_tag_page = 'SELECT tag_id FROM page';
$query_select_all_from_tags = 'SELECT * FROM tags ';
$query_select_all_page = 'SELECT * FROM page';