<html>
	<head>
		<style>
			.header{ grid-area: header; }
			.menu{ grid-area: menu; }
			.main{ grid-area: main; }
			
			.grid-container{
				display:grid;
				grid-template-areas: 'header header header header'
										'menu main main main';
				background-color: #2196F3;
				padding:10px;
			}
			
			.grid-item{
				background-color: rgba(255, 255, 255, 0.8);
				border: 1px solid black;
				text-align:center;
			}
		</style>
	</head>
	<body>
		<h1>The Basic Display</h1>
		
		<div class="grid-container">
			<div class="header grid-item"><img height="100px" width="950px" src="banner.png"></div>
			<div class="menu grid-item">
				<ul>
					<li><a href="https://www.google.com/search?hl=en&biw=1280&bih=832&tbm=isch&sa=1&ei=kjIvXuXeHd-q0PEPk_eQiAY&q=woman+yelling+at+cat+meme&oq=woman&gs_l=img.1.5.0i67l5j0j0i67l4.220464.221054..223311...0.0..0.59.310.6......0....1..gws-wiz-img.......0i131.jPQuucTIQsA&safe=active&ssui=on">best meme</a></li>
					<li><a href="https://www.google.com/search?hl=en&biw=1280&bih=832&tbm=isch&sa=1&ei=ijMvXt2rBNbJ0PEP0d-fqAs&q=good+memes&oq=good+meme&gs_l=img.1.0.0l10.15777.21439..22879...6.0..0.55.698.14......0....1..gws-wiz-img.......0i67j0i131.KGMHATFTuy4&safe=active&ssui=on">almost best meme</a></li>
					<li><a href="https://www.google.com/search?hl=en&biw=1280&bih=832&tbm=isch&sa=1&ei=7zMvXvCTN5Ta9AP8sqqQCA&q=boring+memes&oq=boring+&gs_l=img.1.0.0i67l5j0j0i67j0l3.5530.6553..8001...0.0..0.55.391.8......0....1..gws-wiz-img.......0i7i30j0i131.ht4VSVqxYU0&safe=active&ssui=on">not as good memes</a></li>
					<li><a href="https://www.google.com/search?hl=en&biw=1280&bih=832&tbm=isch&sa=1&ei=cjMvXrWAFZH29AO7toGwDw&q=worst+meme&oq=worst+meme&gs_l=img.3..0l10.16217.22447..22792...5.0..0.57.780.16......0....1..gws-wiz-img.......0i67j0i131j0i10j0i10i24.QJtL3X0o1MU&ved=0ahUKEwi1gY7Wu6TnAhURO30KHTtbAPYQ4dUDCAc&uact=5&safe=active&ssui=on">worst meme</a></li>
				</ul>
			</div>
			<div class="main grid-item">The FitnessGram™ Pacer Test is a multistage aerobic capacity test that progressively gets more difficult as it continues. The 20 meter pacer test will begin in 30 seconds. Line up at the start. The running speed starts slowly, but gets faster each minute after you hear this signal. [beep] A single lap should be completed each time you hear this sound. [ding] Remember to run in a straight line, and run as long as possible. The second time you fail to complete a lap before the sound, your test is over. The test will begin on the word start. On your mark, get ready, start.</div>
		</div>
	</body>
</html>