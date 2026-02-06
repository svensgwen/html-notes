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
				<h1>HTML Headings</h1>
				<p>HTML headings are titles or subtitles that you want to display on a webpage.</p>
<pre>
<code class="language-html">
<h2 style="font-family: arial">Heading 1</h2>
<h2 style="font-family: arial">Heading 2</h2>
<h3 style="font-family: arial">Heading 3</h3>
<h4 style="font-family: arial">Heading 4</h4>
<h5 style="font-family: arial">Heading 5</h5>
<h6 style="font-family: arial">Heading 6</h6>
</code>
</pre>
			<h2>HTML Headings</h2>
			<p>HTML headings are defined with the <code>&lt;h1&gt;</code> to <code>&lt;h6&gt;</code> tags.</p>
			<p><code>&lt;h1&gt;</code> defines the most important heading. <code>&lt;h6&gt;</code> defines the least important heading.</p>
			<h3>Example</h3>
<pre>
<code class="language-html">
&lt;h1&gt;Heading 1&lt;/h1&gt;<br>
&lt;h2&gt;Heading 2&lt;/h2&gt;<br>
&lt;h3&gt;Heading 3&lt;/h3&gt;<br>
&lt;h4&gt;Heading 4&lt;/h4&gt;<br>
&lt;h5&gt;Heading 5&lt;/h5&gt;<br>
&lt;h6&gt;Heading 6&lt;/h6&gt;
</code>
</pre>
			<div class="note">
			<p><strong>Note:</strong> Browsers automatically add some white space (a margin) before and after a heading.</p>
			</div>
			<hr>
			<h2>Headings Are Important</h2>
			<p>Search engines use the headings to index the structure and content of your web pages.</p>
			<p>Users often skim a page by its headings. It is important to use headings to show the document structure.</p>
			<p><code>&lt;h1&gt;</code> headings should be used for main headings, 
			followed by <code>&lt;h2&gt;</code> headings, then the less important 
			<code>&lt;h3&gt;</code>, and so on.</p>
			<div class="note">
			<p><strong>Note:</strong> Use HTML headings for headings only. Don't use headings to make text 
			<strong>BIG</strong> or <strong>bold</strong>.</p>
			</div>
			<hr>
			<h2>Bigger Headings</h2>
			<p>Each HTML heading has a default size. However, you can specify the size for any heading 
			with the <code>style</code> attribute, using the CSS <code>font-size</code> property:</p>
			<h3>Example</h3>
<pre>
<code class="language-html">
&lt;h1 style=&quot;font-size:60px;&quot;&gt;Heading 1&lt;/h1&gt;;
</code>
</pre>

			<h2>HTML Tag Reference</h2>
			<p>Tag reference contains additional information about these tags and their attributes.</p>
			<table class="table table-striped">
			<tr>
				<th>Tag</th>
				<th>Description</th>
			</tr>
			<tr>
				<td><a href="#">&lt;html&gt;</a></td>
				<td>Defines the root of an HTML document</td>
			</tr>
			<tr>
				<td><a href="#">&lt;body&gt;</a></td>
				<td>Defines the document's body</td>
			</tr>
			<tr>
				<td><a href="#">&lt;h1&gt; to &lt;h6&gt;</a></td>
				<td>Defines HTML headings</td>
			</tr>
			</table>
			</div>
			<!-- /End Page content -->
		</div>
	</div>
	<?php include_once("./includes/parts/scripts.php"); ?>
</body>

</html>