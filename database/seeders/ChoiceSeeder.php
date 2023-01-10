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


            //story 3

                    //choice 60
                    [
                        'name' => 'Ik kijk om me heen',
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //choice 61
                    [
                        'name' => 'De ramen van het busje zijn geblindeerd, dus ik kan niet naar binnen kijken. Ik vertrouw het niet. Ik pak de zak met kleding op en ren weg.',
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //choice 62
                    [
                        'name' => 'Ik duik in de bosjes om het busje te ontlopen. Ik wil geen problemen.',
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //choice 63
                    [
                        'name' => 'Ik pak een steen op en gooi die door de ruit van het busje heen',
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //choice 64
                    [
                        'name' => 'Ik wil geen gezeik dus ik probeer duidelijk te maken dat ik alleen de kleding van mijn mattie kom brengen.',
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //choice 65
                    [
                        'name' => 'Dit ziet er niet goed uit voor mij. Ik begin te rennen.',
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //choice 66
                    [
                        'name' => 'Ik laat me niet zomaar intimideren. Ik sta mijn mannetje en bereid me voor om te vechten.',
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //choice 67
                    [
                        'name' => 'Ik stop met lopen en wacht tot het busje dichterbij is. Ik stel me aan. Het is vast gewoon een mattie van mijn neef.',
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //choice 68
                    [
                        'name' => 'Ik wil geen gezeik dus ik probeer duidelijk te maken dat ik alleen de kleding van mijn mattie kom brengen.',
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //choice 69
                    [
                        'name' => 'Dit ziet er niet goed uit voor mij. Ik begin te rennen.',
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //choice 70
                    [
                        'name' => 'Ik laat me niet zomaar intimideren. Ik sta mijn mannetje en bereid me voor om te vechten.',
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //choice 71
                    [
                        'name' => 'Ik geef me over.',
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //choice 72
                    [
                        'name' => '2 tegen 1 ga ik nooit winnen. Ik begin te rennen.',
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //choice 73
                    [
                        'name' => 'Ik geef niet op en vecht door. Dan maar 2 tegen 1',
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //choice 74
                    [
                        'name' => 'Ik pak een steen op en gooi die door de ruit van het busje heen.',
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //choice 75
                    [
                        'name' => 'Ik wil geen gezeik dus ik probeer duidelijk te maken dat ik alleen de kleding van mijn mattie kom brengen.',
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //choice 76
                    [
                        'name' => 'Dit ziet er niet goed uit voor mij. Ik begin te rennen.',
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //choice 77
                    [
                        'name' => 'Ik laat me niet zomaar intimideren. Ik sta mijn mannetje en bereid me voor om te vechten.',
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //choice 78
                    [
                        'name' => 'Ik negeer mijn onderbuikgevoel. Ik ben toch geen watje. Ik blijf gewoon staan en wacht op het busje.',
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //choice 79
                    [
                        'name' => 'Ik wacht in stilte tot het busje stopt.',
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //choice 80
                    [
                        'name' => 'Ik ga klaar zitten. Misschien kan ik ontsnappen.',
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //choice 81
                    [
                        'name' => 'Ik ren weg.',
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //choice 82
                    [
                        'name' => 'Ik verstop me achter iemands auto',
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //choice 83
                    [
                        'name' => 'Ik bedank haar en stap uit',
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //choice 84
                    [
                        'name' => 'Fuck it, ik ga op straat staan en ga op de vuist.',
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //choice 85
                    [
                        'name' => 'Uitgeput kom ik op adem en herinner ik me dat ik de telefoon heb...',
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //choice 86
                    [
                        'name' => 'Ik ren weg richting een andere straat.',
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //choice 87
                    [
                        'name' => 'Uitgeput kom ik op adem en herinner ik me dat ik de telefoon heb...',
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //choice 88
                    [
                        'name' => 'Ik sla allebei de mannen neer en zorg dat ze niet meer achter me aan kunnen rennen. Ik stap de bus in en rij weg.',
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //choice 89
                    [
                        'name' => 'Ik stap uit en loop naar de andere auto.',
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //choice 90
                    [
                        'name' => 'Ik stap uit, er is geen tijd te verliezen. Ik zit nu nog dieper in de shit. Ik ren weg.',
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //choice 91
                    [
                        'name' => 'Ik loop door tot ik bij een tankstation uitkom.',
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //choice 92
                    [
                        'name' => 'Ik stap uit en check de oudere man...',
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //choice 93
                    [
                        'name' => 'Ik loop door tot ik bij een tankstation uitkom',
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //choice 94
                    [
                        'name' => 'Ik stap uit pak zijn telefoon, zet het busje in zijn achteruit en rij weg.',
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //choice 95
                    [
                        'name' => 'Ik rij door tot een tankstation.',
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //choice 96
                    [
                        'name' => 'Ik bel een van mijn niffauws om mijn spullen op te halen bij me osso en me te brengen naar het vliegveld',
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //choice 97
                    [
                        'name' => 'Ik bel hem.',
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //choice 98
                    [
                        'name' => 'we rijden naar het vliegveld en ik vertel hem alles in de auto.',
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //choice 99
                    [
                        'name' => 'Ik wacht het af.',
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //choice 100
                    [
                        'name' => 'We rijden naar het vliegveld en ik vertel hem alles in de auto.',
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],

        ];

        // add entries into database.
        DB::table('choices')->insert($data);
    }
}
