<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_model {

    function __construct(){ 
        parent::__construct(); 
        //위에서 설정한 /application/config/database.php 파일에서 $db['myDB'] 설정값을 불러오겠다는 뜻
        $this->test = $this->load->database('myDB', TRUE);
    } 
    
    function myDBTest() {
        //query 함수는 DB에 쿼리를 요청하는 것이며, 이 과정에서 오류가 뜨면 오류메시지 출력
        $this->test->query("SELECT * FROM myDB");   
        echo "이 메세지를 보았다면 성공";
    }
}