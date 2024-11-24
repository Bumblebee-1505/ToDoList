start:
	@composer install
	@composer dump-autoload
	@composer start

php-cs:
	@./vendor/bin/php-cs-fixer fix --verbose