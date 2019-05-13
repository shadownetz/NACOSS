<?php

function strip_zeros_from_date($marked_string=""){
    $no_zeros = str_replace('*0', '', $marked_string);
    $cleaned_string = str_replace('*', '', $no_zeros);
    return $cleaned_string;
}

function redirect_to($location=NULL){
    if($location != NULL){
        header("Location: {$location}");
        exit;
    }
}

function fullname($fname="", $lname=""){
    return $fname. " ". $lname;
}

//NEW navigation.php 42
function calculateNewDiscussions($rnumber = "", $pass_id = "", $count = ""){
    $new_id = array();
    $count_all = array();
    $sum_all_unread_messages = 0;
    $sum_all_messages = 0;
    for($x=0; $x<$count; $x++){
        $new_id[$x] = $pass_id[$x];
       $result_set = User::find_by_sql("SELECT * FROM `discussion_logs` WHERE rnumber = '$rnumber' AND discussion_id='$new_id[$x]' "); 
        $count_all[$x] = mysqli_num_rows($result_set);
        $sum_all_messages += $count_all[$x];
    }
    
       return $sum_all_messages;
}

//NEW navigation.php 285
function checkValue($value=""){
    if($value >= 70){
        $status = "success";
    }else if($value >= 50 && $value < 70){
        $status = "info";
    }else if($value >= 30 && $value < 50){
        $status = "warning";
    }else{
        $status = "danger";
    }
    return $status;
}

//NEW navigation.php 312
function checkUploaded($count_uploaded="", $supposed=""){
    if($supposed == 1 && $count_uploaded != 0){
        $percent = ($count_uploaded/$supposed) * 100;
    }else
    if($supposed == 2 && $count_uploaded != 0){
        $percent = ($count_uploaded/$supposed) * 100;
    }else
    if($supposed == 3 && $count_uploaded != 0){
        $percent = ($count_uploaded/$supposed) * 100;
    }else
    if($supposed == 4 && $count_uploaded != 0){
        $percent = ($count_uploaded/$supposed) * 100;
    }else
    if($supposed == 5 && $count_uploaded != 0){
        $percent = ($count_uploaded/$supposed) * 100;
    }else
    if($supposed == 6 && $count_uploaded != 0){
        $percent = ($count_uploaded/$supposed) * 100;
    }else
    if($supposed == 7 && $count_uploaded != 0){
        $percent = ($count_uploaded/$supposed) * 100;
    }else
    if($supposed == 8 && $count_uploaded != 0){
        $percent = ($count_uploaded/$supposed) * 100;
    }else{
        $percent = 0;
    }
    return $percent;
}

function cal($value=""){
    $split = str_split($value);
    $count = count($split);
    $val = $split[0];
    if($count==3){ $num = $val.'h'; }
    elseif($count==4){ $num = $val.'k'; }
    elseif($count==5){ $val2 = $split[1]; $num = $val.$val2.'k'; }
    elseif($count==6){ $val2 = $split[1]; $val3 = $split[2]; $num = $val.$val2.$val3.'k'; }else{$num = $value;}
    return $num;
}
function star($num=""){
    if($num < 100){ $progress = 1;}elseif($num >= 100 && $num < 200){$progress = 2;}elseif($num >= 200 && $num < 300){$progress = 3;}elseif($num >= 300 && $num < 400){$progress = 4;}elseif($num >= 400){ $progress = 5;}else{$progress = 0;}
    return $progress;
}

function explode_my_year(){
    if(isset($_SESSION['rnumber'])){
        $exp = explode('/', $_SESSION['rnumber']);
        $new_value = $exp[0];
    }else{
        $new_value = false;
    }
    return $new_value;
}


