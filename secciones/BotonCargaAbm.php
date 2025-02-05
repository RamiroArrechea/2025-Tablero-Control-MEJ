<?php
#		Este archivo representa el PIE DE PAGINA de todas las pantallas de log!!
#		Este archivo esta pensado para poder mostrarles a los encargados de la creacion de tablas; un link "ALTA"
#		donde pueden acceder a un Nuevo Registro.
?>
<?php
	switch ($_SESSION['item']){
		#==============PERMISO AVANCE==============================
		case "avance":
		if($_SESSION['permisoAvance']!=''){
			switch ($_SESSION['permisoAvance'] ){
				case 3:
		?>
					<div class='logIzq'>
						<label>Nuevo Registro</label>
					</div>
					<div class='logDer'>
						<input name='' class='' type='submit'  value='Alta' />
					</div>
					<div class="cl"></div>
					<?php
					switch ( $_SESSION['permisoEspecialAvance']){
						case 3:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 2:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 1:
						?>
							<div class="cl"></div>
						<?php
						break;
					}/*fin del 2º switch*/	
					?>
				<?php
				break;
				case 2:
				?>
					<div class='logIzq'>
						<label>Nuevo Registro</label>
					</div>
					<div class='logDer'>
						<input name='' class='' type='submit'  value='Alta' />
					</div>
					<div class="cl"></div>
					<?php
					switch ( $_SESSION['permisoEspecialAvance']){
						case 3:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 2:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 1:
						?>
							<div class="cl"></div>
						<?php
						break;
					}/*fin del 2º switch*/	
					?>
				<?php
				break;
				case 1:
				?>
					<?php
					switch ( $_SESSION['permisoEspecialAvance']){
						case 3:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 2:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 1:
						?>
							<div class="cl"></div>
						<?php
						break;
					}/*fin del 2º switch*/	
					?>
				<?php
				break;
			}/*fin del 1º switch*/	
		?>
		<?php
		}else{			/*EN EL CASO QUE SOLO TENGA PERMISOS ESPECIALES---SE DAN ESTAS CONDICIONES*/	
				switch ( $_SESSION['permisoEspecialAvance']){
					case 3:
					?>
						<div class='logIzq'>
							<label>Nuevo Registro</label>
						</div>
						<div class='logDer'>
							<input name='' class='' type='submit'  value='Alta' />
						</div>
						<div class="cl"></div>
					<?php
					break;
					case 2:
					?>
						<div class='logIzq'>
							<label>Nuevo Registro</label>
						</div>
						<div class='logDer'>
							<input name='' class='' type='submit'  value='Alta' />
						</div>
						<div class="cl"></div>
					<?php
					break;
					case 1:
					?>
						<div class="cl"></div>
					<?php
					break;
				}/*fin del 2º switch*/
		}
		break;
#========================================================================================================================
		#==============PERMISO BUDGET==============================
		case "budget":
		if($_SESSION['permisoBudget']!=''){
			switch ($_SESSION['permisoBudget'] ){
				case 3:
		?>
					<div class='logIzq'>
						<label>Nuevo Registro</label>
					</div>
					<div class='logDer'>
						<input name='' class='' type='submit'  value='Alta' />
					</div>
					<div class="cl"></div>
					<?php
					switch ( $_SESSION['permisoEspecialBudget']){
						case 3:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 2:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 1:
						?>
							<div class="cl"></div>
						<?php
						break;
					}/*fin del 2º switch*/	
					?>
				<?php
				break;
				case 2:
				?>
					<div class='logIzq'>
						<label>Nuevo Registro</label>
					</div>
					<div class='logDer'>
						<input name='' class='' type='submit'  value='Alta' />
					</div>
					<div class="cl"></div>
					<?php
					switch ( $_SESSION['permisoEspecialBudget']){
						case 3:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 2:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 1:
						?>
							<div class="cl"></div>
						<?php
						break;
					}/*fin del 2º switch*/	
					?>
				<?php
				break;
				case 1:
				?>
					<?php
					switch ( $_SESSION['permisoEspecialBudget']){
						case 3:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 2:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 1:
						?>
							<div class="cl"></div>
						<?php
						break;
					}/*fin del 2º switch*/	
					?>
				<?php
				break;
			}/*fin del 1º switch*/	
		?>
		<?php
		}else{			/*EN EL CASO QUE SOLO TENGA PERMISOS ESPECIALES---SE DAN ESTAS CONDICIONES*/	
				switch ( $_SESSION['permisoEspecialBudget']){
					case 3:
					?>
						<div class='logIzq'>
							<label>Nuevo Registro</label>
						</div>
						<div class='logDer'>
							<input name='' class='' type='submit'  value='Alta' />
						</div>
						<div class="cl"></div>
					<?php
					break;
					case 2:
					?>
						<div class='logIzq'>
							<label>Nuevo Registro</label>
						</div>
						<div class='logDer'>
							<input name='' class='' type='submit'  value='Alta' />
						</div>
						<div class="cl"></div>
					<?php
					break;
					case 1:
					?>
						<div class="cl"></div>
					<?php
					break;
				}/*fin del 2º switch*/
		}
		break;
#========================================================================================================================
		#==============PERMISO SCLIENTE==============================
		case "scliente":
		if($_SESSION['permisoSCliente']!=''){
			switch ($_SESSION['permisoSCliente'] ){
				case 3:
		?>
					<div class='logIzq'>
						<label>Nuevo Registro</label>
					</div>
					<div class='logDer'>
						<input name='' class='' type='submit'  value='Alta' />
					</div>
					<div class="cl"></div>
					<?php
					switch ( $_SESSION['permisoEspecialSCliente']){
						case 3:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 2:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 1:
						?>
							<div class="cl"></div>
						<?php
						break;
					}/*fin del 2º switch*/	
					?>
				<?php
				break;
				case 2:
				?>
					<div class='logIzq'>
						<label>Nuevo Registro</label>
					</div>
					<div class='logDer'>
						<input name='' class='' type='submit'  value='Alta' />
					</div>
					<div class="cl"></div>
					<?php
					switch ( $_SESSION['permisoEspecialSCliente']){
						case 3:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 2:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 1:
						?>
							<div class="cl"></div>
						<?php
						break;
					}/*fin del 2º switch*/	
					?>
				<?php
				break;
				case 1:
				?>
					<?php
					switch ( $_SESSION['permisoEspecialSCliente']){
						case 3:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 2:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 1:
						?>
							<div class="cl"></div>
						<?php
						break;
					}/*fin del 2º switch*/	
					?>
				<?php
				break;
			}/*fin del 1º switch*/	
		?>
		<?php
		}else{			/*EN EL CASO QUE SOLO TENGA PERMISOS ESPECIALES---SE DAN ESTAS CONDICIONES*/	
				switch ( $_SESSION['permisoEspecialSCliente']){
					case 3:
					?>
						<div class='logIzq'>
							<label>Nuevo Registro</label>
						</div>
						<div class='logDer'>
							<input name='' class='' type='submit'  value='Alta' />
						</div>
						<div class="cl"></div>
					<?php
					break;
					case 2:
					?>
						<div class='logIzq'>
							<label>Nuevo Registro</label>
						</div>
						<div class='logDer'>
							<input name='' class='' type='submit'  value='Alta' />
						</div>
						<div class="cl"></div>
					<?php
					break;
					case 1:
					?>
						<div class="cl"></div>
					<?php
					break;
				}/*fin del 2º switch*/
		}
		break;
#========================================================================================================================
		#==============PERMISO CALIDAD==============================
		case "calidad":
			$_SESSION['permisoCalidad'] =3;
		if($_SESSION['permisoCalidad']!=''){
			switch ($_SESSION['permisoCalidad'] ){
				case 3:
		?>
					<div class='logIzq'>
						<label>Nuevo Registro</label>
					</div>
					<div class='logDer'>
						<input name='' class='' type='submit'  value='Alta' />
					</div>
					<div class="cl"></div>
					<?php
					$_SESSION['permisoEspecialCalidad'] =3;
					switch ( $_SESSION['permisoEspecialCalidad']){
						case 3:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 2:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 1:
						?>
							<div class="cl"></div>
						<?php
						break;
					}/*fin del 2º switch*/	
					?>
				<?php
				break;
				case 2:
				?>
					<div class='logIzq'>
						<label>Nuevo Registro</label>
					</div>
					<div class='logDer'>
						<input name='' class='' type='submit'  value='Alta' />
					</div>
					<div class="cl"></div>
					<?php
					switch ( $_SESSION['permisoEspecialCalidad']){
						case 3:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 2:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 1:
						?>
							<div class="cl"></div>
						<?php
						break;
					}/*fin del 2º switch*/	
					?>
				<?php
				break;
				case 1:
				?>
					<?php
					switch ( $_SESSION['permisoEspecialCalidad']){
						case 3:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 2:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 1:
						?>
							<div class="cl"></div>
						<?php
						break;
					}/*fin del 2º switch*/	
					?>
				<?php
				break;
			}/*fin del 1º switch*/	
		?>
		<?php
		}else{			/*EN EL CASO QUE SOLO TENGA PERMISOS ESPECIALES---SE DAN ESTAS CONDICIONES*/	
				switch ( $_SESSION['permisoEspecialCalidad']){
					case 3:
					?>
						<div class='logIzq'>
							<label>Nuevo Registro</label>
						</div>
						<div class='logDer'>
							<input name='' class='' type='submit'  value='Alta' />
						</div>
						<div class="cl"></div>
					<?php
					break;
					case 2:
					?>
						<div class='logIzq'>
							<label>Nuevo Registro</label>
						</div>
						<div class='logDer'>
							<input name='' class='' type='submit'  value='Alta' />
						</div>
						<div class="cl"></div>
					<?php
					break;
					case 1:
					?>
						<div class="cl"></div>
					<?php
					break;
				}/*fin del 2º switch*/
		}
		break;
#========================================================================================================================
		#==============PERMISO SEGUIMIENTO==============================
		case "seguimiento":
		if($_SESSION['permisoSeguimiento']!=''){
			switch ($_SESSION['permisoSeguimiento'] ){
				case 3:
		?>
					<div class='logIzq'>
						<label>Nuevo Registro</label>
					</div>
					<div class='logDer'>
						<input name='' class='' type='submit'  value='Alta' />
					</div>
					<div class="cl"></div>
					<?php
					switch ( $_SESSION['permisoEspecialSeguimiento']){
						case 3:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 2:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 1:
						?>
							<div class="cl"></div>
						<?php
						break;
					}/*fin del 2º switch*/	
					?>
				<?php
				break;
				case 2:
				?>
					<div class='logIzq'>
						<label>Nuevo Registro</label>
					</div>
					<div class='logDer'>
						<input name='' class='' type='submit'  value='Alta' />
					</div>
					<div class="cl"></div>
					<?php
					switch ( $_SESSION['permisoEspecialSeguimiento']){
						case 3:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 2:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 1:
						?>
							<div class="cl"></div>
						<?php
						break;
					}/*fin del 2º switch*/	
					?>
				<?php
				break;
				case 1:
				?>
					<?php
					switch ( $_SESSION['permisoEspecialSeguimiento']){
						case 3:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 2:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 1:
						?>
							<div class="cl"></div>
						<?php
						break;
					}/*fin del 2º switch*/	
					?>
				<?php
				break;
			}/*fin del 1º switch*/	
		?>
		<?php
		}else{			/*EN EL CASO QUE SOLO TENGA PERMISOS ESPECIALES---SE DAN ESTAS CONDICIONES*/	
				switch ( $_SESSION['permisoEspecialSeguimiento']){
					case 3:
					?>
						<div class='logIzq'>
							<label>Nuevo Registro</label>
						</div>
						<div class='logDer'>
							<input name='' class='' type='submit'  value='Alta' />
						</div>
						<div class="cl"></div>
					<?php
					break;
					case 2:
					?>
						<div class='logIzq'>
							<label>Nuevo Registro</label>
						</div>
						<div class='logDer'>
							<input name='' class='' type='submit'  value='Alta' />
						</div>
						<div class="cl"></div>
					<?php
					break;
					case 1:
					?>
						<div class="cl"></div>
					<?php
					break;
				}/*fin del 2º switch*/
		}
		break;
#========================================================================================================================
		#==============PERMISO PROVEEDOR==============================
		case "proveedor":
		if($_SESSION['permisoProveedores']!=''){
			switch ($_SESSION['permisoProveedores'] ){
				case 3:
		?>
					<div class='logIzq'>
						<label>Nuevo Registro</label>
					</div>
					<div class='logDer'>
						<input name='' class='' type='submit'  value='Alta' />
					</div>
					<div class="cl"></div>
					<?php
					switch ( $_SESSION['permisoEspecialProveedores']){
						case 3:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 2:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 1:
						?>
							<div class="cl"></div>
						<?php
						break;
					}/*fin del 2º switch*/	
					?>
				<?php
				break;
				case 2:
				?>
					<div class='logIzq'>
						<label>Nuevo Registro</label>
					</div>
					<div class='logDer'>
						<input name='' class='' type='submit'  value='Alta' />
					</div>
					<div class="cl"></div>
					<?php
					switch ( $_SESSION['permisoEspecialProveedores']){
						case 3:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 2:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 1:
						?>
							<div class="cl"></div>
						<?php
						break;
					}/*fin del 2º switch*/	
					?>
				<?php
				break;
				case 1:
				?>
					<?php
					switch ( $_SESSION['permisoEspecialProveedores']){
						case 3:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 2:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 1:
						?>
							<div class="cl"></div>
						<?php
						break;
					}/*fin del 2º switch*/	
					?>
				<?php
				break;
			}/*fin del 1º switch*/	
		?>
		<?php
		}else{			/*EN EL CASO QUE SOLO TENGA PERMISOS ESPECIALES---SE DAN ESTAS CONDICIONES*/	
				switch ( $_SESSION['permisoEspecialProveedores']){
					case 3:
					?>
						<div class='logIzq'>
							<label>Nuevo Registro</label>
						</div>
						<div class='logDer'>
							<input name='' class='' type='submit'  value='Alta' />
						</div>
						<div class="cl"></div>
					<?php
					break;
					case 2:
					?>
						<div class='logIzq'>
							<label>Nuevo Registro</label>
						</div>
						<div class='logDer'>
							<input name='' class='' type='submit'  value='Alta' />
						</div>
						<div class="cl"></div>
					<?php
					break;
					case 1:
					?>
						<div class="cl"></div>
					<?php
					break;
				}/*fin del 2º switch*/
		}
		break;
#========================================================================================================================
		#==============PERMISO MILESTONE==============================
		case "milestone":
		if($_SESSION['permisoMilestone']!=''){
			switch ($_SESSION['permisoMilestone'] ){
				case 3:
		?>
					<div class='logIzq'>
						<label>Nuevo Registro</label>
					</div>
					<div class='logDer'>
						<input name='' class='' type='submit'  value='Alta' />
					</div>
					<div class="cl"></div>
					<?php
					switch ( $_SESSION['permisoEspecialMilestone']){
						case 3:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 2:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 1:
						?>
							<div class="cl"></div>
						<?php
						break;
					}/*fin del 2º switch*/	
					?>
				<?php
				break;
				case 2:
				?>
					<div class='logIzq'>
						<label>Nuevo Registro</label>
					</div>
					<div class='logDer'>
						<input name='' class='' type='submit'  value='Alta' />
					</div>
					<div class="cl"></div>
					<?php
					switch ( $_SESSION['permisoEspecialMilestone']){
						case 3:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 2:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 1:
						?>
							<div class="cl"></div>
						<?php
						break;
					}/*fin del 2º switch*/	
					?>
				<?php
				break;
				case 1:
				?>
					<?php
					switch ( $_SESSION['permisoEspecialMilestone']){
						case 3:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 2:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 1:
						?>
							<div class="cl"></div>
						<?php
						break;
					}/*fin del 2º switch*/	
					?>
				<?php
				break;
			}/*fin del 1º switch*/	
		?>
		<?php
		}else{			/*EN EL CASO QUE SOLO TENGA PERMISOS ESPECIALES---SE DAN ESTAS CONDICIONES*/	
				switch ( $_SESSION['permisoEspecialMilestone']){
					case 3:
					?>
						<div class='logIzq'>
							<label>Nuevo Registro</label>
						</div>
						<div class='logDer'>
							<input name='' class='' type='submit'  value='Alta' />
						</div>
						<div class="cl"></div>
					<?php
					break;
					case 2:
					?>
						<div class='logIzq'>
							<label>Nuevo Registro</label>
						</div>
						<div class='logDer'>
							<input name='' class='' type='submit'  value='Alta' />
						</div>
						<div class="cl"></div>
					<?php
					break;
					case 1:
					?>
						<div class="cl"></div>
					<?php
					break;
				}/*fin del 2º switch*/
		}
		break;
#========================================================================================================================
		#==============PERMISO RIESGOS==============================
		case "riesgos":
		if($_SESSION['permisoRiesgos']!=''){
			switch ($_SESSION['permisoRiesgos'] ){
				case 3:
		?>
					<div class='logIzq'>
						<label>Nuevo Registro</label>
					</div>
					<div class='logDer'>
						<input name='' class='' type='submit'  value='Alta' />
					</div>
					<div class="cl"></div>
					<?php
					switch ( $_SESSION['permisoEspecialRiesgos']){
						case 3:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 2:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 1:
						?>
							<div class="cl"></div>
						<?php
						break;
					}/*fin del 2º switch*/	
					?>
				<?php
				break;
				case 2:
				?>
					<div class='logIzq'>
						<label>Nuevo Registro</label>
					</div>
					<div class='logDer'>
						<input name='' class='' type='submit'  value='Alta' />
					</div>
					<div class="cl"></div>
					<?php
					switch ( $_SESSION['permisoEspecialRiesgos']){
						case 3:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 2:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 1:
						?>
							<div class="cl"></div>
						<?php
						break;
					}/*fin del 2º switch*/	
					?>
				<?php
				break;
				case 1:
				?>
					<?php
					switch ( $_SESSION['permisoEspecialRiesgos']){
						case 3:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 2:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 1:
						?>
							<div class="cl"></div>
						<?php
						break;
					}/*fin del 2º switch*/	
					?>
				<?php
				break;
			}/*fin del 1º switch*/	
		?>
		<?php
		}else{			/*EN EL CASO QUE SOLO TENGA PERMISOS ESPECIALES---SE DAN ESTAS CONDICIONES*/	
				switch ( $_SESSION['permisoEspecialRiesgos']){
					case 3:
					?>
						<div class='logIzq'>
							<label>Nuevo Registro</label>
						</div>
						<div class='logDer'>
							<input name='' class='' type='submit'  value='Alta' />
						</div>
						<div class="cl"></div>
					<?php
					break;
					case 2:
					?>
						<div class='logIzq'>
							<label>Nuevo Registro</label>
						</div>
						<div class='logDer'>
							<input name='' class='' type='submit'  value='Alta' />
						</div>
						<div class="cl"></div>
					<?php
					break;
					case 1:
					?>
						<div class="cl"></div>
					<?php
					break;
				}/*fin del 2º switch*/
		}
		break;
#========================================================================================================================
		#==============PERMISO OPORTUNIDAD==============================
		case "oportunidad":
		if($_SESSION['permisoOportunidad']!=''){
			switch ($_SESSION['permisoOportunidad'] ){
				case 3:
		?>
					<div class='logIzq'>
						<label>Nuevo Registro</label>
					</div>
					<div class='logDer'>
						<input name='' class='' type='submit'  value='Alta' />
					</div>
					<div class="cl"></div>
					<?php
					switch ( $_SESSION['permisoEspecialOportunidad']){
						case 3:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 2:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 1:
						?>
							<div class="cl"></div>
						<?php
						break;
					}/*fin del 2º switch*/	
					?>
				<?php
				break;
				case 2:
				?>
					<div class='logIzq'>
						<label>Nuevo Registro</label>
					</div>
					<div class='logDer'>
						<input name='' class='' type='submit'  value='Alta' />
					</div>
					<div class="cl"></div>
					<?php
					switch ( $_SESSION['permisoEspecialOportunidad']){
						case 3:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 2:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 1:
						?>
							<div class="cl"></div>
						<?php
						break;
					}/*fin del 2º switch*/	
					?>
				<?php
				break;
				case 1:
				?>
					<?php
					switch ( $_SESSION['permisoEspecialOportunidad']){
						case 3:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 2:
						?>
							<div class='logIzq'>
								<label>Nuevo Registro</label>
							</div>
							<div class='logDer'>
								<input name='' class='' type='submit'  value='Alta' />
							</div>
							<div class="cl"></div>
						<?php
						break;
						case 1:
						?>
							<div class="cl"></div>
						<?php
						break;
					}/*fin del 2º switch*/	
					?>
				<?php
				break;
			}/*fin del 1º switch*/	
		?>
		<?php
		}else{			/*EN EL CASO QUE SOLO TENGA PERMISOS ESPECIALES---SE DAN ESTAS CONDICIONES*/	

		}
		break;
#========================================================================================================================
	}# fin del switch

?>










