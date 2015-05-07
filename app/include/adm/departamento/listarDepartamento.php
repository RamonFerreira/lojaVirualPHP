	<div class="row">
	    <div class="col-md-12" >
	        
	      	<table class="table table-bordered mb0">
	      		<thead>	
	            	<tr class="warning"	>
	            			<th>Id</th>
	            			<th>Departamento</th>
	            			<th>Posição</th>
	            			<th>Data Cadastro</th>
	            			<th>Data Modiicação</th>
	            			<th colspan="2">opções</th>
	           		</tr>
	           	</thead>	
	        <tbody>

	        		<?php
						 $mySQL = new MySQL();
						 $rs = $mySQL->getRows("select  id, nome,posicao, dtcadastro, dtmodificacao from tb_departamento");
						 
						 foreach ($rs as $item ){
						 	$id = "";
						 	echo '<tr>';
								foreach ($item as $key=>$value){

									if($key == "id"){
										$id = $value;
									}
									echo "<td> $value </td>";
								}
								echo '<td>
						            		<a href="'.$paginaPai.'/'.sha1('cadastro').'/'.sha1($id).'" title="Editar"><i class="fa  fa-edit "></i></a>
						            	</td>
						            	<td>
						            		<a href="'.CONTEXTO.'/app/controller/departamentoController.php?cmd='.sha1('delete').'&id='.sha1($id).'" title="Excluir"><i class="fa fa-trash-o"></i></a>
						            	</td>';
								
							echo '</tr>';
							
						 }
					?>
	     
	            	
	            </tr>
	         </tbody>   
	     </table>
	     <div class="tab-content text-center">
					<div class="tab-pane active" id="dompaginate">
						<ul class="pagination">
							<li class="disabled"><a href="#"><i class="fa fa-angle-left"></i></a></li>
							<li class="active"><a href="#">1</a></li>
							
							<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
						</ul>
					</div>
					
					<div class="tab-pane" id="codepaginate">
						<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"pagination"</span><span class="tag">&gt;</span></li><li class="L1"><span class="pln">  </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"disabled"</span><span class="tag">&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;&lt;i</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"fa fa-angle-left"</span><span class="tag">&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;</span></li><li class="L2"><span class="pln">  </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"active"</span><span class="tag">&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">1</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L3"><span class="pln">  </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">2</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L4"><span class="pln">  </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">3</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L5"><span class="pln">  </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">4</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L6"><span class="pln">  </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">5</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span></li><li class="L7"><span class="pln">  </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;&lt;i</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"fa fa-angle-right"</span><span class="tag">&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;</span></li><li class="L8"><span class="tag">&lt;/ul&gt;</span></li><li class="L9"><span class="pln">						</span></li></ol></pre>
					</div>
				</div>
		</div>
	</div>