function checkCourseTitle_old($course){
    if($course=='cos101'){ $title = "COS 101 ( Introduction to Computer Sci. )"; }
    elseif($course=='mth111'){ $title="MTH 111 ( Elementary Mathematics )"; }
    elseif($course=='mth121'){ $title="MTH 121 ( Elementary Mathematics II )"; }
    elseif($course=='phy115'){ $title="PHY 115 (General Physics I)"; }
    elseif($course=='phy191'){ $title="PHY 191 (Practical Physics)"; }
    elseif($course=='phy121'){ $title="PHY 121 (Fundamentals Of Physics)"; }
    elseif($course=='sta111'){ $title="STA 111 (Probability 1)"; }
    elseif($course=='sta131'){ $title="STA 131 (Inference)"; }
    elseif($course=='gsp101'){ $title="GSP 101 ( Use of English I )"; }
    elseif($course=='gsp111'){ $title="GSP 111 ( Use of Library )"; }
    elseif($course=='chm101'){ $title="CHM 101 (Basic Chemistry I)"; }
    elseif($course=='bio151'){ $title="BIO 151 (General Biology I)"; }
    elseif($course=='engr101'){ $title="ENGR 101 (Introduction to Engr I)"; }//Next Semester begins
    elseif($course=='cos102'){ $title="COS 102 ( Introduction to Computer System )"; }
    elseif($course=='cos104'){ $title="COS 104 ( Computing Practice )"; }
    elseif($course=='mth122'){ $title="MTH 122 ( Elementary Mathematics III )"; }
    elseif($course=='mth132'){ $title="MTH 132 (Elementary Mathematics IV)"; }
    elseif($course=='phy116'){ $title="PHY 116 ( General Physics II )"; }
    elseif($course=='phy118'){ $title="PHY 118 ( General Physics III )"; }
    elseif($course=='phy122'){ $title="PHY 122 ( Fundamentals Of Physics II )"; }
    elseif($course=='sta112'){ $title="STA 112 ( Probability II )"; }
    elseif($course=='sta132'){ $title="STA 132 ( Inference II )"; }
    elseif($course=='sta172'){ $title="STA 172 ( Statistical Computing I )"; }
    elseif($course=='gsp102'){ $title="GSP 102 ( Use of English II )"; }
    elseif($course=='chm111'){ $title="CHM 111 (Basic Priciples of Chemistry)"; }
    elseif($course=='bio152'){ $title="BIO 152 (General Biology II)"; }
    elseif($course=='engr102'){ $title="ENG 102 (Applied Mechanics)"; }
    elseif($course=='cos201'){ $title = "COS 201 (Computer Programming I)"; }//Next Semester begins
    elseif($course=='cos251'){ $title="COS 251 ( Machine and Assembly Language )"; }
    elseif($course=='mth211'){ $title="MTH 211 (Set Logic And Algebra)"; }
    elseif($course=='mth215'){ $title="MTH 215 ( Linear Algebra I )"; }
    elseif($course=='mth221'){ $title="MTH 221 (Real Analysis I)"; }
    elseif($course=='mth207'){ $title="MTH 207 (Advanced Mathematics VII)"; }
    elseif($course=='sta205'){ $title="STA 205 ( Statistics for Physical Sc. & Engr. I )"; }
    elseif($course=='sta211'){ $title="STA 211 (Probability III)"; }
    elseif($course=='sta231'){ $title="STA 231 (Inference III)"; }
    elseif($course=='gsp201'){ $title="GSP 201 ( Basic Concepts & Theory of Peace )"; }
    elseif($course=='gsp207'){ $title="GSP 207 ( Humanities I )"; }
    elseif($course=='eee211'){ $title="EE 211 (Basic Electrical Engineering)"; }
    elseif($course=='phy211'){ $title="PHY 211 (Structure Of Matter)"; }
    elseif($course=='phy221'){ $title="PHY 221 (Mechanics)"; }
    elseif($course=='phy241'){ $title="PHY 241 (Waves)"; }
    elseif($course=='cos202'){ $title="COS 202 ( Computer Programming II )"; } //Next Semester
    elseif($course=='cos222'){ $title="COS 222 ( File Processing )"; }
    elseif($course=='sta206'){ $title="STA 206 (Statistics for Physical Sc. & Engr.)"; }
    elseif($course=='sta212'){ $title="STA 212 (Probability IV)"; }
    elseif($course=='sta272'){ $title="STA 272 (Statistical Computing II)"; }
    elseif($course=='gsp202'){ $title="GSP 202 (Issues in Peace & Conflict Resolution)"; }
    elseif($course=='gsp208'){ $title="GSP 208 ( Humanities II )"; }
    elseif($course=='mth216'){ $title="MTH 216 (Linear Algebra II)"; }
    elseif($course=='mth222'){ $title="MTH 222 ( Elementary Differential Equation I )"; }
    elseif($course=='mth242'){ $title="MTH 242 ( Mathematical Methods I )"; }
    elseif($course=='mth206'){ $title="MTH 206 (Andvaanced Mathematics VI)"; }
    elseif($course=='mth223'){ $title="MTH 223 (Introduction to Numerical Analysis)"; }
    elseif($course=='phy262'){ $title="PHY 262 (Intro. to Atomic and Nuclear Physics)"; } //NEXT LINE STARTS NEW METHOD
    elseif($course=='cos301'){ $title="COS 301 (Introduction to Digital Design)"; }
    elseif($course=='cos303'){ $title="COS 303 (Introduction to Microcomputer)"; }
    elseif($course=='cos311'){ $title="COS 311 (Numerical Methods)"; }
    elseif($course=='cos331'){ $title="COS 331 (Compiler Construction)"; }
    elseif($course=='cos333'){ $title="COS 333 (Operating System)"; }
    elseif($course=='cos341'){ $title="COS 341 (Computer Architecture)"; }
    elseif($course=='cos315'){ $title="COS 315 (Operation Research I)"; }
    elseif($course=='cos321'){ $title="COS 321 (Data Base Design & Management I)"; }
    elseif($course=='cos335'){ $title="COS 335 (Systems Analysis & Design)"; }
    elseif($course=='cos313'){ $title="COS 313 (Switching Algebra & Discrete Structures I)"; }
    elseif($course=='cos314'){ $title="COS 314 (Switching Algebra & Discrete Structures II)"; }
    elseif($course=='cos352'){ $title="COS 312 (Switching Algebra and Discrete Mathematics I)"; }
    elseif($course=='cos332'){ $title="COS 332 (Operating System I)"; }
    elseif($course=='ced341'){ $title="CED 341 (Introduction to Enterpreneurship I)"; }
    elseif($course=='ece311'){ $title="ECE 311 (Circuit Theory I)"; }
    elseif($course=='ece321'){ $title="ECE 321 (Physical Electronics)"; }
    elseif($course=='phy301'){ $title="PHY 301 (Methods of Theoritical Physics I)"; }
    elseif($course=='phy321'){ $title="PHY 321 (Relativity Physics)"; }
    elseif($course=='phy351'){ $title="PHY 351 (Electronics)"; }
    elseif($course=='phy393'){ $title="PHY 393 (Workshop Course I)"; }
    elseif($course=='phy334'){ $title="PHY 334 (Thermal Physics)"; }
    elseif($course=='phy391'){ $title="PHY 391 (Practical Physics)"; }
    elseif($course=='mth341'){ $title="MTH 341 (Discrete Mathematics)"; }
    elseif($course=='mth311'){ $title="MTH 311 (Abstract Algebra)"; }
    elseif($course=='mth322'){ $title="MTH 322 (Elementary Diffrential Eqn.)"; }
    elseif($course=='mth332'){ $title="MTH 332 (Optimization Theory)"; }
    elseif($course=='mth331'){ $title="MTH 331 (Intro. to Mathematical Modeling)"; }
    elseif($course=='mth321'){ $title="MTH 321 (Metric Space Topology)"; }
    elseif($course=='mth334'){ $title="MTH 334 (Analytical Dynamics)"; }
    elseif($course=='sta311'){ $title="STA 311 (Probability V)"; }
    elseif($course=='sta321'){ $title="STA 321 (Distribution Theory)"; }
    elseif($course=='sta331'){ $title="STA 331 (Inference V)"; }
    elseif($course=='sta341'){ $title="STA 341 (Sampling Theory & Survey Method I)"; } //NEXT SEMESTER
    elseif($course=='cos352'){ $title="COS 352 (Data Structures)"; }
    elseif($course=='cos372'){ $title="COS 372 (Laboratory for Digital Design)"; }
    elseif($course=='cos374'){ $title="COS 374 (Student Industrial Work Experience)"; }
    elseif($course=='cos314'){ $title="COS 314 (Switching Algebra and Discrete Struct. II)"; }
    elseif($course=='cos316'){ $title="COS 316 (Automata Theory & Formal Languages)"; }
    elseif($course=='cos322'){ $title="COS 322 (Data Base Design & Management II)"; }
    elseif($course=='cos334'){ $title="COS 334 (Operating System II)"; }
    elseif($course=='cos342'){ $title="COS 342 (Computer Architecture II)"; }
    elseif($course=='ced342'){ $title="CED 342 (Introduction to Entrepreneurship II)"; }
    elseif($course=='ece312'){ $title="ECE 312 (Circuit Theory II)"; }
    elseif($course=='ece332'){ $title="ECE 332 (Applied Electronics)"; }
    elseif($course=='mth342'){ $title="MTH 342 (Discrete Mathematics)"; }
    elseif($course=='mth312'){ $title="MTH 312 (Abstract Algebra II)"; }
    elseif($course=='mth326'){ $title="MTH 326 (Real Analysis II)"; }
    elseif($course=='mth333'){ $title="MTH 333 (Optimization Theory)"; }
    elseif($course=='mth335'){ $title="MTH 335 (Dynamics of Rigid Body)"; }
    elseif($course=='phy302'){ $title="PHY 302 (Methods of Theoritical Physics)"; }
    elseif($course=='phy361'){ $title="PHY 361 (Quantum Mechanics I)"; }
    elseif($course=='phy381'){ $title="PHY 381 (Introduction to Astronomy)"; }
    elseif($course=='phy394'){ $title="PHY 394 (Workshop Course II)"; }
    elseif($course=='phy395'){ $title="PHY 395 (Measurement and Instrumentations)"; }
    elseif($course=='sta312'){ $title="STA 312 (Probability VI)"; }
    elseif($course=='sta323'){ $title="STA 323 (Analysis of Variance)"; }
    elseif($course=='sta332'){ $title="STA 332 (Inference VI)"; }
    elseif($course=='sta342'){ $title="STA 342 (Sampling Theory & Survey Methods II)"; }
    elseif($course=='sta343'){ $title="STA 343 (Laboratory and Field Work for Sampling Theory and Survey Methods)"; }
    elseif($course=='cos451'){ $title="COS 451 ( Algorithms )"; } //NEXT SEMESTER
    elseif($course=='cos461'){ $title="COS 461 ( Org. of Programming Languages )"; }
    elseif($course=='cos471'){ $title="COS 471 ( Project )"; }
    elseif($course=='cos411'){ $title="COS 411 (Numerical Methods)"; }
    elseif($course=='cos415'){ $title="COS 415 (Systems Modelling & Simulation)"; }
    elseif($course=='cos413'){ $title="COS 413 (Queing Theory)"; }
    elseif($course=='cos431'){ $title="COS 431 (Software Engineering & Management)"; }
    elseif($course=='cos453'){ $title="COS 453 (Computer Process Control)"; }
    elseif($course=='cos455'){ $title="COS 455 (Data Communication & Networks I)"; }
    elseif($course=='cos457'){ $title="COS 457 (Computer Graphics)"; }
    elseif($course=='cos472'){ $title="COS 472 (Project)"; }
    elseif($course=='mth451'){ $title="MTH 451 (Project)"; }
    elseif($course=='mth421'){ $title="MTH 421 (Ordinary Diffrential Equation)"; }
    elseif($course=='mth422'){ $title="MTH 422 (Functional Analysis)"; }
    elseif($course=='mth425'){ $title="MTH 425 (Lebesgue Measure and Integration)"; }
    elseif($course=='phy463'){ $title="PHY 463 (Project)"; }
    elseif($course=='phy401'){ $title="PHY 401 (Computational Physics)"; }
    elseif($course=='phy402'){ $title="PHY 402 (General Physics)"; }
    elseif($course=='phy421'){ $title="PHY 421 (Analytical Mechanics)"; }
    elseif($course=='phy451'){ $title="PHY 451 (Electromagnetic Theory)"; }
    elseif($course=='phy461'){ $title="PHY 461 (Quantum Mechanics)"; }
    elseif($course=='sta491'){ $title="STA 491 (Project)"; }
    elseif($course=='sta412'){ $title="STA 412 (Stochastic Processes)"; }
    elseif($course=='sta421'){ $title="STA 421 (Design and Analysis of Experiment I)"; }
    elseif($course=='sta425'){ $title="STA 425 (Analysis of Variance II)"; }
    elseif($course=='sta432'){ $title="STA 432 (Non Parametric Methods I)"; }
    elseif($course=='sta433'){ $title="STA 433 (Multivariate Analysis I)"; }
    elseif($course=='sta441'){ $title="STA 441 (Sampling Theory and Survey Methods III)"; } //NEXT SEMESTER
    elseif($course=='cos452'){ $title="COS 452 ( Computer Centre Management )"; }
    elseif($course=='cos462'){ $title="COS 462 ( Structured Programming )"; }
    elseif($course=='cos432'){ $title="COS 432 (Compiler Construction)"; }
    elseif($course=='cos454'){ $title="COS 454 (Artificial Intelligence)"; }
    elseif($course=='cos414'){ $title="COS 414 (Operation Research II)"; }
    elseif($course=='cos412'){ $title="COS 412 (Computer Performance Evaluation)"; }
    elseif($course=='cos458'){ $title="COS 458 (Expert Systems)"; }
    elseif($course=='cos464'){ $title="COS 464 (Concurrent Programming)"; }
    elseif($course=='cos472'){ $title="COS 472 (Advanced Digital Laboratory)"; }
    elseif($course=='cos456'){ $title="COS 456 (Data Comm. & Networking II.)"; }
    elseif($course=='sta414'){ $title="STA 414 (Stochastic Processes II)"; }
    elseif($course=='sta422'){ $title="STA 422 Design and Analysis of Experiments II)"; }
    elseif($course=='sta436'){ $title="STA 436 (Non Parametric Methods II)"; }
    elseif($course=='sta434'){ $title="STA 434 (Multivariable Analysis II)"; }
    elseif($course=='sta442'){ $title="STA 442 (Sampling Theory and Survey Methods IV"; }
    elseif($course=='mth423'){ $title="MTH 423 (Partial Diffrential Equations)"; }
    elseif($course=='mth411'){ $title="MTH 411 (Abstract Algebra II)"; }
    elseif($course=='mth424'){ $title="MTH 424 (General Topology)"; }
    elseif($course=='mth426'){ $title="MTH 426 (Measure Theory)"; }
    elseif($course=='phy411'){ $title="PHY 411 (Solid State Physics II)"; }
    elseif($course=='phy431'){ $title="PHY 431 (Statistical Physics)"; }
    elseif($course=='phy462'){ $title="PHY 462(Nuclear Physics)"; }
    elseif($course=='phy492'){ $title="PHY 492 (Practical Physics)"; }

    return $title;
}

