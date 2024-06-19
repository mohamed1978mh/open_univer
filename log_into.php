
<header>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> الجامعة المفتوحة سبها</title>
 <link rel="stylesheet" href="css/bootstrap.min.css">
 <script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
</header>
<h1 id="main_titel">الجامعة المفتوحة سبها</h1>
<h3 id="Sub_titel">بوابة الاستفسار عن نتائج الطلبة</h3>

<?php

require "connection.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$user_Name = $_POST['username'];
$user_password = $_POST['pass_word'];
$host = 'localhost';
$dbusername ='root';
$dbpassword = '';
$dgname = 'new_database';
$conn = db_connect();
$sem_gpa = 0;
$last_gpa = "";
$query = "SELECT results.StudNameR FROM `results` WHERE StudNoK = $user_Name and National_No =$user_password;";
$result = $conn->query($query);
$Section_ = "";
$rowcount = mysqli_num_rows( $result );
if ($rowcount== 0) {
    header('Location:uncurrect_data.html');
    die();
}



$query = "SELECT results.StudNameR, results.StudNoK, results.CourseNameR, results.TotalScore, results.SemesterGPA, results.AccumulativeL, results.CourseML, results.SectionR, results.semR, results.yearNameR FROM `results` WHERE StudNoK = $user_Name ;";
$result = $conn->query($query);

?>

<?php $row1= $result->fetch_assoc() ?>

<h4 id="Sub_titel" ><font size="40" face="Time new roman"><?= htmlspecialchars($row1['StudNameR'].":   ".$row1['semR'].$row1['yearNameR']) ?></font></h4>

<table class="table table-hover table-bordered table-striped" style="padding:0; margin:0">
        <thead>
        
            <!--<tr text-align="center"> <font size="40" face="Time new roman" text-align = "center">  </font></tr>-->
            <tr>
            <th style="text-align: center"> التقدير</th>
                <th style="text-align: center"> الدرجة</th>
                <th style="text-align: center"> اسم المادة</th>
                
            </tr>
        </thead>

        <tbody>
         <?php while($row= $result->fetch_assoc()){ ?>
            <tr>  
                <td style="text-align: center"><?= htmlspecialchars($row['CourseML']) ?></td>
                <td style="text-align: center"><?= htmlspecialchars($row['TotalScore']) ?></td>
                <td style="text-align: center"><?= htmlspecialchars($row['CourseNameR']) ?></td>
                
                <?php 
                $sem_gpa = $row['SemesterGPA'];
                $last_gpa = $row['AccumulativeL'];
                $Section_ = $row['SectionR'];
                ?>
            </tr>
        <?php }?>
        </tbody>
        
</table>

<hr style="height:2px;border-width:0;color:gray;background-color:gray">
<div style="padding:0; margin:0">

<table class="table table-hover table-bordered table-striped">
        
        <thead>
            <tr> 
                <td style="text-align: center; font-weight:bold; font-family: time new roman; font-size: 24px">المعدل التراكمي</td>    
                <td style="text-align: center; font-weight:bold; font-family: time new roman; font-size: 24px"> المعدل الفصلي</td>
                <td style="text-align: center; font-weight:bold; font-family: time new roman; font-size: 24px"> القـســم</td>
                
            </tr> 
            
        </thead>
        <tbody>
            <tr> 
                <td style ="text-align: center; font-size: 22px"><?= htmlspecialchars($last_gpa) ?></td>
                <td style ="text-align: center; font-size: 22px"><?= htmlspecialchars($sem_gpa) ?></td>
                <td style ="text-align: center; font-size: 22px"><?= htmlspecialchars($Section_) ?></td>
            </tr> 
            
         </tbody>
</table>
</div>


<?php } ?>
