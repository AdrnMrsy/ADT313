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
     $number =count($table['header']);
   

    


    foreach ($table['header'] as $x) {
        echo "<tr> $x </tr>";  
        
        foreach ($table['body'] as $y) {

            for(x=0; x>= $number; x++){
                echo "<td> { $table['header']} </td>";
            }
              echo "<td>  $y; </td>";  

            
            
          }
      }
      
     
      

?>
 </table>