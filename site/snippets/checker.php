 
<div class="age-wrapper" id="age-wrapper" style="display: none;">
 <?php snippet('marquees') ?>

<div class="age-decider">
	
	<button class="go-away-kids"><a href="https://youtubekids.com"> No</a></button>
	<p>are you of legal <br>
	drinking age?</p>	
	<button class="lets-have-fun">Yes</button>

</div>

</div>


<script>
      var hasSeenGreeting = localStorage.getItem("greeting");

      if(!hasSeenGreeting){
        document.getElementById("age-wrapper").style.display = "block";
        localStorage.setItem("greeting", "true");
      }

      document.querySelector("button").addEventListener("click", function(){
        localStorage.removeItem("greeting", "true");
      });
    </script>

