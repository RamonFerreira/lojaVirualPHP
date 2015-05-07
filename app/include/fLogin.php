
	<div class="col-lg-6 col-md-9 col-sm-12">
						<div class="col-lg-12 col-sm-12">
		            		<span class="title">JÁ SOU CADASTRADO </span>
		            	</div>
	
	
		      <div class="col-lg-12 col-sm-12 hero-feature">
		      	<form method="POST" name="formLogin" action="app/controller/loginController.php">
					<table class="table table-bordered tbl-checkout">
						<tbody>
                            <tr>
                                <td>Email</td>
                                <td>
                                    <input type="text" name="email" placeholder="Email" class="form-control" required />
                                    <input type="hidden" name="cmd"  value="<?php echo sha1("login"); ?>" />
                                </td>
                            </tr>
                            <tr>
                            	<td>Senha</td>
                                <td>
                                    <input type="password" placeholder="Senha" name="senha" class="form-control" required />
                                </td>
                            </tr>
                          </tbody>
                        </table>
	                    <div class="btn-group btns-cart">
							<button type="submit" class="btn btn-primary">Entrar</button>
						</div>
					</form>
                        
		         </div>  
		         
	 </div>
    
