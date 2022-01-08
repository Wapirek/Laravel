<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>



## Projekt forum

Jędrzej M.

## Jak postawić
<pre>
myapp - 127.0.0.1:3000
mariadb - 172.18.0.2:3306

Terminal 1
    git clone https://github.com/Wapirek/Laravel.git
    cd Laravel
    sudo docker-compose up - wywali błąd ale zostawiamy nie zamykamy

Terminal 2
        docker exec -it laravel_mariadb_1 bash
        mysql -u root
        --tworzymy baze danych o nazwie laravel
        create database laravel character set utf8 collate utf8_polish_ci; 
        -- wydzimy 
        exit
Terminal 1
    --wyłączamy dockera
    ctrl+c
    --uruchamiamy ponownie
    sudo docker-compose up
    
Terminal 3
    docker exec -it laravel_myapp_1 bash
    composer i
    php artisan migrate
    cp .env.example .env
Pora wgrać przykładową baze to jakis tam klient sql odpalacz i łaczyś po ip 172.18.0.2:3306
i wrzycamy bazę przykładową 
</pre>