function checkCourseTitle_new($course){
    if($course=='cos103'){ $title = "COS 103 (Computer Hardware Organization)"; }
    elseif($course=='cos105'){ $title="COS 105 (Intro. to Computer Sc. for Physical Sciences)"; }
    elseif($course=='mth111'){ $title="MTH 111 ( Elementary Mathematics I)"; }
    elseif($course=='mth121'){ $title="MTH 121 ( Elementary Mathematics II )"; }
    elseif($course=='phy107'){ $title="PHY 107 (Fundamental of Physics I)"; }
    elseif($course=='phy115'){ $title="PHY 115 (General Physics I)"; }
    elseif($course=='sta111'){ $title="STA 111 (Probability 1)"; }
    elseif($course=='sta131'){ $title="STA 131 (Inference I)"; }
    elseif($course=='gsp101'){ $title="GSP 101 ( Use of English I )"; }
    elseif($course=='gsp111'){ $title="GSP 111 ( Use of Library )"; }
    elseif($course=='chm101'){ $title="CHM 101 (Basic Chemistry I)"; } //FIrst Year first semester ends here
    elseif($course=='cos102'){ $title="COS 102 ( Introduction to Computer System )"; }
    elseif($course=='cos104'){ $title="COS 104 (Introduction to Database Systems)"; }
    elseif($course=='mth122'){ $title="MTH 122 ( Elementary Mathematics III )"; }
    elseif($course=='mth132'){ $title="MTH 132 (Elementary Mathematics IV)"; }
    elseif($course=='phy116'){ $title="PHY 116 ( General Physics II )"; }
    elseif($course=='phy118'){ $title="PHY 118 ( General Physics III )"; }
    elseif($course=='phy122'){ $title="PHY 122 ( Fundamentals Of Physics II )"; }
    elseif($course=='phy124'){ $title="PHY 124 (Fundamental of Physics III)"; }
    elseif($course=='phy196'){ $title="PHY 196 (Practical Physics III)"; }
    elseif($course=='chm112'){ $title="CHM 112 (Basic Principle of Physical Chemistry)"; }
    elseif($course=='sta112'){ $title="STA 112 ( Probability II )"; }
    elseif($course=='sta132'){ $title="STA 132 ( Inference II )"; }
    elseif($course=='sta172'){ $title="STA 172 ( Statistical Computing I )"; }
    elseif($course=='gsp102'){ $title="GSP 102 ( Use of English II )"; } //NEXT SEMESTER
    elseif($course=='cos201'){ $title = "COS 201 (Computer Programming I)"; }//Next Semester begins
    elseif($course=='cos203'){ $title="COS 203 (Introduction to Microcomputer Systems)"; }
    elseif($course=='cos232'){ $title="COS 231 (Assembly Language Programming)"; }
    elseif($course=='mth211'){ $title="MTH 211 (Sets, Logic and Algebra)"; }
    elseif($course=='mth215'){ $title="MTH 215 ( Linear Algebra I )"; }
    elseif($course=='mth221'){ $title="MTH 221 (Real Analysis I)"; }
    elseif($course=='mth311'){ $title="MTH 311 (Abstract Algebra I)"; }
    elseif($course=='mth207'){ $title="MTH 207 (Advanced Mathematics VII)"; }
    elseif($course=='sta205'){ $title="STA 205 ( Statistics for Physical Sc. & Engr. I )"; }
    elseif($course=='sta211'){ $title="STA 211 (Probability III)"; }
    elseif($course=='sta231'){ $title="STA 231 (Inference III)"; }
    elseif($course=='gsp201'){ $title="GSP 201 ( Basic Concepts & Theory of Peace )"; }
    elseif($course=='gsp207'){ $title="GSP 207 ( Humanities I )"; }
    elseif($course=='eee211'){ $title="EEE 211 (Basic Electrical Engineering)"; }
    elseif($course=='phy211'){ $title="PHY 211 (Structure Of Matter)"; }
    elseif($course=='phy221'){ $title="PHY 221 (Mechanics)"; }
    elseif($course=='cos202'){ $title="COS 202 ( Software Engineering I )"; } //Next Semester
    elseif($course=='cos204'){ $title="COS 204 (Introduction to Digital System Design)"; }
    elseif($course=='cos232'){ $title="COS 232 ( Data Structures )"; } 
    elseif($course=='cos242'){ $title="COS 242 ( Data and Computer Communication )"; }
    elseif($course=='sta206'){ $title="STA 206 (Statistics for Physical Sc. & Engr.)"; }
    elseif($course=='sta212'){ $title="STA 212 (Probability IV)"; }
    elseif($course=='sta272'){ $title="STA 272 (Statistical Computing II)"; }
    elseif($course=='gsp202'){ $title="GSP 202 (Issues in Peace & Conflict Resolution)"; }
    elseif($course=='gsp208'){ $title="GSP 208 ( Humanities II )"; }
    elseif($course=='mth216'){ $title="MTH 216 (Linear Algebra II)"; }
    elseif($course=='mth222'){ $title="MTH 222 ( Elementary Differential Equation I )"; }
    elseif($course=='mth242'){ $title="MTH 242 ( Mathematical Methods I )"; }
    elseif($course=='mth206'){ $title="MTH 206 (Andvaanced Mathematics VI)"; }
    elseif($course=='phy242'){ $title="PHY 242 ( Waves )"; }
    elseif($course=='phy262'){ $title="PHY 262 (Intro. to Atomic and Nuclear Physics)"; }
    elseif($course=='cos311'){ $title="COS 311 (Switching Algebra & Discrete Structures)"; }
    elseif($course=='cos331'){ $title="COS 331 (Operating Systems)"; }
    elseif($course=='cos333'){ $title="COS 333 (Software Engineering II)"; }
    elseif($course=='cos335'){ $title="COS 335 (Automata Theory and Formal Languages	)"; }
    elseif($course=='cos337'){ $title="COS 337 (Artificial Intelligence I)"; }
    elseif($course=='cos351'){ $title="COS 351 (Laboratory for Digital System Design)"; }
    elseif($course=='cos341'){ $title="COS 341 (Switching Algebra and Discrete Mathematics I)"; }
    elseif($course=='ced341'){ $title="CED 341 (Introduction to Entrepreneurship)"; }
    elseif($course=='phy301'){ $title="PHY 301 (Methods of Theoritical Physics I)"; }
    elseif($course=='phy321'){ $title="PHY 321 (Relativity Physics)"; }
    elseif($course=='phy351'){ $title="PHY 351 (Electronics)"; }
    elseif($course=='phy393'){ $title="PHY 393 (Workshop course I (Mechanical))"; }
    elseif($course=='phy331'){ $title="PHY 331 (Thermal Physics)"; }
    elseif($course=='mth327'){ $title="MTH 327 (Elementary Differential Equations II)"; }
    elseif($course=='mth331'){ $title="MTH 331 (Intro. to Mathematical Modeling)"; }
    elseif($course=='mth321'){ $title="MTH 321 (Metric Space Topology)"; }
    elseif($course=='mth337'){ $title="MTH 337 (Optimization Theory I)"; }
    elseif($course=='mth339'){ $title="MTH 339 (Analytical Dynamics)"; }
    elseif($course=='sta311'){ $title="STA 311 (Probability V)"; }
    elseif($course=='sta321'){ $title="STA 321 (Distribution Theory)"; }
    elseif($course=='sta331'){ $title="STA 331 (Inference IV)"; }
    elseif($course=='cos382'){ $title="COS 382 (Students Industrial Work Experience Scheme)"; }
    elseif($course=='cos384'){ $title="COS 384 (Technical SIWES Report)"; }
    elseif($course=='cos386'){ $title="COS 386 (SIWES Seminar)"; }      //next Semester
    elseif($course=='cos417'){ $title="COS 417 (Computer System Performance Evaluation)"; } //Next Semester
    elseif($course=='cos419'){ $title="COS 419 (Operations Research)"; }
    elseif($course=='cos421'){ $title="COS 421 (Database Design and Management)"; } 
    elseif($course=='cos431'){ $title="COS 431 (Algorithms)"; }
    elseif($course=='cos435'){ $title="COS 435 (Computer Graphics and Animation)"; }
    elseif($course=='cos441'){ $title="COS 441 (Advanced Computer Networks)"; }
    elseif($course=='cos463'){ $title="COS 463 (Structured Programming)"; }
    elseif($course=='cos411'){ $title="COS 411 (Numerical Methods)"; }
    elseif($course=='cos413'){ $title="COS 413 (Systems Modeling and Simulation)"; }
    elseif($course=='cos415'){ $title="COS 415 (Computer Process control)"; }
    elseif($course=='cos437'){ $title="COS 437 (Project Management)"; }
    elseif($course=='cos439'){ $title="COS 439 (Game Programming)"; }
    elseif($course=='cos461'){ $title="COS 461 (Organization of Programming Languages)"; }
    elseif($course=='cos471'){ $title="COS 471 (Web Application Development)"; }
    elseif($course=='sta411'){ $title="STA 411 (Probability VI)"; }
    elseif($course=='sta413'){ $title="STA 413 (Stochastic Processes I)"; }
    elseif($course=='sta415'){ $title="STA 415 (Time Series Analysis I)"; }
    elseif($course=='sta421'){ $title="STA 421 (Design and Analysis of Experiment I)"; }
    elseif($course=='sta423'){ $title="STA 423 (Regression Analysis)"; }
    elseif($course=='sta433'){ $title="STA 433 (Multivariate Analysis I)"; }
    elseif($course=='sta435'){ $title="STA 435 (Non Parametric Methods I)"; }
    elseif($course=='sta441'){ $title="STA 441 (Sampling Theory & Survey Methods II)"; }
    elseif($course=='mth421'){ $title="MTH 421 (Ordinary Differential Equations)"; }
    elseif($course=='mth425'){ $title="MTH 425 (Lebesgue Measure and Integration)"; }
    elseif($course=='mth427'){ $title="MTH 427 (Field Theory in Mathematical Physics)"; }
    elseif($course=='mth429'){ $title="MTH 429 (Functional Analysis)"; }
    elseif($course=='phy401'){ $title="PHY 401 (Computational Physics)"; }
    elseif($course=='phy403'){ $title="PHY 403 (General Physics)"; }
    elseif($course=='phy421'){ $title="PHY 421 (Analytical Mechanics)"; }
    elseif($course=='phy451'){ $title="PHY 451 (Electromagnetic Theory)"; }
    elseif($course=='phy461'){ $title="PHY 461 (Quantum Mechanics II)"; }
    elseif($course=='cos438'){ $title="COS 438 (Artificial Intelligence II)"; }
    elseif($course=='cos490'){ $title="COS 490 (Project)"; }
    elseif($course=='cos452'){ $title="COS 452 (Advanced Digital Laboratory)"; }
    elseif($course=='ced342'){ $title="COS 342 (Business Development & Management)"; }
    elseif($course=='cos434'){ $title="COS 434 (Compiler Construction)"; }
    elseif($course=='cos436'){ $title="COS 436 (Expert Systems)"; }
    elseif($course=='cos442'){ $title="COS 442 (Mobile Communications)"; }
    elseif($course=='cos444'){ $title="COS 444 (Computer Network Security)"; }
    elseif($course=='cos464'){ $title="COS 464 (Concurrent Programming)"; }
    elseif($course=='sta492'){ $title="STA 492 (Project)"; }
    elseif($course=='sta416'){ $title="STA 416 (Time Series Analysis II)"; }
    elseif($course=='sta422'){ $title="STA 422 (Design and Analysis of Experiment II)"; }
    elseif($course=='sta434'){ $title="STA 434 (Multivariate Analysis II)"; }
    elseif($course=='sta452'){ $title="STA 452 (Medical Statistics)"; }
    elseif($course=='sta414'){ $title="STA 414 (Stochastic Process II)"; }
    elseif($course=='mth452'){ $title="MTH 452 (Project)"; }
    elseif($course=='mth428'){ $title="MTH 428 (Partial Differential Equations)"; }
    elseif($course=='mth326'){ $title="MTH 326 (Real Analysis II)"; }
    elseif($course=='mth312'){ $title="MTH 312 (Abstract Algebra II)"; }
    elseif($course=='phy412'){ $title="PHY 412 (Solid State Physics)"; }
    elseif($course=='phy494'){ $title="PHY 494 (Project)"; }
    elseif($course=='phy438'){ $title="PHY 438 (Statistical Physics)"; }
    elseif($course=='phy462'){ $title="PHY 462 (Nuclear Physics)"; }
    elseif($course=='phy492'){ $title="PHY 492 (Practical Physics)"; }

    return $title;
}

