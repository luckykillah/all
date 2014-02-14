<?php get_header() ?>

<header>
	<div class="wrap">
		<h1><a href="/">Title of Site</a></h1>
		<nav id="main_nav">
			<ul>
				<li><a href="#nowhere" title="Home">Home</a></li>
				<li><a href="#nowhere" title="About">About</a></li>
				<li><a href="#nowhere" title="Services">Services</a></li>
				<li><a href="#nowhere" title="Contact">Contact</a></li>
				<li><a href="#nowhere" title="Pellentesque">Pellentesque</a></li>
				<li><a href="#nowhere" title="Aliquam">Aliquam</a></li>
				<li><a href="#nowhere" title="Morbi">Morbi</a></li>
			</ul>
		</nav><!-- /nav  -->
	</div>
</header><!-- /header -->
<div class="wrap LBF">
	<section id="main">
		{ Here starts a section }
		<h1>This is an <code>h1</code> heading</h1>
		<h2>This is an <code>h2</code> heading</h2>
		<h3>This is an <code>h3</code> heading</h3>
		<h4>This is an <code>h4</code> heading</h4>
		<h5>This is an <code>h5</code> heading</h5>
		<h6>This is an <code>h6</code> heading</h6>
		
		This is some plain text.
			       
		<p>This is a <code>p</code>aragraph: senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. in turpis pulvinar facilisis. Ut felis.</p>
		
		<p>Here are some typographic elements: senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.</p>
		<p>Here is an <a href="#" target="_blank">external link</a></p>
		<h2>This is an <code>h2</code> heading in context</h2>
			       
		<ol>
		   <li>This is <code>li</code>#1 in an <code>ol</code></li>
		   <li>This is <code>li</code>#2 in an <code>ol</code></li>
		   <li>This is <code>li</code>#3 in an <code>ol</code></li>
		</ol>
		
		<ul>
		   <li>This is <code>li</code>#1 in an <code>ul</code></li>
		   <li>This is <code>li</code>#2 in an <code>ul</code></li>
		   <li>This is <code>li</code>#3 in an <code>ul</code></li>
		</ul>
		
		<blockquote>This is a block quote: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</blockquote>
		
		<h3>This is an <code>h3</code> heading in context</h3>
		
		<pre><code>
		This is some code:
		#header h1 a { 
			display: block; 
			width: 300px; 
			height: 80px; 
		}
		</code></pre>
		<article>
			{ Here starts an <code>article</code> inside the <code>section</code> }
			<form id="form_id" name="form_name" action="" method="post">
				<div>
					<label for="name">Name </label>
					<input type="text" name="Name" id="name" placeholder="Name" required/>
				</div>
				<div>
					<label for="upload">Upload </label>
					<input type="file" name="Upload" id="first" />
				</div>
				<div>
					<label for="email">Email </label>
					<input type="email" name="Email" id="email" placeholder="Email" />
				</div>
				<div>
					<label for="url">Url </label>
					<input type="url" name="Url" id="url" placeholder="Url" />
				</div>
				<div>
					<label for="tel">Tel </label>
					<input type="tel" name="Tel" id="tel" placeholder="+441234 5678 90" />
				</div>
				<div>
					<label for="number">Number </label>
					<input type="number" name="number" id="number" placeholder="1234567890" />
				</div>
				<div>
					<label for="date">Date </label>
					<input type="date" name="date" id="date" placeholder="20-09-2010" />
				</div>
				<div>
					<label for="datetime">Date/Time </label>
					<input type="datetime" name="datetime" id="datetime" placeholder="2010-10-15 T00:00Z" />
				</div>
				<div>
					<label for="range">Range </label>
					<input type="range" name="range" id="range" min="0" max="20" step="2" value="6"/>
				</div>
				<div>
					<label for="radio">Radio: </label>
					<input type="radio" name="radio" id="radio_one" value="one">One<br />
					<input type="radio" name="radio" id="radio_two" value="two">Two</p>
				</div>
				<div>
					<label for="checkbox">Checkbox: </label>
					<input type="checkbox" name="checkbox" id="checkbox_one" value="checked">Check 1<br />
					<input type="checkbox" name="checkbox" id="checkbox_two" value="checked">Check 2<br />
				</div>
				<div>
					<label for="select">Select: </label>
					<select name="select" id="select">
						<option value="alpha">Alpha</option>
						<option value="beta" selected>Beta</option>
					</select>
				</div>
				<div>
					<label for="multiselect">MultiSelect: </label>
					<select name="multiselect" id="multiselect" multiple="multiple" size="2">
						<option value="gamma">Gamma</option>
						<option value="delta">Delta</option>
						<option value="epsilon">Epsilon</option>
						<option value="zeta">Zeta</option>
					</select>
				</div>
				<div>
					<label for="textarea">Textarea: </label>
					<textarea name="textarea" id="textarea" rows="5" cols="30">Text</textarea>
				</div>
				<div>
					<input type="submit" name="submit" value="submit" />
				</div>
			</form>
		</article>
	</section><!-- /main -->

<aside id="foot">
{ Here starts the <code>aside#foot</code> }
<table>
	<thead>
		<tr>
			<th><code>th</code> #1</th>
			<th><code>th</code> #2</th>
			<th><code>th</code> #3</th>
			<th><code>th</code> #4</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><code>tbody > tr > td</code> #1</td>
			<td><code>tbody > tr > td</code> #2</td>
			<td><code>tbody > tr > td</code> #3</td>
			<td><code>tbody > tr > td</code> #4</td>
		</tr>
		<tr>
			<td><p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p></td>
			<td><p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p></td>
			<td><p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p></td>
			<td><p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p></td>
		</tr>
		<tr>
			<td><p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p></td>
			<td><p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p></td>
			<td><p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p></td>
			<td><p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p></td>
		</tr>
	</tbody>
</table>
</aside>
</div>
<?php get_footer() ?>