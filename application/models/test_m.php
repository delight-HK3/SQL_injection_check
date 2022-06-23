<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class test_m extends CI_Model {
    public function getrow($sql){
        $query1 = "select * from sqltest"; 
        // 테이블 전체를 출력하는 쿼리를 $query1에 저장
        $table_num1 = $this->db->query($query1)->num_rows();
        // $query1 쿼리를 실행시켜 나온 결과값을 $table_num1에 저장

        $query2 = "select * from sqltest where name $sql";
        // 입력한 값을 쿼리에 연결하여 만든 쿼리를 $query2에 저장
        $table_num2 = $this->db->query($query2)->num_rows();
        // $query2 쿼리를 실행시켜 나온 결과값을 $table_num2에 저장

        if($table_num1 == $table_num2){ // 같은 경우
            return "Success"; // 문자열 Success 리턴
        }
        else{
            return "Failed"; // 문자열 Failed 리턴
        } 
    }
}
?>
