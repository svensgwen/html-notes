<!DOCTYPE html>
<html>

<head>
	<?php include_once("./includes/parts/links.php"); ?>
	<title>HTML Attributes</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<div class="main">
		<?php include_once("./includes/parts/sidebar.php"); ?>
		<?php include_once("./includes/parts/navbar.php"); ?>
		<div class="container">
			<!-- Page content -->
			<div class="content">
				<h1>HTML Attributes</h1>
				<ul>
					<li>All HTML elements can have <b>attributes</b></li>
					<li>Attributes provide <b>additional information</b> about elements</li>
					<li>Attributes are always specified in <b>the start tag</b></li>
					<li>Attributes usually come in name/value pairs like: <b>name=&quot;value&quot;</b></li>
				</ul>
				<hr>
<h2>The href Attribute</h2>
<p>The <code>&lt;a&gt;</code> tag defines a hyperlink. The 
<code>href</code> attribute specifies the URL of the page 
the link goes to:</p>
<h3>Example</h3>

<pre>
<code class="language-html">
&lt;a href=&quot;https://www.google.com&quot;&gt;Visit Google&lt;/a&gt;
</code>
</pre>
<hr>

<h2>The src Attribute</h2>
<p>The <code>&lt;img&gt;</code> tag is used to embed an image in an HTML page. 
The <code>src</code> attribute specifies the path to the image to be displayed:</p>
<h3>Example</h3>
<pre>
<code class="language-html">
&lt;img src=&quot;img_girl.jpg&quot;&gt;
</code>
</pre>

<p>There are two ways to specify the URL in the <code>src</code> attribute:</p>
<p><strong>1. Absolute URL</strong> - Links to an external image that is hosted on another website. 
<br>Example: <code> src=&quot;https://www.w3schools.com/images/img_girl.jpg&quot;</code>.</p>

<div class="note">
<p><strong>Notes:</strong> External images might be under copyright. If you do 
not get permission to use it, you may be in violation of copyright laws. In 
addition, you cannot control external images; it can suddenly be removed or 
changed.</p></div>

<p><strong>2. Relative URL</strong> - Links to an image that is hosted within 
the website. Here, the URL does not include the domain name. If the URL begins 
without a slash, it will be relative to the current page. Example: src=&quot;img_girl.jpg&quot;. 
If the URL begins with a slash, it will be relative to the domain. Example: src=&quot;/images/img_girl.jpg&quot;.</p>

<p><strong>Tip:</strong> It is almost always best to use relative URLs. They will not break if you change domain.</p>
<hr>
<h2>The width and height Attributes</h2>
<p>The <code>&lt;img&gt;</code> tag should also contain the
<code>width</code> and <code>height</code> attributes, which specifies the width and height of the image (in pixels):</p>

<h3>Example</h3>
<pre>
<code class="language-html">
&lt;img src=&quot;img_girl.jpg&quot; width=&quot;500&quot; height=&quot;600&quot;&gt;
</code>
</pre>
<hr>

<h2>The alt Attribute</h2>
<p>The required <code>alt</code> attribute for the <code>&lt;img&gt;</code> 
tag specifies an alternate text for an image, if the image for some reason cannot be displayed. 
This can be due to slow connection, or an error in the <code>src</code> attribute, 
or if the user uses a screen reader.</p>

<h3>Example</h3>
<pre>
<code class="language-html">
&lt;img src=&quot;img_girl.jpg&quot; alt=&quot;Girl with a jacket&quot;&gt;
</code>
</pre>

<p>You will learn more about images in our <a href="html_images.asp">HTML Images chapter</a>.</p>
<hr>

<h2>The style Attribute</h2>
<p>The <code>style</code> attribute is used to add styles to 
an element, such as color, font, size, and more.</p>
<h3>Example</h3>
<pre>
<code class="language-html">
&lt;p style=&quot;color:red;&quot;&gt;This is a red paragraph.&lt;/p&gt;
</code>
</pre>
<p>You will learn more about styles in our <a href="html_styles.asp">HTML Styles chapter</a>.</p>
<hr>

