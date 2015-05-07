
<div class="container main-container">
	<div class="row">
			<div class="col-lg-12 col-md-9 col-sm-12">
				        		<div class="col-lg-12 col-sm-12">
				            		<span class="title">MEU CADASTRO</span>
				            	</div>
		       	
		
		 
	        	
			<div class="col-lg-6 col-md-9 col-sm-12">
			        		<div class="col-lg-12 col-sm-12">
			            		<span class="title">INFORMAÇÕES PESSOAIS</span>
			            	</div>
	       	
			         <div class="col-lg-12 col-sm-12 hero-feature">
			         	<form action="app/controller/usuarioController.php" method="post" name="form-primeiro-cadastro">
								<table class="table table-bordered tbl-checkout">
									<tbody>
			                            <tr>
			                                <td>Nome*</td>
			                                <td colspan="3">
			                                    <input type="text" value="<?php echo $usuario->__get('nome'); ?>" 
			                                    placeholder="Nome"  name="nome"  class="form-control" required />
			                                    <input type="hidden" value="<?php echo sha1('cadastro'); ?>"name="cmd"  />
			                                    <input type="hidden" value="<?php echo $usuario->__get('Login')->__get('tipo'); ?>"name="tipo"  />
			                                    <input type="hidden" value="<?php echo $usuario->__get('Login')->__get('situacao'); ?>"name="situacao"  />
			                                </td>
			                             </tr>
			                              <tr>
			                                <td>Sobrenome*</td>
			                                <td colspan="3">
			                                    <input type="text" value="<?php echo $usuario->__get('sobrenome'); ?>"
			                                      placeholder="Sobrenome"  name="sobrenome" class="form-control" required="required" />
			                                </td>
			                             </tr>
			                             <tr>
			                                <td>Tel Residencial*</td>
			                                <td class="col-sm-7"> 
			                                    <input type="text" value="<?php echo $usuario->__get('telResidencial'); ?>"  placeholder="Telefone Residencial" maxlength="17" name="telresidencial" class="form-control telefone"  required/>
			                                </td>
			                                <td>Tel Celular</td>
			                                <td>
			                                    <input type="text" value="<?php echo $usuario->__get('telCelular'); ?>"
			                                     placeholder="Telefone Celular"  name="telcelular" class="form-control celular" />
			                                </td>
			                            </tr>
			                             <tr>
			                                <td>Tel Comercial</td>
			                                <td>
			                                    <input type="text" value="<?php echo $usuario->__get('telComercial'); ?>"
			                                     placeholder="Telefone Comercial"  maxlength="17" name="telcomercial" 
												 class="form-control telefone" />
			                                </td>
			                                <td>Data De Nascimento*</td>
			                                <td>
			                                    <input type="date" value="<?php echo $usuario->__get('dataNascimento'); ?>" 
			                                    date placeholder="Nascimento" request name="dtnascimento" class="form-control" required="required" />
			                                </td>
			                            </tr>
			                            <tr>
			                                <td>CPF*</td>
			                                <td colspan="2">
			                                    <input type="text" value="<?php echo $usuario->__get("cpf"); ?>" 
			                                    placeholder="CPF"  name="cpf" class="form-control cpf" required="required" />
			                                </td>
			                             </tr>
			                             <tr>
			                                <td>sexo*</td>
			                                <td colspan="3">
			                                   Masculino <input type="radio" value="M"  <?php echo $usuario->__get("sexo")=='M'?'checked':''; ?>   name="sexo" required="required" />
			                                    Feminino<input type="radio" value="F" <?php echo $usuario->__get("sexo")=='F'?'checked':''; ?> name="sexo" required="required" />
			                                </td>
			                             </tr>
			                          </tbody>
			                        </table>
			                        
			         </div>  
			  </div>	
			  
			  
			  
			  
		    	
			<div class="col-lg-6 col-md-9 col-sm-12">
			        		<div class="col-lg-12 col-sm-12">
			            		<span class="title">ENDERECO</span>
			            	</div>
	       	
			         <div class="col-lg-12 col-sm-12 hero-feature">
			         			<table class="table table-bordered tbl-checkout">
									<tbody>
			                            <tr>
			                                <td>CEP*</td>
			                                <td>
			                                    <input type="text" value="<?php echo $usuario->__get("Endereco")->cep; ?>" placeholder="CEP" 
													   name="cep" maxlength="13" class="form-control cep" required="required" />
			                                </td>
			                             </tr>
			                             <tr >
			                                <td>Enderoço*</td>
			                                <td colspan="3" >
			                                    <input type="text"  value="<?php echo $usuario->__get("Endereco")->logradouro; ?>" placeholder="Endereço" 
			                                      maxlength="100" name="logradouro" class="form-control" required="required" />
			                                </td>
			                              </tr>
			                              <tr>  
			                                <td>Número*</td>
			                                <td>
			                                    <input type="text" value="<?php echo $usuario->__get("Endereco")->numero; ?>"
			                                           placeholder="Número" maxlength="10"  name="numero" class="form-control" required="required" />
			                                </td>
			                                <td>Complemento</td>
			                                <td>
			                                    <input type="text" value="<?php echo $usuario->__get("Endereco")->complemento; ?>" 
			                                    placeholder="Complemento" maxlength="30"  name="complemento" class="form-control" />
			                                </td>
			                            </tr>
			                            <tr>  
			                                <td>Bairro*</td>
			                                <td>
			                                    <input type="text" value="<?php echo $usuario->__get("Endereco")->bairro; ?>" 
			                                    placeholder="Bairro" maxlength="50" name="bairro" class="form-control" required="required" />
			                                </td>
			                                <td>Cidade*</td>
			                                <td>
			                                    <input type="text" value="<?php echo $usuario->__get("Endereco")->cidade; ?>" 
			                                    placeholder="Cidade" maxlength="50"  name="cidade" class="form-control" required="required" />
			                                </td>
			                            </tr>
			                            <tr>  
			                                <td>Estado*</td>
			                                <td colspan="2" >
			                                    <input type="text" value="<?php echo $usuario->__get("Endereco")->estado; ?>"
			                                     maxlength="2" placeholder="UF"  name="estado" class="form-control" required="required" />
			                                </td>
			                            </tr>
			                            <tr> 
			                                <td>Ref. Para Entrega</td>
			                                <td colspan="3">
			                                    <input type="text" value="<?php echo $usuario->__get("Endereco")->referencia; ?>" 
			                                    placeholder="Referencia Para Entrega"  name="referencia" class="form-control"  maxlength="100" />
			                                </td>
			                            </tr>
			                          </tbody>
			                        </table>
			         </div>  
			  </div>	
			  
			  
			  
			  <div class="col-lg-12 col-md-9 col-sm-12">
			        		<div class="col-lg-12 col-sm-12">
			            		<span class="title">ACESSO AO SITE</span>
			            	</div>
	       	
			         <div class="col-lg-12 col-sm-12 hero-feature">
			         	
								<table class="table table-bordered tbl-checkout">
									<tbody>
			                            <tr>
			                                
			                                <td>
			                                    <input type="text" placeholder="Email" maxlength="80" request name="email" value="<?php echo $usuario->__get("Login")->email; ?>" class="form-control" required="required" />
			                                </td>
			                            
			                                
			                                <td>
			                                    <input type="password" value="<?php echo $usuario->__get('Login')->senha; ?>" 
			                                    placeholder="senha"  maxlength="20" name="senha" class="form-control" required="required" />
			                                </td>
			                               
			                                <td>
			                                    <input type="password" maxlength="20" placeholder="redigite sua senha" 
			                                     name="re_senha" class="form-control" required="required" />
			                        
			                                </td>
			                                 <td>
			                                    
			                                    <input type="checkbox"  name="remail"  style="margin: 0px;" class="" >
			                                    	<option value="1">Receber lembretes e ofertas</option>
			                                    </input>
			                        
			                                </td>
			                                <td>
				                                <div class="btn-group btns-cart">
													<button type="submit"  class="btn btn-primary">Continuar</button>
												</div>
			                                </td>
			                            </tr>
			                          </tbody>
			                        </table>
			                        
			              </form>          
			         </div>  
			  </div>	
			  
			  
			  	  
		  </div>          	
	</div>
</div>