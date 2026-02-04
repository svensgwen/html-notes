<!DOCTYPE html>
<html>

<head>
  <?php include_once("./includes/parts/links.php"); ?>
  <title>HTML Intro</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
  <div class="main">
    <?php include_once("./includes/parts/sidebar.php"); ?>
    <?php include_once("./includes/parts/navbar.php"); ?>
    <!-- Page content -->
    <div class="container">
      <div class="content">
        <h1 id="intro">HTML Introduction</h1>
        <h2>What is HTML?</h2>
        <ul>
          <li>HTML stands for Hyper Text Markup Language</li>
          <li>HTML is the standard markup language for creating Web pages</li>
          <li>HTML describes the structure of a Web page</li>
          <li>HTML consists of a series of elements</li>
          <li>HTML elements tell the browser how to display the content</li>
          <li>HTML elements label pieces of content such as "this is a heading",
            "this is a paragraph", "this is a link", etc.</li>
        </ul>

        <h4>Example:</h4>
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

        <h3>Example Explained</h3>
        <ul>
          <li>The <block>&lt!DOCTYPE html&gt</block> declaration defines that this document is an HTML5 document</li>
          <li>The <block>&lthtml&gt</block> element is the root element of an HTML page</li>
          <li>The <block>&lthead&gt</block> element contains meta information about the HTML page</li>
          <li>The <block>&lttitle&gt</block> element specifies a title for the HTML page
            (which is shown in the browser's title bar or in the page's tab)</li>
          <li>The <block>&ltbody&gt</block> element defines the document's body, and is a container for all the visible contents,
            such as headings, paragraphs, images, hyperlinks, tables, lists, etc.</li>
          <li>The <block>&lth1&gt</block> element defines a large heading</li>
          <li>The <block>&ltp&gt</block> element defines a paragraph</li>
        </ul>

        <hr>

        <h2>What is an HTML Element?</h2>
        <p>An HTML element is defined by a start tag, some content, and an end tag:</p>
        <pre>
<code class="language-html">
&lt;tagname&gt;Content goes here...&lt;/tagname&gt;
</code>
</pre>

        <p>The HTML <strong>element</strong> is everything from the start tag to the end tag:</p>

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

        <h2>Web Browsers</h2>
        <p>
          The purpose of a web browser (Chrome, Edge, Firefox, Safari) is to read HTML documents and display them
          correctly.
        </p>
        <p>A browser does not display the HTML tags, but uses them to determine how to display the document:</p>
        <p><img alt="View in Browser" src="img/img_chrome.png" class="w3-image"></p>

        <hr>

        <h2>HTML Page Structure</h2>
        <p>Below is a visualization of an HTML page structure:</p>
        <div style="width:99%;border:1px solid grey;padding:3px;margin:0;background-color:#ddd">
          &lt;html&gt;
          <div style="width:90%;border:1px solid grey;padding:3px;margin:20px">&lt;head&gt;
            <div style="width:90%;border:1px solid grey;padding:5px;margin:20px">&lt;title&gt;Page title&lt;/title&gt;</div>
            &lt;/head&gt;
          </div>
          <div style="width:90%;border:1px solid grey;padding:3px;margin:20px;background-color:#ddd">&lt;body&gt;
            <div style="width:90%;border:1px solid grey;padding:3px;margin:20px;background-color:#fff">
              <div style="width:90%;border:1px solid grey;padding:5px;margin:20px">&lt;h1&gt;This is a heading&lt;/h1&gt;</div>
              <div style="width:90%;border:1px solid grey;padding:5px;margin:20px">&lt;p&gt;This is a paragraph.&lt;/p&gt;</div>
              <div style="width:90%;border:1px solid grey;padding:5px;margin:20px">&lt;p&gt;This is another paragraph.&lt;/p&gt;</div>
            </div>
            &lt;/body&gt;
          </div>
          &lt;/html&gt;
        </div>

        <div class="note">
          <p>
            <strong>Note:</strong> The content inside the &lt;body&gt; section (the white area above)
            will be displayed in a browser. The content inside the &lt;title&gt; element will be
            shown in the browser's title bar or in the page's tab.
          </p>
        </div>

        <div class="note">
          <p>This tutorial follows the latest HTML5 standard.</p>
        </div>
      </div>
      <!-- /End Page content -->
    </div>

    <?php include_once("./includes/parts/scripts.php"); ?>
</body>

</html>