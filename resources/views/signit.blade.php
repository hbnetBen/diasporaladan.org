<section id="sign-it" class=" content-padding-lg post-16 page type-page status-publish hentry" ng-controller="RegistrationController">
	<div class="container" id="sign row">
		<div class="row">
	      		<div class="col-md-8 col-sm-8 col-sm-offset-2">
	      			{{-- @if ( 'HT' != $location['isoCode'] ) --}}
		      			<div ng-hide="doneProcessing" class="hide-fade">
		      				<div class="text-center">
			      				<h2 class="section-title">Signez ici!</h2>
		      				</div>
					        	<form
							method="POST"
							role="form" novalidate
							name="regForm"
							ng-submit="processRegistrationForm()"
							class="regForm">
			                                	<div class="form-group"
			                                    ng-class="{'has-error':regForm.lastname.$invalid && regForm.lastname.$touched, 'has-success':regForm.lastname.$valid}">
			                                  	<input
				                                        type="text"
				                                        class="form-control"
				                                        id="name"
				                                        name="lastname"
				                                        placeholder="Nom"
				                                        ng-model="user.lastname"
				                                        ng-required="true"
				                                        ng-minlength="3">
								<div class="text-center text-danger"
									ng-show="regForm.lastname.$invalid && regForm.lastname.$touched">
									Vous devez entrer votre votre nom
								</div>
								<div class="text-center text-danger"
								 	ng-show="regForm.lastname.$invalid &&
								    	regForm.lastname.$error.minlength">
									Votre nom doit être supérieur à 3 caractères
								</div>
			                                	</div>
			                               	<div class="form-group"
			                                  	ng-class="{'has-error':regForm.firstname.$invalid && regForm.firstname.$touched, 'has-success':regForm.firstname.$valid}">
			                                    	<input
				                                        type="text"
				                                        class="form-control"
				                                        id="name"
				                                        name="firstname"
				                                        placeholder="Prénom"
				                                        ng-model="user.firstname"
				                                        ng-required="true"
				                                        ng-minlength="3"
				                                        ng-focus="inputFocus">
								<div
								    class="text-center text-danger"
								    ng-show="regForm.firstname.$invalid && regForm.firstname.$touched">
								    Vous devez entrer votre prénom
								</div>
								<div
								    class="text-center text-danger"
								    ng-show="regForm.firstname.$invalid &&
								    regForm.firstname.$error.minlength">
								    Votre prénom doit être supérieur à 3 caractères
								</div>
			                                	</div>
			                                	<div class="form-group"
			                                			ng-class="{'has-error':regForm.address.$invalid && regForm.address.$touched, 'has-success':regForm.address.$valid}">
					            		<input
					            			type="text"
					            			class="form-control lname"
					            			name="address"
					            			placeholder="Adresse physique"
					            			ng-model="user.address"
				                                        	ng-required="true"
				                                        	ng-minlength="10">
				                                  <div
								    class="text-center text-danger"
								    ng-show="regForm.address.$invalid && regForm.address.$touched">
								    Vous devez entrer votre adresse physique
								</div>
								<div
								    class="text-center text-danger"
								    ng-show="regForm.address.$invalid &&
								    regForm.address.$error.minlength">
								    Votre adresse doit être supérieur à 10 caractères
								</div>
					            	</div>
			                                	<div class="form-group"
			                                  	ng-class="{'has-error':regForm.telephone.$invalid && regForm.telephone.$touched, 'has-success':regForm.telephone.$valid}">
			                                  	<input
				                                        type="number"
				                                        class="form-control"
				                                        id="telephone"
				                                        name="telephone"
				                                        placeholder="Numéro de téléphone"
				                                        ng-model="user.telephone"
				                                        ng-required="true"
				                                        ng-minlength="8">
			                                  	<div
				                                        class="text-center text-danger"
				                                        ng-show="regForm.telephone.$invalid && regForm.telephone.$touched">
				                                        Vous devez entrer un numéro de téléphone valide
			                                    	</div>
				                                  <div
				                                        class="text-center text-danger"
				                                        ng-show="regForm.telephone.$invalid &&
				                                        regForm.telephone.$error.minlength">
				                                        Votre numéro de téléphone doit être supérieur à 8 caractères
				                                  </div>
			                                	</div>
			                                	<div class="form-group"
			                                  	ng-class="{'has-error':regForm.email.$invalid && regForm.email.$touched, 'has-success':regForm.email.$valid}">
			                                  	<input
				                                        type="email"
				                                        class="form-control"
				                                        id="email"
				                                        name="email"
				                                        placeholder="E-mail"
				                                        ng-model="user.email"
				                                        ng-required="true">
				                                  <div
				                                        class="text-center text-danger"
				                                        ng-show="regForm.email.$invalid && regForm.email.$touched">
				                                        Vous devez entrer un e-mail valide
				                                  </div>
			                                	</div>
			                                	<div class="form-group"
			                                			ng-class="{'has-error':regForm.reason.$invalid && regForm.reason.$touched, 'has-success':regForm.reason.$valid}">
					            		<textarea
					            			class="form-control bio"
					            			placeholder="Pourquoi c'est important pour vous?"
					            			rows="3"
					            			name="reason"
					            			ng-model="user.reason"></textarea>
				                                  <div
				                                        class="text-center text-danger"
				                                        ng-show="regForm.reason.$invalid &&
				                                        regForm.reason.$error.minlength">
				                                        Votre contenu doit être supérieur à 140 caractères
				                                  </div>
					            	</div>
		                                  	<button
		                                        		type="submit"
		                                        		class="btn btn-primary"
		                                        		ng-disabled="regForm.$invalid"
		                                        		ng-hide="formProcessing">
		                                          	<i class="fa fa-user"></i> Signez la pétition!
		                                    	</button>
		                                    	<button
		                                        		type="button"
		                                        		class="btn btn-info"
		                                        		ng-show="formProcessing">Inscription en cours
		                                          	<i class="fa fa-spinner fa-spin"></i>
		                                    	</button>
		                       		</form>
		                       	</div>
		                       	<div ng-show="doneProcessing" class="text-center show-fade">
			      			<h3 class="section-title text-success">Merci de votre support!</h3>
				                 <p>
				                        	<button
				                            	class="btn btn-info"
				                            	ng-click="newRegistrationProcess()">
				                            	Nouvelle signature
				                        	</button>
				                 </p>
				        	</div>
				{{-- @else --}}

					<!-- <div class="text-center">
		      				<h2 class="section-title">Accès refusé.</h2>
	      				</div> -->