function truncateRecord($id, $dataDB){
    if($dataDB=='old_first_yr_first_semester_results'){
        $query = "UPDATE $dataDB SET `cos101`='', `mth111`='', `mth121`='', `phy115`='', `phy191`='', `phy121`='', `sta111`='', `sta131`='', `gsp101`='', `gsp111`='', `chm101`='', `bio151`='', `engr101`='' WHERE id='{$id}'";
    }elseif($dataDB=='old_first_yr_second_semester_results'){
        $query = "UPDATE $dataDB SET `cos102`='',`cos104`='',`mth122`='',`mth132`='',`phy116`='',`phy118`='',`phy122`='',`sta112`='',`sta132`='',`sta172`='',`gsp102`='',`chm111`='',`bio152`='',`engr102`='' WHERE id='{$id}'";
    }elseif($dataDB=='old_second_yr_first_semester_results'){
        $query = "UPDATE $dataDB SET `cos201`='',`cos251`='',`mth211`='',`mth215`='',`mth221`='',`mth207`='',`sta205`='',`sta211`='',`sta231`='',`gsp201`='',`gsp207`='',`eee211`='',`phy211`='',`phy221`='',`phy241`='' WHERE id='{$id}'";
    }elseif($dataDB=='old_second_yr_second_semester_results'){
        $query = "UPDATE $dataDB SET `cos202`='',`cos222`='',`sta206`='',`sta212`='',`sta272`='',`gsp202`='',`gsp208`='',`mth216`='',`mth222`='',`mth242`='',`mth206`='',`mth223`='',`phy262`='' WHERE id='{$id}'";
    }elseif($dataDB=='old_third_yr_first_semester_results'){
        $query = "UPDATE $dataDB SET `cos301`='',`cos303`='',`cos311`='',`cos331`='',`cos333`='',`cos341`='',`cos315`='',`cos321`='',`cos335`='',`cos313`='',`cos314`='',`cos312`='',`cos352`='',`cos332`='',`ced341`='',`ece311`='',`ece321`='',`phy301`='',`phy321`='',`phy351`='',`phy393`='',`phy334`='',`phy391`='',`mth341`='',`mth311`='',`mth322`='',`mth332`='',`mth331`='',`mth321`='',`mth334`='',`sta311`='',`sta321`='',`sta331`='',`sta341`='' WHERE id='{$id}'";
    }elseif($dataDB=='old_third_yr_second_semester_results'){
        $query = "UPDATE $dataDB SET `cos352`='',`cos372`='',`cos374`='',`cos314`='',`cos316`='',`cos322`='',`cos334`='',`cos342`='',`ced342`='',`ece312`='',`ece332`='',`mth342`='',`mth312`='',`mth326`='',`mth333`='',`mth335`='',`phy302`='',`phy361`='',`phy381`='',`phy394`='',`phy395`='',`sta312`='',`sta323`='',`sta332`='',`sta342`='',`sta343`='' WHERE id='{$id}'";
    }elseif($dataDB=='old_final_yr_first_semester_results'){
        $query = "UPDATE $dataDB SET cos451='',cos461='',cos471='',cos411='',cos415='',cos413='',cos431='',cos453='',cos455='',cos457='',cos472='',mth451='',mth421='',mth422='',mth425='',phy463='',phy401='',phy402='',phy421='',phy451='',phy461='',sta491='',sta412='',sta421='',sta425='',sta432='',sta433='',sta441='' WHERE id='{$id}'";
    }elseif($dataDB=='old_final_yr_second_semester_results'){
        $query = "UPDATE $dataDB SET cos452='',cos462='',cos432='',cos454='',cos414='',cos412='',cos458='',cos464='',cos472='',cos456='',sta414='',sta422='',sta436='',sta434='',sta442='',mth423='',mth411='',mth424='',mth426='',phy411='',phy431='',phy462='',phy492='' WHERE id='{$id}'";
    }elseif($dataDB=='new_first_yr_first_semester_results'){
        $query = "UPDATE $dataDB SET cos103='',cos105='',mth111='',mth121='',phy107='',phy115='',sta111='',sta131='',gsp101='',gsp111='',chm101='' WHERE id='{$id}'";
    }elseif($dataDB=='new_first_yr_second_semester_results'){
        $query = "UPDATE $dataDB SET cos102='',cos104='',mth122='',mth132='',phy116='',phy118='',phy122='',phy124='',phy196='',chm112='',sta112='',sta132='',sta172='',gsp102='' WHERE id='{$id}'";
    }elseif($dataDB=='new_second_yr_first_semester_results'){
        $query = "UPDATE $dataDB SET `cos201`='',`cos203`='',`cos231`='',`mth211`='',`mth215`='',`mth221`='',`mth311`='',`mth207`='',`sta205`='',`sta211`='',`sta231`='',`gsp201`='',`gsp207`='',`eee211`='',`phy211`='',`phy221`='' WHERE id='{$id}'";
    }elseif($dataDB=='new_third_yr_first_semester_results'){
        $query = "UPDATE $dataDB SET `cos311`='',`cos331`='',`cos333`='',`cos335`='',`cos337`='',`cos351`='',`cos341`='',`ced341`='',`phy301`='',`phy321`='',`phy351`='',`phy393`='',`phy331`='',`mth327`='',`mth331`='',`mth321`='',`mth337`='',`mth339`='',`sta311`='',`sta321`='',`sta331`='' WHERE id='{$id}'";
    }elseif($dataDB=='new_third_yr_second_semester_results'){
        $query = "UPDATE $dataDB SET `cos382`='',`cos384`='',`cos386`='' WHERE id='{$id}'";
    }elseif($dataDB=='new_final_yr_first_semester_results'){
        $query = "UPDATE $dataDB SET `cos417`='',`cos419`='',`cos421`='',`cos431`='',`cos435`='',`cos441`='',`cos463`='',`cos411`='',`cos413`='',`cos415`='',`cos437`='',`cos439`='',`cos461`='',`cos471`='',`sta411`='',`sta413`='',`sta415`='',`sta421`='',`sta423`='',`sta433`='',`sta435`='',`sta441`='',`mth421`='',`mth425`='',`mth427`='',`mth429`='',`phy401`='',`phy403`='',`phy421`='',`phy451`='',`phy461`='' WHERE id='{$id}'";
    }elseif($dataDB=='new_final_yr_second_semester_results'){
        $query = "UPDATE $dataDB SET `cos438`='',`cos490`='',`cos452`='',`ced342`='',`cos434`='',`cos436`='',`cos442`='',`cos444`='',`cos464`='',`sta492`='',`sta416`='',`sta422`='',`sta434`='',`sta452`='',`sta414`='',`mth452`='',`mth428`='',`mth326`='',`mth312`='',`phy412`='',`phy494`='',`phy438`='',`phy462`='',`phy492`='' WHERE id='{$id}'";
    }
    return $query;
}

