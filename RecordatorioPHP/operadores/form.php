<!DOCTYPE HTML>
<HTML lang="en">
    <HEAD>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <TITLE>Form</TITLE>
    </HEAD>
    <H1>Form PHP</H1>
    <FORM method="GET" action="get.php">
        <P>
            <LABEL for="name">Name: </LABEL>
            <input type="text" name="Name" value="" />
        </P>
        <P>
            <LABEL for="name">Lastname: </LABEL>
            <input type="text" name="LastName" value="" />
        </P>
        <input type="submit" value="Send" name="Submit" />
    </FORM>
    <HR>
    <FORM method="POST" action="get.php">
        <P>
            <LABEL for="name">Name: </LABEL>
            <input type="text" name="Name" value="" />
        </P>
        <P>
            <LABEL for="name">Lastname: </LABEL>
            <input type="text" name="LastName" value="" />
        </P>
        <input type="submit" value="Send" name="Submit" />
    </FORM>
</HTML>

<?php
?>

