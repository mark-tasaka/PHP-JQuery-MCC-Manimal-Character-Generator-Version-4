<?php
/*Mutant*/

function savingThrowReflex($level)
{
    $reflex = 1;

    
    if($level >= 4 && $level <= 6)
    {
        $reflex = 2;
    }

    if($level >= 7 && $level <= 9)
    {
        $reflex = 3;
    }

    if($level == 10)
    {
        $reflex = 4;
    }

    return $reflex;

}


function savingThrowFort($level)
{
    
    $fort = 0;
        
    if($level >= 3 && $level <= 4)
    {
        $fort = 1;
    }
    
    if($level >= 5 && $level <= 6)
    {
        $fort = 2;
    }

    if($level >= 7 && $level <= 9)
    {
        $fort = 3;
    }

    if($level == 10)
    {
        $fort = 4;
    }

    return $fort;

}


function savingThrowWill($level)
{
    $will = 1;

    if($level >= 3 && $level <= 4)
    {
        $will = 2;
    }
    
    if($level >= 5 && $level <= 6)
    {
        $will = 3;
    }

    
    if($level >= 7 && $level <= 9)
    {
        $will = 4;
    }

    if($level == 10)
    {
        $will = 5;
    }

    return $will;

}

function getAttackBonus($level)
{
  if($level == 1 || $level == 2)
  {
    $attackBonus = 1;
  }
  else if($level == 3 || $level == 4)
  {
    $attackBonus = 2;
  }
  else if($level == 5 || $level == 6)
  {
    $attackBonus = 3;
  }
  else if($level == 7 || $level == 8)
  {
    $attackBonus = 4;
  }
  else
  {
    $attackBonus = 5;
  }

  return $attackBonus;
}



function criticalDie($level)
{
    $critical = "";

    if($level == 1)
    {
        $critical = "1d6/II";
    }

    if($level == 2 || $level == 3)
    {
      $critical = "1d8/II";
    }

    if($level == 4 || $level == 5)
    {
      $critical = "1d10/II";
    }

    if($level == 6 || $level == 7)
    {
      $critical = "1d12/II";
    }

    if($level == 8 || $level == 9)
    {
      $critical = "1d14/II";
    }

    if($level == 10)
    {
        $critical = "1d16/II";
    }


    return $critical;

}


function title($level)
{

        if($level == 1)
        {
            $title = "Misfit";
        }
        else if($level == 2)
        {
            $title = "Deviant";
        }
        else if($level == 3)
        {
            $title = "Abomination";
        }
        else if($level == 4)
        {
            $title = "Unhuman";
        }
        else if($level == 5)
        {
            $title = "Mutant";
        }
        else
        {
            $title = "Meta-Human";
        }

return $title;

}


function getArtifactCheckBonus($level)
{
    $bonus = 0;

    switch ($level) 
    {
        case 1:
            $bonus = 0;
          break;
          
        case 2:
            $bonus = 1;
          break;
          
        case 3:
            $bonus = 2;
          break;

        case 4:
            $bonus = 3;
          break;
          
        case 5:
            $bonus = 4;
          break;
          
        case 6:
            $bonus = 5;
          break;

          case 7:
            $bonus = 6;
          break;
          
        case 8:
            $bonus = 7;
          break;
          
        case 9:
            $bonus = 8;
          break;
          
        case 10:
            $bonus = 9;
          break;
          
        default:
            $bonus = 999;
      } 

    return $bonus;
}


function actionDiceCode($level)
{
    $actionDice = 0;

    if($level <= 4)
    {
        $actionDice = 1;
    }

    if($level == 5)
    {
        $actionDice = 101;
    }

    if($level == 6)
    {
        $actionDice = 11;
    }

    if($level >= 7)
    {
        $actionDice = 2;
    }


    return $actionDice;
}

function convertActionDice($input)
{
    $die1 = "";
    $die2 = "";
    $die3 = "";

    if($input > 100 && $input < 200)
    {
      $die3 = "+1d14";
      $input -= 100;
    }
    else if($input > 200 && $input < 300)
    {
      $die3 = "+1d14(x2)";
      $input -= 200;
    }
    else if($input > 300 && $input < 400)
    {
      $die3 = "+1d14(x3)";
      $input -= 300;
    }
    else if($input > 400 && $input < 500)
    {
      $die3 = "+1d14(x4)";
      $input -= 400;
    }
    else
    {
      $die3 = "";
    }


    if($input > 10 && $input < 20)
    {
      $die2 = "+1d16";
      $input -= 10;
    }
    else if($input > 20 && $input < 30)
    {
      $die2 = "+1d16(x2)";
      $input -= 20;
    }
    else if($input > 30 && $input < 40)
    {
      $die2 = "+1d16(x3)";
      $input -= 30;
    }
    else if($input > 40 && $input < 50)
    {
      $die2 = "+1d16(x4)";
      $input -= 40;
    }
    else
    {
      $die2 = "";
    }

    if($input == 1)
    {
      $die1 = "1d20";
    }
    else if($input == 2)
    {
      $die1 = "1d20(x2)";
    }
    else if($input == 3)
    {
      $die1 = "1d20(x3)";
    }
    else if($input == 4)
    {
      $die1 = "1d20(x4)";
    }
    else
    {
      $die1 = "";
    }

    $actionDice = $die1 . $die2 . $die3;

    return $actionDice;

}


function getMutantHorrorPart1($level)
{

  if($level >= 1 && $level <=3)
  {
    $part1 = '1d3';
  }
  else if($level >= 4 && $level <=5)
  {
    $part1 = '1d4';
  }
  else if($level >= 6 && $level <=7)
  {
    $part1 = '1d5';
  }
  else if($level >= 8 && $level <=9)
  {
    $part1 = '1d6';
  }
  else
  {
    $part1 = '1d7';
  }

  return $part1;

}


function getMutantHorrorPart2($level)
{

  if($level == 2)
  {
    $part2 = 1;
  }
  else if($level == 3 || $level == 4)
  {
    $part2 = 2;
  }
  else if($level == 5)
  {
    $part2 = 3;
  }
  else if($level == 6)
  {
    $part2 = 4;
  }
  else if($level == 7 || $level == 8)
  {
    $part2 = 5;
  }
  else if($level == 9)
  {
    $part2 = 6;
  }
  else if($level == 10)
  {
    $part2 = 7;
  }
  else
  {
    $part2 = 0;
  }

  return $part2;
  
}

function getMutantHorrorBonus($level)
{

  if($level > 1)
  {
    $part1 = getMutantHorrorPart1($level);
    $part2 = getMutantHorrorPart2($level);

    $horrorBonus = $part1 . '+' . $part2;

    return $horrorBonus;
  }
  else
  {
    $part1 = getMutantHorrorPart1($level);

    $horrorBonus = $part1;

    return $horrorBonus;
  }

}


?>