function semesterName($semester){
    if($semester =='first_yr_first_semester_results'){
        $name= " First Year <span><b>(1<sup>st</sup>&nbsp;Semester)</b></span>";
    }elseif($semester =='first_yr_second_semester_results'){
        $name= " First Year <span><b>(2<sup>st</sup>&nbsp;Semester)</b></span>";
    }elseif($semester =='second_yr_first_semester_results'){
        $name= " Second Year <span><b>(1<sup>st</sup>&nbsp;Semester)</b></span>";
    }elseif($semester =='second_yr_second_semester_results'){
        $name= " Second Year <span><b>(2<sup>st</sup>&nbsp;Semester)</b></span>";
    }elseif($semester =='third_yr_first_semester_results'){
        $name= " Third Year <span><b>(1<sup>st</sup>&nbsp;Semester)</b></span>";
    }elseif($semester =='third_yr_second_semester_results'){
        $name= " Third Year <span><b>(2<sup>st</sup>&nbsp;Semester)</b></span>";
    }elseif($semester =='final_yr_first_semester_results'){
        $name= " Final Year <span><b>(1<sup>st</sup>&nbsp;Semester)</b></span>";
    }elseif($semester =='final_yr_second_semester_results'){
        $name= " Final Year <span><b>(2<sup>st</sup>&nbsp;Semester)</b></span>";
    }

    return $name;
}

