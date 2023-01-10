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
                                'is_end' => 0,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 2
                            [
                                'dialogue' => "Ik stop de sleutel in het slot en open de deur. Ik hoor in de verte gerommel, naarmate ik dichter bij de slaapkamer kom. Hoor ik Kim roepen om hulp. ",
                                'story_id' => 1,
                                'is_end' => 0,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 3
                            [
                                'dialogue' => "Ik zie Ruben op Kim liggen. En ik zie Kim tegenstribbelen.",
                                'story_id' => 1,
                'is_end' => 0,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 4
                            [
                                'dialogue' => "Ik heb mijn pistool gepakt en richt hem op Ruben.",
                                'story_id' => 1,
                'is_end' => 0,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 5
                            [
                                'dialogue' => "Ik heb geroepen en heb Ruben een duw gegeven. Hij draait zich om en geeft me een klap.",
                                'story_id' => 1,
                                'is_end' => 0,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 6
                            [
                                'dialogue' => "Ruben trekt zich niks van me aan en gaat gewoon door waar hij mee bezig was. Hij roept naar Kim: “Is dit alles wat je vriendje voor je over heeft?”",
                                'story_id' => 1,
                'is_end' => 0,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 7
                            [
                                'dialogue' => "Uit emotie schiet ik meerdere keren op Ruben. Ik zie Ruben neervallen. Paniek schiet me te binnen, shit wat nu?",
                                'story_id' => 1,
                'is_end' => 0,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 8
                            [
                                'dialogue' => "Ik roep naar Ruben dat ik hem zal neerschieten als hij niet stopt waar hij mee bezig is. Hij begint te lachen.",
                                'story_id' => 1,
                                'is_end' => 0,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 9
                            [
                                'dialogue' => "Ik sla Ruben tegen zijn hoofd met de achterkant van het pistool, maar dit maakt hem boos. Hij laat Kim los en komt nu op mij af.",
                                'story_id' => 1,
                'is_end' => 0,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 10
                            [
                                'dialogue' => "Ik raak Ruben vol op z’n neus. Hij dreigt Kim te vermoorden als ik de kamer niet verlaat. Wat doe ik nu?",
                                'story_id' => 1,
                'is_end' => 0,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 11
                            [
                                'dialogue' => "Ik roep naar Ruben dat hij moet stoppen. Hij begint me uit te lachen en klimt weer bovenop Kim.",
                                'story_id' => 1,
                                'is_end' => 0,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 12
                            [
                                'dialogue' => "Ik kijk toe hoe Ruben alsmaar aggresiever word en verder gaat bij Kim.",
                                'story_id' => 1,
                                'is_end' => 0,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 13
                            [
                                'dialogue' => "Ruben kijkt even om en begint te lachen terwijl ik toekijk hoe hij alsmaar aggresiever word en verder gaat bij Kim.",
                                'story_id' => 1,
                                'is_end' => 0,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 14
                            [
                                'dialogue' => "Ik loop weg, Ik heb geen vrienden meer, geen vriendin, en geen familie. Ik ben eenzaam. Ik ben zelf ‘goed’ uit de situatie gekomen. Ik heb het pad van een ‘LOSER’ gekozen",
                                'story_id' => 1,
                'is_end' => 1,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 15
                            [
                                'dialogue' => "Ik kijk hoe het is met Ruben. Ruben is dood, maar Kim is veilig. Ik word een paar uur later opgepakt, en word veroordeeld voor moord. Ik kwam op voor Kim, maar Kim kreeg een miskraam. Ze wil me niet meer zien. Ik heb het pad van een ‘’ gekozen ",
                                'story_id' => 1,
                'is_end' => 1,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 16
                            [
                                'dialogue' => "Ik kijk hoe het is met Kim. Ze ligt huilend op bed, maar Ruben kan haar niks meer maken. Ik word een paar uur later opgepakt en veroordeeld voor moord. Ik kwam op voor Kim en we zijn nog steeds gelukkig samen. Ik heb het pad van een “” gekozen.",
                                'story_id' => 1,
                                'is_end' => 1,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 17
                            [
                                'dialogue' => "Ik sla ruben een gebroken neus en kaak, waardoor hij weet dat hij van Kim af moet blijven. We zijn geen vrienden meer. Ik kwam op voor Kim en we zijn nog steeds gelukkig samen. Ik heb het pad van een ‘’ gekozen.",
                                'story_id' => 1,
                                'is_end' => 1,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 18
                            [
                                'dialogue' => "Ik word boos en scheld Ruben uit. Dit lijkt hem niks te doen, en zorgt er al helemaal niet voor dat hij stopt. Kim kan mij niet vergeven, en geeft mij tot op de dag van vandaag nog steeds ,gedeeltelijk, de schuld van haar miskraam. Ze wil mij nooit meer zien. Ik heb het pad van een ‘LOSER’ gekozen ",
                                'story_id' => 1,
                'is_end' => 1,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],


            //story 2

                    //scenario 19
                            [
                                'dialogue' => "Ik ben een jongen van 18. Ik ben opgegroeid in een arm gezin en woon nog steeds thuis. Ondanks het feit dat ik thuis woon, ben ik wel mijn eigen man op straat. Ik heb een groep van 43 jongens waar ik graag mee optrek. We roken af en toe een joint en chillen vaak buiten.",
                                'story_id' => 2,
                                'is_end' => 0,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 20
                            [
                                'dialogue' => "De groep gaat inbreken in een huis, omdat ze spullen nodig hebben. Wat doe ik?",
                                'story_id' => 2,
                                'is_end' => 0,
                                'time' => 30,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 21
                            [
                                'dialogue' => "De politie komt achter de inbraak en ik word opgepakt als verdachte. Ze ondervragen me om erachter te komen of ik hier iets mee te maken heb. Wat nu?",
                                'story_id' => 2,
                                'is_end' => 0,
                                'time' => 30,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 22
                            [
                                'dialogue' => "De politie komt bij mij aankloppen omdat ze mij zien als leider van de groep. Ze denken dat ik de inbraak heb geleid. Wat doe ik nu?",
                                'story_id' => 2,
                                'is_end' => 0,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 23
                            [
                                'dialogue' => "De agenten houden me aan als verdachte om me te verhoren. Ik kan nog maar 2 kanten op nu…",
                                'story_id' => 2,
                                'is_end' => 0,
                                'time' => 30,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 24
                            [
                                'dialogue' => "Ik voel me nergens meer veilig, omdat ik nu 43 boze jongens achter me aan heb. Ik hoor nergens meer thuis. Wat nu?",
                                'story_id' => 2,
                                'is_end' => 0,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 25
                            [
                                'dialogue' => "Ik word 'geholpen' door jongerenwerkers in de wijk. Ze lopen elke dag rond in mijn wijk.",
                                'story_id' => 2,
                                'is_end' => 0,
                                'time' => 30,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],


                    //scenario 26
                            [
                                'dialogue' => "Ik help de groep met inbreken en steel wat spullen uit het huis. Ondertussen zetten een aantal jongens fotolijstjes van de kinderen die in het huis wonen neer op de bank. Ze staan in volgorde van oud naar jong en er ligt een mes naast. Ik heb hier zelf niks mee te maken, maar kan wel in de problemen komen. ",
                                'story_id' => 2,
                                'is_end' => 0,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 27
                            [
                                'dialogue' => "Er is te weinig bewijs om mij straf te kunnen geven. Daarom is de politie bij mij in huis gaan zoeken naar bewijs. Ze vonden daar drugs die ik verkoop en allerlei gestolen spullen.",
                                'story_id' => 2,
                                'is_end' => 0,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 28
                            [
                                'dialogue' => "De rechter veroordeeld mij tot 2 jaar celstraf, waarvan 8 maanden voorwaardelijk. Ik ga de bak in… Na 2 jaar ben ik weer vrij en ik moet in een begeleid wonen-project gaan wonen. Ik heb een straatverbod gekregen voor bepaalde plekken in mijn oude woonwijk en mijn ouders moesten verhuizen. Ik ben boos, omdat mij beloofd was dat er geen straatverbod opgelegd zou worden. ",
                                'story_id' => 2,
                                'is_end' => 0,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 29
                            [
                                'dialogue' => "Ik bel de politie voordat mijn groep kan inbreken. De politie houdt ze aan en ze worden stuk voor stuk opgepakt. Dat is mijn schuld. De politie is blij dat ik de melding heb gemaakt, maar de groep voelt zich verraden en willen nu wraak op mij nemen. ",
                                'story_id' => 2,
                                'is_end' => 0,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 30
                            [
                                'dialogue' => "Ik heb niks meer over van mijn oude leven. Ik heb geen vrienden, familie of geld en leef een armoedig bestaan. Dit zorgt ervoor dat ik weer een nieuwe groep moet zoeken en weer moet gaan inbreken. Ik blijf in de cirkel van problemen hangen en kan er maar niet uit.",
                                'story_id' => 2,
                                'is_end' => 1,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 31
                            [
                                'dialogue' => "De groep zoekt me op om wraak te nemen. Deze keer pakken ze het mes erbij voor mij. Ze zijn extreem boos en het is een strijd van 43 tegen 1. Ik word neergestoken en overleef het incident niet.",
                                'story_id' => 2,
                                'is_end' => 1,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 32
                            [
                                'dialogue' => "De politie doet wat mogelijk is om me te beschermen in ruil voor de tip van het inbreken. De kans dat er iets zal gebeuren is gedaald, maar ik sta er nog steeds alleen voor. De politie staat niet 100% aan mijn kant en ik ben mijn vrienden kwijt. Ik leef een eenzaam bestaan in angst dat ik op een dag nog aangevallen zal worden door de groep.",
                                'story_id' => 2,
                                'is_end' => 1,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 33
                            [
                                'dialogue' => "Ik ben eindelijk weer vrij en woon nu begeleid. Het gaat goed met me en ik krijg mijn leven steeds meer op de rit. Ik neem de kans nu om een beter leven op te bouwen.",
                                'story_id' => 2,
                                'is_end' => 1,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
                    //scenario 34
                            [
                                'dialogue' => "Ik ben eindelijk weer vrij en woon nu begeleid. Ik heb nog steeds het gevoel dat niemand me echt wil helpen en ze me alleen maar de kop in willen drukken, zodat ik niks meer uithaal. Ik ben boos op alles en iedereen die me in deze situatie terecht heeft gekregen en ik wil gewoon terug naar mijn oude leventje waar niemand zich met mij bemoeide. ",
                                'story_id' => 2,
                                'is_end' => 1,
                                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                                'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                            ],
            //story 3

                    //scenario 35
                    [
                        'dialogue' => "Ik sta op een afgelegen parkeerplaats te wachten op een onbekende jongen. Ik heb een zak kleding in mijn hand. Het is de kleding van mijn niffauw die in de bak zit. Een vriend van hem komt de kleding halen om die bij mijn mattie te brengen. Ik hoor een geluid...",
                        'story_id' => 3,
                        'is_end' => 0,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //scenario 36
                    [
                        'dialogue' => "Er komt een busje aangereden. Het ziet er een beetje verdacht uit. Ik wil geen problemen maar ik moet mijn mattie wel helpen. Hij en mijn andere neven zijn de enige familie die ik heb. Mijn ma is 1,5 jaar geleden dood gegaan en mijn pa was er nooit voor me. Al die pleeggezinnen waren maar niks. Mijn matties, die zijn mijn echte familie. Ik kan ze niet in de steek laten.",
                        'story_id' => 3,
                        'is_end' => 0,
                        'time' => 30,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //scenario 37
                    [
                        'dialogue' => "Het busje komt als een gek achter me aangereden. Ik had gelijk, ik zit in de problemen.",
                        'story_id' => 3,
                        'is_end' => 0,
                        'time' => 30,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //scenario 38
                    [
                        'dialogue' => "Ik blijf heel stil liggen en hoop dat niemand me ziet. Ineens word er een zak over mijn hoofd getrokken. Ik word hardhandig het busje in gesmeten en de deur gaat dicht. Ik zit in het donker.",
                        'story_id' => 3,
                        'is_end' => 0,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //scenario 39
                    [
                        'dialogue' => "Er zitten 2 mannen in het busje. Ze worden woest en ze stappen allebei uit. Ze komen dreigend op me afgelopen.",
                        'story_id' => 3,
                        'is_end' => 0,
                        'time' => 30,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //scenario 40
                    [
                        'dialogue' => "Ik bied mijn excuses aan voor de ruit en roep dat ik alleen kleding kom brengen. De mannen blijven op me af lopen en ik word in elkaar geslagen. Ze smijten me het busje in en ik zit opgesloten.",
                        'story_id' => 3,
                        'is_end' => 0,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //scenario 41
                    [
                        'dialogue' => "Ik weet dat ik 2 tegen 1 nooit ga winnen dus ik probeer weg te rennen. De mannen komen als een gek achter me aan. Ze halen me onderuit en smijten me in het busje. Ik zit opgesloten.",
                        'story_id' => 3,
                        'is_end' => 0,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //scenario 42
                    [
                        'dialogue' => "Ik vertrouw de boel niet en sla een van de mannen in zijn gezicht. De man slaat terug en er ontstaat een gevecht. 2 tegen 1, dat win ik nooit. Ik word opgetild en in het busje gesmeten. Ik zit opgesloten in het donker.",
                        'story_id' => 3,
                        'is_end' => 0,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //scenario 43
                    [
                        'dialogue' => "Ik trek de deur open. Er stapt een man uit die direct dreigend op me af komt lopen.",
                        'story_id' => 3,
                        'is_end' => 0,
                        'time' => 30,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //scenario 44
                    [
                        'dialogue' => "Ik roep dat ik geen problemen wil en alleen de kleding kom afleveren. De man blijft op me af lopen en ineens word ik van achter gegrepen. Er wordt een zak over mijn hoofd getrokken en ik word het busje in gesmeten. De deur gaat dicht en ik kan niet meer weg.",
                        'story_id' => 3,
                        'is_end' => 0,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //scenario 45
                    [
                        'dialogue' => "Ik wil echt niet vechten. Ik probeer weg te komen, alleen er komt een tweede man uit het busje tevoorschijn die me onderuit haalt. Hij grijpt me vast en smijt me het busje in. Ik zit opgesloten.",
                        'story_id' => 3,
                        'is_end' => 0,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //scenario 46
                    [
                        'dialogue' => "Ik vertrouw de boel niet en sla de man in zijn gezicht. De man slaat terug en er ontstaat een gevecht. Ineens komt er een tweede man aangerend. Die kan ik nooit aan in mijn eentje. Wat nu?",
                        'story_id' => 3,
                        'is_end' => 0,
                        'time' => 30,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //scenario 47
                    [
                        'dialogue' => "Ik stop met slaan en de mannen dwingen me het busje in. Ik kan er weinig aan doen. 2 tegen 1 dat win ik nooit. Ik stap het busje in en de deur gaat op slot. Ik zit in het donker.",
                        'story_id' => 3,
                        'is_end' => 0,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //scenario 48
                    [
                        'dialogue' => "Ik trek een sprintje maar word getackeld door een van de mannen. Ze grijpen me vast en smijten me het busje in. De deur gaat dicht en ik zit in het donker.",
                        'story_id' => 3,
                        'is_end' => 0,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //scenario 49
                    [
                        'dialogue' => "Ik laat me niet kennen en ga het gevecht aan. Ik zal me nooit zomaar overgeven. Ik word overmeesterd door de 2 mannen en ze smijten me het busje in. De deur gaat dicht en ik zit opgesloten.",
                        'story_id' => 3,
                        'is_end' => 0,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //scenario 50
                    [
                        'dialogue' => "Er zitten 2 mannen in het busje. Ze worden woest en ze stappen allebei uit. Ze komen dreigend op me afgelopen.",
                        'story_id' => 3,
                        'is_end' => 0,
                        'time' => 30,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //scenario 51
                    [
                        'dialogue' => "Ik bied mijn excuses aan voor de ruit en roep dat ik alleen kleding kom brengen. De mannen blijven op me af lopen en ik word in elkaar geslagen. Ze smijten me het busje in en ik zit opgesloten.",
                        'story_id' => 3,
                        'is_end' => 0,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //scenario 52
                    [
                        'dialogue' => "Ik weet dat ik 2 tegen 1 nooit ga winnen dus ik probeer weg te rennen. De mannen komen als een gek achter me aan. Ze halen me onderuit en smijten me in het busje. Ik zit opgesloten.",
                        'story_id' => 3,
                        'is_end' => 0,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //scenario 53
                    [
                        'dialogue' => "Ik vertrouw de boel niet en sla een van de mannen in zijn gezicht. De man slaat terug en er ontstaat een gevecht. 2 tegen 1, dat win ik nooit. Ik word opgetild en in het busje gesmeten. Ik zit opgesloten in het donker.",
                        'story_id' => 3,
                        'is_end' => 0,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //scenario 54
                    [
                        'dialogue' => "Het busje stopt voor mijn neus en de achterbak gaat open. Ik loop ernaartoe om de zak te droppen en ik wordt van achter gegrepen. Ik word het busje in geduwd door 2 mannen. De deur gaat op slot en ik zit in het donker. Shit, wat nu?",
                        'story_id' => 3,
                        'is_end' => 0,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //scenario 55
                    [
                        'dialogue' => "Ik zit al een paar uur in het busje opgesloten. Eindelijk zijn we gestopt. Ik hoor de deur aan de voorkant open gaan. Ze komen naar achter lopen, naar mij.",
                        'story_id' => 3,
                        'is_end' => 0,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //scenario 56
                    [
                        'dialogue' => "De mannen doen de achterbak open en halen me eruit. Ik zie een kans om weg te komen. Ze letten even niet op. Ik haal mijn enkel open terwijl ik uit de achterbak klim, maar ik blijf rennen voor m'n leven!",
                        'story_id' => 3,
                        'is_end' => 0,
                        'time' => 30,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //scenario 57
                    [
                        'dialogue' => "Ik ben op een open weg aangekomen. Ik weet niet welke kant ik op moet. Ah fuck! Ik hoor de auto in de verte deze kant op rijden. Ik verstop me snel achter een vuilniscontainer. Wat moeten ze van me?",
                        'story_id' => 3,
                        'is_end' => 0,
                        'time' => 30,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //scenario 58
                    [
                        'dialogue' => "Die boys lopen me voorbij. Ik hoor ze weeer in de auto stappen en wegrijden. Gelukkig. Ik ren naar de hoofdweg en lift met iemand mee tot een tankstation. Ik steel in de auto deze vrouw haar telefoon.",
                        'story_id' => 3,
                        'is_end' => 0,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //scenario 59
                    [
                        'dialogue' => "Ik wacht tot die boys me zien. Er stapt eentje uit. Ik sla hem met al mijn kracht tegen de grond. Hij is bewusteloos. De ander stapt nu ook uit. Ik gebruik m'n sleutel als boksbeugel en raak hem op z'n slaap... Ook hij gaat neer. De adrenaline raced door m'n aderen. Ik pak de telefoon van een van die boys en ren weg. Ik kom aan bij een tankstation.",
                        'story_id' => 3,
                        'is_end' => 0,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //scenario 60
                    [
                        'dialogue' => "Ik hoor die boys uitstappen, Ze splitsen zich op. Een van ze komt mijn kant opgelopen. Ik zie een fietsketting liggen. Op het moment dat hij langs me loopt sla ik hem met de fietsketting. Hij raakt bewusteloos. Fuck! Ik moet weg hier. Ik pak z'n telefoon en ren weg. Tot ik bij een tankstation kom.",
                        'story_id' => 3,
                        'is_end' => 0,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //scenario 61
                    [
                        'dialogue' => "Ik voel de adrenaline door m'n lichaam stromen. Ik moet zo snel mogelijk weg. Wat the fuck is dit man. Een fucking set up? Ik haal iedereen eraf die ermee te maken had a mattie! Ik kom bij een kruispunt aan en rij in alle emotie door rood. BAM!!!! Ik hoor een luide piep in m'n oor. Ik heb iemand aangereden. FUCK!",
                        'story_id' => 3,
                        'is_end' => 0,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //scenario 62
                    [
                        'dialogue' => "Het is een oudere man. Hij is half bewusteloos, maar de schade aan zijn auto en het busje vallen mee.  Ik raak in paniek en begin te huilen. Wat the fuck moet ik doen? Die arme man...",
                        'story_id' => 3,
                        'is_end' => 0,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //scenario 63
                    [
                        'dialogue' => "Met een bebloed hoofd en een manke poot ren ik  al een tijdje door steegjes en straten. Ik weet niet eens meer waar ik ben. Ik hoor in de verte een ambulance. Deze komt zeker voor die man. Ik voel me zo schuldig.",
                        'story_id' => 3,
                        'is_end' => 0,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //scenario 64
                    [
                        'dialogue' => "Ik pak zijn telefoon, bel de ambulance en geef ze de locatie, maar blijf niet bij hem. Als die boys me pakken maken ze me sowieso dood. Ik vlucht zelf te voet verder. M'n hoofd bloed en ik loop mank, maar ik moet door. Ik wil m'n leven niet verliezen. Ik vlucht weg en neem z'n telefoon mee.",
                        'story_id' => 3,
                        'is_end' => 0,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //scenario 65
                    [
                        'dialogue' => "Wat the fuck heb ik gedaan. Ik voel me zo slecht. Ik kan niet telang in deze bus blijven rijden man. Maar waar the fuck ga ik naartoe?",
                        'story_id' => 3,
                        'is_end' => 0,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //scenario 66
                    [
                        'dialogue' => "Ik ben bij het tankstation en bel m'n mattie via Snapchat. Hij neemt op en zegt dat hij me nu niet kan helpen omdat hij in Spanje zit. Hij zegt wel dat ik bij hem kan schuilen, Ik moet naar Spanje! Hoe kom ik daar zo snel mogelijk? Ik kan zelf niet naar huis... die boys komen er binnen no time achter waar ik woon.",
                        'story_id' => 3,
                        'is_end' => 0,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //scenario 67
                    [
                        'dialogue' => "Ik wacht bij het tankstation op m'n neef. Hij doet lang man. Ik word fucking nerveus.",
                        'story_id' => 3,
                        'is_end' => 0,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //scenario 68
                    [
                        'dialogue' => "Hij neemt op en zegt dat ik moet kalmeren. Hij heeft de spullen al gehaald en komt over 5 minuten aan op mijn locatie.",
                        'story_id' => 3,
                        'is_end' => 0,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //scenario 69
                    [
                        'dialogue' => "Hij belt me op en geeft aan dat hij er is over 5 minuten met mijn spullen. Hij moet opschieten man.",
                        'story_id' => 3,
                        'is_end' => 0,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
                    //scenario 70
                    [
                        'dialogue' => "Hij geeft aan dat het inderdaad het beste is dat ik vlucht. Hij gooit de telefoon van die boy in een sloot waar we langsreden. Verder geeft hij me cash geld mee en een nieuwe telefoon. Hij zet me af bij het vliegveld. Ik ben kapot man. Ik kleed me om, bedank hem, stap uit en loop het vliegveld in. Wtf was dit man? Ik heb zoveel vragen. Maar voor nu moet ik gewoon zo snel mogelijk weg. Op naar Spanje...",
                        'story_id' => 3,
                        'is_end' => 1,
                        'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                        'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                    ],
        ];

        // add entries into database.
        DB::table('scenarios')->insert($data);
    }
}
