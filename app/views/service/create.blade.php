@extends('layout.default')



    @section('content')


                   

                    
                   

                         <div class="example-box">
                             <div class="example-code">

                                @if(Session::has('message'))
        
                                    <div class="col-md-4">

                                        <div class="infobox success-bg">

                                            {{ Session::get('message') }}

                                        </div>

                                    </div>

                                 @endif

                            
                                 <div class="example-box">
    <div class="example-code clearfix">

        <form action="#" class="col-md-10 center-margin" method="">

            <div class="row">
                <div class="col-md-6">

                    <div class="form-row">
                        <div class="form-label col-md-3">
                            <label for="">
                                លេខាទទួលពាក្យ
                            </label>
                        </div>
                        <div class="form-input col-md-9">
                            <div class="input-append-wrapper">
                                <div class="input-append primary-bg">
                                    <i class="glyph-icon icon-lock"></i>
                                </div>
                                <div class="append-left">
                                    <input type="text" placeholder="Left icon" name="" id="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-label col-md-3">
                            <label for="">
                                .ui-state-default
                            </label>
                        </div>
                        <div class="form-input col-md-9">
                            <div class="input-append-wrapper">
                                <div class="input-append ui-state-default">
                                    <i class="glyph-icon icon-lock"></i>
                                </div>
                                <div class="append-left">
                                    <input type="text" placeholder="Left icon" name="" id="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="divider"></div>

                    <div class="form-row">
                        <div class="form-label col-md-3">
                            <label for="">
                                .bg-white
                            </label>
                        </div>
                        <div class="form-input col-md-9">
                            <div class="input-append-wrapper">
                                <div class="input-append bg-gray">
                                    <i class="glyph-icon icon-lock"></i>
                                </div>
                                <div class="append-left">
                                    <input type="text" placeholder="Left icon" name="" id="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-label">
                            <label for="datepicker2">
                                Datepicker example:
                            </label>
                        </div>
                        <div class="form-input">
                            <input type="text" class="datepicker" id="datepicker2" name="datepicker2">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-label col-md-3">
                            <label for="">
                                .bg-gray-alt
                            </label>
                        </div>
                        <div class="form-input col-md-9">
                            <div class="input-append-wrapper">
                                <div class="input-append bg-gray-alt">
                                    $
                                </div>
                                <div class="append-left">
                                    <input type="text" placeholder="Left text" name="" id="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-label col-md-3">
                            <label for="">
                                .bg-black
                            </label>
                        </div>
                        <div class="form-input col-md-9">
                            <div class="input-append-wrapper">
                                <div class="input-append bg-black">
                                    <i class="glyph-icon icon-lock"></i>
                                </div>
                                <div class="append-left">
                                    <input type="text" placeholder="Left icon" name="" id="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-label col-md-3">
                            <label for="">
                                .bg-purple
                            </label>
                        </div>
                        <div class="form-input col-md-9">
                            <div class="input-append-wrapper">
                                <div class="input-append bg-purple">
                                    <i class="glyph-icon icon-lock"></i>
                                </div>
                                <div class="append-left">
                                    <input type="text" placeholder="Left icon" name="" id="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row pad0B">
                        <div class="form-label col-md-3">
                            <label for="">
                                .bg-green
                            </label>
                        </div>
                        <div class="form-input col-md-9">
                            <div class="input-append-wrapper">
                                <div class="input-append bg-green">
                                    <i class="glyph-icon icon-lock"></i>
                                </div>
                                <div class="append-left">
                                    <input type="text" placeholder="Left icon" name="" id="">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">

                    <div class="form-row">
                        <div class="form-label col-md-3">
                            <label for="">
                                .primary-bg
                            </label>
                        </div>
                        <div class="form-input col-md-9">
                            <div class="input-append-wrapper input-append-right">
                                <div class="input-append primary-bg">
                                    <i class="glyph-icon icon-lock"></i>
                                </div>
                                <div class="append-right">
                                    <input type="text" placeholder="Right icon" name="" id="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-label col-md-3">
                            <label for="">
                                .ui-state-default
                            </label>
                        </div>
                        <div class="form-input col-md-9">
                            <div class="input-append-wrapper input-append-right">
                                <div class="input-append ui-state-default">
                                    <i class="glyph-icon icon-lock"></i>
                                </div>
                                <div class="append-right">
                                    <input type="text" placeholder="Right icon" name="" id="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="divider"></div>

                    <div class="form-row">
                        <div class="form-label col-md-3">
                            <label for="">
                                .bg-white
                            </label>
                        </div>
                        <div class="form-input col-md-9">
                            <div class="input-append-wrapper input-append-right">
                                <div class="input-append bg-gray">
                                    <i class="glyph-icon icon-lock"></i>
                                </div>
                                <div class="append-right">
                                    <input type="text" placeholder="Right icon" name="" id="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-label col-md-3">
                            <label for="">
                                .bg-gray
                            </label>
                        </div>
                        <div class="form-input col-md-9">
                            <div class="input-append-wrapper input-append-right">
                                <div class="input-append bg-gray">
                                    12.
                                </div>
                                <div class="append-right">
                                    <input type="text" placeholder="Right text" name="" id="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-label col-md-3">
                            <label for="">
                                .bg-gray-alt
                            </label>
                        </div>
                        <div class="form-input col-md-9">
                            <div class="input-append-wrapper input-append-right">
                                <div class="input-append bg-gray-alt">
                                    $
                                </div>
                                <div class="append-right">
                                    <input type="text" placeholder="Right text" name="" id="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-label col-md-3">
                            <label for="">
                                .bg-black
                            </label>
                        </div>
                        <div class="form-input col-md-9">
                            <div class="input-append-wrapper input-append-right">
                                <div class="input-append bg-black">
                                    <i class="glyph-icon icon-lock"></i>
                                </div>
                                <div class="append-right">
                                    <input type="text" placeholder="Right icon" name="" id="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-label col-md-3">
                            <label for="">
                                .bg-purple
                            </label>
                        </div>
                        <div class="form-input col-md-9">
                            <div class="input-append-wrapper input-append-right">
                                <div class="input-append bg-purple">
                                    <i class="glyph-icon icon-lock"></i>
                                </div>
                                <div class="append-right">
                                    <input type="text" placeholder="Right icon" name="" id="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row pad0B">
                        <div class="form-label col-md-3">
                            <label for="">
                                .bg-green
                            </label>
                        </div>
                        <div class="form-input col-md-9">
                            <div class="input-append-wrapper input-append-right">
                                <div class="input-append bg-green">
                                    <i class="glyph-icon icon-lock"></i>
                                </div>
                                <div class="append-right">
                                    <input type="text" placeholder="Right icon" name="" id="">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </form>

    </div>
    
</div>
                                    
                             </div>
    
                        </div>



    @stop