function checkUnits_old($course){

    if($course=='cos101'){ $unit=2; }
    elseif($course=='mth111'){ $unit=3; }
    elseif($course=='mth121'){ $unit=3; }
    elseif($course=='phy115'){ $unit=2; }
    elseif($course=='phy191'){ $unit=2; }
    elseif($course=='phy121'){ $unit=3; }
    elseif($course=='sta111'){ $unit=2; }
    elseif($course=='sta131'){ $unit=2; }
    elseif($course=='gsp101'){ $unit=2; }
    elseif($course=='gsp111'){ $unit=2; }
    elseif($course=='chm101'){ $unit=2; }
    elseif($course=='bio151'){ $unit=3; }
    elseif($course=='engr101'){ $unit=3; }
    elseif($course=='cos102'){ $unit=2; }
    elseif($course=='cos104'){ $unit=2; }
    elseif($course=='mth122'){ $unit=3; }
    elseif($course=='mth132'){ $unit=3; }
    elseif($course=='phy116'){ $unit=2; }
    elseif($course=='phy118'){ $unit=2; }
    elseif($course=='phy122'){ $unit=3; }
    elseif($course=='sta112'){ $unit=2; }
    elseif($course=='sta132'){ $unit=2; }
    elseif($course=='sta172'){ $unit=2; }
    elseif($course=='gsp102'){ $unit=2; }
    elseif($course=='chm111'){ $unit=2; }
    elseif($course=='bio152'){ $unit=3; }
    elseif($course=='engr102'){ $unit=3; }
    elseif($course=='cos201'){ $unit=2; }
    elseif($course=='cos251'){ $unit=2; }
    elseif($course=='mth211'){ $unit=3; }
    elseif($course=='mth215'){ $unit=2; }
    elseif($course=='mth221'){ $unit=3; }
    elseif($course=='mth207'){ $unit=2; }
    elseif($course=='sta205'){ $unit=2; }
    elseif($course=='sta211'){ $unit=2; }
    elseif($course=='sta231'){ $unit=3; }
    elseif($course=='gsp201'){ $unit=2; }
    elseif($course=='gsp207'){ $unit=2; }
    elseif($course=='eee211'){ $unit=3; }
    elseif($course=='phy211'){ $unit=3; }
    elseif($course=='phy221'){ $unit=2; }
    elseif($course=='phy241'){ $unit=3; }
    elseif($course=='cos202'){ $unit=2; }
    elseif($course=='cos222'){ $unit=2; }
    elseif($course=='sta206'){ $unit=2; }
    elseif($course=='sta212'){ $unit=2; }
    elseif($course=='sta272'){ $unit=2; }
    elseif($course=='gsp202'){ $unit=2; }
    elseif($course=='gsp208'){ $unit=2; }
    elseif($course=='mth216'){ $unit=2; }
    elseif($course=='mth222'){ $unit=3; }
    elseif($course=='mth242'){ $unit=3; }
    elseif($course=='mth206'){ $unit=2; }
    elseif($course=='mth223'){ $unit=3; }
    elseif($course=='phy262'){ $unit=3; }
    elseif($course=='cos301'){ $unit=2; }
    elseif($course=='cos303'){ $unit=2; }
    elseif($course=='cos311'){ $unit=2; }
    elseif($course=='cos331'){ $unit=2; }
    elseif($course=='cos333'){ $unit=2; }
    elseif($course=='cos341'){ $unit=2; }
    elseif($course=='cos315'){ $unit=2; }
    elseif($course=='cos321'){ $unit=2; }
    elseif($course=='cos335'){ $unit=2; }
    elseif($course=='cos313'){ $unit=2; }
    elseif($course=='cos314'){ $unit=2; }
    elseif($course=='cos352'){ $unit=2; }
    elseif($course=='cos332'){ $unit=2; }
    elseif($course=='ced341'){ $unit=2; }
    elseif($course=='ece311'){ $unit=2; }
    elseif($course=='ece321'){ $unit=3; }
    elseif($course=='phy301'){ $unit=2; }
    elseif($course=='phy321'){ $unit=2; }
    elseif($course=='phy351'){ $unit=2; }
    elseif($course=='phy393'){ $unit=2; }
    elseif($course=='phy334'){ $unit=3; }
    elseif($course=='phy391'){ $unit=2; }
    elseif($course=='mth341'){ $unit=2; }
    elseif($course=='mth311'){ $unit=3; }
    elseif($course=='mth322'){ $unit=3; }
    elseif($course=='mth332'){ $unit=2; }
    elseif($course=='mth331'){ $unit=3; }
    elseif($course=='mth321'){ $unit=3; }
    elseif($course=='mth334'){ $unit=3; }
    elseif($course=='sta311'){ $unit=2; }
    elseif($course=='sta321'){ $unit=2; }
    elseif($course=='sta331'){ $unit=2; }
    elseif($course=='sta341'){ $unit=2; }
    elseif($course=='cos352'){ $unit=2; }
    elseif($course=='cos372'){ $unit=3; }
    elseif($course=='cos374'){ $unit=4; }
    elseif($course=='cos314'){ $unit=2; }
    elseif($course=='cos316'){ $unit=2; }
    elseif($course=='cos322'){ $unit=2; }
    elseif($course=='cos334'){ $unit=2; }
    elseif($course=='cos342'){ $unit=2; }
    elseif($course=='ced342'){ $unit=2; }
    elseif($course=='ece312'){ $unit=3; }
    elseif($course=='ece332'){ $unit=2; }
    elseif($course=='mth342'){ $unit=2; }
    elseif($course=='mth312'){ $unit=3; }
    elseif($course=='mth326'){ $unit=3; }
    elseif($course=='mth333'){ $unit=2; }
    elseif($course=='mth335'){ $unit=3; }
    elseif($course=='phy302'){ $unit=2; }
    elseif($course=='phy361'){ $unit=3; }
    elseif($course=='phy381'){ $unit=3; }
    elseif($course=='phy394'){ $unit=2; }
    elseif($course=='phy395'){ $unit=2; }
    elseif($course=='sta312'){ $unit=2; }
    elseif($course=='sta323'){ $unit=2; }
    elseif($course=='sta332'){ $unit=2; }
    elseif($course=='sta342'){ $unit=2; }
    elseif($course=='sta343'){ $unit=2; }
    elseif($course=='cos451'){ $unit=2; }
    elseif($course=='cos461'){ $unit=2; }
    elseif($course=='cos471'){ $unit=6; }
    elseif($course=='cos411'){ $unit=2; }
    elseif($course=='cos415'){ $unit=2; }
    elseif($course=='cos413'){ $unit=2; }
    elseif($course=='cos431'){ $unit=2; }
    elseif($course=='cos453'){ $unit=2; }
    elseif($course=='cos455'){ $unit=2; }
    elseif($course=='cos457'){ $unit=2; }
    elseif($course=='cos472'){ $unit=3; }
    elseif($course=='mth451'){ $unit=4; }
    elseif($course=='mth421'){ $unit=3; }
    elseif($course=='mth422'){ $unit=3; }
    elseif($course=='mth425'){ $unit=3; }
    elseif($course=='phy463'){ $unit=4; }
    elseif($course=='phy401'){ $unit=2; }
    elseif($course=='phy402'){ $unit=2; }
    elseif($course=='phy421'){ $unit=2; }
    elseif($course=='phy451'){ $unit=2; }
    elseif($course=='phy461'){ $unit=3; }
    elseif($course=='sta491'){ $unit=4; }
    elseif($course=='sta412'){ $unit=2; }
    elseif($course=='sta421'){ $unit=2; }
    elseif($course=='sta425'){ $unit=2; }
    elseif($course=='sta432'){ $unit=2; }
    elseif($course=='sta433'){ $unit=2; }
    elseif($course=='sta441'){ $unit=2; }
    elseif($course=='cos452'){ $unit=2; }
    elseif($course=='cos462'){ $unit=2; }
    elseif($course=='cos432'){ $unit=2; }
    elseif($course=='cos454'){ $unit=2; }
    elseif($course=='cos414'){ $unit=2; }
    elseif($course=='cos412'){ $unit=2; }
    elseif($course=='cos458'){ $unit=2; }
    elseif($course=='cos464'){ $unit=2; }
    elseif($course=='cos472'){ $unit=3; }
    elseif($course=='cos456'){ $unit=2; }
    elseif($course=='sta414'){ $unit=2; }
    elseif($course=='sta422'){ $unit=2; }
    elseif($course=='sta436'){ $unit=2; }
    elseif($course=='sta434'){ $unit=2; }
    elseif($course=='sta442'){ $unit=2; }
    elseif($course=='mth423'){ $unit=3; }
    elseif($course=='mth411'){ $unit=3; }
    elseif($course=='mth424'){ $unit=3; }
    elseif($course=='mth426'){ $unit=4; }
    elseif($course=='phy411'){ $unit=3; }
    elseif($course=='phy431'){ $unit=2; }
    elseif($course=='phy462'){ $unit=3; }
    elseif($course=='phy492'){ $unit=2; }

    return $unit;
}

