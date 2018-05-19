



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" >
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" >
  <title>MagickCore, C API: Loadable Modules @ ImageMagick</title>
  <meta name="application-name" content="ImageMagick">
  <meta name="description" content="ImageMagick® is a software suite to create, edit, compose, or convert bitmap images. It can read and write images in a variety of formats (over 200) including PNG, JPEG, JPEG-2000, GIF, WebP, Postscript, PDF, and SVG. Use ImageMagick to resize, flip, mirror, rotate, distort, shear and transform images, adjust image colors, apply various special effects, or draw text, lines, polygons, ellipses and Bézier curves.">
  <meta name="application-url" content="https://www.imagemagick.org">
  <meta name="generator" content="PHP">
  <meta name="keywords" content="magickcore, c, api:, loadable, modules, ImageMagick, PerlMagick, image processing, image, photo, software, Magick++, OpenMP, convert">
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
  <link href="https://www.imagemagick.org/api/module.php" rel="canonical">
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
<p class="text-center"><a href="module.php#AcquireModuleInfo">AcquireModuleInfo</a> &bull; <a href="module.php#DestroyModuleList">DestroyModuleList</a> &bull; <a href="module.php#GetModuleInfo">GetModuleInfo</a> &bull; <a href="module.php#GetModuleInfoList">GetModuleInfoList</a> &bull; <a href="module.php#GetModuleList">GetModuleList</a> &bull; <a href="module.php#GetMagickModulePath">GetMagickModulePath</a> &bull; <a href="module.php#IsModuleTreeInstantiated">IsModuleTreeInstantiated</a> &bull; <a href="module.php#InvokeDynamicImageFilter">InvokeDynamicImageFilter</a> &bull; <a href="module.php#ListModuleInfo">ListModuleInfo</a> &bull; <a href="module.php#OpenModule">OpenModule</a> &bull; <a href="module.php#OpenModules">OpenModules</a> &bull; <a href="module.php#RegisterModule">RegisterModule</a> &bull; <a href="module.php#TagToCoderModuleName">TagToCoderModuleName</a> &bull; <a href="module.php#TagToFilterModuleName">TagToFilterModuleName</a> &bull; <a href="module.php#TagToModuleName">TagToModuleName</a> &bull; <a href="module.php#UnregisterModule">UnregisterModule</a></p>

<h2><a href="http://www.imagemagick.org/api/MagickCore/module_8c.html" id="AcquireModuleInfo">AcquireModuleInfo</a></h2>

<p>AcquireModuleInfo() allocates the ModuleInfo structure.</p>

<p>The format of the AcquireModuleInfo method is:</p>

<pre class="text">
ModuleInfo *AcquireModuleInfo(const char *path,const char *tag)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>path</dt>
<dd>the path associated with the tag. </dd>

<dd> </dd>
<dt>tag</dt>
<dd>a character string that represents the image format we are looking for. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/module_8c.html" id="DestroyModuleList">DestroyModuleList</a></h2>

<p>DestroyModuleList() unregisters any previously loaded modules and exits the module loaded environment.</p>

<p>The format of the DestroyModuleList module is:</p>

<pre class="text">
void DestroyModuleList(void)
</pre>

<h2><a href="http://www.imagemagick.org/api/MagickCore/module_8c.html" id="GetModuleInfo">GetModuleInfo</a></h2>

<p>GetModuleInfo() returns a pointer to a ModuleInfo structure that matches the specified tag.  If tag is NULL, the head of the module list is returned. If no modules are loaded, or the requested module is not found, NULL is returned.</p>

<p>The format of the GetModuleInfo module is:</p>

