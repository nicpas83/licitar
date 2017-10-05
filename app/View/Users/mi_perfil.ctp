<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Perfil de Usuario</h3>    
    </div>
</div>
<!-- .row -->
<div class="row">
    <div class="col-sm-12">
        <div class="card card-block">
            
            <form class="form-horizontal m-t-40">
                <h4 class="card-title">Datos Personales</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" value="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-email">Apellido</label>
                            <input name="example-email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="example-email">Teléfono</label>
                            <input name="example-email" class="form-control">
                        </div>
                    </div>
                </div>
                
                <h3>Información Comercial</h3>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Razón Social</label>
                            <input type="text" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label>Dirección Comercial</label>
                            <input type="text" class="form-control" value="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-email">Cuit</label>
                            <input name="example-email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="example-email">Teléfono</label>
                            <input name="example-email" class="form-control">
                        </div>
                    </div>
                </div>

                
                
                
                
                
                
                
                
                
                

                <div class="form-group">
                    <label>Email</label>
                    <input type="password" class="form-control" value="password">
                </div>
                <div class="form-group">
                    <label>Placeholder</label>
                    <input type="text" class="form-control" placeholder="placeholder">
                </div>
                <div class="form-group">
                    <label>Text area</label>
                    <textarea class="form-control" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label>Read only input</label>
                    <input class="form-control" type="text" placeholder="Readonly input here…" readonly>
                </div>
                <div class="form-group">
                    <fieldset disabled>
                        <label for="disabledTextInput">Disabled input</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                    </fieldset>
                </div>
                <div class="form-group row p-t-20">
                    <div class="col-sm-4">
                        <div class="form-check has-success">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" id="checkboxSuccess" value="option1"> Checkbox with success
                            </label>
                        </div>
                        <div class="form-check has-warning">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" id="checkboxWarning" value="option1"> Checkbox with warning
                            </label>
                        </div>
                        <div class="form-check has-danger">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" id="checkboxDanger" value="option1"> Checkbox with danger
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-check">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Check this custom checkbox</span>
                            </label>
                        </div>
                        <div class="form-check bd-example-indeterminate">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Check this custom checkbox</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Check this custom checkbox</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-check">
                            <label class="custom-control custom-radio">
                                <input id="radio1" name="radio" type="radio" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Toggle this custom radio</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="custom-control custom-radio">
                                <input id="radio2" name="radio" type="radio" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Or toggle this other custom radio</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Input Select</label>
                    <select class="custom-select col-12" id="inlineFormCustomSelect">
                        <option selected>Choose...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <fieldset class="form-group">
                    <label>Default file upload</label>
                    <label class="custom-file d-block">
                        <input type="file" id="file" class="custom-file-input">
                        <span class="custom-file-control"></span>
                    </label>
                </fieldset>
                <div class="form-group">
                    <label>Default file upload</label>
                    <input type="file" class="form-control" id="exampleInputFile" aria-describedby="fileHelp">
                </div>
                <div class="form-group">
                    <label>Custom File upload</label>
                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                        <div class="form-control" data-trigger="fileinput">
                            <i class="fa fa-file fileinput-exists"></i>
                            <span class="fileinput-filename"></span>
                        </div>
                        <span class="input-group-addon btn btn-secondary btn-file"> 
                            <span class="fileinput-new">Select file</span>
                            <span class="fileinput-exists">Change</span>
                            <input type="file" name="...">
                        </span>
                        <a href="#" class="input-group-addon btn btn-secondary fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                </div>
                <div class="form-group">
                    <label>Helping text</label>
                    <input type="text" class="form-control" placeholder="Helping text">
                    <span class="help-block"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span> </div>
            </form>
        </div>
    </div>
</div>
<!-- /.row -->






