<?php

$rhversion = "2.0.0";
$white = "\e[97m";
$black = "\e[30m\e[1m";
$yellow = "\e[93m";
$orange = "\e[38;5;208m";
$blue   = "\e[34m";
$lblue  = "\e[36m";
$cln    = "\e[0m";
$green  = "\e[92m";
$fgreen = "\e[32m";
$red    = "\e[91m";
$magenta = "\e[35m";
$bluebg = "\e[44m";
$lbluebg = "\e[106m";
$greenbg = "\e[42m";
$lgreenbg = "\e[102m";
$yellowbg = "\e[43m";
$lyellowbg = "\e[103m";
$redbg = "\e[101m";
$grey = "\e[37m";
$cyan = "\e[36m";
$bold   = "\e[1m";
function keller_banner(){
  echo "\e[37m
           KellerSS Android\e[36m Fucking Cheaters\e[91m\e[37m discord.gg/allianceoficial\e[91m
            
                            )       (     (          (     
                        ( /(       )\ )  )\ )       )\ )  
                        )\()) (   (()/( (()/(  (   (()/(  
                        |((_)\  )\   /(_)) /(_)) )\   /(_)) 
                        |_ ((_)((_) (_))  (_))  ((_) (_))   
                        | |/ / | __|| |   | |   | __|| _ \  
                        ' <  | _| | |__ | |__ | _| |   /  
                        _|\_\ |___||____||____||___||_|_\  



                    \e[36m{C} Coded By - KellerSS | Credits for Sheik                                   
\e[32m
  \n";
}

echo $cln;
system("clear");
keller_banner();

echo "\n";

menuscanner:

    system("clear");
    echo $bold . $blue . "
      +--------------------------------------------------------------+
      +                       KellerSS Menu                          +
      +--------------------------------------------------------------+

      \n\n";
    echo $yellow . " [0]  Instalar Módulos$white (Necessário para rodar o scanner)$fgreen \n [1]  Escanear FreeFire \n $red [S]  Sair! \n\n" . $cln;
escolheropcoes:
    userinput("Escolha uma das opções acima.");
    $opcaoscanner = trim(fgets(STDIN, 1024));


    if (!in_array($scan, array(
      '0',
      '1',
      'S',
  ), true))
    {
      echo $bold . $red . "\n[!] Opção inválida! Tente novamente. \n\n" . $cln;
      goto escolheropcoes;
    }
    else
    {
      if ($opcaoscanner == "0")
        {
          goto escolheropcoes;
        }
      elseif ($opcaoscanner == 's' | $opcaoscanner == 'S')
        {
          echo "\n\n\t Obrigado por compactuar com um cenário limpo.\n\n";
          die();
        }
        elseif ($opcaoscanner == "0")
        {
          goto escolheropcoes;
        }
      }
?>      