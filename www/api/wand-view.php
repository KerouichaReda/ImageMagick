



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" >
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" >
  <title>MagickWand, C API: Wand View Methods @ ImageMagick</title>
  <meta name="application-name" content="ImageMagick">
  <meta name="description" content="ImageMagick® is a software suite to create, edit, compose, or convert bitmap images. It can read and write images in a variety of formats (over 200) including PNG, JPEG, JPEG-2000, GIF, WebP, Postscript, PDF, and SVG. Use ImageMagick to resize, flip, mirror, rotate, distort, shear and transform images, adjust image colors, apply various special effects, or draw text, lines, polygons, ellipses and Bézier curves.">
  <meta name="application-url" content="https://www.imagemagick.org">
  <meta name="generator" content="PHP">
  <meta name="keywords" content="magickwc, api:, wview, methods, ImageMagick, PerlMagick, image processing, image, photo, software, Magick++, OpenMP, convert">
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
  <link href="https://www.imagemagick.org/api/wand-view.php" rel="canonical">
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
<p class="text-center"><a href="wand-view.php#CloneWandView">CloneWandView</a> &bull; <a href="wand-view.php#DestroyWandView">DestroyWandView</a> &bull; <a href="wand-view.php#DuplexTransferWandViewIterator">DuplexTransferWandViewIterator</a> &bull; <a href="wand-view.php#GetWandViewException">GetWandViewException</a> &bull; <a href="wand-view.php#GetWandViewExtent">GetWandViewExtent</a> &bull; <a href="wand-view.php#GetWandViewIterator">GetWandViewIterator</a> &bull; <a href="wand-view.php#GetWandViewPixels">GetWandViewPixels</a> &bull; <a href="wand-view.php#GetWandViewWand">GetWandViewWand</a> &bull; <a href="wand-view.php#IsWandView">IsWandView</a> &bull; <a href="wand-view.php#NewWandView">NewWandView</a> &bull; <a href="wand-view.php#NewWandViewExtent">NewWandViewExtent</a> &bull; <a href="wand-view.php#SetWandViewDescription">SetWandViewDescription</a> &bull; <a href="wand-view.php#SetWandViewIterator">SetWandViewIterator</a> &bull; <a href="wand-view.php#TransferWandViewIterator">TransferWandViewIterator</a> &bull; <a href="wand-view.php#UpdateWandViewIterator">UpdateWandViewIterator</a></p>

<h2><a href="http://www.imagemagick.org/api/MagickWand/wand-view_8c.html" id="CloneWandView">CloneWandView</a></h2>

<p>CloneWandView() makes a copy of the specified wand view.</p>

<p>The format of the CloneWandView method is:</p>

<pre class="text">
WandView *CloneWandView(const WandView *wand_view)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>wand_view</dt>
<dd>the wand view. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickWand/wand-view_8c.html" id="DestroyWandView">DestroyWandView</a></h2>

<p>DestroyWandView() deallocates memory associated with a wand view.</p>

<p>The format of the DestroyWandView method is:</p>

<pre class="text">
WandView *DestroyWandView(WandView *wand_view)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>wand_view</dt>
<dd>the wand view. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickWand/wand-view_8c.html" id="DuplexTransferWandViewIterator">DuplexTransferWandViewIterator</a></h2>

<p>DuplexTransferWandViewIterator() iterates over three wand views in parallel and calls your transfer method for each scanline of the view.  The source and duplex pixel extent is not confined to the image canvas-- that is you can include negative offsets or widths or heights that exceed the image dimension.  However, the destination wand view is confined to the image canvas-- that is no negative offsets or widths or heights that exceed the image dimension are permitted.</p>

<p>The callback signature is:</p>

<pre class="text">
MagickBooleanType DuplexTransferImageViewMethod(const WandView *source,
  const WandView *duplex,WandView *destination,const ssize_t y,
  const int thread_id,void *context)
</pre>

<p>Use this pragma if the view is not single threaded:</p>

<pre class="text">
    #pragma omp critical
</pre>

<p>to define a section of code in your callback transfer method that must be executed by a single thread at a time.</p>

<p>The format of the DuplexTransferWandViewIterator method is:</p>

<pre class="text">
MagickBooleanType DuplexTransferWandViewIterator(WandView *source,
  WandView *duplex,WandView *destination,
  DuplexTransferWandViewMethod transfer,void *context)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>source</dt>
<dd>the source wand view. </dd>

<dd> </dd>
<dt>duplex</dt>
<dd>the duplex wand view. </dd>

