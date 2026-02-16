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
				<h1>HTML Quotation and Citation Elements</h1>
				<hr>
				<p>In this chapter we will go through the
					<code>&lt;blockquote&gt;</code>,<code>&lt;q&gt;</code>,
					<code>&lt;abbr&gt;</code>,
					<code>&lt;address&gt;</code>, <code>&lt;cite&gt;</code>,
					and <code>&lt;bdo&gt;</code> HTML elements.
				</p>
				<hr>

				<h3>Example</h3>
				<div class="example">
					<p>Here is a quote from WWF's website:</p>
					<blockquote cite="http://www.worldwildlife.org/who/index.html">
						For nearly 60 years, WWF has been protecting the future of nature.
						The world's leading conservation organization,
						WWF works in 100 countries and is supported by more than one million members in the United States and
						close to five million globally.</blockquote>
				</div>
				<hr>

				<h2>HTML &lt;blockquote&gt; for Quotations</h2>
				<p>The HTML <code>&lt;blockquote&gt;</code> element defines a section that is quoted from another source.</p>
				<p>Browsers usually indent <code>&lt;blockquote&gt;</code> elements.</p>
				<h3>Example</h3>
				<div class="example">
					&lt;p&gt;Here is a quote from WWF's website:&lt;/p&gt;<br>&lt;blockquote cite=&quot;http://www.worldwildlife.org/who/index.html&quot;&gt;<br>
					For 50 years, WWF has been protecting the future of nature.<br>The world's
					leading conservation organization,<br>WWF works in 100 countries and is
					supported by<br>1.2 million members in the United States and<br>close to 5
					million globally.<br>&lt;/blockquote&gt;</div><br>
				<hr>

				<h2>HTML &lt;q&gt; for Short Quotations</h2>
				<p>The HTML <code>&lt;q&gt;</code> tag defines a short quotation.</p>
				<p>Browsers normally insert quotation marks around the quotation.</p>
				<h3>Example</h3>
				<div class="example">
					&lt;p&gt;WWF's goal is to: &lt;q&gt;Build a future where people live in harmony with
					nature.&lt;/q&gt;&lt;/p&gt;</div><br>
				<hr>

				<h2>HTML &lt;abbr&gt; for Abbreviations</h2>
				<p>The HTML <code>&lt;abbr&gt;</code> tag defines an abbreviation or an acronym, like &quot;HTML&quot;,
					&quot;CSS&quot;, "Mr.&quot;, &quot;Dr.&quot;, &quot;ASAP&quot;, &quot;ATM&quot;.</p>
				<p>Marking abbreviations can give useful information to browsers, translation systems and search-engines.</p>
				<p><b>Tip:</b> Use the global title attribute to show the description for the
					abbreviation/acronym when you mouse over the element.&nbsp;</p>
				<h3>Example</h3>
				<div class="example">
					&lt;p&gt;The &lt;abbr title=&quot;World Health Organization&quot;&gt;WHO&lt;/abbr&gt; was founded in
					1948.&lt;/p&gt;</div><br>
				<hr>

				<h2>HTML &lt;address&gt; for Contact Information</h2>
				<p>The HTML <code>&lt;address&gt;</code> tag defines the contact information for the author/owner of a document
					or an article.</p>
				<p>The contact information can be an email address, URL, physical address, phone
					number, social media handle, etc.</p>
				<p>The text in the <code>&lt;address&gt;</code> element usually renders in <i>italic,</i>
					and browsers willalways add a line break before and after the <code>&lt;address&gt;</code> element.</p>
				<h3>Example</h3>
				<div class="example">
					&lt;address&gt;<br>Written by John Doe.&lt;br&gt; <br>Visit us at:&lt;br&gt;<br>Example.com&lt;br&gt;<br>
					Box 564, Disneyland&lt;br&gt;<br>USA<br>&lt;/address&gt;</div><br>
				<hr>

				<h2>HTML &lt;cite&gt; for Work Title</h2>
				<p>The HTML <code>&lt;cite&gt;</code> tag defines the title of a
					creative work (e.g. a book, a poem, a song, a movie, a painting, a sculpture, etc.).</p>
				<p><b>Note:</b> A person's name is not the title of a work.</p>
				<p>The text in the <code>&lt;cite&gt;</code> element usually renders in <i>italic</i>.</p>
				<h3>Example</h3>
				<div class="example">
					&lt;p&gt;&lt;cite&gt;The Scream&lt;/cite&gt; by Edvard Munch. Painted in 1893.&lt;/p&gt;</div>
				<br>
				<hr>

				<h2>HTML &lt;bdo&gt; for Bi-Directional Override</h2>
				<p>BDO stands for Bi-Directional Override.</p>
				<p>The HTML <code>&lt;bdo&gt;</code> tag is used to override
					the current text direction:</p>
				<h3>Example</h3>
				<div class="example">
					&lt;bdo dir=&quot;rtl&quot;&gt;This text will be written from right to left&lt;/bdo&gt;</div>
				<br>
				<hr>


				<h2>HTML Quotation and Citation Elements</h2>
				<table class="mtab">
					<tr>
						<th style="width:20%">Tag</th>
						<th>Description</th>
					</tr>
					<tr>
						<td><a href="/tags/tag_abbr.asp">&lt;abbr&gt;</a></td>
						<td>Defines an abbreviation or acronym</td>
					</tr>
					<tr>
						<td><a href="/tags/tag_address.asp">&lt;address&gt;</a></td>
						<td>Defines contact information for the author/owner of a document</td>
					</tr>
					<tr>
						<td><a href="/tags/tag_bdo.asp">&lt;bdo&gt;</a></td>
						<td>Defines the text direction</td>
					</tr>
					<tr>
						<td><a href="/tags/tag_blockquote.asp">&lt;blockquote&gt;</a></td>
						<td> Defines a section that is quoted from another source</td>
					</tr>
					<tr>
						<td><a href="/tags/tag_cite.asp">&lt;cite&gt;</a></td>
						<td>Defines the title of a work</td>
					</tr>
					<tr>
						<td><a href="/tags/tag_q.asp">&lt;q&gt;</a></td>
						<td>Defines a short inline quotation</td>
					</tr>
				</table>
			</div>
			<!-- /End Page content -->
		</div>
	</div>
	<?php include_once("./includes/parts/scripts.php"); ?>
</body>

</html>