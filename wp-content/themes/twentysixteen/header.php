<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-79164586-1', 'auto');
	  ga('send', 'pageview');

	</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php
$vd = array();

$vd['01']['01'] = 'Laimnesis, Solvija, Solvita';
$vd['01']['02'] = 'Indulis, Iva, Ivis, Ivo';
$vd['01']['03'] = 'Miervalda, Miervaldis, Ringolds';
$vd['01']['04'] = 'Ilva, Ilvita, Spodra';
$vd['01']['05'] = 'Sīmanis, Zintis';
$vd['01']['06'] = 'Arnita, Spulga';
$vd['01']['07'] = 'Digmārs, Juliāns, Rota, Zigmārs';
$vd['01']['08'] = 'Gatis, Ivanda';
$vd['01']['09'] = 'Aksels, Alta, Kaspars';
$vd['01']['10'] = 'Dorisa, Tatjana';
$vd['01']['11'] = 'Franciska, Smaida';
$vd['01']['12'] = 'Reina, Reinholds, Reinis, Renāts';
$vd['01']['13'] = 'Aira, Ārijs, Āris, Harijs';
$vd['01']['14'] = 'Raitis, Raits, Roberta, Roberts';
$vd['01']['15'] = 'Felicita, Fēlikss';
$vd['01']['16'] = 'Lida, Lidija';
$vd['01']['17'] = 'Dravis, Tenis';
$vd['01']['18'] = 'Antis, Antons';
$vd['01']['19'] = 'Alnis, Andulis';
$vd['01']['20'] = 'Alģis, Oļģerts, Orests';
$vd['01']['21'] = 'Agne, Agnese, Agnija';
$vd['01']['22'] = 'Austris';
$vd['01']['23'] = 'Grieta, Strauta';
$vd['01']['24'] = 'Eglons, Krišs, Ksenija';
$vd['01']['25'] = 'Sigurds, Zigurds';
$vd['01']['26'] = 'Agneta, Agnis, Ansis';
$vd['01']['27'] = 'Ildze, Ilze, Izolde';
$vd['01']['28'] = 'Kārlis, Spodris';
$vd['01']['29'] = 'Aivars, Valērijs';
$vd['01']['30'] = 'Pārsla, Tīna, Valentīna';
$vd['01']['31'] = 'Tekla, Violeta';
$vd['02']['01'] = 'Brigita, Indars, Indra, Indris';
$vd['02']['02'] = 'Sonora, Spīdola';
$vd['02']['03'] = 'Aīda, Ida, Vida';
$vd['02']['04'] = 'Daila, Veronika';
$vd['02']['05'] = 'Agate, Selga, Silga, Sinilga';
$vd['02']['06'] = 'Dace, Dārta, Dora';
$vd['02']['07'] = 'Nelda, Ričards, Rihards';
$vd['02']['08'] = 'Aldona, Česlavs';
$vd['02']['09'] = 'Apolonija, Simona';
$vd['02']['10'] = 'Paula, Paulīne';
$vd['02']['11'] = 'Laima, Laimdota';
$vd['02']['12'] = 'Karlīna, Līna';
$vd['02']['13'] = 'Malda, Melita';
$vd['02']['14'] = 'Valentīns';
$vd['02']['15'] = 'Aloizs, Alvils, Olafs, Olavs';
$vd['02']['16'] = 'Džuljeta, Jūlija';
$vd['02']['17'] = 'Donats, Konstance';
$vd['02']['18'] = 'Kintija, Kora';
$vd['02']['19'] = 'Zane, Zuzanna';
$vd['02']['20'] = 'Smuidra, Smuidris, Vitauts';
$vd['02']['21'] = 'Ariadne, Eleonora';
$vd['02']['22'] = 'Adrians, Ārija, Rigonda';
$vd['02']['23'] = 'Almants, Haralds';
$vd['02']['24'] = 'Diāna, Dina, Dins';
$vd['02']['25'] = 'Alma, Annemarija';
$vd['02']['26'] = 'Aurēlija, Evelīna, Mētra';
$vd['02']['27'] = 'Andra, Līva, Līvija';
$vd['02']['28'] = 'Justs, Skaidra, Skaidrīte';
$vd['02']['29'] = '';
$vd['03']['01'] = 'Ilgvars, Ivars';
$vd['03']['02'] = 'Laila, Lavīze, Luīze';
$vd['03']['03'] = 'Marts, Tālavs, Tālis';
$vd['03']['04'] = 'Alise, Auce';
$vd['03']['05'] = 'Aurora, Austra';
$vd['03']['06'] = 'Centis, Gotfrīds, Vents';
$vd['03']['07'] = 'Ella, Elmīra';
$vd['03']['08'] = 'Dagmāra, Marga, Margita';
$vd['03']['09'] = 'Ēvalds';
$vd['03']['10'] = 'Laimrota, Liliāna, Silvija';
$vd['03']['11'] = 'Agita, Konstantīns';
$vd['03']['12'] = 'Aija, Aiva, Aivis';
$vd['03']['13'] = 'Balvis, Ernests';
$vd['03']['14'] = 'Matilde, Ulrika';
$vd['03']['15'] = 'Amalda, Amilda, Imalda';
$vd['03']['16'] = 'Guntars, Guntis, Guntris';
$vd['03']['17'] = 'Gerda, Gertrūde, Ģertrūde';
$vd['03']['18'] = 'Adelīna, Ilona';
$vd['03']['19'] = 'Jāzeps';
$vd['03']['20'] = 'Irbe, Made';
$vd['03']['21'] = 'Benedikts, Dzelme, Una, Unigunde';
$vd['03']['22'] = 'Dziedra, Tamāra';
$vd['03']['23'] = 'Mirdza, Žanete, Žanna';
$vd['03']['24'] = 'Izidors, Kazimirs';
$vd['03']['25'] = 'Marita, Māra, Mārīte';
$vd['03']['26'] = 'Eiženija, Ženija';
$vd['03']['27'] = 'Gustavs, Gusts, Tālrīts';
$vd['03']['28'] = 'Ginta, Gunda, Gunta';
$vd['03']['29'] = 'Agija, Aldonis';
$vd['03']['30'] = 'Igmārs, Ilgmārs, Nanija';
$vd['03']['31'] = 'Atvars, Gvido';
$vd['04']['01'] = 'Dagne, Dagnis';
$vd['04']['02'] = 'Imgarde, Irmgarde';
$vd['04']['03'] = 'Daira, Dairis';
$vd['04']['04'] = 'Ārvalda, Ārvaldis, Ārvalds, Herta, Valda';
$vd['04']['05'] = 'Aivija, Vidaga, Vija';
$vd['04']['06'] = 'Dzinta, Filips, Vīlips, Zinta';
$vd['04']['07'] = 'Helmuts, Zina, Zinaīda';
$vd['04']['08'] = 'Dana, Dans, Danute, Edgars';
$vd['04']['09'] = 'Alla, Valērija, Žubīte';
$vd['04']['10'] = 'Anita, Anitra, Zīle';
$vd['04']['11'] = 'Hermanis, Vilmārs';
$vd['04']['12'] = 'Ainis, Jūlijs';
$vd['04']['13'] = 'Egils, Egīls, Nauris';
$vd['04']['14'] = 'Gudrīte, Strauja';
$vd['04']['15'] = 'Aelita, Gastons';
$vd['04']['16'] = 'Alfs, Bernadeta, Mintauts';
$vd['04']['17'] = 'Rūdis, Rūdolfs, Viviāna';
$vd['04']['18'] = 'Jadviga, Laura';
$vd['04']['19'] = 'Fanija, Vēsma';
$vd['04']['20'] = 'Mirta, Ziedīte';
$vd['04']['21'] = 'Anastasija, Marģers';
$vd['04']['22'] = 'Armanda, Armands';
$vd['04']['23'] = 'Georgs, Jurģis, Juris';
$vd['04']['24'] = 'Nameda, Ritvaldis, Visvaldis';
$vd['04']['25'] = 'Bārbala, Līksma';
$vd['04']['26'] = 'Alīna, Rūsiņš, Sandris';
$vd['04']['27'] = 'Klementīne, Raimonda, Raina, Tāle';
$vd['04']['28'] = 'Gundega, Terēze';
$vd['04']['29'] = 'Laine, Raimonds, Vilnis';
$vd['04']['30'] = 'Liāna, Lilija';
$vd['05']['01'] = 'Ziedonis';
$vd['05']['02'] = 'Sigmunds, Zigismunds, Zigmunds';
$vd['05']['03'] = 'Gints, Uvis';
$vd['05']['04'] = 'Vijolīte, Viola, Vizbulīte';
$vd['05']['05'] = 'Ģederts, Ģirts';
$vd['05']['06'] = 'Didzis, Gaidis';
$vd['05']['07'] = 'Henriete, Henrijs, Jete';
$vd['05']['08'] = 'Staņislava, Staņislavs, Stefānija';
$vd['05']['09'] = 'Einārs, Ervīns, Klāvs';
$vd['05']['10'] = 'Maija, Paija';
$vd['05']['11'] = 'Karmena, Manfreds, Milda';
$vd['05']['12'] = 'Ina, Ināra, Inārs, Valija';
$vd['05']['13'] = 'Ira, Iraīda, Irēna, Irina';
$vd['05']['14'] = 'Aivita, Elfa, Elvita, Krišjānis';
$vd['05']['15'] = 'Airita, Arita, Sofija, Taiga';
$vd['05']['16'] = 'Edijs, Edvīns';
$vd['05']['17'] = 'Dailis, Herberts, Umberts';
$vd['05']['18'] = 'Ēriks, Inese, Inesis';
$vd['05']['19'] = 'Lita, Sibilla, Teika';
$vd['05']['20'] = 'Salvis, Selva, Venta';
$vd['05']['21'] = 'Akvelīna, Ernestīne, Ingmārs';
$vd['05']['22'] = 'Emīlija';
$vd['05']['23'] = 'Leokādija, Leontīne, Ligija, Lonija';
$vd['05']['24'] = 'Ilvija, Marlēna, Ziedone';
$vd['05']['25'] = 'Anšlavs, Junora';
$vd['05']['26'] = 'Eduards, Edvards, Varis';
$vd['05']['27'] = 'Dzidra, Dzidris, Gunita, Loreta';
$vd['05']['28'] = 'Vilhelms, Vilis';
$vd['05']['29'] = 'Maksis, Raivis, Raivo';
$vd['05']['30'] = 'Lolita, Vitolds';
$vd['05']['31'] = 'Alīda, Jūsma';
$vd['06']['01'] = 'Bernedīne, Biruta, Mairita';
$vd['06']['02'] = 'Emma, Lība';
$vd['06']['03'] = 'Ineta, Inta, Intra';
$vd['06']['04'] = 'Elfrīda, Sindija, Sintija';
$vd['06']['05'] = 'Igors, Ingvars, Margots';
$vd['06']['06'] = 'Ardis, Ingrīda';
$vd['06']['07'] = 'Arnis, Gaida';
$vd['06']['08'] = 'Frīda, Frīdis, Mundra';
$vd['06']['09'] = 'Gita, Ligita';
$vd['06']['10'] = 'Anatolijs, Anatols, Malva';
$vd['06']['11'] = 'Ingus, Mairis, Vidvuds';
$vd['06']['12'] = 'Ija, Lenora, Nora';
$vd['06']['13'] = 'Ainārs, Uva, Zigfrīds';
$vd['06']['14'] = 'Saiva, Saivis, Santis, Sentis, Tija';
$vd['06']['15'] = 'Baņuta, Vilija, Vits, Žermēna';
$vd['06']['16'] = 'Justīne, Juta';
$vd['06']['17'] = 'Artis, Artūrs';
$vd['06']['18'] = 'Alberts, Madis';
$vd['06']['19'] = 'Nils, Viktors';
$vd['06']['20'] = 'Maira, Rasa, Rasma';
$vd['06']['21'] = 'Egita, Emīls, Monvīds';
$vd['06']['22'] = 'Laimdots, Laimiņš, Ludmila';
$vd['06']['23'] = 'Līga';
$vd['06']['24'] = 'Jānis';
$vd['06']['25'] = 'Maiga, Milija';
$vd['06']['26'] = 'Ausma, Ausmis, Inguna, Inguns';
$vd['06']['27'] = 'Malvis, Malvīne';
$vd['06']['28'] = 'Kitija, Viestards, Viesturs';
$vd['06']['29'] = 'Paulis, Pauls, Pāvils, Pēteris';
$vd['06']['30'] = 'Mareks, Tālivaldis';
$vd['07']['01'] = 'Imants, Ingars, Intars, Rimants';
$vd['07']['02'] = 'Halina, Ilvars, Lauma';
$vd['07']['03'] = 'Benita, Everita, Verita';
$vd['07']['04'] = 'Sandijs, Sandis, Uldis, Ulvis';
$vd['07']['05'] = 'Andžejs, Andžs, Edīte, Esmeralda';
$vd['07']['06'] = 'Anrijs, Arkādijs';
$vd['07']['07'] = 'Alda, Maruta';
$vd['07']['08'] = 'Ada, Adele, Antra';
$vd['07']['09'] = 'Asna, Asne, Zaiga';
$vd['07']['10'] = 'Lija, Olīvija';
$vd['07']['11'] = 'Leonora, Svens';
$vd['07']['12'] = 'Indriķis, Ints, Namejs';
$vd['07']['13'] = 'Margarita, Margrieta';
$vd['07']['14'] = 'Anvars, Oskars, Ritvars';
$vd['07']['15'] = 'Egija, Egmonts, Egons, Henrihs, Henriks';
$vd['07']['16'] = 'Estere, Hermīne';
$vd['07']['17'] = 'Aleksejs, Aleksis';
$vd['07']['18'] = 'Rozālija, Roze';
$vd['07']['19'] = 'Digna, Jautrīte, Kamila';
$vd['07']['20'] = 'Ramona, Ritma';
$vd['07']['21'] = 'Meldra, Meldris, Melisa';
$vd['07']['22'] = 'Marija, Marika, Marina';
$vd['07']['23'] = 'Magda, Magdalēna, Magone, Mērija';
$vd['07']['24'] = 'Krista, Kristiāna, Kristiāns, Kristīne';
$vd['07']['25'] = 'Jēkabs, Žaklīna';
$vd['07']['26'] = 'Ance, Anna, Annija';
$vd['07']['27'] = 'Dita, Marta';
$vd['07']['28'] = 'Cecīlija, Cilda';
$vd['07']['29'] = 'Edmunds, Edžus, Vidmants';
$vd['07']['30'] = 'Regnārs, Renārs, Valters';
$vd['07']['31'] = 'Angelika, Ruta, Rūta, Sigita';
$vd['08']['01'] = 'Albīna, Albīns';
$vd['08']['02'] = 'Normunds, Stefans';
$vd['08']['03'] = 'Augusts';
$vd['08']['04'] = 'Romāns, Romualda, Romualds';
$vd['08']['05'] = 'Arvils, Osvalds';
$vd['08']['06'] = 'Aisma, Askolds';
$vd['08']['07'] = 'Alfrēds, Fredis, Madars';
$vd['08']['08'] = 'Mudīte, Vladislava, Vladislavs';
$vd['08']['09'] = 'Genoveva, Madara';
$vd['08']['10'] = 'Audris, Brencis, Inuta';
$vd['08']['11'] = 'Liega, Olga, Zigita, Zita';
$vd['08']['12'] = 'Klāra, Vizma';
$vd['08']['13'] = 'Elvīra, Rēzija, Velga';
$vd['08']['14'] = 'Virma, Zelma, Zemgus';
$vd['08']['15'] = 'Dzelde, Zelda, Zenta';
$vd['08']['16'] = 'Astra, Astrīda';
$vd['08']['17'] = 'Oļegs, Vineta';
$vd['08']['18'] = 'Elena, Ellena, Helēna, Liena, Liene';
$vd['08']['19'] = 'Imanta, Melānija';
$vd['08']['20'] = 'Bernhards, Boriss';
$vd['08']['21'] = 'Janīna, Linda';
$vd['08']['22'] = 'Everts, Rudīte';
$vd['08']['23'] = 'Ralfs, Valgudis, Vitālijs';
$vd['08']['24'] = 'Bērtulis, Boļeslavs';
$vd['08']['25'] = 'Ivonna, Ludis, Ludvigs, Patrīcija';
$vd['08']['26'] = 'Broņislava, Broņislavs, Natālija, Tālija';
$vd['08']['27'] = 'Alens, Jorens, Žanis';
$vd['08']['28'] = 'Auguste, Guste';
$vd['08']['29'] = 'Aiga, Armīns, Vismants';
$vd['08']['30'] = 'Alvis, Jolanta, Samanta';
$vd['08']['31'] = 'Aigars, Vilma';
$vd['09']['01'] = 'Austrums, Ilmārs, Iluta';
$vd['09']['02'] = 'Elīza, Lizete, Zete';
$vd['09']['03'] = 'Bella, Berta';
$vd['09']['04'] = 'Dzintara, Dzintars, Dzintra';
$vd['09']['05'] = 'Klaudija, Persijs, Vaida';
$vd['09']['06'] = 'Magnuss, Maigonis, Mariuss';
$vd['09']['07'] = 'Ermīns, Regīna';
$vd['09']['08'] = 'Ilga';
$vd['09']['09'] = 'Bruno, Telma';
$vd['09']['10'] = 'Albertīne, Jausma';
$vd['09']['11'] = 'Signe, Signija';
$vd['09']['12'] = 'Erna, Eva, Evita';
$vd['09']['13'] = 'Iza, Izabella';
$vd['09']['14'] = 'Sanda, Sandija, Sanija, Sanita, Santa';
$vd['09']['15'] = 'Gunvaldis, Gunvaris, Sandra, Sondra';
$vd['09']['16'] = 'Asja, Asnate, Dāgs';
$vd['09']['17'] = 'Vaira, Vairis, Vera';
$vd['09']['18'] = 'Alita, Elita, Liesma';
$vd['09']['19'] = 'Muntis, Verners';
$vd['09']['20'] = 'Ginters, Guntra, Marianna';
$vd['09']['21'] = 'Mariss, Matīss, Modris';
$vd['09']['22'] = 'Maigurs, Mārica, Māris';
$vd['09']['23'] = 'Vanda, Veneranda, Venija';
$vd['09']['24'] = 'Agris, Agrita';
$vd['09']['25'] = 'Rauls, Rodrigo';
$vd['09']['26'] = 'Gundars, Knuts, Kurts';
$vd['09']['27'] = 'Ādolfs, Ilgonis';
$vd['09']['28'] = 'Lana, Sergejs, Svetlana';
$vd['09']['29'] = 'Miģelis, Mihails, Miks, Mikus, Miķelis';
$vd['09']['30'] = 'Elma, Elna, Menarda';
$vd['10']['01'] = 'Lāsma, Zanda, Zandis';
$vd['10']['02'] = 'Ilma, Skaidris';
$vd['10']['03'] = 'Elza, Ilizana';
$vd['10']['04'] = 'Francis, Modra';
$vd['10']['05'] = 'Amālija';
$vd['10']['06'] = 'Monika, Zilga, Zilgma';
$vd['10']['07'] = 'Daumants, Druvvaldis';
$vd['10']['08'] = 'Aina, Anete';
$vd['10']['09'] = 'Elga, Elgars, Helga';
$vd['10']['10'] = 'Arvis, Arvīds, Druvis';
$vd['10']['11'] = 'Monta, Silva, Tince';
$vd['10']['12'] = 'Kira, Valfrīds';
$vd['10']['13'] = 'Irma, Mirga';
$vd['10']['14'] = 'Minna, Vilhelmīne';
$vd['10']['15'] = 'Eda, Hedviga, Helvijs';
$vd['10']['16'] = 'Daiga, Dinija';
$vd['10']['17'] = 'Gaits, Karīna';
$vd['10']['18'] = 'Erlends, Rolanda, Rolands, Ronalds';
$vd['10']['19'] = 'Drosma, Drosmis, Elīna';
$vd['10']['20'] = 'Leonīda, Leonīds';
$vd['10']['21'] = 'Severīns, Urzula';
$vd['10']['22'] = 'Irīda, Īrisa';
$vd['10']['23'] = 'Daina, Dainida, Dainis';
$vd['10']['24'] = 'Modrīte, Mudrīte, Renāte';
$vd['10']['25'] = 'Beatrise, Beāte';
$vd['10']['26'] = 'Amanda, Amanta, Kaiva';
$vd['10']['27'] = 'Irita, Ita, Lilita';
$vd['10']['28'] = 'Antoņina, Ninona, Ņina, Oksana';
$vd['10']['29'] = 'Elva, Elvijs, Elvis, Laimis, Laimonis';
$vd['10']['30'] = 'Adīna, Nadīna, Ulla';
$vd['10']['31'] = 'Rinalda, Rinalds, Valts';
$vd['11']['01'] = 'Ikars';
$vd['11']['02'] = 'Dzīle, Viva, Vivita';
$vd['11']['03'] = 'Dagnija, Ērika';
$vd['11']['04'] = 'Atis, Otto, Otomārs';
$vd['11']['05'] = 'Lote, Šarlote';
$vd['11']['06'] = 'Leo, Leonarda, Leonards, Leons, Linards';
$vd['11']['07'] = 'Helma, Lotārs';
$vd['11']['08'] = 'Agra, Aleksandra';
$vd['11']['09'] = 'Teodors';
$vd['11']['10'] = 'Markuss, Mārcis, Mārtiņš';
$vd['11']['11'] = 'Nellija, Ojārs, Rainers';
$vd['11']['12'] = 'Kaija, Kornēlija';
$vd['11']['13'] = 'Eižens, Jevgēņija, Jevgēņijs';
$vd['11']['14'] = 'Fricis, Vikentijs';
$vd['11']['15'] = 'Leopolds, Unda, Undīne';
$vd['11']['16'] = 'Banga, Glorija';
$vd['11']['17'] = 'Hugo, Uga, Uģis';
$vd['11']['18'] = 'Aleksandrs, Doloresa';
$vd['11']['19'] = 'Betija, Elizabete, Liza, Līze';
$vd['11']['20'] = 'Anda, Andīna';
$vd['11']['21'] = 'Andis, Zeltīte';
$vd['11']['22'] = 'Aldis, Aldris, Alfons';
$vd['11']['23'] = 'Zigfrīda, Zigrīda, Zigrīds';
$vd['11']['24'] = 'Velda, Velta';
$vd['11']['25'] = 'Kadrija, Kate, Katrīna, Trīne';
$vd['11']['26'] = 'Konrāds, Sebastians';
$vd['11']['27'] = 'Lauris, Norberts';
$vd['11']['28'] = 'Olita, Rita, Vita';
$vd['11']['29'] = 'Ignats, Virgīnija';
$vd['11']['30'] = 'Andrejs, Andrievs, Andris';
$vd['12']['01'] = 'Arnolds, Emanuels';
$vd['12']['02'] = 'Meta, Sniedze';
$vd['12']['03'] = 'Evija, Jogita, Raita';
$vd['12']['04'] = 'Baiba, Barba, Barbara';
$vd['12']['05'] = 'Klaudijs, Sabīne, Sarma';
$vd['12']['06'] = 'Niklāvs, Nikolajs, Niks';
$vd['12']['07'] = 'Anta, Antonija, Dzirkstīte';
$vd['12']['08'] = 'Gunārs, Gunis, Vladimirs';
$vd['12']['09'] = 'Sarmīte, Tabita';
$vd['12']['10'] = 'Guna, Judīte';
$vd['12']['11'] = 'Valdemārs, Valdis, Voldemārs';
$vd['12']['12'] = 'Iveta, Otīlija';
$vd['12']['13'] = 'Lūcija, Veldze';
$vd['12']['14'] = 'Auseklis, Gaisma';
$vd['12']['15'] = 'Hanna, Jana, Johanna';
$vd['12']['16'] = 'Alvīne';
$vd['12']['17'] = 'Hilda, Teiksma';
$vd['12']['18'] = 'Klinta, Kristaps, Kristers, Kristofers, Krists';
$vd['12']['19'] = 'Lelde, Sarmis';
$vd['12']['20'] = 'Arta, Minjona';
$vd['12']['21'] = 'Saulcerīte, Tomass, Toms';
$vd['12']['22'] = 'Saulvedis';
$vd['12']['23'] = 'Balva, Viktorija';
$vd['12']['24'] = 'Ādams, Ieva';
$vd['12']['25'] = 'Larisa, Stella';
$vd['12']['26'] = 'Dainuvīte, Gija, Megija';
$vd['12']['27'] = 'Elmārs, Helmārs, Inita';
$vd['12']['28'] = 'Inga, Ingeborga, Irvita, Ivita';
$vd['12']['29'] = 'Ilgona, Solveiga';
$vd['12']['30'] = 'Daniela, Dāniels, Dāvids, Dāvis';
$vd['12']['31'] = 'Kalvis, Silvestrs, Silvis';
$m = date("m");
$d = date("d");
date_default_timezone_set('Europe/Riga');
?>
<div id="page" class="site">
	<div class="site-inner">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a>

		<header id="masthead" class="site-header" role="banner">
		
			<div class="names">
				﻿<b>Šodien vārda dienas svin</b>: <?php echo $vd[$m][$d]; ?>
			</div>
		
			<a href="http://gatisc.esy.es/"><h1>Laipni lūgti Čamanu mājas lapā</h1></a>
			
			<div class="site-header-main">
				<div class="site-branding">
					<?php twentysixteen_the_custom_logo(); ?>
					
					<?php if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->
				
				<?php if ( has_nav_menu( 'primary' ) ) : ?>
					<nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Primary Menu', 'twentysixteen' ); ?>">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'primary',
								'menu_class'     => 'primary-menu',
							 ) );
						?>
					</nav><!-- .main-navigation -->
				<?php endif; ?>

				<?php /* if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>
					<button id="menu-toggle" class="menu-toggle"><?php _e( 'Menu', 'twentysixteen' ); ?></button>

					<div id="site-header-menu" class="site-header-menu">
						<?php if ( has_nav_menu( 'primary' ) ) : ?>
							<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'primary',
										'menu_class'     => 'primary-menu',
									 ) );
								?>
							</nav><!-- .main-navigation -->
						<?php endif; ?>

						<?php if ( has_nav_menu( 'social' ) ) : ?>
							<nav id="social-navigation" class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'social',
										'menu_class'     => 'social-links-menu',
										'depth'          => 1,
										'link_before'    => '<span class="screen-reader-text">',
										'link_after'     => '</span>',
									) );
								?>
							</nav><!-- .social-navigation -->
						<?php endif; ?>
					</div><!-- .site-header-menu -->
				<?php endif; */?>
			</div><!-- .site-header-main -->
		
			<?php if ( get_header_image() ) : ?>
				<?php
					/**
					 * Filter the default twentysixteen custom header sizes attribute.
					 *
					 * @since Twenty Sixteen 1.0
					 *
					 * @param string $custom_header_sizes sizes attribute
					 * for Custom Header. Default '(max-width: 709px) 85vw,
					 * (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px'.
					 */
					$custom_header_sizes = apply_filters( 'twentysixteen_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px' );
				?>
				<?php if ( is_front_page() && is_home() ) : ?>
					<div class="header-image">
						<a nohref="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" sizes="<?php echo esc_attr( $custom_header_sizes ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
						</a>
					</div><!-- .header-image -->
				<?php endif; ?>
			<?php endif; // End header image check. ?>
			
		</header><!-- .site-header -->

		<div id="content" class="site-content">