<dd> </dd>
<dt>destination</dt>
<dd>the destination wand view. </dd>

<dd> </dd>
<dt>transfer</dt>
<dd>the transfer callback method. </dd>

<dd> </dd>
<dt>context</dt>
<dd>the user defined context. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickWand/wand-view_8c.html" id="GetWandViewException">GetWandViewException</a></h2>

<p>GetWandViewException() returns the severity, reason, and description of any error that occurs when utilizing a wand view.</p>

<p>The format of the GetWandViewException method is:</p>

<pre class="text">
char *GetWandViewException(const WandView *wand_view,
  ExceptionType *severity)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>wand_view</dt>
<dd>the pixel wand_view. </dd>

<dd> </dd>
<dt>severity</dt>
<dd>the severity of the error is returned here. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickWand/wand-view_8c.html" id="GetWandViewExtent">GetWandViewExtent</a></h2>

<p>GetWandViewExtent() returns the wand view extent.</p>

<p>The format of the GetWandViewExtent method is:</p>

<pre class="text">
RectangleInfo GetWandViewExtent(const WandView *wand_view)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>wand_view</dt>
<dd>the wand view. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickWand/wand-view_8c.html" id="GetWandViewIterator">GetWandViewIterator</a></h2>

<p>GetWandViewIterator() iterates over the wand view in parallel and calls your get method for each scanline of the view.  The pixel extent is not confined to the image canvas-- that is you can include negative offsets or widths or heights that exceed the image dimension.  Any updates to the pixels in your callback are ignored.</p>

<p>The callback signature is:</p>

<pre class="text">
MagickBooleanType GetImageViewMethod(const WandView *source,
  const ssize_t y,const int thread_id,void *context)
</pre>

<p>Use this pragma if the view is not single threaded:</p>

<pre class="text">
    #pragma omp critical
</pre>

<p>to define a section of code in your callback get method that must be executed by a single thread at a time.</p>

<p>The format of the GetWandViewIterator method is:</p>

<pre class="text">
MagickBooleanType GetWandViewIterator(WandView *source,
  GetWandViewMethod get,void *context)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>source</dt>
<dd>the source wand view. </dd>

<dd> </dd>
<dt>get</dt>
<dd>the get callback method. </dd>

<dd> </dd>
<dt>context</dt>
<dd>the user defined context. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickWand/wand-view_8c.html" id="GetWandViewPixels">GetWandViewPixels</a></h2>

<p>GetWandViewPixels() returns the wand view pixel_wands.</p>

<p>The format of the GetWandViewPixels method is:</p>

<pre class="text">
PixelWand *GetWandViewPixels(const WandView *wand_view)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>wand_view</dt>
<dd>the wand view. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickWand/wand-view_8c.html" id="GetWandViewWand">GetWandViewWand</a></h2>

<p>GetWandViewWand() returns the magick wand associated with the wand view.</p>

<p>The format of the GetWandViewWand method is:</p>

<pre class="text">
MagickWand *GetWandViewWand(const WandView *wand_view)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>wand_view</dt>
<dd>the wand view. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickWand/wand-view_8c.html" id="IsWandView">IsWandView</a></h2>

<p>IsWandView() returns MagickTrue if the the parameter is verified as a wand view object.</p>

<p>The format of the IsWandView method is:</p>

<pre class="text">
MagickBooleanType IsWandView(const WandView *wand_view)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>wand_view</dt>
<dd>the wand view. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickWand/wand-view_8c.html" id="NewWandView">NewWandView</a></h2>

<p>NewWandView() returns a wand view required for all other methods in the Wand View API.</p>

<p>The format of the NewWandView method is:</p>

<pre class="text">
WandView *NewWandView(MagickWand *wand)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>wand</dt>
<dd>the wand. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickWand/wand-view_8c.html" id="NewWandViewExtent">NewWandViewExtent</a></h2>

<p>NewWandViewExtent() returns a wand view required for all other methods in the Wand View API.</p>

<p>The format of the NewWandViewExtent method is:</p>

<pre class="text">
WandView *NewWandViewExtent(MagickWand *wand,const ssize_t x,
  const ssize_t y,const size_t width,const size_t height)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>wand</dt>
<dd>the magick wand. </dd>

<dd> </dd>
<dt>x,y,columns,rows</dt>
<dd> These values define the perimeter of a extent of pixel_wands view. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickWand/wand-view_8c.html" id="SetWandViewDescription">SetWandViewDescription</a></h2>

