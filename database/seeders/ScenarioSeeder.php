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
            //story 1
                    //scenario 1
                            [
                                'dialogue' => "Ik ben opgegroeid in een klein gezin, ik ben van Indonesische afkomst. Ik woon samen met mijn broer, zus en mijn moeder. Toen ik twee was heeft mijn vader ons verlaten. Mijn moeder is ongeveer zes keer getrouwd geweest. Thuis was het hectisch en onveilig. Mijn moeder was verslaafd aan alcohol en een prostituee. Ze nam geregeld vrouwen mee. Tegen betaling liet zij mij misbruiken.
                                Toen ik 14 was ben ik gestopt met school, een jaar later ging ik het huis uit. Ik ging bij Ruben wonen een goede vriend. Ik ben nu 16 en heb een relatie met Kim, zij is in verwachting van ons kind.
                                ",
                                'story_id' => 1,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 2
                            [
                                'dialogue' => "Ik stop de sleutel in het slot en open de deur. Ik hoor in de verte gerommel, naarmate ik dichter bij de slaapkamer kom. Hoor ik Kim roepen om hulp. ",
                                'story_id' => 1,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 3
                            [
                                'dialogue' => "Ik zie Ruben op Kim liggen. En ik zie Kim tegenstribbelen.",
                                'story_id' => 1,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 4
                            [
                                'dialogue' => "Ik heb mijn pistool gepakt en richt hem op Ruben.",
                                'story_id' => 1,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 5
                            [
                                'dialogue' => "Ik heb geroepen en heb Ruben een duw gegeven. Hij draait zich om en geeft me een klap.",
                                'story_id' => 1,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 6
                            [
                                'dialogue' => "Ruben trekt zich niks van me aan en gaat gewoon door waar hij mee bezig was. Hij roept naar Kim: “Is dit alles wat je vriendje voor je over heeft?”",
                                'story_id' => 1,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 7
                            [
                                'dialogue' => "Uit emotie schiet ik meerdere keren op Ruben. Ik zie Ruben neervallen. Paniek schiet me te binnen, shit wat nu?",
                                'story_id' => 1,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 8
                            [
                                'dialogue' => "Ik roep naar Ruben dat ik hem zal neerschieten als hij niet stopt waar hij mee bezig is. Hij begint te lachen.",
                                'story_id' => 1,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 9
                            [
                                'dialogue' => "Ik sla Ruben tegen zijn hoofd met de achterkant van het pistool, maar dit maakt hem boos. Hij laat Kim los en komt nu op mij af.",
                                'story_id' => 1,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 10
                            [
                                'dialogue' => "Ik raak Ruben vol op z’n neus. Hij dreigt Kim te vermoorden als ik de kamer niet verlaat. Wat doe ik nu?",
                                'story_id' => 1,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 11
                            [
                                'dialogue' => "Ik roep naar Ruben dat hij moet stoppen. Hij begint me uit te lachen en klimt weer bovenop Kim.",
                                'story_id' => 1,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 12
                            [
                                'dialogue' => "Ik kijk toe hoe Ruben alsmaar aggresiever word en verder gaat bij Kim.",
                                'story_id' => 1,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 13
                            [
                                'dialogue' => "Ruben kijkt even om en begint te lachen terwijl ik toekijk hoe hij alsmaar aggresiever word en verder gaat bij Kim.",
                                'story_id' => 1,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 14
                            [
                                'dialogue' => "Ik loop weg, Ik heb geen vrienden meer, geen vriendin, en geen familie. Ik ben eenzaam. Ik ben zelf ‘goed’ uit de situatie gekomen. Ik heb het pad van een ‘LOSER’ gekozen",
                                'story_id' => 1,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 15
                            [
                                'dialogue' => "Ik kijk hoe het is met Ruben. Ruben is dood, maar Kim is veilig. Ik word een paar uur later opgepakt, en word veroordeeld voor moord. Ik kwam op voor Kim, maar Kim kreeg een miskraam. Ze wil me niet meer zien. Ik heb het pad van een ‘’ gekozen ",
                                'story_id' => 1,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 16
                            [
                                'dialogue' => "Ik kijk hoe het is met Kim. Ze ligt huilend op bed, maar Ruben kan haar niks meer maken. Ik word een paar uur later opgepakt en veroordeeld voor moord. Ik kwam op voor Kim en we zijn nog steeds gelukkig samen. Ik heb het pad van een “” gekozen.",
                                'story_id' => 1,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 17
                            [
                                'dialogue' => "Ik sla ruben een gebroken neus en kaak, waardoor hij weet dat hij van Kim af moet blijven. We zijn geen vrienden meer. Ik kwam op voor Kim en we zijn nog steeds gelukkig samen. Ik heb het pad van een ‘’ gekozen.",
                                'story_id' => 1,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 18
                            [
                                'dialogue' => "Ik word boos en scheld Ruben uit. Dit lijkt hem niks te doen, en zorgt er al helemaal niet voor dat hij stopt. Kim kan mij niet vergeven, en geeft mij tot op de dag van vandaag nog steeds ,gedeeltelijk, de schuld van haar miskraam. Ze wil mij nooit meer zien. Ik heb het pad van een ‘LOSER’ gekozen ",
                                'story_id' => 1,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],


            //story 2

                    //scenario 19
                            [
                                'dialogue' => "Ik ben een jongen van 18. Ik ben opgegroeid in een arm gezin en woon nog steeds thuis. Ondanks het feit dat ik thuis woon, ben ik wel mijn eigen man op straat. Ik heb een groep van 43 jongens waar ik graag mee optrek. We roken af en toe een joint en chillen vaak buiten.",
                                'story_id' => 2,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 20
                            [
                                'dialogue' => "De groep gaat inbreken in een huis, omdat ze spullen nodig hebben. Wat doe ik?",
                                'story_id' => 2,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 21
                            [
                                'dialogue' => "De politie komt achter de inbraak en ik word opgepakt als verdachte. Ze ondervragen me om erachter te komen of ik hier iets mee te maken heb. Wat nu?",
                                'story_id' => 2,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 22
                            [
                                'dialogue' => "De politie komt bij mij aankloppen omdat ze mij zien als leider van de groep. Ze denken dat ik de inbraak heb geleid. Wat doe ik nu?",
                                'story_id' => 2,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 23
                            [
                                'dialogue' => "De agenten houden me aan als verdachte om me te verhoren. Ik kan nog maar 2 kanten op nu…",
                                'story_id' => 2,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 24
                            [
                                'dialogue' => "Ik voel me nergens meer veilig, omdat ik nu 43 boze jongens achter me aan heb. Ik hoor nergens meer thuis. Wat nu?",
                                'story_id' => 2,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 25
                            [
                                'dialogue' => "Ik word 'geholpen' door jongerenwerkers in de wijk. Ze lopen elke dag rond in mijn wijk.",
                                'story_id' => 2,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],


                    //scenario 26
                            [
                                'dialogue' => "Ik help de groep met inbreken en steel wat spullen uit het huis. Ondertussen zetten een aantal jongens fotolijstjes van de kinderen die in het huis wonen neer op de bank. Ze staan in volgorde van oud naar jong en er ligt een mes naast. Ik heb hier zelf niks mee te maken, maar kan wel in de problemen komen. ",
                                'story_id' => 2,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 27
                            [
                                'dialogue' => "Er is te weinig bewijs om mij straf te kunnen geven. Daarom is de politie bij mij in huis gaan zoeken naar bewijs. Ze vonden daar drugs die ik verkoop en allerlei gestolen spullen.",
                                'story_id' => 2,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 28
                            [
                                'dialogue' => "De rechter veroordeeld mij tot 2 jaar celstraf, waarvan 8 maanden voorwaardelijk. Ik ga de bak in… Na 2 jaar ben ik weer vrij en ik moet in een begeleid wonen-project gaan wonen. Ik heb een straatverbod gekregen voor bepaalde plekken in mijn oude woonwijk en mijn ouders moesten verhuizen. Ik ben boos, omdat mij beloofd was dat er geen straatverbod opgelegd zou worden. ",
                                'story_id' => 2,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 29
                            [
                                'dialogue' => "Ik bel de politie voordat mijn groep kan inbreken. De politie houdt ze aan en ze worden stuk voor stuk opgepakt. Dat is mijn schuld. De politie is blij dat ik de melding heb gemaakt, maar de groep voelt zich verraden en willen nu wraak op mij nemen. ",
                                'story_id' => 2,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 30
                            [
                                'dialogue' => "Ik heb niks meer over van mijn oude leven. Ik heb geen vrienden, familie of geld en leef een armoedig bestaan. Dit zorgt ervoor dat ik weer een nieuwe groep moet zoeken en weer moet gaan inbreken. Ik blijf in de cirkel van problemen hangen en kan er maar niet uit.",
                                'story_id' => 2,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 31
                            [
                                'dialogue' => "De groep zoekt me op om wraak te nemen. Deze keer pakken ze het mes erbij voor mij. Ze zijn extreem boos en het is een strijd van 43 tegen 1. Ik word neergestoken en overleef het incident niet.",
                                'story_id' => 2,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 32
                            [
                                'dialogue' => "De politie doet wat mogelijk is om me te beschermen in ruil voor de tip van het inbreken. De kans dat er iets zal gebeuren is gedaald, maar ik sta er nog steeds alleen voor. De politie staat niet 100% aan mijn kant en ik ben mijn vrienden kwijt. Ik leef een eenzaam bestaan in angst dat ik op een dag nog aangevallen zal worden door de groep.",
                                'story_id' => 2,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 33
                            [
                                'dialogue' => "Ik ben eindelijk weer vrij en woon nu begeleid. Het gaat goed met me en ik krijg mijn leven steeds meer op de rit. Ik neem de kans nu om een beter leven op te bouwen.",
                                'story_id' => 2,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 34
                            [
                                'dialogue' => "Ik ben eindelijk weer vrij en woon nu begeleid. Ik heb nog steeds het gevoel dat niemand me echt wil helpen en ze me alleen maar de kop in willen drukken, zodat ik niks meer uithaal. Ik ben boos op alles en iedereen die me in deze situatie terecht heeft gekregen en ik wil gewoon terug naar mijn oude leventje waar niemand zich met mij bemoeide. ",
                                'story_id' => 2,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
        ];

        // add entries into database.
        DB::table('scenarios')->insert($data);
    }
}
