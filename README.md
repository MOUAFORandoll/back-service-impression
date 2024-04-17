## run lumen microservice of alertes

`docker-compose up --remove-orphans`

## open projects (run the following command)

`docker-compose exec alerte composer install`
`docker-compose exec alerte php artisan migrate:fresh --seed
docker-compose exec alerte php artisan config:clear
docker-compose exec alerte php artisan cache:clear
docker-compose exec alerte php artisan config:cache`
`http://localhost:8003/`

## access on postgresql

`docker-compose exec alerte_postgresql psql -U postgres`

/usr/bin/php8.2 artisan migrate --path=/database/migrations/2023_11_29_155911_create_demande_de_prise_en_charge_table.php
/usr/bin/php8.2 artisan migrate --path=/database/migrations/2023_12_01_162553_motifs.php
/usr/bin/php8.2 artisan migrate --path=/database/migrations/2023_12_06_001613_modifier_agenda_prestataire_table.php
/usr/bin/php8.2 artisan migrate --path=/database/migrations/2023_12_07_105701_create_agenda_prestataire_permanent_table.php
/usr/bin/php8.2 artisan migrate --path=/database/migrations/2023_12_07_105701_create_type_agenda_table.php
/usr/bin/php8.2 artisan migrate --path=/database/migrations/2023_12_07_105701_rename_agenda_prestataire_to_agenda_rendez_vous_table.php
/usr/bin/php8.2 artisan migrate --path=/database/migrations/2023_12_07_105701_rename_demande_de_prise_en_charge_to_rendez_vous_table.php
/usr/bin/php8.2 artisan migrate --path=/database/migrations/2023_12_07_111613_modifier_prestataire_table.php
/usr/bin/php8.2 artisan migrate --path=/database/migrations/2023_12_21_111613_date_debut_file_prestataire_table.php
/usr/bin/php8.2 artisan migrate --path=/database/migrations/2023_12_22_111613_add_grade_profession_prestataire_table.php

/usr/bin/php8.2 artisan db:seed --class=TypeAgendaSeeder
/usr/bin/php8.2 artisan db:seed --class=MotifSeeder

// 12/12/2023 : Seeder specialite etablissement
/usr/bin/php8.2 artisan db:seed --class=SpecialiteEtablissementUpdateSeeder

// 28/12/2023

/usr/bin/php8.2 artisan db:seed --class=PrestataireSeederNew
/usr/bin/php8.2 artisan db:seed --class=PatientCampagneSeeder

/usr/bin/php8.2 artisan db:seed --class=EtablissementDefautSeeder

/usr/bin/php8.2 artisan migrate --path=/database/migrations/2023_12_28_111613_update_rendez_vous_table.php
// sudo a2ensite redirections-medicasure.medsurlink-le-ssl.conf
/usr/bin/php8.2 artisan db:seed --class=TypeConsultationSeeder
/usr/bin/php8.2 artisan db:seed --class=EtablissementSeederNewUpdate
