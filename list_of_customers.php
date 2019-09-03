<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
        background: aquamarine;
    }

    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid black;
    }

    .thumbnail {
        height: 60px;
        width: 100px;
        overflow: hidden;
    }

    .thumbnail image {
        width: 100%;
    }
</style>
<body>
<table border="1">
    <caption><h1>Danh sách khách hàng</h1></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày Sinh</th>
        <th>Địa Chỉ</th>
        <th>Ảnh</th>
    </tr>
    <?php
    $customerlist = array(
        "1" => array("ten" => "Đỗ Đức Thanh",
            "ngaysinh" => "1994-03-20",
            "diachi" => "Hà nội",
            "anh" => "image/thanhdo.jpeg"),
        "2" => array("ten" => "Trần Xuân Hưởng",
            "ngaysinh" => "1992-03-20",
            "diachi" => "Hà nội",
            "anh" => "image/huongtran.jpeg"),
        "3" => array("ten" => "Nguyễn Đức",
            "ngaysinh" => "1993-03-20",
            "diachi" => "Hà nội",
            "anh" => "image/ducnguyen.jpeg"),
        "4" => array("ten" => "Nguyễn Long",
            "ngaysinh" => "1959-03-20",
            "diachi" => "Hà nội",
            "anh" => "image/longnguyen.jpeg")
    );
    ?>
    <?php
    foreach ($customerlist as $key => $values) {
        echo "<tr>";
        echo "<td>" . $key . "</td>";
        echo "<td>" . $values['ten'] . "</td>";
        echo "<td>" . $values['ngaysinh'] . "</td>";
        echo "<td>" . $values['diachi'] . "</td>";
        echo "<td><div class='thumbnail'><image src ='" . $values['anh'] . "' width = '60px' height = '60px' /></div></td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>
