<?php
	class database{
		function insert( $table , $data)//fungsi insert
    {
        include"../../config/connection.php";
		$row = array();
        $nilai = array();
        foreach ( $data as $kolom =>$value )
               {
            $row[] = $kolom;
            $nilai[] = "'".$value."'";
        }
 
         $con->query("INSERT INTO ". $table ."(". implode(',' ,$row) .")
                        VALUES (". implode(',' , $nilai) .")");
     }
		function update($table , $data , $where)//fungsi update
		
      {
		 include"../../config/connection.php";
        foreach ( $data as $kolom => $row )
        {
            $set[]= $kolom."='".$row."'" ;
        }
        $set = implode(',',$set);
        $query = "UPDATE ".$table." SET ".$set." WHERE ".$where ;
       $con->query($query);
		}
		
		function delete($table , $where)//fungsi delete
    {
        include"../../config/connection.php";
		$con->query("DELETE FROM ".$table." WHERE ".$where);
    }
	}
	