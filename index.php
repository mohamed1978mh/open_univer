<?php
require "connection.php";

$connection = db_connect();
//$query = "Select * from test_one ";
//$result = $connection->query($query); //mysqli_query($connection,"SELECT * FROM 'test_one' ");
//$data = $result->fetch_assoc(MYSQLI_ASSOC);
//$result = $connection->query($query);
header('Location:mainface.html');
die();
?>


<!-- <table border="5" cellspacing="10" cellpadding="10">

      <tr> 
          <td> <font face="Arial">Value1</font> </td> 
          <td> <font face="Arial">Value2</font> </td> 
          <td> <font face="Arial">Value3</font> </td> 
          <td> <font face="Arial">Value4</font> </td> 
          <td> <font face="Arial">Value5</font> </td> 
      </tr>
</table>
      <div ><h3 id="Stu_inf">اسم الطالب: محمد عثمان الشامسا</h3>  </div>
<div class="Contaner">

    <table class="table table-hover table-bordered table-striped">
        <thead>
            <tr>
                <th> اسم المادة</th>
                <th> الدرجة</th>
                <th> التقدير</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th> المحاسبة 1</th>
                <th> 55</th>
                <th> مقبول</th>
            </tr>
            <tr>
                <th> الرياضيات</th>
                <th> 75</th>
                <th> جيد جدا</th>
            </tr>
            <tr>
                <th> اللغة الانجليزية</th>
                <th> 67</th>
                <th> حيد</th>
            </tr>
        
            </tbody>

    </table>

</div> -->
   
   
