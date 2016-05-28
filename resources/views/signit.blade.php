<section id="sign-it" class=" content-padding-lg post-16 page type-page status-publish hentry" ng-controller="RegistrationController">
	<div class="container" id="sign row">
		<div class="row">
	      		<div class="col-md-8 col-sm-8 col-sm-offset-2">
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
				            			ng-model="user.reason"
			                                        	ng-minlength="140"></textarea>
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
		      			<h3 class="section-title text-success">Félicitations! Signature réussie.</h3>
		      			<p>
		                            	Veuillez consulter votre e-mail. vous avez reçu un e-mail de confirmation.
		      			</p>
			                 <p>
			                        	<button
			                            	class="btn btn-info"
			                            	ng-click="newRegistrationProcess()">
			                            	Nouvelle signature
			                        	</button>
			                 </p>
			        	</div>
	      		</div>
	   	</div>
	</div>
</section>