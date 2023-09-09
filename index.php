<?php

    function translate_page($index, $lang) {

        if ($lang == 'en') {
            $phrases = array(
                'Home',
                'Our Vision',
                'Interests',
                'About Us',
                'Get in touch',
                'INDUSTRIAL MACHINES EXPERTS!',
                'YOU WILL NEVER REGRET WORKING WITH US',
                'How do we work?',
                'It\'s as simple as A B C yet very accommodating.',
                'A: We purchase your industrial machines and electric equipment.',
                'B: We refurbish them.',
                'C: We distribute the products to individuals and businesses that are in need.',
                'Our interest of goods',
                'Electric motors <br>Gearboxes<br>Pumps<br>Hydraulic parts',
                'Valves',
                'Bearings',
                'Automation and Pneumatics',
                'Transmissions',
                'Machinery',
                'Spare parts',
                'About Us',
                'As a startup company, we are committed to environmental sustainability and are passionate about promoting the principles of recycling and reusing industrial goods. Our goal is to encourage factories to reduce their production and minimize pollution by adopting eco-friendly practices that prioritize the efficient use of resources. We believe that by spreading awareness about the importance of recycling and reuse, we can make a positive impact on the environment and build a more sustainable future.',
                'Get In Touch With Us',
                'Press here to get for all information you need',
                'Copyright'
            );
        } else if ($lang == 'ar') {
            $phrases = array(
				'الرئيسية',
				'رؤيتنا',
				'الإهتمامات',
				'معلومات عنا',
				'ابقى على تواصل',
				'خبراء الآلات الصناعية!',
				'لن تندم أبدًا على العمل معنا',
				'كيف نعمل؟',
				'الأمر بسيط مثل A B C ولكنه ملائم للغاية.',
				'ج: نشتري آلاتك الصناعية ومعداتك الكهربائية.',
				'ب: نقوم بتجديدها.',
				'ج: نوزع المنتجات على الأفراد والشركات المحتاجة',
				'مصلحتنا في البضائع',
				'محركات كهربائية <br> علب التروس <br> مضخات <br> الأجزاء الهيدروليكية',
				'الصمامات',
				'رمان',
				'الأتمتة وضغط الهواء',
				'الإرسال',
				'الات',
				'قطعة منفصلة',
				'معلومات عنا',
				'بصفتنا شركة ناشئة ، نحن ملتزمون بالاستدامة البيئية ومتحمسون لتعزيز مبادئ إعادة التدوير وإعادة استخدام السلع الصناعية. هدفنا هو تشجيع المصانع على تقليل إنتاجها وتقليل التلوث من خلال تبني ممارسات صديقة للبيئة تعطي الأولوية للاستخدام الفعال للموارد. نعتقد أنه من خلال نشر الوعي حول أهمية إعادة التدوير وإعادة الاستخدام ، يمكننا إحداث تأثير إيجابي على البيئة وبناء مستقبل أكثر استدامة.',
				'ابق على تواصل معنا',
				'اضغط هنا للحصول على جميع المعلومات التي تحتاجها',
				'حقوق النشر محفوظة'
            );
        } else if ($lang == 'sv') {
            $phrases = array(
                'Hem',
                'Vår vision',
                'Intressen',
                'Om oss',
                'Komma i kontakt',
                'EXPERTER på INDUSTRIMASKINER!',
                'DU KOMMER ALDRIG ÅNGRA ATT DU ARBETAT MED OSS',
                'Hur arbetar vi?',
                'Det är så enkelt som A B C men ändå väldigt tillmötesgående.',
                'A: Vi köper dina industrimaskiner och elektrisk utrustning.',
                'B: Vi renoverar dem.',
                'C: Vi distribuerar produkterna till individer och företag som är i behov.',
                'Vårt intresse av varor',
                'Elektriska motorer <br>Växellådor<br>Pumpar<br>Hydrauliska delar',
                'ventiler',
                'Lager',
                'Automation och pneumatik',
                'Transmissioner',
                'Maskineri',
                'Reservdelar',
                'Om oss',
                'Som ett nystartat företag är vi engagerade i miljömässig hållbarhet och brinner för att främja principerna för återvinning och återanvändning av industrivaror. Vårt mål är att uppmuntra fabriker att minska sin produktion och minimera föroreningar genom att anta miljövänliga metoder som prioriterar effektiv användning av resurser. Vi tror att genom att sprida medvetenhet om vikten av återvinning och återanvändning kan vi ha en positiv inverkan på miljön och bygga en mer hållbar framtid.',
                'Kontakta oss',
                'Tryck här för att få all information du behöver',
                'Upphovsrätt'
            );
        } else if ($lang == 'de') {
            $phrases = array(
                'Heim',
                'Unsere Vision',
                'Interessen',
                'Über uns',
                'In Kontakt kommen',
                'INDUSTRIEMASCHINEN-EXPERTEN!',
                'Sie werden es nie bereuen, mit uns zusammengearbeitet zu haben',
                'Wie arbeiten wir?',
                'Es ist so einfach wie A B C und dennoch sehr zuvorkommend.',
                'A: Wir kaufen Ihre Industriemaschinen und Elektrogeräte.',
                'B: Wir renovieren sie.',
                'C: Wir verteilen die Produkte an bedürftige Privatpersonen und Unternehmen.',
                'Unser Wareninteresse',
                'Elektromotoren <br>Getriebe<br>Pumpen<br>Hydraulikteile',
                'Ventile',
                'Lager',
                'Automatisierung und Pneumatik',
                'Übertragungen',
                'Maschinen',
                'Ersatzteile',
                'Über uns',
                'Als Startup-Unternehmen engagieren wir uns für ökologische Nachhaltigkeit und fördern mit Leidenschaft die Prinzipien des Recyclings und der Wiederverwendung von Industriegütern.“ Unser Ziel ist es, Fabriken zu ermutigen, ihre Produktion zu reduzieren und die Umweltverschmutzung zu minimieren, indem wir umweltfreundliche Praktiken einführen, bei denen die effiziente Nutzung von Ressourcen im Vordergrund steht. „Wir glauben, dass wir durch die Sensibilisierung für die Bedeutung von Recycling und Wiederverwendung einen positiven Einfluss auf die Umwelt haben und eine nachhaltigere Zukunft aufbauen können.',
                'Nehmen Sie Kontakt mit uns auf',
                'Klicken Sie hier, um alle Informationen zu erhalten, die Sie benötigen',
                'Urheberrechte ©'
            );
        } else if ($lang == 'nl') {
            $phrases = array(
                'Thuis',
                'Onze visie',
                'Interesses',
                'Over ons',
                'Neem contact op',
                'INDUSTRIËLE MACHINES EXPERTS!',
                'JE ZULT NOOIT SPIJT HEBBEN MET ONS TE WERKEN',
                'Hoe werken we?',
                'Het is zo simpel als A B C en toch erg meegaand.',
                'A: Wij kopen uw industriële machines en elektrische apparatuur.',
                'B: We renoveren ze.',
                'C: We distribueren de producten naar particulieren en bedrijven die in nood zijn.',
                'Ons belang van goederen',
                'Elektromotoren <br>Versnellingsbakken<br>Pompen<br>Hydraulische onderdelen',
                'Kleppen',
                'Lagers',
                'Automatisering en pneumatiek',
                'Transmissies',
                'Machines',
                'Reserveonderdelen',
                'Over ons',
                'Als startend bedrijf zetten we ons in voor ecologische duurzaamheid en zijn we gepassioneerd over het promoten van de principes van recycling en hergebruik van industriële goederen. Ons doel is om fabrieken aan te moedigen hun productie te verminderen en vervuiling te minimaliseren door milieuvriendelijke praktijken toe te passen die prioriteit geven aan het efficiënte gebruik van hulpbronnen. Wij geloven dat we door bewustwording over het belang van recycling en hergebruik te verspreiden, een positieve impact kunnen hebben op het milieu en kunnen bouwen aan een duurzamere toekomst.',
                'Neem contact op met ons',
                'Druk hier voor alle informatie die je nodig hebt',
                'Auteursrechten'
            );
        } else if ($lang == 'it') {
            $phrases = array(
                'Casa',
                'La nostra visione',
                'Interessi',
                'Chi siamo',
                'Mettiti in contatto',
                'ESPERTI DI MACCHINE INDUSTRIALI!',
                'NON TI PENTIRAI MAI DI LAVORARE CON NOI',
                'Come lavoriamo?',
                'È semplice come A B C ma molto accomodante.',
                'A: Acquistiamo le tue macchine industriali e apparecchiature elettriche.',
                'B: Li ristrutturiamo.',
                'C: Distribuiamo i prodotti a privati e aziende che ne hanno bisogno.',
                'Il nostro interesse per le merci',
                'Motori elettrici <br>Riduttori<br>Pompe<br>Parti idrauliche',
                'Valvole',
                'Cuscinetti',
                'Automazione e pneumatica',
                'Trasmissioni',
                'Macchinari',
                'Pezzi di ricambio',
                'Chi siamo',
                'In qualità di azienda startup, ci impegniamo per la sostenibilità ambientale e siamo appassionati di promuovere i principi del riciclo e del riutilizzo dei beni industriali. Il nostro obiettivo è incoraggiare le fabbriche a ridurre la loro produzione e minimizzare l\'inquinamento adottando pratiche eco-compatibili che diano la priorità all\'uso efficiente delle risorse. Crediamo che diffondendo la consapevolezza sull\'importanza del riciclo e del riutilizzo, possiamo avere un impatto positivo sull\'ambiente e costruire un futuro più sostenibile.',
                'Mettiti in contatto con noi',
                'Premi qui per ottenere tutte le informazioni di cui hai bisogno',
                'Diritto d\'autore'
            );
        } else if ($lang == 'fr') {
            $phrases = array(
                'Maison',
                'Notre vision',
                'Intérêts',
                'À propos de nous',
                'Entrer en contact',
                'EXPERTS EN MACHINES INDUSTRIELLES!',
                'VOUS NE REGRETTEREZ JAMAIS DE TRAVAILLER AVEC NOUS',
                'Comment travaillons-nous?',
                'C\'est aussi simple que A B C mais très accommodant.',
                'A : Nous achetons vos machines industrielles et vos équipements électriques.',
                'B: Nous les rénovons.',
                'C: Nous distribuons les produits aux particuliers et aux entreprises qui en ont besoin.',
                'Notre intérêt des biens',
                'Moteurs électriques <br>Boîtes de vitesses<br>Pompes<br>Pièces hydrauliques',
                'Valves',
                'Roulements',
                'Automatisme et Pneumatique',
                'Transmission',
                'Machinerie',
                'Des pièces de rechange',
                'À propos de nous',
                ' En tant qu\'entreprise en démarrage, nous nous engageons pour la durabilité environnementale et sommes passionnés par la promotion des principes de recyclage et de réutilisation des biens industriels. Notre objectif est d\'encourager les usines à réduire leur production et à minimiser la pollution en adoptant des pratiques respectueuses de l\'environnement qui privilégient l\'utilisation efficace des ressources. Nous croyons qu\'en faisant prendre conscience de l\'importance du recyclage et de la réutilisation, nous pouvons avoir un impact positif sur l\'environnement et construire un avenir plus durable.',
                'Prenez contact avec nous',
                'Appuyez ici pour obtenir toutes les informations dont vous avez besoin',
                'Droits d\'auteur'
            );
        }

        return $phrases[$index];
    }

    $langs = array('sv', 'en', 'ar', 'de', 'nl', 'it', 'fr');

    $lang = $_GET['lang'];

    if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($lang) && in_array($lang, $langs)) {
        $lang = $_GET['lang'];
    } else {
        $lang = 'en';
    }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/8def8f3969.js" crossorigin="anonymous"></script>

        <script src="https://kit.fontawesome.com/3477ae541c.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
        <style>
            body {<?php if ($lang == 'ar') echo 'direction: rtl;'; ?>}
            <?php if ($lang == 'ar') echo '@media (max-width:790px) { #aboutustitle, #ourvisiontitle, #ourvisiontitle1 {margin-left: 0; margin-right: 20px} }'; ?>
        </style>
        <!-- dont forget to add the lines for mobile devices -->
        <title>BaRa Metall</title>
    </head>
    <body>

        <!-- header -->
        <div class="container">
            <header class="header">
                <!-- <a href="#home" id="logo" class="logo"><img src="images/logo.jpg"></a> -->
                <div class="logo">
                    <a href="#home" class="logo">
                        <img src="images/Real bara image.jpeg" id="logo">
                    </a>
                </div>

                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a href="#home"><i id="house" class="fa-solid fa-house" style="color: #11466e;"></i> <?php echo translate_page(0, $lang); ?></a></li>
                        <li><a href="#ourvision1"><?php echo translate_page(1, $lang); ?></a></li>
                        <li><a href="#interests"><?php echo translate_page(2, $lang); ?></a></li>
                        <li><a href="#aboutus"><?php echo translate_page(3, $lang); ?></a></li>
                        <!-- <a href="#aboutus">About Us</a>
                        <a href="#team">Team</a> -->
                        <li><a href="#contact1"><?php echo translate_page(4, $lang); ?></a></li>
                    </ul>
                </nav>

                <div id="navbar" class="lang-menu">
                    <div id="navbar" class="selected-lang">
                        <i class="fa-solid fa-language fa-xl" style="color: #11466e;"></i>
                    </div>
                    <ul>
                        <li><a href="index.php?lang=sv">Svenska</a></li>
                        <li><a href="index.php?lang=en">English</a></li>
                        <li><a href="index.php?lang=ar">العربية</a></li>
                        <li><a href="index.php?lang=de">Deutsch</a></li>
                        <li><a href="index.php?lang=nl">Nederlands</a></li>
                        <li><a href="index.php?lang=it">Italiano</a></li>
                        <li><a href="index.php?lang=fr">Français</a></li>
                    </ul>
                </div>

                <i class="fa-solid fa-bars"></i>

            </header>
        </div>
        <!-- /header -->

        <!-- home -->
        <section class="home" id="home">
            <div class="swiper home-slid">
                <div class="swiper-wrapper">
                    <div class="swiper-slide ">
                        <div class="image">
                            <!-- <img src="https://images.interestingengineering.com/images/import/2017/08/atlas_cern.jpg" id="image1" alt="iamge"> -->
                        </div>
                        <div class="content">
                            <h1 id="helloworld"><?php echo translate_page(5, $lang); ?></h1>
                            <p><?php echo translate_page(6, $lang); ?></p>
                        </div>
                    </div>

                    <!-- <div class="barap">

                    <h1 id="h1p">Ba&Ra Metall</h1>
                    <h2 id="h2p">Purchase of Industrial Electric Equipment</h2>

                    </div> -->
                </div>
            </div>
        </section>

        <div id="ourvision1">
            <div class="container">
                <h2 id="ourvisiontitle"><?php echo translate_page(7, $lang); ?></h2>
                <p id="ourvisiontitle1"><?php echo translate_page(8, $lang); ?></p>
                <ul id="ourvision">
                    <li><?php echo translate_page(9, $lang); ?></li>
                    <li><?php echo translate_page(10, $lang); ?></li>
                    <li><?php echo translate_page(11, $lang); ?></li>
                </ul>
            </div>
        </div>

        <div class="pros" id="interests">
            <div class="container">
                <div style="text-align: center;"><h1 id="productsh1"><?php echo translate_page(12, $lang); ?></h1></div>
                <div id="imagestext" class="imagestext">
                    <div class="image">
                        <div class="overlay">
                            <h2><?php echo translate_page(13, $lang); ?></h2>
                        </div>
                        <img src="images/electricmotors1.jpg">
                    </div>
                    <div class="image">
                        <div class="overlay">
                            <h2><?php echo translate_page(14, $lang); ?></h2>
                        </div>
                        <img src="images/valves2.jpg" id="image3" alt="iamge">
                    </div>
                    <div class="image">
                        <div class="overlay">
                            <h2><?php echo translate_page(15, $lang); ?></h2>
                        </div>
                        <img src="images/bearings1.jpg" id="image4" alt="iamge">
                    </div>
                    <div class="image">
                        <div class="overlay">
                            <h2><?php echo translate_page(16, $lang); ?></h2>
                        </div>
                        <img src="images/automation and pneumatics1.jpg" id="image5" alt="iamge">
                    </div>
                    <div class="image">
                        <div class="overlay">
                            <h2><?php echo translate_page(17, $lang); ?></h2>
                        </div>
                        <img src="images/transmissions1.jpg" id="image6" alt="iamge">
                    </div>
                    <div class="image">
                        <div class="overlay">
                            <h2><?php echo translate_page(18, $lang); ?></h2>
                        </div>
                        <img src="images/machinery1.jpg" id="image7" alt="iamge">
                    </div>
                    <div class="image">
                        <div class="overlay">
                            <h2><?php echo translate_page(19, $lang); ?></h2>
                        </div>
                        <img src="images/spare parts1.jpg" id="image8">
                    </div>
                </div>

                <div id="mobileimages" class="mobileimages">
                    <div class="imagemobile">
                        <img id="mobileimage1" src="images/electricmotors1.jpg">
                        <div class="mobileimagesh2">
                            <h2 id="mobileimagesh2"><?php echo translate_page(13, $lang); ?></h2>
                        </div>
                    </div>

                    <div class="imagemobile">
                        <img id="mobileimage1" src="images/valves2.jpg">
                        <div class="mobileimagesh2">
                            <h2 id="mobileimagesh2"><?php echo translate_page(14, $lang); ?></h2>
                        </div>
                    </div>

                    <div class="imagemobile">
                        <img id="mobileimage1" src="images/bearings1.jpg">
                        <div class="mobileimagesh2">
                            <h2 id="mobileimagesh2"><?php echo translate_page(15, $lang); ?></h2>
                        </div>
                    </div>

                    <div class="imagemobile">
                        <img id="mobileimage1" src="images/automation and pneumatics1.jpg">
                        <div class="mobileimagesh2">
                            <h2 id="mobileimagesh2"><?php echo translate_page(16, $lang); ?></h2>
                        </div>
                    </div>

                    <div class="imagemobile">
                        <img id="mobileimage1" src="images/transmissions1.jpg">
                        <div class="mobileimagesh2">
                            <h2 id="mobileimagesh2"><?php echo translate_page(17, $lang); ?></h2>
                        </div>
                    </div>

                    <div class="imagemobile">
                        <img id="mobileimage1" src="images/machinery1.jpg">
                        <div class="mobileimagesh2">
                            <h2 id="mobileimagesh2"><?php echo translate_page(18, $lang); ?></h2>
                        </div>
                    </div>

                    <div class="imagemobile">
                        <img id="mobileimage1" src="images/spare parts1.jpg">
                        <div class="mobileimagesh2">
                            <h2 id="mobileimagesh2"><?php echo translate_page(19, $lang); ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- about us  -->
        <section id="aboutus" class="aboutus">
            <div class="container">
                <h2 id="aboutustitle"><?php echo translate_page(20, $lang); ?></h2>
                <p id="aboutusmain"><?php echo translate_page(21, $lang); ?></p>
            </div>
        </section>

        <!-- contact section  -->
        <section class="contact1" id="contact1">
            <div id="contactus" class="contactus">
                <div class="container">
                    <div class="title">
                        <h2 id="git"><?php echo translate_page(22, $lang); ?></h2>
                    </div>
                    <div class="box">
                        <!-- form -->
                        <div class="contact form">
                            <!-- dont forget to ADD DADS email instead of yours  -->
                            <form action="https://formsubmit.co/cbcda25d9f15b3900d210ae83c7d6a0a" method="POST">
                                <input type="hidden" name="_captcha" value="false">
                                <div class="formBox">
                                    <div class="row50">
                                        <div class="inputBox">
                                            <input type="text" name="name" placeholder="Name*" required>
                                        </div>
                                    </div>

                                    <div class="row50">
                                        <div class="inputBox" name="Email">
                                            <input type="text" name="email" placeholder="Email*" required>
                                        </div>
                                        <div class="inputBox" name="Number">
                                            <input type="text" name="_subject" placeholder="Phone Number">
                                        </div>
                                    </div>

                                    <div class="row100">
                                        <div class="inputBox" name="Message" >
                                            <textarea name="Message" placeholder="Write your message or question here..." required></textarea>
                                        </div>
                                    </div>

                                    <div class="row100">
                                        <div class="inputBox">
                                            <input id="SendBtn" type="Submit" value="Send">
                                        </div> 
                                    </div>
                                </div>

                                <div class="qrcodes1">
                                    <div class="ebayqr">
                                        <img src="images/EBAYQR.jpg">
                                    </div>
                                    <div class="fbqr">
                                        <img src="images/FBQR.jpg">
                                    </div>
                                    <div class="waqr">
                                        <img src="images/QRcodeWA.jpg">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- infobox -->
                        <!-- <div class="contact info"> -->
                            <!-- contact info  -->
                            <!-- <div class="infoBox"> -->
                                <!-- dont forget to add where we are located  -->
                                <!-- Dont forget to add dads email when mahmoud is done  -->
                                    <!-- <ul class="sci"> -->
                                        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d260532.7271070731!2d17.65241461925135!3d59.32607622752477!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x465f763119640bcb%3A0xa80d27d3679d7766!2sStockholm!5e0!3m2!1ssv!2sse!4v1681937518119!5m2!1ssv!2sse" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                                        <!-- dont forget to add social media  -->
                                        <!-- <li><a href="https://web.whatsapp.com/"><i class="fa-brands fa-whatsapp"></i>WhatsApp</a></li> -->
                                        <!-- <li><a href="https://web.whatsapp.com/"><i class="fa-brands fa-whatsapp"></i>Linkedin</a></li> -->
                                    <!-- </ul> -->
                            <!-- </div>  -->
                        <!-- </div>  -->
                        <!-- map -->
                        <!-- dont forget to add location and to make the map -->
                        <div class="qrcodes">
                            <div class="qrcodestext">
                                <a id="qrbtn" href="https://www.qrcodechimp.com/page/barametall?v=chk1685797463"><i id="infocard" class="fa-solid fa-address-card fa-xl" style="color: #fff;"></i> <?php echo translate_page(23, $lang); ?></a>
                            </div>
                            <div class="barametallqr">
                                <a href="https://www.qrcodechimp.com/page/barametall?v=chk1685797463"><img id="qrinfo" src="images/barametallqr.jpg"></a>
                            </div>
                        </div>
                        <!-- kod för att stänga av spionering
                        ##20##
                        ##20## -->
                    </div>
                </div>
            </div>
        </section>

        <footer id="copyrightfooter">
            <div class="container">
                <h1 id="copyright"><?php echo translate_page(24, $lang); ?> © 2023 Ba&Ra Metall</h1>
            </div>
        </footer>
        <!-- /home -->

        <div class="elfsight-app-df51eee5-bfe3-4850-9c65-5cad1b453acc"></div>

        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <script src="app.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
    </body>
</html>