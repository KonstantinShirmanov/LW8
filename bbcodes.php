<?php
// ôóíêöèÿ îáðàáàòûâàþùàÿ bb êîäû
// ïîääåðæâàåò ïðåîáðàçîâàíèå ñëåäóþùèõ bb êîäîâ â html òåãè
//[p] [/p] => <p> </p>
//[b] [/b] => <b> </b>
//[i] [/i] => <i> </i>
//[u] [/u] => <u> </u>
//[p] [/p] => <p> </p>
//[img]url[/img] => <img src = url> 
//[a=url]òåêñò[/img] => <a href = url>òåêñò</a> 
//[a]url[/img] => <a href = url> url </a> 
//[br] => <br>
function parse_bb_codes($var) {
      $search = array(
                '/\[p\](.*?)\[\/p\]/is',
                '/\[b\](.*?)\[\/b\]/is',
                '/\[i\](.*?)\[\/i\]/is',
                '/\[u\](.*?)\[\/u\]/is',
                '/\[img\](.*?)\[\/img\]/is',
                '/\[url\](.*?)\[\/url\]/is',
                '/\[url\=(.*?)\](.*?)\[\/url\]/is',
                '/\[br\]/',
                '/\[bl\]/'
                );

      $replace = array(
                '<p>$1</p>',
                '<strong>$1</strong>',
                '<em>$1</em>',
                '<u>$1</u>',
                '<img src="$1" />',
                '<a href="$1">$1</a>',
                '<a href="$1">$2</a>',
                '<br>',
                "<span>     </span>"
                );

      $var = preg_replace ($search, $replace, $var);
      return $var;
    }	
?>