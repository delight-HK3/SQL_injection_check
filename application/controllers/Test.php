<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->database(); //DB 연결          
        $this->load->model("test_m"); // test_m model에 연결
	}
	public function index()
	{
		$this->load->view('editor_view'); // editor_view 실행
	}
	public function sql_check(){
		$sql = $this->input->post("input_sql",TRUE); 
		// input태그에서 name이 input_sql인 value값을 $sql에 저장
		$result = $this->test_m->getrow($sql); 
		// test_m에서 getrow함수를 실행시켜 입력한 쿼리로 SQL공격을 한 뒤 결과를 $result에 저장

		$returnArray['response'] = $result; // response배열에 $result값을 저장
		echo json_encode($returnArray); // response배열을 json으로 인코딩
	}
}