function checkUnits_new($course){
    if($course=='cos103'){ $unit=3; }
    elseif($course=='cos105'){ $unit=2; }
    elseif($course=='mth111'){ $unit=3; }
    elseif($course=='mth121'){ $unit=3; }
    elseif($course=='phy107'){ $unit=3; }
    elseif($course=='phy115'){ $unit=2; }
    elseif($course=='sta111'){ $unit=2; }
    elseif($course=='sta131'){ $unit=2; }
    elseif($course=='gsp101'){ $unit=2; }
    elseif($course=='gsp111'){ $unit=2; }
    elseif($course=='chm101'){ $unit=2; }
    elseif($course=='cos102'){ $unit=3; }
    elseif($course=='cos104'){ $unit=2; }
    elseif($course=='mth122'){ $unit=3; }
    elseif($course=='mth132'){ $unit=3; }
    elseif($course=='phy116'){ $unit=2; }
    elseif($course=='phy118'){ $unit=2; }
    elseif($course=='phy122'){ $unit=3; }
    elseif($course=='phy124'){ $unit=3; }
    elseif($course=='phy196'){ $unit=3; }
    elseif($course=='chm112'){ $unit=2; }
    elseif($course=='sta112'){ $unit=2; }
    elseif($course=='sta132'){ $unit=2; }
    elseif($course=='sta172'){ $unit=2; }
    elseif($course=='gsp102'){ $unit=2; }
    elseif($course=='cos201'){ $unit=2; }
    elseif($course=='cos203'){ $unit=2; }
    elseif($course=='cos232'){ $unit=2; }
    elseif($course=='mth211'){ $unit=3; }
    elseif($course=='mth215'){ $unit=2; }
    elseif($course=='mth221'){ $unit=3; }
    elseif($course=='mth311'){ $unit=3; }
    elseif($course=='mth207'){ $unit=2; }
    elseif($course=='sta205'){ $unit=2; }
    elseif($course=='sta211'){ $unit=2; }
    elseif($course=='sta231'){ $unit=3; }
    elseif($course=='gsp201'){ $unit=2; }
    elseif($course=='gsp207'){ $unit=2; }
    elseif($course=='eee211'){ $unit=3; }
    elseif($course=='phy211'){ $unit=3; }
    elseif($course=='phy221'){ $unit=2; }
    elseif($course=='cos202'){ $unit=2; }
    elseif($course=='cos204'){ $unit=2; }
    elseif($course=='cos232'){ $unit=2; } 
    elseif($course=='cos242'){ $unit=2; }
    elseif($course=='sta206'){ $unit=2; }
    elseif($course=='sta212'){ $unit=2; }
    elseif($course=='sta272'){ $unit=2; }
    elseif($course=='gsp202'){ $unit=2; }
    elseif($course=='gsp208'){ $unit=2; }
    elseif($course=='mth216'){ $unit=2; }
    elseif($course=='mth222'){ $unit=3; }
    elseif($course=='mth242'){ $unit=3; }
    elseif($course=='mth206'){ $unit=2; }
    elseif($course=='phy242'){ $unit=3; }
    elseif($course=='phy262'){ $unit=3; }
    elseif($course=='cos311'){ $unit=3; }
    elseif($course=='cos331'){ $unit=3; }
    elseif($course=='cos333'){ $unit=2; }
    elseif($course=='cos335'){ $unit=2; }
    elseif($course=='cos337'){ $unit=2; }
    elseif($course=='cos351'){ $unit=3; }
    elseif($course=='cos341'){ $unit=3; }
    elseif($course=='ced341'){ $unit=2; }
    elseif($course=='phy301'){ $unit=2; }
    elseif($course=='phy321'){ $unit=3; }
    elseif($course=='phy351'){ $unit=2; }
    elseif($course=='phy393'){ $unit=2; }
    elseif($course=='phy331'){ $unit=3; }
    elseif($course=='mth327'){ $unit=3; }
    elseif($course=='mth331'){ $unit=3; }
    elseif($course=='mth321'){ $unit=3; }
    elseif($course=='mth337'){ $unit=2; }
    elseif($course=='mth339'){ $unit=3; }
    elseif($course=='sta311'){ $unit=3; }
    elseif($course=='sta321'){ $unit=2; }
    elseif($course=='sta331'){ $unit=3; }
    elseif($course=='cos382'){ $unit=6; }
    elseif($course=='cos384'){ $unit=5; }
    elseif($course=='cos386'){ $unit=4; }
    elseif($course=='cos417'){ $unit=2; }
    elseif($course=='cos419'){ $unit=3; }
    elseif($course=='cos421'){ $unit=3; } 
    elseif($course=='cos431'){ $unit=2; }
    elseif($course=='cos435'){ $unit=2; }
    elseif($course=='cos441'){ $unit=3; }
    elseif($course=='cos463'){ $unit=2; }
    elseif($course=='cos411'){ $unit=3; }
    elseif($course=='cos413'){ $unit=2; }
    elseif($course=='cos415'){ $unit=2; }
    elseif($course=='cos437'){ $unit=2; }
    elseif($course=='cos439'){ $unit=2; }
    elseif($course=='cos461'){ $unit=2; }
    elseif($course=='cos471'){ $unit=2; }
    elseif($course=='sta411'){ $unit=3; }
    elseif($course=='sta413'){ $unit=2; }
    elseif($course=='sta415'){ $unit=2; }
    elseif($course=='sta421'){ $unit=2; }
    elseif($course=='sta423'){ $unit=3; }
    elseif($course=='sta433'){ $unit=2; }
    elseif($course=='sta435'){ $unit=2; }
    elseif($course=='sta441'){ $unit=2; }
    elseif($course=='mth421'){ $unit=3; }
    elseif($course=='mth425'){ $unit=3; }
    elseif($course=='mth427'){ $unit=3; }
    elseif($course=='mth429'){ $unit=3; }
    elseif($course=='phy401'){ $unit=2; }
    elseif($course=='phy403'){ $unit=2; }
    elseif($course=='phy421'){ $unit=2; }
    elseif($course=='phy451'){ $unit=2; }
    elseif($course=='phy461'){ $unit=3; }
    elseif($course=='cos438'){ $unit=2; }
    elseif($course=='cos490'){ $unit=6; }
    elseif($course=='cos452'){ $unit=3; }
    elseif($course=='ced342'){ $unit=2; }
    elseif($course=='cos434'){ $unit=3; }
    elseif($course=='cos436'){ $unit=2; }
    elseif($course=='cos442'){ $unit=2; }
    elseif($course=='cos444'){ $unit=2; }
    elseif($course=='cos464'){ $unit=2; }
    elseif($course=='sta492'){ $unit=6; }
    elseif($course=='sta416'){ $unit=2; }
    elseif($course=='sta422'){ $unit=2; }
    elseif($course=='sta434'){ $unit=2; }
    elseif($course=='sta452'){ $unit=2; }
    elseif($course=='sta414'){ $unit=2; }
    elseif($course=='mth452'){ $unit=4; }
    elseif($course=='mth428'){ $unit=3; }
    elseif($course=='mth326'){ $unit=3; }
    elseif($course=='mth312'){ $unit=3; }
    elseif($course=='phy412'){ $unit=3; }
    elseif($course=='phy494'){ $unit=4; }
    elseif($course=='phy438'){ $unit=2; }
    elseif($course=='phy462'){ $unit=3; }
    elseif($course=='phy492'){ $unit=2; }

    return $unit;
}

function __autoload($class_name){
    $class_name = strtolower($class_name);
    $path = "../includes/{$class_name}.php";
    if(file_exists($path)){
        require_once($path);
    }else{
        die("The file {$class_name}.php could not be found.");
    }
}
?>