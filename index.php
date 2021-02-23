<?php 

/** CdCollection class
 * @author antonio  antonio@gmail.com
 * @copyright 2021 antonio
 */

class CdCollection {
    public $artist;
    public $genre;
    public $title;
    public $year;

   function __construct(string $artist,string $genre,string $title,int $year)
   {
       $this -> artist = $artist;
       $this -> genre = $genre;
       $this -> title = $title;
       $this -> year = $year;
   }
}

$nevermind = new CdCollection('Nirvana','Grunge','Nevermind',1991);
$ten = new CdCollection('Pearl Jam','Grunge','Ten',1991);
$punkInDrublic = new CdCollection('NOFX','Punk','Punk in Drublic',1994);
$keeper = new CdCollection('Helloween','Power Metal','Keeper of the Seven Keys',1987);

$cdCollection = [$nevermind,$ten,$punkInDrublic,$keeper];


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>php-oop-1</title>
    </head>
    <body>
       <ol>
           <?php foreach ($cdCollection as $key => $cd) { ?>
            
               <li><h2> <?php echo $cd -> title   ?> </h2></li>
               <li id="li_invisible">
                   <ul>
                       <li><h2> <?php echo $cd -> artist ?> </h2></li>
                       <li> <h2> <?php echo $cd -> genre  ?> </h2></li>
                       <li> <h2> <?php echo $cd -> year ?> </h2></li>
                    </ul>
                </li>
               
            <?php } ?>
           </ol>
        
    </body>
</html>