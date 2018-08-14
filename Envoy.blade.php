@servers(['web-1' => 'root@159.65.70.173', 'web-2' => 'root@159.65.78.37'])

@task('deploy', ['on' => ['web-1', 'web-2'], 'parallel' => true])
    cd /var/www/deploylaravel
    git pull origin master
    composer install --no-dev
    php artisan migrate --force
@endtask