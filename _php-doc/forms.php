<?php require 'php-inc/inc_html_head.php'; ?> 

		<main class="content-wrap" role="main">
<?php require 'php-inc/inc_page_header.php'; ?> 
			
			<div class="container">
				<div class="row row-with-vspace">
					<article class="col-xs-12">
						<header class="page-header">
							<h1>Forms</h1>
						</header>
						
						
						<h2>Basic example</h2>
						<div class="example-block">
							<form role="form">
								<div class="form-group">
									<label for="exampleInputEmail1">Email address</label>
									<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">รหัสผ่าน</label>
									<input type="password" class="form-control" id="exampleInputPassword1" placeholder="รหัสผ่าน">
								</div>
								<div class="form-group">
									<label for="exampleInputFile">File input</label>
									<input type="file" id="exampleInputFile">
									<p class="help-block">Example block-level help text here.</p>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox"> Check me out
									</label>
								</div>
								<button type="submit" class="btn btn-default">Submit</button>
							</form>
						</div>
						
						
						<h2>Inline form</h2>
						<div class="example-block">
							<form class="form-inline" role="form">
								<div class="form-group">
									<label class="sr-only" for="exampleInputEmail2">Email address</label>
									<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
								</div>
								<div class="form-group">
									<label class="sr-only" for="exampleInputPassword2">รหัสผ่าน</label>
									<input type="password" class="form-control" id="exampleInputPassword2" placeholder="รหัสผ่าน">
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox"> Remember me
									</label>
								</div>
								<button type="submit" class="btn btn-default">Sign in</button>
							</form>
						</div>
						
						
						<h2>Horizontal form</h2>
						<div class="example-block">
							<form class="form-horizontal" role="form">
								<div class="form-group">
									<label for="inputText3" class="col-sm-2 control-label">Text</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="inputText3" placeholder="Text">
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword3" class="col-sm-2 control-label">รหัสผ่าน</label>
									<div class="col-sm-10">
										<input type="password" class="form-control" id="inputPassword3" placeholder="รหัสผ่าน">
									</div>
								</div>
								<div class="form-group">
									<label for="inputTextarea" class="col-sm-2 control-label">Message</label>
									<div class="col-sm-10">
										<textarea name="message" class="form-control" id="inputTextarea" placeholder="Message"></textarea>
									</div>
								</div>
								<div class="form-group">
									<label for="inputFile" class="col-sm-2 control-label">File</label>
									<div class="col-sm-10">
										<input type="file" id="inputFile">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
										<label class="checkbox-inline">
											<input type="checkbox"> ติ๊ก 1
										</label>
										<label class="checkbox-inline">
											<input type="checkbox"> Tick 2
										</label>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
										<label class="radio-inline">
											<input type="radio"> ตัวเลือก 1
										</label>
										<label class="radio-inline">
											<input type="radio"> Option 2
										</label>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Static control</label>
									<div class="col-sm-10">
										<p class="form-control-static">email@example.com</p>
									</div>
								</div>
								<div class="form-group">
									<label for="inputSelect1" class="col-sm-2 control-label">เลือก</label>
									<div class="col-sm-10">
										<select class="form-control">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="inputSelect2" class="col-sm-2 control-label">Select</label>
									<div class="col-sm-10">
										<select class="form-control" multiple="">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="inputText4" class="col-sm-2 control-label">Disabled</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="inputText4" placeholder="Disabled" disabled="">
									</div>
								</div>
								<fieldset>
									<legend>Input states</legend>
									<div class="form-group has-success has-feedback">
										<label class="col-sm-2 control-label" for="inputSuccess2">Input with success</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="inputSuccess2">
											<span class="glyphicon glyphicon-ok form-control-feedback"></span>
										</div>
									</div>
									<div class="form-group has-warning has-feedback">
										<label class="col-sm-2 control-label" for="inputWarning2">Input with warning</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="inputWarning2">
											<span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
										</div>
									</div>
									<div class="form-group has-error has-feedback">
										<label class="col-sm-2 control-label" for="inputError2">Input with error</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="inputError2">
											<span class="glyphicon glyphicon-remove form-control-feedback"></span>
										</div>
									</div>
								</fieldset>
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
										<button type="submit" class="btn btn-default">Submit</button>
									</div>
								</div>
							</form>
						</div>
					</article>
				</div>
			</div>
			
		</main>

<?php require 'php-inc/inc_page_footer.php'; ?> 
<?php require 'php-inc/inc_html_foot.php'; ?> 