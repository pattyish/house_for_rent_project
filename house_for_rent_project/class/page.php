<?php
	class page{
		public function render_header($type='main')
		{
			// include '';
		}
		public function render_footer($type='main')
		{
			// include '';
		}

		public static function render_menu($type='main')
		{
			include 'modules/menu.php';
		}

		public static function loadMain($page)
		{
			include 'pages/mainPageTemplate.php';
		}
	}
	$Page = new page();
?>