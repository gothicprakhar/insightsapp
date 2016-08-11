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
                                                        <form class="form">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="regular1">
                                                                <label for="regular1">Website URL</label>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="col-md-2" style="padding-top: 1em;">
                                                        <button type="button" class="btn ink-reaction btn-raised btn-primary" style="width: 100%;">ANALYZE</button>
                                                    </div>
                                                    <div class="col-md-3"></div>
                                                </div>
                                                <br><br>
                                                <div class="row">
                                                    <div class="col-md-2"></div>
                                                    <div class="col-md-3">
                                                        <img src="{{URL::asset('img/droid2.png')}}" alt="">
                                                    </div>
                                                    <div class="col-md-5">

                                                        <div class="row">
                                                            <div class="col-md-1"></div>
                                                            <div class="col-md-4">
                                                                <div class="tile-icon" style="background-color: #e0e0e0; width: 10em; height: 10em; border-radius: 100px; padding-top: 0.3em; text-align: center;">
                                                                    <p class="text-xxxxl">{{$speed}}</p>
                                                               </div>
                                                            </div>
                                                            <div class="col-md-7" style="margin-top: -1em;">
                                                                <p class="text-xxl">Mobile-friendly</p>
                                                                <p style="margin-top: -1em;">The Google Usability score for this website is 82/100. Satisfies basic usability test.</p>
                                                                <p>2 errors found<br>3 rules assed</p>
                                                                <button type="button" class="btn ink-reaction btn-flat btn-primary">Learn More</button>
                                                            </div>
                                                        </div>

                                                        <br><br>

                                                        <div class="row">
                                                            <div class="col-md-1"></div>
                                                            <div class="col-md-4">
                                                                <div class="tile-icon" style="background-color: #e0e0e0; width: 10em; height: 10em; border-radius: 100px; padding-top: 0.3em; text-align: center;">
                                                                    <p class="text-xxxxl">{{$usability}}</p>
                                                               </div>
                                                            </div>
                                                            <div class="col-md-7" style="margin-top: -1em;">
                                                                <p class="text-xxl">Mobile-friendly</p>
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
