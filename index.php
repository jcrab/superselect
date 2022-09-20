<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Instructions</h2>

        <p>Create an application that demonstrates the use of PHP superglobals 
            as well as a simple SQL query.</p>
        <ul>
            <li>Each page must include a menu (HTML provided) at the bottom with four links:
                <ul>
                    <li>Home (this page)</li>
                    <li>Superglobal input</li>
                    <li>Superglobal output</li>
                    <li>Projects</li>
                </ul></li>
            <li>There are many ways to &quot;include&quot; HTML in a web page, but most are not pretty. PHP is better than most.
                <ul>
                    <li><a href="https://www.w3schools.com/howto/howto_html_include.asp">JavaScript and HTML</a></li>
                    <li><a href="https://css-tricks.com/the-simplest-ways-to-handle-html-includes/">Several Frameworks</a></li>
                    <li><a href="https://www.php.net/manual/en/function.include.php">php.net from The PHP Group</a></li>
                </ul></li>
            <li>In addition to the four pages above, you will need a login form to ensure that users login before they can see the project list.</li>
            <li>You will also need to incorporate two PHP scripts (files):
                <ul>
                    <li>authenticate.php</li>
                    <li>validate.php</li>
                </ul>
            </li>
            <li>The output page must display the entire contents of the following superglobals (in this order):
                <ul>
                    <li>$_GET</li>
                    <li>$_POST</li>
                    <li>$_COOKIE</li>
                    <li>$_SESSION</li>
                    <li>$_REQUEST</li>
                    <li>$_SERVER</li>
                    <li>$GLOBALS</li>
                    <li>$_ENV</li>
                </ul></li>
            <li>NOTE that $_FILES is missing!</li>
            <li>You may use var_dump() and/or print_r() to display the contents of the superglobals.</li>
            <li>The input page will have a single form that uses POST to send the following text items to the output page:
                <ul>
                    <li>Cookie name</li>
                    <li>Cookie value</li>
                    <li>Cookie expiration</li>
                    <li>Session key</li>
                    <li>Session value</li>
                </ul></li>
            <li>The projects page will select and display all data from the assignments table.
                <ul>
                    <li>Users cannot access this page until they login.</li>
                    <li>Valid users are those that have a matching username and password.</li>
                    <li>If the login attempt is invalid save the error message in the session with the key &quot;error&quot; and the value &quot;Invalid username and/or password&quot;</li>
                    <li>If there is an error message in the session, display it on the login page and then remove it (so that it won't display more than once).</li>
                    <li>Also provide a button on the projects page that will allow the user to logout (using PHP unset).</li>
                </ul></li>
            <li>Try various things you have been curious about:
                <ul>
                    <li>go directly to output without using an input form</li>
                    <li>try a hard-coded query string at the end of the output URL</li>
                </ul></li>
        </ul>

        <?php include './menu.html'; ?>
    </body>
</html>
