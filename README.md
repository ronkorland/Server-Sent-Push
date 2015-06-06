Installation
============

Install Apache:
	yum install httpd
	service httpd start

Install PHP:
	yum install php
	service httpd restart
	
Install phpredis:
	git clone https://github.com/phpredis/phpredis
	cd phpredis
	phpize
	./configure
	make
	make install

Usage
=====

1. Click on 'Send notification' button

2. Send message in redis:
  
	127.0.0.1:6379>rpush message '{"title":"hello","message":"hello message","url":"http:\/\/www.google.com"}'

