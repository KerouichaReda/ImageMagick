



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" >
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" >
  <title>MagickCore, C API: Get/Set Image Properties @ ImageMagick</title>
  <meta name="application-name" content="ImageMagick">
  <meta name="description" content="ImageMagick® is a software suite to create, edit, compose, or convert bitmap images. It can read and write images in a variety of formats (over 200) including PNG, JPEG, JPEG-2000, GIF, WebP, Postscript, PDF, and SVG. Use ImageMagick to resize, flip, mirror, rotate, distort, shear and transform images, adjust image colors, apply various special effects, or draw text, lines, polygons, ellipses and Bézier curves.">
  <meta name="application-url" content="https://www.imagemagick.org">
  <meta name="generator" content="PHP">
  <meta name="keywords" content="magickcore, c, api:, get/set, image, properties, ImageMagick, PerlMagick, image processing, image, photo, software, Magick++, OpenMP, convert">
  <meta name="rating" content="GENERAL">
  <meta name="robots" content="INDEX, FOLLOW">
  <meta name="generator" content="ImageMagick Studio LLC">
  <meta name="author" content="ImageMagick Studio LLC">
  <meta name="revisit-after" content="2 DAYS">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Copyright (c) 1999-2017 ImageMagick Studio LLC">
  <meta name="distribution" content="Global">
  <meta name="magick-serial" content="P131-S030410-R485315270133-P82224-A6668-G1245-1">
  <meta name="google-site-verification" content="_bMOCDpkx9ZAzBwb2kF3PRHbfUUdFj2uO8Jd1AXArz4">
  <link href="https://www.imagemagick.org/api/property.php" rel="canonical">
  <link href="../image/wand.png" rel="icon">
  <link href="../image/wand.ico" rel="shortcut icon">
  <link href="../assets/magick-css.php" rel="stylesheet">
</head>
<body>
  <header>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="../index.html"><img class="d-block" id="icon" alt="ImageMagick" width="32" height="32" src="../image/wand.ico"/></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse" id="navbarsExampleDefault" style="">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="../script/download.php">Download</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="../script/command-line-tools.php">Tools</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="../script/command-line-processing.php">Command-line</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="../script/resources.php">Resources</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="../script/develop.php">Develop</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" target="_blank" href="../discourse-server">Community</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="../script/search.php">
      <input class="form-control mr-sm-2" type="text" name="q" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="sa">Search</button>
    </form>
    </div>
  </nav>
  <div class="container">
   <script async="async" src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-3129977114552745"
         data-ad-slot="6345125851"
         data-ad-format="auto"></ins>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
    </script>

  </div>
  </header>
  <main class="container">
    <div class="magick-template">
<div class="magick-header">
<p class="text-center"><a href="property.php#CloneImageProperties">CloneImageProperties</a> &bull; <a href="property.php#DefineImageProperty">DefineImageProperty</a> &bull; <a href="property.php#DeleteImageProperty">DeleteImageProperty</a> &bull; <a href="property.php#DestroyImageProperties">DestroyImageProperties</a> &bull; <a href="property.php#FormatImageProperty">FormatImageProperty</a> &bull; <a href="property.php#GetImageProperty">GetImageProperty</a> &bull; <a href="property.php#GetNextImageProperty">GetNextImageProperty</a> &bull; <a href="property.php#InterpretImageProperties">InterpretImageProperties</a> &bull; <a href="property.php#RemoveImageProperty">RemoveImageProperty</a> &bull; <a href="property.php#ResetImagePropertyIterator">ResetImagePropertyIterator</a> &bull; <a href="property.php#SetImageProperty">SetImageProperty</a></p>

<h2><a href="http://www.imagemagick.org/api/MagickCore/property_8c.html" id="CloneImageProperties">CloneImageProperties</a></h2>

<p>CloneImageProperties() clones all the image properties to another image.</p>

<p>The format of the CloneImageProperties method is:</p>

<pre class="text">
MagickBooleanType CloneImageProperties(Image *image,
  const Image *clone_image)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>image</dt>
<dd>the image. </dd>

<dd> </dd>
<dt>clone_image</dt>
<dd>the clone image. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/property_8c.html" id="DefineImageProperty">DefineImageProperty</a></h2>

<p>DefineImageProperty() associates an assignment string of the form "key=value" with an artifact or options. It is equivelent to SetImageProperty().</p>

<p>The format of the DefineImageProperty method is:</p>

