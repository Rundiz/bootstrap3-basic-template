<?php require 'php-inc/inc_html_head.php'; ?> 

		<main class="content-wrap" role="main">
<?php require 'php-inc/inc_page_header.php'; ?> 
			
			<div class="container">
				<div class="row row-with-vspace">
					<article class="col-xs-12">
						<header class="page-header">
							<h1>Modal</h1>
						</header>
						
						
						<h2>Demo</h2>
						<div class="example-block">
							<button class="btn btn-default" data-toggle="modal" data-target="#myModal">Normal modal</button>
							<button class="btn btn-default" data-toggle="modal" data-target=".bs-modal-lg">Large modal</button>
							<button class="btn btn-default" data-toggle="modal" data-target=".bs-modal-sm">Small modal</button>
							<!-- Modal -->
							<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											<h4 class="modal-title" id="myModalLabel">Modal title | ไตเติล</h4>
										</div>
										<div class="modal-body">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam suscipit tincidunt iaculis. Phasellus hendrerit sem non dui commodo, vel iaculis nulla tincidunt.</p>
											<p>ช็อป โก๊ะ สกรัม เบนโตะสหรัฐทัวร์นาเมนท์ มั้งซามูไรพาสปอร์ตภควัทคีตาดัมพ์ฟีเวอร์ สตาร์ โฟล์คเทคโนแครตซิ่งราเมน ซาฟารีท็อปบู๊ทมยุราภิรมย์คอนเซปต์ ดัมพ์โอเปร่า ยังไง.</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-primary">Save changes</button>
										</div>
									</div>
								</div>
							</div>
							<!-- Large modal -->
							<div class="modal fade bs-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											<h4 class="modal-title" id="myModalLabel">Modal title | ไตเติล</h4>
										</div>
										<div class="modal-body">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam suscipit tincidunt iaculis. Phasellus hendrerit sem non dui commodo, vel iaculis nulla tincidunt.</p>
											<p>ช็อป โก๊ะ สกรัม เบนโตะสหรัฐทัวร์นาเมนท์ มั้งซามูไรพาสปอร์ตภควัทคีตาดัมพ์ฟีเวอร์ สตาร์ โฟล์คเทคโนแครตซิ่งราเมน ซาฟารีท็อปบู๊ทมยุราภิรมย์คอนเซปต์ ดัมพ์โอเปร่า ยังไง.</p>
										</div>
									</div>
								</div>
							</div>
							<!-- Small modal -->
							<div class="modal fade bs-modal-sm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-sm">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											<h4 class="modal-title" id="myModalLabel">Modal title | ไตเติล</h4>
										</div>
										<div class="modal-body">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam suscipit tincidunt iaculis. Phasellus hendrerit sem non dui commodo, vel iaculis nulla tincidunt.</p>
											<p>ช็อป โก๊ะ สกรัม เบนโตะสหรัฐทัวร์นาเมนท์ มั้งซามูไรพาสปอร์ตภควัทคีตาดัมพ์ฟีเวอร์ สตาร์ โฟล์คเทคโนแครตซิ่งราเมน ซาฟารีท็อปบู๊ทมยุราภิรมย์คอนเซปต์ ดัมพ์โอเปร่า ยังไง.</p>
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