<?
abstract class db{
	public $DBH;
public function __construct(){}
}

class Manager extends db{
	public function check_us(){}
	public function exit_us(){}
}

class News extends db{
	public function ins_news(){}
	public function sel_news(){}
	public function del_news(){}
	public function upd_news(){}
}

?>