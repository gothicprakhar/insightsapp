@extends('layouts.main')
@section('content')

<!-- BEGIN SITE ACTIVITY -->
<div class="col-md-12">
    <div class="card " style="min-height: 85vh;">
	   <div class="row">
		<div class="col-md-12">
		    <div class="card-body">
                <div class="row" style="margin-top: 15vh;">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <p class="text-xxl">How well does my website work on mobile?</p>
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3"></div>
                        <div class="col-md-4">
                            <form class="form" action="analyze" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" id="regular1">
                                    <label for="regular1">Website URL</label>
                                </div>
                                <div><strong id="error" style="color:red"></strong></div>
                        </div>
                        <div class="col-md-2" style="padding-top: 1em;">
                            <input type="submit" class="btn ink-reaction btn-raised btn-primary" style="width: 100%;" value="ANALYZE" id="submitt">
                        </form>
                    </div>







                                                    </div>
                                                    <div class="col-md-3"></div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-3"></div>
                                                    <div class="col-md-6 col-xs-10 col-xs-offset-1 col-md-offset-0">
                                                        <div class="alert alert-callout alert-warning" role="alert">
                                                            Our mobile analysis will check with Google to see if your website is mobile friendly and mobile fast. Based on those results, we'll give you specific feedback on how to improve your website's mobile performance.
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3"></div>
                                                </div>

											</div><!--end .card-body -->
										</div><!--end .col -->
									</div><!--end .row -->


								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END SITE ACTIVITY -->
@stop

@section('jscript')
<script>

    function sendreq() {
        console.log("a");
    }
</script>
@stop
