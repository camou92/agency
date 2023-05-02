Creation du modéle property
php artisan make:model -m Property

creation controller property:
php artisan make:controller Admin\\PropertyController -r

fichier de validation:
php artisan make:request Admin\\PropertyFormRequest

les options
model: php artisan make:model -m Option

faire la liaison des bien et les optionq
=> model: php artisan make:migration CreateOptionPropertyTable
uitlisation du librairie javascript tom select

Listing
=> php artisan make:controller Homecontroller
=> php artisan make:controller PropertyController
=> php artisan make:request SearchPropertiesRequest

Formulaire de contact
=> php artisan make:request PropertyContactRequest
=> php artisan make:mail PropertyContactMail --markdown=emails.property.contact

on utilise mailhog pour tester l'envoi des emails
=> chmod +x ./MailHog_linux_amd64
on lance mailhog
=> ./MailHog_linux_amd64

Sécuriser la partie administration
=> php artisan make:controller AuthController
=> php artisan make:request LoginRequest

Upload Images
=> php artisan make:model -m Picture
ajouter le port de la connexion sur le fichier .env
lancer la commande => php artisan storage:link

Supprimer une photo
=>ajout librairie htmx
=> php artisan make:controller Admin\\PictureController

Redimensionner l'image

on installe glide:
=> composer require league/glide-laravel
on crée le controller Image
=> php artisan make:controlle ImageControlle

Supprimer sous réserves
trait: use SoftDeletes;
=> php artisan make:migration AddDeletedAtToProperties
=> php artisan migrate

Seed et factory
=> pour remplir la base de donnée
php artisan db:seed
=> pour reinitialiser la base de donnée
php artisan migrate:fresh --sedd

Créer un factory
=> php artisan make:factory PropertyFactory

Localization
=> php artisan lang:publish
=> composer require laravel-lang/common --dev --ignore-platform-reqs
=> hp artisan lang:add fr
=> aller dans app.php qui est situé sur le dossier config change local en fr

les authorisations policy
=> php artisan make:migration AddRoleToUsers
=> php artisan make:policy PropertyPolicy --model=Property
