**Introduction**
---
This Project is mainly based on Dynamic web site and their uses using AWS software. In this project we mainly focus on creating college websites in a dynamic way using Amazon Web Services (AWS). We created the website using AWS Lambda. A server-side dynamic web page is a web page whose construction is controlled by an application server processing server-side script. In server-side scripting, parameters determine how the assembly of every new web page proceeds, including the
setting up of more client-side processing. A client-side dynamic web page processes the web page
using HTML scripting running in the browser as it loads. JavaScript and other scripting languages
determine the way the HTML in the received page is parsed into the Document Object Model, or
DOM, that represents the loaded web page. A program running on a web server (server-side scripting)
is used to generate the web content on various web pages, manage user sessions, and control
workflow. Server responses may be determined by such conditions as data in a posted HTML form,
parameters in the URL, the type of browser being used, the passage of time, or a database or server
state. Finally, a dynamic website will be hosted by using the amazon (aws) s3 cloud Services.

**Step wise Implementation**
---
**CREATE WEB APP**: Deploying, static resources for my web application using the AWS amplify Console.

**BUILD SERVERLESS FUNCTION**: Building a serverless function using AWS lambda

**LINK SERVERLESS FUNCTION TO WEBAPP**: Deploying the serverless function with API gateway.

**CREATE DATA TABLE**: Persisting data in an Amazon dynamoDB table

**ADD INTERACTIVITY TO WEB APP**: For modification of the web app to invoke API.
I am building this web application using the AWS web console accessible directly from browser.

**DB AND DB SCHEMA DESIGN**: Using a visual and intuitive interface.

**DATABASE CONNECTION PANEL AND SQL EDITOR**: To manage connection against local and remote db and to design /execute queries using the GUI or manually.

**BACKUP AND MIGRATION TOOLS**: Useful to import/export db and tables between other database servers/engines.

**PERFORMANCE DASHBOARD**: to monitor in real time the performance of my databaseserver.

**AWS Lambda Functiones Used**
---
**SolutionHelperFunction**: This Lambda function copies the assets required by the web application from the hosted Amazon Simple Storage Service (Amazon S3) bucket.

**CopyArtifactsHelperFunction**: This Lambda function copies the Lambda function artifacts from the hosted Amazon S3 bucket.

**GlobalSettingsGetLambdaFunction**: This Lambda function retrieves the global settings from
the GlobalTable DynamoDB table that stores the global configuration options, including
encryption, transcription, and approved countries for SMS notifications.

**GlobalSettingsUpdateLambdaFunction**: This Lambda function updates the global settings in the GlobalTable DynamoDB table that stores the global configuration options, including encryption, transcription, and approved countries for SMS notifications.

**AgentsGetByIdLambdaFunction**: This Lambda function retrieves agent information by ID andstores them in the the UsersTable DynamoDB table.

**AgentsGetLambdaFunction**: This Lambda function retrieves agent information.

**AgentsUpdateByIdLambdaFunction**: This Lambda function updates user management information in the UsersTable DynamoDB table based on ID.

**ConnectSyncRequestLambdaFunction**: This Lambda function helps agents connect the Voicemail for Amazon Connect Management Portal with the Amazon Connect instance.

**Snippets of my Website**
---
**Home Page**

![Homepage](https://github.com/user-attachments/assets/b8d242f3-c973-4a5e-8289-4c98c6e3061b)

![Homepage_2](https://github.com/user-attachments/assets/33fc8550-552b-4e44-8640-64d6c3a625d5)

**Menu**

![Menu Bar](https://github.com/user-attachments/assets/d4787d1b-9078-4a51-9246-7342321ca778)

**Faculty Information**

![image](https://github.com/user-attachments/assets/f8a20ecf-e8bc-4923-a833-4d96fd2baca3)

**Student Login**

![image](https://github.com/user-attachments/assets/b65f0041-1dc8-45dc-aa6c-75b222fdb83b)

**Advantages of my Project**
---
**Performance** --> The average response time of the system is less.

**Reliability** --> The system is highly reliable.

**Operability** --> The interface of the system will be consistent.

**Efficiency** --> If, once a user has learned about the system through his interaction, he can perform the task easily.

**Understandability** --> Because of user friendly interfaces, it is more understandable to the users.

**Conclusion**
---
For my project, I mainly useed two tools,they are xampp and sql y log community. They can installed from the chrome. Xampp is used to host the website locally in computer. When it comes to sql y log community it is used to view the data base that is in the website.
This is about a basic college website which is hosted on AWS. There are various kinds of options like Hod details, Faculty details, student info etc. One can register themselves in their respective roles and the data is saved on the RDS database on cloud. It can be further developed in future.

Please feel free to contact regardignt this project and if there are any edits to **sundeep0601@gmail.com**.

Thank you for reading
