
<?php
$code = isset($_GET['code']) ? htmlspecialchars($_GET['code']) : '';
$email = isset($_GET['email']) ? htmlspecialchars($_GET['email']) : '';
?><!DOCTYPE html>
<html class="no-js" lang="en-us">
  <head>
    <meta charset="utf-8"><!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge'><![endif]-->
    <title>Lorenzo Wood Music — Official Site</title>
    <meta name="description" content="Lorenzo Wood is a musician, singer-songwriter, and producer from Alameda, California USA. He sings and plays guitar, keys, drums, bass, and has fun on mandolin and banjo.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="supported-color-schemes" content="light dark">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700|PT+Serif&amp;display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" href="icon.png">
    <link rel="stylesheet" href="/css/main.122219.css">
    <link rel="prefetch" href="//code.jquery.com">
    <link rel="prefetch" href="//img.youtube.com">
  </head>
  <body class="Home"><!--[if lt IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please
      <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
    </p><![endif]-->
    <header id="main-header">
      <h1 class="ir">Lorenzo Wood Music</h1>
      <div class="logo"><a class="active" href="/"><svg viewBox="0 0 846 73" aria-label="Lorenzo Wood Music" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M.1 71V3.6h12.3v57.1h27.7V71H.1zm69.8-49.8c14.5 0 24.2 10.2 24.2 25 0 17.9-12.6 25.9-25 25.9-13.8 0-24.4-9.5-24.4-25.1 0-16 10.5-25.8 25.2-25.8zm-.3 9c-8.7 0-12.2 8.4-12.2 16.5 0 9.4 4.6 16.5 12.1 16.5 7 0 11.9-6.9 11.9-16.7 0-7.6-3.4-16.3-11.8-16.3zM104.2 71V38c0-6.6-.1-11.3-.4-15.7h10.7l.4 9.3h.4c2.4-6.9 8.1-10.4 13.3-10.4 1.2 0 1.9.1 2.9.3v11.6c-1-.2-2.1-.4-3.6-.4-5.9 0-9.9 3.8-11 9.3-.2 1.1-.4 2.4-.4 3.8V71h-12.3zm76-20.9h-32.6c.3 8.8 7.2 12.6 15 12.6 5.7 0 9.8-.8 13.5-2.2l1.8 8.5c-4.2 1.7-10 3-17 3-15.8 0-25.1-9.7-25.1-24.6 0-13.5 8.2-26.2 23.8-26.2 15.8 0 21 13 21 23.7 0 2.3-.2 4.1-.4 5.2zm-32.6-8.6H169c.1-4.5-1.9-11.9-10.1-11.9-7.6 0-10.8 6.9-11.3 11.9zM190.5 71V36.8c0-5.6-.1-10.3-.4-14.5h10.8l.6 7.3h.3c2.1-3.8 7.4-8.4 15.5-8.4 8.5 0 17.3 5.5 17.3 20.9V71h-12.3V43.5c0-7-2.6-12.3-9.3-12.3-4.9 0-8.3 3.5-9.6 7.2-.4 1.1-.5 2.6-.5 4V71h-12.4zm52.6 0v-7.1l18.3-23.4c2.5-3 4.6-5.4 7.2-8.2v-.2h-23.7v-9.8h38.7v7.5l-17.9 22.9c-2.4 2.9-4.7 5.7-7.2 8.3v.2h25.7V71h-41.1zm71-49.8c14.5 0 24.2 10.2 24.2 25 0 17.9-12.6 25.9-25 25.9-13.8 0-24.4-9.5-24.4-25.1 0-16 10.5-25.8 25.2-25.8zm-.3 9c-8.7 0-12.2 8.4-12.2 16.5 0 9.4 4.6 16.5 12.1 16.5 7 0 11.9-6.9 11.9-16.7 0-7.6-3.4-16.3-11.8-16.3zM373.1 71h-13.3L343.3 3.6h13.1l6.4 30.6c1.7 8.2 3.3 16.8 4.4 23.5h.2c1.1-7.1 3-15.1 4.9-23.6l7.3-30.5h12.9l6.7 31c1.7 8 3.1 15.5 4.1 22.8h.2c1.2-7.4 2.8-15.1 4.6-23.3l7-30.5h12.5L409.5 71h-13.2l-7-31.7c-1.7-7.7-2.9-14.1-3.7-21.4h-.2c-1.2 7.2-2.5 13.7-4.5 21.4L373.1 71zm80.5-49.8c14.5 0 24.2 10.2 24.2 25 0 17.9-12.6 25.9-25 25.9-13.8 0-24.4-9.5-24.4-25.1 0-16 10.5-25.8 25.2-25.8zm-.3 9c-8.7 0-12.2 8.4-12.2 16.5 0 9.4 4.6 16.5 12.1 16.5 7 0 11.9-6.9 11.9-16.7 0-7.6-3.4-16.3-11.8-16.3zm56.7-9c14.5 0 24.2 10.2 24.2 25 0 17.9-12.6 25.9-25 25.9-13.8 0-24.4-9.5-24.4-25.1 0-16 10.5-25.8 25.2-25.8zm-.3 9c-8.7 0-12.2 8.4-12.2 16.5 0 9.4 4.6 16.5 12.1 16.5 7 0 11.9-6.9 11.9-16.7 0-7.6-3.4-16.3-11.8-16.3zM576.9 0h12.3v57.3c0 5 .2 10.4.4 13.7h-11l-.5-7.7h-.2c-2.9 5.4-8.8 8.8-15.9 8.8-11.6 0-20.8-9.9-20.8-24.9-.1-16.3 10.1-26 21.8-26 6.7 0 11.5 2.8 13.7 6.4h.2V0zm0 49.9v-7.3c0-1-.1-2.2-.3-3.2-1.1-4.8-5-8.7-10.6-8.7-7.9 0-12.3 7-12.3 16.1 0 8.9 4.4 15.4 12.2 15.4 5 0 9.4-3.4 10.6-8.7.3-1.1.4-2.3.4-3.6z" fill="#FFF"/><path d="M661.3 71L660 43.5c-.4-8.7-.9-19.2-.8-28.3h-.3c-2.2 8.2-5 17.3-8 25.8l-9.8 29.2h-9.5l-9-28.8c-2.6-8.6-5-17.8-6.8-26.2h-.2c-.3 8.8-.7 19.5-1.2 28.7L612.9 71h-11.5l4.5-67.4h16.2l8.8 27.1c2.4 7.9 4.5 15.9 6.2 23.4h.3c1.8-7.3 4.1-15.6 6.7-23.5l9.3-27h16l3.9 67.4h-12zm67.6-48.7v34.1c0 5.8.2 10.6.4 14.6h-10.8l-.6-7.4h-.2c-2.1 3.5-6.9 8.5-15.6 8.5-8.9 0-17-5.3-17-21.2V22.3h12.3v26.5c0 8.1 2.6 13.3 9.1 13.3 4.9 0 8.1-3.5 9.4-6.6.4-1.1.7-2.4.7-3.8V22.3h12.3zm10.3 46.3l2.4-8.9c2.8 1.7 8.1 3.5 12.5 3.5 5.4 0 7.8-2.2 7.8-5.4 0-3.3-2-5-8-7.1-9.5-3.3-13.5-8.5-13.4-14.2 0-8.6 7.1-15.3 18.4-15.3 5.4 0 10.1 1.4 12.9 2.9l-2.4 8.7c-2.1-1.2-6-2.8-10.3-2.8-4.4 0-6.8 2.1-6.8 5.1 0 3.1 2.3 4.6 8.5 6.8 8.8 3.2 12.9 7.7 13 14.9 0 8.8-6.9 15.2-19.8 15.2-5.9 0-11.2-1.4-14.8-3.4zm57.1 2.4h-12.4V22.3h12.4V71zm-6.2-69c4.2 0 6.8 2.9 6.9 6.7 0 3.7-2.7 6.6-7 6.6-4.1 0-6.8-2.9-6.8-6.6 0-3.8 2.8-6.7 6.9-6.7zm53.5 58.4l1.7 9.1c-2.6 1.2-7.7 2.5-13.8 2.5-15.2 0-25.1-9.7-25.1-24.8 0-14.6 10-26 27.1-26 4.5 0 9.1 1 11.9 2.3l-2.2 9.2c-2-.9-4.9-1.9-9.3-1.9-9.4 0-15 6.9-14.9 15.8 0 10 6.5 15.7 14.9 15.7 4.3 0 7.3-.9 9.7-1.9z" fill="#62B1DE"/></g></svg></a>
        <input id="navigation" type="checkbox">
        <label class="hamburger" for="navigation">
          <div class="spinner diagonal part-1"></div>
          <div class="spinner horizontal"></div>
          <div class="spinner diagonal part-2"></div>
        </label>
        <nav class="page-menu">
          <ul>
                    <li><a class="active" href="/">Home</a></li>
                    <li><a href="/photos/">Photos</a></li>
                    <li><a href="/videos/">Videos</a></li>
                    <li><a href="/booking/">Booking</a></li>
          </ul>
        </nav>
      </div>
      <div class="hero">
        <div class="quick-stream clearfix safe-area-only">
          <p><a target="_blank" href="/link/still-need-love"><img style="display:inline-block; width:2em; height:auto; margin:-1em 1em -1em 0; padding:0" src="album_art_384/still-need-love.jpg" alt="Still Need Love, cover image"></a><span>
              New single “Still Need Love” —&nbsp;</span><b><a style="text-decoration:underline" href="/link/still-need-love">Pre-order or pre-save now!</a></b></p>
        </div>
        <picture>
          <source srcset="img/beach.webp 1920w" type="image/webp">
          <source srcset="img/beach.jpg 1920w, img/beach50.jpg 960w, img/beach33.jpg 640w"><img class="hero-image" src="img/beach.jpg" loading="eager" alt="Lorenzo Wood">
        </picture>
      </div>
      <div class="icons popular safe-area-only"><a data-title="Instagram" href="https://instagram.com/LorenzoWoodMusic"><svg aria-label="Instagram" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><desc>Lorenzo Wood Music on Instagram</desc><path fill="#e95950" d="M12 2.16c3.2 0 3.58.01 4.85.07 3.25.15 4.77 1.7 4.92 4.92.06 1.27.07 1.65.07 4.85 0 3.2-.01 3.58-.07 4.85-.15 3.23-1.66 4.77-4.92 4.92-1.27.06-1.64.07-4.85.07a83 83 0 0 1-4.85-.07c-3.26-.15-4.77-1.7-4.92-4.92A82.98 82.98 0 0 1 2.16 12a84 84 0 0 1 .07-4.85c.15-3.23 1.67-4.77 4.92-4.92A84.4 84.4 0 0 1 12 2.16zM12 0C8.74 0 8.33.01 7.05.07 2.7.27.27 2.7.07 7.05A84.29 84.29 0 0 0 0 12c0 3.26.01 3.67.07 4.95.2 4.36 2.62 6.78 6.98 6.98 1.28.06 1.7.07 4.95.07 3.26 0 3.67-.01 4.95-.07 4.35-.2 6.78-2.62 6.98-6.98.06-1.28.07-1.7.07-4.95 0-3.26-.01-3.67-.07-4.95C23.73 2.7 21.3.27 16.95.07A84.33 84.33 0 0 0 12 0zm0 5.84a6.16 6.16 0 1 0 0 12.32 6.16 6.16 0 0 0 0-12.32zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.4-11.85a1.44 1.44 0 1 0 0 2.89 1.44 1.44 0 0 0 0-2.89z"/></svg></a><a data-title="Facebook" href="https://facebook.com/LorenzoWoodMusic"><svg aria-label="Facebook" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><desc>Lorenzo Wood Music on Facebook</desc><path fill="#3b5998" d="M22.68 0H1.32C.6 0 0 .6 0 1.32v21.36C0 23.4.6 24 1.32 24h11.5v-9.3H9.69v-3.62h3.13V8.41c0-3.1 1.9-4.79 4.66-4.79 1.32 0 2.46.1 2.8.15V7h-1.92c-1.5 0-1.8.71-1.8 1.76v2.32h3.59l-.47 3.62h-3.12V24h6.12c.73 0 1.32-.6 1.32-1.32V1.32C24 .6 23.4 0 22.68 0z"/></svg></a><a data-title="YouTube" href="https://www.youtube.com/lorenzowoodmusic"><svg aria-label="YouTube" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><desc>Lorenzo Wood Music on YouTube</desc><path fill="#b00" d="M4.65 0H6.1l.99 3.7L8 0h1.45L7.79 5.5v3.76H6.35V5.51L4.65 0zm6.6 2.37c-1.12 0-1.86.74-1.86 1.84v3.35c0 1.2.62 1.83 1.86 1.83 1.02 0 1.82-.69 1.82-1.83V4.2c0-1.07-.8-1.84-1.82-1.84zm.53 5.13c0 .37-.2.65-.53.65-.36 0-.56-.3-.56-.65V4.32c0-.37.17-.65.53-.65.39 0 .56.27.56.65V7.5zm4.73-5.07v5.19c-.16.19-.5.5-.75.5-.27 0-.34-.18-.34-.45V2.43h-1.27v5.71c0 .68.2 1.22.89 1.22.38 0 .92-.2 1.47-.85v.75h1.27V2.43H16.5zm2.2 13.86c-.45 0-.54.31-.54.76v.66h1.07v-.66c0-.44-.1-.76-.53-.76zm-4.7.04a.93.93 0 0 0-.25.2v4.05c.1.1.19.18.28.23.2.1.49.1.62-.07.07-.09.1-.24.1-.45v-3.36a.82.82 0 0 0-.12-.5c-.15-.19-.42-.2-.63-.1zm4.82-5.2a183 183 0 0 0-13.66 0c-2.82.2-3.15 1.9-3.17 6.37.02 4.47.35 6.17 3.17 6.37a183 183 0 0 0 13.66 0c2.82-.2 3.15-1.9 3.17-6.37-.02-4.47-.35-6.17-3.17-6.37zM6.51 21.82H5.15v-7.54H3.74V13h4.18v1.28H6.5v7.54zm4.84 0h-1.2v-.72c-.23.27-.46.47-.7.6-.65.38-1.55.37-1.55-.95v-5.44h1.21v5c0 .25.06.43.32.43.24 0 .57-.3.71-.49v-4.94h1.21v6.5zm4.66-1.35c0 .8-.3 1.43-1.1 1.43-.45 0-.82-.16-1.15-.58v.5h-1.22V13h1.22v2.84c.27-.33.64-.6 1.07-.6.89 0 1.18.74 1.18 1.62v3.61zm4.47-1.75h-2.31v1.23c0 .49.04.9.53.9.5 0 .54-.34.54-.9v-.45h1.24v.48c0 1.26-.53 2.02-1.81 2.02-1.16 0-1.75-.85-1.75-2.02v-2.92c0-1.13.75-1.91 1.84-1.91 1.16 0 1.72.74 1.72 1.91v1.66z"/></svg></a><a data-title="Bands in Town" href="https://www.bandsintown.com/a/14965242"><svg aria-label="Bands in Town" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><desc>Lorenzo Wood Music on Bands in Town</desc><path fill="#00AEA8" d="M0 0h24v24H0z"/><path fill="#FFF" d="M12.5 7.5h4v5h-4zm4.5-5h4v10h-4z"/><path d="M3.5 3v18.5H21V13H8v4h9v.5H7.5V3h-4z" fill="#FFF"/><path fill="#FFF" d="M8 7.5h4v5H8z"/></svg></a></div>
    </header>
    <main>
      <section class="mailing-section">
        <div class="centered">
          <form class="validate taller" action="https://lorenzowoodmusic.us16.list-manage.com/subscribe/post?u=3fb2f947fceaaa94b99d40919&amp;amp;id=1c68d63e9a" method="post" name="mc-embedded-subscribe-form" target="_blank"><input type="email" id="mce-EMAIL" name="EMAIL" placeholder="Email address" title="The domain portion of the email address is invalid (the portion after the @)." pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*(\.\w{2,})+$" required>
            <input id="mce-FNAME" type="text" name="FNAME" placeholder="First Name">
            <input id="mce-LNAME" type="text" name="LNAME" placeholder="Last Name"><span class="ir" aria-hidden="true">
              <input class="ir" type="text" name="b_3fb2f947fceaaa94b99d40919_1c68d63e9a" tabindex="-1"></span>
            <input class="button" type="submit" value="Subscribe to Announcement Email List" name="subscribe">
          </form>
        </div>
      </section>
      <section class="bio">
        <header class="ir" aria-hidden="true">
          <h2>Bio</h2>
        </header>
        <article class="textual">
          <p>Lorenzo Wood is a musician, singer-songwriter, and producer from Alameda, California USA. He sings and plays guitar, keys, drums, bass, and has fun on mandolin and banjo.</p>
          <p>Lorenzo performs solo or with a band in concert and at street fairs and private events. In addition to playing live, Lorenzo runs a recording studio in Alameda producing local artists as well as his own music.</p>
          <p>
            Lorenzo’s single, <a href="href="/link/jacket">Jacket (I’m Sensitive)</a> won Song of the Year in Redwood City and Song of the Month in Palo Alto for West Coast Songwriters.
            
          </p>
          <blockquote>“His voice is like ear candy”
            <footer>Wheeler Cole, West Coast Songwriters</footer>
          </blockquote>
          <p>He also runs live sound, and is knowledgeable and experienced with most audio and musical equipment.</p>
          <p>
            Lorenzo lists Maroon 5, Shawn Mendes, Julia Michaels, John Mayer, The Beatles, U2, Fleetwood Mac, Niall Horan and Train as his musical influences.
            
          </p>
          <aside class="epk download"><a href="EPK.zip">Electronic Press Kit</a></aside>
        </article>
      </section>
      <section class="gigs"><?php include 'CACHE/bandsintown.html'; ?></section>
      <section class="latest-releases">
        <header>
          <h2>Latest Releases</h2>
        </header>
        <article>
          <div class="release-image"><img src="/album_art_640/still-need-love.jpg"></div>
          <div class="release-blurb no-video">
            <h3><a href="/link/still-need-love">Still Need Love</a></h3>
            <p>The first of several singles that I'm releasing in Spring 2020.  My saxophone debut!</p>
          </div>
        </article>
        <article class="reversed">
          <div class="release-image"><img src="/album_art_640/jacket-ep.jpg"></div>
          <div class="release-blurb">
            <h3><a href="link/jacket-ep">Jacket (EP)</a></h3>
            <p>It's about how your friends need to support you, even if they don't understand what you're going through.</p>
            <p>This is an EP with four versions of the same song! The original (the version used in the video here), a remix by <a class="spotify" href="https://open.spotify.com/artist/1BGQD9MGL3oUkS4sN86Wec">Aendru</a>, a rock version, and an acoustic duet with <a href="https://www.kaiasongs.com">Kaia</a>.</p>
          </div>
          <div class="release-video">
            <div class="youtube" data-embed="iVHF1RM7a9I:Lorenzo Wood - Jacket (I'm Sensitive)"></div>
          </div>
        </article>
        <article>
          <div class="release-image"><img src="/album_art_640/heartless.jpg"></div>
          <div class="release-blurb">
            <h3><a href="/link/heartless">Heartless</a></h3>
            <h4>2AM in the Basement</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum pretium erat, in mattis leo consectetur vitae.</p>
          </div>
          <div class="release-video">
            <div class="youtube" data-embed="PfjIqix5ZZw:Heartless (Diplo &amp; Morgan Wallen) Cover by 2AM In The Basement"></div>
          </div>
        </article>
        <article>
          <div class="release-image"><img src="/album_art_640/old-town-road.jpg"></div>
          <div class="release-blurb no-video">
            <h3><a href="/link/old-town-road">Old Town Road</a></h3>
            <h4>2AM in the Basement</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum pretium erat, in mattis leo consectetur vitae.</p>
          </div>
        </article>
        <article>
          <div class="release-image"><img src="/album_art_640/now-in-control.jpg"></div>
          <div class="release-blurb no-video">
            <h3><a href="link/now-in-control">Now In Control (EP)</a></h3>
            <p>My debut EP, completed when I was just 15 years old. That seems so long ago now!</p>
          </div>
        </article>
      </section>
      <section class="audio-section balance-footer requires-js maximize-mobile">
        <h2>Other Unreleased Tracks</h2>
        <p>Some other tracks I've done in the last few years that aren't (yet?) released officially.</p>
        <footer>
          <h3 class="righthand"><a href="https://soundcloud.com/LorenzoWoodMusic">More from SoundCloud</a></h3>
        </footer>
      </section>
      <section class="contact-section">
        <article class="textual clearfix">
          <div class="side-photo">
            <picture>
              <source srcset="img/southshore.webp 990w" type="image/webp">
              <source srcset="img/southshore.jpg 990w, img/southshore50.jpg 495w"><img src="img/southshore.jpg" loading="lazy" alt="Lorenzo Wood singing, at South Shore Center, viewed from the side">
            </picture>
          </div>
          <div class="next-to-side-photo">
            <div class="next-to-side-photo-padded">
              <header>
                <h2>Contact Lorenzo Wood Music</h2>
              </header>
              <p>Book a gig, suggest a collaboration or song, or just say hi!</p>
              <div class="input-form">
                <form id="contact-form" action="mailme.php" method="post">
                  <div><input type="email" name="e" id="e_fm" placeholder="Your Email Address" title="The domain portion of the email address is invalid (the portion after the @)." pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*(\.\w{2,})+$" required></div>
                  <div>
                    <input type="text" id="e_na" name="n" placeholder="Your Name" value="">
                  </div>
                  <div>
                    <textarea type="text" id="e_ms" name="m" rows="10" cols="40" required="required" placeholder="Message"></textarea>
                  </div>
                  <div>
                    <input class="ir" type="text" name="subject" value="">
                    <input class="ir" type="text" name="message" value="">
                    <input type="hidden" name="f" value="This message was sent from the LorenzoWoodMusic.com website.">
                    <input type="hidden" name="s" value="Message sent from LorenzoWoodMusic.com">
                    <input type="hidden" name="r" value="/">
                    <input type="hidden" name="h" value="contact-form">
                    <input class="button" type="submit" value="Contact us">
                  </div><?php if (isset($_GET['msg'])) { echo '<h2>' . htmlspecialchars($_GET['msg']) . '</h2>'; } ?>
<?php if (isset($_GET['e'])) { echo '<h2 style="color:#C00">' . htmlspecialchars($_GET['e']) . '</h2>'; } ?>
                </form>
              </div>
            </div>
          </div>
        </article>
      </section>
    </main>
    <footer>
      <div class="icons exhaustive safe-area-only"><a data-title="Instagram" href="https://instagram.com/LorenzoWoodMusic"><svg aria-label="Instagram" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><desc>Lorenzo Wood Music on Instagram</desc><path fill="#e95950" d="M12 2.16c3.2 0 3.58.01 4.85.07 3.25.15 4.77 1.7 4.92 4.92.06 1.27.07 1.65.07 4.85 0 3.2-.01 3.58-.07 4.85-.15 3.23-1.66 4.77-4.92 4.92-1.27.06-1.64.07-4.85.07a83 83 0 0 1-4.85-.07c-3.26-.15-4.77-1.7-4.92-4.92A82.98 82.98 0 0 1 2.16 12a84 84 0 0 1 .07-4.85c.15-3.23 1.67-4.77 4.92-4.92A84.4 84.4 0 0 1 12 2.16zM12 0C8.74 0 8.33.01 7.05.07 2.7.27.27 2.7.07 7.05A84.29 84.29 0 0 0 0 12c0 3.26.01 3.67.07 4.95.2 4.36 2.62 6.78 6.98 6.98 1.28.06 1.7.07 4.95.07 3.26 0 3.67-.01 4.95-.07 4.35-.2 6.78-2.62 6.98-6.98.06-1.28.07-1.7.07-4.95 0-3.26-.01-3.67-.07-4.95C23.73 2.7 21.3.27 16.95.07A84.33 84.33 0 0 0 12 0zm0 5.84a6.16 6.16 0 1 0 0 12.32 6.16 6.16 0 0 0 0-12.32zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.4-11.85a1.44 1.44 0 1 0 0 2.89 1.44 1.44 0 0 0 0-2.89z"/></svg></a><a data-title="Facebook" href="https://facebook.com/LorenzoWoodMusic"><svg aria-label="Facebook" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><desc>Lorenzo Wood Music on Facebook</desc><path fill="#3b5998" d="M22.68 0H1.32C.6 0 0 .6 0 1.32v21.36C0 23.4.6 24 1.32 24h11.5v-9.3H9.69v-3.62h3.13V8.41c0-3.1 1.9-4.79 4.66-4.79 1.32 0 2.46.1 2.8.15V7h-1.92c-1.5 0-1.8.71-1.8 1.76v2.32h3.59l-.47 3.62h-3.12V24h6.12c.73 0 1.32-.6 1.32-1.32V1.32C24 .6 23.4 0 22.68 0z"/></svg></a><a data-title="YouTube" href="https://www.youtube.com/lorenzowoodmusic"><svg aria-label="YouTube" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><desc>Lorenzo Wood Music on YouTube</desc><path fill="#b00" d="M4.65 0H6.1l.99 3.7L8 0h1.45L7.79 5.5v3.76H6.35V5.51L4.65 0zm6.6 2.37c-1.12 0-1.86.74-1.86 1.84v3.35c0 1.2.62 1.83 1.86 1.83 1.02 0 1.82-.69 1.82-1.83V4.2c0-1.07-.8-1.84-1.82-1.84zm.53 5.13c0 .37-.2.65-.53.65-.36 0-.56-.3-.56-.65V4.32c0-.37.17-.65.53-.65.39 0 .56.27.56.65V7.5zm4.73-5.07v5.19c-.16.19-.5.5-.75.5-.27 0-.34-.18-.34-.45V2.43h-1.27v5.71c0 .68.2 1.22.89 1.22.38 0 .92-.2 1.47-.85v.75h1.27V2.43H16.5zm2.2 13.86c-.45 0-.54.31-.54.76v.66h1.07v-.66c0-.44-.1-.76-.53-.76zm-4.7.04a.93.93 0 0 0-.25.2v4.05c.1.1.19.18.28.23.2.1.49.1.62-.07.07-.09.1-.24.1-.45v-3.36a.82.82 0 0 0-.12-.5c-.15-.19-.42-.2-.63-.1zm4.82-5.2a183 183 0 0 0-13.66 0c-2.82.2-3.15 1.9-3.17 6.37.02 4.47.35 6.17 3.17 6.37a183 183 0 0 0 13.66 0c2.82-.2 3.15-1.9 3.17-6.37-.02-4.47-.35-6.17-3.17-6.37zM6.51 21.82H5.15v-7.54H3.74V13h4.18v1.28H6.5v7.54zm4.84 0h-1.2v-.72c-.23.27-.46.47-.7.6-.65.38-1.55.37-1.55-.95v-5.44h1.21v5c0 .25.06.43.32.43.24 0 .57-.3.71-.49v-4.94h1.21v6.5zm4.66-1.35c0 .8-.3 1.43-1.1 1.43-.45 0-.82-.16-1.15-.58v.5h-1.22V13h1.22v2.84c.27-.33.64-.6 1.07-.6.89 0 1.18.74 1.18 1.62v3.61zm4.47-1.75h-2.31v1.23c0 .49.04.9.53.9.5 0 .54-.34.54-.9v-.45h1.24v.48c0 1.26-.53 2.02-1.81 2.02-1.16 0-1.75-.85-1.75-2.02v-2.92c0-1.13.75-1.91 1.84-1.91 1.16 0 1.72.74 1.72 1.91v1.66z"/></svg></a><a data-title="Bands in Town" href="https://www.bandsintown.com/a/14965242"><svg aria-label="Bands in Town" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><desc>Lorenzo Wood Music on Bands in Town</desc><path fill="#00AEA8" d="M0 0h24v24H0z"/><path fill="#FFF" d="M12.5 7.5h4v5h-4zm4.5-5h4v10h-4z"/><path d="M3.5 3v18.5H21V13H8v4h9v.5H7.5V3h-4z" fill="#FFF"/><path fill="#FFF" d="M8 7.5h4v5H8z"/></svg></a></div>
      <p><b>Copyright © 2017-2020 Lorenzo Wood</b><span class="dimmer">&nbsp; Photo credits: Lucy Gigli, David Weintraub</span>
      </p>
      <p class="js-warning">
        JavaScript is disabled in your browser; please enable it to see missing content.
        
      </p>
    </footer>
    <div id="cover" style="display:none"></div>
    <div id="redeemer" style="display:none"></div>
    <div id="close-redeem" style="display:none">&#215;</div>
    <div class="scrolldown bounce" id="scroll-arrow" style="display:none"><a class="down-arrow" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path d="M1 6l11 10L23 6" stroke="#fff" stroke-width="2" stroke-linecap="square" fill="none"/></svg></a></div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\\/script>')</script>
    <script>
      function fullscreen(e){var o=$(window).width(),r=$(window).height(),t=!1;o/r<.575?r=Math.round(o/.575):o/r>1.618?r=Math.round(o/1.618):t=!0,t&&!e?$("#scroll-arrow").css("display","block"):$("#scroll-arrow").remove(),jQuery("#main-header,img.hero-image").css({width:o,height:r})}$(".down-arrow").click(function(e){return e.preventDefault(),$("html, body").animate({scrollTop:$(".down-arrow").offset().top},1e3),!1}),setTimeout(function(){$("#scroll-arrow").fadeOut("slow",function(){$("#scroll-arrow").remove()})},2e3),$("#recent-performances").html('<a id="recent-link" href="#">& Recent</a>'),$("#recent-link").click(function(){return $(".bit-header").text("Recent & Upcoming Performances"),$(".bit-past").show(),!1}),$("#contact-form").submit(function(e){$.ajax({type:"POST",url:"https://www.lorenzowoodmusic.com/mailme.php",data:$("#contact-form").serialize(),success:function(e,o,r){""!==e?($("#e_fm").val(""),$("#e_ms").val(""),$("#e_na").val(""),setTimeout(function(){window.alert("Your message was sent. You should hear back from us soon!")},0)):window.alert("Sorry, but the contact form submission did not work as expected.")},error:function(e,o,r){window.alert("ERROR. "+r+" "+o)},complete:function(e,o){}}),e.preventDefault()}),$("#redeem-form").submit(function(e){$("#redeem-input").val().length>0&&$.ajax({type:"POST",url:"/redeem.php",data:$("#redeem-form").serialize(),success:function(e,o,r){""!==e?($("#cover").show(),$("#redeemer").show(),$("#close-redeem").show(),$("#redeemer").html(e)):(window.alert("Sorry, but the code you entered has already been redeemed or was entered incorrectly."),$("#redeem-input").focus())},error:function(e,o,r){window.alert(r+" "+o)},complete:function(e,o){}}),e.preventDefault()}),$("#close-redeem").click(function(){$("#cover").fadeOut("slow"),$("#close-redeem").fadeOut("slow"),$("#redeemer").fadeOut("fast")}),fullscreen(null);var targetOffset=$("main").offset().top,$w=$(window).scroll(function(){$("#scroll-arrow").remove(),$w.scrollTop()>targetOffset&&$("img.hero-image").css({filter:"grayscale(0%)",opacity:"1.0"})});$(window).resize(function(e){fullscreen(e)});for(var iOS=/iPad|iPhone|iPod/.test(navigator.userAgent)&&!window.MSStream,youtube=document.querySelectorAll(".youtube"),i=0;i<youtube.length;i++){var embed=youtube[i].dataset.embed.split(":"),code=embed[0],title=embed[1],caption=embed[2];if(iOS){var iframe=document.createElement("iframe");iframe.setAttribute("allowfullscreen",""),iframe.setAttribute("src","https://www.youtube.com/embed/"+code),youtube[i].appendChild(iframe)}else{var source="https://img.youtube.com/vi/"+code+"/sddefault.jpg",image=new Image;image.src=source,image.id="video-"+code,image.alt="YouTube thumbnail",image.addEventListener("load",void youtube[i].appendChild(image)),youtube[i].addEventListener("click",function(){var e,t=this.dataset.embed.split(":")[0],i=document.createElement("iframe");i.setAttribute("frameborder","0"),i.setAttribute("allowfullscreen",""),i.setAttribute("src","https://www.youtube.com/embed/"+t+"?rel=0&showinfo=0&autoplay=1"),this.innerHTML="",this.appendChild(i)});var play=document.createElement("div");play.setAttribute("class","play-button"),youtube[i].appendChild(play);var t=document.createElement("div");t.setAttribute("class","title"),t.innerText=title,youtube[i].appendChild(t)}if(caption){var captionDiv=document.createElement("p");captionDiv.innerText=caption,youtube[i].insertAdjacentElement("afterend",captionDiv)}}if (iOS) $('#form-album').val(window.DeviceMotionEvent ? '2938' : '8603');
      document.documentElement.className = document.documentElement.className.replace("no-js","js");
    </script><?php if ($code) { ?><script>$('#redeem-form').submit();</script><?php } ?>
<script type="application/ld+json">{"@context":"http://schema.org","@type":"Person","name":"Lorenzo Wood","url":"https://www.lorenzowoodmusic.com/","sameAs":["https://www.facebook.com/lorenzowoodmusic/","https://twitter.com/lorenzowmusic","https://www.instagram.com/LorenzoWoodMusic/","https://www.youtube.com/lorenzowoodmusic","https://soundcloud.com/LorenzoWoodMusic","https://geo.itunes.apple.com/us/artist/lorenzo-wood/1262743720?at=1000lKSp","https://open.spotify.com/artist/1rEOrX1GSkT1SJAsG1fBYA?si=kAr7Wf29R7WkScnbG9d2dg"]}</script>
  </body>
</html>