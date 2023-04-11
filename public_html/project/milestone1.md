<table><tr><td> <em>Assignment: </em> IT202 Milestone1 Deliverable</td></tr>
<tr><td> <em>Student: </em> Curtis Asral (cca3)</td></tr>
<tr><td> <em>Generated: </em> 4/10/2023 11:33:30 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/it202-milestone1-deliverable/grade/cca3" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone1 branch</li><li>Create a milestone1.md file in your Project folder</li><li>Git add/commit/push this empty file to Milestone1 (you'll need the link later)</li><li>Fill in the deliverable items<ol><li>For each feature, add a direct link (or links) to the expected file the implements the feature from Heroku Prod (I.e,&nbsp;<a href="https://mt85-prod.herokuapp.com/Project/register.php">https://mt85-prod.herokuapp.com/Project/register.php</a>)</li></ol></li><li>Ensure your images display correctly in the sample markdown at the bottom</li><ol><li>NOTE: You may want to try to capture as much checklist evidence in your screenshots as possible, you do not need individual screenshots and are recommended to combine things when possible. Also, some screenshots may be reused if applicable.</li></ol><li>Save the submission items</li><li>Copy/paste the markdown from the "Copy markdown to clipboard link" or via the download button</li><li>Paste the code into the milestone1.md file or overwrite the file</li><li>Git add/commit/push the md file to Milestone1</li><li>Double check the images load when viewing the markdown file (points will be lost for invalid/non-loading images)</li><li>Make a pull request from Milestone1 to dev and merge it (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku dev</li></ol></li><li>Make a pull request from dev to prod (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku prod</li></ol></li><li>Submit the direct link from github prod branch to the milestone1.md file (no other links will be accepted and will result in 0)</li></ol></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Feature: User will be able to register a new account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/231037685-05dda93b-d98a-4fcc-9345-33e5ab6cbc67.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show invalid email validation<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/231037854-89286d7d-1cb3-48fa-aa0e-34f6c505debe.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show invalid password validation. I decided to make the password too short to<br>show the invalid password validation.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/231037994-c796283d-323b-4495-ae44-ade3682083c3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show passwords not much validation<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/231038119-8fa3f7e6-7f62-4dff-863e-b28ba28d20aa.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show email not available validation (already registered)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/231038545-d494bfa9-c72c-4d05-b3e5-c675b82f709f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show username not available validation (username is taken)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/231038217-4b1f936d-b3b6-4227-9461-44c24b187367.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show the form with valid data filled in before the form is submitted<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Users table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/231038889-bcbc30cd-5291-4aa1-a2fc-5106e72d02dd.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The user data from Task 1 is in row 3<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/curtis-asral/IT202-008/pull/22">https://github.com/curtis-asral/IT202-008/pull/22</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>The form takes multiple things and validates them. The form has its own<br>conditions which have to be met before the form is submitted. The validation<br>works by checking what the user provided with what is being stored in<br>the database. The validation function returns false for an error and true for<br>success. The password is handled by using a hash function to protect the<br>privacy of the user. The database is utilized by storing user information so<br>that it can be retrieved when a form is submitted.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Feature: User will be able to login to their account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/231039510-6b17e463-3ef9-4847-ae66-8c41ae8b053b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show password mismatch validation (doesn&#39;t match what&#39;s in the DB)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/231039579-6dd77030-3db3-48dd-81fb-95396ca67b42.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show validation based on non-existing user<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of successful login</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/231039959-3d1e9dae-79f8-4c6b-be5b-b2fc2422d0ab.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Should have some sort of message that a login occurred<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/curtis-asral/IT202-008/pull/30">https://github.com/curtis-asral/IT202-008/pull/30</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>The form takes multiple things and validates them. The form has its own<br>conditions which have to be met before the form is submitted. The validation<br>works by checking what the user provided with what is being stored in<br>the database. The validation function returns false for an error and true for<br>success. The password is handled by using a hash function to protect the<br>privacy of the user. The database is utilized by storing user information so<br>that it can be retrieved when a form is submitted.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Feat: Users will be able to logout </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the successful logout message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/231040349-8943a84a-6770-4863-b6e5-504937b3c6b9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Message should show something about being logged out<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the logged out user can't access a login-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/231040493-7fd63f44-445c-4d0f-ae90-9bd6184d26f4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Message should show something about not being logged in<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/curtis-asral/IT202-008/pull/28">https://github.com/curtis-asral/IT202-008/pull/28</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>We allow the user to login with their email or their username, we<br>maintain the respective validations when necessary. First change the email input form type<br>to text (instead of email), then update the label, then&nbsp;do the client-side validation,&nbsp;update<br>the validation and the output text, and lastly&nbsp;check if the value matches the<br>username field.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Feature: Basic Security Rules Implemented / Basic Roles Implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the logged out user can't access a login-protected page (may be the same as similar request)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/231040493-7fd63f44-445c-4d0f-ae90-9bd6184d26f4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Message should show something about not being logged in<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing a user without an appropriate role can't access the role-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/231040910-ce55e3b4-0139-4cab-b7cd-24c99fbc9520.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Message should show something about not having proper role or permission (i.e., different<br>than the not logged in message)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Roles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/231041041-9fe9cc14-9668-4ff7-8d5c-d8750f20dcf8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Must have at least one valid record from the lessons (i.e., Admin)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the UserRoles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/231041126-af4b4ea9-50fb-429c-aa4b-f0735a1b39ad.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The only row in the UserRoles table is my admin user<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add the related pull request(s) for these features</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/curtis-asral/IT202-008/pull/29">https://github.com/curtis-asral/IT202-008/pull/29</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Explain briefly how the process/code works for login-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>For login protected pages, the user cannot access the pages if they are<br>not logged in. This authentication system is done by keeping a Users table<br>that keeps track of all users and we use that to validate whether<br>the current user is valid/logged in.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Explain briefly how the process/code works for role-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>User roles allows us to give special privileges to certain users. By utilizing<br>an authorization system to determine what permissions users have, we are able to<br>give an Admin role to the primary accounts and can add other roles<br>in the future. We can can also list the current roles and assign<br>new roles. We have a Roles table to define what roles are available<br>to our system and a UserRoles table as an association table. The has_role<br>function receives a single role and checks it against the roles key which<br>will contain an array of associative arrays that portray a role, specifically it’ll<br>check if the Role name matches the passed in value.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Feature: Site should have basic styles/theme applied; everything should be styled </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots to show examples of your site's styles/theme</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/231043298-052eaf8e-8348-4f53-abf0-a64c3b753150.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Nav styled, UI is clean and does not have &quot;hideous&quot; example CSS, data<br>output is clean.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/231043484-68a34a43-e978-43e1-9fe4-65f3852618b2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Forms are styled<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/curtis-asral/IT202-008/pull/36">https://github.com/curtis-asral/IT202-008/pull/36</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain your CSS at a high level</td></tr>
<tr><td> <em>Response:</em> <p>I like a simple design with most features being grayscale. I prefer boxes<br>with right angles to boxes with curved edges, it just brings me back<br>to the good old days of like 10 years ago. I also like<br>all the links in the nav bar to be blue like hyperlinks; it<br>just makes me happy. For the error/info/validation messages, however, I chose darker colors<br>which would clearly show the white text I chose to use everywhere (other<br>than the links).<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Feature: Any output messages/errors should be "user friendly" </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of some examples of errors/messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/231040910-ce55e3b4-0139-4cab-b7cd-24c99fbc9520.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>error message 1<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/231043298-052eaf8e-8348-4f53-abf0-a64c3b753150.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>welcome message 1<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/231043484-68a34a43-e978-43e1-9fe4-65f3852618b2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>validation message 1<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a related pull request</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/curtis-asral/IT202-008/pull/25">https://github.com/curtis-asral/IT202-008/pull/25</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you made messages user friendly</td></tr>
<tr><td> <em>Response:</em> <p>To make the technical messages more user friendly we use flash messages which<br>are short-lived styled messages to bring attention to the user about some specific<br>action.&nbsp;For each flash message we build out a template to wrap the message<br>and display the content, then we have a special JS function that places<br>these messages directly after the &lt;nav&gt; element.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Feature: Users will be able to see their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/231044154-bb9a4d9a-0597-452e-b66b-24dcdfbbc73c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Email and username are prefilled<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/curtis-asral/IT202-008/pull/26">https://github.com/curtis-asral/IT202-008/pull/26</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain briefly how the process/code works (view only)</td></tr>
<tr><td> <em>Response:</em> <p>We prefill username and email from the session that is currently in use<br>by retrieving it from the session variable.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Feature: User will be able to edit their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page validation messages and success messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/231044862-f3e0e75e-dc43-4b67-a77d-07ade2d00fb3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show username validation message<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/231044681-39bdd704-aaea-4572-ab89-bd589de8e21b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show email validation message<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/231045113-80ca0533-29d0-4241-a9d6-a934b2ed4274.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show password validation message<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/231045212-74e92c52-1aa4-4b98-b5a2-9193ffa5f7cc.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show password mismatch message<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/231045267-ce566bbe-d7bb-4e8c-bf73-559c732d949b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show email/username already in use message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add before and after screenshots of the Users table when a user edits their profile</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/231045393-bb703e8f-4923-40d4-a902-66f0dc8a0da7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>row 1 username is curtis<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/231045534-e65d0c24-0dea-41df-80c9-796d6ec576df.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>row 1 username is now cca3<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/curtis-asral/IT202-008/pull/26">https://github.com/curtis-asral/IT202-008/pull/26</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works (edit only)</td></tr>
<tr><td> <em>Response:</em> <p>First, we validate submitted data to see what needs to update (if anything),<br>then verify the updates, and refresh the session data. In order to validate<br>the passwords, we fetch them from the database and check to make sure<br>they match, and then we hash a new password that the user provides.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Issues and Project Board </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/231046019-305262d2-f6fc-4476-8046-e7d5c17a881b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>At least one issue item per Milestone feature, shown from the Project Board<br>perspective<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Include a direct link to your Project Board</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/users/curtis-asral/projects/2">https://github.com/users/curtis-asral/projects/2</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Prod Application Link to Login Page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="http://cca3-prod.herokuapp.com/project/login.php">http://cca3-prod.herokuapp.com/project/login.php</a> </td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/it202-milestone1-deliverable/grade/cca3" target="_blank">Grading</a></td></tr></table>