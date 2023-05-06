<table><tr><td> <em>Assignment: </em> IT202 Milestone 3 Bank Project</td></tr>
<tr><td> <em>Student: </em> Curtis Asral (cca3)</td></tr>
<tr><td> <em>Generated: </em> 5/5/2023 11:23:51 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/it202-milestone-3-bank-project/grade/cca3" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone3 branch</li><li>Create a new markdown file called milestone3.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone3.md</li><li>Add/commit/push the changes to Milestone3</li><li>PR Milestone3 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes to get ready for Milestone 4</li><li>Submit the direct link to this new milestone3.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on GitHub and everywhere else. Images are only accepted from dev or prod, not localhost. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> User will be able to transfer between their accounts </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of transfer page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/236572626-d27f3ab2-285d-421e-8eeb-4bda15b02537.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The page clearly shows an &quot;Internal Transfer&quot; heading<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/236575312-e538df2f-2588-46bc-a96a-4983adcfc13a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the accounts once they are selected from the dropdowns<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot showing dropdown values</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/236572705-626390bf-c9a7-49ee-b396-a7f4a619c9cf.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows source account dropdown<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/236572767-8e471c4f-123b-4125-aaa2-705e68d386ce.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows destination account dropdown<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot showing user can't transfer more funds than they have</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/236572875-8f1309eb-d635-41a1-b5da-e56d7c67b1b9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows user can&#39;t transfer more funds than they have<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add screenshot showing user can't transfer to the same account</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/236573656-7ae3c036-2656-423d-985e-5ffb81f20fed.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows user can&#39;t transfer to the same account<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/236573777-bd188a2e-9827-4a2f-822a-c519c5bbc2f7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the code snippet that prevents this on the server-side<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add screenshot showing you can't transfer an negative balance</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/236573971-2c9f6eeb-9926-44d3-90b1-c865882657b0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows you can&#39;t transfer an negative balance<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/236574075-bb5f161e-eb24-44a7-a290-7d31cbd1e545.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the code snippet that prevents this on the server-side. min=&quot;1&quot; forces the<br>user to enter only numbers &gt;= 1.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add screenshot of the generated transaction history from the db</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/236574306-5e80713a-ded9-4e63-93f6-6bed14bc10f2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The 2 most recent entries into the transactions table are from a transfer<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 7: </em> Add a screenshot of the Accounts table showing both affected accounts</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/236574544-68e87ffc-d65e-4f78-ab0a-205ddf1c5194.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Accounts ID 6 and 7 are the ones that the transfer took place<br>upon. Account 6 started with $10 and a transfer of $5 to Account<br>7 took place leaving both accounts with $5<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 8: </em> Briefly explain the code process/flow of a transfer including how the accounts are fetched for the dropdowns</td></tr>
<tr><td> <em>Response:</em> <ul><li>The initial balances are fetched the same way as they are for the<br>deposit and withdraw pages. When an account is selected in the table, I<br>use JavaScript to update the textContent of a previously empty &lt;div&gt; area; this<br>displays the selected account number and balance to the user. Then, I add<br>a cookie that holds the account number so that I can use that<br>upon form submission for the transaction. I do this for both the source<br>and destination accounts.</li><li>The transaction is done using a function I made called&nbsp;make_transfer which<br>is a modification of both make_deposit and make_withdraw—retrieve source and destination account id<br>numbers,&nbsp;create a new transaction for the source account,&nbsp;create a new transaction for the<br>destination account,&nbsp;update source and destination account balances. I also check to make sure<br>that the transfer amount is not greater than the source account balance; if<br>it is, then I send a flash message and return out of the<br>function (therefore not completing the transaction).</li></ul><br></td></tr>
<tr><td> <em>Sub-Task 9: </em> Add pull request(s) url</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/curtis-asral/IT202-008/pull/68">https://github.com/curtis-asral/IT202-008/pull/68</a> </td></tr>
<tr><td> <em>Sub-Task 10: </em> Add link to transfer page from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://cca3-prod.herokuapp.com/project/transfer.php">https://cca3-prod.herokuapp.com/project/transfer.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Transaction History Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of transaction history page showing the new transfer transaction</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/236595594-6ae2acf0-2d46-4ef7-a669-c221e921a855.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of transaction history page showing the new transfer transaction. Most recent transaction<br>is the transfer from the screenshots.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots demonstrating the filters and pagination</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/236595673-a58ce5a4-e1e8-45bb-beaa-0d7a12427721.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>I will be using this account for all of the following screenshots. There<br>are no filters applied right now.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/236595707-72283ced-da7c-40fb-9a36-33c9ed0b558d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>I am now filtering the dates<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/236595726-783b4b7f-2973-420d-94c4-db7e9f0ab34d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>I am accepting all dates and now filtering the Transaction Type for Deposits<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/236595766-fabfae7c-f4d7-4c5a-827f-fea853e23a8a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Now filtering the Transaction Type for Withdraws<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/236595782-e788cdb5-10f3-487f-bfda-165324b33fb2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Now filtering the Transaction Type for Internal Transfers<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/236595795-10372a70-715b-4d38-8b19-fe61296cec40.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Now filtering the Transaction Type for External Transfers<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/236595845-cf78f3fd-fa39-47d1-a2e6-a17fe65a2fd5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>An example of both the dates and transaction type filters being applied<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how the filters/pagination work</td></tr>
<tr><td> <em>Response:</em> <ul><li>These filters took a lot of effort. In order for me to get<br>them to work, I formatted the URL each time a new dropdown option<br>was chosen. Here's an example from the dropdown box for the To Date:<br>&lt;a href="transaction_history.php?account=&lt;?php echo $account_number ?&gt;&amp;from=&lt;?php echo $fromDate; ?&gt;&amp;to=&lt;?php echo $transaction['created']; ?&gt;&amp;type=&lt;?php echo $type;<br>?&gt;" style="text-decoration:none; color:#333;"&gt; When I needed to access the variables to use them<br>for filtering with my db queries, I retrieved them from the $_GET variable.</li><li>I<br>attempted pagination but ultimately couldn't get it to work in time. I spent<br>a lot of time trying though but I had to give up.</li></ul><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add pull request(s) url</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/curtis-asral/IT202-008/pull/77">https://github.com/curtis-asral/IT202-008/pull/77</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add link to Transaction History page from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://cca3-prod.herokuapp.com/project/transaction_history.php?account=399015586024&type=all">https://cca3-prod.herokuapp.com/project/transaction_history.php?account=399015586024&type=all</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> User's profile First name and Last name </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the user's profile with the new fields</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/236590302-3abefba3-2a45-4348-8bb8-8eb737161e75.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the user&#39;s profile with the new fields prefilled<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add pull request(s) url</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/curtis-asral/IT202-008/pull/78">https://github.com/curtis-asral/IT202-008/pull/78</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add link to profile page from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://cca3-prod.herokuapp.com/project/profile.php">https://cca3-prod.herokuapp.com/project/profile.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> User will be able to transfer funds to another user </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the external transfer page with filled in data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/236594294-02845584-af16-40c0-b1d2-286509bf0723.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of the external transfer page with filled in data. Clearly shows an<br>&quot;External Transfer&quot; heading<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot showing user can't send more than they have</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/236594521-7f909fad-8577-411b-aa9e-0d071f671c52.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot shows user can&#39;t send more than they have<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/236594547-cbe04d88-b24c-4d66-94d9-a2350aa17116.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Code snippet that prevents this on the server-side<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot showing they can't send a negative amount</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/236594574-3c3c703f-7c4b-4f78-8a46-83340ea33e54.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot shows they can&#39;t send a negative amount<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/236594603-878d69d8-f6a8-46fc-b006-0781eafd82e0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Code snippet that prevents this on the server-side. min=&quot;1&quot; means that the user<br>has to enter a number &gt;= 1.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add screenshot(s) showing message if a user doesn't exist and/or a destination account wasn't found</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/236594999-c08e87bf-ea4b-4936-b72e-23ef016bb071.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot shows message if a user doesn&#39;t exist and/or a destination account wasn&#39;t<br>found<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/236595021-f64d1d75-64e6-4c7d-9feb-ad25e5bab33b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Code snippet that prevents this on the server-side. I use a boolean flag<br>to make sure that at least 1 account matching the search parameters exists;<br>if not, I send a flash message to let the user know.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add screenshot of the transactions table showing the recorded transfer</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/236594366-54f4cc2a-fa1e-4c2e-b9fb-3a3b46071600.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of the transactions table showing the recorded transfer. The 2 most recent<br>transfer entries are the ones from the earlier screenshot.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add screenshot(s) showing the updated account balances</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/236594426-521fd298-8bd1-45fd-99bf-2450f50bb043.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot shows the updated account balances. Accounts id number 13 (highlighted) and 21<br>(most recent) were used in the transfer.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly explain the process of looking up the target user's account and the validation logic</td></tr>
<tr><td> <em>Response:</em> <ul><li>When the search button is pressed, I use php to loop through all<br>of the accounts (selected through a db query). I set up the Destination<br>Account dropdown button to only display accounts whose last 4 digits match the<br>ones submitted by the user.</li><li>The last name is not used as part of<br>the search process, because some users don't have a first or last name.<br>I just set up the Destination Account dropdown button to filter using the<br>last 4 digits.</li><li>Multiple results are handled by displaying the full account number of<br>the destination account. This way, you will definitely know if you're transferring to<br>the right one.</li></ul><br></td></tr>
<tr><td> <em>Sub-Task 8: </em> Add pull request(s) url</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/curtis-asral/IT202-008/pull/84">https://github.com/curtis-asral/IT202-008/pull/84</a> </td></tr>
<tr><td> <em>Sub-Task 9: </em> Add link to external transfer page from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://cca3-prod.herokuapp.com/project/external_transfer.php">https://cca3-prod.herokuapp.com/project/external_transfer.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone3 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/94308793/236596254-f1bb71d5-3b67-4c27-b5ef-e444eced6003.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows which issues are done/closed (project board) Incomplete Issues are not closed<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/it202-milestone-3-bank-project/grade/cca3" target="_blank">Grading</a></td></tr></table>