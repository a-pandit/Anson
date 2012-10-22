<!DOCTYPE html>
<?php 
	$role = $this->Session->read('role');
?>
<html lang="en">
<div class="container-fluid">
		<div class="row-fluid">
			<div class="span2">
				<!-- Sidebar content -->
				<?php 
					echo $this->Html->link('Logout',array('controller' => 'Home', 'action' => 'logout'),
														array('class' => 'btn'));
				?>
				<?php 
				  	echo $this->Session->read('name');
				?>
			</div>
			<div class="span10">
				<!-- Main content -->
				<!-- form using cakephp -->
				<?php
					if ($role == 1)
					{ 
						echo $this->Html->link('Pending Users',array('controller' => 'Employee', 'action' => 'pendingUsers'),
																	array('class' => 'btn'));
					}
					//controller and action are yet to be made for profile and add project button
					echo $this->Html->link('Profile',array('controller' => 'Project', 'action' => 'userProfile'),
															array('class' => 'btn'));
					echo $this->Html->link('Project',array('controller' => 'Project', 'action' => 'listProject'),
															array('class' => 'btn'));
				?>
			</div>
		</div>
	</div>
</html>
