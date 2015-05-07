
<div class="container main-container">
	<div class="row">
			<div class="col-lg-12 col-md-9 col-sm-12">
				        		<div class="col-lg-12 col-sm-12">
				            		<span class="title">IDENTIFICAÇÃO</span>
				            	</div>
		       	
		 <?php include_once 'include/fLogin.php'; ?>
		 
	        	
			<div class="col-lg-6 col-md-9 col-sm-12">
			        		<div class="col-lg-12 col-sm-12">
			            		<span class="title">QUERO ME CADASTRAR</span>
			            	</div>
	       	
			         <div class="col-lg-12 col-sm-12 hero-feature">
			         	<form action="cadastro" method="post" name="form-primeiro-cadastro">
								<table class="table table-bordered tbl-checkout">
									<tbody>
			                            <tr>
			                                <td>Email</td>
			                                <td colspan="5">
			                                    <input type="email" placeholder="Email" request name="email" class="form-control" required />
			                                </td>
			                             </tr>
			                             <tr>
			                                <td>CPF</td>
			                                <td>
			                                    <input type="text" placeholder="CPF"  maxlength="11" name="cpf" class="form-control" required />
			                                </td>
			                                <td>CEP</td>
			                                <td>
			                                    <input type="text" placeholder="CEP"  size="10"  maxlength="5"   name="nuCep" class="form-control" required="required" />
			                                </td>
			                                <td>
			                                    -
			                                </td>
			                                <td>
			                                    <input type="text" placeholder="CEP" size="2"  maxlength="3"   name="coCep" class="form-control" required="required" />
			                                </td>
			                            </tr>
			                          </tbody>
			                        </table>
			                        <div class="btn-group btns-cart">
										<button type="submit"  class="btn btn-primary">Cadastrar</button>
									</div>
			              </form>          
			         </div>  
			  </div>	
		  </div>          	
	</div>
	<div class='row'>
		<div class='col-md-12'>
		</div>
	</div>
	

</div>