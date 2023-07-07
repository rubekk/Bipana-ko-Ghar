<?php
    function filterById($conn, $pid){
        $sql = "SELECT p.pid AS pid, pname, `address`, uname, phone, area, latitude, longitude, price, info, uploadedon, phid, imgpath, isThumbnail from pictures ph INNER JOIN properties p on ph.pid=p.pid INNER JOIN users u on  p.id=u.id WHERE p.pid='$pid'";

        return execSql($conn, $sql);
    }

    // main query function
    function execSql($conn, $sql){
        try{
            $result = mysqli_query($conn, $sql);
            $data=(array) null;
            $i=1;
            
            if (mysqli_num_rows($result) > 0) {
                while($row = $result->fetch_assoc()) {
                    if($i==1) $data=array('pid'=>$row["pid"], 'pname'=>$row["pname"], 'address'=>$row["address"], 'uname'=>$row["uname"], 'phone'=>$row["phone"], 'area'=>$row["area"], 'latitude'=>$row["latitude"], 'longitude'=>$row["longitude"], 'price'=>$row["price"], 'info'=>$row["info"], 'uploadedon'=>$row["uploadedon"], 'imgs'=>(array) null);

                    $imginfo=array('phid'=>$row["phid"], 'imgpath'=>$row["imgpath"], 'isThumbnail'=>$row["isThumbnail"]);
                    array_push($data['imgs'], $imginfo);
                    $i++;
                }
            } 
            return $data;
        }
        catch(Exception $e){
            return $e;
        }
    }
?>