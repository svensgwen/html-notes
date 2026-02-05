<!DOCTYPE html>
<html>

<head>
	<?php include_once("./includes/parts/links.php"); ?>
	<title>HTML Elements</title>
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
				<div class="note">
					<p>
						<strong>Note:</strong> Some HTML elements have no content (like the &lt;br&gt; 
						element). These elements are called empty elements. Empty elements do not have an end tag!
					</p>
				</div>
				<hr>
				<h2>Nested HTML Elements</h2>
				<p>HTML elements can be nested (this means that elements can contain other elements).</p>
				<p>All HTML documents consist of nested HTML elements.</p>
				<p>The following example contains four HTML elements (<code>&lt;html&gt;</code>, 
				<code>&lt;body&gt;</code>, <code>&lt;h1&gt;</code> and <code>&lt;p&gt;</code>):</p>
				
				<h3>Example</h3>
<pre>
<code class="language-html">
&lt;!DOCTYPE html&gt;<br>
&lt;html&gt;<br>&lt;body&gt;<br><br>
 &lt;h1&gt;My First Heading&lt;/h1&gt;<br>&lt;p&gt;My first paragraph.&lt;/p&gt;<br><br>
&lt;/body&gt;<br>&lt;/html&gt;
</code>
</pre>
				<p>The <code>&lt;html&gt;</code> element is the root element and it defines the whole HTML document.</p>
				<p>It has a start tag <code>&lt;html&gt;</code> and an end tag <code>&lt;/html&gt;</code>.</p>
				<p>Then, inside the <code>&lt;html&gt;</code> element there is a <code>&lt;body&gt;</code> element:</p>
<pre>
<code class="language-html">
&lt;body&gt;<br><br>
&lt;h1&gt;My First Heading&lt;/h1&gt;<br>&lt;p&gt;My first paragraph.&lt;/p&gt;<br><br>
&lt;/body&gt;
</code>
</pre>

				<p>The <code>&lt;body&gt;</code> element defines the document's body.</p>
				<p>It has a start tag <code>&lt;body&gt;</code> and an end tag <code>&lt;/body&gt;</code>.</p>
				<p>Then, inside the <code>&lt;body&gt;</code> element there are two other elements:<code>&lt;h1&gt;</code> and <code>&lt;p&gt;</code>:</p>
			
<pre>
<code class="language-html">
&lt;h1&gt;My First Heading&lt;/h1&gt;<br>&lt;p&gt;My first paragraph.&lt;/p&gt;
</code>
</pre>

				<p>The <code>&lt;h1&gt;</code> element defines a heading.</p>
				<p>It has a start tag <code>&lt;h1&gt;</code> and an end tag <code>&lt;/h1&gt;</code>:</p>
<pre>
<code class="language-html">
&lt;h1&gt;My First Heading&lt;/h1&gt;
</code>
</pre>



				<p>The <code>&lt;p&gt;</code> element defines a paragraph.</p>
				<p>It has a start tag <code>&lt;p&gt;</code> and an end tag <code>&lt;/p&gt;</code>:</p>

<pre>
<code class="language-html">
&lt;p&gt;My first paragraph.&lt;/p&gt;
</code>
</pre>

				<h2>Never Skip the End Tag</h2>
				<p>Some HTML elements will display correctly, even if you forget the end tag:</p>
				<h3>Example</h3>
<pre>
<code class="language-html">
&lt;html&gt;<br>&lt;body&gt;<br><br>
&lt;p&gt;This is a paragraph<br>
&lt;p&gt;This is a paragraph<br><br>
&lt;/body&gt;<br>&lt;/html&gt;
</code>
</pre>

				<p><strong>However, never rely on this! Unexpected results and errors may occur if you forget the end tag!</strong></p>
				<hr>

				<h2>Empty HTML Elements</h2>
				<p>HTML elements with no content are called empty elements.</p>
				<p>The <code>&lt;br&gt;</code> tag defines a line break, and is an empty element without a closing tag:</p>
				<h3>Example</h3>
<pre>
<code class="language-html">
&lt;p&gt;This is a &lt;br&gt; paragraph with a line break.&lt;/p&gt;
</code>
</pre>
<hr>

				<h2>HTML is Not Case Sensitive</h2>
				<p>HTML tags are not case sensitive: <code>&lt;P&gt;</code> means the same as <code>&lt;p&gt;</code>.</p>
				<p>The HTML standard does not require lowercase tags, but W3C
				<b>recommends</b> lowercase in HTML, and <b>demands</b> lowercase for stricter document types like XHTML.</p>
				<div class="note">
				<p>We must always use lowercase tag names.</p>
				</div>
				<hr>

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