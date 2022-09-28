<?php
namespace T;
class Tpl {
	protected $res;
	protected $htmlStart = '<!DOCTYPE html><html lang="ru-UA">';
	protected $meta = [
		'<meta charset="UTF-8">',
		'<meta http-equiv="X-UA-Compatible" content="IE=edge">',
		'<meta name="viewport" content="width=device-width, initial-scale=1">',
	];
	protected $script = [

	];
	protected $link = [
	];
	protected $title = ['Вітаміни'];
	public function __toString() {
		$this->res = $this->htmlStart;
		$this->_head();
		$this->_body();
		$this->res .= '</html>';
		return $this->res;
	}
	protected function _head() {
		$this->res .= '<head>';
		$this->head();
		$this->res .= '</head>';
	}
	protected function _body() {
		$this->res .= '<body>';
		$this->body();
		$this->res .= '</body>';
	}
	public function head() {
		$this->_meta();
		$this->_csrf();
		$this->_title();
		$this->_link();
		$this->_script();
	}
	protected function _meta() {
		$this->_echoArr($this->meta);
	}
	protected function _link() {
		$this->_echoArr($this->link);
	}
	protected function _script() {
		$this->_echoArr($this->script);
	}
	protected function _echoArr(array $arr) {
		foreach ($arr as $el) {
			$this->res .= $el . "\n";
		}
	}
	public function body() {
		echo '';
	}
	protected function _title() {
		$this->res .= '<title>' .implode(' | ', $this->title). '</title>';
	}
	protected function _csrf() {
		//XXX ass csrf
		$this->res .= '<meta name="csrf-param" content="_csrf">
<meta name="csrf-token" content="Fy4K6vn8ym7L2PD5kzHIxlHqJPtjPdcvEBdl1Qvm3VBSQ0SHr76AIP7uvr7BAKf0PohCtDxfjVVURAngXK6TIA==">
';
	}
}

