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
				<h1>HTML Comments</h1>
				<p>HTML comments are not displayed in the browser, but they can help document your HTML source code.</p>
				<hr>
				<h2>HTML Comment Tag</h2>
				<p>You can add comments to your HTML source by using the following syntax:</p>
<pre>
<code class="language-html">
&lt;!-- Write your comments here --&gt;
</code>
</pre>
				<p>Notice that there is an exclamation point (!) in the start tag, but not in the end tag.</p>
				<div class="note">
				<p><strong>Note:</strong> Comments are not displayed by the browser, but they can help document your HTML source code.</p>
				</div>
				<hr>

				<h2>Add Comments</h2>
				<p>With comments you can place notifications and reminders in your HTML code:</p>
				<h3>Example</h3>

<pre>
<code class="language-html">
&lt;!-- This is a comment --&gt;

&lt;p&gt;This is a paragraph.&lt;/p&gt;

&lt;!-- Remember to add more information here --&gt;
</code>
</pre>

				<hr>

				<h2>Hide Content</h2>
				<p>Comments can be used to hide content.</p>
				<p>Which can be helpful if you hide content temporarily:</p>
				<h3>Example</h3>
<pre>
<code class="language-html">
&lt;p&gt;This is a paragraph.&lt;/p&gt;

&lt;!-- &lt;p&gt;This is another paragraph &lt;/p&gt; --&gt;

&lt;p&gt;This is a paragraph too.&lt;/p&gt;
</code>
</pre>
				<p>
					You can also hide more than one line, everything between the 
					<code class="codespan">&lt;!--</code> and the 
					<code class="codespan">--></code> 
					will be hidden from the display.
				</p>
<h3>Example</h3>
<p>Hide a section of HTML code:</p>
<pre>
<code class="language-html">
&lt;p&gt;This is a paragraph.&lt;/p&gt;
&lt;!--
&lt;p&gt;Look at this cool image:&lt;/p&gt;

&lt;img border=&quot;0&quot; src=&quot;pic_trulli.jpg&quot; alt=&quot;Trulli&quot;&gt;
--&gt;
&lt;p&gt;This is a paragraph too.&lt;/p&gt;
</code>
</pre>
				<p>
					Comments are also great for debugging HTML, because you can 
					comment out HTML lines of code, one at a time, to search for errors.
				</p>
				<hr>

				<h2>Hide Inline Content</h2>
				<p>Comments can be used to hide parts in the middle of the HTML code.</p>
				<h3>Example</h3>
				<p>Hide a part of a paragaph:</p>
<pre>
<code class="language-html">
&lt;p&gt;This &lt;!-- great text --&gt; is a paragraph.&lt;/p&gt;
</code>
</pre>
				<hr>
			</div>
			<!-- /End Page content -->
		</div>
	</div>
	<?php include_once("./includes/parts/scripts.php"); ?>
</body>

</html>