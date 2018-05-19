



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" >
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" >
  <title>MagickCore, C API: Cache Views @ ImageMagick</title>
  <meta name="application-name" content="ImageMagick">
  <meta name="description" content="ImageMagick® is a software suite to create, edit, compose, or convert bitmap images. It can read and write images in a variety of formats (over 200) including PNG, JPEG, JPEG-2000, GIF, WebP, Postscript, PDF, and SVG. Use ImageMagick to resize, flip, mirror, rotate, distort, shear and transform images, adjust image colors, apply various special effects, or draw text, lines, polygons, ellipses and Bézier curves.">
  <meta name="application-url" content="https://www.imagemagick.org">
  <meta name="generator" content="PHP">
  <meta name="keywords" content="magickcore, c, api:, cache, views, ImageMagick, PerlMagick, image processing, image, photo, software, Magick++, OpenMP, convert">
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
  <link href="https://www.imagemagick.org/api/cache-view.php" rel="canonical">
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
<p class="text-center"><a href="cache-view.php#AcquireAuthenticCacheView">AcquireAuthenticCacheView</a> &bull; <a href="cache-view.php#AcquireVirtualCacheView">AcquireVirtualCacheView</a> &bull; <a href="cache-view.php#CloneCacheView">CloneCacheView</a> &bull; <a href="cache-view.php#DestroyCacheView">DestroyCacheView</a> &bull; <a href="cache-view.php#GetCacheViewAuthenticPixels">GetCacheViewAuthenticPixels</a> &bull; <a href="cache-view.php#GetCacheViewAuthenticMetacontent">GetCacheViewAuthenticMetacontent</a> &bull; <a href="cache-view.php#GetCacheViewAuthenticPixelQueue">GetCacheViewAuthenticPixelQueue</a> &bull; <a href="cache-view.php#GetCacheViewColorspace">GetCacheViewColorspace</a> &bull; <a href="cache-view.php#GetCacheViewImage">GetCacheViewImage</a> &bull; <a href="cache-view.php#GetCacheViewStorageClass">GetCacheViewStorageClass</a> &bull; <a href="cache-view.php#GetCacheViewVirtualMetacontent">GetCacheViewVirtualMetacontent</a> &bull; <a href="cache-view.php#GetCacheViewVirtualPixelQueue">GetCacheViewVirtualPixelQueue</a> &bull; <a href="cache-view.php#GetCacheViewVirtualPixels">GetCacheViewVirtualPixels</a> &bull; <a href="cache-view.php#GetOneCacheViewAuthenticPixel">GetOneCacheViewAuthenticPixel</a> &bull; <a href="cache-view.php#GetOneCacheViewVirtualPixel">GetOneCacheViewVirtualPixel</a> &bull; <a href="cache-view.php#GetOneCacheViewVirtualPixelInfo">GetOneCacheViewVirtualPixelInfo</a> &bull; <a href="cache-view.php#GetOneCacheViewVirtualMethodPixel">GetOneCacheViewVirtualMethodPixel</a> &bull; <a href="cache-view.php#QueueCacheViewAuthenticPixels">QueueCacheViewAuthenticPixels</a> &bull; <a href="cache-view.php#SetCacheViewStorageClass">SetCacheViewStorageClass</a> &bull; <a href="cache-view.php#SetCacheViewVirtualPixelMethod">SetCacheViewVirtualPixelMethod</a> &bull; <a href="cache-view.php#SyncCacheViewAuthenticPixels">SyncCacheViewAuthenticPixels</a></p>

<h2><a href="http://www.imagemagick.org/api/MagickCore/cache-view_8c.html" id="AcquireAuthenticCacheView">AcquireAuthenticCacheView</a></h2>

<p>AcquireAuthenticCacheView() acquires an authentic view into the pixel cache. It always succeeds but may return a warning or informational exception.</p>

<p>The format of the AcquireAuthenticCacheView method is:</p>