<h2>The lang Attribute</h2>
<p>You should always include the <code>lang</code> attribute 
inside the <code>&lt;html&gt;</code> tag, to declare the language of the Web page. 
This is meant to assist search engines and browsers.</p>
<p>The following example specifies English as the language:</p>
<pre>
<code class="language-html">
&lt;!DOCTYPE html&gt;<br>
&lt;html lang=&quot;en&quot;&gt;<br>
&lt;body&gt;
<br>...<br>
&lt;/body&gt;
<br>&lt;/html&gt;
</code>
</pre>
<p>Country codes can also be added to the language code in the <code>lang</code> 
attribute. So, the first two characters define the language of the HTML page, 
and the last two characters define the country.</p>
<p>The following example specifies English as the language and United States as the country:</p>
<pre>
<code class="language-html">
&lt;!DOCTYPE html&gt;<br>
&lt;html lang=&quot;en-US&quot;&gt;<br>
&lt;body&gt;
<br>...<br>
&lt;/body&gt;
<br>&lt;/html&gt;
</code>
</pre>
<p>You can see all the language codes in our <a href="/tags/ref_language_codes.asp">HTML Language Code Reference</a>.</p>
<br><hr>

<h2>The title Attribute</h2>
<p>The <code>title</code> attribute defines some extra information about an element.</p>
<p>The value of the title attribute will be displayed as a tooltip when you mouse over the element:</p>
<h3>Example</h3>
<pre>
<code class="language-html">
 &lt;p title="I'm a tooltip"&gt;This is a paragraph.&lt;/p&gt;
</code>
</pre>
<hr>

<h2>We Suggest: Always Use Lowercase Attributes</h2>
<p>The HTML standard does not require lowercase attribute names.</p>
<p>The title attribute (and all other attributes) can be written with uppercase or lowercase 
like <strong>title</strong> or <strong>TITLE</strong>.</p>
<p>However, W3C <strong>recommends</strong> lowercase attributes in HTML, and <strong>demands</strong> 
lowercase attributes for stricter document types like XHTML.</p>
<div class="note">
  <p>we must always use lowercase attribute names.</p>
</div><br><hr>

<h2>We Suggest: Always Quote Attribute Values</h2>
<p>The HTML standard does not require quotes around attribute values.</p>
<p>However, We <b>recommends</b> quotes in HTML, and <strong>demands</strong> quotes for 
stricter document types like XHTML.</p>
<h3>Good:</h3>
<pre>
<code class="language-html">
&lt;a href=&quot;https://www.google.com/html/&quot;&gt;Visit our HTML tutorial&lt;/a&gt;
</code>
</pre>

<h3>Bad:</h3>
<pre>
<code class="language-html">
&lt;a href=https://www.google.com/html/&gt;Visit our HTML tutorial&lt;/a&gt;
</code>
</pre>
<p>Sometimes you have to use quotes. This example will not display 
the title attribute correctly, because it contains a space:</p>

<h3>Example</h3>
<pre>
<code class="language-html">&lt;p title=About Google&gt;</div>
  <p>At W3Schools we always use quotes around attribute values.</p>
</code>
</pre>
<hr>

<h2>Single or Double Quotes?</h2>
<p>Double quotes around attribute values are the most common in HTML, but single quotes can also be used.</p>
<p>In some situations, when the attribute value itself contains double quotes, it is necessary to use single quotes:</p>
<pre>
<code class="language-html">
&lt;p title='John &quot;ShotGun&quot; Nelson'&gt;
</code>
</pre>

<p>Or vice versa:</p>

<pre>
<code class="language-html">
&lt;p title=&quot;John 'ShotGun' Nelson&quot;&gt;
</code>
</pre>
<br>

<h2>Chapter Summary</h2>
<ul>
  <li>All HTML elements can have <strong>attributes</strong></li>
  
  <li>The <code>href</code> attribute of <code> &lt;a&gt;</code> 
  specifies the URL of the page the link goes to</li>
  
  <li>The <code>src</code> attribute of <code>
  &lt;img&gt;</code> specifies the path to the image to be displayed</li>
  
  <li>The <code>width</code> and <code>height</code> attributes 
  of <code>&lt;img&gt;</code> provide size information for images</li>
  
  <li>The <code>alt</code> attribute of <code>
  &lt;img&gt;</code> provides an alternate text for an image</li>
  
  <li>The <code>style</code> attribute is used to add styles 
  to an element, such as color, font, size, and more</li>
  
  <li>The <code>lang</code> attribute 
  of the <code>&lt;html&gt;</code> tag declares the 
  language of the Web page</li>
  
  <li>The <code>title</code> attribute defines some extra 
  information about an element</li>
</ul>
<hr>
			</div>
			<!-- /End Page content -->
		</div>
	</div>
	<?php include_once("./includes/parts/scripts.php"); ?>
</body>

</html>