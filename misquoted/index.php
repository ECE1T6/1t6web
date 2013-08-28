<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="/styles/main.css">
  </head>
  <body>
    <div class="container">
        <?php
            $root = $_SERVER["DOCUMENT_ROOT"];
            include_once($root . "/header.php");
        ?>
    <?php 
 			//chooses a random number 
 			$num = Rand (0,34) ; 
 
 			//starts the random quote switch loop 
 			switch ($num) 
 				{ 
 				case 0: 
 				echo "'Don't think about dicks. Don't lose yourself to dicks' - John F Kennedy, after avoiding a Russian missile strike"; 
 				break; 
 
 				case 1: 
 				echo "'My very first PC was a pentium 166, and we did some crazy shit and OC'd it to 200Mhz' - 
					Beyonce Knowles, after giving birth to first child"; 
 				break; 
 
				case 2: 
 				echo "'Whats a good linux based gui that's text based?' - LeBron James, after winning his second championship"; 
 				break; 
 
 				case 3: 
 				echo "'Is either the Hart House gym or the Athletic Centre open to us these days?' - Kanye West, 
					after having a little too much to drink"; 
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
				echo "'Why not just make the kebab? Chicken isn't that expensive' - Saddam Hussein, 
					immediately prior to being captured."; 
 				break; 

				case 8: 
				echo "'Can we opt out of half the stupid shit they're charging us for?' - PM Harper, on the Kyoto Accord"; 
 				break; 

				case 9: 
				echo "'LOL these r brilliant' - Obama, on the war in Syria"; 
 				break; 

				case 10: 
				echo "'A penis is a her; they're like ships' - Adm. Horatio Nelsion, just prior to the Battle of Trafalgar"; 
 				break; 

				case 11: 
				echo "'I am making Jerk Chicken and have mild italian sausages. Not making the Jerk chicken too hot either. 
					Got like 6-ish legs + thighs. Figure that would be enough' - 
					Christopher Columbus, immediately after discovering America."; 
 				break;
				
				case 12: 
				echo "'This shit is gold' - Abraham Lincoln, during gold rush"; 
 				break; 

				case 13: 
				echo "'Why are you doing that? What is the endgame?' - Hermann Goering, 1944"; 
 				break; 

				case 14: 
				echo "'BUT IT IS SO GOOD IT COULD NOT STAY SILENT' - Hugh Hefner, on the subject of his penis"; 
 				break; 

				case 15: 
				echo "'It was in a private convo with me, wasn't it?' - Hitler, on the treaty of Versailles."; 
 				break; 

				case 16: 
				echo "'Linux is a kernel, it annoys me a bit when people refer to it as a complete OS 
					because it's not.' - Microsoft CEO Steve Ballmer"; 
 				break; 

				case 17: 
				echo "'We figured. They're already on ebay.' - Thomas Jefferson, on slavery"; 
 				break; 

				case 18: 
				echo "'Homebrew beer is next up on the list after that' - Hitler, at Nuremburg Rally"; 
 				break; 

				case 19: 
				echo "'Yeah, earlier is better. Then I can escape.' - Kunta Kinte"; 
 				break; 

				case 20: 
				echo "'Isn't that illegal? Not that i'm complaining.' - Bernie Madoff"; 
 				break; 
			
				case 21: 
				echo "'I have this sense of sexual frustration emanating from those.' - Enrico Fermi on nuclear bombs"; 
 				break; 

				case 22: 
				echo "'My belly hurts to laugh' -- Mister Rogers's last words"; 
 				break; 

				case 23: 
				echo "'We actually have to add these to some sort of archive, for personal use if nothing else. 
					They are too good to lose.' - Vladimir Putin on feminist riots"; 
 				break; 

				case 24: 
				echo "'Prolly no negative repercussions to drinking hoegaarden alone while on codeine right?' - 
					Rob Ford, shorty before cocaine allegations"; 
 				break; 

				case 25: 
				echo "'... works smoothly as my balls on a Saturday morning.' - Steven Hawkings, on string theory"; 
 				break; 

				case 26: 
				echo "'Wheely bad joke.' - Steven Hawkings' live-in nurse."; 
 				break; 

				case 27: 
				echo "'I hear Stephen Hawking is really good at fingering Lol' - Albert Einstein, 
					when asked about Hawking's contributions to Science"; 
 				break; 

				case 28: 
				echo "'I would leave the thread at this point but I know it wouldn't save me' - 
					Lab7 C program, immediately before seg faulting"; 
 				break;

				case 29: 
				echo "'lol we should scrape the entire chat history...' - Edward Snowden"; 
 				break;  

				case 30: 
				echo "'C'mon, you know sexual frustration is my thaaang' - Vincent van Gogh"; 
 				break;  
 				
 				case 31:
 				echo "'Interesting, I've been dipping into that as well.' - Sigmund Freud, on Oedipus complex";
 				break;
 				
 				case 32:
 				echo "'I imagine the author turned into an eagle as soon as he pressed enter and then flew away' - President Ronald Reagan, on the Declaration of Independence";
 				break;
 				
 				case 33:
 				echo "'Got to think of a good person to be saying that quote...' - J.K. Rowling, while reading 50 Shades of Grey";
 				break;
 				
 				case 34:
 				echo "'That sounded better in my head...' - Hans Fritzsche, at Nuremburg Trials";
 				break;
 				
 				} 
 		?>
  </body>
</html>

