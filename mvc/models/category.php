<?php
class category extends DB
{
    function getCategory()
    {
        $sql = "SELECT*FROM category";
        $result = mysqli_query($this->conn, $sql);
        $arr = [];
        if (!$result) {
            echo "truy van that bai danh muc";
        }
        while ($row = mysqli_fetch_array($result)) {
            array_push($arr, $row);
        }
        return $arr;
    }
}
