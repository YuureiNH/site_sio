<?php
setlocale (LC_ALL, 'fr_FR.utf8','fr'); 
$url[0] = "http://www.prestashop.com/blog/fr/feed/"; /* insérer ici l'adresse du flux RSS de votre choix */
$url[1] = "https://validator.prestashop.com/changelog?rss"; /* insérer ici l'adresse du flux RSS de votre choix */

foreach ($url as $v_url) {
    $rss = simplexml_load_file($v_url);
    if ($v_url == "http://www.prestashop.com/blog/fr/feed/")
        echo 'les nouveauté du blog prestashop :';
    else
        echo 'Mise à jour prestashop validator :';
    
    echo '<ul>';
    for ($i = 0; $i<=2; $i++) {
        $datetime = date_create($rss->channel->item[$i]->pubDate);
        $date = date_format($datetime, 'd M Y');
        echo '<li><a href="' . $rss->channel->item[$i]->link . '">' . $rss->channel->item[$i]->title . '</a> (' . $date . ')</li>';
    }
    echo '</ul>';
}
?>