<p>SetWandViewDescription() associates a description with an image view.</p>

<p>The format of the SetWandViewDescription method is:</p>

<pre class="text">
void SetWandViewDescription(WandView *image_view,const char *description)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>wand_view</dt>
<dd>the wand view. </dd>

<dd> </dd>
<dt>description</dt>
<dd>the wand view description. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickWand/wand-view_8c.html" id="SetWandViewIterator">SetWandViewIterator</a></h2>

<p>SetWandViewIterator() iterates over the wand view in parallel and calls your set method for each scanline of the view.  The pixel extent is confined to the image canvas-- that is no negative offsets or widths or heights that exceed the image dimension.  The pixels are initiallly undefined and any settings you make in the callback method are automagically synced back to your image.</p>

<p>The callback signature is:</p>

<pre class="text">
MagickBooleanType SetImageViewMethod(ImageView *destination,
  const ssize_t y,const int thread_id,void *context)
</pre>

<p>Use this pragma if the view is not single threaded:</p>

<pre class="text">
    #pragma omp critical
</pre>

<p>to define a section of code in your callback set method that must be executed by a single thread at a time.</p>

<p>The format of the SetWandViewIterator method is:</p>

<pre class="text">
MagickBooleanType SetWandViewIterator(WandView *destination,
  SetWandViewMethod set,void *context)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>destination</dt>
<dd>the wand view. </dd>

<dd> </dd>
<dt>set</dt>
<dd>the set callback method. </dd>

<dd> </dd>
<dt>context</dt>
<dd>the user defined context. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickWand/wand-view_8c.html" id="TransferWandViewIterator">TransferWandViewIterator</a></h2>

<p>TransferWandViewIterator() iterates over two wand views in parallel and calls your transfer method for each scanline of the view.  The source pixel extent is not confined to the image canvas-- that is you can include negative offsets or widths or heights that exceed the image dimension. However, the destination wand view is confined to the image canvas-- that is no negative offsets or widths or heights that exceed the image dimension are permitted.</p>

<p>The callback signature is:</p>

<pre class="text">
MagickBooleanType TransferImageViewMethod(const WandView *source,
  WandView *destination,const ssize_t y,const int thread_id,
  void *context)
</pre>

<p>Use this pragma if the view is not single threaded:</p>

<pre class="text">
    #pragma omp critical
</pre>

<p>to define a section of code in your callback transfer method that must be executed by a single thread at a time.</p>

<p>The format of the TransferWandViewIterator method is:</p>

<pre class="text">
MagickBooleanType TransferWandViewIterator(WandView *source,
  WandView *destination,TransferWandViewMethod transfer,void *context)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>source</dt>
<dd>the source wand view. </dd>

<dd> </dd>
<dt>destination</dt>
<dd>the destination wand view. </dd>

<dd> </dd>
<dt>transfer</dt>
<dd>the transfer callback method. </dd>

<dd> </dd>
<dt>context</dt>
<dd>the user defined context. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickWand/wand-view_8c.html" id="UpdateWandViewIterator">UpdateWandViewIterator</a></h2>

<p>UpdateWandViewIterator() iterates over the wand view in parallel and calls your update method for each scanline of the view.  The pixel extent is confined to the image canvas-- that is no negative offsets or widths or heights that exceed the image dimension are permitted.  Updates to pixels in your callback are automagically synced back to the image.</p>

<p>The callback signature is:</p>

<pre class="text">
MagickBooleanType UpdateImageViewMethod(WandView *source,const ssize_t y,
  const int thread_id,void *context)
</pre>

<p>Use this pragma if the view is not single threaded:</p>

<pre class="text">
    #pragma omp critical
</pre>

<p>to define a section of code in your callback update method that must be executed by a single thread at a time.</p>

<p>The format of the UpdateWandViewIterator method is:</p>

<pre class="text">
MagickBooleanType UpdateWandViewIterator(WandView *source,
  UpdateWandViewMethod update,void *context)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>source</dt>
<dd>the source wand view. </dd>

<dd> </dd>
<dt>update</dt>
<dd>the update callback method. </dd>

<dd> </dd>
<dt>context</dt>
<dd>the user defined context. </dd>

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
    <a href="wand-view.php#"><img class="d-inline" id="wand" alt="And Now a Touch of Magick" width="16" height="16" src="../image/wand.ico"/></a>
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
<!-- Magick Cache 14th May 2018 04:56 -->