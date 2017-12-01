<div class="login-wrapper">
                <h1> Students Login</h1>
                <form action="login.php" method="POST" class="login">
                    <h3 class="label"> Student Number</h3>
                    <input class="normal-input" placeholder="0000-00000-MN-0"   type="text" name="studno" required>
                    <h3 class="label"> Birthday</h3>
                    <div class="option-wrapper">
                        <select class="select-long" name="bday_month" id="1">
                            <option value="January"> January </option>
                            <option value="February"> February </option>
                            <option value="March"> March </option>
                            <option value="April"> April </option>
                            <option value="May"> May </option>
                            <option value="June"> June </option>
                            <option value="July"> July </option>
                            <option value="August"> August </option>
                            <option value="September"> September </option>
                            <option value="October"> October </option>
                            <option value="November"> November </option>
                            <option value="December"> December </option>
                        </select>
                        <input class="normal-input-short" type="text" name="bday_day" required />
                        <select class="select-short" name="bday_year" id="bday_year" required >
                                
                                <option value="2003" id="options">2003</option>
                                <option value="2002" id="options">2002</option>
                                <option value="2001" id="options">2001</option>
                                <option value="2000" id="options">2000</option>
                                <option value="1999" id="options">1999</option>
                                <option value="1998" id="options">1998</option>
                                <option value="1997" id="options">1997</option>
                                <option value="1996" id="options">1996</option>
                                <option value="1995" id="options">1995</option>
                                <option value="1994" id="options">1994</option>
                                <option value="1993" id="options">1993</option>
                                <option value="1992" id="options">1992</option>
                                <option value="1991" id="options">1991</option>
                                <option value="1990" id="options">1990</option>						
                                <option value="1989" id="options">1989</option>
                                <option value="1988" id="options">1988</option>
                            </select>
                    </div>
                    <h3 class="label" > Password</h3>
                    <input type="password" class="normal-input" required>
                    <br>
                    <button name="submit"> Log In </button>
                </form>
</div>
