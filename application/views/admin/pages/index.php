			<section class="page-header page-header-xs">
				<div class="container">

					<h1>MANAGEMENT BERITA</h1>

					<!-- breadcrumbs -->
					<ol class="breadcrumb">
						<li><a href="#"><?php echo $this->uri->segment(1)?></a></li>
						<li><a href="#"><?php echo $this->uri->segment(2)?></a></li>
					</ol><!-- /breadcrumbs -->

				</div>
			</section>
			<!-- /PAGE HEADER -->
			<!-- -->
			<section>
				<div class="container">
					<div class="row">
						<div class="col-md-2 col-sm-2">
							<!-- side navigation -->
							<div class="side-nav">
								<div class="side-nav-head">
									<button class="fa fa-bars"></button>
									<h4>MANAGEMENT</h4>
								</div>
								<ul class="list-group list-unstyled">
									<li class="list-group-item"><a href="shortcode-forms.html">Agenda</a></li>
									<li class="list-group-item"><a href="shortcode-forms-masked.html">Gallery</a></li>
									<li class="list-group-item active"><a href="shortcode-forms-pickers.html">Management Berita</a></li>
								</ul>
							</div>
							<!-- /side navigation -->
						</div>
						<div class="col-md-10 col-sm-10">
						<!-- Useful Elements -->
						<div class="panel panel-default">
							<div class="panel-heading panel-heading-transparent">
								<h2 class="panel-title">Form Posting Berita</h2>
							</div>
							<div class="panel-body">
								<form class="validate" action="php/contact.php" method="post" enctype="multipart/form-data" data-success="Sent! Thank you!" data-toastr-position="top-right">
									<fieldset>
										<!-- required [php action request] -->
										<div class="row">
											<div class="form-group">
												<div class="col-md-6 col-sm-6">
													<label>Judul Berita *</label>
													<input type="text" name="contact[expected_salary]" value="" class="form-control required">
												</div>
												<div class="col-md-6 col-sm-6">
													<label>Tanggal Posting *</label>
													<input type="text" name="contact[start_date]" value="" class="form-control datepicker required" data-format="yyyy-mm-dd" data-lang="en" data-RTL="false">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group">
												<div class="col-md-12 col-sm-12">
													<label>Text Berita *</label>
													<textarea class="form-control summernote" name="pertanyaan" id="pertanyaan"></textarea>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group">
												<div class="col-md-12">
													<label>
														File Attachment 
														<small class="text-muted">Foto Berita</small>
													</label>
													<!-- custom file upload -->
													<div class="fancy-file-upload fancy-file-primary">
														<i class="fa fa-upload"></i>
														<input type="file" class="form-control" name="contact[attachment]" onchange="jQuery(this).next('input').val(this.value);" />
														<input type="text" class="form-control" placeholder="no file selected" readonly="" />
														<span class="button">Choose File</span>
													</div>
													<small class="text-muted block">Max file size: 10Mb (jpeg/jpg/png)</small>

												</div>
											</div>
										</div>

									</fieldset>

									<div class="row">
										<div class="col-md-12">
											<button type="submit" class="btn btn-3d btn-teal btn-xlg btn-block margin-top-30">
												POSTING BERITA
											</button>
										</div>
									</div>

								</form>


							</div>

							<div class="panel-footer">
								TYPE FOOTER HERE ....
							</div>
						</div>
						<!-- /Useful Elements -->
						</div>
					</div>

				</div>
			</section>
			<!-- / -->