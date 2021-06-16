<?php

$CONFIG = [
    'PATHS' => [
        'BASE' => $_SERVER["DOCUMENT_ROOT"],
        'INCLUDES' => $_SERVER["DOCUMENT_ROOT"] . '/school/fruitfolio/public/includes',
        'TEMPLATE_PARTS' => $_SERVER["DOCUMENT_ROOT"] . '/school/fruitfolio/public/includes/template-parts',
    ],

    'PROJECT' => [
        'TITLE' => 'FruitFolio',
        'DESC' => '',
    ],

    'USERS' => [

        'Stijn' => [
            'id' => 'stijn',
            'name' => 'Stijn Slats',
            'job' => 'Front-end Developer',
            'anim' => 'assets/animations/json/stijn.json',

            'portfolio' => [
                'item1' => [
                    'id' => 'crud-database',
                    'title' => 'CRUD Database',
                    'subtitle' => 'Create, Read, Update, Delete',
                    'text' => 'Mijn eerste leerdoel was het cre&euml;ren van een CRUD Database. Hierin kan je gemakkelijk data toevoegen, lezen, wijzigen en verwijderen. Om de functionaleiten te testen heb ik ervoor gekozen om een online CV op te zetten (net zoals bij LinkedIn).',
                    'link' => 'front-end-developer.php#crud-database',
                    'img' => 'assets/images/portfolio/stijn/crud-database/crud-database.png',
                    'img-alt' => 'CRUD Database',
                    'website' => 'http://leerdoel-1.stijnslats.nl/',
                ],

                'item2' => [
                    'id' => 'login-systeem',
                    'title' => 'Login Systeem',
                    'subtitle' => 'Als uitbreiding op de CRUD Database',
                    'text' => 'Mijn tweede leerdoel was het bouwen en ontwerpen van een Login systeem met daarachter een persoonlijk dashboard. Dit idee ontstond aan het einde van mijn eerste leerdoel. Ik kwam er toen achter dat iedereen zijn data in kon voeren en ook iedereen dat aan kon passen etc. <br/><br/>Mocht je benieuwd zijn naar het dashboard, maak dan gerust een account aan. Het ingevoerde wachtwoord wordt versleuteld en zal voor niemand (zelfs mij niet) zichtbaar zijn.',
                    'link' => 'front-end-developer.php#login-systeem',
                    'img' => 'assets/images/portfolio/stijn/login-systeem/login-systeem.png',
                    'img-alt' => 'Login Systeem',
                    'website' => 'http://leerdoel-2.stijnslats.nl/',
                ],

                'item3' => [
                    'id' => 'jamstack-website',
                    'title' => 'JAMstack Website',
                    'subtitle' => 'Website creëren met JAMstack',
                    'text' => 'Mijn laatste opdracht ging over JAMstack. Een compleet andere tak van programmeren. JAMstack is in de laaste jaren erg opgekomen. Door deze nieuwe techniek is het voor front-end developers mogelijk geworden applicaties nog snelller in elkaar te zetten.<br/><br/>De opdracht was om de website van <a href="https://sophiepeeman.nl/" target="_blank" rel="nofollow noreffer noopener">Sophie Peeman</a> om te zetten naar een JAMstack website.',
                    'link' => 'front-end-developer.php#jamstack-website',
                    'img' => 'assets/images/portfolio/stijn/jamstack-website/jamstack-website.png',
                    'img-alt' => 'JAMstack Website',
                    'website' => 'https://leerdoel-3.netlify.app/',
                ],
            ],
        ],

        'Andrew' => [
            'id' => 'andrew',
            'name' => 'Andrew Ruijtenbeek',
            'job' => 'Graphic Motion Designer',
            'anim' => 'assets/animations/json/andrew.json',

            'portfolio' => [
                'item1' => [
                    'id' => 'liberty-leading-the-people',
                    'title' => 'Liberty Leading The People',
                    'subtitle' => 'Motion Design',
                    'text' => 'Voor het eerste project ben ik bezig geweest met het animeren van een klassiek schilderij. Het schilderij ‘ Liberty leading the people’ beeldt de Franse Revolutie af en met behulp van animatie is deze in dit project tot leven gekomen. Met een , door een fransman gecomponeerd, klassiek stuk op de achtergrond zijn de verschillende animaties een toevoeging op de beleving van het orginele schilderij.',
                    'link' => 'motion-design.php#liberty-leading-the-people',
                    'img' => 'assets/images/portfolio/andrew/liberty-leading-the-people-thumbnail.png',
                    'img-alt' => 'JAMstack Website',
                    'video' => 'https://www.youtube-nocookie.com/embed/RXWCjSwVcao',
                ],

                'item2' => [
                    'id' => 'isometric',
                    'title' => 'Isometric',
                    'subtitle' => 'Motion Design',
                    'text' => 'In deze animatie zijn een aantal tijdperken van de mensheid belicht. Zo is te zien hoe architectuur over de jaren is veranderd en staan de meest belangrijke uitvindingen netjes op een rijtje. Verdere informatie zoals de populatie-aantallen zijn zichtbaar gedurende de animatie. De gehele animatie is in een isometrisch perspectief weergegeven.',
                    'link' => 'motion-design.php#isometric',
                    'img' => 'assets/images/portfolio/andrew/isometric-thumbnail.png',
                    'img-alt' => 'JAMstack Website',
                    'video' => 'https://www.youtube-nocookie.com/embed/gbF0FaGVC1w',
                ],

                'item3' => [
                    'id' => 'morphing',
                    'title' => 'Morphing',
                    'subtitle' => 'Motion Design',
                    'text' => 'We drinken allemaal veel verschillende drankjes. Koffie, thee, wijn, frisdrank en ga zo maar door. Maar weten we eigenlijk wel hoe deze drankjes gemaakt worden? Deze animatie laat de processen zien hoe bepaalde drankjes gemaakt worden. Van boon tot koffie en van blaadje tot thee.',
                    'link' => 'motion-design.php#morphing',
                    'img' => 'assets/images/portfolio/andrew/morphing-thumbnail.png',
                    'img-alt' => 'JAMstack Website',
                    'video' => 'https://www.youtube-nocookie.com/embed/nRS8o1gA-X8',
                ],
            ],
        ],

        'Calvin' => [
            'id' => 'calvin',
            'name' => 'Calvin Schmidt',
            'job' => 'UX Designer',
            'anim' => 'assets/animations/json/calvin.json',

            'portfolio' => [
                'item1' => [
                    'id' => 'bar-mokum',
                    'title' => 'Bar Mokum',
                    'subtitle' => 'Herontwerp prototype van de website van Bar Mokum',
                    'link' => 'bar-mokum.php',
                    'img' => 'assets/images/portfolio/calvin/bar-mokum/bar-mokum-macbook-mockup-4.png',
                ],

                'item2' => [
                    'id' => 'ui-animatie-prototypes',
                    'title' => 'UI Animatie Prototypes',
                    'subtitle' => 'Leren animeren van UI met Protopie',
                    'link' => 'ui-animatie-prototypes.php',
                    'img' => 'assets/images/portfolio/calvin/ui-animatie-prototypes/phone-mockup-1.png',
                ],

                'item3' => [
                    'id' => 'responsive-webflow-website',
                    'title' => 'Responsive Webflow Website',
                    'subtitle' => 'Vertaling van een website prototype naar Webflow',
                    'link' => 'responsive-webflow-website.php',
                    'img' => 'assets/images/portfolio/calvin/responsive-webflow-website/webflow-bar-mokum-macbook-mockup-4.png',
                ],
            ],
        ],

        'Shantusha' => [
            'id' => 'shantusha',
            'name' => 'Shantusha Ramsoebhag',
            'job' => 'Digital Illustrator',
            'anim' => 'assets/animations/json/shantusha.json',

            'portfolio' => [
                'item1' => [
                    'id' => 'logo-ontwerpen',
                    'title' => 'Logo ontwerpen',
                    'subtitle' => 'Drie effectieve logo ontwerpen',
                    'link' => 'logo-ontwerpen.php',
                    'img' => 'assets/images/portfolio/shantusha/logo-ontwerpen/logo-detail-pagina.png',
                ],

                'item2' => [
                    'id' => 'eigen-lettertype',
                    'title' => 'Eigen lettertype',
                    'subtitle' => 'Lettertype ontwerpproces',
                    'link' => 'eigen-lettertype.php',
                    'img' => 'assets/images/portfolio/shantusha/eigen-lettertype/lettersa-b-c-1.png',
                ],

                'item3' => [
                    'id' => 'client-case',
                    'title' => 'Client case',
                    'subtitle' => 'Responsive website voor Joma makelaardij',
                    'link' => 'client-case.php',
                    'img' => 'assets/images/portfolio/shantusha/client-case/project3-Mockup.png',
                ],
            ],
        ],
    ],
];



