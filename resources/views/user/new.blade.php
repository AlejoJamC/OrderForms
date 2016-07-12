@extends('layouts.admin')

@section('css')
@stop

@section('title', 'Historial de las ordenes de compra')

@section('content')
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <h3 class="page-title"> Bootstrap Form Controls
                <small>bootstrap form controls and more</small>
            </h3>
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="index.html">Home</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <span>Form Stuff</span>
                    </li>
                </ul>
                <div class="page-toolbar">
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true"> Actions
                            <i class="fa fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li>
                                <a href="#">
                                    <i class="icon-bell"></i> Action</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-shield"></i> Another action</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-user"></i> Something else here</a>
                            </li>
                            <li class="divider"> </li>
                            <li>
                                <a href="#">
                                    <i class="icon-bag"></i> Separated link</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- END PAGE HEADER-->
            <div class="row">
                <div class="col-md-2 "></div>
                <div class="col-md-8 ">
                    <!-- BEGIN REGISTER USER FORM -->
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-settings font-dark"></i>
                                <span class="caption-subject font-dark sbold uppercase">Registrar nuevo usuario</span>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <form class="form-horizontal" role="form">
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Email Address</label>
                                        <div class="col-md-9">
                                            <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-envelope"></i>
                                                        </span>
                                                <input type="email" class="form-control" placeholder="Email Address"> </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Password</label>
                                        <div class="col-md-9">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-user"></i>
                                                </span>
                                                <input type="password" class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Block Help</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder="Enter text">
                                            <span class="help-block"> A block of help text. </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Inline Help</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control input-inline input-medium" placeholder="Enter text">
                                            <span class="help-inline"> Inline help. </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Input Group</label>
                                        <div class="col-md-9">
                                            <div class="input-inline input-medium">
                                                <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-user"></i>
                                                            </span>
                                                    <input type="email" class="form-control" placeholder="Email Address"> </div>
                                            </div>
                                            <span class="help-inline"> Inline help. </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Email Address</label>
                                        <div class="col-md-9">
                                            <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-envelope"></i>
                                                        </span>
                                                <input type="email" class="form-control" placeholder="Email Address"> </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Password</label>
                                        <div class="col-md-9">
                                            <div class="input-group">
                                                <input type="password" class="form-control" placeholder="Password">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-user"></i>
                                                        </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Left Icon</label>
                                        <div class="col-md-9">
                                            <div class="input-icon">
                                                <i class="fa fa-bell-o"></i>
                                                <input type="text" class="form-control" placeholder="Left icon"> </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Right Icon</label>
                                        <div class="col-md-9">
                                            <div class="input-icon right">
                                                <i class="fa fa-microphone"></i>
                                                <input type="text" class="form-control" placeholder="Right icon"> </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Icon Input in Group Input</label>
                                        <div class="col-md-9">
                                            <div class="input-group">
                                                <div class="input-icon">
                                                    <i class="fa fa-lock fa-fw"></i>
                                                    <input id="newpassword" class="form-control" type="text" name="password" placeholder="password" /> </div>
                                                        <span class="input-group-btn">
                                                            <button id="genpassword" class="btn btn-success" type="button">
                                                                <i class="fa fa-arrow-left fa-fw" /></i> Random</button>
                                                        </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Input With Spinner</label>
                                        <div class="col-md-9">
                                            <input type="password" class="form-control spinner" placeholder="Password"> </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Static Control</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> email@example.com </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Disabled</label>
                                        <div class="col-md-9">
                                            <input type="password" class="form-control" placeholder="Disabled" disabled> </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Readonly</label>
                                        <div class="col-md-9">
                                            <input type="password" class="form-control" placeholder="Readonly" readonly> </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Dropdown</label>
                                        <div class="col-md-9">
                                            <select class="form-control">
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                                <option>Option 4</option>
                                                <option>Option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Multiple Select</label>
                                        <div class="col-md-9">
                                            <select multiple class="form-control">
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                                <option>Option 4</option>
                                                <option>Option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Textarea</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile" class="col-md-3 control-label">File input</label>
                                        <div class="col-md-9">
                                            <input type="file" id="exampleInputFile">
                                            <p class="help-block"> some help text here. </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Checkboxes</label>
                                        <div class="col-md-9">
                                            <div class="mt-checkbox-list">
                                                <label class="mt-checkbox">
                                                    <input type="checkbox"> Checkbox 1
                                                    <span></span>
                                                </label>
                                                <label class="mt-checkbox">
                                                    <input type="checkbox"> Checkbox 1
                                                    <span></span>
                                                </label>
                                                <label class="mt-checkbox">
                                                    <input type="checkbox" disabled> Disabled
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Outline Checkboxes</label>
                                        <div class="col-md-9">
                                            <div class="mt-checkbox-list">
                                                <label class="mt-checkbox mt-checkbox-outline">
                                                    <input type="checkbox"> Checkbox 1
                                                    <span></span>
                                                </label>
                                                <label class="mt-checkbox mt-checkbox-outline">
                                                    <input type="checkbox"> Checkbox 1
                                                    <span></span>
                                                </label>
                                                <label class="mt-checkbox mt-checkbox-outline">
                                                    <input type="checkbox" disabled> Disabled
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Inline Checkboxes</label>
                                        <div class="col-md-9">
                                            <div class="mt-checkbox-inline">
                                                <label class="mt-checkbox">
                                                    <input type="checkbox" id="inlineCheckbox21" value="option1"> Checkbox 1
                                                    <span></span>
                                                </label>
                                                <label class="mt-checkbox">
                                                    <input type="checkbox" id="inlineCheckbox22" value="option2"> Checkbox 2
                                                    <span></span>
                                                </label>
                                                <label class="mt-checkbox">
                                                    <input type="checkbox" id="inlineCheckbox23" value="option3" disabled> Disabled
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Radios</label>
                                        <div class="col-md-9">
                                            <div class="mt-radio-list">
                                                <label class="mt-radio">
                                                    <input type="radio" name="optionsRadios" id="optionsRadios22" value="option1" checked> Option 1
                                                    <span></span>
                                                </label>
                                                <label class="mt-radio">
                                                    <input type="radio" name="optionsRadios" id="optionsRadios23" value="option2" checked> Option 2
                                                    <span></span>
                                                </label>
                                                <label class="mt-radio">
                                                    <input type="radio" name="optionsRadios" id="optionsRadios24" value="option2" disabled> Disabled
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Outline Radios</label>
                                        <div class="col-md-9">
                                            <div class="mt-radio-list">
                                                <label class="mt-radio mt-radio-line">
                                                    <input type="radio" name="optionsRadios" id="optionsRadios22" value="option1" checked> Option 1
                                                    <span></span>
                                                </label>
                                                <label class="mt-radio mt-radio-line">
                                                    <input type="radio" name="optionsRadios" id="optionsRadios23" value="option2" checked> Option 2
                                                    <span></span>
                                                </label>
                                                <label class="mt-radio mt-radio-line">
                                                    <input type="radio" name="optionsRadios" id="optionsRadios24" value="option2" disabled> Disabled
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Inline Radio</label>
                                        <div class="col-md-9">
                                            <div class="mt-radio-inline">
                                                <label class="mt-radio">
                                                    <input type="radio" name="optionsRadios" id="optionsRadios25" value="option1" checked> Option 1
                                                    <span></span>
                                                </label>
                                                <label class="mt-radio">
                                                    <input type="radio" name="optionsRadios" id="optionsRadios26" value="option2" checked> Option 2
                                                    <span></span>
                                                </label>
                                                <label class="mt-radio">
                                                    <input type="radio" name="optionsRadios" id="optionsRadios27" value="option3" disabled> Disabled
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" class="btn green">Submit</button>
                                            <button type="button" class="btn default">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END REGISTER USER FORM -->
                </div>
                <div class="col-md-2 "></div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
@endsection

@section('js')
@endsection