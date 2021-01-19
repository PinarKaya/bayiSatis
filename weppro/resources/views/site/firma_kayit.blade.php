   @extends('site.app')
   @section('icerik')

                   <div class="col-md-12">
                     <div class="panel panel-widget">
								<div class="validation-grids widget-shadow" data-example-id="basic-forms"> 
									<div class="input-info">
										<h3>Firma Kayıt Formu </h3>
									</div>
									<div class="form-body form-body-info">
										<form method="post" data-toggle="validator" novalidate="true">
											{{csrf_field()}}
											<div class="form-group valid-form">
												<input type="text" class="form-control" id="inputName" placeholder="İsim" required="">
											</div>
											<div class="form-group has-feedback">
												<input type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Bruh, that email address is invalid" required="">
												<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
												<span class="help-block with-errors">Lütfen doğru bir e-mail girin</span>
											</div>

											<div class="form-group valid-form">
												<input type="text" class="form-control" id="inputName" placeholder="Adres" required="">
											</div>
											<div class="form-group valid-form">
												<input type="text" class="form-control" id="inputName" placeholder="Telefon" required="">
											</div>
											
											
											<div class="form-group">
											  <input type="password" data-toggle="validator" data-minlength="6" class="form-control" id="inputPassword" placeholder="Şifre" required="">
											  <span class="help-block">6 karakter girin</span>
											</div>
											 <div class="form-group">
											  <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Şifreyi doğrula " required="">
											  <div class="help-block with-errors"></div>
											</div> 
											
											
											<div class="form-group">
												<button type="submit" class="btn btn-primary disabled">Kaydol</button>
											</div>
										</form>
									</div>
								</div>
							</div>

						</div>


       @endsection('icerik')


       @section('css')
       @endsection('css')

       @section('js')
       @endsection('js')