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
				<h1>HTML Paragraph</h1>
				<p>A paragraph always starts on a new line, and is usually a block of text.</p>
				<hr>
				<h2>HTML Paragraphs</h2>
				<p>The HTML <code>&lt;p&gt;</code> element defines a paragraph.</p>
				<p>
					A paragraph always starts on a new line, and browsers automatically add some white space (a margin)
					before and after a paragraph.
				</p>
				<h3>Example</h3>
<pre>
<code class="language-html">
&lt;p&gt;This is a paragraph.&lt;/p&gt;<br>
&lt;p&gt;This is another paragraph.&lt;/p&gt;
</code>
</pre>
			<hr>
			<h2>HTML Display</h2>
			<p>You cannot be sure how HTML will be displayed.</p>
			<p>Large or small screens, and resized windows will create different results. </p>
			<p>With HTML, you cannot change the display by adding extra spaces or extra lines in your HTML code.</p>
			<p>The browser will automatically remove any extra spaces and lines when the page is displayed:</p>
			<h3>Example</h3>
<pre>
<code class="language-html">
&lt;p&gt;This paragraph contains a lot of lines in the source code, but the browser ignores it.&lt;/p&gt;
&lt;p&gt;This paragraph contains&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
a lot of spaces in the source&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; code,but the 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; browser ignores
it.&lt;/p&gt;
</code>
</pre>

			<hr>
			<h2>HTML Horizontal Rules</h2>
			<p>The <code>&lt;hr&gt;</code> tag defines a thematic break in an HTML page, and is most often displayed as a horizontal rule.</p>
			<p>The <code>&lt;hr&gt;</code> element is used to separate content (or define a change) in an HTML page:</p>
			<h3>Example</h3>
<pre>
<code class="language-html">
&lt;h1&gt;This is heading 1&lt;/h1&gt;
&lt;p&gt;This is some text.&lt;/p&gt;
&lt;hr&gt;
&lt;h2&gt;This is heading 2&lt;/h2&gt;
&lt;p&gt;This is some other text.&lt;/p&gt;
&lt;hr&gt;
</code>
</pre>
			<p>The <code>&lt;hr&gt;</code> tag is an empty tag, which means that it has no end tag.</p>
			<hr>

			<h2>HTML Line Breaks</h2>
			<p>The HTML <code>&lt;br&gt;</code> element defines a line break.</p>
			<p>Use <code>&lt;br&gt;</code> if you want a line break (a new line) without starting a new paragraph:</p>
			<h3>Example</h3>
<pre>
<code class="language-html">
&lt;p&gt;This is&lt;br&gt;a paragraph&lt;br&gt;with line breaks.&lt;/p&gt;
</code>
</pre>
			<p>The <code>&lt;br&gt;</code> tag is an empty tag, which means that it has no end tag.</p>
			<hr>

			<h2>The Poem Problem</h2>
			<p>This poem will display on a single line:</p>
			<h3>Example</h3>
<pre>
<code class="language-html">
&lt;p&gt;
&nbsp; My Bonnie lies over the ocean.

&nbsp; My Bonnie lies over the sea.

&nbsp; My Bonnie lies over the ocean.

&nbsp; Oh, bring back my Bonnie to me.
&lt;/p&gt;
</code>
</pre>
			<hr>

			<h2>Solution - The HTML &lt;pre&gt; Element</h2>
			<p>The HTML <code>&lt;pre&gt;</code> element defines preformatted text.</p>
			<p>The text inside a <code>&lt;pre&gt;</code> element is displayed in a fixed-width font (usually
				Courier), and it preserves both spaces and line breaks:</p>
			<h3>Example</h3>
<pre>
<code class="language-html">
&lt;pre&gt;
&nbsp; My Bonnie lies over the ocean.

&nbsp; My Bonnie lies over the sea.

&nbsp; My Bonnie lies over the ocean.

&nbsp; Oh, bring back my Bonnie to me.
&lt;/pre&gt;
</code>
</pre>

			<hr>

			<h2>HTML Tag Reference</h2>
			<p>W3Schools' tag reference contains additional information about HTML elements and their attributes.</p>
			<table class="table table-striped">
				<tr>
					<th>Tag</th>
					<th>Description</th>
				</tr>
				<tr>
					<td><a href="/tags/tag_p.asp">&lt;p&gt;</a></td>
					<td>Defines a paragraph</td>
				</tr>
				<tr>
					<td><a href="/tags/tag_hr.asp">&lt;hr&gt;</a></td>
					<td>Defines a thematic change in the content</td>
				</tr>
				<tr>
					<td><a href="/tags/tag_br.asp">&lt;br&gt;</a></td>
					<td>Inserts a single line break</td>
				</tr>
				<tr>
					<td><a href="/tags/tag_pre.asp">&lt;pre&gt;</a></td>
					<td>Defines pre-formatted text</td>
				</tr>
			</table><br>
			<hr>
			</div>
			<!-- /End Page content -->
		</div>
	</div>
	<?php include_once("./includes/parts/scripts.php"); ?>
</body>

</html>