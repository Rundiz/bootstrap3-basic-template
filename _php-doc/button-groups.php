<?php require 'php-inc/inc_html_head.php'; ?> 

		<main class="content-wrap" role="main">
<?php require 'php-inc/inc_page_header.php'; ?> 
			
			<div class="container">
				<div class="row row-with-vspace">
					<article class="col-xs-12">
						<header class="page-header">
							<h1>Button groups</h1>
						</header>
						
						
						<h2>Basic example</h2>
						<div class="example-block">
							<div class="btn-group">
								<button type="button" class="btn btn-default">Left</button>
								<button type="button" class="btn btn-default">Middle</button>
								<button type="button" class="btn btn-default">Right</button>
							</div>
							<div class="btn-group">
								<button type="button" class="btn btn-default">ซ้าย</button>
								<button type="button" class="btn btn-default">กลาง</button>
								<button type="button" class="btn btn-default">ขวา</button>
							</div>
							<hr />
							<h3>With button options</h3>
							<div class="btn-group">
								<button type="button" class="btn btn-primary">Primary</button>
								<button type="button" class="btn btn-success">Success</button>
								<button type="button" class="btn btn-info">Info</button>
								<button type="button" class="btn btn-warning">Warning</button>
								<button type="button" class="btn btn-danger">Danger</button>
							</div>
							<div class="btn-group">
								<button type="button" class="btn btn-primary">ปุ่มหลัก</button>
								<button type="button" class="btn btn-success">สำเร็จ</button>
								<button type="button" class="btn btn-info">ข้อมูล</button>
								<button type="button" class="btn btn-warning">เตือน</button>
								<button type="button" class="btn btn-danger">อันตราย</button>
							</div>
						</div>
						
						
						<h2>Button toolbar</h2>
						<div class="example-block">
							<div class="btn-group">
								<button class="btn btn-default" type="button">1</button>
								<button class="btn btn-default" type="button">2</button>
								<button class="btn btn-default" type="button">3</button>
								<button class="btn btn-default" type="button">4</button>
							</div>
							<div class="btn-group">
								<button class="btn btn-default" type="button">5</button>
								<button class="btn btn-default" type="button">6</button>
								<button class="btn btn-default" type="button">7</button>
							</div>
						</div>
						
						
						<h2>Sizing</h2>
						<div class="example-block">
							<div class="row">
								<div class="col-sm-6">
									<div class="btn-toolbar" role="toolbar">
										<div class="btn-group btn-group-lg">
											<button class="btn btn-default" type="button">Left</button>
											<button class="btn btn-default" type="button">Middle</button>
											<button class="btn btn-default" type="button">Right</button>
										</div>
									</div>
									<div class="btn-toolbar" role="toolbar">
										<div class="btn-group">
											<button class="btn btn-default" type="button">Left</button>
											<button class="btn btn-default" type="button">Middle</button>
											<button class="btn btn-default" type="button">Right</button>
										</div>
									</div>
									<div class="btn-toolbar" role="toolbar">
										<div class="btn-group btn-group-sm">
											<button class="btn btn-default" type="button">Left</button>
											<button class="btn btn-default" type="button">Middle</button>
											<button class="btn btn-default" type="button">Right</button>
										</div>
									</div>
									<div class="btn-toolbar" role="toolbar">
										<div class="btn-group btn-group-xs">
											<button class="btn btn-default" type="button">Left</button>
											<button class="btn btn-default" type="button">Middle</button>
											<button class="btn btn-default" type="button">Right</button>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="btn-toolbar" role="toolbar">
										<div class="btn-group btn-group-lg">
											<button type="button" class="btn btn-default">ซ้าย</button>
											<button type="button" class="btn btn-default">กลาง</button>
											<button type="button" class="btn btn-default">ขวา</button>
										</div>
									</div>
									<div class="btn-toolbar" role="toolbar">
										<div class="btn-group">
											<button type="button" class="btn btn-default">ซ้าย</button>
											<button type="button" class="btn btn-default">กลาง</button>
											<button type="button" class="btn btn-default">ขวา</button>
										</div>
									</div>
									<div class="btn-toolbar" role="toolbar">
										<div class="btn-group btn-group-sm">
											<button type="button" class="btn btn-default">ซ้าย</button>
											<button type="button" class="btn btn-default">กลาง</button>
											<button type="button" class="btn btn-default">ขวา</button>
										</div>
									</div>
									<div class="btn-toolbar" role="toolbar">
										<div class="btn-group btn-group-xs">
											<button type="button" class="btn btn-default">ซ้าย</button>
											<button type="button" class="btn btn-default">กลาง</button>
											<button type="button" class="btn btn-default">ขวา</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						
						<h2>Nesting</h2>
						<div class="example-block">
							<div class="btn-group">
								<button type="button" class="btn btn-default">1</button>
								<button type="button" class="btn btn-default">2</button>

								<div class="btn-group">
									<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
										Dropdown
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<li><a href="#">Dropdown link</a></li>
										<li><a href="#">Dropdown link</a></li>
									</ul>
								</div>
								<div class="btn-group">
									<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
										ดรอปดาวน์
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<li><a href="#">ลิ้งค์</a></li>
										<li><a href="#">ลิ้งค์</a></li>
									</ul>
								</div>
							</div>
						</div>
						
						
						<h2>Vertical variation</h2>
						<div class="example-block">
							<div class="btn-group-vertical">
								<button class="btn btn-default" type="button">Button</button>
								<button class="btn btn-default" type="button">Button</button>
								<div class="btn-group">
									<button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button" id="btnGroupVerticalDrop1">
										Dropdown
										<span class="caret"></span>
									</button>
									<ul aria-labelledby="btnGroupVerticalDrop1" role="menu" class="dropdown-menu">
										<li><a href="#">Dropdown link</a></li>
										<li><a href="#">Dropdown link</a></li>
									</ul>
								</div>
								<button class="btn btn-default" type="button">ปุ่ม</button>
								<button class="btn btn-default" type="button">ปุ่ม</button>
								<div class="btn-group">
									<button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button" id="btnGroupVerticalDrop2">
										ดรอปดาวน์
										<span class="caret"></span>
									</button>
									<ul aria-labelledby="btnGroupVerticalDrop2" role="menu" class="dropdown-menu">
										<li><a href="#">ลิ้งค์</a></li>
										<li><a href="#">ลิ้งค์</a></li>
									</ul>
								</div>
							</div>
						</div>
						
						
						<h2>Justified button groups</h2>
						<div class="example-block">
							<div class="row">
								<div class="col-sm-6">
									<div class="btn-group btn-group-justified">
										<a class="btn btn-default" role="button">Left</a>
										<a class="btn btn-default" role="button">Middle</a>
										<a class="btn btn-default" role="button">Right</a>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="btn-group btn-group-justified">
										<a class="btn btn-default" role="button">ซ้าย</a>
										<a class="btn btn-default" role="button">กลาง</a>
										<a class="btn btn-default" role="button">ขวา</a>
									</div>
								</div>
							</div>
							<h3>Use <code>button</code> element</h3>
							<div class="row">
								<div class="col-sm-6">
									<div class="btn-group btn-group-justified">
										<div class="btn-group">
											<button class="btn btn-default" type="button">Left</button>
										</div>
										<div class="btn-group">
											<button class="btn btn-default" type="button">Middle</button>
										</div>
										<div class="btn-group">
											<button class="btn btn-default" type="button">Right</button>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="btn-group btn-group-justified">
										<div class="btn-group">
											<button type="button" class="btn btn-default">ซ้าย</button>
										</div>
										<div class="btn-group">
											<button type="button" class="btn btn-default">กลาง</button>
										</div>
										<div class="btn-group">
											<button type="button" class="btn btn-default">ขวา</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</article>
				</div>
			</div>
			
		</main>

<?php require 'php-inc/inc_page_footer.php'; ?> 
<?php require 'php-inc/inc_html_foot.php'; ?> 