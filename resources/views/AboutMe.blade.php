<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Me</title>
</head>
<style>
  button {
    width: 150px;
    height: 60px;
    border: 3px solid #fd6131;
    border-radius: 45px;
    transition: all 0.3s;
    cursor: pointer;
    background: white;
    font-size: 1.2em;
    font-weight: 550;
    font-family: 'Montserrat', sans-serif;
  }
  
  button:hover {
    background: #bb843d;
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

       <p>I am {{$data['name']}}</p>
       <p>I am {{$data['age']}} years old</p>
  </body>
</html>