<div class="row">
    <!-- Column -->
    <div class="col-lg-4 col-xlg-3 col-md-5">
        <div class="card">
            <div class="card-block">
                <center class="m-t-30"> <img src="../assets/images/users/logo-mi-perfil.jpg" class="img-circle" width="150" />
                    <h4 class="card-title m-t-10">(Nombre Empresa SRL)</h4>
                    <h6 class="card-subtitle">leyenda / rubro</h6>
                </center>
            </div>
            <div>
                <hr> </div>
            <div class="card-block"> 
                <small class="text-muted">Email </small>
                <h6>info@miempresa.com</h6> 
                <small class="text-muted p-t-30 db">Teléfono</small>
                <h6>+91 654 784 547</h6> 
                <small class="text-muted p-t-30 db">Dirección</small>
                <h6>Campana 2572, CABA</h6>
                <div class="map-box">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6567.783111343806!2d-58.49709044732153!3d-34.606903630743375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb626df980a69%3A0xfa3e8dff5ac84281!2sCampana+2572%2C+C1417ACJ+CABA!5e0!3m2!1ses-419!2sar!4v1507157064794" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div> <small class="text-muted p-t-30 db">Redes Sociales</small>
                <br/>
                <button class="btn btn-circle btn-secondary"><i class="fa fa-facebook"></i></button>
                <button class="btn btn-circle btn-secondary"><i class="fa fa-twitter"></i></button>
                <button class="btn btn-circle btn-secondary"><i class="fa fa-youtube"></i></button>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-8 col-xlg-9 col-md-7">
        <div class="card">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs profile-tab" role="tablist">
                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Datos Principales</a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Direcciones de Entrega</a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Opciones</a> </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="home" role="tabpanel">
                    <div class="card-block">
                        <div class="profiletimeline">
                            <div class="sl-item">
                                <div class="sl-left"> <img src="../assets/images/users/1.jpg" alt="user" class="img-circle" /> </div>
                                <div class="sl-right">
                                    <div><a href="#" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                        <p>assign a new task <a href="#"> Design weblayout</a></p>
                                        <div class="row">
                                            <div class="col-lg-3 col-md-6 m-b-20"><img src="../assets/images/big/img1.jpg" class="img-responsive radius" /></div>
                                            <div class="col-lg-3 col-md-6 m-b-20"><img src="../assets/images/big/img2.jpg" class="img-responsive radius" /></div>
                                            <div class="col-lg-3 col-md-6 m-b-20"><img src="../assets/images/big/img3.jpg" class="img-responsive radius" /></div>
                                            <div class="col-lg-3 col-md-6 m-b-20"><img src="../assets/images/big/img4.jpg" class="img-responsive radius" /></div>
                                        </div>
                                        <div class="like-comm"> <a href="javascript:void(0)" class="link m-r-10">2 comment</a> <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="sl-item">
                                <div class="sl-left"> <img src="../assets/images/users/2.jpg" alt="user" class="img-circle" /> </div>
                                <div class="sl-right">
                                    <div> <a href="#" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                        <div class="m-t-20 row">
                                            <div class="col-md-3 col-xs-12"><img src="../assets/images/big/img1.jpg" alt="user" class="img-responsive radius" /></div>
                                            <div class="col-md-9 col-xs-12">
                                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. </p> <a href="#" class="btn btn-success"> Design weblayout</a></div>
                                        </div>
                                        <div class="like-comm m-t-20"> <a href="javascript:void(0)" class="link m-r-10">2 comment</a> <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="sl-item">
                                <div class="sl-left"> <img src="../assets/images/users/3.jpg" alt="user" class="img-circle" /> </div>
                                <div class="sl-right">
                                    <div><a href="#" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                        <p class="m-t-10"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper </p>
                                    </div>
                                    <div class="like-comm m-t-20"> <a href="javascript:void(0)" class="link m-r-10">2 comment</a> <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>
                                </div>
                            </div>
                            <hr>
                            <div class="sl-item">
                                <div class="sl-left"> <img src="../assets/images/users/4.jpg" alt="user" class="img-circle" /> </div>
                                <div class="sl-right">
                                    <div><a href="#" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                        <blockquote class="m-t-10">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--second tab-->
                <div class="tab-pane" id="profile" role="tabpanel">
                    <div class="card-block">
                        <div class="row">
                            <div class="col-md-3 col-xs-6 b-r"> <strong>Full Name</strong>
                                <br>
                                <p class="text-muted">Johnathan Deo</p>
                            </div>
                            <div class="col-md-3 col-xs-6 b-r"> <strong>Mobile</strong>
                                <br>
                                <p class="text-muted">(123) 456 7890</p>
                            </div>
                            <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                                <br>
                                <p class="text-muted">johnathan@admin.com</p>
                            </div>
                            <div class="col-md-3 col-xs-6"> <strong>Location</strong>
                                <br>
                                <p class="text-muted">London</p>
                            </div>
                        </div>
                        <hr>
                        <p class="m-t-30">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries </p>
                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <h4 class="font-medium m-t-30">Skill Set</h4>
                        <hr>
                        <h5 class="m-t-30">Wordpress <span class="pull-right">80%</span></h5>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                        </div>
                        <h5 class="m-t-30">HTML 5 <span class="pull-right">90%</span></h5>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                        </div>
                        <h5 class="m-t-30">jQuery <span class="pull-right">50%</span></h5>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                        </div>
                        <h5 class="m-t-30">Photoshop <span class="pull-right">70%</span></h5>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="settings" role="tabpanel">
                    <div class="card-block">
                        <form class="form-horizontal form-material">
                            <div class="form-group">
                                <label class="col-md-12">Full Name</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Johnathan Doe" class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="example-email" class="col-md-12">Email</label>
                                <div class="col-md-12">
                                    <input type="email" placeholder="johnathan@admin.com" class="form-control form-control-line" name="example-email" id="example-email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Password</label>
                                <div class="col-md-12">
                                    <input type="password" value="password" class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Phone No</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="123 456 7890" class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Message</label>
                                <div class="col-md-12">
                                    <textarea rows="5" class="form-control form-control-line"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12">Select Country</label>
                                <div class="col-sm-12">
                                    <select class="form-control form-control-line">
                                        <option>London</option>
                                        <option>India</option>
                                        <option>Usa</option>
                                        <option>Canada</option>
                                        <option>Thailand</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button class="btn btn-success">Update Profile</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>
<!-- Row -->