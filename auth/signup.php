 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
</head>
<body>
<div class="container" id="container"> 
  
  <div class="form-container sign-up-container">
	<form action=" process.php" method="POST">
		<h1>Sign Up</h1>
		<div class="texth1">You can sign up using</div>
		<div class="social-container">
			<style>
				.flexify{
					display: flex;
					gap: 10px;
				}
				.texth1{
					font-size: 14px;
				}
				.ok p{
					font-size: 10px
				}
			</style> 
		</div>
		<input type="text" name="badge_id" id="badge-id-input" placeholder="bdg-123 " required />
		<input type="email" name="email" id="email-input" placeholder="Email" required />
		<input type="text" name="username" id="username-input" placeholder="Username" required />
		<input type="password" name="password" placeholder="Password" required /><br>
		<button name="signup" type="submit">Sign Up</button>
		<a href="forgotpsw.html">Forgot your password?</a>
	</form>
  </div>
  <div class="overlay-container">
      <div class="overlay">
          <div class="overlay-panel overlay-left">
              <button class="ghost" id="signIn">Already have an account? Sign In</button>
          </div>
          <div class="overlay-panel overlay-right">
              <div class="logo-im"></div>
              <img src="../images/RNP_LOGO.png" alt="" width="100px">
              <h4>Service - Protection - Integrity</h4>
              <div class="featurezz">
                  <div class="feature">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-layers-half" viewBox="0 0 16 16">
                          <path d="M8.235 1.559a.5.5 0 0 0-.47 0l-7.5 4a.5.5 0 0 0 0 .882L3.188 8 .264 9.559a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882L12.813 8l2.922-1.559a.5.5 0 0 0 0-.882zM8 9.433 1.562 6 8 2.567 14.438 6z"/>
                      </svg>
                      <span>Accurate incident reports</span>
                  </div>
                  <div class="feature">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-alarm-fill" viewBox="0 0 16 16">
                          <path d="M6 .5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H9v1.07a7.001 7.001 0 0 1 3.274 12.474l.601.602a.5.5 0 0 1-.707.708l-.746-.746A6.97 6.97 0 0 1 8 16a6.97 6.97 0 0 1-3.422-.892l-.746.746a.5.5 0 0 1-.707-.708l.602-.602A7.001 7.001 0 0 1 7 2.07V1h-.5A.5.5 0 0 1 6 .5m2.5 5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9zM.86 5.387A2.5 2.5 0 1 1 4.387 1.86 8.04 8.04 0 0 0 .86 5.387M11.613 1.86a2.5 2.5 0 1 1 3.527 3.527 8.04 8.04 0 0 0-3.527-3.527"/>
                      </svg>
                      <span>Time saving retrieval of data</span>
                  </div>
                  <div class="feature">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-right-square-fill" viewBox="0 0 16 16">
                          <path d="M14 16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2zM5.904 5.197 10 9.293V6.525a.5.5 0 0 1 1 0V10.5a.5.5 0 0 1-.5.5H6.525a.5.5 0 0 1 0-1h2.768L5.197 5.904a.5.5 0 0 1 .707-.707"/>
                      </svg>
                      <span>Easy to use</span>
                  </div> 
              </div>
          </div>
      </div>
  </div>
</div>

<style>
  @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

  * {
      box-sizing: border-box;
  }

  body {
      background: #f6f5f7;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      font-family: 'Montserrat', sans-serif;
      height: 100vh;
      margin: -20px 0 50px;
  }
  .featurezz{
      font-size: 12px;
  }  
  .feature{
      margin-top: 15px;
  }

  p {
      font-size: 14px;
      font-weight: 100;
      line-height: 20px;
      letter-spacing: 0.5px;
  }

  a {
      color: #333;
      font-size: 14px;
      text-decoration: none;
      margin: 15px 0;
  }

  button {
      border-radius: 24px;
      background-color: #1F3365;
      color: #FFFFFF;
      font-size: 12px;
      font-weight: bold;
      padding: 12px 45px;
      letter-spacing: 1px;
      text-transform: uppercase;
      transition: transform 80ms ease-in;
      border: none;
  }

  button:hover {
      border-radius: 24px;
      background-color: #223e84;
      color: #FFFFFF;
      font-size: 12px;
      font-weight: bold;
      padding: 12px 47px;
      letter-spacing: 1px;
      text-transform: uppercase;
      transition: transform 80ms ease-in;
  }

  button:active {
      transform: scale(0.95);
  } 
  form {
      background-color: #FFFFFF;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      padding: 0 50px;
      height: 100%;
      text-align: center;
  }

  input {
      background-color: #eee;
      border: none;
      padding: 12px 15px;
      margin: 8px 0;
      width: 100%;
  }

  .container {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
      position: relative;
      overflow: hidden;
      width: 768px;
      max-width: 100%;
      min-height: 480px;
  }

  .form-container {
      position: absolute;
      top: 0;
      height: 100%;
  }

  .sign-up-container {
      left: 0;
      width: 50%;
      z-index: 2;
  }

  .overlay-container {
      position: absolute;
      top: 0;
      left: 50%;
      width: 50%;
      height: 100%;
      overflow: hidden;
      transition: transform 0.6s ease-in-out;
      z-index: 100;
  }

  .overlay { 
      background: linear-gradient(to top, #1F3365, #001e69);
      background-repeat: no-repeat;
      background-size: cover;
      background-position: 0 0;
      color: #FFFFFF;
      position: relative;
      left: -100%;
      height: 100%;
      width: 200%;
      transform: translateX(0);
      transition: transform 0.6s ease-in-out;
  }

  .overlay-panel {
      position: absolute;
      display: flex;
      align-items: center;    
      flex-direction: column;
      padding: 0 40px;
      top: 90px;
      height: 100%;
      width: 50%;
      transform: translateX(0);
      transition: transform 0.6s ease-in-out;
  }

  .overlay-right {
      right: 0;
      transform: translateX(0);
  }

  .social-container {
      margin: 10px 0;
  }

  .social-container a {
      border: 1px solid #DDDDDD;
      border-radius: 50%;
      display: inline-flex;
      justify-content: center;
      align-items: center;
      margin: 0 5px;
      height: 40px;
      width: 40px;
  }
</style>
</body>
</html> 