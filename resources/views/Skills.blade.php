<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Skills</title>
</head>
<style>
    .scene {
 width: 10em;
 justify-content: center;
 align-items: center;
}

.cube {
 color: #ccc;
 cursor: pointer;
 font-family: 'Roboto', sans-serif;
 transition: all 0.85s cubic-bezier(.17,.67,.14,.93);
 transform-style: preserve-3d;
 transform-origin: 100% 50%;
 width: 10em;
 height: 4em;
}

.cube:hover {
 transform: rotateX(-90deg);
}

.side {
 box-sizing: border-box;
 position: absolute;
 display: inline-block;
 height: 4em;
 width: 10em;
 text-align: center;
 text-transform: uppercase;
 padding-top: 1.5em;
 font-weight: bold;
}

.top {
 background: rgb(184, 145, 255);
 color: #1b0035;
 transform: rotateX(90deg) translate3d(0, 0, 2em);
 box-shadow: inset 0 0 0 5px #fff;
}

.front {
 background: #1b0035;
 color: #fff;
 box-shadow: inset 0 0 0 5px #fff;
 transform: translate3d(0, 0, 2em);
}
</style>
<body>
    <div class="scene">
        <div class="cube">
          <span class="side top">hehe</span>
          <span class="side front">About Me</span>
        </div>
      </div>
      <div class="scene">
        <div class="cube">
          <span class="side top">wala</span>
          <span class="side front">Skills</span>
        </div>
      </div>
      <div class="scene">
        <div class="cube">
          <span class="side top">matulog</span>
          <span class="side front">Hobbies</span>
        </div>
      </div>
</body>
</html>