<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">

    <div class="col s8 m7 offset-s2">
        <br />
        <div class="card row">

            <div class="col s3 valign-wrapper ">
                <img src="https://atlas-content-cdn.pixelsquid.com/stock-images/sticky-notes-note-9K8Q3G7-600.jpg"
                    height="250px" width="300px" />
            </div>

            <div class="col s7 offset-s1">
                <div class="card-content">
                    <div class="row">
                        <form action="<?php echo base_url()?>add" method="post">
                            <div class="row">
                                <div class="input-field">
                                    <i class="material-icons prefix">title</i>
                                    <input id="title" type="text" class="validate" name="title">
                                    <label for="title">Title </label>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">wrap_text</i>
                                        <textarea id="content" class="materialize-textarea" name="content"></textarea>
                                        <label for="content">Add Note </label>
                                    </div>
                                </div>
                            </div>
                            <div class="center">
                                <button class="btn waves-effect waves-light indigo" type="submit" name="action">Add
                                    <i class="material-icons right">add</i>
                                </button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>