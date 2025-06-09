<?php

// 1) заменить буквы в строчке
// когда приходит любое сочетание ACGT - буквы меняют на TGCA

function DNA_strand($dna) {
  return strtr($dna, 'ACGT', 'TGCA');
}

// 2) сравнение зеркально букв в строке независимо от регистра
//моё решение

function isPalindrome(string $str) {
  $lenghtWord = strlen($str);
  $arrayLater = str_split($str);
  
  if($lenghtWord <= 1){
      return true;
  }
  
  foreach ($arrayLater as $index => $later){
      
      if(strtolower($later) !== strtolower($arrayLater[$lenghtWord - $index -1])){
          return false; 
      }
  };
  
   return true;
}
// лучшый вариант

function isPalindrome(string $str): bool {
  return strrev(strtolower($str)) == strtolower($str);
}

// 3) сортировка массива по длинне 

function sortByLength (array $toSort) {
    usort($toSort, fn($a, $b) => 
       strlen($a) <=> strlen($b)
    );
    
    return$toSort;
}


sortByLength(["Beg", "Life", "I", "To"]);

?>