<pre class="text">
ModuleInfo *GetModuleInfo(const char *tag,ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>tag</dt>
<dd>a character string that represents the image format we are looking for. </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/module_8c.html" id="GetModuleInfoList">GetModuleInfoList</a></h2>

<p>GetModuleInfoList() returns any modules that match the specified pattern.</p>

<p>The format of the GetModuleInfoList function is:</p>

<pre class="text">
const ModuleInfo **GetModuleInfoList(const char *pattern,
  size_t *number_modules,ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>pattern</dt>
<dd>Specifies a pointer to a text string containing a pattern. </dd>

<dd> </dd>
<dt>number_modules</dt>
<dd> This integer returns the number of modules in the list. </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/module_8c.html" id="GetModuleList">GetModuleList</a></h2>

<p>GetModuleList() returns any image format modules that match the specified pattern.</p>

<p>The format of the GetModuleList function is:</p>

<pre class="text">
char **GetModuleList(const char *pattern,const MagickModuleType type,
  size_t *number_modules,ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>pattern</dt>
<dd>Specifies a pointer to a text string containing a pattern. </dd>

<dd> </dd>
<dt>type</dt>
<dd>choose from MagickImageCoderModule or MagickImageFilterModule. </dd>

<dd> </dd>
<dt>number_modules</dt>
<dd> This integer returns the number of modules in the list. </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/module_8c.html" id="GetMagickModulePath">GetMagickModulePath</a></h2>

<p>GetMagickModulePath() finds a module with the specified module type and filename.</p>

<p>The format of the GetMagickModulePath module is:</p>

<pre class="text">
MagickBooleanType GetMagickModulePath(const char *filename,
  MagickModuleType module_type,char *path,ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>filename</dt>
<dd>the module file name. </dd>

<dd> </dd>
<dt>module_type</dt>
<dd>the module type: MagickImageCoderModule or MagickImageFilterModule. </dd>

<dd> </dd>
<dt>path</dt>
<dd>the path associated with the filename. </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/module_8c.html" id="IsModuleTreeInstantiated">IsModuleTreeInstantiated</a></h2>

<p>IsModuleTreeInstantiated() determines if the module tree is instantiated. If not, it instantiates the tree and returns it.</p>

<p>The format of the IsModuleTreeInstantiated() method is:</p>

<pre class="text">
IsModuleTreeInstantiated()
</pre>

<h2><a href="http://www.imagemagick.org/api/MagickCore/module_8c.html" id="InvokeDynamicImageFilter">InvokeDynamicImageFilter</a></h2>

<p>InvokeDynamicImageFilter() invokes a dynamic image filter.</p>

<p>The format of the InvokeDynamicImageFilter module is:</p>

<pre class="text">
MagickBooleanType InvokeDynamicImageFilter(const char *tag,Image **image,
  const int argc,const char **argv,ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>tag</dt>
<dd>a character string that represents the name of the particular module. </dd>

<dd> </dd>
<dt>image</dt>
<dd>the image. </dd>

<dd> </dd>
<dt>argc</dt>
<dd>a pointer to an integer describing the number of elements in the argument vector. </dd>

<dd> </dd>
<dt>argv</dt>
<dd>a pointer to a text array containing the command line arguments. </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/module_8c.html" id="ListModuleInfo">ListModuleInfo</a></h2>

<p>ListModuleInfo() lists the module info to a file.</p>

<p>The format of the ListModuleInfo module is:</p>

<pre class="text">
MagickBooleanType ListModuleInfo(FILE *file,ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows.</p>

<dt>file</dt>
<p>An pointer to a FILE.</p>

<dt>exception</dt>
<p>return any errors or warnings in this structure.</p>

<h2><a href="http://www.imagemagick.org/api/MagickCore/module_8c.html" id="OpenModule">OpenModule</a></h2>

<p>OpenModule() loads a module, and invokes its registration module.  It returns MagickTrue on success, and MagickFalse if there is an error.</p>

<p>The format of the OpenModule module is:</p>

<pre class="text">
MagickBooleanType OpenModule(const char *module,ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>module</dt>
<dd>a character string that indicates the module to load. </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/module_8c.html" id="OpenModules">OpenModules</a></h2>

<p>OpenModules() loads all available modules.</p>

<p>The format of the OpenModules module is:</p>

<pre class="text">
MagickBooleanType OpenModules(ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/module_8c.html" id="RegisterModule">RegisterModule</a></h2>

<p>RegisterModule() adds an entry to the module list.  It returns a pointer to the registered entry on success.</p>

<p>The format of the RegisterModule module is:</p>

<pre class="text">
ModuleInfo *RegisterModule(const ModuleInfo *module_info,
  ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>info</dt>
<dd>a pointer to the registered entry is returned. </dd>

<dd> </dd>
<dt>module_info</dt>
<dd>a pointer to the ModuleInfo structure to register. </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/module_8c.html" id="TagToCoderModuleName">TagToCoderModuleName</a></h2>

<p>TagToCoderModuleName() munges a module tag and obtains the filename of the corresponding module.</p>

<p>The format of the TagToCoderModuleName module is:</p>

<pre class="text">
char *TagToCoderModuleName(const char *tag,char *name)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>tag</dt>
<dd>a character string representing the module tag. </dd>

<dd> </dd>
<dt>name</dt>
<dd>return the module name here. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/module_8c.html" id="TagToFilterModuleName">TagToFilterModuleName</a></h2>

<p>TagToFilterModuleName() munges a module tag and returns the filename of the corresponding filter module.</p>

<p>The format of the TagToFilterModuleName module is:</p>

<pre class="text">
void TagToFilterModuleName(const char *tag,char name)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>tag</dt>
<dd>a character string representing the module tag. </dd>

<dd> </dd>
<dt>name</dt>
<dd>return the filter name here. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/module_8c.html" id="TagToModuleName">TagToModuleName</a></h2>

<p>TagToModuleName() munges the module tag name and returns an upper-case tag name as the input string, and a user-provided format.</p>

<p>The format of the TagToModuleName module is:</p>

<pre class="text">
TagToModuleName(const char *tag,const char *format,char *module)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>tag</dt>
<dd>the module tag. </dd>

<dd> </dd>
<dt>format</dt>
<dd>a sprintf-compatible format string containing s where the upper-case tag name is to be inserted. </dd>

<dd> </dd>
<dt>module</dt>
<dd>pointer to a destination buffer for the formatted result. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://www.imagemagick.org/api/MagickCore/module_8c.html" id="UnregisterModule">UnregisterModule</a></h2>

<p>UnregisterModule() unloads a module, and invokes its de-registration module. Returns MagickTrue on success, and MagickFalse if there is an error.</p>

<p>The format of the UnregisterModule module is:</p>

<pre class="text">
MagickBooleanType UnregisterModule(const ModuleInfo *module_info,
  ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>module_info</dt>
<dd>the module info. </dd>

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
    <a href="module.php#"><img class="d-inline" id="wand" alt="And Now a Touch of Magick" width="16" height="16" src="../image/wand.ico"/></a>
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
<!-- Magick Cache 12th May 2018 15:39 -->