<html>

<?php
    include ("header.html");
?>
<head>
    <title>Jeremy's Example PHP Page</title>
</head>
<body>
<?php
    $link=mysql_connect("endor.vvc.edu:3308", "jeremydixon", "012096")
        or die("Could not connect");
        
    mysql_select_db("worldmaster") or die("Could not select database");
    
    $query_countries= "SELECT name, population, continent, indepyear FROM Country LIKE('%" .$GET['code']."%') AND population> ".$GET['pop'] . " ORDER BY " . $GET['sort'];
    
    print $query_countries;
    
    $result_q= mysql_query($query_cities) or die("Query failed");
    
    print "<table border='1'>";
    print "<tr><th>Country</th><th>Population</th><th>Continent</th><th>IndependetYear</th></tr>";
    
    while ($line_q = mysql_fetch_array($result_q, MYSQL_ASSOC)) {
        print "<tr>";
        print "<td><a href=http://www.google.com/search?q=".$line_q['name'].">".$line_q['name'] . "</a></td> ";
        print "<td>". $line_q['population'] . "</td>";
        print "<td>". $line_q['continent'] . "</td>";
        print "<td>". $line_q['indepyear'] ."</td>";
    }
    print "</table>";
?>

</body>

<?php
    include ("footer.html");
?>
</html>