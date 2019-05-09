<?php
//รับค่าจากฟอร์มด้วย php
// เช็คการกดปุ่ม submit ว่ามีการเรียกใช้งาน submit form แล้วรึยัง
$change = 0; //ประกาศให้ตัวแปร change เป็น 0 เมื่อเริ่มต้นโปรแกรม

if (!empty($_POST['submit']))
{
// สร้างตัวแปรเพื่อรับค่าจาก user
    $price = $_POST["price"];
    $money = $_POST["money"];

//คำนวนเงินทอน
    $change = $money - $price;
    // echo $change;

}
?>

<!-- //ส่วนของ interface ที่รับค่ารจาก user -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">


</head>
<body>

 <!-- insert header by b4-jumbotron-default -->

    <div class="jumbotron bg-primary  text-light ">
        <h1 class="display-3 text-center">Calculator</h1>
    </div>

    <!-- insert form to get input from user by interface  via " b4-form-grid "-->

<div class="container">
    <form class="col-md-6 offset-md-3" method="POST" action="exercise_change.php">
        <div class="form-group row">
            <label for="inputName" class="col-sm-3 col-form-label"">ราคาสินค้า</label>
            <div class="col-sm-9">
                <input type="number" step=".01" class="form-control" name="price" id="price" placeholder="" required>     <!-- ช่องรับ input ช่องที่ 1 -->
            </div>
        </div>

        <div class="form-group row">
            <label for="inputName" class="col-sm-3 col-form-label"">จ่ายเงินมา</label>
            <div class="col-sm-9">
                <input type="number" step=".01" class="form-control" name="money" id="money" placeholder="" required>    <!-- ช่องรับ input ช่องที่ 2 -->
            </div>
        </div>
        <!-- <fieldset class="form-group row"> -->
            <!-- <legend class="col-form-legend col-sm-1-12">Group name</legend> -->
            <!-- <div class="col-sm-1-12"> -->
<!--  -->
            <!-- </div> -->
        <!-- </fieldset> -->
        <div class="form-group row">
        <label for="inputName" class="col-sm-3 col-form-label""></label>
            <div class="col-sm-9">
                <input type="submit" name="submit" class="btn btn-primary" value="คำนวณ">
                <hr>
                เงินทอน <?=$change?> บาท    <!-- แสดงผลค่าโดยเรียกใช้ตัวแปรที่ประกาศใน PHP แสดงค่าที่เก็บใน $change -->
            </div>
        </div>
    </form>
</div>

    <!-- insert form to inout interface -->


    <script src="jquery/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>


</body>
</html>


