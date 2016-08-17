@extends('layouts.main')
@section('content')
							<!-- BEGIN SITE ACTIVITY -->
							<div class="col-md-12">
								<div class="card " style="min-height: 85vh;">
									<div class="row">
										<div class="col-md-12">
											<div class="card-body">

                                                <div class="row">
                                                    <div class="col-md-3"></div>
                                                    <div class="col-md-4">
                                                        <form class="form" action="analyze" method="GET">

                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="url" id="regular1" placeholder="www.example.com">
                                                                <label for="regular1">Website URL</label>
                                                            </div>
                                                            <div><strong id="error" style="color:red"></strong></div>
                                                    </div>
                                                    <div class="col-md-2" style="padding-top: 1em;">
                                                        <input type="submit" class="btn ink-reaction btn-raised btn-primary" style="width: 100%;" value="ANALYZE" id="submitt">
                                                        </form>
                                                    </div>
                                                    <div class="col-md-3"></div>
                                                </div>
                                                <br><br>
                                                <div class="row">
                                                    <div class="col-md-2"></div>
                                                    <div class="col-md-3 col-sm-5 screen-shot" style="align :center">
                                                        <div style="position:relative;height:450px">
                                                            <img class="img-responsive" src="{{url('img')}}/droid2.png" style="position:absolute">
                                                            <div style="width:212px;height:320px;background-color:white;position:absolute;left:15px;top:55px">
                                                                <img class="img-responsive" src="data:image/jpeg;base64,{{$scr}}" style="width:100%;height:100%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5 col-sm-7">

                                                        <div class="row">
                                                            <div class="col-md-1 hidden-xs"></div>
                                                            <div class="col-md-4 col-sm-4 col-xs-5" >
                                                                <center>
                                                                <div class="tile-icon" style="background-color: #2E9C4D; width: 10em; height: 10em; border-radius: 100px; padding-top: 0.3em; text-align: center;">
                                                                    <p class="text-xxxxl" style="color: #fff;">{{$usability}}</p>
                                                               </div>
                                                                    </center>
                                                            </div>
                                                            <div class="col-md-7 col-sm-8 col-xs-7" style="margin-top: -1em;">
                                                                <p class="text-xxl">{{$usabilitytext}}</p>
                                                                <p style="margin-top: -1em;">The Google Usability score for this website is {{$usability}}/100. Satisfies basic usability test.</p>
                                                                <p><img src="{{URL::asset('icons/error.png')}}" width="20px"> {{$usabilityMinus}} error(s) found<br> <img src="{{URL::asset('icons/tick.png')}}" width="20px"> {{$usabilityPlus}} rule(s) passed</p>
                                                                <button type="button" class="btn ink-reaction btn-flat btn-primary">Learn More</button>
                                                            </div>
                                                        </div>

                                                        <br><br>

                                                        <div class="row">
                                                            <div class="col-md-1 hidden-xs"></div>
                                                            <div class="col-md-4 col-sm-4 col-xs-5">
                                                                <center>
                                                                <div class="tile-icon" style="background-color: #D15436; width: 10em; height: 10em; border-radius: 100px; padding-top: 0.3em; text-align: center;">
                                                                    <p class="text-xxxxl" style="color: #fff;">{{$speed}}</p>
                                                               </div>
                                                                 </center>
                                                            </div>
                                                            <div class="col-md-7 col-sm-8 col-xs-7" style="margin-top: -1em;">
                                                                <p class="text-xxl">{{$speedtext}}</p>
                                                                <p style="margin-top: -1em;">The Google speed score for this website is {{$speed}}/100. Optimization required.</p>
                                                                <p> <img src="{{URL::asset('icons/error.png')}}" width="20px"> {{$speedMinus}} error(s) found<br> <img src="{{URL::asset('icons/tick.png')}}" width="20px"> {{$speedPlus}} rule(s) passed</p>
                                                                <button type="button" class="btn ink-reaction btn-flat btn-primary">Learn More</button>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-2"></div>
                                                </div>

											</div><!--end .card-body -->
										</div><!--end .col -->
									</div><!--end .row -->


								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END SITE ACTIVITY -->
@stop

@section('jscript')

@stop
