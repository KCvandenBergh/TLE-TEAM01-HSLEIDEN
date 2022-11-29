<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ChoiceSeeder extends Seeder
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

            //reusable
                    //choice 1
                        [
                            'name' => 'Download gemaakte keuzes',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 2
                        [
                            'name' => 'Terug naar startscherm',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 3
                        [
                            'name' => 'Klik om door te gaan',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],

                //story 1
                    //choice 4
                        [
                            'name' => 'Open de deur',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 5
                        [
                            'name' => 'Ik pak mijn pistool',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 6
                        [
                            'name' => 'Ik roep: “What the fuck?!?” En geef Ruben een duw.',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 7
                        [
                            'name' => 'Ik probeer Ruben verbaal te stoppen',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 8
                        [
                            'name' => 'Ik schiet op Ruben',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 9
                        [
                            'name' => 'Ik dreig dat ik hem schiet',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 10
                        [
                            'name' => 'Ik sla hem met de achterkant van mijn pistool',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 11
                        [
                            'name' => 'Ik geef hem een klap terug',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 12
                        [
                            'name' => 'Ik probeer Ruben verbaal te stoppen',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 13
                        [
                            'name' => 'Ik verstijf en doe niets',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 14
                        [
                            'name' => 'Ik schreeuw dat hij moet stoppen',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 15
                        [
                            'name' => 'Ik pak mijn pistool',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 16
                        [
                            'name' => 'Ik geef hem een klap',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 17
                        [
                            'name' => 'Ik ren de deur uit',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 18
                        [
                            'name' => 'Ik ga kijken of ik Ruben nog kan helpen',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 19
                        [
                            'name' => 'Ik ga kijken hoe het met Kim gaat',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 20
                        [
                            'name' => 'Ik haal de trekker over',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 21
                        [
                            'name' => 'Ik sla hem met de achterkant van mijn pistool',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 22
                        [
                            'name' => 'Ik sta vol verbazing te kijken',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 23
                        [
                            'name' => 'Ik ren de kamer uit',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 24
                        [
                            'name' => 'Ik dreig hem te schieten',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 25
                        [
                            'name' => 'Ik schiet op Ruben',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 26
                        [
                            'name' => 'Ik loop de kamer uit',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 27
                        [
                            'name' => 'Ik pak mijn pistool',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 28
                        [
                            'name' => 'Ik sla Ruben in elkaar',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 29
                        [
                            'name' => 'Ik word boos en scheld hem uit',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 30
                        [
                            'name' => 'Ik trek hem van Kim as en sla hem in elkaar',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 31
                        [
                            'name' => 'Ik pak mijn pistool',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 32
                        [
                            'name' => 'Ik pak alsnog mijn pistool',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 33
                        [
                            'name' => 'Ik loop weg',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 34
                        [
                            'name' => 'Ik geef Ruben alsnog een klap',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 35
                        [
                            'name' => 'Ik trek hem van Kim af en sla hem in elkaar',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 36
                        [
                            'name' => 'Ik loop weg',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 37
                        [
                            'name' => 'Ik word boos en scheld hem uit',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],

            //story 2

                    //choice 38
                        [
                            'name' => 'Ik help ze in te breken. ',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 39
                        [
                            'name' => 'Ik laat ze hun gang gaan, maar doe niet mee. ',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 40
                        [
                            'name' => 'Ik stel de politie op de hoogte van het plan. ',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 41
                        [
                            'name' => 'Ik geef toe dat ik heb ingebroken en de fotolijstjes heb neergezet. Ze geloven me toch niet als ik ontken. ',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 42
                        [
                            'name' => 'Ik ontken alles. Ze hebben toch geen bewijs? ',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 43
                        [
                            'name' => 'Ik geef toe dat ik bij de inbraak was, maar ontken het neerzetten van de fotolijstjes. Ik kan maar beter eerlijk zijn.',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 44
                        [
                            'name' => 'Ik ontken alles netjes. ',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 45
                        [
                            'name' => 'Ik wordt boos en scheld de agenten uit. Waarom verdenken ze mij gelijk?',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 46
                        [
                            'name' => 'Ik lieg dat ik dat inderdaad heb gedaan. Ik moet wel voor mijn groep opkomen.',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 47
                        [
                            'name' => 'Ik ontken alles. Ik heb tenslotte niks gedaan.',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 48
                        [
                            'name' => 'Ik beken dat ik heb ingebroken en bescherm mijn groep.',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 49
                        [
                            'name' => 'Ik verhuis naar een plek ver weg en probeer daar een bestaan op te bouwen.',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 50
                        [
                            'name' => 'Ik doe niks en kijk wat er gebeurt.',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 51
                        [
                            'name' => 'Ik bel de politie om me te beschermen.',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 52
                        [
                            'name' => 'Ik zeg netjes gedag.',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 53
                        [
                            'name' => 'Ik scheld ze uit. Ze verraden me elke keer achter mijn rug om.',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 54
                        [
                            'name' => 'Ik negeer ze. Ze verdienen mijn aandacht niet.',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 55
                        [
                            'name' => 'Klik om door te gaan',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 56
                        [
                            'name' => 'Klik om door te gaan',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 57
                        [
                            'name' => 'Klik om door te gaan',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 58
                        [
                            'name' => 'Klik om door te gaan',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
                    //choice 59
                        [
                            'name' => 'Klik om door te gaan',
                            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                            'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                        ],
        ];

        // add entries into database.
        DB::table('choices')->insert($data);
    }
}
