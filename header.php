<?php  ?>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand" style="padding-Left:3em;">Merlin Store</a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home">&nbsp;</span>Home</a></li>
				<li><a href="sell/index.php"><span class="glyphicon glyphicon-modal-window">&nbsp;</span>Sell</a></li>
			</ul>
			<form class="navbar-form navbar-left" action="index.php" method="get" style="width:45%; ">
		        <div class="form-group" style="width:80%;" >
		          <input type="text" class="form-control" style="width:100%" placeholder="Search" id="search" name="squery">
		        </div>
		        <button type="submit" class="btn btn-primary" id="search_btn" name="enter" value="enter"><span class="glyphicon glyphicon-search"></span></button>
		     </form>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user">&nbsp;</span>SignIn</a>
					<ul class="dropdown-menu">
						<div style="width:300px;">
							<div class="panel panel-primary">
								<div class="panel-heading">Login</div>
								<div class="panel-heading">
									<form  id="login" action="login.php " method="post">
										<label for="email">Email</label>
										<input type="email" class="form-control" name="email" id="email" required/>
										<label for="email">Password</label>
										<input type="password" class="form-control" name="password" id="password" required/>
										<p><br/></p>
										<a href="login_form.php" style="color:white;" >Sign Up</a>
										<input type="submit" class="btn btn-success" style="float:right;">
									</form>
								</div>
							<div class="panel-footer" id="e_msg"></div>
							</div>
						</div>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>