<!-- 
	      				<p>
	      					Nous avons remarqué que vous êtes en Haiti. Et de ce fait n'êtes pas autorisé(e) à signer cette pétition.<br>
	      					Mais vous pouvez la partarger sur vos comptes de réseaux sociaux personnels afin que vos amis vivant à l'étranger puissent la signer:
	      				</p> -->
	      			<hr>
					<ul class='sharing paddingTop3'>
						<li><a target="blank" rel='nofollow' href='http://www.facebook.com/sharer.php?u={{ config('site.url') }}&t=Signez+la+pétition' class='facebook' title='Facebook'><i class='fa fa-boxed fa-fw fa-facebook'></i> Partager la pétition sur Facebook</a>
						</li>
						<li><a target="blank" rel='nofollow' href="https://twitter.com/intent/tweet?text={{ config('site.name') }}&via={{config('site.twitter')}}&url={{config('site.url')}}" class='twitter' title='Twitter'><i class='fa fa-boxed fa-fw fa-twitter'></i> Tweeter la pétition sur Petition</a>
						</li>
						<li><a target="blank" rel='nofollow' href="https://plus.google.com/share?url={{ config('site.url') }}&#038;title=Signez+la+pétition" class='google' title='Google'><i class='fa fa-boxed fa-fw fa-google-plus'></i> Partager la pétition sur Google+</a>
						</li>
						<li><a target="blank" rel='nofollow' href='mailto:?subject=Signez+la+pétition&body={{ config('site.url') }}' class='mail' title='Email'><i class='fa fa-boxed fa-fw fa-envelope-o'></i>Partager la pétition par E-mail</a>
						</li>
					</ul>

				{{-- @endif --}}
		      	</div>
	   	</div>
	</div>
</section>