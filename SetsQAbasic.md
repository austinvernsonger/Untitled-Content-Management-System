# Q&A: Sets basics #

**Q: How can I change the column widths in the set editor? I have lots of columns, and the page is stretching very wide.**

A: You can edit all the CSS for the CMS editor in /cms/styles.css


**Q: In the Users Guide. You mentioned X-ing out the files/folders that you don't want the user to see when logged in as an Editor. Which folder can I do that in without rendering the program useless. Won't the scripts be looking for those file/folder names? If I put an "X" in front of the name, will that mess things up?**

A: Any element or folder that starts with the letter 'x' will be hidden from editor's view. In our projects, we normally create a special folder called "xinc" for includes that the clients don't ever need to see. This normally contains chunks of template HTML, which are usually organised into layout includes, e.g. xinc/layouts/item.text.

When you reference any of these includes, you'll refer to them with the 'x' prefix, e.g. "<< inc/xcss.text >>".


**Q: I see a lot of "remove.me" files in many of the folders. Am I suppose to delete all of those files?"**

A: These are here to ensure that required directories that are empty by default get indexed/zipped properly. You can delete any of these files at will.