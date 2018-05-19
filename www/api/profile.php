



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" >
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" >
  <title>MagickCore, C API: Dealing with Image Profiles @ ImageMagick</title>
  <meta name="application-name" content="ImageMagick">
  <meta name="description" content="ImageMagick® is a software suite to create, edit, compose, or convert bitmap images. It can read and write images in a variety of formats (over 200) including PNG, JPEG, JPEG-2000, GIF, WebP, Postscript, PDF, and SVG. Use ImageMagick to resize, flip, mirror, rotate, distort, shear and transform images, adjust image colors, apply various special effects, or draw text, lines, polygons, ellipses and Bézier curves.">
  <meta name="application-url" content="https://www.imagemagick.org">
  <meta name="generator" content="PHP">
  <meta name="keywords" content="magickcore, c, api:, dealing, with, image, profiles, ImageMagick, PerlMagick, image processing, image, photo, software, Magick++, OpenMP, convert">
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
  <link href="https://www.imagemagick.org/api/profile.php" rel="canonical">
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
<p class="text-center"><a href="profile.php#CloneImageProfiles">CloneImageProfiles</a> &bull; <a href="profile.php#DeleteImageProfile">DeleteImageProfile</a> &bull; <a href="profile.php#DestroyImageProfiles">DestroyImageProfiles</a> &bull; <a href="profile.php#GetImageProfile">GetImageProfile</a> &bull; <a href="profile.php#GetNextImageProfile">GetNextImageProfile</a> &bull; <a href="profile.php#ProfileImage">ProfileImage</a> &bull; <a href="profile.php#RemoveImageProfile">RemoveImageProfile</a> &bull; <a href="profile.php#ResetImageProfileIterator">ResetImageProfileIterator</a> &bull; <a href="profile.php#SetImageProfile">SetImageProfile</a> &bull; <a href="profile.php#SyncImageProfiles">SyncImageProfiles</a></p>

<h2><a href="http://www.imagemagick.org/api/MagickCore/profile_8c.html" id="CloneImageProfiles">CloneImageProfiles</a></h2>

<p>CloneImageProfiles() clones one or more image profiles.</p>

<p>The format of the CloneImageProfiles method is:</p>

