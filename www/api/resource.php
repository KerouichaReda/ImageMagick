



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" >
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" >
  <title>MagickCore, C API: Monitor or Limit Resource Consumption @ ImageMagick</title>
  <meta name="application-name" content="ImageMagick">
  <meta name="description" content="ImageMagick® is a software suite to create, edit, compose, or convert bitmap images. It can read and write images in a variety of formats (over 200) including PNG, JPEG, JPEG-2000, GIF, WebP, Postscript, PDF, and SVG. Use ImageMagick to resize, flip, mirror, rotate, distort, shear and transform images, adjust image colors, apply various special effects, or draw text, lines, polygons, ellipses and Bézier curves.">
  <meta name="application-url" content="https://www.imagemagick.org">
  <meta name="generator" content="PHP">
  <meta name="keywords" content="magickcore, c, api:, monitor, or, limit, resource, consumption, ImageMagick, PerlMagick, image processing, image, photo, software, Magick++, OpenMP, convert">
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
  <link href="https://www.imagemagick.org/api/resource.php" rel="canonical">
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
<p class="text-center"><a href="resource.php#AcquireMagickResource">AcquireMagickResource</a> &bull; <a href="resource.php#AcquireUniqueFileResource">AcquireUniqueFileResource</a> &bull; <a href="resource.php#GetMagickResource">GetMagickResource</a> &bull; <a href="resource.php#GetMagickResourceLimit">GetMagickResourceLimit</a> &bull; <a href="resource.php#ListMagickResourceInfo">ListMagickResourceInfo</a> &bull; <a href="resource.php#RelinquishMagickResource">RelinquishMagickResource</a> &bull; <a href="resource.php#RelinquishUniqueFileResource">RelinquishUniqueFileResource</a> &bull; <a href="resource.php#SetMagickResourceLimit">SetMagickResourceLimit</a></p>

<h2><a href="http://www.imagemagick.org/api/MagickCore/resource_8c.html" id="AcquireMagickResource">AcquireMagickResource</a></h2>

<p>AcquireMagickResource() acquires resources of the specified type. MagickFalse is returned if the specified resource is exhausted otherwise MagickTrue.</p>

<p>The format of the AcquireMagickResource() method is:</p>

<pre class="text">
MagickBooleanType AcquireMagickResource(const ResourceType type,
  const MagickSizeType size)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>type</dt>
<dd>the type of resource. </dd>

<dd> </dd>
<dt>size</dt>
<dd>the number of bytes needed from for this resource. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/resource_8c.html" id="AcquireUniqueFileResource">AcquireUniqueFileResource</a></h2>

<p>AcquireUniqueFileResource() returns a unique file name, and returns a file descriptor for the file open for reading and writing.</p>

<p>The format of the AcquireUniqueFileResource() method is:</p>

<pre class="text">
int AcquireUniqueFileResource(char *path)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt> path</dt>
<dd> Specifies a pointer to an array of characters.  The unique path name is returned in this array. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/resource_8c.html" id="GetMagickResource">GetMagickResource</a></h2>

<p>GetMagickResource() returns the specified resource.</p>

<p>The format of the GetMagickResource() method is:</p>

<pre class="text">
MagickSizeType GetMagickResource(const ResourceType type)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>type</dt>
<dd>the type of resource. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/resource_8c.html" id="GetMagickResourceLimit">GetMagickResourceLimit</a></h2>

<p>GetMagickResourceLimit() returns the specified resource limit.</p>

<p>The format of the GetMagickResourceLimit() method is:</p>

<pre class="text">
MagickSizeType GetMagickResourceLimit(const ResourceType type)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>type</dt>
<dd>the type of resource. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/resource_8c.html" id="ListMagickResourceInfo">ListMagickResourceInfo</a></h2>

<p>ListMagickResourceInfo() lists the resource info to a file.</p>

<p>The format of the ListMagickResourceInfo method is:</p>

<pre class="text">
MagickBooleanType ListMagickResourceInfo(FILE *file,
  ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows.</p>

<dt>file</dt>
<p>An pointer to a FILE.</p>

<dt>exception</dt>
<p>return any errors or warnings in this structure.</p>

<h2><a href="http://www.imagemagick.org/api/MagickCore/resource_8c.html" id="RelinquishMagickResource">RelinquishMagickResource</a></h2>

<p>RelinquishMagickResource() relinquishes resources of the specified type.</p>

<p>The format of the RelinquishMagickResource() method is:</p>

<pre class="text">
void RelinquishMagickResource(const ResourceType type,
  const MagickSizeType size)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>type</dt>
<dd>the type of resource. </dd>

<dd> </dd>
<dt>size</dt>
<dd>the size of the resource. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/resource_8c.html" id="RelinquishUniqueFileResource">RelinquishUniqueFileResource</a></h2>

<p>RelinquishUniqueFileResource() relinquishes a unique file resource.</p>

<p>The format of the RelinquishUniqueFileResource() method is:</p>

<pre class="text">
MagickBooleanType RelinquishUniqueFileResource(const char *path)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>name</dt>
<dd>the name of the temporary resource. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/resource_8c.html" id="SetMagickResourceLimit">SetMagickResourceLimit</a></h2>

<p>SetMagickResourceLimit() sets the limit for a particular resource.</p>

<p>The format of the SetMagickResourceLimit() method is:</p>

<pre class="text">
MagickBooleanType SetMagickResourceLimit(const ResourceType type,
  const MagickSizeType limit)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>type</dt>
<dd>the type of resource. </dd>

<dd> </dd>
<dt>limit</dt>
<dd>the maximum limit for the resource. </dd>

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
    <a href="resource.php#"><img class="d-inline" id="wand" alt="And Now a Touch of Magick" width="16" height="16" src="../image/wand.ico"/></a>
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
<!-- Magick Cache 13th May 2018 23:48 -->