<?php
    // individual functions
    function refineLocation($conn, $location, $area=NULL, $price=NULL){
        $location=trim($location);

        if(!(str_contains($location, " ") || str_contains($location, ","))){
            $refinedArr=array($location);
        }
        else if(str_contains($location, " ")) {
            $arr=explode(" ", $location);
            $refinedArr=(array) null;
            foreach($arr as $value) array_push($refinedArr, str_replace(",","",$value));
        }
        else if(str_contains($location, ",")) {
            $refinedArr=explode(",", $location);
        }

        $query=getLocationQuery($refinedArr);

        if($location && $area && $price) return filterByLocationAreaPrice($conn, $query, $area, $price);
        else if($location && $area) return filterByLocationArea($conn, $query, $area);
        else if($location && $price) return filterByLocationPrice($conn, $query, $price);
        else return filterByLocation($conn, $query);
    }

    function getLocationQuery($refinedArr){
        $query="";

        foreach($refinedArr as $key=>$value){
            $value=strtolower($value);
            $query.=" LOWER(address) LIKE ". "'%" .$value ."%'" . " OR";
            $query.="";
        }
        $query=substr($query, 0, strlen($query)-2);

        return $query;
    }

    function getAllData($conn){
        $sql = "SELECT p.pid as pid, `address`, area, price, imgPath FROM properties p INNER JOIN pictures ph ON p.pid=ph.pid WHERE isThumbnail=1";
        
        return execSql($conn, $sql);
    }
    
    function filterByPrice($conn,$price){
        $sql = "SELECT p.pid, `address`, area, price, imgPath FROM properties p INNER JOIN pictures ph ON p.pid=ph.pid WHERE isThumbnail=1 AND price<='$price'";

        return execSql($conn, $sql);
    }

    function filterByLocation($conn, $locationQuery){
        $sql = "SELECT p.pid as pid, `address`, area, price, imgPath FROM properties p INNER JOIN pictures ph ON p.pid=ph.pid WHERE isThumbnail=1 AND ($locationQuery)";
        
        return execSql($conn, $sql);
    }

    function filterByArea($conn, $area){
        $sql = "SELECT p.pid as pid, `address`, area, price, imgPath FROM properties p INNER JOIN pictures ph ON p.pid=ph.pid WHERE isThumbnail=1 AND area='$area'";

        return execSql($conn, $sql);
    }

    function filterByLocationArea($conn, $locationQuery, $area){
        $sql = "SELECT p.pid as pid, `address`, area, price, imgPath FROM properties p INNER JOIN pictures ph ON p.pid=ph.pid WHERE isThumbnail=1 AND `area`='$area' AND ($locationQuery)";

        return execSql($conn, $sql);
    }

    function filterByLocationPrice($conn, $locationQuery, $price){
        $sql = "SELECT p.pid as pid, `address`, area, price, imgPath FROM properties p INNER JOIN pictures ph ON p.pid=ph.pid WHERE isThumbnail=1 AND `price`<='$price' AND ($locationQuery)";

        return execSql($conn, $sql);
    }

    function filterByAreaPrice($conn, $area, $price){
        $sql = "SELECT p.pid as pid, `address`, area, price, imgPath FROM properties p INNER JOIN pictures ph ON p.pid=ph.pid WHERE isThumbnail=1 AND `area`='$area' AND `price`<='$price'";

        return execSql($conn, $sql);
    }

    function filterByLocationAreaPrice($conn, $locationQuery, $area, $price){
        $sql = "SELECT p.pid as pid, `address`, area, price, imgPath FROM properties p INNER JOIN pictures ph ON p.pid=ph.pid WHERE isThumbnail=1 AND `area`='$area' AND `price`<='$price' AND ($locationQuery)";

        return execSql($conn, $sql);
    }

    // main query function
    function execSql($conn, $sql){
        try{
            $result = mysqli_query($conn, $sql);
            $data=(array) null;
            $i=0;
            
            if (mysqli_num_rows($result) > 0) {
                
                while($row = $result->fetch_assoc()) {
                    $data[$i]=array('pid'=>$row["pid"], 'address'=>$row["address"], 'area'=>$row["area"], 'price'=>$row["price"], 'imgPath'=>$row["imgPath"]);
                    $i+=1;
                }
            }
            return $data;
        }
        catch(Exception $e){
            echo $e;
            return $e;
        }
    }
?>