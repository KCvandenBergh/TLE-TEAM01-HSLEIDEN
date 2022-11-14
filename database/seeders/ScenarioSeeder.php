<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ScenarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // add the entries here, without foreign keys.
        $data = [
            [
                'dialogue' => "Ik ben opgegroeid in een klein gezin, ik ben van Indonesische afkomst. Ik woon samen met mijn broer, zus en mijn moeder. Toen ik twee was heeft mijn vader ons verlaten. Mijn moeder is ongeveer zes keer getrouwd geweest. Thuis was het hectisch en onveilig. Mijn moeder was verslaafd aan alcohol en een prostituee. Ze nam geregeld vrouwen mee. Tegen betaling liet zij mij misbruiken.
Toen ik 14 was ben ik gestopt met school, een jaar later ging ik het huis uit. Ik ging bij Ruben wonen een goede vriend. Ik ben nu 16 en heb een relatie met Kim, zij is in verwachting van ons kind.
",
                'story_id' => 1,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
            ],
            [
                'dialogue' => "Ik stop de sleutel in het slot en open de deur. Ik hoor in de verte gerommel, naarmate ik dichter bij de slaapkamer kom. Hoor ik Kim roepen om hulp. ",
                'story_id' => 1,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
            ],
            [
                'dialogue' => "Ik zie Ruben op Kim liggen. En ik zie Kim tegenstribbelen.",
                'story_id' => 1,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
            ],
            [
                'dialogue' => "Ik heb mijn pistool gepakt en richt hem op Ruben.",
                'story_id' => 1,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
            ],
            [
                'dialogue' => "Ik heb geroepen en heb Ruben een duw gegeven. Hij draait zich om en geeft me een klap.",
                'story_id' => 1,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
            ],
            [
                'dialogue' => "Ruben trekt zich niks van me aan en gaat gewoon door waar hij mee bezig was. Hij roept naar Kim: “Is dit alles wat je vriendje voor je over heeft?”",
                'story_id' => 1,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
            ],
            [
                'dialogue' => "Uit emotie schiet ik meerdere keren op Ruben. Ik zie Ruben neervallen. Paniek schiet me te binnen, shit wat nu?",
                'story_id' => 1,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
            ],
            [
                'dialogue' => "Ik roep naar Ruben dat ik hem zal neerschieten als hij niet stopt waar hij mee bezig is. Hij begint te lachen.",
                'story_id' => 1,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
            ],
            [
                'dialogue' => "Ik sla Ruben tegen zijn hoofd met de achterkant van het pistool, maar dit maakt hem boos. Hij laat Kim los en komt nu op mij af.",
                'story_id' => 1,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
            ],
            [
                'dialogue' => "Ik raak Ruben vol op z’n neus. Hij dreigt Kim te vermoorden als ik de kamer niet verlaat. Wat doe ik nu?",
                'story_id' => 1,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
            ],
            [
                'dialogue' => "Ik roep naar Ruben dat hij moet stoppen. Hij begint me uit te lachen en klimt weer bovenop Kim.",
                'story_id' => 1,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
            ],
            [
                'dialogue' => "Ik kijk toe hoe Ruben alsmaar aggresiever word en verder gaat bij Kim.",
                'story_id' => 1,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
            ],
            [
                'dialogue' => "Ruben kijkt even om en begint te lachen terwijl ik toekijk hoe hij alsmaar aggresiever word en verder gaat bij Kim.",
                'story_id' => 1,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
            ],
            [
                'dialogue' => "Ik loop weg, Ik heb geen vrienden meer, geen vriendin, en geen familie. Ik ben eenzaam. Ik ben zelf ‘goed’ uit de situatie gekomen. Ik heb het pad van een ‘LOSER’ gekozen",
                'story_id' => 1,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
            ],
            [
                'dialogue' => "Ik kijk hoe het is met Ruben. Ruben is dood, maar Kim is veilig. Ik word een paar uur later opgepakt, en word veroordeeld voor moord. Ik kwam op voor Kim, maar Kim kreeg een miskraam. Ze wil me niet meer zien. Ik heb het pad van een ‘’ gekozen ",
                'story_id' => 1,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
            ],
            [
                'dialogue' => "Ik kijk hoe het is met Kim. Ze ligt huilend op bed, maar Ruben kan haar niks meer maken. Ik word een paar uur later opgepakt en veroordeeld voor moord. Ik kwam op voor Kim en we zijn nog steeds gelukkig samen. Ik heb het pad van een “” gekozen.",
                'story_id' => 1,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
            ],
            [
                'dialogue' => "Ik sla ruben een gebroken neus en kaak, waardoor hij weet dat hij van Kim af moet blijven. We zijn geen vrienden meer. Ik kwam op voor Kim en we zijn nog steeds gelukkig samen. Ik heb het pad van een ‘’ gekozen.",
                'story_id' => 1,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
            ],
            [
                'dialogue' => "Ik word boos en scheld Ruben uit. Dit lijkt hem niks te doen, en zorgt er al helemaal niet voor dat hij stopt. Kim kan mij niet vergeven, en geeft mij tot op de dag van vandaag nog steeds ,gedeeltelijk, de schuld van haar miskraam. Ze wil mij nooit meer zien. Ik heb het pad van een ‘LOSER’ gekozen ",
                'story_id' => 1,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
            ],
        ];

        // add entries into database.
        DB::table('scenarios')->insert($data);
    }
}