<pre class="text">
MagickBooleanType CloneImageProfiles(Image *image,
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
<h2><a href="http://www.imagemagick.org/api/MagickCore/profile_8c.html" id="DeleteImageProfile">DeleteImageProfile</a></h2>

<p>DeleteImageProfile() deletes a profile from the image by its name.</p>

<p>The format of the DeleteImageProfile method is:</p>

<pre class="text">
MagickBooleanTyupe DeleteImageProfile(Image *image,const char *name)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>image</dt>
<dd>the image. </dd>

<dd> </dd>
<dt>name</dt>
<dd>the profile name. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/profile_8c.html" id="DestroyImageProfiles">DestroyImageProfiles</a></h2>

<p>DestroyImageProfiles() releases memory associated with an image profile map.</p>

<p>The format of the DestroyProfiles method is:</p>

<pre class="text">
void DestroyImageProfiles(Image *image)
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
<h2><a href="http://www.imagemagick.org/api/MagickCore/profile_8c.html" id="GetImageProfile">GetImageProfile</a></h2>

<p>GetImageProfile() gets a profile associated with an image by name.</p>

<p>The format of the GetImageProfile method is:</p>

<pre class="text">
const StringInfo *GetImageProfile(const Image *image,const char *name)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>image</dt>
<dd>the image. </dd>

<dd> </dd>
<dt>name</dt>
<dd>the profile name. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/profile_8c.html" id="GetNextImageProfile">GetNextImageProfile</a></h2>

<p>GetNextImageProfile() gets the next profile name for an image.</p>

<p>The format of the GetNextImageProfile method is:</p>

<pre class="text">
char *GetNextImageProfile(const Image *image)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>hash_info</dt>
<dd>the hash info. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/profile_8c.html" id="ProfileImage">ProfileImage</a></h2>

<p>ProfileImage() associates, applies, or removes an ICM, IPTC, or generic profile with / to / from an image.  If the profile is NULL, it is removed from the image otherwise added or applied.  Use a name of '*' and a profile of NULL to remove all profiles from the image.</p>

<p>ICC and ICM profiles are handled as follows: If the image does not have an associated color profile, the one you provide is associated with the image and the image pixels are not transformed.  Otherwise, the colorspace transform defined by the existing and new profile are applied to the image pixels and the new profile is associated with the image.</p>

<p>The format of the ProfileImage method is:</p>

<pre class="text">
MagickBooleanType ProfileImage(Image *image,const char *name,
  const void *datum,const size_t length,const MagickBooleanType clone)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>image</dt>
<dd>the image. </dd>

<dd> </dd>
<dt>name</dt>
<dd>Name of profile to add or remove: ICC, IPTC, or generic profile. </dd>

<dd> </dd>
<dt>datum</dt>
<dd>the profile data. </dd>

<dd> </dd>
<dt>length</dt>
<dd>the length of the profile. </dd>

<dd> </dd>
<dt>clone</dt>
<dd>should be MagickFalse. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/profile_8c.html" id="RemoveImageProfile">RemoveImageProfile</a></h2>

<p>RemoveImageProfile() removes a named profile from the image and returns its value.</p>

<p>The format of the RemoveImageProfile method is:</p>

<pre class="text">
void *RemoveImageProfile(Image *image,const char *name)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>image</dt>
<dd>the image. </dd>

<dd> </dd>
<dt>name</dt>
<dd>the profile name. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/profile_8c.html" id="ResetImageProfileIterator">ResetImageProfileIterator</a></h2>

<p>ResetImageProfileIterator() resets the image profile iterator.  Use it in conjunction with GetNextImageProfile() to iterate over all the profiles associated with an image.</p>

<p>The format of the ResetImageProfileIterator method is:</p>

<pre class="text">
ResetImageProfileIterator(Image *image)
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
<h2><a href="http://www.imagemagick.org/api/MagickCore/profile_8c.html" id="SetImageProfile">SetImageProfile</a></h2>

<p>SetImageProfile() adds a named profile to the image.  If a profile with the same name already exists, it is replaced.  This method differs from the ProfileImage() method in that it does not apply CMS color profiles.</p>

<p>The format of the SetImageProfile method is:</p>

<pre class="text">
MagickBooleanType SetImageProfile(Image *image,const char *name,
  const StringInfo *profile)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>image</dt>
<dd>the image. </dd>

<dd> </dd>
<dt>name</dt>
<dd>the profile name, for example icc, exif, and 8bim (8bim is the Photoshop wrapper for iptc profiles). </dd>

<dd> </dd>
<dt>profile</dt>
<dd>A StringInfo structure that contains the named profile. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/profile_8c.html" id="SyncImageProfiles">SyncImageProfiles</a></h2>

<p>SyncImageProfiles() synchronizes image properties with the image profiles. Currently we only support updating the EXIF resolution and orientation.</p>

<p>The format of the SyncImageProfiles method is:</p>

<pre class="text">
MagickBooleanType SyncImageProfiles(Image *image)
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
</div>
    </div>
  </main><!-- /.container -->
  <footer class="magick-footer">
    <p><a href="../script/security-policy.php">Security</a> •
    <a href="../script/architecture.php">Architecture</a> •
    <a href="../script/links.php">Related</a> •
     <a href="../script/sitemap.php">Sitemap</a>
    &nbsp; &nbsp;
    <a href="profile.php#"><img class="d-inline" id="wand" alt="And Now a Touch of Magick" width="16" height="16" src="../image/wand.ico"/></a>
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
<!-- Magick Cache 12th May 2018 13:00 -->