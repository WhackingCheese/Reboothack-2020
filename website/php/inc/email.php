<link rel="stylesheet" href="./styles/email.css">
<div class="email">
    <div class="email__inner">
        <h2>Send e-mail to someone@example.com:</h2>
        <form action="mailto:someone@example.com" method="post" enctype="text/plain">
            Name: <input type="text" name="name"><br>
            E-mail: <input type="text" name="mail"><br>
            Comment: <input type="text" name="comment" size="50"><br><br>
            <input type="submit" value="Send">
            <input type="reset" value="Reset">
        </form>
    </div>
</div>