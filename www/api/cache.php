



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" >
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" >
  <title>MagickCore, C API: Get or Set Image Pixels @ ImageMagick</title>
  <meta name="application-name" content="ImageMagick">
  <meta name="description" content="ImageMagick® is a software suite to create, edit, compose, or convert bitmap images. It can read and write images in a variety of formats (over 200) including PNG, JPEG, JPEG-2000, GIF, WebP, Postscript, PDF, and SVG. Use ImageMagick to resize, flip, mirror, rotate, distort, shear and transform images, adjust image colors, apply various special effects, or draw text, lines, polygons, ellipses and Bézier curves.">
  <meta name="application-url" content="https://www.imagemagick.org">
  <meta name="generator" content="PHP">
  <meta name="keywords" content="magickcore, c, api:, get, or, set, image, pixels, ImageMagick, PerlMagick, image processing, image, photo, software, Magick++, OpenMP, convert">
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
  <link href="https://www.imagemagick.org/api/cache.php" rel="canonical">
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
<p class="text-center"><a href="cache.php#AcquirePixelCacheNexus">AcquirePixelCacheNexus</a> &bull; <a href="cache.php#AcquirePixelCachePixels">AcquirePixelCachePixels</a> &bull; <a href="cache.php#GetAuthenticMetacontent">GetAuthenticMetacontent</a> &bull; <a href="cache.php#GetAuthenticPixelQueue">GetAuthenticPixelQueue</a> &bull; <a href="cache.php#GetAuthenticPixels">GetAuthenticPixels</a> &bull; <a href="cache.php#GetOneAuthenticPixel">GetOneAuthenticPixel</a> &bull; <a href="cache.php#GetOneVirtualPixel">GetOneVirtualPixel</a> &bull; <a href="cache.php#GetOneVirtualPixelInfo">GetOneVirtualPixelInfo</a> &bull; <a href="cache.php#GetVirtualMetacontent">GetVirtualMetacontent</a> &bull; <a href="cache.php#GetVirtualPixelQueue">GetVirtualPixelQueue</a> &bull; <a href="cache.php#GetVirtualPixels">GetVirtualPixels</a> &bull; <a href="cache.php#QueueAuthenticPixels">QueueAuthenticPixels</a> &bull; <a href="cache.php#SetPixelCacheVirtualMethod">SetPixelCacheVirtualMethod</a> &bull; <a href="cache.php#SyncAuthenticPixels">SyncAuthenticPixels</a></p>

<h2><a href="http://www.imagemagick.org/api/MagickCore/cache_8c.html" id="AcquirePixelCacheNexus">AcquirePixelCacheNexus</a></h2>

<p>AcquirePixelCacheNexus() allocates the NexusInfo structure.</p>

<p>The format of the AcquirePixelCacheNexus method is:</p>

<pre class="text">
NexusInfo **AcquirePixelCacheNexus(const size_t number_threads)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>number_threads</dt>
<dd>the number of nexus threads. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/cache_8c.html" id="AcquirePixelCachePixels">AcquirePixelCachePixels</a></h2>

<p>AcquirePixelCachePixels() returns the pixels associated with the specified image.</p>

<p>The format of the AcquirePixelCachePixels() method is:</p>

