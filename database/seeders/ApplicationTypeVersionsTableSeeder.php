<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ApplicationTypeVersionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('application_type_versions')->delete();
        
        \DB::table('application_type_versions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'application_type_id' => 1,
                'name' => '9',
                'config_nginx' => 'server {
listen 80;
listen [::]:80;
server_name example.com;
root /srv/example.com/public;

add_header X-Frame-Options "SAMEORIGIN";
add_header X-Content-Type-Options "nosniff";

index index.php;

charset utf-8;

location / {
try_files $uri $uri/ /index.php?$query_string;
}

location = /favicon.ico { access_log off; log_not_found off; }
location = /robots.txt  { access_log off; log_not_found off; }

error_page 404 /index.php;

location ~ \\.php$ {
fastcgi_pass unix:/var/run/php/php8.0-fpm.sock;
fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
include fastcgi_params;
}

location ~ /\\.(?!well-known).* {
deny all;
}
}',
                'config_apache' => NULL,
                'created_at' => '2023-12-14 02:12:59',
                'updated_at' => '2023-12-14 02:12:59',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}