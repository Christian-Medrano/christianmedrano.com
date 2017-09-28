<?php
include 'header.php';

$pass = $_POST['pass'];

if($pass == 'animalstyle')
{
        echo '<script type="text/javascript">location.href = \'docs/ChristianMedrano-Resume-Aug2107.pdf\';</script>';
}
else
{
    if(isset($_POST))
    {?>
		
		<div id="background" class="background">
			<img src="img/bg2.jpg" alt="">
			<div id="backround-overlay" class="background-overlay"></div>
		</div>
		
		<div class="container center">
			<div class="row">
			
	
            <form method="POST" action="secure.php">
				
				<div class="field">
	            	<input class="input" type="password" name="pass" required></input>
	            	<label for="pass">Password</label>
				</div>	

	            <div class="field py-2">
					<button id="submit" type="submit" value="Submit"><span></span>Submit</button>
				</div>
            </form>

			</div>
        </div>
    <?}
}

include 'footer.php';

?>