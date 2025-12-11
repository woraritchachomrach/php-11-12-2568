<?php
    // ฟังก์ชันส่วนล่าง
    function sum($num1, $num2){
        return $num1 + $num2;
    }

    function add_five($num){
        $value = $num + 5;
        echo "ค่าภายในฟังก์ชัน add_five() คือ $value<br>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การใช้ User-define Function</title>

    <style>
        body {
            font-family: "Prompt", sans-serif;
            background: #f4f6f9;
            padding: 20px;
            line-height: 1.8;
        }

        h1 {
            text-align: center;
            color: #333;
            padding: 15px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0px 2px 5px rgba(0,0,0,0.1);
        }

        h2 {
            color: #444;
            border-left: 5px solid #007bff;
            padding-left: 10px;
            margin-top: 30px;
        }

        .box {
            background: white;
            padding: 20px;
            margin-top: 15px;
            border-radius: 10px;
            box-shadow: 0px 2px 6px rgba(0,0,0,0.15);
        }

        footer {
            margin-top: 40px;
            padding: 15px;
            text-align: center;
            background: #222;
            color: white;
            border-radius: 8px;
        }
    </style>
</head>
<body>

    <h1>การใช้ User-define Function ฟังก์ชันที่สร้างขึ้นเอง</h1>

    <div class="box">
        <h2>ตัวอย่างฟังก์ชัน sum()</h2>
        <?php
            echo "ผลบวกของ 10 กับ 20 คือ " . sum(10, 20) . "<br>";
            echo "ผลบวกของ 15 กับ 25 คือ " . sum(15, 25) . "<br>";

            $a = 30; 
            $b = 45;
            echo "ผลบวกของ $a กับ $b คือ " . sum($a, $b) . "<br>";
        ?>
    </div>

    <div class="box">
        <h2>ตัวอย่างฟังก์ชันที่เปลี่ยนแปลงค่า</h2>
        <?php
            $num = 50;
            echo "ค่าของ num ก่อนเรียกใช้ add_five() คือ $num<br>";
            add_five($num);
            echo "ค่าของ num หลังเรียกใช้ add_five() คือ $num<br>";
        ?>
    </div>

    <div class="box">
        <h2>ฟังก์ชันที่มีพารามิเตอร์หลายตัว (...$x)</h2>
        <?php
            function sumListofNumbers(...$x){
                $n = 0;
                foreach($x as $value){
                    $n += $value;
                }
                return $n;
            }

            echo "ผลบวกของตัวเลข 5,10,15 คือ " . sumListofNumbers(5,10,15) . "<br>";
            echo "ผลบวกของตัวเลข 1 ถึง 10 คือ "
                . sumListofNumbers(1,2,3,4,5,6,7,8,9,10) . "<br>";
        ?>
    </div>

    <div class="box">
        <h2>ฟังก์ชัน myFamily()</h2>
        <?php
            function myFamily($lastName, ...$firstNames){
                foreach($firstNames as $name){
                    echo "สวัสดี คุณ $name $lastName<br>";
                }
            }

            myFamily("ไชยเวช", "กฤษณเทพ", "วรฤทธิ์", "วรวรรดิ์", "ภูธเรศ");
        ?>
    </div>

    <footer>
        PHP User-define Function Example © 2024  
        <br>สร้างโดย: Krissanatep Chaiyawech
    </footer>
    <h2>ตัวอย่าง function ที่มีพารามิเตอร์ค่าเริ่มต้น</h2>
    <?php
        function thai_date($strDate="now"){
            $strYear = date("Y", strtotime($strDate)) + 543;
            $strMonth = date("n", strtotime($strDate));
            $strDay = date("J", strtotime($strDate));

            $thaiMonthNames = ["", "มกราคม" ,"กุมภาพันธ์" ,"มีนาคม" ,"เมษายน" ,"พฤษภาคม" ,"มิถุนายน" ,"กรกฎาคม" ,"สิงหายน" ,"กันยายน" ,"ตุลาคม" ,"พฤศจิกายน" ,"ธันวาคม"  ];
            $strMonthThai = $thaiMonthNames [$strMonth];
            return "$strDay $strMonthThai พ.ศ. $strYear";
        }
        echo thai_date("2025-12-11") . "<br>";
        echo thai_date();
    ?>
</body>
</html>