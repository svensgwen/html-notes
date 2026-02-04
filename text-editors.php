<!DOCTYPE html>
<html>

<head>
	<?php include_once("./includes/parts/links.php"); ?>
	<title>HTML Text Editors</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<div class="main">
		<?php include_once("./includes/parts/sidebar.php"); ?>
		<?php include_once("./includes/parts/navbar.php"); ?>
		<div class="container">
			<!-- Page content -->
			<div class="content">
				<h1>HTML Editors</h1>
				<h2>Learn HTML Using Text Editor</h2>
				<p class="intro">A simple text editor is all you need to learn HTML.</p>
				<p>Web pages can be created and modified by using professional HTML editors.</p>
				<p>However, for learning HTML we recommend a simple text editor.</p>
				<p>We believe in that using a simple text editor is a good way to learn HTML.</p>
				<p>Follow the steps below to create your first web page with Notepad or TextEdit.</p>
				<hr>
				<h2>Step 1: Open Text Editor on your OS (PC)</h2>
				<img class="screenshot" src="./assets/img/screenshots/ss-text-editor.png" alt="">
				<hr>
				<h2>Step 2: Write Some HTML</h2>
				<p>Write or copy the following HTML code into Notepad:</p>
<pre>
<code class="language-html">
&lt;!DOCTYPE html&gt;<br>
&lt;html lang="en"&gt;<br>
&lt;head&gt;<br>
&nbsp;&nbsp;&lt;meta charset="UTF-8"&gt;<br>
&nbsp;&nbsp;&lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;<br>
&nbsp;&nbsp;&lt;meta name="description" content="Basic HTML page template"&gt;<br>
&nbsp;&nbsp;&lt;meta name="author" content="Your Name"&gt;<br>
<br>
&nbsp;&nbsp;&lt;title&gt;Page Title&lt;/title&gt;<br>
<br>
&nbsp;&nbsp;&lt;!-- Favicon --&gt;<br>
&nbsp;&nbsp;&lt;link rel="icon" type="image/png" href="assets/favicon.png"&gt;<br>
<br>
&nbsp;&nbsp;&lt;!-- Stylesheets --&gt;<br>
&nbsp;&nbsp;&lt;link rel="stylesheet" href="assets/css/style.css"&gt;<br>
&lt;/head&gt;<br>
<br>
&lt;body&gt;<br>
&nbsp;&nbsp;&lt;h1&gt;This is a Heading&lt;/h1&gt;<br>
&nbsp;&nbsp;&lt;p&gt;This is a paragraph.&lt;/p&gt;<br>
<br>
&nbsp;&nbsp;&lt;!-- Scripts --&gt;<br>
&nbsp;&nbsp;&lt;script src="assets/js/main.js"&gt;&lt;/script&gt;<br>
&lt;/body&gt;<br>
&lt;/html&gt;
</code>
</pre>
				<div class="example">

				</div>

				<p><img class="screenshot" src="./assets/img/screenshots/ss-text-editor-content.png" alt=""></p>
				<hr>

				<hr>
				<h2>Step 3: Save the HTML Page</h2>
				<p>Save the file on your computer. Select <strong>File &gt; Save as</strong> in the Editor menu.</p>
				<p>Name the file <strong>&quot;index.html&quot;</strong> and set the encoding to
					<strong>UTF-8</strong> (which is the preferred encoding for HTML files).
				</p>
				<p><img class="screenshot" src="assets/img/screenshots/ss-save-file.png" alt="View in Browser"></p>

				<div class="w3-panel w3-note">
					<p><strong>Tip:</strong> You can use either .htm or .html as file extension. There is no difference, it is up to you.</p>
				</div>
				<hr>

				<h2>Step 4: View the HTML Page in Your Browser</h2>
				<p>Open the saved HTML file in your favorite browser (double click on the file,
					or right-click - and choose &quot;Open with&quot;).</p>
				<p>The result will look much like this:</p>
				<p><img class="screenshot" src="assets/img/screenshots/ss-browser-html.png" alt="View in Browser"></p>
				<hr>
			</div>
			<!-- /End Page content -->
		</div>
	</div>
	<?php include_once("./includes/parts/scripts.php"); ?>
</body>

</html>