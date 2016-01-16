# Q&A: Navigation using sets #

**Q: How can I create a menu list with submenus using set include ?
I am looking for something like this:**
```
<ul id="menu">
<li><a href="">Item 1 </a>
    <ul class="submenu">
    <li><a href="">SubItem 1 </a></li>
    <li><a href="">SubItem 2 </a></li>
    <li><a href="">SubItem 3 </a></li>
    </ul>
</li>
<li><a href="">Item 2 </a></li>
<li><a href="">Item 3 </a></li>
</ul>
```
A: If you only want the submenu to display when you're in a certain range of pages, you can do it a couple of ways.

Option 1: Create a separate folder for each navigation group. e.g. "about". In the set template editor, you'll put the main <ul> ... </ul> in the "before" and "after" boxes. In the "repeated" box, you can put a call in to a sub-set, e.g. In the example above, you'd literally put the following:
```
<li><a href="[link]">[linktitle]</a> << submenu.set >> </li>
```
Then, in each different folder, you'd create a **free include** named "submenu.set", which has the form of your submenu. Then, the CMS will simply find the local submenu in the folder of the current page, if one exists. If there isn't one, it will just carry on and not insert a submenu.

Option 2: You could also use CSS to reveal/hide certain submenus from page to page (e.g. if you wanted all the pages in the root or in the same folder).

So each menu item would have a distinct class (or ID). e.g. <li>About us</li><ul>...</ul>

You could use a class on the body tag (which can be set using a small page-specific include like "bodyclass.text"), which will tell your CSS what _mode_ it's in. e.g. 

&lt;body class="&lt;&lt;bodyclass.text&gt;&gt;"&gt;



Then, in your CSS definition, you'd put something like:
```
#nav ul ul {display:none;} // To hide any nested uls by default
body.aboutus #nav li.navabout, body.products #nav li.navproducts {display:block;}
```