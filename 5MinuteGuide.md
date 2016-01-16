> <p>With CMS from Scratch you  really can turn a flat HTML page into one that your client can update  in minutes - with no database or programming knowledge!<br>
<blockquote></p>
<p>This page gives you everything you need to get going.</p>
<p>Over the following weeks, we'll add links to more in-depth tutorials that will help you do even more with the CMS.<br>
</p></blockquote>

<h2>Step 1 - Install</h2>
<p><a href='http://cmsfromscratch.com/user-guide/installation.php'>See the Installation step-by-step guide for more information...<br>
</a></p>
<p><strong>Summary of steps</strong></p>
<ul>
<blockquote><li>Extract the CMS from Scratch archive to a folder on your local file system</li>
<li>Using an FTP client, upload all the files in the folder into the web root of your site</li>
</ul>
<h2> Step 2 - Edit your Settings</h2>
<p> You should see a login form as below. As you haven't set up logins yet, <strong>just select the Submit button</strong> and you will proceed to the CMS main page.</p>
<p>(CMS from Scratch only has 2 user accounts: Designer and Client/Editor. Users identify themselves with a password alone.)</p>
<p align='center'><img src='http://cmsfromscratch.com/cms/cmsimages/login-form.gif' alt='Screenshot of login form' border='1' width='336' height='128' /> </p>
<p>Click the <strong>Settings tab</strong> (right-most tab).</p>
<p>You'll see this simple form.</p>
<div><img src='http://cmsfromscratch.com/cms/cmsimages/settings.gif' alt='Screenshot of settings' border='1' width='318' height='224' /> </div>
<p>Add a site name in 'Header title', this can be anything. The name will appear at the top-left of the navigation bar.</p>
<p>Leave ‘Show files not created in CMS' set to 'No' for now. It isn't very important.</p>
<p>Set up logins for the two types of accounts: <strong>Designer (you)</strong> and <strong>Editor (usually your client)</strong>.</p>
<ul>
<li>The <strong>Designer</strong> can access and change <strong>everything on the site</strong>, including templates, and settings.</li>
<li>The <strong>Editor/Client can only edit the content</strong>, but not the structure of the pages.</li>
</ul>
<p><strong>Just choose a password for each and then click ‘Save changes’.</strong></p>
<p>You will now have to log out, and log back in using the password you  just created. (If your designer login doesn’t work, use the FTP client  to look for a file called <em>settings.text</em>, delete it and start again.)</p>
<h2> Step 3 - Create your first page</h2>
<p>CMS from Scratch is designed to let you chop up existing pages, or templates, saving chunks as <strong>includes</strong>, which the Editor may edit, without being able to mess up core markup.</p>
<p>Some <em>includes </em>will only appear on one page, whereas others  may be re-used on several pages. CMS from Scratch makes it easy to  create all kinds of <em>includes</em>.</p>
<p>To create a page, first click on the <strong>Browse</strong> tab. Click create new page (below).</p>
<div><img src='http://cmsfromscratch.com/cms/cmsimages/new-page.gif' alt='' border='1' width='276' height='224' /> </div>
<p>You'll see a popup that looks like this.</p>
<p align='center'><img src='http://cmsfromscratch.com/cms/cmsimages/create_new_page.gif' alt='' border='1' width='252' height='118' />
</p>
<ul>
<li>Type in the name of the page. The extension (.php) will automatically be added to the name.</li>
<li>At this stage no page templates have been created so leave this as ‘blank page’.</li>
</ul>
<p>Your new page will now be displayed on screen.</p>
<p align='center'><img src='http://cmsfromscratch.com/cms/cmsimages/new-page-created.gif' alt='Screenshot of new page created' border='1' width='320' height='145' /></p>
The 5 icons inside the page panel mean:<br>
<ol>
<li>Create a new Text include belonging to this page.</li>
<li>Create a new HTML include belonging to this page.</li>
<li>Create a new Set include belonging to this page.</li>
<li>Create a Page Template from this page (ignore this).</li>
<li>Preview the page (you can click this, but you won't see much).</li>
</ol>
You also have 3 small links at the top right of the page panel. These do the following:<br>
<ul>
<li><a href='r.md'>r</a> - Rename the page</li>
<li><a href='x.md'>x</a> - Delete the page</li>
<li>[^] - Collapse the page panel</li>
</ul>
<p>What we want to do first is paste the full source HTML from a  template page into the page source. To edit the page source, just click  on the page name (here mypage.php). The page source will open up in a new <strong>tab</strong>.</p>
<p>(The tab will close if you click "Save & Close", but you can  also switch to your other tabs (like Browse), and come back to this  one. Sometimes it's handy to click "Save & Continue editing". You  can also close some tabs, without saving, by clicking on the tab again.)</p>
<p> Just paste your HTML markup into the big text area and save it.</p>
<p>Your page will now exist on the web site. You can also <strong>preview </strong>the page by clicking on the magnifying glass icon in the page's panel.</p>
<h3>Preview vs. Live view</h3>
<p>CMS from Scratch keeps <strong>2 copies</strong> of every include (as well as page source): a Preview version, and a Live version.</p>
<p>When your client (Editor) edits content, they just edit the Preview  version. Once they've made their changes, they should preview the page  (by clicking the magnifying glass icon), and <strong>only if they are happy</strong> they can publish the amended includes.</p>
<p>When the preview copy of a page or an include is different from the  live copy, you'll see extra small links at the top-right of its panel.</p>
<ul>
<li>The bigger ">" link publishes the item (i.e. copies the preview copy over the live version).</li>
<li>The  smaller "<" link does the reverse - restoring the live copy over the  preview version. This should only be used if the preview version has  been messed up.<br>
</li>
</ul>
<h2>Step 4 - Start chopping up your page into Includes</h2>
<p>The clever bit happens here. CMS from Scratch doesn’t use a database to store content. Pieces of content are stored in files (<strong>includes</strong>), which can be dynamically inserted into one or more pages.</p>
<h3>The 3 types of Includes</h3>
<h4>Plain text</h4>
<p>Text for plain text without formatting. Useful for hidden information like metadata, simple text like headers and CSS/code.</p>
<p>The extension of these Includes is ".text".</p>
<h4>HTML (Rich text)</h4>
<p>HTML for general rich content that includes images, formatted text,  lists, tables and links, etc. Edited in a powerful WYSIWYG editor.</p>
<p>The extension of these Includes is ".html".</p>
<h4>Sets</h4>
<p>Sets are unique files, described like a flexible table, or a  spreadsheet, the properties of which the designer defines. Editors  (client) can add, re-order and edit rows, which may contain text, links  and images. The designer dictates how the set should be displayed.</p>
<p>The extension of these Includes is ".set".</p>
<h3>Where Includes live</h3>
<p>Any web site contains unique content, and other chunks that appear  in several places (like navigation, copyright messages or  advertisements).</p>
<p>CMS from Scratch can use Includes that live in several places.</p>
<h4>Free Includes</h4>
<p>Free includes are located in a specific named folder (we often have  one called "generalinc"). These are useful for storing chunks of  content, like navigation or overall page layouts, that are used on  several pages.</p>
<p>To create a free include, click on the "New (include-type)" icon  within an actual folder. Avoid creating includes in the root folder.</p>
<p>To make a free include appear in your page, you type <strong><< foldername/includename.text >></strong>, e.g. <strong><< generalinc/pageheader.text >></strong></p>
<h4>Page-specific Includes</h4>
<p>Pages can have their own includes. These can only appear on that particular page. Use these for unique content.</p>
<p>To create one, click on the new (include-type) icon <strong>within the page's panel</strong>.</p>
<p>To make them appear in a page, just type the name of the include file e.g. <strong><< introduction.html >></strong>.</p>
<h4>Folder-specific Includes</h4>
<p>It's also possible to reference an Include that happens to sit in the same folder as the current page.</p>
<p>Create these the same was as though you were creating a free include  (of course, you can still reference them with foldername/includename,  just like a free include).</p>
<p>To reference them, you can just put the include file name in any page in the folder, e.g. <strong><< newslist.set >></strong>, just like a Page-specific Include.</p>
<p>The way CMS from Scratch works when it finds an apparent Page-specific Include is:</p>
<ol>
<li>First, it looks for a Page-specific include (belonging to the current page)</li>
<li>If it doesn't find one, it then looks for an Include of the same name in the current folder</li>
<li>If it doesn't find that, it skips the Include altogether</li>
</ol>
<p>The really useful thing about Folder-specific Includes is - you can  use them to call in different sections of content, depending on where  you are in the site.</p>
<p>For example, you may have a different 2nd-level navigation in "About  Us" than you do in "Products". All you'd do is have every page look for  e.g. " <strong><< localnav.set> ></strong>",  and pages created in your /about/ folder would find the one for About,  while pages in the /products/ folder would find the Products 2nd-level  nav.</p>
<p>(Another cool tip is to use a simple text include to set an ID or  classname, which you then use in your CSS. e.g. <code>&lt;body  class="&lt;&lt; foldername.text &gt;&gt;"&gt;</code> could look for an include  called "foldername.text", which might be just the text "aboutus" when  in the /about/ folder, and could combine to set the "About" top-level  navigation button or tab to the "on" state when any page in that folder  is browsed.)</p>
<h3>Creating the different types of Includes</h3>
<h4>Creating and editing a Text Include</h4>
<p>To create a text include, click the "T " icon for a page (for  page-specific) or folder. You'll be prompted for a name. (Don't worry  about entering an extension; CMS from Scratch will add the correct  extension.)</p>
<p>The new text Include should appear, either in the folder, or in the list of Includes belonging to the page.</p>
<p>To edit it, just click the item (once for Page-specific Includes, or  sometimes twice for Free Includes). It will open a new tab featuring a  large text area. Just edit and click "Save & Close" (or "Save &  continue editing") when you're done.</p>
<p>If you have just created the Include, or edited a blank Include,  both Preview and Live versions will be created/updated with the new  content.</p>
<p>If you have edited an existing Include, you'll see the Publish /  Restore links against the Include. Usually, you'll preview the page to  check the content in context, or you may want to publish straightaway.</p>
<h4>Creating and editing HTML Includes</h4>
<p>This is almost exactly like creating plain text Includes, except:</p>
<ul>
<li>You click the box icon featuring the red "T" and the picture, with a plus-sign, to create a new HTML Include.</li>
<li>When you edit the Include, you'll use the powerful HTML editor (provided by <a href='http://www.fckeditor.net/'>FCK</a>).</li>
</ul>
<h4>Creating and editing Set Includes</h4>
<p>Sets give you functionality like database-driven sites, without the database, and in a fraction of the time!</p>
<p>They are useful for rendering any content that follows a regular pattern, such as:</p>
<ul>
<li>Any <strong>Lists</strong>, including navigation</li>
<li>Content to be rendered in <strong>Tables</strong>, like opening times or sales figures</li>
<li><strong>Complex </strong>repeated HTML structures, like news items that feature a heading, thumbnail and overview, and link through to a full story...</li>
</ul>
<p>Sets give your customers an interface for adding, editing or  deleting the content for these repeated items, without being able to  mess up the HTML structure behind them.</p>
<h4>Set Templates</h4>
<p>Before you can create a Set Include, the Designer needs to create one or more <strong>Set Templates</strong>. These have a tab of their own in the navigation.</p>
<p>To create a Set Template, select the "Set Templates" tab, click the  "New Set Template" button and give your new Set Template a name.</p>
<p>There are 2 parts to a Set Template: column definition, and rendering rules.</p>
<h4>Set Template: Column Definition</h4>
<p>On the left side of the "Edit Set Template" view, there will be an  empty table entitled "Columns". This is where you'll say how many  variables your set will include, a bit like defining the columns in a  database table.</p>
<p>To add a column, type in its name (we recommend not using spaces),  and select the data type. Data types can be: text, longtext, image and  link. The long text type just gives the Editor a larger box in which to  edit the text, and is suitable for text that is likely to be more than  one sentence.</p>
<p>For example: Let's say we want to show a list of links to other  pages. You could use the HTML editor for this, but that allows the  Editor much greater freedom. If you want to control how the content is  displayed, a Set is the right thing to use. Our lists always have some  text, and should also have a link.</p>
<p>You would define the columns like this. (The column names can be anything.)</p>
<p><img src='http://cmsfromscratch.com/cms/cmsimages/set-template-columns.gif' alt='' border='1' width='341' height='193' /></p>
<p>On the right-hand side, there is another form, where you define how the Set should be rendered.</p>
<p>There are 5 sections:</p>
<ol>
<li>Before: This is code that will be displayed at the start of the Set (only if the Set has any contents).</li>
<li>Repeated block 1:  The Set will render all the code entered here, replacing any names  found in <a href='square.md'>brackets</a> with the actual values the Editor has  entered into the Set. Here, it will replace <a href='link.md'>link</a> with whatever value  is in the "link" column defined on the left, and <a href='listitem.md'>listitem</a> with the  value from the "listitem" column.</li>
<li>Repeated block 2:  If any of the values (i.e. <a href='link.md'>link</a> or <a href='listitem.md'>listitem</a>) in the block above  were not found (e.g. the Editor has entered text for the list item, but  no link), CMS from Scratch will try to use this alternative block. In  the case of no link being provided, this code just tells it to add an  <li> with the text alone.</li>
<li>Repeated block 3:  (Not used here) There are occasions where you may want a third failover  option, for complex Set definitions. You have a third option here in  the smaller box. If not all the items in any of the 3 boxes are found,  the Set row will be skipped.</li>
<li>After: The markup to write after the repeated blocks.</li>
<div><img src='http://cmsfromscratch.com/cms/cmsimages/set-template-rendering-rules.gif' alt='' border='1' width='518' height='498' /></div>
<h3>Editing Sets</h3>
<p>Once you have defined one or more Set Templates, you will be able to  create new Set Includes, in the same way as you would create a Text or  HTML include, using the grid-cube icon.</p>
<p>The only exception is, when you create a new Set, you must specify  the Set Template to use. This will define what columns to offer when  editing, as well as the rules to use for rendering the Set, like this:</p>
<p><img src='http://cmsfromscratch.com/cms/cmsimages/new-content-set.gif' alt='' width='466' height='238' /></p>
<p>When you click on a Set Include to edit it, you'll see a window like this:</p>
<div><img src='http://cmsfromscratch.com/cms/cmsimages/edit-set.gif' alt='' border='1' width='464' height='208' />
<blockquote><div>This is similar to the view an Editor will see, except Editors do not get:<br>
<blockquote><ul>
<blockquote><li>"Add column" button (you should never need to use this anyway)</li>
<li>"Delete column" links (in the column headers)</li>
<li>"Format using" option. (You can use this to define a different Set Template than the ST originally used to define the Set.)</li>
</blockquote></ul>
</blockquote><blockquote><p>Editing a Set is straightforward. Users can add, re-order or delete rows using the options provided.</p>
<p>When editing Text-type  columns, you can just type into the box. Long-text columns get an  additional button, which launches a larger textarea popup for editing  longer text.</p>
<p>Links have [...] buttons.  Click the button to launch a page selector, for selecting a local page  to link to. Alternatively, type in the URL of a site/page to link to.</p>
<p>Image-type columns display a tiny thumbnail image. Users click the image to select an image (previously uploaded into the Images area).</p>
<p> </p>
</blockquote></div>
</div>
<h2>Step 5 - Creating a Page Template</h2>
<p>Once you have created the main “shell” for your site by substituting  the editable content for includes, you can create a page template.</p>
<p>Page templates apply various defaults for new pages. Both Designer  and Editor can select one to use when creating a new page. For example,  you might create page templates for "News", "General Content" and  "Product Review" for your client.</p>
<p>Page templates define:</p>
<ul>
</blockquote><li>The default page source code. (Note: Editor can't change source code, only Designer)</li>
<li>The  default Page-specific Includes. Any Page-specific includes created for  a Page Template will be copied to any page created using that template,  including the default values.</li>
</ul>
<h3>There are 2 ways to create a Page Template</h3>
<h4>Creating a Page Template manually</h4>
<p>Go to the ‘Page Template’ tab. Click "New Page Template" and give it  a name. The new new page template will appear in the list. You can edit  its source code, and create Page-specific Includes as though you were  editing a real Page.</p>
<h4>Creating a Page Template based on an existing Page</h4>
<p>This is much easier, and definitely the recommended way to go.</p>
<p>When you've created e.g. your "News item" page, and you're happy  that all the Include-calls are good, you can click the icon on the  page's panel that looks like a page with a spanner or wrench. This is  the magic "Create a Page Template from this Page" link. All you need to  do is give your new Page Template a name and CMS from Scratch will do  the work.</p>