<pre class="text">
CacheView *AcquireAuthenticCacheView(const Image *image,
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
<h2><a href="http://www.imagemagick.org/api/MagickCore/cache-view_8c.html" id="AcquireVirtualCacheView">AcquireVirtualCacheView</a></h2>

<p>AcquireVirtualCacheView() acquires a virtual view into the pixel cache, using the VirtualPixelMethod that is defined within the given image itself. It always succeeds but may return a warning or informational exception.</p>

<p>The format of the AcquireVirtualCacheView method is:</p>

<pre class="text">
CacheView *AcquireVirtualCacheView(const Image *image,
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
<h2><a href="http://www.imagemagick.org/api/MagickCore/cache-view_8c.html" id="CloneCacheView">CloneCacheView</a></h2>

<p>CloneCacheView()  makes an exact copy of the specified cache view.</p>

<p>The format of the CloneCacheView method is:</p>

<pre class="text">
CacheView *CloneCacheView(const CacheView *cache_view)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>cache_view</dt>
<dd>the cache view. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/cache-view_8c.html" id="DestroyCacheView">DestroyCacheView</a></h2>

<p>DestroyCacheView() destroys the specified view returned by a previous call to AcquireCacheView().</p>

<p>The format of the DestroyCacheView method is:</p>

<pre class="text">
CacheView *DestroyCacheView(CacheView *cache_view)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>cache_view</dt>
<dd>the cache view. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/cache-view_8c.html" id="GetCacheViewAuthenticPixels">GetCacheViewAuthenticPixels</a></h2>

<p>GetCacheViewAuthenticPixels() gets pixels from the in-memory or disk pixel cache as defined by the geometry parameters.   A pointer to the pixels is returned if the pixels are transferred, otherwise a NULL is returned.</p>

<p>The format of the GetCacheViewAuthenticPixels method is:</p>

<pre class="text">
Quantum *GetCacheViewAuthenticPixels(CacheView *cache_view,
  const ssize_t x,const ssize_t y,const size_t columns,
  const size_t rows,ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>cache_view</dt>
<dd>the cache view. </dd>

<dd> </dd>
<dt>x,y,columns,rows</dt>
<dd> These values define the perimeter of a region of pixels. </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/cache-view_8c.html" id="GetCacheViewAuthenticMetacontent">GetCacheViewAuthenticMetacontent</a></h2>

<p>GetCacheViewAuthenticMetacontent() returns the meta-content corresponding with the last call to SetCacheViewIndexes() or GetCacheViewAuthenticMetacontent().  The meta-content are authentic and can be updated.</p>

<p>The format of the GetCacheViewAuthenticMetacontent() method is:</p>

<pre class="text">
void *GetCacheViewAuthenticMetacontent(CacheView *cache_view)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>cache_view</dt>
<dd>the cache view. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/cache-view_8c.html" id="GetCacheViewAuthenticPixelQueue">GetCacheViewAuthenticPixelQueue</a></h2>

<p>GetCacheViewAuthenticPixelQueue() returns the pixels associated with the last call to QueueCacheViewAuthenticPixels() or GetCacheViewAuthenticPixels().  The pixels are authentic and therefore can be updated.</p>

<p>The format of the GetCacheViewAuthenticPixelQueue() method is:</p>

<pre class="text">
Quantum *GetCacheViewAuthenticPixelQueue(CacheView *cache_view)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>cache_view</dt>
<dd>the cache view. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/cache-view_8c.html" id="GetCacheViewColorspace">GetCacheViewColorspace</a></h2>

<p>GetCacheViewColorspace() returns the image colorspace associated with the specified view.</p>

<p>The format of the GetCacheViewColorspace method is:</p>

<pre class="text">
ColorspaceType GetCacheViewColorspace(const CacheView *cache_view)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>cache_view</dt>
<dd>the cache view. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/cache-view_8c.html" id="GetCacheViewImage">GetCacheViewImage</a></h2>

<p>GetCacheViewImage() returns the image associated with the specified view.</p>

<p>The format of the GetCacheViewImage method is:</p>

<pre class="text">
const Image *GetCacheViewImage(const CacheView *cache_view)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>cache_view</dt>
<dd>the cache view. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/cache-view_8c.html" id="GetCacheViewStorageClass">GetCacheViewStorageClass</a></h2>

<p>GetCacheViewStorageClass() returns the image storage class associated with the specified view.</p>

<p>The format of the GetCacheViewStorageClass method is:</p>

<pre class="text">
ClassType GetCacheViewStorageClass(const CacheView *cache_view)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>cache_view</dt>
<dd>the cache view. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/cache-view_8c.html" id="GetCacheViewVirtualMetacontent">GetCacheViewVirtualMetacontent</a></h2>

<p>GetCacheViewVirtualMetacontent() returns the meta-content corresponding with the last call to GetCacheViewVirtualMetacontent().  The meta-content is virtual and therefore cannot be updated.</p>

<p>The format of the GetCacheViewVirtualMetacontent() method is:</p>

<pre class="text">
const void *GetCacheViewVirtualMetacontent(
  const CacheView *cache_view)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>cache_view</dt>
<dd>the cache view. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/cache-view_8c.html" id="GetCacheViewVirtualPixelQueue">GetCacheViewVirtualPixelQueue</a></h2>

<p>GetCacheViewVirtualPixelQueue() returns the the pixels associated with the last call to GetCacheViewVirtualPixels().  The pixels are virtual and therefore cannot be updated.</p>

<p>The format of the GetCacheViewVirtualPixelQueue() method is:</p>

<pre class="text">
const Quantum *GetCacheViewVirtualPixelQueue(
  const CacheView *cache_view)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>cache_view</dt>
<dd>the cache view. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/cache-view_8c.html" id="GetCacheViewVirtualPixels">GetCacheViewVirtualPixels</a></h2>

<p>GetCacheViewVirtualPixels() gets virtual pixels from the in-memory or disk pixel cache as defined by the geometry parameters.   A pointer to the pixels is returned if the pixels are transferred, otherwise a NULL is returned.</p>

<p>The format of the GetCacheViewVirtualPixels method is:</p>

<pre class="text">
const Quantum *GetCacheViewVirtualPixels(
  const CacheView *cache_view,const ssize_t x,const ssize_t y,
  const size_t columns,const size_t rows,ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>cache_view</dt>
<dd>the cache view. </dd>

<dd> </dd>
<dt>x,y,columns,rows</dt>
<dd> These values define the perimeter of a region of pixels. </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/cache-view_8c.html" id="GetOneCacheViewAuthenticPixel">GetOneCacheViewAuthenticPixel</a></h2>

<p>GetOneCacheViewAuthenticPixel() returns a single pixel at the specified (x,y) location.  The image background color is returned if an error occurs.</p>

<p>The format of the GetOneCacheViewAuthenticPixel method is:</p>

<pre class="text">
MagickBooleaNType GetOneCacheViewAuthenticPixel(
  const CacheView *cache_view,const ssize_t x,const ssize_t y,
  Quantum *pixel,ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>cache_view</dt>
<dd>the cache view. </dd>

<dd> </dd>
<dt>x,y</dt>
<dd> These values define the offset of the pixel. </dd>

<dd> </dd>
<dt>pixel</dt>
<dd>return a pixel at the specified (x,y) location. </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/cache-view_8c.html" id="GetOneCacheViewVirtualPixel">GetOneCacheViewVirtualPixel</a></h2>

<p>GetOneCacheViewVirtualPixel() returns a single pixel at the specified (x,y) location.  The image background color is returned if an error occurs.  If you plan to modify the pixel, use GetOneCacheViewAuthenticPixel() instead.</p>

<p>The format of the GetOneCacheViewVirtualPixel method is:</p>

<pre class="text">
MagickBooleanType GetOneCacheViewVirtualPixel(
  const CacheView *cache_view,const ssize_t x,const ssize_t y,
  Quantum *pixel,ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>cache_view</dt>
<dd>the cache view. </dd>

<dd> </dd>
<dt>x,y</dt>
<dd> These values define the offset of the pixel. </dd>

<dd> </dd>
<dt>pixel</dt>
<dd>return a pixel at the specified (x,y) location. </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/cache-view_8c.html" id="GetOneCacheViewVirtualPixelInfo">GetOneCacheViewVirtualPixelInfo</a></h2>

<p>GetOneCacheViewVirtualPixelInfo() returns a single pixel at the specified (x,y) location.  The image background color is returned if an error occurs. If you plan to modify the pixel, use GetOneCacheViewAuthenticPixel() instead.</p>

<p>The format of the GetOneCacheViewVirtualPixelInfo method is:</p>

<pre class="text">
MagickBooleanType GetOneCacheViewVirtualPixelInfo(
  const CacheView *cache_view,const ssize_t x,const ssize_t y,
  PixelInfo *pixel,ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>cache_view</dt>
<dd>the cache view. </dd>

<dd> </dd>
<dt>x,y</dt>
<dd> These values define the offset of the pixel. </dd>

<dd> </dd>
<dt>pixel</dt>
<dd>return a pixel at the specified (x,y) location. </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/cache-view_8c.html" id="GetOneCacheViewVirtualMethodPixel">GetOneCacheViewVirtualMethodPixel</a></h2>

<p>GetOneCacheViewVirtualMethodPixel() returns a single virtual pixel at the specified (x,y) location.  The image background color is returned if an error occurs.  If you plan to modify the pixel, use GetOneCacheViewAuthenticPixel() instead.</p>

<p>The format of the GetOneCacheViewVirtualPixel method is:</p>

<pre class="text">
MagickBooleanType GetOneCacheViewVirtualMethodPixel(
  const CacheView *cache_view,
  const VirtualPixelMethod virtual_pixel_method,const ssize_t x,
  const ssize_t y,Quantum *pixel,ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>cache_view</dt>
<dd>the cache view. </dd>

<dd> </dd>
<dt>virtual_pixel_method</dt>
<dd>the virtual pixel method. </dd>

<dd> </dd>
<dt>x,y</dt>
<dd> These values define the offset of the pixel. </dd>

<dd> </dd>
<dt>pixel</dt>
<dd>return a pixel at the specified (x,y) location. </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/cache-view_8c.html" id="QueueCacheViewAuthenticPixels">QueueCacheViewAuthenticPixels</a></h2>

<p>QueueCacheViewAuthenticPixels() queues authentic pixels from the in-memory or disk pixel cache as defined by the geometry parameters.   A pointer to the pixels is returned if the pixels are transferred, otherwise a NULL is returned.</p>

<p>The format of the QueueCacheViewAuthenticPixels method is:</p>

<pre class="text">
Quantum *QueueCacheViewAuthenticPixels(CacheView *cache_view,
  const ssize_t x,const ssize_t y,const size_t columns,
  const size_t rows,ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>cache_view</dt>
<dd>the cache view. </dd>

<dd> </dd>
<dt>x,y,columns,rows</dt>
<dd> These values define the perimeter of a region of pixels. </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/cache-view_8c.html" id="SetCacheViewStorageClass">SetCacheViewStorageClass</a></h2>

<p>SetCacheViewStorageClass() sets the image storage class associated with the specified view.</p>

<p>The format of the SetCacheViewStorageClass method is:</p>

<pre class="text">
MagickBooleanType SetCacheViewStorageClass(CacheView *cache_view,
  const ClassType storage_class,ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>cache_view</dt>
<dd>the cache view. </dd>

<dd> </dd>
<dt>storage_class</dt>
<dd>the image storage class: PseudoClass or DirectClass. </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/cache-view_8c.html" id="SetCacheViewVirtualPixelMethod">SetCacheViewVirtualPixelMethod</a></h2>

<p>SetCacheViewVirtualPixelMethod() sets the virtual pixel method associated with the specified cache view.</p>

<p>The format of the SetCacheViewVirtualPixelMethod method is:</p>

<pre class="text">
MagickBooleanType SetCacheViewVirtualPixelMethod(CacheView *cache_view,
  const VirtualPixelMethod virtual_pixel_method)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>cache_view</dt>
<dd>the cache view. </dd>

<dd> </dd>
<dt>virtual_pixel_method</dt>
<dd>the virtual pixel method. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/cache-view_8c.html" id="SyncCacheViewAuthenticPixels">SyncCacheViewAuthenticPixels</a></h2>

<p>SyncCacheViewAuthenticPixels() saves the cache view pixels to the in-memory or disk cache.  It returns MagickTrue if the pixel region is flushed, otherwise MagickFalse.</p>

<p>The format of the SyncCacheViewAuthenticPixels method is:</p>

<pre class="text">
MagickBooleanType SyncCacheViewAuthenticPixels(CacheView *cache_view,
  ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>cache_view</dt>
<dd>the cache view. </dd>

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
    <a href="cache-view.php#"><img class="d-inline" id="wand" alt="And Now a Touch of Magick" width="16" height="16" src="../image/wand.ico"/></a>
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
<!-- Magick Cache 12th May 2018 17:38 -->