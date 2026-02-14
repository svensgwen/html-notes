<!DOCTYPE html>
<html>

<head>
	<?php include_once("./includes/parts/links.php"); ?>
	<title>HOME</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<div class="main">
		<?php include_once("./includes/parts/sidebar.php"); ?>
		<?php include_once("./includes/parts/navbar.php"); ?>
		<div class="container">
			<!-- Page content -->
			<div class="content">
				<h1>HTML Styles</span></h1>
				<hr>
				<p class="intro">The HTML <code>style</code> attribute is used to add styles to an element,
					such as color, font, size, and more.</p>
				<hr>

				<h3>Example</h3>
				<div class="example">
					<p style="font-size:20px;color:red;">I am Red</p>
					<p style="font-size:20px;color:blue;">I am Blue</p>
					<p style="font-size:36px;margin:12px 0">I am Big</p>
				</div><br>
				<hr>

				<h2>The HTML Style Attribute</h2>
				<p>Setting the style of an HTML element, can be done with the <code>style</code> attribute.</p>
				<p>The HTML <code>style</code> attribute has the following syntax:</p>
				<div class="example">&lt;<em>tagname</em>style=&quot;<em>property</em>:<em>value;</em>&quot;&gt;</div>

				<p>The <em><strong>property</strong></em> is a CSS property. The <em><strong>value</strong></em> is a CSS
					value.</p>
				<br>
				<hr>

				<h2>Background Color</h2>
				<p>The CSS <code>background-color</code> property defines the background color for an HTML element.</p>
				<h3>Example</h3>
				<div class="example">
					<p>Set the background color for a page to powderblue:</p>
					&lt;body style=&quot;background-color:powderblue;&quot;&gt;<br><br>
					&lt;h1&gt;This is a heading&lt;/h1&gt;<br>
					&lt;p&gt;This is a paragraph.&lt;/p&gt;<br><br>
					&lt;/body&gt;
				</div><br>
				<hr>

				<h3>Example</h3>
				<div class="example">
					<p>Set background color for two different elements:</p>
					&lt;body&gt;<br><br>
					&lt;h1 style=&quot;background-color:powderblue;&quot;&gt;This is a heading&lt;/h1&gt;<br>
					&lt;p style=&quot;background-color:tomato;&quot;&gt;This is a paragraph.&lt;/p&gt;<br><br>
					&lt;/body&gt;
				</div>
				<br>
				<hr>

				<h2>Text Color</h2>
				<p>The CSS <code>color</code> property defines the text color for an HTML element:</p>

				<h3>Example</h3>
				<div class="example">
					&lt;h1 style=&quot;color:blue;&quot;&gt;This is a heading&lt;/h1&gt;<br>
					&lt;p style=&quot;color:red;&quot;&gt;This is a paragraph.&lt;/p&gt;</div><br>
				<hr>

				<h2>Fonts</h2>
				<p>The CSS <code>font-family</code> property defines the font to be used
					for an HTML element:</p>
				<h3>Example</h3>
				<div class="example">
					&lt;h1 style=&quot;font-family:verdana;&quot;&gt;This is a heading&lt;/h1&gt;<br>
					&lt;p style=&quot;font-family:courier;&quot;&gt;This is a paragraph.&lt;/p&gt;</div>
				<br>
				<hr>

				<h2>Text Size</h2>
				<p>The CSS <code>font-size</code> property defines the text size for
					an HTML element:</p>
				<h3>Example</h3>
				<div class="example">
					&lt;h1 style=&quot;font-size:300%;&quot;&gt;This is a heading&lt;/h1&gt;<br>&lt;p
					style=&quot;font-size:160%;&quot;&gt;This is a paragraph.&lt;/p&gt;</div><br>
				<hr>

				<h2>Text Alignment</h2>
				<p>The CSS <code>text-align</code> property defines the horizontal text alignment for an HTML element:</p>
				<h3>Example</h3>
				<div class="example">

					&lt;h1 style=&quot;text-align:center;&quot;&gt;Centered Heading&lt;/h1&gt;<br>
					&lt;p style=&quot;text-align:center;&quot;&gt;Centered paragraph.&lt;/p&gt;</div><br>
				<hr>

				<h2>Chapter Summary</h2>
				<ul>
					<li>Use the <code>style</code> attribute for styling HTML elements</li>
					<li>Use <code>background-color</code> for background color</li>
					<li>Use <code>color</code> for text colors</li>
					<li>Use <code>font-family</code> for text fonts</li>
					<li>Use <code>font-size</code> for text sizes</li>
					<li>Use <code>text-align</code> for text alignment</li>
				</ul><br>
				<hr>
			</div>
			<!-- /End Page content -->
		</div>
	</div>
	<?php include_once("./includes/parts/scripts.php"); ?>
</body>

</html>