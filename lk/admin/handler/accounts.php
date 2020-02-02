<?
//show function
	function showUserTable(){
		require '../../config.php';
		require '../../lib/db_conection.php';

		$query = "SELECT * FROM ".$config['auth']['table'];
		$stmt = mysqli_query($connect, $query);
		$result = mysqli_fetch_assoc($stmt);
		print '<table class="table table-striped">';
		print '<tr><th>Nickname</th><th>Email</th><th>actions</th></tr>';
		do{
			if($result[$config['auth']['adminC']] == 1)
				$disable = 'disabled';
			else
				$disable = '';
			print '<tr><td>'.$result[$config['auth']['nameC']].'</td><td>'.$result[$config['auth']['emailC']].'</td><td>
			<button type="submit" class="btn btn-xs btn-success" onClick="showEditModal(\''.$result[$config['auth']['idC']].'\')">Edit</button>
			<button type="submit" class="btn btn-xs btn-warning" onClick="showRemoveModal(\''.$result[$config['auth']['idC']].'\')"'.$disable.'><span class="glyphicon glyphicon-remove-sign"></span></button>
			</td></tr>';
		}while($result = mysqli_fetch_assoc($stmt));
		print '</table>';
	}

	function showRemoveModal($id){
		print '
		<div id="removeModal" class="modal fade">
		  	<div class="modal-dialog modal-sm">
		   	 	<div class="modal-content">    
			      	<div class="modal-header">
			        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          		<span aria-hidden="true">&times;</span>
			        	</button>
			       	 	<h5 class="modal-title">Remove?</h5>
			      	</div>
			      	<div class="modal-body">
			        	Do you really want to remove this account?
			      	</div>
		      		<div class="modal-footer">
		        		<button type="button" class="btn btn-default btn-sm" data-dismiss="modal">No</button>
		        		<button type="button" class="btn btn-primary btn-sm" id="yes" onClick="removeUser(\''.$id.'\')">Yes</button>
		      		</div>
		    	</div>
		  	</div>
		</div>';
	}

	function showEditModal($id){

		require '../../config.php';
		require '../../lib/db_conection.php';

		//user table request
		$query_u = "SELECT * FROM ".$config['auth']['table']." WHERE id='".$id."'";
		$stmt_u = mysqli_query($connect, $query_u);
		$result_u = mysqli_fetch_assoc($stmt_u);

		//economy table request
		$query_e = "SELECT * FROM ".$config['money']['table']." WHERE username='".$result_u['name']."'";
		$stmt_e = mysqli_query($connect, $query_e);
		$result_e = mysqli_fetch_assoc($stmt_e);
		if(file_exists("../../skins/".$result_u['name'].".png"))
			$skin = 'enabled';
		else
			$skin = 'disabled';
		if(file_exists("../../cloaks/".$result_u['name'].".png"))
			$cloak = 'enabled';
		else
			$cloak = 'disabled';
		print '
		<div id="editModal" class="modal fade">
		  	<div class="modal-dialog">
		   	 	<div class="modal-content">    
			      	<div class="modal-header">
			        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          		<span aria-hidden="true">&times;</span>
			        	</button>
			       	 	<h5 class="modal-title">Edit user</h5>
			      	</div>
			      	<div class="modal-body">
			        	<form>
			        		<input type="text" id="username" class="form-control" name="name" placeholder="Nickname" value="'.$result_u['name'].'"><br>
			        		<input type="email" id="email" class="form-control" name="email" placeholder="Email" value="'.$result_u['email'].'"><br>
			        		<input type="password" id="pass" class="form-control" name="password" placeholder="Password"><br>
			        		<input type="number" id="balance" class="form-control" name="balance" placeholder="iConomy count" value="'.$result_e['balance'].'"><br>
			        		<input type="number" id="realBalance" class="form-control" name="realBalance" placeholder="Real count" value="'.$result_e['realBalance'].'"><br>
			        		<input type="text" id="prefix" class="form-control" name="prefix" placeholder="Prefix"><br>
			        		<input type="text" id="group" class="form-control" name="group" placeholder="Group"><br>
			        		<button type="button" class="btn btn-danger" '.$skin.'><span class="glyphicon glyphicon-remove-sign"></span> Skin </button>
			        		<button type="button" class="btn btn-danger" '.$cloak.'><span class="glyphicon glyphicon-remove-sign"></span> Cloack </button><br>
			        	</form>
			      	</div>
		      		<div class="modal-footer">
		        		<button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel</button>
		        		<button type="button" class="btn btn-primary btn-sm" onClick="editUser(\''.$id.'\')">OK</button>
		      		</div>
		    	</div>
		  	</div>
		</div>';
	}

//handle function
	function removeUser($id){
		require '../../config.php';
		require '../../lib/db_conection.php';

		$query = "DELETE FROM ".$config['auth']['table']." WHERE id='".$id."'";
		$result = mysqli_query($connect, $query);
		if($result)
			print 'User has been deleted successful!:success';
		else
			print 'Erorr - user has not been deleted!:error';
	}

//handler AJAX requests
	if(isset($_POST['view'])){
		if($_POST['view'] == 'userTable'){
			showUserTable();
		}
		if($_POST['view'] == 'removeModal'){
			showRemoveModal($_POST['id']);
		}
		if($_POST['view'] == 'editModal'){
			showEditModal($_POST['id']);
		}
	}

	if(isset($_POST['handle'])){
		if($_POST['handle'] == 'removeUser'){
			removeUser($_POST['id']);
		}
	}
?>