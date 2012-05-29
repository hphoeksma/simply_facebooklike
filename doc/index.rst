.. Simply FacebookLike documentation master file, created by
   sphinx-quickstart on Tue May 29 13:39:52 2012.
   You can adapt this file completely to your liking, but it should at least
   contain the root `toctree` directive.

Welcome to Simply FacebookLike's documentation!
===============================================

.. toctree::
   :maxdepth: 2

What does it do?
------------------------------
This extension provides you with a TypoScript object for a Like button.
Default the url of the like button is set to be the page's root page url.
Can be set to render a different like button for every page.

Installing Simply FacebookLike
------------------------------
Installing Simply FacebookLike is as simple as downloading it from `TER
<http://typo3.org/extensions/repository/>`_.

After installing it, include the Static Templates in your main template.
Now you can alter the options of the like button using the constant editor to make it match your needs.

The following options are available, see for it's options the respective `FaceBook page
<http://developers.facebook.com/docs/reference/plugins/like/>`_:

================  =======================  =============
Option            What it does             Default value
================  =======================  =============
data-send         Send data                false
data-layout       Button Layout            button_count
data-width        Width                    120
data-show-faces   Show faces               false
data-font         Font                     lucida grande
useRootPage       Use the rootpage as url  1 (boolean)
================  =======================  =============

Using Simply FacebookLike
-------------------------
The extension generated a typoscript library object with the like button for you.
You can use it in your templates by accessing it via it's objectpath: `lib.facebookLike`.

You can use for example the following TypoScript to render it on your page::

	page.10 < .lib.facebookLike