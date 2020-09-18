<?php


echo("<br />\n fist challenge <br />\n");
$number ="711";

echo "the sum of 711 = " , array_sum(str_split($number)) , "<br />\n";
####################################

echo "<hr><br />\n Second  challenge <br />\n the array is ";
$array = array(1,2,3,4,5,6,7);
echo('1,2,3,4,5,6,7');
$min = min($array);
$max = max($array);
echo "<br />\n min no =" , $min ,"<br />\n max no =" , $max;

####################################

echo("<hr><br /><br />\n Third challenge <br />\n");


$a=array(1,2,5,4,2,6,5);
echo("<br />\n");
echo("Original Array is: ");
echo("<br />\n");
echo "<pre>";
print_r($a);
echo("<br />\n");
echo("Updated array");
echo("<br />\n");
echo "<pre>";
print_r(array_unique($a));
####################################

echo("<hr><br /><br />\n fourth challenge <br />\n");

 
echo "hi this is me" ,"am here ";


print "the " ;
print "this is the second print " ;

$array=array('width','hight','dimansions');

print_r($array);
###############################################
echo("<hr><br /><br />\n fifth challenge <br />\n");

echo '<script type="text/JavaScript">  
     prompt("this is me"); 
     </script>' 
; 

 echo "<div id='func'></div>"; 
 ?>
 <script type="text/javascript"> 
    alert('Hello'); 
</script>  



 <script type="text/JavaScript"> 
  
// Function is called, return  
// value will end up in x 
var x = myFunction(11, 10);    
document.getElementById("func").innerHTML = x; 
  
// Function returns the product of a and b 
function myFunction(a, b) { 
    return a * b;              
} 
</script>

<?php
######################################
echo("<hr> sixth challenge <br />\n");

echo"
<form id='formname' method = 'post' >  
            <h4>SELECT SUPJECTS</h4>   
            <select name = 'values[]' multiple size = 5>   
                <option value = 'firstValue'>firstValue</option> 
                <option value = 'secondValue'>secondValue</option> 
                <option value = 'thirdValue'>thirdValue</option> 
                <option value = 'forthValue'>forthValue</option> 
                <option value = 'fifthValue'>fifthValue</option> 
            </select> 
            <input type = 'submit' name = 'submit' value = Submit> 
        </form> 
        ";
        if(isset($_POST["submit"]))  
    { 
        if(isset($_POST["values"]))  
        { 
            foreach ($_POST['values'] as $values)  
                print "You selected $values<br/>"; 
        } 
    else
        echo "You selected nothing"; 
    } 
###################################
echo("<hr> seventh challenge <br />\n");

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
$url = "https://";   
else  
$url = "http://";   
// Append the host(domain name, ip) to the URL.   
$url.= $_SERVER['HTTP_HOST'];   

// Append the requested resource location to the URL   
$url.= $_SERVER['REQUEST_URI'];    

echo $url; 
#################################################
echo("<hr> <br />\n eighth challenge <br />\n");

$link = mysqli_connect("localhost", "root", "", "userdb"); 
  
if ($link === false) { 
    die("ERROR: Could not connect. "
                .mysqli_connect_error()); 
} 
  
$sql = "SELECT * FROM `users`"; 
if ($res = mysqli_query($link, $sql)) { 
    if (mysqli_num_rows($res) > 0) { 
        echo "<table>"; 
        echo "<tr>"; 
        echo "<th>ID</th>"; 
        echo "<th>First Name</th>"; 
        echo "<th>UserName</th>"; 
        echo "<th>Password</th>"; 
        echo "</tr>"; 
        while ($row = mysqli_fetch_array($res)) { 
            echo "<tr>"; 
            echo "<td>".$row['ID']."</td>"; 
            echo "<td>".$row['FIRSTNAME']."</td>"; 
            echo "<td>".$row['USERNAME']."</td>"; 
            echo "<td>".$row['PASSWORD']."</td>"; 
            echo "</tr>"; 
        } 
        echo "</table>"; 
    } 
    else { 
        echo "No matching records are found."; 
    } 
} 
else { 
    echo "ERROR: Could not able to execute $sql. "
                                .mysqli_error($link); 
} 
mysqli_close($link); 
  






























 


?>

