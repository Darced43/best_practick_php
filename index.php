<?php

// заменить буквы в строчке
// когда приходит любое сочетание ACGT - буквы меняют на TGCA

function DNA_strand($dna) {
  return strtr($dna, 'ACGT', 'TGCA');
}

?>