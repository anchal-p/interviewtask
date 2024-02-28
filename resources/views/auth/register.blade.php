<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

</head>
<body>
    



<style>
    * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

body {
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  color: white;
  background: url(https://raw.githubusercontent.com/vebpath/LoginFormGlassmorphism/d2ea4780b8b6f23d2a3978a2432752b8f46b586b/bg.svg)
    no-repeat center center/cover;
}

main {
  width: 400px;
  height: 500px;
  border: 1px solid white;
  border-radius: 5px;
  backdrop-filter: blur(25px);
  background-color: rgba(0, 0, 0, 0.205);
  display: grid;
  place-items: center;
  position: relative;
  overflow: hidden;
}

form {
  position: absolute;
  width: 80%;
  display: flex;
  flex-direction: column;
  gap: 10px;
  text-align: center;
  transition: 0.3s;
}

header {
  margin-bottom: 20px;
}

header p {
  font-size: 12px;
}
.wrapper {
  display: flex;
  border-radius: 4px;
  overflow: hidden;
}
.wrapper.remember {
  display: grid;
  grid-template-columns: auto auto;
  align-items: center;
  justify-content: flex-start;
  gap: 10px;
  font-size: 12px;
}
i {
  padding: 10px;
  background-color: white;
  color: black;
  border-right: 1px solid lightgray;
}

input {
  width: 100%;
  padding: 10px;
  border: none;
  outline: none;
}

button {
  padding: 10px 0;
  border: none;
  background-color: #304221;
  color: white;
  font-weight: bold;
  cursor: pointer;
  position: relative;
  border-radius: 4px;
}

button::before {
  position: absolute;
  content: "";
  inset: 0;
  --border: 2px;
  border: var(--border) solid #304221;
  border-radius: 4px;
  transition: 0.2s;
}

button:hover::before {
  inset: calc(var(--border) * -2);
}

.footer {
  font-size: 12px;
  margin-top: 20px;
}

a {
  color: white;
  text-decoration: none;
  font-size: 15px;
  font-weight: bold;
  position: relative;
}
a::before {
  position: absolute;
  content: "";
  bottom: -3px;
  width: 100%;
  height: 2px;
  background-color: white;
  transition: 0.2s;
  transform: scaleX(0);
}

a:hover::before {
  transform: scaleX(1);
}

/* #singup {
  transform: translateY(500px);
} */

body.active #login {
  transform: translateY(-500px);
}

body.active #singup {
  transform: translateY(0);
}
body.active main {
  transition: 0.3s;
  height: 500px;
}
.alert.text-danger {
    color: red;
}
.alert.text-success {
    color: green;
}

</style>
<body>


  
  <main>
 
    <form action="{{ url('register') }}" method="post">

       
        @csrf
      <header>
        <h4>Singup</h4>
      </header>
      @if(session()->has('message'))
      <div class="alert text-success">
          {{ session()->get('message') }}
      </div>
  @endif
  
  @if(session()->has('error'))
  <div class="alert text-danger">
      {{ session()->get('error') }}
  </div>
  @endif
      <div class="wrapper">
        <i class="material-symbols-outlined">person</i>
        <input type="text" name="name" value="{{ old('name') }}" placeholder="Username" />
      </div>
      @error('name')
      <div class="alert text-danger">{{ $message }}</div>
      @enderror
      <div class="wrapper">
        <i class="material-symbols-outlined">mail</i>
        <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" />
      </div>
      @error('email')
      <div class="alert text-danger">{{ $message }}</div>
      @enderror
      <div class="wrapper">
        <i class="material-symbols-outlined">lock</i>
        <input type="password" name="password" value="{{ old('password') }}" placeholder="Password" />
      </div>
       @error('password')
        <div class="alert text-danger">{{ $message }}</div>
        @enderror
      <div class="wrapper">
        <i class="material-symbols-outlined">lock</i>
        <input type="password" name="cpassword" value="{{ old('cpassword') }}" placeholder="Confirm Password" />
      </div>
      @error('cpassword')
      <div class="alert text-danger">{{ $message }}</div>
      @enderror
      <div class="wrapper remember">
        <input id="check1" type="checkbox" />
        <label for="check1">i agree to term & coditions</label>
      </div>
      <button type="submit">Sign Up</button>
      <p class="footer">already have account <a href="{{ url('/login') }}">Sign In</a></p>
    </form>
  
  </main>

</body>
</html>