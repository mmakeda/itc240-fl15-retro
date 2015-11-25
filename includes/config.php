<?php
//config.php


//echo basename($_SERVER['PHP_SELF']);


//the constant THIS_PAGE identifies the current file name
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
// the swch allows us to create unqiue content for each page
switch (THIS_PAGE); 
{
    case '':
        $title = 'Title tag for the template page';
        break; 
    
    default:
        $tilte = THIS_PAGE;
        $pageID = 'Welcome to the Retro Diner';
    
    
} //end switch



$nav1['index.php'] = 'Home';
$nav1['template.php'] = 'Template';
$nav1['daily.php'] = 'Daily';
$nav1['contact.php'] = 'Contact';

foreach ($nav1 as $link => $label)
{
    echo "The link is $link and the label is $label<br />";
}

//die;



