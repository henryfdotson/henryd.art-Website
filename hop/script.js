var character = document.getElementById("character");

var enemy = document.getElementById("enemy");

	let counter = function() {
	    let count = 0;
	    return function() {
	        return ++count;
	    }
	};
	let x = counter();

	var t=setInterval(function() {
		document.getElementById("counter").innerHTML = "Hops: "+x();
	},1000);

// Jump Function
function jump() {
	if (character.classList != "animate"){
		character.classList.add("animate");
	}
	setTimeout(function(){
		character.classList.remove("animate");
	},500);
}

// Check to see if player has died
 	var checkDesk = setInterval(function(){
	 	var characterTop = parseInt(window.getComputedStyle(character).getPropertyValue("top"));
	 	var blockLeft = parseInt(window.getComputedStyle(enemy).getPropertyValue("left"));


	 	//when character dies, end game and show alert
	 	if(blockLeft < 50 && blockLeft > 20 && characterTop >= 130) {
	 		enemy.style.animation = "none";
	 		enemy.style.display = "none";
	 		clearInterval(t);
	 		if(!alert('Game over! Play again?')){window.location.reload();}
	 	}

 	},10);



