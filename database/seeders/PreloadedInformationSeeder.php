<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use App\Models\Image;
use App\Models\Client;
use App\Models\Project;
use App\Models\Quality;
use App\Enums\TaskStatus;
use App\Enums\ProjectType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class PreloadedInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /**
         * Qualities
         */
        Quality::factory()->create([
            'name' => 'HTML',
            'percentage' => 90,
        ]);
        Quality::factory()->create([
            'name' => 'CSS',
            'percentage' => 80,
        ]);
        Quality::factory()->create([
            'name' => 'Tailwind',
            'percentage' => 85,
        ]);
        Quality::factory()->create([
            'name' => 'JS',
            'percentage' => 20,
        ]);
        Quality::factory()->create([
            'name' => 'PHP',
            'percentage' => 80,
        ]);
        Quality::factory()->create([
            'name' => 'SQL',
            'percentage' => 60,
        ]);
        Quality::factory()->create([
            'name' => 'Laravel',
            'percentage' => 80,
        ]);
        Quality::factory()->create([
            'name' => 'Filament',
            'percentage' => 70,
        ]);

        /**
         * Users
         */
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@jasper.com',
            'password' => '@dmin',
        ]);

        /**
         * Clients
         */
        Client::factory()->create([
            'name' => 'Jasper van den Heuij',
            'description' => 'Maker van de website',
            'color' => 'rgb(50, 150, 250)',
        ]);

        /**
         * Projects
         */
        // Project 1
        Project::factory()->create([
            'id' => 1,
            'name' => 'Posty',
            'content' => 'Dit was mijn eerste project met Laravel.
Hiermee moest ik een deel van de basis leren te kennen.
Dit project is gemaakt volgens deze tutorial https://www.youtube.com/watch?v=MFh0Fd7BsjE
Deze website heeft de basis om posts te maken, liken en verwijderen',
            'type' => ProjectType::STAGE,
            'start_date' => '26-08-2024',
            'end_date' => '28-08-2024',
            'client_id' => Client::where('name', 'Jasper van den Heuij')->first()->id,
        ]);

        $this->useImage(
            'posty_1.png',
            Project::class,
            1
        );
        $this->useImage(
            'posty_2.png',
            Project::class,
            1
        );
        $this->useImage(
            'posty_3.png',
            Project::class,
            1
        );

        Task::factory()
            ->create([
                'name' => 'Models',
                'content' => 'Basis leren van hoe models en relaties werken',
                'status' => TaskStatus::DONE,
                'project_id' => 1,
            ]);
        Task::factory()
            ->create([
                'name' => 'Migrations',
                'content' => 'Basis leren van hoe migrations en die relaties werken',
                'status' => TaskStatus::DONE,
                'project_id' => 1,
            ]);
        Task::factory()
            ->create([
                'name' => 'Views',
                'content' => 'Leren wat views zijn',
                'status' => TaskStatus::DONE,
                'project_id' => 1,
            ]);
        Task::factory()
            ->create([
                'name' => 'Controllers',
                'content' => 'Leren hoe controllers werken, en
hoe ze hand in hand lopen met views',
                'status' => TaskStatus::DONE,
                'project_id' => 1,
            ]);

        //Project 2
        Project::factory()->create([
            'id' => 2,
            'name' => 'Blank to blog',
            'content' => 'De bedoeling was dat dit project weer volgens een filmpje was,
maar dan dat ik veel dingen zelf moest proberen.
https://youtu.be/Miea-1jTYl0
Dit project was wel een stuk moeilijker, omdat ik nog lang niet wist wat alles was.
Ook omdat degene die mij alles moest leren, vanaf dit project 3 weken weg was,
dus leren was moeilijker',
            'type' => ProjectType::STAGE,
            'start_date' => '28-08-2024',
            'end_date' => '30-08-2024',
            'client_id' => Client::where('name', 'Jasper van den Heuij')->first()->id,
        ]);

        $this->useImage(
            'blank_to_blog_1.png',
            Project::class,
            2
        );
        $this->useImage(
            'blank_to_blog_2.png',
            Project::class,
            2
        );
        $this->useImage(
            'blank_to_blog_3.png',
            Project::class,
            2
        );
        $this->useImage(
            'blank_to_blog_4.png',
            Project::class,
            2
        );

        Task::factory()
            ->create([
                'name' => 'Models',
                'content' => 'Verder leren van hoe models en relaties werken',
                'status' => TaskStatus::DONE,
                'project_id' => 2,
            ]);
        Task::factory()
            ->create([
                'name' => 'Migrations',
                'content' => 'Verder leren van hoe migrations en die relaties werken',
                'status' => TaskStatus::DONE,
                'project_id' => 2,
            ]);
        Task::factory()
            ->create([
                'name' => 'Views',
                'content' => 'Verder leren wat views zijn',
                'status' => TaskStatus::DONE,
                'project_id' => 2,
            ]);
        Task::factory()
            ->create([
                'name' => 'Controllers',
                'content' => 'Verder leren hoe controllers werken, en
hoe ze hand in hand lopen met views',
                'status' => TaskStatus::DONE,
                'project_id' => 2,
            ]);

        //Project 3
        Project::factory()->create([
            'id' => 3,
            'name' => '30 days to learn Laravel (deel 1)',
            'content' => 'Een filmpje volgen om de basis Laravel in 30 dagen te leren.
https://www.youtube.com/watch?v=SqTdHCTWqks',
            'type' => ProjectType::STAGE,
            'start_date' => '02-09-2024',
            'end_date' => '05-09-2024',
            'client_id' => Client::where('name', 'Jasper van den Heuij')->first()->id,
        ]);

        $this->useImage(
            'learn_laravel_in_30_days_part_1_1.png',
            Project::class,
            3
        );
        $this->useImage(
            'learn_laravel_in_30_days_part_1_2.png',
            Project::class,
            3
        );
        $this->useImage(
            'learn_laravel_in_30_days_part_1_3.png',
            Project::class,
            3
        );
        $this->useImage(
            'learn_laravel_in_30_days_part_1_4.png',
            Project::class,
            3
        );
        $this->useImage(
            'learn_laravel_in_30_days_part_1_5.png',
            Project::class,
            3
        );

        Task::factory()
            ->create([
                'name' => 'Dagen 1-10',
                'content' => 'Filmpje volgen vanaf dag 1 t/m dag 10',
                'status' => TaskStatus::DONE,
                'project_id' => 3,
            ]);
        Task::factory()
            ->create([
                'name' => 'Dagen 11-20',
                'content' => 'Filmpje volgen vanaf dag 11 t/m dag 20',
                'status' => TaskStatus::DONE,
                'project_id' => 3,
            ]);
        Task::factory()
            ->create([
                'name' => 'Dagen 21-26',
                'content' => 'Filmpje volgen vanaf dag 21 t/m dag 26',
                'status' => TaskStatus::DONE,
                'project_id' => 3,
            ]);

        //Project 4
        Project::factory()->create([
            'id' => 4,
            'name' => '30 days to learn Laravel (deel 2)',
            'content' => 'De rest van het filmpje volgen om de basis Laravel in 30 dagen te leren.
https://www.youtube.com/watch?v=SqTdHCTWqks',
            'type' => ProjectType::STAGE,
            'start_date' => '05-09-2024',
            'end_date' => '06-09-2024',
            'client_id' => Client::where('name', 'Jasper van den Heuij')->first()->id,
        ]);

        $this->useImage(
            'learn_laravel_in_30_days_part_2_1.png',
            Project::class,
            4
        );
        $this->useImage(
            'learn_laravel_in_30_days_part_2_2.png',
            Project::class,
            4
        );
        $this->useImage(
            'learn_laravel_in_30_days_part_2_3.png',
            Project::class,
            4
        );

        Task::factory()
            ->create([
                'name' => 'Dagen 27-30',
                'content' => 'Filmpje volgen vanaf dag 27 t/m dag 30',
                'status' => TaskStatus::DONE,
                'project_id' => 4,
            ]);

        //Project 5
        Project::factory()->create([
            'id' => 5,
            'name' => 'Bestelling',
            'content' => 'Een winkel systeem maken, zonder stap voor stap tutorial',
            'type' => ProjectType::STAGE,
            'start_date' => '06-09-2024',
            'end_date' => '23-09-2024',
            'client_id' => Client::where('name', 'Jasper van den Heuij')->first()->id,
        ]);

        $this->useImage(
            'bestelling_1.png',
            Project::class,
            5
        );
        $this->useImage(
            'bestelling_2.png',
            Project::class,
            5
        );
        $this->useImage(
            'bestelling_3.png',
            Project::class,
            5
        );
        $this->useImage(
            'bestelling_4.png',
            Project::class,
            5
        );
        $this->useImage(
            'bestelling_5.png',
            Project::class,
            5
        );
        $this->useImage(
            'bestelling_6.png',
            Project::class,
            5
        );
        $this->useImage(
            'bestelling_7.png',
            Project::class,
            5
        );

        Task::factory()
            ->create([
                'name' => 'Basis database',
                'content' => 'Structuur van de database ontwerpen',
                'status' => TaskStatus::DONE,
                'project_id' => 5,
            ]);
        Task::factory()
            ->create([
                'name' => "Basis pagina's",
                'content' => "De basis pagina's en route's neerleggen",
                'status' => TaskStatus::DONE,
                'project_id' => 5,
            ]);
        Task::factory()
            ->create([
                'name' => 'Werkend systeem',
                'content' => "Het systeem werkend krijgen.
Niet gelukt omdat ik niet wist wat een pivot table was, dus je kon maar 1 product 'kopen'",
                'status' => TaskStatus::HALFWAY,
                'project_id' => 5,
            ]);

        //Project 6
        Project::factory()->create([
            'id' => 6,
            'name' => 'Filament',
            'content' => 'Leren FilamentPHP te gebruiken,
volgens deze tutorial https://www.youtube.com/watch?v=ni9LVSfkCd4
Filament is een fantastische tool om je hele achterkant van website makkelijk te maken,
CRUD is automatisch ingebouwd. Je kan Filament gebruiken voor een Admin paneel
of een makkelijke overview van wat er in je database staat.',
            'type' => ProjectType::STAGE,
            'start_date' => '23-09-2024',
            'end_date' => '26-09-2024',
            'client_id' => Client::where('name', 'Jasper van den Heuij')->first()->id,
        ]);

        $this->useImage(
            'filament_1.png',
            Project::class,
            6
        );
        $this->useImage(
            'filament_2.png',
            Project::class,
            6
        );
        $this->useImage(
            'filament_3.png',
            Project::class,
            6
        );
        $this->useImage(
            'filament_4.png',
            Project::class,
            6
        );
        $this->useImage(
            'filament_5.png',
            Project::class,
            6
        );
        $this->useImage(
            'filament_6.png',
            Project::class,
            6
        );

        Task::factory()
            ->create([
                'name' => 'Tutorial volgen',
                'content' => 'https://www.youtube.com/watch?v=ni9LVSfkCd4',
                'status' => TaskStatus::DONE,
                'project_id' => 6,
            ]);
        Task::factory()
            ->create([
                'name' => 'Zelf expirimenteren',
                'content' => 'Widgets en meer',
                'status' => TaskStatus::DONE,
                'project_id' => 6,
            ]);

        //Project 7
        Project::factory()->create([
            'id' => 7,
            'name' => 'Spoiler',
            'content' => 'Project had niet uitgewerkt, maar de bedoeling was
om een spoiler log van een game uit te werken dat deze automatisch in je database geimporteerd kon worden.
Ook om handiger te zien waar een item in het spel ligt.',
            'type' => ProjectType::MYSELF,
            'start_date' => '27-09-2024',
            'end_date' => '27-09-2024',
            'client_id' => Client::where('name', 'Jasper van den Heuij')->first()->id,
        ]);

        $this->useImage(
            'spoiler_1.png',
            Project::class,
            7
        );

        Task::factory()
            ->create([
                'name' => 'JSON lezen',
                'content' => 'Een JSON bestand uitlezen',
                'status' => TaskStatus::DONE,
                'project_id' => 7,
            ]);
        Task::factory()
            ->create([
                'name' => 'Database',
                'content' => 'Database designen',
                'status' => TaskStatus::HALFWAY,
                'project_id' => 7,
            ]);
        Task::factory()
            ->create([
                'name' => 'Importeren',
                'content' => 'Importeren in DB',
                'status' => TaskStatus::NOT_STARTED,
                'project_id' => 7,
            ]);
        Task::factory()
            ->create([
                'name' => 'Frontend',
                'content' => "Pagina's maken",
                'status' => TaskStatus::NOT_STARTED,
                'project_id' => 7,
            ]);
        Task::factory()
            ->create([
                'name' => 'Logica',
                'content' => 'Alle nodige functionaliteiten maken',
                'status' => TaskStatus::NOT_STARTED,
                'project_id' => 7,
            ]);

        //Project 8
        Project::factory()->create([
            'id' => 8,
            'name' => 'Portfolio',
            'content' => 'Deze website',
            'type' => ProjectType::SCHOOL,
            'start_date' => '30-09-2024',
            'end_date' => '23-10-2024',
            'client_id' => Client::where('name', 'Jasper van den Heuij')->first()->id,
        ]);

        $this->useImage(
            'portfolio_1.png',
            Project::class,
            8
        );
        $this->useImage(
            'portfolio_2.png',
            Project::class,
            8
        );
        $this->useImage(
            'portfolio_3.png',
            Project::class,
            8
        );
        $this->useImage(
            'portfolio_4.png',
            Project::class,
            8
        );
        $this->useImage(
            'portfolio_5.png',
            Project::class,
            8
        );
        $this->useImage(
            'portfolio_6.png',
            Project::class,
            8
        );
        $this->useImage(
            'portfolio_7.png',
            Project::class,
            8
        );
        $this->useImage(
            'portfolio_8.png',
            Project::class,
            8
        );
        $this->useImage(
            'portfolio_9.png',
            Project::class,
            8
        );
        $this->useImage(
            'portfolio_10.png',
            Project::class,
            8
        );
        $this->useImage(
            'portfolio_11.png',
            Project::class,
            8
        );
        $this->useImage(
            'portfolio_12.png',
            Project::class,
            8
        );

        Task::factory()->create([
            'name' => 'Database',
            'content' => 'De basis inrichten',
            'status' => TaskStatus::DONE,
            'project_id' => 8,
        ]);
        Task::factory()->create([
            'name' => 'Voldoen',
            'content' => 'Voldoen aan de eisen die school heeft gelegd',
            'status' => TaskStatus::DONE,
            'project_id' => 8,
        ]);
        Task::factory()->create([
            'name' => 'Morph table',
            'content' => 'Een morph table maken voor images,
die staan bij clients en projecten.',
            'status' => TaskStatus::DONE,
            'project_id' => 8,
        ]);
        Task::factory()->create([
            'name' => 'Admin panel',
            'content' => 'Alles goed inrichten en laten werken.',
            'status' => TaskStatus::DONE,
            'project_id' => 8,
        ]);
        Task::factory()->create([
            'name' => 'Widgets',
            'content' => 'Zorgen dat alle widgets dezelfde kleur & sorteer manieren gebruiken.',
            'status' => TaskStatus::DONE,
            'project_id' => 8,
        ]);
        Task::factory()->create([
            'name' => 'Frontend',
            'content' => "Alle pagina's aanmaken en laten werken",
            'status' => TaskStatus::DONE,
            'project_id' => 8,
        ]);
        Task::factory()->create([
            'name' => 'Slideshows',
            'content' => "Als er foto's zijn toegewezen, laat een slideshow zien.
Deze pakt altijd de correcte foto's.",
            'status' => TaskStatus::DONE,
            'project_id' => 8,
        ]);
        Task::factory()->create([
            'name' => 'Vertalingen',
            'content' => 'Aan de admin kant is alles Engels,
aan de gebruikers kant is alles nederlands!',
            'status' => TaskStatus::DONE,
            'project_id' => 8,
        ]);
        Task::factory()->create([
            'name' => 'Controllers',
            'content' => "Alle pagina's werkend maken door data via controller's
door te sturen",
            'status' => TaskStatus::DONE,
            'project_id' => 8,
        ]);
        Task::factory()->create([
            'name' => 'readme.md klaarmaken voor school',
            'content' => 'Readme.md maken en alle nodige informatie schrijven',
            'status' => TaskStatus::DONE,
            'project_id' => 8,
        ]);
        Task::factory()->create([
            'name' => 'Voorbestaande informatie',
            'content' => 'Alle nodige data klaarzetten.
Zodat wanneer iemand php artisan db:seed --class=PreloadedInformationSeeder runt,
alles (zoals dit) klaar staat!',
            'status' => TaskStatus::DONE,
            'project_id' => 8,
        ]);

        //Project 9
        Project::factory()->create([
            'id' => 9,
            'name' => 'Colors',
            'content' => 'Een bestandje wat ik overal kan gebruiken
in mijn laravel projecten dat van alles kan doen met kleuren',
            'type' => ProjectType::MYSELF,
            'start_date' => '25-10-2024',
            'end_date' => '05-11-2024',
            'client_id' => Client::where('name', 'Jasper van den Heuij')->first()->id,
        ]);

        $this->useImage(
            'colors_1.png',
            Project::class,
            9
        );
        $this->useImage(
            'colors_2.png',
            Project::class,
            9
        );
        $this->useImage(
            'colors_3.png',
            Project::class,
            9
        );

        Task::factory()->create([
            'name' => 'Static en niet static',
            'content' => 'De benodigde functies statisch laten werken,
en ook als je ze niet status aanroept',
            'status' => TaskStatus::DONE,
            'project_id' => 9,
        ]);
        Task::factory()->create([
            'name' => 'Genereer kleuren (cssRGB)',
            'content' => 'Een functie om random kleuren te maken die
voldoen aan de cssRGB regels, zodat je deze makkelijk kan gebruiken',
            'status' => TaskStatus::DONE,
            'project_id' => 9,
        ]);
        Task::factory()->create([
            'name' => 'Omdraaien',
            'content' => 'De kleuren omdraaien',
            'status' => TaskStatus::DONE,
            'project_id' => 9,
        ]);
        Task::factory()->create([
            'name' => 'Contract (basis)',
            'content' => 'HET zwaarste contrast(zwart of wit) krijgen',
            'status' => TaskStatus::DONE,
            'project_id' => 9,
        ]);
        Task::factory()->create([
            'name' => 'Contrast',
            'content' => 'Per kleur het zwaarste contrast krijgen',
            'status' => TaskStatus::DONE,
            'project_id' => 9,
        ]);
        Task::factory()->create([
            'name' => 'Code Qualiteit',
            'content' => 'Betere code kwaliteit gebruiken,
grootendeels door Laravel pint',
            'status' => TaskStatus::DONE,
            'project_id' => 9,
        ]);
        Task::factory()->create([
            'name' => 'Afronden',
            'content' => 'Project afronden, zodat het zeer dynamisch en,
overal gebruikt kan worden (Alleen laravel applicaties)',
            'status' => TaskStatus::DONE,
            'project_id' => 9,
        ]);

        //Project 10
        Project::factory()->create([
            'id' => 10,
            'name' => 'Store',
            'content' => 'Een winkel systeem met 2 kanten, Admin en Customer.',
            'type' => ProjectType::STAGE,
            'start_date' => '05-11-2024',
            'end_date' => today(), //TODO end date
            'client_id' => Client::where('name', 'Jasper van den Heuij')->first()->id,
        ]);

        $this->useImage(
            'store_1.png',
            Project::class,
            10
        );
        $this->useImage(
            'store_2.png',
            Project::class,
            10
        );
        $this->useImage(
            'store_3.png',
            Project::class,
            10
        );
        $this->useImage(
            'store_4.png',
            Project::class,
            10
        );
        $this->useImage(
            'store_5.png',
            Project::class,
            10
        );
        $this->useImage(
            'store_6.png',
            Project::class,
            10
        );
        $this->useImage(
            'store_7.png',
            Project::class,
            10
        );
        $this->useImage(
            'store_8.png',
            Project::class,
            10
        );
        $this->useImage(
            'store_9.png',
            Project::class,
            10
        );
        $this->useImage(
            'store_10.png',
            Project::class,
            10
        );
        $this->useImage(
            'store_11.png',
            Project::class,
            10
        );
        $this->useImage(
            'store_12.png',
            Project::class,
            10
        );

        Task::factory()->create([
            'name' => 'Basis database',
            'content' => 'In dbDesigner de database uitplannen.',
            'status' => TaskStatus::DONE,
            'project_id' => 10,
        ]);
        Task::factory()->create([
            'name' => 'Admin paneel',
            'content' => 'Admin paneel aanmaken',
            'status' => TaskStatus::DONE,
            'project_id' => 10,
        ]);
        Task::factory()->create([
            'name' => 'Basis bestellen',
            'content' => 'Basis bestel functies maken aan de administrator kant',
            'status' => TaskStatus::DONE,
            'project_id' => 10,
        ]);
        Task::factory()->create([
            'name' => 'Adressen',
            'content' => 'Basis adressen functionaliteit aan admin kant toevoegen',
            'status' => TaskStatus::DONE,
            'project_id' => 10,
        ]);
        Task::factory()->create([
            'name' => 'Winkelwagentje',
            'content' => 'Logica toevoegen dat je maximaal 1 winkelwagentje mag hebben,
dus ook 1 actieve bestelling tegelijkertijd, en dat je hier producten aan kan
toevoegen via het administrator paneel',
            'status' => TaskStatus::DONE,
            'project_id' => 10,
        ]);
        Task::factory()->create([
            'name' => 'Bestellingen goedkeuren',
            'content' => "Zodra een bestelling 'verstuurd' word,
moet de administrator dit goedkeuren, zodat aantallen van het product
afgetrokken worden.",
            'status' => TaskStatus::DONE,
            'project_id' => 10,
        ]);
        Task::factory()->create([
            'name' => 'Klanten paneel',
            'content' => 'Aanmaken en alle bestanden overplaatsen naar de nu juiste plekken',
            'status' => TaskStatus::DONE,
            'project_id' => 10,
        ]);
        Task::factory()->create([
            'name' => 'Profiel',
            'content' => 'Profiel pagina aanmaken voor de klant,
dat deze addressen kunnen toevoegen, bekijken en al hun persoonlijke informatie
er meteen inladen, en dat ze allemaal aangepast kunnen worden (met validatie)',
            'status' => TaskStatus::DONE,
            'project_id' => 10,
        ]);
        Task::factory()->create([
            'name' => 'Producten pagina',
            'content' => 'Klanten kunnen nu zelf producten aan hun winkelwagentje toevoegen',
            'status' => TaskStatus::DONE,
            'project_id' => 10,
        ]);
        Task::factory()->create([
            'name' => 'Klanten bestellingen',
            'content' => 'Klanten kunnen nu ook zelf bestellen, en het hele process volgen',
            'status' => TaskStatus::DONE,
            'project_id' => 10,
        ]);
        Task::factory()->create([
            'name' => 'Authenticatie',
            'content' => 'Als klant kun je niet aan administrator kant komen,
en als administrator (zonder gebruiker te zijn) kun je ook niets bestellen of je
profiel aanpassen.',
            'status' => TaskStatus::DONE,
            'project_id' => 10,
        ]);
        Task::factory()->create([
            'name' => 'Klanten en gebruikers samenvoegen',
            'content' => 'Als je een gebruiker bent ben je nog niet een user',
            'status' => TaskStatus::DONE,
            'project_id' => 10,
        ]);
        //TODO enable other seeder
    }


    protected function useImage(string $image_name, string $imageable_type, int $imageable_id)
    {
        $path = $image_name;
        $imagePath = public_path('images/' . $path);

        Storage::disk('public')
            ->put($path, file_get_contents($imagePath));

        Image::create([
            'path' => $path,
            'imageable_type' => $imageable_type,
            'imageable_id' => $imageable_id,
        ]);
    }
}
