<?php
//$json = $_GET["jsonTable"];
$matrix = json_decode($_GET["jsonTable"]);
$maxArea = 0;
$result = [];
for($minRow = 0; $minRow < count($matrix); $minRow++){
    for($maxRow = $minRow; $maxRow < count($matrix); $maxRow++){
        for($minCol = 0; $minCol < count($matrix[0]);$minCol++){
            for($maxCol = $minCol; $maxCol < count($matrix[0]);$maxCol++){
                $str = $matrix[$minRow][$minCol];
                if(isRectangle($minRow, $maxRow, $minCol, $maxCol, $str, $matrix)) {
                    $area = ($maxRow - $minRow + 1) * ($maxCol - $minCol + 1);
                    if ($area > $maxArea) {
                        $maxArea = $area;
                        $result = [$minRow, $minCol, $maxRow, $maxCol];
                    }
                }
            }
        }
    }
}
printTable($matrix, $result[0], $result[1], $result[2], $result[3]);
function isRectangle($minRow, $maxRow, $minCol, $maxCol, $str, $matrix){
    for($row=$minRow;$row <= $maxRow;$row++){
        if($matrix[$row][$minCol] != $str){
            return false;
        }
        if($matrix[$row][$maxCol] != $str){
            return false;
        }
    }
    for($col = $minCol; $col <= $maxCol; $col++){
        if($matrix[$minRow][$col] != $str){
            return false;
        }
        if($matrix[$maxRow][$col] != $str){
            return false;
        }
    }
    return true;

}
function printTable($matrix, $minRow, $minCol, $maxRow, $maxCol) {
    echo "<table border='1' cellpadding='5'>";
    for ($row = 0; $row < count($matrix); $row++) {
        echo "<tr>";
        for ($col = 0; $col < count($matrix[$row]); $col++) {
            $topBorder = ($row == $minRow) && ($col >= $minCol && $col <= $maxCol);
            $rightBorder = ($col == $maxCol) && ($row >= $minRow && $row <= $maxRow);
            $downBorder = ($row == $maxRow) && ($col >= $minCol && $col <= $maxCol);
            $leftBorder = ($col == $minCol) && ($row >= $minRow && $row <= $maxRow);
            if ($topBorder || $rightBorder || $downBorder || $leftBorder) {
                echo "<td style='background:#CCC'>";
            } else {
                echo "<td>";
            }
            echo htmlspecialchars($matrix[$row][$col]);
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

?>

