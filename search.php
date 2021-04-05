
<?php
// PHP program to search an element in row-wise
// and column-wise sorted matrix
  
$MAX = 100;
  
/* Searches the element x in mat[m][n]. If the 
element is found, then prints its position 
and returns true, otherwise prints "not found"
and returns false */
function search($mat, $m, $n, $x)
{
    $i = $m - 1;
    $j = 0; // set indexes for bottom left element
    while ($i >= 0 && $j < $n)
    {
        if ($mat[$i][$j] == $x){
            echo "found - i ".$i. " - j ".$j."<br/>";
            //return true;
        }
        if ($mat[$i][$j] > $x)
        {
            $i--;
        }
        else { // if mat[i][j] < x
            $j++;
        }
    }
          
    return false;
}
  
// Driver Code
$mat = array(array(10, 20, 29, 40),
             array(15, 25, 35, 29),
             array(27, 29, 37, 48),
             array(32, 33, 39, 50),
             array(50, 60, 70, 29));
if (search($mat, 5, 4, 29))
{
    //echo "Yes";
}
else {
    //echo "No";
}
  
// This code is contributed by mits
?>