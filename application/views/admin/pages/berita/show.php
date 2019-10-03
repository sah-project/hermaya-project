		<!-- -->
			<section>
				<div class="container">

					<div class="row">

						<!-- LEFT -->
						<div class="col-md col-sm">
								<?php  
		               		$n=1;
           					if($fetch_data->num_rows() > 0)
           					{  
                				foreach($fetch_data->result() as $row)
                				{  ?>
							<h1 class="blog-post-title"><?php echo $row->judul; ?></h1>
							<ul class="blog-post-info list-inline">
								<li>
									<a href="#">
										<i class="fa fa-clock-o"></i> 
										<span class="font-lato"><?php echo $row->tanggal; ?></span>
									</a>
								</li>
							</ul>

							<!-- OWL SLIDER -->
							<!-- article content -->
							<?php 
           					
		                  		echo $row->konten ;
		              			}
		              		}
		                  ?>
							<!-- /article content -->
							<div class="divider divider-dotted"><!-- divider --></div>			
							<div class="divider"><!-- divider --></div>
							<ul class="pager">
								<li class="previous"><a class="noborder" href="#">&larr; Previous Post</a></li>
								<li class="next"><a class="noborder" href="#">Next Post &rarr;</a></li>
							</ul>

							<div class="divider"><!-- divider --></div>
						</div>
						<!-- RIGHT -->
					</div>


				</div>
			</section>
			<!-- / -->
