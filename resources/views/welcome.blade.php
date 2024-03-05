<div class="boxes">
    <div class="box">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
    <div class="box">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
    <div class="box">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
    <div class="box">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>

<!-- dribbble<a class="dribbble" href="https://dribbble.com/shots/5533600-Loading-boxes" target="_blank"><img src="https://cdn.dribbble.com/assets/dribbble-ball-mark-2bd45f09c2fb58dbbfb44766d5d1d07c5a12972d602ef8b32204d28fa3dda554.svg" alt=""></a> -->

<script type="text/javascript">
    var count = 1.5;
    var redirect = "/login";
     
    function countDown(){
        var timer = document.getElementById("timer");
        if(count > 0){
            count--;
            setTimeout("countDown()", 1000);
        }else{
            window.location.href = redirect;
        }
    }
    </script>    
    <span id="timer">
    <script type="text/javascript">countDown();</script>
    </span>

<style>
    .boxes {
	 --size: 32px;
	 --duration: 800ms;
	 height: calc(var(--size) * 2);
	 width: calc(var(--size) * 3);
	 position: fixed;
	 transform-style: preserve-3d;
	 transform-origin: 50% 50%;
	 margin-top: calc(var(--size) * 1.5 * -1);
	 transform: rotateX(60deg) rotateZ(45deg) rotateY(0deg) translateZ(0px);
}
 .boxes .box {
	 width: var(--size);
	 height: var(--size);
	 top: 0;
	 left: 0;
	 position: absolute;
	 transform-style: preserve-3d;
}
 .boxes .box:nth-child(1) {
	 transform: translate(100%, 0);
	 animation: box1 var(--duration) linear infinite;
}
 .boxes .box:nth-child(2) {
	 transform: translate(0, 100%);
	 animation: box2 var(--duration) linear infinite;
}
 .boxes .box:nth-child(3) {
	 transform: translate(100%, 100%);
	 animation: box3 var(--duration) linear infinite;
}
 .boxes .box:nth-child(4) {
	 transform: translate(200%, 0);
	 animation: box4 var(--duration) linear infinite;
}
 .boxes .box > div {
	 --background: #ff9500;
	 --top: auto;
	 --right: auto;
	 --bottom: auto;
	 --left: auto;
	 --translateZ: calc(var(--size) / 2);
	 --rotateY: 0deg;
	 --rotateX: 0deg;
	 position: absolute;
	 width: 100%;
	 height: 100%;
	 background: var(--background);
	 top: var(--top);
	 right: var(--right);
	 bottom: var(--bottom);
	 left: var(--left);
	 transform: rotateY(var(--rotateY)) rotateX(var(--rotateX)) translateZ(var(--translateZ));
}
 .boxes .box > div:nth-child(1) {
	 --top: 0;
	 --left: 0;
}
 .boxes .box > div:nth-child(2) {
	 --background: #b36800;
	 --right: 0;
	 --rotateY: 90deg;
}
 .boxes .box > div:nth-child(3) {
	 --background: #e68600;
	 --rotateX: -90deg;
}
 .boxes .box > div:nth-child(4) {
	 --background: #ffeeb2;
	 --top: 0;
	 --left: 0;
	 --translateZ: calc(var(--size) * 3 * -1);
}
 @keyframes box1 {
	 0%, 50% {
		 transform: translate(100%, 0);
	}
	 100% {
		 transform: translate(200%, 0);
	}
}
 @keyframes box2 {
	 0% {
		 transform: translate(0, 100%);
	}
	 50% {
		 transform: translate(0, 0);
	}
	 100% {
		 transform: translate(100%, 0);
	}
}
 @keyframes box3 {
	 0%, 50% {
		 transform: translate(100%, 100%);
	}
	 100% {
		 transform: translate(0, 100%);
	}
}
 @keyframes box4 {
	 0% {
		 transform: translate(200%, 0);
	}
	 50% {
		 transform: translate(200%, 100%);
	}
	 100% {
		 transform: translate(100%, 100%);
	}
}
 html {
	 -webkit-font-smoothing: antialiased;
}
 * {
	 box-sizing: border-box;
}
 *:before, *:after {
	 box-sizing: border-box;
}
 body {
	 min-height: 100vh;
	 font-family: Roboto, Arial;
	 color: #adafb6;
	 display: flex;
	 justify-content: center;
	 align-items: center;
	 background: #f9fbff;
}
 body .dribbble {
	 position: fixed;
	 display: block;
	 right: 20px;
	 bottom: 20px;
}
 body .dribbble img {
	 display: block;
	 height: 28px;
}
</style>