<pre class="text">
void *AcquirePixelCachePixels(const Image *image,size_t *length,
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
<dt>length</dt>
<dd>the pixel cache length. </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/cache_8c.html" id="GetAuthenticMetacontent">GetAuthenticMetacontent</a></h2>

<p>GetAuthenticMetacontent() returns the authentic metacontent corresponding with the last call to QueueAuthenticPixels() or GetVirtualPixels().  NULL is returned if the associated pixels are not available.</p>

<p>The format of the GetAuthenticMetacontent() method is:</p>

<pre class="text">
void *GetAuthenticMetacontent(const Image *image)
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
<h2><a href="http://www.imagemagick.org/api/MagickCore/cache_8c.html" id="GetAuthenticPixelQueue">GetAuthenticPixelQueue</a></h2>

<p>GetAuthenticPixelQueue() returns the authentic pixels associated corresponding with the last call to QueueAuthenticPixels() or GetAuthenticPixels().</p>

<p>The format of the GetAuthenticPixelQueue() method is:</p>

<pre class="text">
Quantum *GetAuthenticPixelQueue(const Image image)
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
<h2><a href="http://www.imagemagick.org/api/MagickCore/cache_8c.html" id="GetAuthenticPixels">GetAuthenticPixels</a></h2>

<p>GetAuthenticPixels() obtains a pixel region for read/write access. If the region is successfully accessed, a pointer to a Quantum array representing the region is returned, otherwise NULL is returned.</p>

<p>The returned pointer may point to a temporary working copy of the pixels or it may point to the original pixels in memory. Performance is maximized if the selected region is part of one row, or one or more full rows, since then there is opportunity to access the pixels in-place (without a copy) if the image is in memory, or in a memory-mapped file. The returned pointer must *never* be deallocated by the user.</p>

<p>Pixels accessed via the returned pointer represent a simple array of type Quantum.  If the image has corresponding metacontent,call GetAuthenticMetacontent() after invoking GetAuthenticPixels() to obtain the meta-content corresponding to the region.  Once the Quantum array has been updated, the changes must be saved back to the underlying image using SyncAuthenticPixels() or they may be lost.</p>

<p>The format of the GetAuthenticPixels() method is:</p>

<pre class="text">
Quantum *GetAuthenticPixels(Image *image,const ssize_t x,
  const ssize_t y,const size_t columns,const size_t rows,
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
<dt>x,y,columns,rows</dt>
<dd> These values define the perimeter of a region of pixels. </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/cache_8c.html" id="GetOneAuthenticPixel">GetOneAuthenticPixel</a></h2>

<p>GetOneAuthenticPixel() returns a single pixel at the specified (x,y) location.  The image background color is returned if an error occurs.</p>

<p>The format of the GetOneAuthenticPixel() method is:</p>

<pre class="text">
MagickBooleanType GetOneAuthenticPixel(const Image image,const ssize_t x,
  const ssize_t y,Quantum *pixel,ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>image</dt>
<dd>the image. </dd>

<dd> </dd>
<dt>x,y</dt>
<dd> These values define the location of the pixel to return. </dd>

<dd> </dd>
<dt>pixel</dt>
<dd>return a pixel at the specified (x,y) location. </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/cache_8c.html" id="GetOneVirtualPixel">GetOneVirtualPixel</a></h2>

<p>GetOneVirtualPixel() returns a single virtual pixel at the specified (x,y) location.  The image background color is returned if an error occurs. If you plan to modify the pixel, use GetOneAuthenticPixel() instead.</p>

<p>The format of the GetOneVirtualPixel() method is:</p>

<pre class="text">
MagickBooleanType GetOneVirtualPixel(const Image image,const ssize_t x,
  const ssize_t y,Quantum *pixel,ExceptionInfo exception)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>image</dt>
<dd>the image. </dd>

<dd> </dd>
<dt>x,y</dt>
<dd> These values define the location of the pixel to return. </dd>

<dd> </dd>
<dt>pixel</dt>
<dd>return a pixel at the specified (x,y) location. </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/cache_8c.html" id="GetOneVirtualPixelInfo">GetOneVirtualPixelInfo</a></h2>

<p>GetOneVirtualPixelInfo() returns a single pixel at the specified (x,y) location.  The image background color is returned if an error occurs.  If you plan to modify the pixel, use GetOneAuthenticPixel() instead.</p>

<p>The format of the GetOneVirtualPixelInfo() method is:</p>

<pre class="text">
MagickBooleanType GetOneVirtualPixelInfo(const Image image,
  const VirtualPixelMethod virtual_pixel_method,const ssize_t x,
  const ssize_t y,PixelInfo *pixel,ExceptionInfo exception)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>image</dt>
<dd>the image. </dd>

<dd> </dd>
<dt>virtual_pixel_method</dt>
<dd>the virtual pixel method. </dd>

<dd> </dd>
<dt>x,y</dt>
<dd> these values define the location of the pixel to return. </dd>

<dd> </dd>
<dt>pixel</dt>
<dd>return a pixel at the specified (x,y) location. </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/cache_8c.html" id="GetVirtualMetacontent">GetVirtualMetacontent</a></h2>

<p>GetVirtualMetacontent() returns the virtual metacontent corresponding with the last call to QueueAuthenticPixels() or GetVirtualPixels().  NULL is returned if the meta-content are not available.</p>

<p>The format of the GetVirtualMetacontent() method is:</p>

<pre class="text">
const void *GetVirtualMetacontent(const Image *image)
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
<h2><a href="http://www.imagemagick.org/api/MagickCore/cache_8c.html" id="GetVirtualPixelQueue">GetVirtualPixelQueue</a></h2>

<p>GetVirtualPixelQueue() returns the virtual pixels associated corresponding with the last call to QueueAuthenticPixels() or GetVirtualPixels().</p>

<p>The format of the GetVirtualPixelQueue() method is:</p>

<pre class="text">
const Quantum *GetVirtualPixelQueue(const Image image)
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
<h2><a href="http://www.imagemagick.org/api/MagickCore/cache_8c.html" id="GetVirtualPixels">GetVirtualPixels</a></h2>

<p>GetVirtualPixels() returns an immutable pixel region. If the region is successfully accessed, a pointer to it is returned, otherwise NULL is returned.  The returned pointer may point to a temporary working copy of the pixels or it may point to the original pixels in memory. Performance is maximized if the selected region is part of one row, or one or more full rows, since there is opportunity to access the pixels in-place (without a copy) if the image is in memory, or in a memory-mapped file.  The returned pointer must *never* be deallocated by the user.</p>

<p>Pixels accessed via the returned pointer represent a simple array of type Quantum.  If the image type is CMYK or the storage class is PseudoClass, call GetAuthenticMetacontent() after invoking GetAuthenticPixels() to access the meta-content (of type void) corresponding to the the region.</p>

<p>If you plan to modify the pixels, use GetAuthenticPixels() instead.</p>

<p>Note, the GetVirtualPixels() and GetAuthenticPixels() methods are not thread- safe.  In a threaded environment, use GetCacheViewVirtualPixels() or GetCacheViewAuthenticPixels() instead.</p>

<p>The format of the GetVirtualPixels() method is:</p>

<pre class="text">
const Quantum *GetVirtualPixels(const Image *image,const ssize_t x,
  const ssize_t y,const size_t columns,const size_t rows,
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
<dt>x,y,columns,rows</dt>
<dd> These values define the perimeter of a region of pixels. </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/cache_8c.html" id="QueueAuthenticPixels">QueueAuthenticPixels</a></h2>

<p>QueueAuthenticPixels() queues a mutable pixel region.  If the region is successfully initialized a pointer to a Quantum array representing the region is returned, otherwise NULL is returned.  The returned pointer may point to a temporary working buffer for the pixels or it may point to the final location of the pixels in memory.</p>

<p>Write-only access means that any existing pixel values corresponding to the region are ignored.  This is useful if the initial image is being created from scratch, or if the existing pixel values are to be completely replaced without need to refer to their pre-existing values. The application is free to read and write the pixel buffer returned by QueueAuthenticPixels() any way it pleases. QueueAuthenticPixels() does not initialize the pixel array values. Initializing pixel array values is the application's responsibility.</p>

<p>Performance is maximized if the selected region is part of one row, or one or more full rows, since then there is opportunity to access the pixels in-place (without a copy) if the image is in memory, or in a memory-mapped file. The returned pointer must *never* be deallocated by the user.</p>

<p>Pixels accessed via the returned pointer represent a simple array of type Quantum. If the image type is CMYK or the storage class is PseudoClass, call GetAuthenticMetacontent() after invoking GetAuthenticPixels() to obtain the meta-content (of type void) corresponding to the region. Once the Quantum (and/or Quantum) array has been updated, the changes must be saved back to the underlying image using SyncAuthenticPixels() or they may be lost.</p>

<p>The format of the QueueAuthenticPixels() method is:</p>

<pre class="text">
Quantum *QueueAuthenticPixels(Image *image,const ssize_t x,
  const ssize_t y,const size_t columns,const size_t rows,
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
<dt>x,y,columns,rows</dt>
<dd> These values define the perimeter of a region of pixels. </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/cache_8c.html" id="SetPixelCacheVirtualMethod">SetPixelCacheVirtualMethod</a></h2>

<p>SetPixelCacheVirtualMethod() sets the "virtual pixels" method for the pixel cache and returns the previous setting.  A virtual pixel is any pixel access that is outside the boundaries of the image cache.</p>

<p>The format of the SetPixelCacheVirtualMethod() method is:</p>

<pre class="text">
VirtualPixelMethod SetPixelCacheVirtualMethod(Image *image,
  const VirtualPixelMethod virtual_pixel_method,ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>image</dt>
<dd>the image. </dd>

<dd> </dd>
<dt>virtual_pixel_method</dt>
<dd>choose the type of virtual pixel. </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/cache_8c.html" id="SyncAuthenticPixels">SyncAuthenticPixels</a></h2>

<p>SyncAuthenticPixels() saves the image pixels to the in-memory or disk cache. The method returns MagickTrue if the pixel region is flushed, otherwise MagickFalse.</p>

<p>The format of the SyncAuthenticPixels() method is:</p>

<pre class="text">
MagickBooleanType SyncAuthenticPixels(Image *image,
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
    <a href="cache.php#"><img class="d-inline" id="wand" alt="And Now a Touch of Magick" width="16" height="16" src="../image/wand.ico"/></a>
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
<!-- Magick Cache 12th May 2018 12:10 -->