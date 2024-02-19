<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Skills</title>
</head>
<style>
button {
  width: 150px;
  height: 60px;
  border: 3px solid #006d0f;
  border-radius: 45px;
  transition: all 0.3s;
  cursor: pointer;
  background: white;
  font-size: 1.2em;
  font-weight: 550;
  font-family: 'Montserrat', sans-serif;
}

button:hover {
  background: #2c9743;
  color: white;
  font-size: 1.5em;
}
a {
    text-decoration: none;
    color: inherit;
  }
</style>
<body>
  <button>
    <a href="/AboutMe">
   About Me
    </a>
  </button>

  <button>
    <a href="/Hobbies">
    Hobbies
    </a>
   </button>

   <button>
    <a href="/Skills">
    Skills
    </a>
   </button>

   <p>I can {{$skills}}</p>

</body>
</html>