<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="/styles/main.css">
  </head>
  <body>
    <div class="container">
      <nav>
        <ul>
          <li><a href="http://1t6.ca">Home</a></li>
        </ul>
      </nav>
    <?php 
 			//chooses a random number 
 			$num = Rand (0,11) ; 
 
 			//starts the random quote switch loop 
 			switch ($num) 
 				{ 
 				case 0: 
 				echo "'Don't think about dicks. Don't lose yourself to dicks' - John F Kennedy, after avoiding a Russian missile strike"; 
 				break; 
 
 				case 1: 
 				echo "'My very first PC was a pentium 166, and we did some crazy shit and OC'd it to 200Mhz' - Beyonce Knowles, after giving birth to first child
"; 
 				break; 
 
				case 2: 
 				echo "'Whats a good linux based gui that's text based?' - LeBron James, after winning his second championship"; 
 				break; 
 
 				case 3: 
 				echo "'Is either the Hart House gym or the Athletic Centre open to us these days?' - Kanye West, after having a little too much to drink"; 
 				break; 
 
 				case 4: 
				echo "'Dicks, dicks, dicks' - Charles Dickens, self explanatory."; 
 				break; 
			
				case 5: 
				echo "'Yay new Linux nvidia drivers' - Nvidia's official correspondence with Linus Torvalds"; 
 				break; 

				case 6: 
				echo "'Upfront has always been relatively innocuous.' - George Bush, on the Invasion of Iraq"; 
 				break; 

				case 7: 
				echo "Fead the birds."; 
 				break; 

				case 8: 
				echo "Fead the birds."; 
 				break; 

				case 9: 
				echo "Fead the birds."; 
 				break; 

				case 10: 
				echo "Fead the birds."; 
 				break; 

				case 11: 
				echo "Fead the birds."; 
 				break; 
 				} 
 		?>
  </body>
</html>

