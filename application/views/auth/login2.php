    <body>

        <div class="container">

            <?php echo form_open("auth/login2");?>
                <h2 class="form-signin-heading">Please sign in</h2>
                <input type="text" name="identity" id="identity" value="" class="input-block-level" placeholder="Email address">
                <input type="password" name="password" id="password" value="" class="input-block-level" placeholder="Password">
                <label class="checkbox">
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
                <button class="btn btn-large btn-primary" type="submit">Sign in</button>
            </form>

        </div> <!-- /container -->

        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?php echo base_url("assets/js/jquery.js");?>"></script>
        <script src="<?php echo base_url("assets/js/bootstrap.min.js");?>"></script>

    </body>
</html>
