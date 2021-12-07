function toggle_login_register(){
	if(!is_user_logged_in()){
	?>

<script>
	
	function toggleLogin(){
		
		var toggleBtn = document.getElementById('login-toggle');
		var login = document.getElementById('login-col');
		var register = document.getElementById('register-col');
		
		if(login.style.display === 'block'){
			login.style.display = 'none';
			register.style.display = 'block';
			toggleBtn.innerHTML = "Already have an account? Login";
		}
		else if(login.style.display === 'none'){
			login.style.display = 'block';
			register.style.display = 'none';
			toggleBtn.innerHTML = "No Account? Register";			
		}
	}
</script>
<button id="login-toggle" onclick=toggleLogin()>No Account? Register</button>
<?php
	}
}

add_action('woocommerce_after_customer_login_form', 'toggle_login_register');
