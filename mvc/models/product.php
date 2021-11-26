<?php
class product extends DB
{
    function getAll()
    {
        $sql = "SELECT *FROM product";
        $result = mysqli_query($this->conn, $sql);
        $arr = [];
        if (!$result) {
            echo "truy van that bai san pham";
        }
        while ($row = mysqli_fetch_array($result)) {
            array_push($arr, $row);
        }
        return $arr;
    }
}