<pre class="text">
MagickBooleanType DefineImageProperty(Image *image,const char *property,
  ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>image</dt>
<dd>the image. </dd>

<dd> </dd>
<dt>property</dt>
<dd>the image property. </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/property_8c.html" id="DeleteImageProperty">DeleteImageProperty</a></h2>

<p>DeleteImageProperty() deletes an image property.</p>

<p>The format of the DeleteImageProperty method is:</p>

<pre class="text">
MagickBooleanType DeleteImageProperty(Image *image,const char *property)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>image</dt>
<dd>the image. </dd>

<dd> </dd>
<dt>property</dt>
<dd>the image property. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/property_8c.html" id="DestroyImageProperties">DestroyImageProperties</a></h2>

<p>DestroyImageProperties() destroys all properties and associated memory attached to the given image.</p>

<p>The format of the DestroyDefines method is:</p>

<pre class="text">
void DestroyImageProperties(Image *image)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>image</dt>
<dd>the image. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/property_8c.html" id="FormatImageProperty">FormatImageProperty</a></h2>

<p>FormatImageProperty() permits formatted property/value pairs to be saved as an image property.</p>

<p>The format of the FormatImageProperty method is:</p>

<pre class="text">
MagickBooleanType FormatImageProperty(Image *image,const char *property,
  const char *format,...)
</pre>

<p>A description of each parameter follows.</p>

<dt> image</dt>
<p>The image.</p>

<dt> property</dt>
<p>The attribute property.</p>

<dt> format</dt>
<p>A string describing the format to use to write the remaining arguments.</p>

<h2><a href="http://www.imagemagick.org/api/MagickCore/property_8c.html" id="GetImageProperty">GetImageProperty</a></h2>

<p>GetImageProperty() gets a value associated with an image property.</p>

<p>This includes,  profile prefixes, such as "exif:", "iptc:" and "8bim:" It does not handle non-prifile prefixes, such as "fx:", "option:", or "artifact:".</p>

<p>The returned string is stored as a properity of the same name for faster lookup later. It should NOT be freed by the caller.</p>

<p>The format of the GetImageProperty method is:</p>

<pre class="text">
const char *GetImageProperty(const Image *image,const char *key,
  ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>image</dt>
<dd>the image. </dd>

<dd> </dd>
<dt>key</dt>
<dd>the key. </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/property_8c.html" id="GetNextImageProperty">GetNextImageProperty</a></h2>

<p>GetNextImageProperty() gets the next free-form string property name.</p>

<p>The format of the GetNextImageProperty method is:</p>

<pre class="text">
char *GetNextImageProperty(const Image *image)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>image</dt>
<dd>the image. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/property_8c.html" id="InterpretImageProperties">InterpretImageProperties</a></h2>

<p>InterpretImageProperties() replaces any embedded formatting characters with the appropriate image property and returns the interpreted text.</p>

<p>This searches for and replaces \n \r \          replaced by newline, return, and percent resp. &amp;lt; &amp;gt; &amp;amp;   replaced by '&lt;', '&gt;', '&amp;' resp. replaced by percent</p>

<p>x [x]       where 'x' is a single letter properity, case sensitive). [type:name]  where 'type' a is special and known prefix. [name]       where 'name' is a specifically known attribute, calculated value, or a per-image property string name, or a per-image 'artifact' (as generated from a global option). It may contain ':' as long as the prefix is not special.</p>

<p>Single letter  substitutions will only happen if the character before the percent is NOT a number. But braced substitutions will always be performed. This prevents the typical usage of percent in a interpreted geometry argument from being substituted when the percent is a geometry flag.</p>

<p>If 'glob-expresions' ('*' or '?' characters) is used for 'name' it may be used as a search pattern to print multiple lines of "name=value\n" pairs of the associacted set of properties.</p>

<p>The returned string must be freed using DestoryString() by the caller.</p>

<p>The format of the InterpretImageProperties method is:</p>

<pre class="text">
char *InterpretImageProperties(ImageInfo *image_info,
  Image *image,const char *embed_text,ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>image_info</dt>
<dd>the image info. (required) </dd>

<dd> </dd>
<dt>image</dt>
<dd>the image. (optional) </dd>

<dd> </dd>
<dt>embed_text</dt>
<dd>the address of a character string containing the embedded formatting characters. </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/property_8c.html" id="RemoveImageProperty">RemoveImageProperty</a></h2>

<p>RemoveImageProperty() removes a property from the image and returns its value.</p>

<p>In this case the ConstantString() value returned should be freed by the caller when finished.</p>

<p>The format of the RemoveImageProperty method is:</p>

<pre class="text">
char *RemoveImageProperty(Image *image,const char *property)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>image</dt>
<dd>the image. </dd>

<dd> </dd>
<dt>property</dt>
<dd>the image property. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/property_8c.html" id="ResetImagePropertyIterator">ResetImagePropertyIterator</a></h2>

<p>ResetImagePropertyIterator() resets the image properties iterator.  Use it in conjunction with GetNextImageProperty() to iterate over all the values associated with an image property.</p>

<p>The format of the ResetImagePropertyIterator method is:</p>

<pre class="text">
ResetImagePropertyIterator(Image *image)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>image</dt>
<dd>the image. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/property_8c.html" id="SetImageProperty">SetImageProperty</a></h2>

<p>SetImageProperty() saves the given string value either to specific known attribute or to a freeform property string.</p>

<p>Attempting to set a property that is normally calculated will produce an exception.</p>

<p>The format of the SetImageProperty method is:</p>

<pre class="text">
MagickBooleanType SetImageProperty(Image *image,const char *property,
  const char *value,ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>image</dt>
<dd>the image. </dd>

<dd> </dd>
<dt>property</dt>
<dd>the image property. </dd>

<dd> </dd>
<dt>values</dt>
<dd>the image property values. </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
</div>
    </div>
  </main><!-- /.container -->
  <footer class="magick-footer">
    <p><a href="../script/security-policy.php">Security</a> •
    <a href="../script/architecture.php">Architecture</a> •
    <a href="../script/links.php">Related</a> •
     <a href="../script/sitemap.php">Sitemap</a>
    &nbsp; &nbsp;
    <a href="property.php#"><img class="d-inline" id="wand" alt="And Now a Touch of Magick" width="16" height="16" src="../image/wand.ico"/></a>
    &nbsp; &nbsp;
    <a href="http://pgp.mit.edu/pks/lookup?op=get&amp;search=0x89AB63D48277377A">Public Key</a> •
    <a href="../script/support.php">Donate</a> •
    <a href="../script/contact.php">Contact Us</a>
    <br/>
        <small>© 1999-2018 ImageMagick Studio LLC</small></p>
  </footer>

  <!-- Javascript assets -->
  <script src="../assets/magick-js.php" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="../assets/jquery.min.js"><\/script>')</script>
</body>
</html>
<!-- Magick Cache 12th May 2018 16:39 -->