<!DOCTYPE html>
<html>
<head>
    <title>New registration</title>
    <link rel="stylesheet" type="text/css" href="style_1.css" />     
    <script src="new_registration.js"></script>
</head>



<body>
    <?php
    
    ?>
    <header>
        <div class="container">
            <div id="forLogo">
                <h1>Logo</h1>
            </div>
        </div>
    </header>

    <section id="registration">
        <div class="container">
            <h1 align="center">New Patient Registration</h1>
            <form name="form1" method="post" action="signupuser.php">
                <table align="center" border="0" border-style="solid">
                    <tr>
                        <td width="140">Create Username</td>
                        <td>
                            <input type="text" maxlength="40" name="username" size="40" autofocus="autofocus"
                                required="required"
                                title="Username might contain letters and numbers" />
                        </td>
                    </tr>
                    <tr>
                        <td width="140">Create Password</td>                        
                        <td>                            
                            <input type="password" maxlength="20" name="password" id="password" size="41" autofocus="autofocus"
                                required="required"
                                title="Password might contain letters and numbers" />
                        </td>
                    </tr>
                    <tr>
                        <td width="140">Re-Enter Password</td>                        
                        <td>                            
                            <input type="password" maxlength="20" name="re_enter_password" id="re_enter_password" size="41" autofocus="autofocus"
                                onchange="validateRP()" required="required"
                                title="Please re-enter your password" />
                            <span style="color:red;" id="label_re_enter_password"></span>
                        </td>
                    </tr>
                    <tr>
                        <td width="140">Name</td>                        
                        <td>                            
                            <input type="text" maxlength="40" name="name" id="name" size="40" autofocus="autofocus"
                                required="required" pattern="^[A-Za-z \s?]{2,40}"
                                title="Name should only contain letters or a space" />
                        </td>
                    </tr>
                    <tr>
                        <td width="140">Address</td>                        
                        <td>                            
                            <input type="text" maxlength="100" name="address" id="address" size="40" autofocus="autofocus"
                                required="required" title="This filed is required, please enter the address" />
                        </td>
                    </tr>
                    <tr>
                        <td width="140">City</td>                        
                        <td>                            
                            <input type="text" maxlength="30" name="city" id="city" size="40" autofocus="autofocus"
                                required="required" pattern="^[A-Za-z \s?]{2,40}"
                                title="City should only contain letters or a space" />
                        </td>
                    </tr>
                    <tr>
                        <td width="140">Phone</td>                                               
                        <td>                           
                            <input type="text" maxlength="14" name="phone" id="phone" size="40" autofocus="autofocus"
                                required="required" pattern="\(?[0-9]{3}\)?-?[0-9]{3}-?[0-9]{4}"
                                title="10 digits are required" />
                        </td>
                    </tr>
                    <tr>
                        <td width="140">E-mail</td>                                               
                        <td>                            
                            <input type="text" maxlength="50" name="email" id="email" size="40" autofocus="autofocus"
                                required="required" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9._%+-]+\.[a-z]{2,3}$"
                                title="Email field should be anyCaracter@anyCaracter.abc" />
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                            <input type="submit" name="signup" value="Sign up" />
                        </td>
                    </tr>
                </table>
            </form>                 
        </div>
    </section>

    
    <p>&nbsp; </p>
    <p>&nbsp; </p>

    <footer>
        <p>UCA Counseling Center &copy; 2017</p>
    </footer>
</body>
</html>