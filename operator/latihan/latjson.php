<?php
$movie = '{
    "Instructions": "delete everything in this object and make your own JSON object using different data.",
    "Title": "The Graduate",
    "Year": "1967",
    "Rated": "Approved",
    "Released": "22 Dec 1967",
    "Runtime": "106 min",
    "Genre": [
      "Comedy",
      "Drama",
      "Romance"
    ],
    "Director": "Mike Nichols",
    "Writers": [
      "Calder Willingham (screenplay)",
      "Buck Henry (screenplay)",
      "Charles Webb (based on the novel by)"
    ],
    "Actors": [
      "Anne Bancroft",
      "Dustin Hoffman",
      "Katharine Ross",
      "William Daniels"
    ],
    "Plot": "Ben has recently graduated college, with his parents now expecting great things from him. At his \"Homecoming\" party, Mrs. Robinson, the wife of his fathers business partner, has Ben drive her home, which leads to an affair between the two. The affair eventually ends, but comes back to haunt him when he finds himself falling for Elaine, Mrs. Robinsons daughter.",
    "Language": "English",
    "Country": "USA",
    "Awards": "Won 1 Oscar. Another 22 wins & 13 nominations.",
    "poster":"https://timlo.net/wp-content/uploads/2020/10/spider-verse.jpg",
    "imdbRating": "8.1",
    "imdbVotes": "183,131 Orang",
    "imdbID": "tt0061722"
  }';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>movie</title>
    
</head>
<body>
    <table>
    
    <?php $data = json_decode($movie);?>
    <center><h1><?php echo $data->Title . "<br>";?></h1></center> 
    <center><img src="https://timlo.net/wp-content/uploads/2020/10/spider-verse.jpg" width="200" height="300"></center> 
    <tr>
    <p style="text-align:center;"><?php echo  $data->Plot . "<br>";?></p>
    </tr> 
    <tr>
      <td> <b> Year </b></td> 
      <td>:</td>
      <td><?php echo $data->Year . "<br>";?></td>
    </tr>
    <tr>
    <td> <b> Released </b></td>
    <td>:</td> 
      <td><?php echo $data->Released . "<br>";?></td>
    </tr>
    <tr>
      <td> <b> Runtime </b></td>
      <td>:</td>
      <td><?php echo $data->Runtime . "<br>";?></td>
    </tr>
    <tr>
      <td> <b> Genre </b></td>
      <td>:</td>
      <td><?php echo "<li>". implode("<li>", $data->Genre) . "<br>";?></td>
    </tr>
    <tr>
      <td> <b> Director </b></td>
      <td>:</td>
      <td><?php echo  $data->Director . "<br>";?></td>
    </tr>
    <tr>
      <td> <b> Writers </b></td>
      <td>:</td>
      <td><?php echo "<li>". implode("<li>", $data->Writers) . "<br>";?></td>
    </tr>
    <tr>
      <td> <b> Actors </b></td>
      <td>:</td>
      <td><?php echo "<li>". implode("<li>", $data->Actors) . "<br>";?></td>
    </tr>
    <tr>
      <td> <b> Language </b></td>
      <td>:</td>
      <td><?php echo  $data->Language . "<br>";?></td>
    </tr>
    <tr>
      <td> <b> Country </b></td>
      <td>:</td>
      <td><?php echo  $data->Country . "<br>";?></td>
    </tr>
    <tr>
      <td> <b> Awards </b></td>
      <td>:</td>
      <td><?php echo  $data->Awards . "<br>";?></td>
    </tr>
    <tr>
      <td> <b> imdbRating </b></td>
      <td>:</td>
      <td><?php echo  $data->imdbRating . "<br>";?></td>
    </tr>
    <tr>
      <td> <b> imdbVotes </b></td>
      <td>:</td>
      <td><?php echo  $data->imdbVotes . "<br>";?></td>
    </tr>
    <tr>
      <td> <b> imdbID </b></td>
      <td>:</td>
      <td>    <?php echo  $data->imdbID . "<br>";?></td>
    </tr>
    </table>
</body>
</html>