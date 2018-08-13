<section class="container-fluid" id="perfil-freelancer"  style="background: #9999cc;">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-md-12 titulo-seccion" > <h1> Create Resume </h1></div>
			</div>

		</div>
	</div>
</section>


<section class="container-fluid">
	<div class="row">
		<div class="container white-shadow card-2" id="ficha-tercnica">
			<div class="row " style="position: relative;"> 
				<div class="detail-pic">
					<div class="box js">
						<input type="file" class="inputfile" name="upload-pic[]" id="upload-pic">
						<label for="upload-pic">
							<i class="fas fa-cloud-upload-alt"></i>
						</label>
					</div>

				</div>


			</div>
			<div class="row">
				<form class="form-horizontal">
					<div class="col-md-12">
						<div class="row ">
							<div class="col-md-6 col-xs-12 col-sm-6 add-feild">
								<div class="form-group">

									<div class="controls col-xs-12 col-md-12 col-lg-12">

										<input id="nombre-freelancer" type="text" class="form-control k-textbox" data-role="text" placeholder="Your Name" data-parsley-maxlength="120" data-parsley-errors-container="#errId1">
										<span id="errId1" class="error"></span>
									</div>

								</div>
								<div class="form-group">

									<div class="controls col-xs-12 col-md-12 col-lg-12 ">

										<input id="area-freelancer" type="text" class="form-control k-textbox" data-role="text" placeholder="Profesional Area" data-parsley-errors-container="#errId2">
										<span id="errId2" class="error"></span>
									</div>

								</div>
							</div>
							<div class="col-md-6 col-xs-12 col-sm-6  add-feild">
								<div class="form-group">
									<label class="control-label control-label-left col-sm-3 sr-only" for="email-freelancer"></label>
									<div class="controls col-xs-12 col-md-12 col-lg-12">

										<input id="email-freelancer" type="text" class="form-control k-textbox" disabled data-role="text" placeholder="User Steemit" name="user-steemit-freelancer" value="@kriptoJobs"data-parsley-errors-container="#errId3">
										<span id="errId3" class="error"></span>
									</div>

								</div>
								<div class="form-group">
									<label class="control-label control-label-left col-sm-3 sr-only" for="categorias-freelancer"></label>
									<div class="controls col-xs-12 col-md-12 col-lg-12">

										<select id="categorias-freelancer" class="form-control" data-role="select" data-parsley-errors-container="#errId4">
											<option value="">All Categories</option>
											<option value="Option 1">Option 1</option>
											<option value="Option 2">Option 2</option>
											<option value="Option 3">Option 3</option>
											<option value="Option 4">Option 4</option>
										</select>
										<span id="errId4" class="error"></span>
									</div>

								</div>
							</div>
						</div>

						<div class="col-md-12 add-feild">
							<div class="form-group">
								<div class="row">
									<div class="controls col-sm-12">

										<textarea id="aboutnotes-freelancer"  placeholder="Resumen Corto" class="form-control k-textbox text-area" data-role="textarea" data-parsley-errors-container="#errId5"></textarea><span id="errId5" class="error"></span></div>
									</div>
								</div>
							</div>

						</div>
					</form>


				</div>
				<div class="row  steemit-info">
					<div class="col-md-12">
						<button class="btn btn-verde pull-right btn-lg"> Cambiar imagen principal</button>
					</div>
				</div>
			</div> 
		</div>
	</section>

	<section class="container-fluid add-feild" id="resumen-candidato-carga">
		<div class="row">
			<div class="container " >
				<div class="row section">
					<div class="col-md-12 titulo-resumen">
						<h3>General Information</h3>
					</div>
				</div>

				<div class="row">
					<form class=" form-horizontal">

						<div class="form-group"> 
							<div class="col-md-6 margin-botton">
								<div class="input-group">
									<span class="input-group-addon"><i class="far fa-envelope"></i></span>
									<input id="email" type="text" class="form-control" name="email" placeholder="Email">
								</div>
							</div>

							<div class="col-md-6 margin-botton">
								<div class="input-group">
									<span class="input-group-addon"><i class="fas fa-globe-americas"></i></span>
									<input id="web-site" type="text" class="form-control" name="web-site" placeholder="Web Site">
								</div>
							</div>

							<div class="col-md-6 margin-botton">
								<div class="input-group">
									<span class="input-group-addon"><i class="fas fa-map-marked-alt"></i></span>
									<input id="location" type="text" class="form-control" name="location" placeholder="Location: Venezuela">
								</div>
							</div>
							<div class="col-md-6" id="sandbox-container">

								<div class="input-group time date">
									<span class="input-group-addon"><i class="fas fa-birthday-cake"></i></span>
									<input id="fecha-nacimiento" name="fecha-nacimiento"type="text" class="form-control">
								</div>

							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="container">
				<div class="row section">
					<div class="col-md-12 titulo-resumen">
						<h3>Social Profile</h3>
					</div>
				</div>
				<div class="row">
					<form class=" form-horizontal">
						<div class="form-group"> 
							<div class="col-md-6 margin-botton">
								<div class="input-group">
									<span class="input-group-addon"><i class="fab fa-facebook-f"></i></span>
									<input id="facebook" type="text" class="form-control" name="facebook" placeholder="URL Facebook">
								</div>
							</div>

							<div class="col-md-6 margin-botton">
								<div class="input-group">
									<span class="input-group-addon"><i class="fab fa-twitter"></i></span>
									<input id="twitter" type="text" class="form-control" name="twitter" placeholder="URL Twitter">
								</div>
							</div>

							<div class="col-md-6 margin-botton">
								<div class="input-group">
									<span class="input-group-addon"><i class="fab fa-discord""></i></span>
									<input id="Discord" type="text" class="form-control" name="discord" placeholder="URL Discord">
								</div>
							</div>
							
							<div class="col-md-6" >

								<div class="input-group">
									<span class="input-group-addon"><i class="fab fa-github"></i></span>
									<input id="github" type="text" class="form-control" name="github" placeholder="Url Github">
								</div>

							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="container">
				<div class="row section">
					<div class="col-md-12 titulo-resumen">
						<h3>Resume Content</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div id="wysihtml5-toolbar" style="display: none;">

							<ul class="wysihtml5-toolbar" style="">
							<li class="dropdown">
								<a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-font"></i>&nbsp;<span class="current-font">Normal text</span>&nbsp;<b class="caret"></b>
								</a>
								<ul class="dropdown-menu">
									<li>
										<a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="div" >Normal text</a>
									</li>
									<li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h1" >Heading 1</a>
									</li>
									<li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h2" >Heading 2</a>
									</li>
									<li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h3" >Heading 3</a>
									</li>
									<li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h4" >Heading 4</a>
									</li>
									<li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h5" >Heading 5</a>
									</li>
									<li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h6" >Heading 6</a>
									</li>
								</ul>
								</li>


								<li>
								<div class="btn-group">
									<a class="btn  btn-default" data-wysihtml5-command="bold" title="CTRL+B"  > Bold</a>
									<a class="btn  btn-default" data-wysihtml5-command="italic" title="CTRL+I" " >Italic</a>
									<a class="btn  btn-default" style="text-decoration: underline;" data-wysihtml5-command="underline" title="CTRL+U"  > Underline</a>

								</div>
							</li>
							<li>
								<a class="btn  btn-default" data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="blockquote" data-wysihtml5-display-format-name="false" >

									<span class="fa fa-quote-left"></span>

								</a>
							</li>
							<li>
								<div class="btn-group">
									<a class="btn  btn-default" data-wysihtml5-command="insertUnorderedList" title=""  >

										<span class="fa fa-list-ul"></span>

									</a>
									<a class="btn  btn-default" data-wysihtml5-command="insertOrderedList" title="" >

										<span class="fa fa-list-ol"></span>

									</a>
									<a class="btn  btn-default" data-wysihtml5-command="Outdent" title=""  >

										<span class="fa fa-outdent"></span>

									</a>
									<a class="btn  btn-default" data-wysihtml5-command="Indent" title=""  >

										<span class="fa fa-indent"></span>

									</a>
								</div>
							</li>
						</ul>
					</div>

					



					<textarea id="some-textarea" class="form-control k-textbox text-area"  placeholder="Enter text ..." style="styles to copy to the iframe"></textarea>


				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="container">
			<div class="row section">
				<div class="col-md-12 titulo-resumen">
					<h3>Resume Content</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 descripcion-resumen">
					<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, maiores excepturi sint placeat veniam dolores eum tempora cum soluta amet, vitae nihil tenetur, cumque at accusamus id quod magnam aut.</span><span>Placeat alias voluptate dolores, totam maxime. Sit odio molestias blanditiis eum iure architecto eaque maiores, totam quae sequi, aperiam repellat obcaecati soluta adipisci quisquam rerum quidem, deleniti illum nesciunt! Repudiandae.</span></p>
					<div class="col-md-6 col-xs-6 col-lg-4">
						<span> Desarrollo web</span>
						<div class="progress">
							<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
								40%
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xs-6 col-lg-4">
						<span> Desarrollo web</span>
						<div class="progress">
							<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
								40%
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xs-6 col-lg-4">
						<span> Desarrollo web</span>
						<div class="progress">
							<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
								40%
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xs-6 col-lg-4">
						<span> Desarrollo web</span>
						<div class="progress">
							<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
								40%
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xs-6 col-lg-4">
						<span> Desarrollo web</span>
						<div class="progress">
							<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
								40%
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xs-6 col-lg-4">
						<span> Desarrollo web</span>
						<div class="progress">
							<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
								40%
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xs-6 col-lg-4">
						<span> Desarrollo web</span>
						<div class="progress">
							<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
								40%
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xs-6 col-lg-4">
						<span> Desarrollo web</span>
						<div class="progress">
							<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
								40%
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
