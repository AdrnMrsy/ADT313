<table align = "left" border = "1" cellpadding = "3" cellspacing = "2">  
<?php

  $table = array(
    "header"=>array(
        "Student Id",
        "Last Name",
        "Middle Name",
        "First Name",
        "Course",
        "Section"
    ),
    "body"=>array(
        array(
            "lastname"=>"Lastname",
            "middlename"=>"Middlename",
            "firstname"=>"Firstname",
            "course"=>"Course",
            "section"=>"Section"
        ),
        array(
            "lastname"=>"Lastname",
            "middlename"=>"Middlename",
            "firstname"=>"Firstname",
            "course"=>"Course",
            "section"=>"Section"
        ),
        array(
            "lastname"=>"Lastname",
            "middlename"=>"Middlename",
            "firstname"=>"Firstname",
            "course"=>"Course",
            "section"=>"Section"
        ),
        array(
            "lastname"=>"Lastname",
            "middlename"=>"Middlename",
            "firstname"=>"Firstname",
            "course"=>"Course",
            "section"=>"Section"
        ),
        array(
            "lastname"=>"Lastname",
            "middlename"=>"Middlename",
            "firstname"=>"Firstname",
            "course"=>"Course",
            "section"=>"Section"
        ),
        array(
            "lastname"=>"Lastname",
            "middlename"=>"Middlename",
            "firstname"=>"Firstname",
            "course"=>"Course",
            "section"=>"Section"
        ),
        array(
            "lastname"=>"Lastname",
            "middlename"=>"Middlename",
            "firstname"=>"Firstname",
            "course"=>"Course",
            "section"=>"Section"
        ),
        array(
            "lastname"=>"Lastname",
            "middlename"=>"Middlename",
            "firstname"=>"Firstname",
            "course"=>"Course",
            "section"=>"Section"
        ),
        array(
            "lastname"=>"Lastname",
            "middlename"=>"Middlename",
            "firstname"=>"Firstname",
            "course"=>"Course",
            "section"=>"Section"
        ),

        array(
            "lastname"=>"Lastname",
            "middlename"=>"Middlename",
            "firstname"=>"Firstname",
            "course"=>"Course",
            "section"=>"Section"
        ),
        
    )
    );
    //header loop
    echo "<tr>";
foreach ($table['header'] as $header) {
    echo "<th>$header</th>";
}
echo "</tr>";
    $studentNumber = 1;


foreach ($table['body'] as $row) {
    echo "<tr>";
   
    echo "<td>$studentNumber</td>";
    
    // add
    $studentNumber++;

    // all data
    foreach ($row as $cell) {
        echo "<td>$cell</td>";
    }
    echo "</tr>";
}

     
      

?>
 </table>