

/* Question 1 : Write a PHP script to display names and the salaries amounts, within a table. ou should use `echo ` to generate your table. */
//////////////////////// Your Code Here /////////////////////
<?php
$mrOne = "Mr1";
$mrTwo = "Mr2";
$salary1 = 300;
$salary2 = 200;

    echo "<table border=1>";
    echo "<tr>";
    echo "<th> Names </th>";
    echo "<th> Salaries </th>";
    echo "</tr>";
    echo "<tr>";
    echo "<td> $mrOne </td>";
    echo "<td>$salary1 </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td> $mrTwo</td>";
    echo "<td> $salary2 </td>";
    echo "</tr>";
    echo "</table>";
?>



/*Question 2 : Write a PHP script which displays the capital and country name from the below array $c. as unordered list after sorting the array list by countries names  */
//////////////////////// Your Code Here /////////////////////
<?php
$countries = array( "Italy"=>"Rome",
              "Luxembourg"=>"Luxembourg",
               "Belgium"=> "Brussels",
               "Denmark"=>"Copenhagen",
               "Finland"=>"Helsinki",
               "France" => "Paris",
               "Slovakia"=>"Bratislava" ) ;

               sort($countries);
               foreach ($countries as $country => $capital) {
                   echo "<ul>";
                   echo "<li> $country . $capital </li>";
                   echo "</ul>";
               }
?>
/*Question 3 : Write a script to build the following stars pattern, using a nested for loop.

*
* *
* * *
* * * *
* * * * *
* * * * *
* * * *
* * *
* *
*

*/

<?php
for ($i=0; $i <6 ; $i++) {
    echo "<br/>";
    
    for ($j=0; $j <$i ; $j++) { 
        echo "*";
      
    }
    
}
for ($i=6; $i >0 ; $i--) { 
    echo "<br/>";
    for ($j=0; $j <$i ; $j++) { 
        echo "*";
      
    }
}
?>

/*Question 4 : Write a PHP script to calculate the difference between two dates.
Input : 1981-11-04, 2013-09-04
Output : 31 years, 10 months, 11 days */

<?php
$date1 = new DateTime("Sept 04, 2013");
$date2 = new DateTime("04 Nov 1981");
echo $date1->diff($date2)->format("%d");
?>

/*Question 5 : Create a simple HTML form that accept the user name after submitting display the name using PHP echo statement under the form. */

<?php 
echo '<form method="post">';
echo "<label>Username:</label>";
echo '<input name="username" value="enter a username" />';
echo "</form>";
echo $_POST['username'];
?>
