create table if not exists `keys`(
`user_id` int not null default 0,
`consumer_key` tinytext,
`consumer_secret` tinytext,
`store_url` tinytext
) 
CHARACTER SET utf8 COLLATE utf8_unicode_ci;