switch ($_SERVER['SCRIPT_NAME']) {
    // Stijn
    case '/school/fruitfolio/public/'.$CONFIG['USERS']['Stijn']['portfolio']['item1']['link']:
        $PAGE_INFO = [
            'CURRENT_PAGE' => $_SERVER['REQUEST_URI'],
            'TITLE' => $CONFIG['USERS']['Stijn']['portfolio']['item1']['title'].
            ' | '.$CONFIG['USERS']['Stijn']['name'],
            'DESC' => '',
        ];
        break;

    // Andrew
    case '/school/fruitfolio/public/'.$CONFIG['USERS']['Andrew']['portfolio']['item1']['link']:
        $PAGE_INFO = [
            'CURRENT_PAGE' => $_SERVER['REQUEST_URI'],
            'TITLE' => $CONFIG['USERS']['Andrew']['portfolio']['item1']['title'].
            ' | '.$CONFIG['USERS']['Andrew']['name'],
            'DESC' => '',
        ];
        break;

    case '/school/fruitfolio/public/'.$CONFIG['USERS']['Andrew']['portfolio']['item2']['link']:
        $PAGE_INFO = [
            'CURRENT_PAGE' => $_SERVER['REQUEST_URI'],
            'TITLE' => $CONFIG['USERS']['Andrew']['portfolio']['item2']['title'].
            ' | '.$CONFIG['USERS']['Andrew']['name'],
            'DESC' => '',
        ];
        break;

    case '/school/fruitfolio/public/'.$CONFIG['USERS']['Andrew']['portfolio']['item3']['link']:
        $PAGE_INFO = [
            'CURRENT_PAGE' => $_SERVER['REQUEST_URI'],
            'TITLE' => $CONFIG['USERS']['Andrew']['portfolio']['item3']['title'].
            ' | '.$CONFIG['USERS']['Andrew']['name'],
            'DESC' => '',
        ];
        break;
        
    // Calvin
    case '/school/fruitfolio/public/'.$CONFIG['USERS']['Calvin']['portfolio']['item1']['link']:
        $PAGE_INFO = [
            'CURRENT_PAGE' => $_SERVER['REQUEST_URI'],
            'TITLE' => $CONFIG['USERS']['Calvin']['portfolio']['item1']['title'].
            ' | '.$CONFIG['USERS']['Calvin']['name'],
            'DESC' => '',
        ];
        break;

    case '/school/fruitfolio/public/'.$CONFIG['USERS']['Calvin']['portfolio']['item2']['link']:
        $PAGE_INFO = [
            'CURRENT_PAGE' => $_SERVER['REQUEST_URI'],
            'TITLE' => $CONFIG['USERS']['Calvin']['portfolio']['item2']['title'].
            ' | '.$CONFIG['USERS']['Calvin']['name'],
            'DESC' => '',
        ];
        break;

    case '/school/fruitfolio/public/'.$CONFIG['USERS']['Calvin']['portfolio']['item3']['link']:
        $PAGE_INFO = [
            'CURRENT_PAGE' => $_SERVER['REQUEST_URI'],
            'TITLE' => $CONFIG['USERS']['Calvin']['portfolio']['item3']['title'].
            ' | '.$CONFIG['USERS']['Calvin']['name'],
            'DESC' => '',
        ];
        break;
        
    // Shantusha
    case '/school/fruitfolio/public/'.$CONFIG['USERS']['Shantusha']['portfolio']['item1']['link']:
        $PAGE_INFO = [
            'CURRENT_PAGE' => $_SERVER['REQUEST_URI'],
            'TITLE' => $CONFIG['USERS']['Shantusha']['portfolio']['item1']['title'].
            ' | '.$CONFIG['USERS']['Shantusha']['name'],
            'DESC' => '',
        ];
        break;

    case '/school/fruitfolio/public/'.$CONFIG['USERS']['Shantusha']['portfolio']['item2']['link']:
        $PAGE_INFO = [
            'CURRENT_PAGE' => $_SERVER['REQUEST_URI'],
            'TITLE' => $CONFIG['USERS']['Shantusha']['portfolio']['item2']['title'].
            ' | '.$CONFIG['USERS']['Shantusha']['name'],
            'DESC' => '',
        ];
        break;

    case '/school/fruitfolio/public/'.$CONFIG['USERS']['Shantusha']['portfolio']['item3']['link']:
        $PAGE_INFO = [
            'CURRENT_PAGE' => $_SERVER['REQUEST_URI'],
            'TITLE' => $CONFIG['USERS']['Shantusha']['portfolio']['item3']['title'].
            ' | '.$CONFIG['USERS']['Shantusha']['name'],
            'DESC' => '',
        ];
        break;
        
    // Shantusha
    case '/school/fruitfolio/public/'.$CONFIG['USERS']['Shantusha']['portfolio']['item1']['link']:
        $PAGE_INFO = [
            'CURRENT_PAGE' => $_SERVER['REQUEST_URI'],
            'TITLE' => $CONFIG['USERS']['Shantusha']['portfolio']['item1']['title'].
            ' | '.$CONFIG['USERS']['Shantusha']['name'],
            'DESC' => '',
        ];
        break;


    case '/school/fruitfolio/public/'.$CONFIG['USERS']['Shantusha']['portfolio']['item2']['link']:
        $PAGE_INFO = [
            'CURRENT_PAGE' => $_SERVER['REQUEST_URI'],
            'TITLE' => $CONFIG['USERS']['Shantusha']['portfolio']['item2']['title'].
            ' | '.$CONFIG['USERS']['Shantusha']['name'],
            'DESC' => '',
        ];
        break;


    case '/school/fruitfolio/public/'.$CONFIG['USERS']['Shantusha']['portfolio']['item3']['link']:
        $PAGE_INFO = [
            'CURRENT_PAGE' => $_SERVER['REQUEST_URI'],
            'TITLE' => $CONFIG['USERS']['Shantusha']['portfolio']['item3']['title'].
            ' | '.$CONFIG['USERS']['Shantusha']['name'],
            'DESC' => '',
        ];
        break;


    default:
        $PAGE_INFO = [
            'CURRENT_PAGE' => $_SERVER['REQUEST_URI'],
            'TITLE' => $CONFIG['PROJECT']['TITLE'],
            'DESC' => '',
        ];
};

?>