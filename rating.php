<!DOCTYPE html>

	<head>
		

		<script type="text/javascript">
			<!--
			    function toggle_visibility(id) {
			       var e = document.getElementById(id);
			       if(e.style.display == 'block')
			          e.style.display = 'none';
			       else
			          e.style.display = 'block';
			    }
			//-->
		</script>

		<style type="text/css">

			#popupBoxOnePosition{
				top: 0; left: 0; position: fixed; width: 100%; height: 120%;
				background-color: rgba(0,0,0,0.7); display: none;
			}
			
			.popupBoxWrapper{
				width: 550px; margin: 50px auto; text-align: left;
			}
			.popupBoxContent{
				background-color: #FFF; padding: 15px;
			}

		</style>

	</head>

	<body>

		<div id="popupBoxOnePosition">
			<div class="popupBoxWrapper">
				<div class="popupBoxContent">
				<h3>Please Submit Your Rating</h3>
					<form action="srating.php" method='Post'>
					<input type='radio' value='1' name='star'>1 star</input><br>
					<input type='radio' value='2' name='star'>2 star</input><br>
					<input type='radio' value='3' name='star'>3 star</input><br>
					<input type='radio' value='4' name='star'>4 star</input><br>
					<input type='radio' value='5' name='star'>5 star</input><br>
					
					<input type='submit' placeholder='Submit'></input><a href="javascript:void(0)" onclick="toggle_visibility('popupBoxOnePosition');">&nbsp;&nbsp;Cancel</a>
					
					</form>
					
				</div>
			</div>
		</div>

	

	

			<a href="javascript:void(0)" onclick="toggle_visibility('popupBoxOnePosition');" style="font-size:14px;">&nbsp;Submit Your Rating</a>
			

	

	</body>

</html>