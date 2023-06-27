<table><tr><td> <em>Assignment: </em> IT202 Milestone 2 Bank Project</td></tr>
<tr><td> <em>Student: </em> Curtis Asral (cca3)</td></tr>
<tr><td> <em>Generated: </em> 5/5/2023 12:57:11 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/it202-milestone-2-bank-project/grade/cca3" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone2 branch</li><li>Create a new markdown file called milestone2.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone2.md</li><li>Add/commit/push the changes to Milestone2</li><li>PR Milestone2 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes to get ready for Milestone 3</li><li>Submit the direct link to this new milestone2.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on github and everywhere else. Images are only accepted from dev or prod, not local host. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Create Accounts table and setup </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot from the db of the system user (Users table)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/234054895-46b9ac46-60c8-42c7-884d-8b3b611e2c32.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The system user is in the Users table and has a negative id<br>value<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot from the db of the world account (Accounts table)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/234055453-b01ea89c-54de-4247-a9c9-871d96885eaa.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The world account is in the Accounts table and has a negative id<br>value with account number 000000000000<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain the purpose and usage of these two entries and how they relate</td></tr>
<tr><td> <em>Response:</em> <p>The purpose of these two entries is to have a world account to<br>take and give money to when users deposit/withdraw money. It&#39;s useful to verify<br>that our ledger remains balanced at $0.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/curtis-asral/IT202-008/pull/49">https://github.com/curtis-asral/IT202-008/pull/49</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Dashboard </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the requested links/navigation</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/235502284-e9df51b7-f8de-414c-892d-c97f9efa0558.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of dashboard page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain which ones are working for this milestone</td></tr>
<tr><td> <em>Response:</em> <p>The links that work for this milestone are Create Account (to create a<br>new checking account), My Accounts (to list all of the user&#39;s accounts and<br>information about the accounts, can click on the account numbers to view transaction<br>history), Deposit (to make deposits into specific user accounts), Withdraw (to make withdraws<br>into specific user accounts), and Profile (to view profile information and change username/email/password).<br>The link that doesn&#39;t do anything right now is Transfer, but in the<br>future the user will be able to transfer money from one account to<br>another.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/curtis-asral/IT202-008/pull/51">https://github.com/curtis-asral/IT202-008/pull/51</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Create a checking Account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the Create Account Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/236343319-42e4f60f-5bab-4b1b-9b35-23a727daec79.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>valid data filled in on the form<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing validation errors and success message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/236343845-dc28fa9e-e483-4818-a081-410845abf3dc.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show the success message from task 1&#39;s data<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/236343640-9fbc770d-ecd8-4252-8342-520c7a7d0521.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show the minimum funding validation<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot showing the transaction generated from the initial deposit (from the DB)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/236344033-341d8c2d-4857-45de-875c-a48c215bd9d9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The 2 most recent transactions which have the details &quot;test creating a checking<br>account&quot; are the transactions from the screenshot.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain which account number generation you used and the account creation process including the transaction logic</td></tr>
<tr><td> <em>Response:</em> <p>I used&nbsp;<span style="font-size: 13px;">Option 1: Generate a random 12 digit/character value; must regenerate<br>if a duplicate collision occurs. In order to create the account, I get<br>the id from the logged in user, and use that to insert a<br>new row into the accounts table. Then, 2 rows are inserted into the<br>transactions table using the account id from the account that was just created,<br>one for the world account to the user and another for the user<br>to the world account. Lastly, the accounts table is updated to change the<br>balance for the world account and for the user account based on what<br>the transaction amount is.</span><br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/curtis-asral/IT202-008/pull/53">https://github.com/curtis-asral/IT202-008/pull/53</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://cca3-prod.herokuapp.com/project/create_account.php">https://cca3-prod.herokuapp.com/project/create_account.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> User will be able to list their accounts </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the user's account list view (show 5 accounts)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/236348900-00badb74-e650-4639-8f87-8472a3e2cd02.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>This user has 18 accounts that I created during my testing of the<br>application. the most recent ones were made when the application was fully working<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how the page is displayed and the data lookup occurs</td></tr>
<tr><td> <em>Response:</em> <p>The data lookup in the database occurs similarly to the way it does<br>on the profile page when we need to populate the forms. I use<br>SELECT to get the necessary information:&nbsp;<span style="font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre;<br>color: rgb(224, 108, 117);">$query </span><span style="font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre; color:<br>rgb(86, 182, 194);">= </span><span style="font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre; color: rgb(152,<br>195, 121);">&quot;</span><span style="font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre; color: rgb(198, 120, 221);">SELECT</span>&lt;span<br>style=&quot;font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre; color: rgb(152, 195, 121);&quot;&gt; </span><span style="font-family:<br>Consolas, &quot;Courier New&quot;, monospace; white-space: pre; color: rgb(198, 120, 221);">account</span><span style="font-family: Consolas, &quot;Courier<br>New&quot;, monospace; white-space: pre; color: rgb(152, 195, 121);">, modified, balance </span><span style="font-family: Consolas,<br>&quot;Courier New&quot;, monospace; white-space: pre; color: rgb(198, 120, 221);">FROM</span><span style="font-family: Consolas, &quot;Courier New&quot;,<br>monospace; white-space: pre; color: rgb(152, 195, 121);"> Accounts </span><span style="font-family: Consolas, &quot;Courier New&quot;,<br>monospace; white-space: pre; color: rgb(198, 120, 221);">WHERE</span><span style="font-family: Consolas, &quot;Courier New&quot;, monospace; white-space:<br>pre; color: rgb(152, 195, 121);"> </span><span style="font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre;<br>color: rgb(86, 182, 194);">user_id</span><span style="font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre; color: rgb(152,<br>195, 121);"> </span><span style="font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre; color: rgb(86, 182,<br>194);">=</span><span style="font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre; color: rgb(152, 195, 121);"> :</span>&lt;span<br>style=&quot;font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre; color: rgb(86, 182, 194);&quot;&gt;user_id</span><span style="font-family: Consolas,<br>&quot;Courier New&quot;, monospace; white-space: pre; color: rgb(152, 195, 121);">&quot;; </span>I then store&nbsp;the information<br>in an associative array so I can access them individually. I use bootstrap<br>and css to make a table and populate it with the data from<br>the associative array.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/curtis-asral/IT202-008/pull/53">https://github.com/curtis-asral/IT202-008/pull/53</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://cca3-prod.herokuapp.com/project/my_accounts.php">https://cca3-prod.herokuapp.com/project/my_accounts.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Account Transaction Details </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of an account's transaction history</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/236509295-395aec97-4980-4991-ba33-0999c3ab1c48.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows account number, account type, balance, opened/created date of the selected account, shows<br>a few samples of transaction history with the src/dest account numbers (not account<br>id), the transaction type, the change in balance, when it occurred, and the<br>memo<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain how the lookup and display occurs</td></tr>
<tr><td> <em>Response:</em> <p>The db query for the account information is&nbsp;<span style="font-family: Consolas, &quot;Courier New&quot;, monospace;<br>white-space: pre; color: rgb(152, 195, 121);">&quot;</span><span style="font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre;<br>color: rgb(198, 120, 221);">SELECT</span><span style="font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre; color: rgb(152,<br>195, 121);"> </span><span style="font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre; color: rgb(198, 120,<br>221);">id</span><span style="font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre; color: rgb(152, 195, 121);">, </span>&lt;span<br>style=&quot;font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre; color: rgb(198, 120, 221);&quot;&gt;account</span><span style="font-family: Consolas,<br>&quot;Courier New&quot;, monospace; white-space: pre; color: rgb(152, 195, 121);">, created, balance </span><span style="font-family:<br>Consolas, &quot;Courier New&quot;, monospace; white-space: pre; color: rgb(198, 120, 221);">FROM</span><span style="font-family: Consolas, &quot;Courier<br>New&quot;, monospace; white-space: pre; color: rgb(152, 195, 121);"> Accounts </span><span style="font-family: Consolas, &quot;Courier<br>New&quot;, monospace; white-space: pre; color: rgb(198, 120, 221);">WHERE</span><span style="font-family: Consolas, &quot;Courier New&quot;, monospace;<br>white-space: pre; color: rgb(152, 195, 121);"> </span><span style="font-family: Consolas, &quot;Courier New&quot;, monospace; white-space:<br>pre; color: rgb(198, 120, 221);">account</span><span style="font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre; color:<br>rgb(152, 195, 121);"> </span><span style="font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre; color: rgb(86,<br>182, 194);">=</span><span style="font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre; color: rgb(152, 195, 121);"><br>:account_number&quot; </span>I am able to use the account number from the My Accounts<br>page by making each account number a link:&nbsp;<span style="font-family: Consolas, &quot;Courier New&quot;, monospace;<br>white-space: pre; color: rgb(209, 154, 102);">href=</span><span style="font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre;<br>color: rgb(152, 195, 121);">&quot;transaction_history.php?account=</span><span style="font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre; color: rgb(190,<br>80, 70);">&lt;?php </span><span style="font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre; color: rgb(86, 182,<br>194);">echo </span><span style="font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre; color: rgb(224, 108, 117);">$account[</span>&lt;span<br>style=&quot;font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre; color: rgb(152, 195, 121);&quot;&gt;&#39;account&#39;</span><span style="font-family: Consolas,<br>&quot;Courier New&quot;, monospace; white-space: pre; color: rgb(190, 80, 70);">] ?</span><span style="font-family: Consolas, &quot;Courier<br>New&quot;, monospace; white-space: pre; color: rgb(190, 80, 70);">&gt;</span><div>This link allows me to get<br>the account number on the transaction history page by doing:&nbsp;<span style="font-family: Consolas, &quot;Courier<br>New&quot;, monospace; white-space: pre; color: rgb(224, 108, 117);">$account_number </span><span style="font-family: Consolas, &quot;Courier New&quot;,<br>monospace; white-space: pre; color: rgb(86, 182, 194);">= </span><span style="font-family: Consolas, &quot;Courier New&quot;, monospace;<br>white-space: pre; color: rgb(224, 108, 117);">$_G</span><span style="color: rgb(224, 108, 117); font-family: Consolas, &quot;Courier<br>New&quot;, monospace; white-space: pre;">E</span><span style="font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre; color: rgb(224,<br>108, 117);">T[</span><span style="font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre; color: rgb(152, 195, 121);">&#39;account&#39;</span>&lt;span<br>style=&quot;color: rgb(224, 108, 117); font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre;&quot;&gt;]; </span>On the<br>transaction history page I use the query&nbsp;<span style="font-family: Consolas, &quot;Courier New&quot;, monospace; white-space:<br>pre; color: rgb(152, 195, 121);">&quot;</span><span style="font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre; color:<br>rgb(198, 120, 221);">SELECT</span><span style="font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre; color: rgb(152, 195,<br>121);"> src, dest, diff, reason, details, created </span><span style="font-family: Consolas, &quot;Courier New&quot;, monospace;<br>white-space: pre; color: rgb(198, 120, 221);">FROM</span><span style="font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre;<br>color: rgb(152, 195, 121);"> Transactions </span><span style="font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre;<br>color: rgb(198, 120, 221);">WHERE</span><span style="font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre; color: rgb(152,<br>195, 121);"> src </span><span style="font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre; color: rgb(86,<br>182, 194);">=</span><span style="font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre; color: rgb(152, 195, 121);"><br>:account_id</span><span style="font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre; color: rgb(152, 195, 121);">&quot; </span>to<br>get all of the details for each transaction based on the account_id which<br>i get from the account number from the link.</div><br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/curtis-asral/IT202-008/pull/58">https://github.com/curtis-asral/IT202-008/pull/58</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://cca3-prod.herokuapp.com/project/transaction_history.php?account=399015586024">https://cca3-prod.herokuapp.com/project/transaction_history.php?account=399015586024</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Deposit/Withdraw </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Show a Screenshot of the Deposit Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/236514327-c413b1e7-6a51-4633-9638-64097398ed3f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the dropdown of logged in user&#39;s accounts and their balances and a<br>text field to add the desired amount to deposit<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/236514571-aad28fb5-1af5-4781-a684-fc857e42e93c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows valid data filled in to the form before submit<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Show a Screenshot of the Withdraw Page (this potentially can be the same page with different views)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/236515446-b3636e05-2827-4b0e-90fd-353e760e255c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the dropdown of logged in user&#39;s accounts and their balances and a<br>text field to add the desired amount to withdraw<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/236515697-82876cfa-18ff-4166-abca-d07b60f21735.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows valid data filled in to the form before submit<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Show validation error for negative numbers</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/236515090-679fcc00-1dc8-4676-8946-5016071794d1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows trying to deposit a negative number<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Show validation error for withdrawing more than the account contains</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/236516080-da29a735-8356-4e91-a66e-c50adba3fb23.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows validation error for withdrawing more than the account contains<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Show a success message for deposit and withdraw (2 screenshots)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/236514769-57943085-0e47-476a-8c39-eb78a6c7dc9d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows deposit success<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/236515832-0754e61e-5cba-4ff8-b92e-9fee48d1d5e2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows withdraw success<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Show a screenshot of the transaction pairs in the DB for the above tests</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/236516309-1bae8a46-dd4a-4a18-923f-0fa0039ec095.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The last 4 transactions are the deposit and withdraw from the previous screenshots<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly explain how transactions work</td></tr>
<tr><td> <em>Response:</em> <p>Account lookup for the dropdown table is done the same way as it<br>is in the My Accounts page. When an account is selected in the<br>table, I use JavaScript to update the textContent of a previously empty &lt;div&gt;<br>area; this displays the selected account number and balance to the user. Then,<br>I add a cookie that holds the account number so that I can<br>use that upon form submission for the transaction. The transaction is done using<br>a function I made called&nbsp;make_deposit (or make_withdraw) the same way as the deposit<br>from Create Account—retrieve the account id number,&nbsp;create a new transaction for the world<br>account,&nbsp;create a new transaction for the user,&nbsp;update world and user account balance. For<br>withdraws I also check to make sure that the withdraw amount is not<br>greater than the account balance; if it is, then I send a flash<br>message and return out of the function (therefore not completing the transaction).<br><br></p><br></td></tr>
<tr><td> <em>Sub-Task 8: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/curtis-asral/IT202-008/pull/61">https://github.com/curtis-asral/IT202-008/pull/61</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/curtis-asral/IT202-008/pull/62">https://github.com/curtis-asral/IT202-008/pull/62</a> </td></tr>
<tr><td> <em>Sub-Task 9: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://cca3-prod.herokuapp.com/project/deposit.php">https://cca3-prod.herokuapp.com/project/deposit.php</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://cca3-prod.herokuapp.com/project/withdraw.php">https://cca3-prod.herokuapp.com/project/withdraw.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) </td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/236519766-ddc5590f-0109-4d73-94be-09f58745c29e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows project board with all Milestone 2 Issues. I have completed them all.<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/it202-milestone-2-bank-project/grade/cca3" target="_blank">Grading</a></td></tr></table>