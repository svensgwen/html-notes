<!DOCTYPE html>
<html>

<head>
	<?php include_once("./includes/parts/links.php"); ?>
	<title>HTML Basics</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<div class="main">
		<?php include_once("./includes/parts/sidebar.php"); ?>
		<?php include_once("./includes/parts/navbar.php"); ?>
		<div class="container">
			<!-- Page content -->
			<div class="content">
				<div class="content">
					<h1>HTML Basic Examples</h1>
					<p>In this chapter we will show some basic HTML examples.</p>
					<p>Don't worry if we use tags you have not learned about yet.</p>

					<h2>HTML Documents</h2>
					<p>
						All HTML documents must start with a document type declaration: 
						<code>&lt;!DOCTYPE html&gt;</code>.
					</p>
					<p>The HTML document itself begins with <code>&lt;html&gt;</code> and ends with <code>&lt;/html&gt;</code>.</p>
					<p>The visible part of the HTML document is between <code>&lt;body&gt;</code> and <code>&lt;/body&gt;</code>.</p>

					<h3>Example</h3>
<pre>
<code class="language-html">
&lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>
&lt;body&gt;<br><br>&lt;h1&gt;My First Heading&lt;/h1&gt;<br>
&lt;p&gt;My first paragraph.&lt;/p&gt;<br><br>&lt;/body&gt;<br>
&lt;/html&gt;
</code>
</pre>
					<hr>
					<h2>The &lt;!DOCTYPE&gt; Declaration</h2>
					<p>
						The <code>&lt;!DOCTYPE&gt;</code> declaration represents the document type, 
						and helps browsers to display web pages correctly.
					</p>
					<p>It must only appear once, at the top of the page (before any HTML tags).</p>
					<p>The <code>&lt;!DOCTYPE&gt;</code> declaration is not case sensitive.</p>
					<p>The <code>&lt;!DOCTYPE&gt;</code> declaration for HTML5 is:</p>
<pre>
<code class="language-html">
&lt;!DOCTYPE html&gt;
</code>
</pre>
					<hr>
					<h2>HTML Headings</h2>
					<p>HTML headings are defined with the <code>&lt;h1&gt;</code> to <code>&lt;h6&gt;</code> tags.</p>
					<p>
						<code>&lt;h1&gt;</code> defines the most important heading. <code>&lt;h6&gt;</code> 
						defines the least important heading:&nbsp;
					</p>

					<h3>Example</h3>
<pre>
<code class="language-html">
&lt;h1&gt;This is heading 1&lt;/h1&gt;<br>
&lt;h2&gt;This is heading 2&lt;/h2&gt;<br>
&lt;h3&gt;This is heading 3&lt;/h3&gt;
</code>
</pre>
					<hr>
					<h2>HTML Paragraphs</h2>
					<p>HTML paragraphs are defined with the <code>&lt;p&gt;</code> tag:</p>
					<h3>Example</h3>
<pre>
<code class="language-html">
&lt;p&gt;This is a paragraph.&lt;/p&gt;<br>
&lt;p&gt;This is another paragraph.&lt;/p&gt;
</code>
</pre>
					<hr>
					<h2>HTML Links</h2>
					<p>HTML links are defined with the <code>&lt;a&gt;</code> tag:</p>
					<h3>Example</h3>
<pre>
<code class="language-html">
&lt;a href=&quot;https://www.google.com&quot;&gt;This is a link&lt;/a&gt;
</code>
</pre>

					<p>The link's destination is specified in the <code>href</code> attribute.&nbsp;</p>
					<p>Attributes are used to provide additional information about HTML elements.</p>
					<p>You will learn more about attributes in a later chapter.</p>
					<hr>

					<h2>HTML Images</h2>
					<p>HTML images are defined with the <code>&lt;img&gt;</code> tag.</p>
					<p>The source file (<code>src</code>), alternative text (<code>alt</code>), 
					<code>width</code>, and <code>height</code> are provided as attributes:</p>
					<h3>Example</h3>
<pre>
<code class="language-html">
&lt;img src=&quot;w3schools.jpg&quot; alt=&quot;W3Schools.com&quot; width=&quot;104&quot; height=&quot;142&quot;&gt;
</code>
</pre>
					<hr>
					<h2>How to View HTML Source?</h2>
					<p>Have you ever seen a Web page and wondered &quot;Hey! How did they do that?&quot;</p>
					<h3>View HTML Source Code:</h3>
					<p>Right-click in an HTML page and select &quot;View Page Source&quot; (in 
					Chrome) or &quot;View Source&quot; (in Edge), or similar in other browsers. This will open a window 
					containing the HTML source code of the page.</p>
					<h3>Inspect an HTML Element:</h3>
					<p>Right-click on an element (or a blank area), and choose &quot;Inspect&quot; or 
					&quot;Inspect Element&quot; to see what elements are made up of (you will see both 
					the HTML and the CSS). You can also edit the HTML or CSS on-the-fly in the 
					Elements or Styles panel that opens.</p>
					<hr>
</div>
			</div>
			<!-- /End Page content -->
		</div>
	</div>
	<?php include_once("./includes/parts/scripts.php"); ?>
</body>

</html>