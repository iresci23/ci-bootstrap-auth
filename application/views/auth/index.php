<div class="row pt-4">

	<?php if( $message ) : ?>
	<div class="alert alert-primary col-12" role="alert">
	  <?php echo $message;?>
	</div>
	<?php endif ?>
   
	<div class="col-4">
	  <!--Card-->
		<div class="card testimonial-card">

		    <!--Bacground color-->
		    <div class="card-up indigo lighten-1">
		    </div>

		    <!--Avatar-->
		    <div class="avatar text-center mt-4">
		    	<img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2810%29.jpg" class="rounded-circle">
		    </div>

		    <div class="card-body">
		        <!--Name-->
		        <h4 class="card-title text-center">
		        	<?= $logged->username ?>
		        </h4>
		        <p class="text-center">
		        	<?php echo anchor('auth/logout', 'Logout')?>
		        </p>

		        <hr>
		        <!--Quotation-->
		        <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci</p>
		    </div>

		</div>
		<!--/.Card-->
	</div>

	<div class="col-8">

		<div class="card">
		    <div class="card-header deep-orange lighten-1 white-text">
		        User List
		    </div>
		    <div class="card-body">
		        <table class="table table-sm">
				  <thead>
				    <tr>
				      <th>#</th>
				      <th>Email</th>
				      <th>Group</th>
				      <th>Status</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php
				  	foreach ($users as $idx => $user) {

				  		$groups = [];
				  		foreach ($user->groups as $group) {
				  			array_push($groups, $group->name);
				  		}

				  		echo '
				  			<tr>
						      <th scope="row">'. ($idx + 1) .'</th>
						      <td>'. htmlspecialchars($user->email,ENT_QUOTES,'UTF-8') .'</td>
						      <td>'. implode(',', $groups) .'</td>
						      <td>'. lang('index_active_link') .'</td>
						    </tr>
				  		';
				  	}
				  	?>
				  </tbody>
				</table>
		    </div>
		</div>

		<button type="button" class="btn btn-default"><?php echo anchor('auth/create_user', lang('index_create_user_link'))?></button>

		<button type="button" class="btn btn-default"><?php echo anchor('auth/create_group', lang('index_create_group_link'))?></button>

	</div>
</div>