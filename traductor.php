<?php
require ("vendor/autoload.php");

use \Dejurin\GoogleTranslateForFree;

$source = 'en';
$target = 'pt';
$attempts = 5;
$text = 'Hello what is you name, please, black, while, white, yellow';

$tr = new GoogleTranslateForFree();
//echo $result = $tr->translate($source, $target, $text, $attempts);die();

function pr($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}
$parser = new PoParser\Parser();
$parser->read('default.po');
$entries = $parser->getEntriesAsArrays();
// Now $entries contains every string information in your pofile
//pr($entries);die();

/*echo '<ul>';
foreach ($entries as $entry) {
    if ($entry['msgstr'][0] == '') {
        echo '<li>' .
        '<b>msgid:</b> ' . $entry['msgid'] . '<br>' . // Message ID
        '<b>msgstr:</b> ' . $entry['msgstr'][0] . '<br>' . // Translation
        '<b>reference:</b> ' . $entry['reference'] . '<br>' . // Reference
        '<b>msgctxt:</b> ' . $entry['msgctxt'] . '<br>' . // Message Context
        '<b>tcomment:</b> ' . $entry['tcomment'] . '<br>' . // Translator comment
        '<b>ccomment:</b> ' . $entry['ccomment'] . '<br>' . // Code Comment
        '<b>obsolete?:</b> ' . (string) $entry['obsolete'] . '<br>' . // Is obsolete?
        '<b>fuzzy?:</b> ' . (string) $entry['fuzzy'] . // Is fuzzy?
        '</li>';
    }
}
echo '</ul>';*/


foreach ($entries as $entry) {
    if ($entry['msgstr'][0] == '') {
        $traduccion = $tr->translate($source, $target, $entry['msgid'], $attempts);
        $parser->updateEntry($entry['msgid'], $traduccion);
        $parser->write('my-pofile.po');
        sleep(5);
    }
}
