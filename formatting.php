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
				<h1>HTML Text Formatting</h1>
				<p>HTML contains several elements for defining text with a special meaning.</p>
				<hr>

				<h3>Example</h3>
<pre>
<code class="language-html">
<p><b>This text is bold</b></p>
<p><i>This text is italic</i></p>
<p>This is<sub> subscript</sub> and <sup>superscript</sup></p>
</code>
</pre>
				<hr>

				<h2>HTML Formatting Elements</h2>
				<p>Formatting elements were designed to display special types of text:</p>
				<ul>
					<li><code>&lt;b&gt;</code> - Bold text</li>
					<li><code>&lt;strong&gt;</code> - Important text</li>
					<li><code>&lt;i&gt;</code> - Italic text</li>
					<li><code>&lt;em&gt;</code> - Emphasized text</li>
					<li><code>&lt;mark&gt;</code> - Marked text</li>
					<li><code>&lt;small&gt;</code> - Smaller text</li>
					<li><code>&lt;del&gt;</code> - Deleted text</li>
					<li><code>&lt;ins&gt;</code> - Inserted text</li>
					<li><code>&lt;sub&gt;</code> - Subscript text</li>
					<li><code>&lt;sup&gt;</code> - Superscript text</li>
				</ul>
				<hr>

				<h2>HTML &lt;b&gt; and &lt;strong&gt; Elements</h2>
				<p>The HTML <code>&lt;b&gt;</code> element defines bold text,
					without any extra importance.</p>
				<h3>Example</h3>
<pre>
<code class="language-html">
&lt;b&gt;This text is bold&lt;/b&gt;
</code>
</pre>

				<p>The HTML <code>&lt;strong&gt;</code> element defines text with strong importance.
					The content inside is typically displayed in bold.</p>
				<h3>Example</h3>
<pre>
<code class="language-html">
&lt;strong&gt;This text is important!&lt;/strong&gt;
</code>
</pre>
				<hr>

				<h2>HTML &lt;i&gt; and &lt;em&gt; Elements</h2>
				<p>The HTML <code>&lt;i&gt;</code> element defines a part of
					text in an alternate voice or mood. The content inside is typically displayed in italic.</p>
				<p><strong>Tip:</strong> The <code>&lt;i&gt;</code> tag is often used to indicate a technical term,
					a phrase from another language, a thought, a ship name, etc.</p>
				<h3>Example</h3>
<pre>
<code class="language-html">
&lt;i&gt;This text is italic&lt;/i&gt;
</code>
</pre>

				<p>The HTML <code>&lt;em&gt;</code> element defines emphasized text.
					The content inside is typically displayed in italic.</p>
				<p><strong>Tip:</strong> A screen reader will pronounce the words in <code>&lt;em&gt;</code>
					with an emphasis, using verbal stress.</p>

				<h3>Example</h3>
<pre>
<code class="language-html">
&lt;em&gt;This text is emphasized&lt;/em&gt;
</code>
</pre>
				<hr>

				<h2>HTML &lt;small&gt; Element</h2>
				<p>The HTML <code>&lt;small&gt;</code> element defines smaller text:</p>
				<h3>Example</h3>
<pre>
<code class="language-html">
&lt;small&gt;This is some smaller text.&lt;/small&gt;
</code>
</pre>
				<hr>

				<h2>HTML &lt;mark&gt; Element</h2>
				<p>The HTML <code>&lt;mark&gt;</code> element defines text that should be marked or highlighted:</p>
				<h3>Example</h3>
<pre>
<code class="language-html">
&lt;p&gt;Do not forget to buy &lt;mark&gt;milk&lt;/mark&gt; today.&lt;/p&gt;
</code>
</pre>
				<hr>


				<h2>HTML &lt;del&gt; Element</h2>
				<p>The HTML <code>&lt;del&gt;</code> element defines text
					that has been deleted from a document. Browsers will usually strike a line
					through deleted text:</p>
				<h3>Example</h3>
<pre>
<code class="language-html">
&lt;p&gt;My favorite color is &lt;del&gt;blue&lt;/del&gt; red.&lt;/p&gt;
</code>
</pre>
				<hr>

				<h2>HTML &lt;ins&gt; Element</h2>
				<p>The HTML <code>&lt;ins&gt;</code> element defines a text
					that has been inserted into a document. Browsers will usually underline inserted text:</p>
				<h3>Example</h3>
<pre>
<code class="language-html">
&lt;p&gt;My favorite color is &lt;del&gt;blue&lt;/del&gt; &lt;ins&gt;red&lt;/ins&gt;.&lt;/p&gt;
</code>
</pre>
				<hr>

				<h2>HTML &lt;sub&gt; Element</h2>
				<p>The HTML <code>&lt;sub&gt;</code> element defines
					subscript text. Subscript text appears half a character below the normal line,
					and is sometimes rendered in a smaller font. Subscript text can be used for
					chemical formulas, like H<sub>2</sub>O:</p>
				<h3>Example</h3>
<pre>
<code class="language-html">
&lt;p&gt;This is &lt;sub&gt;subscripted&lt;/sub&gt; text.&lt;/p&gt;
</code>
</pre>
				<hr>

				<h2>HTML &lt;sup&gt; Element</h2>
				<p>The HTML <code>&lt;sup&gt;</code> element defines
					superscript text. Superscript text appears half a character above the normal
					line, and is sometimes rendered in a smaller font. Superscript text can be used
					for footnotes, like WWW<sup>[1]</sup>:</p>
				<h3>Example</h3>
<pre>
<code class="language-html">
&lt;p&gt;This is &lt;sup&gt;superscripted&lt;/sup&gt; text.&lt;/p&gt;
</code>
</pre>
				<hr>

				<h2>HTML Text Formatting Elements</h2>
				<table class="table table-striped">
					<tr>
						<th style="width:20%">Tag</th>
						<th>Description</th>
					</tr>
					<tr>
						<td><a href="/tags/tag_b.asp">&lt;b&gt;</a></td>
						<td>Defines bold text</td>
					</tr>
					<tr>
						<td><a href="/tags/tag_em.asp">&lt;em&gt;</a></td>
						<td>Defines emphasized text&nbsp;</td>
					</tr>
					<tr>
						<td><a href="/tags/tag_i.asp">&lt;i&gt;</a></td>
						<td>Defines a part of text in an alternate voice or mood</td>
					</tr>
					<tr>
						<td><a href="/tags/tag_small.asp">&lt;small&gt;</a></td>
						<td>Defines smaller text</td>
					</tr>
					<tr>
						<td><a href="/tags/tag_strong.asp">&lt;strong&gt;</a></td>
						<td>Defines important text</td>
					</tr>
					<tr>
						<td><a href="/tags/tag_sub.asp">&lt;sub&gt;</a></td>
						<td>Defines subscripted text</td>
					</tr>
					<tr>
						<td><a href="/tags/tag_sup.asp">&lt;sup&gt;</a></td>
						<td>Defines superscripted text</td>
					</tr>
					<tr>
						<td><a href="/tags/tag_ins.asp">&lt;ins&gt;</a></td>
						<td>Defines inserted text</td>
					</tr>
					<tr>
						<td><a href="/tags/tag_del.asp">&lt;del&gt;</a></td>
						<td>Defines deleted text</td>
					</tr>
					<tr>
						<td><a href="/tags/tag_mark.asp">&lt;mark&gt;</a></td>
						<td>Defines marked/highlighted text</td>
					</tr>
				</table>
			</div>
			<!-- /End Page content -->
		</div>
	</div>
	<?php include_once("./includes/parts/scripts.php"); ?>
</body>

</html>