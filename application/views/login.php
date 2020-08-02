<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">

    <div class="col s8 m7 offset-s2">
        <br />
        <h2 class="indigo-text">Login Here</h2>

        <div class="card row">

            <div class="col s8 offset-s2">
                <div class="card-content">
                    <div class="row">
                        <form action="<?php echo base_url()?>login" method="post">
                        <div class="row">
                                <div class="input-field">
                                    <i class="material-icons prefix">supervisor_account</i>
                                    <input id="title" type="text" class="validate" name="name" required>
                                    <label for="title">Name </label>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">lock</i>
                                        <input id="title" type="password" class="validate" name="password" pattern=".{4,6}" 
                                        oninvalid="this.setCustomValidity('Password should of min 4 characters and max 6 characters')"
                                        oninput="this.setCustomValidity('')" 
                                        required>
                                    <label for="title">Password</label>
                                    </div>
                                </div>
                            </div>
                            <div class="center">
                                <button class="btn waves-effect waves-light indigo" type="submit" name="action">Login
                                    <i class="material-icons right">login</i>
                                </button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>