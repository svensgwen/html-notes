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
				<h1>HTML Elements</h1>
				<p>The HTML <strong>element</strong> is everything from the start tag to the end tag:</p>
<pre>
<code class="language-html">
&lt;tagname&gt; Content goes here... &lt;/tagname&gt;
</code>
</pre>

				<h3>Examples of some HTML elements:</h3>
<pre>
<code class="language-html">
&lt;h1&gt;My First Heading&lt;/h1&gt;

&lt;p&gt;My first paragraph.&lt;/p&gt;
</code>
</pre>

				<table class="table table-striped">
					<tr>
						<th>Start tag</th>
						<th>Element content</th>
						<th>End tag</th>
					</tr>
					<tr>
						<td>&lt;h1&gt;</td>
						<td>My First Heading</td>
						<td>&lt;/h1&gt;</td>
					</tr>
					<tr>
						<td>&lt;p&gt;</td>
						<td>My first paragraph.</td>
						<td>&lt;/p&gt;</td>
					</tr>
					<tr>
						<td>&lt;br&gt;</td>
						<td><em>none</em></td>
						<td><em>none</em></td>
					</tr>
				</table>

			</div>
			<!-- /End Page content -->
		</div>
	</div>
	<?php include_once("./includes/parts/scripts.php"); ?>
</body>

</html>