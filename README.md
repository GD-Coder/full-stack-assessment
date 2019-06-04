<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<h1 align="center">About This Project</h1>

<p>Small Laravel app displaying all elements of full stack PHP development. Even though this is just a small app with a singular function, it has been developed in a manner that makes it scalable in the future.</p>

<h1 align="center">Relevant Files</h1>

<ul>

<a href="https://github.com/GD-Coder/full-stack-assessment/blob/master/app/Http/Controllers/MessageController.php"><li>MessageController.php - Main controller for sending messages after filling out Contact form</li></a>
<a href="https://github.com/GD-Coder/full-stack-assessment/blob/master/app/Models/Message.php"><li>Message.php - Database model for contact messages</li></a>
<a href="https://github.com/GD-Coder/full-stack-assessment/blob/master/app/Services/MessageService.php"><li>MessageService.php - Service for performing CRUD operations with messages.</li></a>
<a href="https://github.com/GD-Coder/full-stack-assessment/blob/master/app/Services/Message/CreateMessage.php"><li>CreateMessage.php - Class used solely for creating messages in the database.</li></a>
<a href="https://github.com/GD-Coder/full-stack-assessment/blob/master/app/Events/MessageSent.php"><li>MessageSent.php - Event class created to alert app when someone fills out the contact form.</li></a>
<a href="https://github.com/GD-Coder/full-stack-assessment/blob/master/app/Listeners/SentMessageListener.php"><li>SentMessageListener.php - Listener class created to send an email to the sender of the contact message.</li></a>
<a href="https://github.com/GD-Coder/full-stack-assessment/blob/master/resources/js/app.js"><li>app.js - The main javascript file to handle gathering data from the user.</li></a>
<a href="https://github.com/GD-Coder/full-stack-assessment/blob/master/resources/js/components/MessageForm.vue"><li>MessageForm.vue - Front end component for user to enter data into.</li></a>
<a href="https://github.com/GD-Coder/full-stack-assessment/blob/master/resources/js/components/SnackBar.vue"><li>SnackBar.vue - Component used to display error/success messages to the user.</li></a>
<a href="https://github.com/GD-Coder/full-stack-assessment/tree/master/resources/views"><li>HTML Views - View files for the UI/UX</li></a>
</ul>
