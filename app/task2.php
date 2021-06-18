<?php

$paragraph = 'Delphi was originally one of many codenames of a pre-release development tool project at Borland.
Borland developer Danny Thorpe suggested the Delphi codename in reference to the Oracle at
Delphi. One of the design goals of the product was to provide database connectivity to programmers
as a key feature and a popular database package at the time was Oracle database; hence, "If you
want to talk to Oracle, go to Delphi".
As development continued towards the first release, the Delphi codename gained popularity among
the development team and beta testing group. However, the Borland marketing leadership preferred
a functional product name over an iconic name and made preparations to release the product under
the name "Borland AppBuilder".';
  

$wordlist = [];

$parts = preg_split("/[\s\r,]+/", $paragraph);         //separate words into an array 
$parts = preg_replace("/[^A-Z][^a-z]\-/", "", $parts);  //replace non-alphabetic numberic except'-'character

//var_dump($parts);

for($x = 0; $x<count($parts); $x++){
	if(!checkForWordInList($parts[$x])){   //if word is not in wordlist
		$wordslist = [$parts[$x] => 1];     //add new word to list
		foreach($parts as $word){		   //do a number count of matching words.
			if($word == $parts[$x]){
				$matches = countWordMatches($word);
				$wordlist[$word] = $matches;
			}
		}
		
	}
	
}

asort($wordlist);      //list sorted in number of times each word appears.


// var_dump($wordlist);


foreach ($wordlist as $word => $val) {
    echo $word . " = " . $val ."</br>";
}






function checkForWordInList($word){
	global $wordlist;
	foreach($wordlist as $key => $value){
		return $key == $word ? true : false;
	}
	
}

function countWordMatches($word){
	global $parts;
	$count = 0;
	foreach($parts as $word1 ){
		if($word == $word1)
			$count++;
	}
	return $count;
}


?>