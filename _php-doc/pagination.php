<?php require 'php-inc/inc_html_head.php'; ?> 

		<main class="content-wrap" role="main">
<?php require 'php-inc/inc_page_header.php'; ?> 
			
			<div class="container">
				<div class="row row-with-vspace">
					<article class="col-xs-12">
						<header class="page-header">
							<h1>Pagination</h1>
						</header>
						
						
						<h2>Example</h2>
						<div class="example-block">
							<ul class="pagination">
								<li class="disabled"><a href="#">&laquo;</a></li>
								<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a href="#">&raquo;</a></li>
							</ul>
						</div>
						
						
						<h2>Sizing</h2>
						<div class="example-block">
							<div>
								<ul class="pagination pagination-lg">
									<li class="disabled"><a href="#">&laquo;</a></li>
									<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#">&raquo;</a></li>
								</ul>
							</div>
							<div>
								<ul class="pagination">
									<li class="disabled"><a href="#">&laquo;</a></li>
									<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#">&raquo;</a></li>
								</ul>
							</div>
							<div>
								<ul class="pagination pagination-sm">
									<li class="disabled"><a href="#">&laquo;</a></li>
									<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#">&raquo;</a></li>
								</ul>
							</div>
						</div>
						
						
						<h2>Pager</h2>
						<div class="example-block">
							<div>
								<ul class="pager">
									<li><a href="#">Previous</a></li>
									<li><a href="#">Next</a></li>
								</ul>
							</div>
							<div>
								<ul class="pager">
									<li class="disabled"><a href="#">Previous</a></li>
									<li><a href="#">Next</a></li>
								</ul>
							</div>
							<div>
								<ul class="pager">
									<li><a href="#">ก่อนหน้า</a></li>
									<li><a href="#">ถัดไป</a></li>
								</ul>
							</div>
						</div>
						
						
						<h2>Aligned links</h2>
						<div class="example-block">
							<div>
								<ul class="pager">
									<li class="previous"><a href="#">&larr; Older</a></li>
									<li class="next"><a href="#">Newer &rarr;</a></li>
								</ul>
							</div>
							<div>
								<ul class="pager">
									<li class="previous disabled"><a href="#">&larr; Older</a></li>
									<li class="next"><a href="#">Newer &rarr;</a></li>
								</ul>
							</div>
							<div>
								<ul class="pager">
									<li class="previous"><a href="#">&larr; เก่ากว่า</a></li>
									<li class="next"><a href="#">ใหม่กว่า &rarr;</a></li>
								</ul>
							</div>
						</div>
					</article>
				</div>
			</div>
			
		</main>

<?php require 'php-inc/inc_page_footer.php'; ?> 
<?php require 'php-inc/inc_html_foot.php'; ?> 